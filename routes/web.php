<?php

Auth::routes();
Route::get('/', function () {return view('welcome'); });
Route::resource('images', 'ImagesController');
Route::get('home', 'PagesController@getHome');
Route::get('abdallah', 'PagesController@abdallah');
Route::get('news', 'PagesController@getNews');
Route::get('economie', 'PagesController@getEconomie');
Route::get('histoire', 'PagesController@getHistoire');
Route::get('education', 'PagesController@getEducation');
Route::get('contact', 'PagesController@getContact');
Route::get('work', 'PagesController@getWork');
Route::get('about', 'PagesController@getAbout');
Route::get('iindex', 'PagesController@getIindex');
Route::get('a_table', 'PagesController@getTable');
Route::get('landing', 'PagesController@getLanding');
Route::get('shimaore', 'PagesController@getShimaore');
Route::get('francais', 'PagesController@getFrancais');
Route::get('english','PagesController@getEnglish');
Route::get('voule','PagesController@getVoule');
Route::get('culture','PagesController@getCulture');
Route::get('plage','PagesController@getPlage');
Route::get('lagon','PagesController@getLagon');
Route::get('randonnee','PagesController@getRandonnee');
Route::get('travailler','PagesController@getTravailler');

Route::get('netflix','PagesController@getNetflix');




Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::put('/post/{id}/edit', 'PostController@update')->name('post.update')->middleware('auth');
Route::get('/post/category/{name}', 'CategoryController@showAll')->name('category.showAll')->middleware('auth');
Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.delete')->middleware('auth');



Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('profile', 'PagesController@getProfile');
Route::post('profile', 'UserController@update_avatar');


Route::get('/category', 'CategoryController@index')->middleware('auth');
Route::post('/category', 'CategoryController@store')->middleware('auth');


Route::post('/like', 'LikeController@index')->middleware('auth');

Route::post('/comment', 'CommentController@index')->middleware('auth');

Route::get('/users', 'HomeController@listUser');
Route::get('/users/{id}', 'HomeController@showUser')->name('user.show');

Route::post('/friend', 'FriendController@index')->middleware('auth');
Route::post('/friend/remove', 'FriendController@remove')->middleware('auth');
Route::get('/friend/{id}', 'FriendController@showFriends')->middleware('auth')->name('friend.show');
Route::post('/request', 'FriendController@request')->middleware('auth');







Route::get('/chat', 'ChatController@index')->middleware('auth')->name('chat.index');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');
Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth');
