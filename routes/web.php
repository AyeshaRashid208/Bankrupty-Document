<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('artisan/optimize', function () {
    
     Artisan::call('optimize:clear');
     dd('sucess');
     
});
// profile
Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', 'ProfileController@index');
    Route::post('update-profile/{id}', 'ProfileController@update')->name('profile.update');

//     Route::get('chapter-7-form', 'Chapter7FormController@index');
//     Route::get('chapter-7-form/create', 'Chapter7FormController@create');
// Route::post('chapter-7-form', 'Chapter7FormController@store')->name('Chapter7-Form');

// Route::post('chapter-7-form/{id}', 'Chapter7FormController@update')->name('Chapter7-Form.update');
// Route::get('chapter-7-data/{id}/view', 'Chapter7FormController@view')->name('Chapter7-Data');
});

// User
Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@redirect');

    Route::get('dashboard', 'HomeController@dashboard')->name('home');


    Route::resource('questionaire', 'QuestionaireController');
    Route::post('deleteQuestionaire', 'QuestionaireController@destroy')->name('deleteQuestionaire');
    // Chapter 7 Form
    Route::resource('chapter7-form', 'Chapter7FormController');
    Route::post('deleteChapter7Form', 'Chapter7FormController@destroy')->name('deleteChapter7Form');
    //Bankruptcy Document
    Route::resource('bankrupty', 'BankruptyController');
    Route::post('deleteBankrupty', 'BankruptyController@destroy')->name('deleteBankrupty');
    //chapter 7
    Route::post('deleteChapter7', 'Chapter7Controller@destroy')->name('deleteChapter7');
    Route::resource('chapter7', 'Chapter7Controller');
    // Bankrupty court form
     Route::post('deletebankruptycourt', 'BankruptyCourtController@destroy')->name('deletebankruptycourt');
     Route::resource('bankruptycourt', 'BankruptyCourtController');

    //FinacialController
    Route::post('deletefinancial', 'FinacialController@destroy')->name('deletefinancial');
    Route::resource('financial', 'FinacialController');

    // Chapter 13 Form
    Route::resource('chapter13', 'Chapter13FormController');
    Route::post('deleteChapter13', 'Chapter13FormController@destroy')->name('deleteChapter13');
   
});

Route::get('/', 'HomeController@home')->name('/');
Route::post('newsletter', 'HomeController@newsletter')->name('Newsletter');
Route::get('contact-us', 'HomeController@contact_us');
Route::post('contact-us', 'HomeController@contact_us_store')->name('contact-us');

Route::get('chapter-7-bankruptcy', 'HomeController@chapter7');
Route::get('chapter-13-bankruptcy', 'HomeController@chapter13');
Route::get('order-procedure', 'HomeController@order_pro');
Route::get('5-7-days-processing-time', 'HomeController@day5');
Route::get('2-3-days-processing-time', 'HomeController@day2');
Route::get('1-day-processing-time', 'HomeController@day1');
Route::get('membership', 'HomeController@membership');
Route::post('membership', 'HomeController@membership_store')->name('Membership');
// Route::get('chapter7-form', 'HomeController@chapter7_form');


Auth::routes();



// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth.admin']], function () {

    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('paid-users/{id?}', 'HomeController@paidUsers');

    // Profile
    Route::resource('profile', 'ProfileController');

    // bankrupty
    Route::post('deleteBankrupty', 'BankruptyController@destroy')->name('deleteBankrupty');
    Route::resource('bankrupty', 'BankruptyController');

    // chapter7
    Route::post('deleteChapter7', 'Chapter3Controller@destroy')->name('deleteChapter7');
    Route::resource('chapter7', 'Chapter3Controller');
    // chapter7 Form Data
    Route::post('deleteChapter7Form', 'Chapter7FormController@destroy')->name('deleteChapter7Form');
    Route::resource('chapter7-form', 'Chapter7FormController');
    //Questionaire
    Route::resource('questionaire', 'QuestionaireController');
    Route::post('deleteQuestionaire', 'QuestionaireController@destroy')->name('deleteQuestionaire');
     
    // Bankrupty court form
    Route::post('deletebankruptycourt', 'BankruptyCourtController@destroy')->name('deletebankruptycourt');
    Route::resource('bankruptycourt', 'BankruptyCourtController');
    
    //FinecialController
    Route::post('deletefinancial', 'FinecialController@destroy')->name('deletefinancial');
    Route::resource('financial', 'FinecialController');

    // chapter13
    Route::post('deleteChapter13', 'Chapter13Controller@destroy')->name('deleteChapter13');
    Route::resource('chapter13', 'Chapter13Controller');

     // member
    Route::post('deleteMember', 'MemberController@destroy')->name('deleteMember');
    Route::resource('member', 'MemberController');

    // order procedures
    Route::post('deleteOrderProcedure', 'OrderProcedureController@destroy')->name('deleteOrderProcedure');
    Route::resource('order-procedure', 'OrderProcedureController');
    // 5-7 Days processing
    Route::post('deleteDays5-7', 'Days5ProcessController@destroy')->name('deleteDays5-7');
    Route::resource('days5-7', 'Days5ProcessController');
    // 2-3 Days processing
    Route::post('deleteDays2-3', 'Days2ProcessController@destroy')->name('deleteDays2-3');
    Route::resource('days2-3', 'Days2ProcessController');
    // 1 Day processing
    Route::post('deleteDay1', 'Days1ProcessController@destroy')->name('deleteDay1');
    Route::resource('day1', 'Days1ProcessController');


    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    //Website Content
    Route::resource('content', 'ContentController');

    // social Media
    Route::resource('media', 'MediaController');
    Route::post('deleteMedia', 'MediaController@destroy')->name('deleteMedia');
    // Membership
    Route::resource('membership', 'MembershipController');
    Route::post('deleteMembership', 'MembershipController@destroy')->name('deleteMembership');
    // social Media
    Route::resource('review', 'ReviewController');
    Route::post('deleteReview', 'ReviewController@destroy')->name('deleteReview');
    // Service
    Route::resource('service', 'ServiceController');
    Route::post('deleteService', 'ServiceController@destroy')->name('deleteService');
    
    // Team
    Route::resource('team', 'TeamController');
    Route::post('deleteTeam', 'TeamController@destroy')->name('deleteTeam');
    // Faq
    Route::resource('faq', 'FaqController');
    Route::post('deleteFaq', 'FaqController@destroy')->name('deleteFAQ');
    // slider
    Route::resource('slider', 'SliderController');
    Route::post('deleteSlider', 'SliderController@destroy')->name('deleteSlider');
    // News
    Route::resource('news', 'NewsController');
    Route::post('deleteNews', 'NewsController@destroy')->name('deleteNews');
    // Contact Mail
    Route::resource('contact', 'ContactController');
    // Newsletter
    Route::resource('newsletter', 'NewsletterController');
    Route::post('deleteNewsletter', 'NewsletterController@destroy')->name('deleteNewsletter');
});


Route::group(['middleware' => ['auth']], function () {

    Route::get('stripe', 'StripeController@stripe');
    Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');
});
