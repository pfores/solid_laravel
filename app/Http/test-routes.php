<?php
/**
 * Created by PhpStorm.
 * User: pau
 * Date: 1/02/16
 * Time: 16:36
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('testSendEmail','COntactEmailobjController@sendEmail');

    Route::get('/testSendEmail2', function (){
        Debugbar::startMeasure("SendSubscriptionEmail");
        dispatch(new \App\Jobs\SendSubscriptionEmail());
        Debugbar::stopMeasure("SendSubscriptionEmail");
        Return 'Done!';
    });
});