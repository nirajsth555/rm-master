<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\aboutcompany;
use App\teammember;
use App\categorytable;
use App\newstable;
use App\projecttable;
use App\informationtable;
use App\sponsortable;
use App\sliderimagetable;
use Session;
use Image;
// use DB;
use Validator;
use Illuminate\Support\Facades\Input;	

class admincontroller extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function getIndexofadmin(){
    	return view('admin.pages.mainpage');
    }
    

    //start of content
    public function getAddaboutcontent(){
    	return view('admin.pages.add_about_us');
    }

    public function postAboutcontent(Request $request){
    	$obj= new aboutcompany;
    	$obj->about_us_content= $request->get('about_us');
    	$result=  $obj->save();
    	if($result){
    		$request->session()->flash('success_message','Content Succesfully Added');
    		return redirect('see-content');
    	}
    	else{
    		$request->session()->flash('success_message','Content could not be added.Please try again');
    		return redirect('see-content');

    	}


    }

    public function getSeecontent(){
    	$obj= DB::table('aboutcompanies')->get();
    	return view('admin.pages.see_about_us',array('value'=>$obj));
    }

    public function getEditcontent($id){
    	$obj= aboutcompany::find($id);
    	return view('admin.pages.edit_aboutus',array('id'=>$obj));
    }

    public function postEditcontent($id){
    	$obj= aboutcompany::find($id);
    	$obj->about_us_content= Input::get('about_us');
    	$obj->save();
    	return redirect('see-content')->with('success_message','Content succesfully edited');
    }

    public function getDeletecontent($id){
    	$obj= aboutcompany::find($id);
    	$obj->delete();
    	return redirect('see-content')->with('success_message','Content succesfully deleted');


    }

    //endofcontent

    //start of team member
    public function getAddteammember(){
    	return view('admin.pages.addteam');
    }

    public function postAddteammember(Request $request){
    		$obj= new teammember;

    		 $validation= Validator::make($request->all(),[
        	'fullname'=>'required|Min:3|Max:80',
        	
        	'image'=>'required|image'
        	
        	],['image.required'=>'Please upload a image',
            'fullname.required'=>'Name is required']);

            if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            }
        	
        	





    		$obj->fullname= $request->get('fullname');
    		$obj->position= $request->get('position');
    		$obj->description= $request->get('description');
    		$obj->facebook_link= $request->get('fb');
    		$obj->twitter_link= $request->get('twit');
    		$obj->linked_link= $request->get('link');
    		$file= $request->file('image');
    		$filename= $file->getClientOriginalName();
            $location="public/teamimage/";
            $file->move($location,$filename);
            $image=$location.$filename;
            $obj->image= $image;

            $result= $obj->save();
            if($result){
            	return redirect('add-team')->with('success_message','Team Member succesfully Added');
            }

            else{
            	return redirect('add-team')->with('success_message','Sorry! Team Memeber could not be added. Please try again');
            }




    }

    public function getSeeteammembers(){
        $obj= DB::table('teammembers')->get();
        return view('admin.pages.seeteam',array('result'=>$obj));
    }

    public function getDeleteteam($id){
        $obj=teammember::find($id);
        $obj->delete();
        return redirect('see-team')->with('success_message','Team member succesfully deleted');

    }

    public function getEditteam($id){
        $obj= teammember::find($id);
        return view('admin.pages.editteam',array('result'=>$obj));
    }

    public function postEditteam($id){
        $obj= teammember::find($id);
        $obj->fullname= Input::get('fullname');
        $obj->position= Input::get('position');
        $obj->description= Input::get('description');
        $obj->facebook_link=Input::get('fb');
        $obj->twitter_link= Input::get('twit');
        $obj->linked_link= Input::get('link');
        $file= Input::file('image');
        if (!empty($file)) {
        $filename= $file->getClientOriginalName();
        $location="public/teamimage/";
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->image = $image;
    }

    $result= $obj->save();
    if($result){
        return redirect('see-team')->with('success_message','Succesfully Edited');
    }
    else{
        return redirect('see-team')->with('success_message','Could not be edited at the moment');
    }

    }

    //seeteammember
    //editteammmeber
    //deleteteamember

    


    //end of team member

    //start of category addding
    
    public function getAddcategory(){
        return view('admin.pages.addcategory');
    }
    public function postAddcategory(Request $request){
        $obj= new categorytable;
        $validation= Validator::make($request->all(),[
            'categoryname'=>'required|unique:categorytables,category_name'
            
            
            
            ],['categoryname.required'=>'Please enter a category name',
            'categoryname.unique'=>'Category name already in use']);

            if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            }

        $obj->category_name= $request->get('categoryname');
        $result= $obj->save();
        if($result){
            return redirect('add-category')->with('success_message','Category succesfully added');
        }
        else{
            return redirect('add-category')->with('success_message','Sorry! Category couldnot be added. PLeasae try again');
        }

    }

    public function getSeecategory(){
        $obj= DB::table('categorytables')->get();
        return view('admin.pages.seecategory',array('result'=>$obj));
    }

    public function getEditcategory($id){
        $obj= categorytable::find($id);
        return view('admin.pages.editcategory',array('id'=>$obj));    
    
    }

    public function postEditcategory($id){
        $obj= categorytable::find($id);
        $validation= Validator::make($request->all(),[
            'categoryname'=>'required|unique:categorytables,category_name'
            
            
            
            ],['categoryname.required'=>'Please enter a category name',
            'categoryname.unique'=>'Category name already in use']);
         if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            }
        $obj->category_name= Input::get('categoryname');
        $obj->save();
        return redirect('see-category')->with('success_message','Category name succesfully edited');

    }

      public function getDeletecategory($id){
        $obj= categorytable::find($id);
        $obj->delete();
        return redirect('see-category')->with('success_message','Category name succesfully deleted');


    }



    //end of news category

    //start of adding news
    public function getAddnews(){
        //$obj= DB::table('categorytables')->orderBy('category_name','asc')->get();
        return view('admin.pages.addnews');
    }

    public function postAddnews(Request $request){
        $obj= new newstable;
        $validation= Validator::make($request->all(),
            [
                'eng_title'=>'required',
                'nep_title'=>'required',
                
                'eng_editor'=>'required',
                'nep_editor'=>'required',
                'image'=>'required|dimensions:width=370, height=220'
            ],
            [
                'eng_title.required'=>'Please write title in english',
                'nep_title.required'=>'Please write title in nepli',
                'eng_editor.required'=>'Please write full news in english',
                'nep_editor.required'=>'Please write full news in nepali',
                'image.required'=>'Please upload image',
                'image.dimensions'=>'Please select image of 370*220(width*height)'

            ]
        );  

        if($validation->fails()){
            return response()->json(['error'=>$validation->errors()->all()]);
        }


        $obj->english_title= $request->get('eng_title');
        $obj->nepali_title= $request->get('nep_title');
        
        $obj->english_description= $request->get('eng_editor');
        $obj->nepali_description= $request->get('nep_editor');
        $file= $request->file('image');
        $filename= $file->getClientOriginalName();
        $location="public/newsimage/";
        //$banner= Image::make($file->getRealPath());
        //$banner->resize(100,100,function($constraint)){
            //$constraint->aspectRatio();
            
        //}
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->image = $image;
        //The created new model show be saved and success message should be sent as json response
        if ($obj->save()){
            return redirect('add-news')->with('success_message','News was succesfully added');
            //return response()->json(['message'=>'News added']);
        }else{
            //If something goes wrong during save, show error
            return response()->json(['error'=>'The news could not be added']);
        }
        

    }

    public function getSeenews(){
        $national=DB::table('newstables')->orderBy('created_at','desc')->get();
        return view('admin.pages.seenews',array('result'=>$national));
    }

    public function getDeletenews($id){
        $obj= newstable::find($id);
        $obj->delete();
        return redirect('see-news')->with('success_message','News was succesfully deleted');
        //if($obj->delete()){
            //return response()->json(['message'=>'News was deleted']);
        //}
        //else{
            //return response()->json(['error'=>'soory it could not be deleted']);
        //}
    }

    public function getEditnews($id){
       
        $obj=newstable::where('id',$id)->with('ormcategory')->get();
        //return $obj;
        //$category= DB::table('categorytables')->orderBy('category_name','asc')->get();
        return view('admin.pages.editnews',array('result'=>$obj));
        
    }

    public function postEditnews($id){
        $obj= newstable::find($id);
        $obj->english_title=Input::get('eng_title');
        $obj->nepali_title= Input::get('nep_title');
        
        $obj->english_description=Input::get('eng_editor');
        $obj->nepali_description=Input::get('nep_editor');
        $file= Input::file('image');
        if (!empty($file)) {
        $filename= $file->getClientOriginalName();
        $location="public/newsimage/";
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->image = $image;
            
        }
        
        
        $result= $obj->save();
        if($result){
            return redirect('see-news')->with('success_message','News succesfully Edited');
        }
        else{
            return redirect()->back()->with('success_message','Sorry new could not be edited.PLease try again');
        }
    }

    public function getSeesinglenews($id){
        $obj=newstable::where('id',$id)->with('ormcategory')->get();
        return view('admin.pages.viewnews',array('result'=>$obj));
    }

    //end of news in admin

    //start of project
    public function getAddproject(){
        return view('admin.pages.addproject');
    }

    public function postAddproject(Request $request){
        $obj= new projecttable;
        $validation= Validator::make($request->all(),
            [
                'eng_title'=>'required',
                'nep_title'=>'required',
                'eng_editor'=>'required',
                'nep_editor'=>'required',
                'image'=>'required|dimensions:width=3902, height=1372'
                
            ],
            [
                'eng_title.required'=>'Please add title in english',
                'nep_title.required'=>'Please add title in nepali',
                'eng_editor.required'=>'Please add description in english',
                'nep_editor.required'=>'Please add description in nepali',
                'image.required'=>'Please upload a image',
                'image.dimensions'=>'Please upload image of dimension 3902*1372'

            ]
        );  

        if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            //return response()->json(['error'=>$validation->errors()->all()]);
        }

        $obj->english_title= $request->get('eng_title');
        $obj->nepali_title= $request->get('nep_title');
        $obj->english_description= $request->get('eng_editor');
        $obj->nepali_description= $request->get('nep_editor');
        $file= $request->file('image');
        $filename= $file->getClientOriginalName();
        $location="public/projectimage/";
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->project_image = $image;
        if ($obj->save()){
            return redirect('add-project')->with('success_message','New Project Succesfully Inserted');
            //return response()->json(['message'=>'Project was succesfully added']);
        }else{
            return redirect('add-project')->with('success_message','Project Could not be added');
            //return response()->json(['error'=>'Sorry Project could not be added.Please try again']);
        }
        



    }

    public function getSeeproject(){
        $obj= DB::table('projecttables')->orderBy('created_at','desc')->get();
        return view('admin.pages.seeproject',array('result'=>$obj));
    }

    public function getDeleteproject($id){
        $obj=projecttable::find($id);
        $obj->delete();
        return redirect('see-all-project')->with('success_message','Project has been succesfully deleted');

    }

    public function getEditproject($id){
        $obj= projecttable::find($id);
        return view('admin.pages.editproject',array('result'=>$obj));
    }
       
    public function postEditproject($id){
        $obj= projecttable::find($id);
        $validation= Validator::make(Input::all(),
            [
                'eng_title'=>'required',
                'nep_title'=>'required',
                'eng_editor'=>'required',
                'nep_editor'=>'required',
                'image'=>'required|dimensions:width=3902, height=1372'
                
            ],
            [
                'eng_title.required'=>'Please add title in english',
                'nep_title.required'=>'Please add title in nepali',
                'eng_editor.required'=>'Please add description in english',
                'nep_editor.required'=>'Please add description in nepali',
                'image.required'=>'Please upload a image',
                'image.dimensions'=>'Please upload image of dimension 3902*1372'

            ]
        );  

        if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            //return response()->json(['error'=>$validation->errors()->all()]);
        $obj->english_title=Input::get('eng_title');
        $obj->nepali_title=Input::get('nep_title');
        $obj->english_description=Input::get('eng_editor');
        $obj->nepali_description=Input::get('nep_editor');
        $file=Input::file('image');
        if (!empty($file)){
        $filename= $file->getClientOriginalName();
        $location="public/projectimage/";
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->project_image = $image;
        }

        $result= $obj->save();
        if($result){
            return redirect('see-all-project')->with('success_message','Project succesfully edited');
        }
        else{
            return redirect()->back()->with('success_message','Project could not be edited. Please try again later');
        }

    }
}

    //end of project


