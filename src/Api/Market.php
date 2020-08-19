<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Crex\Api;

use Lin\Crex\Request;

class Market extends Request
{
    /*
     *GET https://api.crex24.com/v2/public/currencies
     * */
    public function getCurrencies(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/currencies';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/instruments
     * */
    public function getInstruments(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/instruments';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/recentTrades
     * */
    public function getRecentTrades(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/recentTrades';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/orderBook
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/orderBook';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/ohlcv
     * */
    public function getOhlcv(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/ohlcv';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/tradingFeeSchedules
     * */
    public function getTradingFeeSchedules(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/TradingFeeSchedules';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/public/withdrawalFees
     * */
    public function getWithdrawalFees(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/WithdrawalFees';
        $this->data=$data;
        return $this->exec();
    }
}
