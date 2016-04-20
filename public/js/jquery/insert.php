<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$till = $_POST['param'];
DB::insert("INSERT INTO bdp_rating ( sit_id , rate ) VALUES (?,?)", array($till,
            $till));

echo "epa";