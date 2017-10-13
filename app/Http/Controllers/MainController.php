<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\Blog;
use App\BlogCategory;
use App\Portfolio;
use App\News;
use App\Subscriber;
use Session;
use DB;
use App\PortfolioCategory;
use App\Http\Requests;


class MainController extends Controller
{
    

    public function changeLanguage($name){
        if (array_key_exists($name, Config::get('languages'))) {
            Session::put('applocale', $name);
        }
        return redirect()->back();
    }
    public function main(){
        $portfolios = Portfolio::all();
        $portfolioCategories = PortfolioCategory::all();
        $blogs = Blog::orderBy('created_at','desc')->take(3)->get();
        return view('pages.index',compact('portfolios','portfolioCategories','blogs'));
    }
	public function about(){
    	return view('pages.about');
    }

    public function marketing(){
    	return view('pages.marketing');
    }
    public function branding(){
    	return view('pages.branding');
    }
	
	public function peopleRelation(){
    	return view('pages.peoplerelation');
    }
    public function socialResponsibility(){
    	return view('pages.csrresponsiblity');
    }
    public function corporateCommunication(){
    	return view('pages.corporatecommunication');
    }
    public function socialMarketing(){
    	return view('pages.socialmedia');
    }
    public function digitalMarketing(){
    	return view('pages.digitalmarketing');
    }
    public function design(){
    	return view('pages.design');
    }
    public function contact(){
        return view('pages.contact');
    }

    public function showCarrier(){
        return view('pages.carrier');
    }

    //This Is For Blogs

    public function getBlogPosts(){
        $data = $this->getRightSideBlog();
        $data['blogs'] = Blog::paginate(10);
        $data['blogs_years'] = $this->getObjectYears(new Blog());
        return view('pages.blogs')->with($data);
    }
     public function blogDetails($id){
        $data = $this->getRightSideBlog();
        $data['blog'] = Blog::findOrFail($id);
        $data['blogs_years'] = $this->getObjectYears(new News());
        return view('pages.blog_details')->with($data);
    }
    public function getCategoryBlogs($id){
        $data = $this->getRightSideBlog();
        $data['blogs'] = Blog::where('blog_category_id','=',$id)->paginate(10);
        $data['blogs_years'] = $this->getObjectYears(new News());
        return view('pages.blogs')->with($data);
    }
    public function search_blog(Request $request){
        $data = $this->getRightSideBlog();
        $data['blogs'] =Blog::where('title', 'like', $request->search_blog.'%')->paginate(10);;
        return view('pages.blogs')->with($data);
    }
    public function getBlogsByYear($year){
        $data = $this->getRightSideBlog();
        $data['blogs'] = Blog::where('created_at','LIKE','2017%')->paginate(10);
        $data['blogs_years'] = $this->getObjectYears(new Blog());
        return view('pages.blogs')->with($data);
    }



   
   

    //This is for Portfolio

    public function showAllProjects(){
        $portfolios = Portfolio::all();
        $portfolioCategories = PortfolioCategory::all();
        return view('pages.allportfolio',compact('portfolios','portfolioCategories'));
    }

    public function projectDetails($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('pages.portfolio_details',compact('portfolio'));
    }


    //This is for news

    public function showAllNews(){
       
        $data = $this->getRightSideBlog();
        $data['news_years'] =  $this->getObjectYears(new News());
        $data['news'] = News::paginate(10);
        return view('pages.allnews')->with($data);
    }

    public function newsDetails($id){
        $data = $this->getRightSideBlog();
        $data['news'] = News::findOrFail($id);
         $data['news_years'] = $this->getObjectYears(new News());
        return view('pages.news_details')->with($data);
    }


    
    public function getNewsByYear($year){
        $data = $this->getRightSideBlog();
        $data['news'] = News::where('created_at','LIKE','2017%')->paginate(10);
        $data['news_years'] = $this->getObjectYears(new News());

        return view('pages.allnews')->with($data);
    }
   



   //helpers

    public function getRightSideBlog(){
        return 
            [
                'blogCategories'=>BlogCategory::all(),
                'recentBlogs'=>Blog::orderBy('created_at','desc')->take(3)->get(),
                'photo_galleries'=>Portfolio::get(['id','picture'])
            ];

    }

   public function getObjectYears($model){
        return $model::select(DB::raw('count(id) as `data`'), 
                                DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  
                                 DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                                ->groupby('year','month')->get();
   }


   public function getSubscriber(Request $request){

        $if_exist = Subscriber::where('email','=',$request->email)->first();
        if($if_exist!=null){
            $status =\Lang::get("all.თქვენ უკვე გამოწერილი გაქვთ არხი");
            $error =409;
        }
        else{
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();
            $status = \Lang::get("all.თქვენ წარმატებით გამოიწერეთ ჩვენი არხი");
            $error=200;
        }
        
            
        return compact('status',"error");
        

   }




   
}
