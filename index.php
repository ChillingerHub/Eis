<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 12.11.2017
 * Time: 22:52
 */

require "vendor/autoload.php";
use Stefan\Ice;



$eis = new Ice\IceBucket("Schiff","Schoko", 12, 8);

echo "Your icebucket: ".$eis;