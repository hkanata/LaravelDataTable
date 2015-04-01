<?php

/*
 * Datatable Adapted version to Laravel
 * @author Leonardo Musashi Miyamoto
 * hkanata@gmail.com / falecom@opba.com.br
 * opba.com.br 
 * Thanks
 */
Route::get('/', 'HomeController@showWelcome');

Route::get('serverProcessingController/', 'HomeController@serverProcessingController');