<?php
/**
 * Created by PhpStorm.
 * User: bhps690
 * Date: 3/22/2019
 * Time: 5:32 PM
 */
Route::get('/getMailsds/{id}','ViewList\MailList\MailsController@retrieveMails');
Route::get('/getMail/{id}','ViewList\MailList\mailSearchController@getMail');
Route::get('/createDB','ViewList\MailList\InsertUserController@createSchema');
Route::get('/insertUsers','ViewList\MailList\InsertUserController@insertClient');
Route::get('/insertUser',function(){

    return redirect('/insertUsers');
});
