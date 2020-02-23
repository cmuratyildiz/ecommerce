<?php
use RealRashid\SweetAlert\Facades\Alert;

   //====================================ADMIN=============================================//




   //====================================USER=============================================//

    Route::get('/','HomePageController@index')->name('home')->middleware('isAdmin');
    Route::post('/add-comment','HomePageController@addComment')->name('add.comment');
    Route::post('/','HomePageController@NewsPost')->name('home.post')->middleware('isAdmin');
    Route::get('/login','LoginController@Login')->name('login')->middleware('isLogin');
    Route::post('/login','LoginController@PostLogin')->name('login.post')->middleware('isLogin');
    Route::get('/logout','LoginController@Logout')->name('logout');
    Route::post('/register','LoginController@Register')->name('register.post');
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::post('/profile','ProfileController@updatePost')->name('profile.update.post');
    Route::delete('/profile/{id}', 'ProfileController@deletePost')->name('post.destroy');
    Route::get('/friends/{nickname}','FriendsController@friendsProfile')->name('friends');
    Route::post('/friends/{user_id}','FriendsController@Message')->name('friend.message');
    Route::get('/messages','MessagesController@Messages')->name('messages');
    Route::get('/profile-settings','ProfileSettingsController@index')->name('profile-settings');
    Route::post('/profile-settings/account','ProfileSettingsController@Account')->name('profile.account');
    Route::post('/profile-settings/','ProfileSettingsController@ResetPassword')->name('reset.password');
    Route::post('/profile-settings/deactive','ProfileSettingsController@DeactiveAccount')->name('deactive.account');