<?php
/**
 * 支付宝通知地址
 *
 * 
 * by 丰杰商城 www.toyokou-software.com
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>