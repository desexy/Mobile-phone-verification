<?php
    $ext = '+01';//国外区号
    $mobile = '3920112';//手机号
    require_once 'googlephone/autoload.php';
    $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
    $swissNumberStr = $ext.$mobile;//044 668 18 00
    try {
        $swissNumberProto = $phoneUtil->parse($swissNumberStr, "CH");
    } catch (\libphonenumber\numberParseException $e) {
        echo $e;//异常
    }
    $isValid = $phoneUtil->isValidNumber($swissNumberProto);
    if(!$isValid){
        echo '手机格式错误';
    }