public function getAddinformation(){
    return view('admin.pages.addinformation');
}

public function postAddinformation(Request $request){
    $obj= new informationtable;
    $obj->phone_number= $request->get('phone_number');
    $obj->address= $request->get('address');
    $obj->email= $request->get('email');
    $obj->facebook_link= $request->get('facebook');
    $obj->twitter_link= $request->get('twitter');
    $obj->instagram_link= $request->get('instagram');
    if ($obj->save()){
            //return response()->json(['message'=>'News added']);
            return redirect('add-info')->with('success_message','Information was succesfully added');
        }
    else{
            
            //return response()->json(['error'=>'The news could not be added']);
            return redirect('add-info')->with('success_message','Information could not be added'); 
        }



}

public function getSeeinformation(){
    $obj=DB::table('informationtables')->get();
    return view('admin.pages.seeinformation',array('result'=>$obj));

}

public function getDeleteinformation($id){
    $obj= informationtable::find($id);
    $obj->delete();
    return redirect('see-info')->with('success_message','Information succesfully deleted');

}

public function getEditinformation($id){
    $obj= informationtable::find($id);
    return view('admin.pages.editinfo',array('result'=>$obj));
}

public function postEditinformation($id){
    $obj= informationtable::find($id);
    $obj->phone_number=Input::get('phone_number');
    $obj->address= Input::get('address');
    $obj->email= Input::get('email');
    $obj->facebook_link= Input::get('facebook');
    $obj->twitter_link= Input::get('twitter');
    $obj->instagram_link= Input::get('instagram');
    $result= $obj->save();
    if($result){
        return redirect('see-info')->with('success_message','Information Succesfully Edited');
    }
    else{
        return redirect('see-info')->with('success_message','Information Could not be Edited');
    }

}
//informtion end




