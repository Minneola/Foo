<?php
/**
 * This file is part of the Minneola Project.
 * Copyright (c) 2016 Tobias Maxham <git2016@maxham.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * Feel free to edit as you please, and have fun.
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
    var_dump($_POST);
});