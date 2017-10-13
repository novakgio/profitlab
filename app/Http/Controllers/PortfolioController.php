<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helper;
use App\PortfolioCategory;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        

        $portfolios = Portfolio::all();

        return view('admin.allportfolios',compact('portfolios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolioCategories = PortfolioCategory::all();
        return view('admin.addPortfolio',compact('portfolioCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'body'=>'required|min:30',
            'picture'=>'required',
            'portfolio_category_id'=>'required'
        ]);

        $portfolio = Helper::makeObject(new Portfolio(),$request,"portfolios");
        
        $fileName = time().'.'.$request->file('picture')->getClientOriginalExtension();
        $destinationPath = public_path('images/portfolio');
        $request->file('picture')->move($destinationPath,$fileName);
       
        $portfolio->picture = $fileName;

           

        $portfolio->save();
        session()->flash('addblog', 'ბლოგი წარმატებით დაემატა');
        return redirect()->route('admin_side.portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $portfolioCategories  = PortfolioCategory::pluck('name','id');
        $portfolio = portfolio::findOrFail($id);
        

        return view('admin.editPortfolio',compact('portfolio','portfolioCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'body'=>'required|min:30',
            'picture'=>'required',
            'portfolio_category_id'=>'required'
        ]);

        
         $portfolio = Helper::makeObject(Portfolio::findOrFail($id),$request,"portfolios");

        if($request->hasFile('picture')){
            $newFile =time().'.'.$request->file('picture')->getClientOriginalExtension();
            $destinationPath = public_path('images/portfolio');
            $request->file('picture')->move($destinationPath,$newFile);
            \File::delete(public_path('images/portfolio/'.$portfolio->picture));
            $portfolio->picture = $newFile;
        }
       
        
        $portfolio->save();

        return redirect()->route('admin_side.portfolio.index');


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio =  Portfolio::findOrFail($id);
        \File::delete(public_path('images/portfolio/'.$portfolio->picture));
        $portfolio->delete();
        return redirect()->route('admin_side.portfolio.index'); 
    }
}
