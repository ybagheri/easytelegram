<?php
/**
 * Created by PhpStorm.
 * User: yb
 * Date: 2/22/2018
 * Time: 4:18 PM
 */

namespace Ybagheri;


trait EasyOOP
{
    private $data = array();

    public function __set($variable, $value){
        $this->data[$variable] = $value;
    }

    public function __get($variable){
        if(isset($this->data[$variable])){
            return $this->data[$variable];
        }
    }

    public function __call($name, $arguments){
        switch(substr($name, 0, 3)){
            case 'get':
                if(isset($this->data[substr($name, 3)])){
                    return $this->data[substr($name, 3)];
                }
                break;

            case 'set':
                $this->data[substr($name, 3)] = $arguments[0];
                return $this;
                break;
            default:

        }
        switch(substr($name, 0, 4)){

            case 'with':
                if(isset($this->data[substr($name, 4)])){
                    return $this->data[substr($name, 4)];
                }
                break;

        }
    }
}