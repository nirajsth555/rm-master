<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use App\aboutcompany;
use App\teammember;
use App\categorytable;
use App\projecttable;
use App\contactustable;
use App\informationtable;
use App\newstable;
use View;

class usercontroller extends Controller
{
    //
    public function __construct()
  {
    //its just a dummy data object.

    $project = projecttable::all();
    $information= informationtable::all();
    $data=array(
        'p'=>$project,
        'i'=>$information,
        );
    // Sharing is caring
    View::share('d', $data);
  }
    public function getIndex(){
        $project= DB::table('projecttables')->get();
        $news= DB::table('newstables')->orderBy('created_at','desc')->limit(3)->get();
        
    	return view('user.index',array('p'=>$project,'n'=>$news));
    }

    public function getAboutus(){
    	$obj= DB::table('aboutcompanies')->get();
    	return view('user.about',array('result'=>$obj));

    }

    public function getOurteam(){
    	$obj=DB::table('teammembers')->get();
    	return view('user.team',array('result'=>$obj));

    }

    public function getSingleteam($id){
        $obj=teammember::find($id);
        return view('user.single-team',array('result'=>$obj));
    }

    public function getNews(Request $request){
        $obj= DB::table('newstables')->orderBy('created_at','desc')->paginate('5');
        $category= DB::table('categorytables')->get();
        //return view('user.news',array('result'=>$obj,'cat'=>$category));
        if ($request->ajax()){
            //Return the view consisting of the news items and pagination buttons in json format if the request is from ajax
            return Response::json(view('user.newsitem',compact('obj','category'))->render());
        }
        return view('user.news',compact('obj','category'));
    }

    public function getNewssearch(Request $request){
        if ($request->ajax()){
            //Search for the news which match with the search keyword supplied and return those news in json format
            $obj= DB::table('newstables')->where('english_title','LIKE','%'.$request->search."%")->get();
            return Response::json($obj->toArray());
        }

    }

    public function getSinglenews($id){
        $news= DB::table('newstables')->orderBy('created_at','desc')->limit(3)->get();
        $category=DB::table('categorytables')->get();
        $obj= newstable::find($id);
        //$news= DB::table('newstables')->orderBy('created_at','desc')->take(3);
        return view('user.single-news',array('result'=>$obj,'recent'=>$news,'allcats'=>$category));
    }

    public function getSingleproject($id){
        $project= DB::table('projecttables')->orderBy('created_at','desc')->limit(5)->get();
        $obj= projecttable::find($id);
        return view('user.single-project',array('result'=>$obj,'p'=>$project));
    }

    public function getAllprojects(Request $request){
        $obj= DB::table('projecttables')->orderBy('created_at','desc')->paginate('5');
       
        //return view('user.news',array('result'=>$obj,'cat'=>$category));
        if ($request->ajax()){
            //Return the view consisting of the news items and pagination buttons in json format if the request is from ajax
            return Response::json(view('user.projectitem',compact('obj'))->render());
        }
        return view('user.project',compact('obj'));

    }

    public function getProjectsearch(Request $request){
        if($request->ajax()){
            $obj= DB::table('projecttables')->where('english_title','LIKE','%'.$request->search."%")->get();
            return Response::json($obj->toArray());
        }
    }

    public function getContactform(){
        $obj= DB::table('informationtables')->get();
        return view('user.contact',array('result'=>$obj));
    }

    public function postContactform(Request $request){
        $obj= new contactustable;
        $obj->client_name= $request->get('client_name');
        $obj->email_address= $request->get('client_email');
        $obj->message= $request->get('message');
        $result= $obj->save();
        if($result){
          return response()->json(['message'=>'Thank You for your message']);
        
        }
        else{
            return response()->json(['error'=>'Your message could not be delivered. Please Try Again']);
        }


    }


}
