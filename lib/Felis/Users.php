<?php
/**
 * Created by PhpStorm.
 * User: goksuadanali
 * Date: 3/15/16
 * Time: 7:01 PM
 */


namespace Felis;


class Users extends Table
{
    /**
     * Constructor
     * @param $site The Site object
     */
    public function __construct(Site $site) {
        parent::__construct($site, "user");
    }
}