public function getAddsponsor(){
    return view('admin.pages.addsponsor');
}

public function postAddsponsor(Request $request){
    $obj= new sponsortable;
    $validation= Validator::make($request->all(),[
            'partner_name'=>'required',
            
            'weblink'=>'required',
            'image'=>'required','dimensions:width=270,height=105'
            
            ],['partner_name.required'=>'Please specify partner name',
            'weblink.required'=>'Please specify website of partner',
            'image.required'=>'Please upload image ',
            'image.dimensions'=>'Please select image of 270*105(width*height)'
            ]);

            if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            }


    $obj->partner_name = $request->get('partner_name');
    $obj->website_link= $request->get('weblink');
    $file= $request->file('image');
    $filename= $file->getClientOriginalName();
    $location="public/sponsorimage/";
    $file->move($location,$filename);
    $image=$location.$filename;
    $obj->partner_image= $image;

    
    $result= $obj->save();
    if($result){
        return redirect('add-partner')->with('success_message','Sponsor succesfully added');
    }
    else{
        return redirect('add-partner')->with('success_message','Sorry Sponsor could not be added at the moment');
    }


}

public function getSeesponsor(){
    $obj= DB::table('partnertables')->get();
    return view('admin.pages.seesponsor',array('result'=>$obj));
}

