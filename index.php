<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbcon = new \PDO("mysql:host=localhost;dbname=fujitsu", "root", "", array (\PDO::ATTR_PERSISTENT => true ) ) or die("Failed to connect!");