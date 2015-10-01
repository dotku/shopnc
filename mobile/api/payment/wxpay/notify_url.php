<?php
/**
 * 微信支付通知地址
 *
 * 
 * by 丰杰商城 www.toyokou-software.com
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'wxpay';
require_once(dirname(__FILE__).'/../../../index.php');