public function getDeletepartner($id){
    $obj= sponsortable::find($id);
    $obj->delete();
    return redirect('see-partner')->with('success_message','Succesfully Deleted');


}

public function getEditsponsor($id){
    $obj= sponsortable::find($id);
    return view('admin.pages.editpartner',array('result'=>$obj));

}

public function postEditsponsor($id){
    $obj= sponsortable::find($id);
    $obj->partner_name=Input::get('partner_name');
    $obj->website_link=Input::get('weblink');
    $file= Input::file('image');
    if (!empty($file)) {
        $filename= $file->getClientOriginalName();
        $location="public/newsimage/";
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->partner_image = $image;
    
    }

    $result= $obj->save();
    if($result){
        return redirect('see-partner')->with('success_message','Succesfully Edited');
    }
    else{
        return redirect('see-partner')->with('success_message','Could not be edited');
    }
}

//sliderimage

public function getSliderimage(){
    return view('admin.pages.addsliderimage');
}

public function postSliderimage(Request $request){
    $obj= new sliderimagetable;
    $validation= Validator::make($request->all(),[
            
            
            
            'image'=>'required','dimensions:width=270,height=105'
            
            ],['image.required'=>'Please select a image',
            'image.dimensions'=>'Please select image of 1920*580(width*height)'
            ]);

            if($validation->fails()){
            return redirect()->back()->with('errors',$validation->errors());
            }
    $obj->status= $request->get('status');
    $file= $request->file('image');
    $filename= $file->getClientOriginalName();
    $location="public/sliderimage/";
    $file->move($location,$filename);
    $image=$location.$filename;
    $obj->slider_image= $image;

    $result= $obj->save();
    if($result){
        return redirect('add-slider-image')->with('success_message','Image succesfully Added');
    }
    else{
        return redirect('add-slider-image')->with('success_message','Image succesfully Added');
    }

}

public function getSeesliderimage(){
    $obj= DB::table('sliderimagetables')->get();
    return view('admin.pages.seeSliderimage',array('result'=>$obj));
}

public function getDeletesliderimage($id){
    $obj= sliderimagetable::find($id);
    $obj->delete();
    return redirect('see-slider-image')->with('success_message','Image succesfully deleted');
}

public function getRemovesliderimage($id){
    $obj= sliderimagetable::find($id);
    $obj->status=0;
    $obj->save();
    return redirect('see-slider-image')->with('success_message','Image removed from slider');

}

public function getAddtosliderimage($id){
    $obj= sliderimagetable::find($id);
    $obj->status=1;
    $obj->save();
    return redirect('see-slider-image')->with('success_message','Image added to slider');
}

    
   



}
