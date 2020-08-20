### It is recommended that you read the official document first

Crex24 docs [https://docs.crex24.com/trade-api/v2/](https://docs.crex24.com/trade-api/v2/)

All interface methods are initialized the same as those provided by huobi. See details [src/api](https://github.com/zhouaini528/crex24-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/crex24-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin](https://github.com/zhouaini528/Kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Gate](https://github.com/zhouaini528/gate-php)

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

#### Installation
```
composer require linwj/crex24
```

Support for more request Settings
```php
$crex=new Crex();

//You can set special needs
$crex->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);
```

### Spot API

Market related API [More](https://github.com/zhouaini528/crex24-php/blob/master/tests/market.php)
```php
try {
    $result=$crex->market()->getCurrencies();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getInstruments();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getTickers();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getRecentTrades([
        'instrument'=>'LTC-BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getOrderBook([
        'instrument'=>'LTC-BTC',
        'limit'=>10
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getOhlcv([
        'instrument'=>'LTC-BTC',
        'granularity'=>'30m'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getTradingFeeSchedules();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getWithdrawalFees([
        'currency'=>'LTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

Accounts related API [More](https://github.com/zhouaini528/crex24-php/blob/master/tests/account.php)
```php
try {
    $result=$crex->account()->getBalance([
        //'currency'=>'FREE'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->account()->getDepositAddress([
        'currency'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->account()->getDepositAddress([
        'currency'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->account()->getMoneyTransfers();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

Order related API [More](https://github.com/zhouaini528/crex24-php/blob/master/tests/order.php)

```php
try {
    $result=$crex->trading()->postPlaceOrder([
        'instrument'=>'ETH-BTC',
        'side'=>'buy',
        'type'=>'limit',
        'volume'=>'100',
        'price'=>'0.01',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getOrderStatus([
        'id'=>'xxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getOrderTrades([
        'id'=>'xxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->postCancelOrdersById([
        //'id'=>'xxxxxxxxxx'
        'id'=>['111111','22222222']
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getOrderHistory();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getTradeHistory();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

[More Tests](https://github.com/zhouaini528/crex24-php/tree/master/tests)

[More API](https://github.com/zhouaini528/crex24-php/tree/master/src/Api)


