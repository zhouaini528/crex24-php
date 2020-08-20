<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Crex\Api;

use Lin\Crex\Request;

class Account extends Request
{
    /*
     *GET https://api.crex24.com/v2/account/balance
     * */
    public function getBalance(array $data=[]){
        $this->type='GET';
        $this->path='/v2/account/balance';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/account/depositAddress
     * */
    public function getDepositAddress(array $data=[]){
        $this->type='GET';
        $this->path='/v2/account/depositAddress';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/account/moneyTransfers
     * */
    public function getMoneyTransfers(array $data=[]){
        $this->type='GET';
        $this->path='/v2/account/moneyTransfers';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/account/moneyTransferStatus
     * */
    public function getMoneyTransferStatus(array $data=[]){
        $this->type='GET';
        $this->path='/v2/account/moneyTransferStatus';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/account/previewWithdrawal
     * */
    public function getPreviewWithdrawal(array $data=[]){
        $this->type='GET';
        $this->path='/v2/account/previewWithdrawal';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST https://api.crex24.com/v2/account/withdraw
     * */
    public function postWithdraw(array $data=[]){
        $this->type='POST';
        $this->path='/v2/account/withdraw';
        $this->data=$data;
        return $this->exec();
    }
}
