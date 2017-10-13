<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortfolioCategory;
use App\Http\Requests;
use App\Helper;
class PortfolioCategoryController extends Controller
{
    public function index()
    {
        

        $portfolios = PortfolioCategory::all();
        return view('admin.addPortfolioCategory',compact('portfolios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfoliosCategories = PortfolioCategory::all();
        return view('admin.addPortfolioCategory',compact('portfoliosCategories')); 
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
            'name'=>'required'
        ]);

        $portfolio = Helper::makeObject(new PortfolioCategory(),$request,"portfolios");
        
        

      	$portfolio->save();
        session()->flash('addblog', 'ბლოგი წარმატებით დაემატა');
        return redirect()->route('admin_side.portfoliocategory.create');
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
       $portfolioCategory  = PortfolioCategory::findOrFail($id);
      
       
        return view('admin.editPortfolioCategory',compact('portfolioCategory'));
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
            'name'=>'required'
        ]);

        
        $portfolio = Helper::makeObject(PortfolioCategory::findOrFail($id),$request,"portfolios");

        
        $portfolio->save();

        return redirect()->route('admin_side.portfoliocategory.create');


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PortfolioCategory::findOrFail($id)->delete();
        Portfolio::where('portfolio_category_id','=',$id)->delete();
        return redirect()->route('admin_side.portfoliocategory.create'); 
    }

    
}
