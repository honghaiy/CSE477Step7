<?php
/**
 * Function to localize our site
 * @param $site The Site object
 */

// Set the time zone

return function(Felis\Site $site) {
    date_default_timezone_set('America/Detroit');
    $site->setEmail('adanalig@cse.msu.edu');
    $site->setRoot('/~adanalig/step7');
    $site->dbConfigure('mysql:host=mysql-user.cse.msu.edu;dbname=adanalig',
        'adanalig',       // Database user
        'enYueZpfRbS5deDJ',     // Database password
        '');            // Table prefix
};