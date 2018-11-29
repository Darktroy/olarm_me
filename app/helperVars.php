<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace App\Http\Controllers;
namespace App;

/**
 * Description of helperVars
 *
 * @author root
 */
class helperVars {
    public static $picPath = 'businessway-appiumtech.com/BWmobapi/public/card_image/';
    public static $logoPath = 'businessway-appiumtech.com/BWmobapi/public/logo_image/';
    
    public static function errorHandling($theErrorArray) {
        $error_to_return = '';
        foreach ($theErrorArray as $key => $value) {
            foreach ($value as $keyineer => $valueInner) {
                $error_to_return .= $valueInner.' ';
            }
        }
        return $error_to_return;
    }
}
