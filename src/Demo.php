<?php

namespace Aldhix\Altar;
use Route;

class Demo
{
 
   public static function routes()
   {
       Route::group([
            'prefix' => 'demo',
        ], function() {
            Route::get('/','DemoController@index')->name('demo.index');
            Route::get('about','DemoController@about')->name('demo.about');
            Route::get('form','DemoController@form')->name('demo.form');
            Route::post('form','DemoController@store')->name('demo.store');
            Route::get('table','DemoController@table')->name('demo.table');
            Route::get('login','DemoController@login')->name('demo.login');
            Route::get('404','DemoController@error404')->name('demo.404');
            Route::get('500','DemoController@error500')->name('demo.500');
            Route::delete('destroy/{id}','DemoController@destroy')->name('demo.destroy');
        });
   }
}
