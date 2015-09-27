<?php defined('InShopNC') or exit('Access Invalid!'); return array (
  'arrival_notice' => 
  array (
    'mmt_code' => 'arrival_notice',
    'mmt_name' => '到货通知提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您关注的商品 “{$goods_name}” 已经到货。<a href="{$goods_url}" target="_blank">点击查看商品</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您关注的商品 “{$goods_name}” 已经到货。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您关注的商品  “{$goods_name}” 已经到货。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您关注的商品 “{$goods_name}” 已经到货。
</p>
<p>
	<a href="{$goods_url}" target="_blank">点击查看商品</a> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>',
  ),
  'consult_goods_reply' => 
  array (
    'mmt_code' => 'consult_goods_reply',
    'mmt_name' => '商品咨询回复提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您关于商品 “{$goods_name}”的咨询，商家已经回复。<a href="{$consult_url}" target="_blank">点击查看回复</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您关于商品 “{$goods_name}” 的咨询，商家已经回复。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您关于商品 “{$goods_name}”的咨询，商家已经回复。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您关注的商品“{$goods_name}” 已经到货。
</p>
<p>
	<a href="{$consult_url}" target="_blank">点击查看回复</a> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<br />
<div class="firebugResetStyles firebugBlockBackgroundColor">
	<div style="background-color:transparent ! important;" class="firebugResetStyles">
	</div>
</div>',
  ),
  'consult_mall_reply' => 
  array (
    'mmt_code' => 'consult_mall_reply',
    'mmt_name' => '平台客服回复提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您的平台客服咨询已经回复。<a href="{$consult_url}" target="_blank">点击查看回复</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您的平台客服咨询已经回复。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您的平台客服咨询已经回复。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的平台客服咨询已经回复。
</p>
<p>
	<a href="{$consult_url}" target="_blank">点击查看回复</a> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>',
  ),
  'order_deliver_success' => 
  array (
    'mmt_code' => 'order_deliver_success',
    'mmt_name' => '商品出库提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您的订单已经出库。<a href="{$order_url}" target="_blank">点击查看订单</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您的订单已经出库。订单编号 {$order_sn}。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您的订单已经出库。订单编号 {$order_sn}。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的订单已经出库。订单编号 {$order_sn}。<br />
<a href="{$order_url}" target="_blank">点击查看订单</a>
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<br />',
  ),
  'order_payment_success' => 
  array (
    'mmt_code' => 'order_payment_success',
    'mmt_name' => '付款成功提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '关于订单：{$order_sn}的款项已经收到，请留意出库通知。<a href="{$order_url}" target="_blank">点击查看订单详情</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】{$order_sn}的款项已经收到，请留意出库通知。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：{$order_sn}的款项已经收到，请留意出库通知。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	{$order_sn}的款项已经收到，请留意出库通知。
</p>
<p>
	<a href="{$order_url}" target="_blank">点击查看订单详情</a>
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<br />',
  ),
  'predeposit_change' => 
  array (
    'mmt_code' => 'predeposit_change',
    'mmt_name' => '余额变动提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '你的账户于 {$time} 账户资金有变化，描述：{$desc}，可用金额变化 ：{$av_amount}元，冻结金额变化：{$freeze_amount}元。<a href="{$pd_url}" target="_blank">点击查看余额</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】你的账户于 {$time} 账户资金有变化，描述：{$desc}，可用金额变化： {$av_amount}元，冻结金额变化：{$freeze_amount}元。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：你的账户于 {$time} 账户资金有变化，描述：{$desc}，可用金额变化： {$av_amount}元，冻结金额变化：{$freeze_amount}元。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	你的账户于 {$time} 账户资金有变化，描述：{$desc}，可用金额变化：{$av_amount}元，冻结金额变化：{$freeze_amount}元。
</p>
<p>
	<a href="{$pd_url}" target="_blank">点击查看余额</a> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>',
  ),
  'recharge_card_balance_change' => 
  array (
    'mmt_code' => 'recharge_card_balance_change',
    'mmt_name' => '充值卡余额变动提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '你的账户于 {$time} 充值卡余额有变化，描述：{$description}，可用充值卡余额变化 ：{$available_amount}元，冻结充值卡余额变化：{$freeze_amount}元。<a href="{$url}" target="_blank">点击查看充值卡余额</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】你的账户于 {$time} 充值卡余额有变化，描述：{$description}，可用充值卡余额变化： {$available_amount}元，冻结充值卡余额变化：{$freeze_amount}元。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：你的账户于 {$time} 充值卡余额有变化，描述：{$description}，可用充值卡余额变化： {$available_amount}元，冻结充值卡余额变化：{$freeze_amount}元。',
    'mmt_mail_content' => '<p>
    {$site_name}提醒：
</p>
<p>
  你的账户于 {$time} 充值卡余额有变化，描述：{$description}，可用充值卡余额变化：{$available_amount}元，冻结充值卡余额变化：{$freeze_amount}元。
</p>
<p>
  <a href="{$url}" target="_blank">点击查看余额</a> 
</p>
<p>
  <br />
</p>
<p>
   <br />
</p>
<p>
   <br />
</p>
<p style="text-align:right;">
 {$site_name}
</p>
<p style="text-align:right;">
   {$mail_send_time}
</p>',
  ),
  'refund_return_notice' => 
  array (
    'mmt_code' => 'refund_return_notice',
    'mmt_name' => '退款退货提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您的退款退货单有了变化。<a href="{$refund_url}" target="_blank">点击查看</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您的退款退货单有了变化。退款退货单编号：{$refund_sn}。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您的退款退货单有了变化。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的退款退货单有了变化。退款退货单编号：{$refund_sn}。
</p>
<p>
	&lt;a href="{$refund_url}" target="_blank"&gt;点击查看&lt;/a&gt;
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<br />',
  ),
  'voucher_use' => 
  array (
    'mmt_code' => 'voucher_use',
    'mmt_name' => '代金券使用提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您有代金券已经使用，代金券编号：{$voucher_code}。<a href="{$voucher_url}" target="_blank">点击查看</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您有代金券已经使用，代金券编号：{$voucher_code}。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您有代金券已经使用，代金券编号：{$voucher_code}。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有代金券已经使用，代金券编号：{$voucher_code}。
</p>
<p>
	&lt;a href="{$voucher_url}" target="_blank"&gt;点击查看&lt;/a&gt;
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>',
  ),
  'voucher_will_expire' => 
  array (
    'mmt_code' => 'voucher_will_expire',
    'mmt_name' => '代金券即将到期提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您有一个代金券即将在{$indate}过期，请记得使用。<a href="{$voucher_url}" target="_blank">点击查看</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您有一个代金券即将在{$indate}过期，请记得使用。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您有一个代金券即将在{$indate}过期，请记得使用。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有一个代金券即将在{$indate}过期，请记得使用。
</p>
<p>
	<a href="{$voucher_url}" target="_blank">点击查看</a> 
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>',
  ),
  'vr_code_will_expire' => 
  array (
    'mmt_code' => 'vr_code_will_expire',
    'mmt_name' => '兑换码即将到期提醒',
    'mmt_message_switch' => '1',
    'mmt_message_content' => '您有一组兑换码即将在{$indate}过期，请记得使用。<a href="{$vr_order_url}" target="_blank">点击查看</a>',
    'mmt_short_switch' => '0',
    'mmt_short_content' => '【{$site_name}】您有一组兑换码即将在{$indate}过期，请记得使用。',
    'mmt_mail_switch' => '0',
    'mmt_mail_subject' => '{$site_name}提醒：您有一组兑换码即将在{$indate}过期，请记得使用。',
    'mmt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有一组兑换码即将在{$indate}过期，请记得使用。
</p>
<p>
	&lt;a href="{$vr_order_url}" target="_blank"&gt;点击查看&lt;/a&gt;
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>
<p style="text-align:right;">
	{$site_name}
</p>
<p style="text-align:right;">
	{$mail_send_time}
</p>
<p>
	<br />
</p>
<p>
	<br />
</p>',
  ),
);