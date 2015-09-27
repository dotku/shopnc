<?php defined('InShopNC') or exit('Access Invalid!'); return array (
  'complain' => 
  array (
    'smt_code' => 'complain',
    'smt_name' => '商品被投诉提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您售出的商品被投诉，等待商家申诉。投诉单编号：{$complain_id}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您售出的商品被投诉，等待商家申诉。投诉单编号：{$complain_id}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您售出的商品被投诉，等待商家申诉。投诉单编号：{$complain_id}。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您售出的商品被投诉，等待商家申诉。投诉单编号：{$complain_id}。
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
</p>',
    'smt_mail_forced' => '0',
  ),
  'goods_storage_alarm' => 
  array (
    'smt_code' => 'goods_storage_alarm',
    'smt_name' => '商品库存预警',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的商品库存不足，请及时补货。平台货号：{$common_id}，SKU：{$sku_id}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的商品库存不足，请及时补货。平台货号：{$common_id}，SKU：{$sku_id}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您的商品库存不足，请及时补货。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的商品库存不足，请及时补货。平台货号：{$common_id}，SKU：{$sku_id}。
</p>
<p>
	点击下面链接查看商品详细信息
</p>
<p>
	<a href="http://{$shop_site_url}/index.php?act=goods&amp;op=index&amp;goods_id={$sku_id}" target="_blank">http://{$shop_site_url}/index.php?act=goods&amp;op=index&amp;goods_id={$sku_id}</a> 
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
<br />',
    'smt_mail_forced' => '0',
  ),
  'goods_verify' => 
  array (
    'smt_code' => 'goods_verify',
    'smt_name' => '商品审核失败提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的商品没有通过管理员审核，原因：“{$remark}”。平台货号：{$common_id}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的商品没有通过管理员审核，原因：“{$remark}”。平台货号：{$common_id}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您的商品没有通过管理员审核。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的商品没有通过管理员审核，原因：“{$remark}”。平台货号：{$common_id}。
	</p><p>
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
    'smt_mail_forced' => '0',
  ),
  'goods_violation' => 
  array (
    'smt_code' => 'goods_violation',
    'smt_name' => '商品违规被下架',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的商品被违规下架，原因：“{$remark}”。平台货号：{$common_id}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的商品被违规下架，原因：“{$remark}”。平台货号：{$common_id}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您的商品被违规下架。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的商品被违规下架。，原因：“{$remark}”。平台货号：{$common_id}。
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
</p>',
    'smt_mail_forced' => '0',
  ),
  'new_order' => 
  array (
    'smt_code' => 'new_order',
    'smt_name' => '新订单提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您有订单需要处理，订单编号：{$order_sn}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您有订单需要处理，订单编号：{$order_sn}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您有订单需要处理。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有订单需要处理，订单编号：{$order_sn}。
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
    'smt_mail_forced' => '0',
  ),
  'refund' => 
  array (
    'smt_code' => 'refund',
    'smt_name' => '退款提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您有一个{$type}退款单需要处理，退款编号：{$refund_sn}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您有一个{$type}退款单需要处理，退款编号：{$refund_sn}。',
    'smt_short_forced' => '1',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您有一个{$type}退款单需要处理，退款编号：{$refund_sn}。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有一个{$type}退款单需要处理，退款编号：{$refund_sn}。
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
</p>',
    'smt_mail_forced' => '1',
  ),
  'refund_auto_process' => 
  array (
    'smt_code' => 'refund_auto_process',
    'smt_name' => '退款自动处理提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的{$type}退款单超期未处理，已自动同意买家退款申请。退款单编号：{$refund_sn}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的{$type}退款单超期未处理，已自动同意买家退款申请。退款单编号：{$refund_sn}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{site_name}提醒：您的{$type}退款单超期未处理，已自动同意买家退款申请。退款单编号：{$refund_sn}。',
    'smt_mail_content' => '<p>
	{site_name}提醒：
</p>
<p>
	您的{$type}退款单超期未处理，已自动同意买家退款申请。退款单编号：{$refund_sn}。
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
</p>',
    'smt_mail_forced' => '0',
  ),
  'return' => 
  array (
    'smt_code' => 'return',
    'smt_name' => '退货提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您有一个{$type}退货单需要处理。退货编号：{$refund_sn}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{site_name}】您有一个{$type}退货单需要处理。退货编号：{$refund_sn}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您有一个{$type}退货单需要处理。退货编号：{$refund_sn}。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有一个{$type}退货单需要处理。退货编号：{$refund_sn}。
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
<br />',
    'smt_mail_forced' => '0',
  ),
  'return_auto_process' => 
  array (
    'smt_code' => 'return_auto_process',
    'smt_name' => '退货自动处理提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的{$type}退货单超期未处理，已自动同意买家退货申请（弃货）。退货单编号：{$refund_sn}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的{$type}退货单超期未处理，已自动同意买家退货申请（弃货）。退货单编号：{$refund_sn}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您的{$type}退货单超期未处理，已自动同意买家退货申请（弃货）。退货单编号：{$refund_sn}。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的{$type}退货单超期未处理，已自动同意买家退货申请（弃货）。退货单编号：{$refund_sn}。
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
    'smt_mail_forced' => '0',
  ),
  'return_auto_receipt' => 
  array (
    'smt_code' => 'return_auto_receipt',
    'smt_name' => '退货未收货自动处理提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的{$type}退货单不处理收货超期未处理，已自动按弃货处理。退货单编号：{$refund_sn}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的{$type}退货单不处理收货超期未处理，已自动按弃货处理。退货单编号：{$refund_sn}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您的{$type}退货单超期未处理，已自动同意买家退货申请（弃货）。退货单编号：{$refund_sn}。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您的{$type}退货单超期未处理，已自动同意买家退货申请（弃货）。退货单编号：{$refund_sn}。
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
</p>',
    'smt_mail_forced' => '0',
  ),
  'store_bill_affirm' => 
  array (
    'smt_code' => 'store_bill_affirm',
    'smt_name' => '结算单等待确认提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您有新的结算单等待确认，开始时间：{$state_time}，结束时间：{$end_time}，结算单号：{$bill_no}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您有新的结算单等待确认，开始时间：{$state_time}，结束时间：{$end_time}，结算单号：{$bill_no}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您有新的结算单等待确认。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有新的结算单等待确认，起止时间：开始时间：{$state_time}，结束时间：{$end_time}，结算单号：{$bill_no}。
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
</p>',
    'smt_mail_forced' => '0',
  ),
  'store_bill_gathering' => 
  array (
    'smt_code' => 'store_bill_gathering',
    'smt_name' => '结算单已经付款提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您的结算单平台已付款，请注意查收，结算单编号：{$bill_no}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您的结算单平台已付款，请注意查收，结算单编号：{$bill_no}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您的结算单平台已付款，请注意查收。',
    'smt_mail_content' => '<p>
	</p><p>
		{$site_name}提醒：
	</p>

<p>
	您的结算单平台已付款，请注意查收，结算单编号：{$bill_no}。
	</p><p>
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
    'smt_mail_forced' => '0',
  ),
  'store_cost' => 
  array (
    'smt_code' => 'store_cost',
    'smt_name' => '店铺消费提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '您有一条新的店铺消费记录，金额：{$price}，操作人：{$seller_name}，备注：{$remark}。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】您有一条新的店铺消费记录，金额：{$price}，操作人：{$seller_name}，备注：{$remark}。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：您有一条新的店铺消费记录。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	您有一条新的店铺消费记录，金额：{$price}，操作人：{$seller_name}，备注：{$remark}。
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
    'smt_mail_forced' => '0',
  ),
  'store_expire' => 
  array (
    'smt_code' => 'store_expire',
    'smt_name' => '店铺到期提醒',
    'smt_message_switch' => '1',
    'smt_message_content' => '你的店铺即将到期，请及时续期。',
    'smt_message_forced' => '1',
    'smt_short_switch' => '0',
    'smt_short_content' => '【{$site_name}】你的店铺即将到期，请及时续期。',
    'smt_short_forced' => '0',
    'smt_mail_switch' => '0',
    'smt_mail_subject' => '{$site_name}提醒：你的店铺即将到期，请及时续期。',
    'smt_mail_content' => '<p>
	{$site_name}提醒：
</p>
<p>
	你的店铺即将到期，请及时续期。
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
</p>',
    'smt_mail_forced' => '0',
  ),
);