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
        
        if(isset($this->proxy_url)&&isset($this->proxy_port)){
            $arr["params"]['proxy_url'] = $this->proxy_url;
            $arr["params"]['proxy_port'] = $this->proxy_port;
            if(isset($this->proxy_user)&&isset($this->proxy_password)){
                $arr["params"]['proxy_userpwd']=$this->proxy_user.':'.$this->proxy_password;
            }
        }

        if(isset($this->CURLOPT_CAINFO)){
            $arr["params"]['CURLOPT_CAINFO'] = $this->CURLOPT_CAINFO;
        }

        return $blnParam ? EasyHelper::telegramHTTPRequest($token, $methodName, $arr["params"] ) :  EasyHelper::telegramHTTPRequest($token, $methodName );


    }
}
