 <?php

use App\Task;


// home routes starts here**********************************
Route::get('/', function () {
	
    return view('index');
});

Route::get('/about', function () {
    
    return view('about');
});

Route::get('/compensation', function () {
    
    return view('compensation_plan');
});

Route::get('/contact', function () {
    
    return view('contact');
});

Route::get('/faq', function () {
    

    return view('faq');
});

Route::get('/gallery', function () {
    

    return view('gallery');
});



// home routes ends here ****************************************************


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('new_ticket', 'TicketsController@create');
Route::post('new_ticket', 'TicketsController@store'); 

Route::get('my_tickets', 'TicketsController@userTickets');

Route::get('tickets/{ticket_id}', 'TicketsController@show');

Route::post('comment', 'CommentsController@postComment'); 

// routes for sales

Route::get('/sales', 'SalesController@index');
Route::get('/sell', 'SalesController@create');
Route::post('/sell', 'SalesController@sell');   

//route for the forum
Route::get('/thread', 'ThreadController@index');
Route::get('/thread/{channel}/{thread}', 'ThreadController@show');
Route::delete('/thread/{channel}/{thread}', 'ThreadController@destroy');

Route::get('/thread/create', 'ThreadController@create');

Route::get('/thread/{channel}', 'ThreadController@index');
Route::post('/thread/{channel}/{thread}/replies', 'ReplyController@store');

Route::get('/thread/{channel}/{thread}/replies', 'ReplyController@index');

Route::post('/thread/{channel}/{thread}/subscriptions', 'ThreadSubscriptionsController@store')->middleware('auth');
Route::delete('/thread/{channel}/{thread}/subscriptions', 'ThreadSubscriptionsController@destroy')->middleware('auth');


Route::post('/thread', 'ThreadController@store');

Route::post('/replies/{reply}/favorites', 'FavoritesController@store');

Route::delete('/replies/{reply}/favorites', 'FavoritesController@destroy');


Route::patch('/replies/{reply}', 'ReplyController@update');
 Route::post('/replies/{reply}', 'ReplyController@destroy');

Route::get('/profiles/{user}', 'ProfilesController@show');
Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');

Route::post('api/users/{user}/avatar', 'Api\UserAvatarController@store');


//grouped routes for admin
	Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('tickets', 'TicketsController@index');
    Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
    Route::post('re_open_ticket/{ticket_id}', 'TicketsController@re_open');
    Route::post('search_tickets', 'TicketsController@userTicketsSearch');

});