<?php

require_once(dirname(__DIR__).'/IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey('sandbox-iJzz5t4jcb1iqsrs8ln1VbKMcRdvHETt');
        $options->setSecretKey('VWndQsfoUcxIm8yjxQKnyREZw96Gc2Hk');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');

        return $options;
    }
}