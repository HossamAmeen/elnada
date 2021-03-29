<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Article;
use App\Models\Service;
use App\Models\Operation;
use Mail;
class HomeController extends Controller
{
    protected $lang;  
    public function __construct()
    {
        // if(  request()->segment(1) === null ) {
        //     $this->lang = "ar";
        // }
        // else
        // $this->lang = request()->segment(1);
       
    }
    public  function  change_language($lang){
      
        $prefUrl = url()->previous() ; 
         if($lang == "en")
 
             $rout =   str_replace("ar/","en/",url()->previous());
 
         else
             $rout =   str_replace("en/","ar/",url()->previous());
        
         if(  request()->segment(2) === null ) {
             
            if(  request()->segment(1) === "ar" ) {
                return redirect()->route('en.index');
            }
         }
        //  return $prefUrl;
         if( $rout == url()->previous()){
             $rout = $rout . $lang;
             //return $rout;
         }
        //  return strripos($prefUrl , '/') ;
        // return $rout;
        //  return strlen($rout);
        // if(strripos($rout , '/')+3 == strlen($rout)){
        //     $rout = $rout .'/index';
        // }
        //  if($rout == )
    
         return redirect($rout);
     }
     public function index()
     {
        return redirect()->route('home');
     }
     
    public function home()
    {
        
        $articles = Article::all()->sortByDesc("id")->take(6);
        $services = Service::all()->sortByDesc("id")->take(4);

        if( $this->lang  == "en" ){
            $pageTitle  = "Home";
        }
        else
        {
            $pageTitle = "الرئيسيه";
        }
        
        return view("front-end.index" , compact('pageTitle'  ,'articles', 'services'));
    }
    public function article($id){
        $article = Article::find($id);
        if( strlen($article->title)> 50 )
        $pageTitle  = $article->title;
        else
        $pageTitle  = substr($article->title , 0 , 50 );     
        return view('front-end.article', compact('pageTitle' , 'article'));
    }
    public function articles($type){
        $articles = Article::where('type',$type)->get(); 
   
        return view('front-end.articles', compact('type' , 'articles'));
    }
  
}
