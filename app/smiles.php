<?php
/**
 * Created by PhpStorm.
 * User: tmaxham
 * Date: 28.07.2015
 * Time: 02:55
 */

Smile::get('/', function()
{
	echo '<h1>It work\'s!</h1><span style="font-size: 14pt">Go to <a href="/dashboard">The Dashboard</a>.</span>';
});




Smile::get('/dashboard', 'SiffController@index');


Smile::get('you', function()
{

	echo 'dfsdf';

});




Smile::post('/', function()
{

});