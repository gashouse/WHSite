<?php

use League\Flysystem\Util as FlyUtil;

// --------------------------------------------------------------------------------
// Test
// --------------------------------------------------------------------------------
if(!function_exists('path_test'))
{
	function path_test($path)
	{
		return 'path: ' . $path;
	}
}
