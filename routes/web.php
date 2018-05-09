<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/','usercontroller@getIndex');
Route::get('about-us','usercontroller@getAboutus');
Route::get('our-team','usercontroller@getOurteam');
Route::get('single-team/{id}','usercontroller@getSingleteam');
Route::get('news','usercontroller@getNews');

Route::get('search','usercontroller@getNewssearch');
Route::get('newsitem/{id}','usercontroller@getSinglenews');
Route::get('projectitem/{id}','usercontroller@getSingleproject');
Route::get('project','usercontroller@getAllprojects');
Route::get('find','usercontroller@getProjectsearch');
Route::get('contact-us','usercontroller@getContactform');
Route::post('contact','usercontroller@postContactform');

Route::get('admin','admincontroller@getIndexofadmin');

//content
Route::get('add-about-us','admincontroller@getAddaboutcontent');
Route::post('adding','admincontroller@postAboutcontent');
Route::get('see-content','admincontroller@getSeecontent');
Route::get('edit-content/{id}','admincontroller@getEditcontent');
Route::post('content-edited/{id}','admincontroller@postEditcontent');
Route::get('delete-content/{id}','admincontroller@getDeletecontent');
//endofcontent

//start of adding team members 
Route::get('add-team','admincontroller@getAddteammember');
Route::post('team-added','admincontroller@postAddteammember');
Route::get('see-team','admincontroller@getSeeteammembers');
Route::get('delete-team/{id}','admincontroller@getDeleteteam');
Route::get('edit-team/{id}','admincontroller@getEditteam');
Route::post('team-edited/{id}','admincontroller@postEditteam');

//end of team members

//category
Route::get('add-category','admincontroller@getAddcategory');
Route::post('post-category','admincontroller@postAddcategory');
Route::get('see-category','admincontroller@getSeecategory');
Route::get('edit-category/{id}','admincontroller@getEditcategory');
Route::post('category-edited/{id}','admincontroller@postEditcategory');
Route::get('delete-category/{id}','admincontroller@getDeletecategory');
//end

//admin news
Route::get('add-news','admincontroller@getAddnews');
Route::post('post-news','admincontroller@postAddnews');
Route::get('see-news','admincontroller@getSeenews');
Route::get('delete-news/{id}','admincontroller@getDeletenews');
Route::get('edit-news/{id}','admincontroller@getEditnews');
Route::post('news-edited/{id}','admincontroller@postEditnews');
Route::get('view-single-news/{id}','admincontroller@getSeesinglenews');
//end of news

//start of admin project
Route::get('add-project','admincontroller@getAddproject');
Route::post('post-project','admincontroller@postAddproject');
Route::get('see-all-project','admincontroller@getSeeproject');
Route::get('delete-project/{id}','admincontroller@getDeleteproject');
Route::get('edit-project/{id}','admincontroller@getEditproject');
Route::post('project-edited/{id}','admincontroller@postEditproject');
//end

//information
Route::get('add-info','admincontroller@getAddinformation');
Route::post('post-info','admincontroller@postAddinformation');
Route::get('see-info','admincontroller@getSeeinformation');
Route::get('delete-info/{id}','admincontroller@getDeleteinformation');
Route::get('edit-info/{id}','admincontroller@getEditinformation');
Route::post('info-edited/{id}','admincontroller@postEditinformation');


//sponsor image
Route::get('add-partner','admincontroller@getAddsponsor');
Route::post('post-partner','admincontroller@postAddsponsor');
Route::get('see-partner','admincontroller@getSeesponsor');
Route::get('delete-partner/{id}','admincontroller@getDeletepartner');
Route::get('edit-partner/{id}','admincontroller@getEditsponsor');
Route::post('partner-edited/{id}','admincontroller@postEditsponsor');
//end

//slider image
Route::get('add-slider-image','admincontroller@getSliderimage');
Route::post('slider-image-add','admincontroller@postSliderimage');
Route::get('see-slider-image','admincontroller@getSeesliderimage');
Route::get('delete-slider-image/{id}','admincontroller@getDeletesliderimage');
Route::get('remove-slider/{id}','admincontroller@getRemovesliderimage');
Route::get('add-slider/{id}','admincontroller@getAddtosliderimage');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
