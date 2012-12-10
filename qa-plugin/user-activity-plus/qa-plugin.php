<?php
/*
	Plugin Name: User Activity Plus
	Plugin URI: https://github.com/svivian/q2a-user-activity-plus
	Plugin Description: Shows all questions and answers of a user
	Plugin Version: 1.0
	Plugin Date: 2011-08-23
	Plugin Author: Scott Vivian
	Plugin Author URI: http://codelair.co.uk/
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.4

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.gnu.org/licenses/gpl.html
*/

if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('page', 'qa-user-activity.php', 'qa_user_activity', 'User Activity Plus');
qa_register_plugin_layer('qa-uact-layer.php', 'User Activity Layer');
qa_register_plugin_phrases('qa-uact-lang-*.php', 'useractivity');
