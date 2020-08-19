<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Crex24\Api;

use Lin\Crex24\Request;

class Account extends Request
{
    /*
     *
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }
}
