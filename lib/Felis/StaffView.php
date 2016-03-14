<?php
/**
 * Created by PhpStorm.
 * User: goksuadanali
 * Date: 3/14/16
 * Time: 10:58 AM
 */

namespace Felis;


class StaffView extends View
{
    public function __construct() {
        $this->setTitle("Felis Investigations");
        $this->addLink("", "Log out");
    }
}