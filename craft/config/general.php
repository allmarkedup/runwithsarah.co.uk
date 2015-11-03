<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'pageTrigger' => 'page/',
        'omitScriptNameInUrls' => true,
        'loginPath' => 'runners/login',
        'logoutPath' => 'runners/logout',
    ),
    '.com' => array(
        'siteUrl' => 'http://runwithsarah.co.uk/',
        'devMode' => false,
    ),
    '.elf' => array(
        'siteUrl' => 'http://runwithsarah.elf/',
        'devMode' => true,
        'backupDbOnUpdate' => false,
    )
);
