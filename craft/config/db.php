<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
		'server' => 'localhost',
		'tablePrefix' => 'craft',
	),
	'.co.uk' => array(
		'user' => 'root',
		'password' => 'cl34rl3ftSQL',
		'database' => 'runwithsarah',
	),
	'.elf' => array(
		'user' => 'devbox',
		'password' => 'devbox',
		'database' => 'runwithsarah',
	)
);
