<?php
/**
 * Created by PhpStorm.
 * User: bagheri
 * Date: 02/21/2018
 * Time: 08:04 AM
 */

namespace Ybagheri;
use phpDocumentor\Reflection\DocBlock\Tags\Param;
use Ybagheri\EasyHelper;

trait TelegramHelper
{
    public function doWithMethod(){
        $callers=debug_backtrace();
        $blnParam = (isset($callers[1]['args']) && ! empty($callers[1]['args']))?true:false;
        $methodName=$callers[1]['function'];
        $numargs=$blnParam ? count($callers[1]['args']) : 0;
        $arg_list=$blnParam ? $callers[1]['args'] : null;
        $token = $callers[1]["object"]->token;
        $className=$callers[1]["class"];
        $param =$blnParam ? EasyHelper::methodGetArgs($methodName, $className) :null;
        $arr=[];
        for ($i = 0; $i < $numargs; $i++) {
            $arr[$param[$i]['parameter']] = $arg_list[$i];
        }

        return $blnParam ? EasyHelper::telegramHTTPRequest($token, $methodName, $arr["params"] ) :  EasyHelper::telegramHTTPRequest($token, $methodName );
//        var_dump($callers);
//        var_dump($token);
//        var_dump($methodName);
//        var_dump($arr["params"]);
//    echo 'methodName: '.$methodName.PHP_EOL;
//    echo 'datas : '.PHP_EOL;
//    print_r($arr["params"]);

    }
}