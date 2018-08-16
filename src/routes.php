<?php

Route::get('calc', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'mody\calc\CalcController@add');
Route::get('sub/{a}/{b}', 'mody\calc\CalcController@subtract');
