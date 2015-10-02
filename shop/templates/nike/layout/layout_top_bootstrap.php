<?php defined('InShopNC') or exit('Access Invalid!');?>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="site-logo navbar-brand" href="<?php echo BASE_SITE_URL;?>" title="<?php echo $lang['homepage'];?>" alt="<?php echo $lang['homepage'];?>"><img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$output['setting_config']['site_logo']; ?>" class="pngFix" style="max-height: 50px" title="<?php echo $output['setting_config']['site_name']; ?>" alt="<?php echo $output['setting_config']['site_name']; ?>"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">男子 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">休闲</a></li>
              <li><a href="#">跑步</a></li>
              <li><a href="#">篮球</a></li>
              <li><a href="#">美式橄榄球</a></li>
              <li><a href="#">足球</a></li>
              <li><a href="#">健身/训练</a></li>
              <li><a href="#">棒球/垒球</a></li>
              <li><a href="#">高尔夫</a></li>
              <li><a href="#">滑板</a></li>
              <li><a href="#">网球</a></li>
              <li><a href="#">长曲棍球</a></li>
              <li><a href="#">运动生活</a></li>
              <li><a href="#">乔丹</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">女子 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">休闲</a></li>
              <li><a href="#">跑步</a></li>
              <li><a href="#">篮球</a></li>
              <li><a href="#">足球</a></li>
              <li><a href="#">健身/训练</a></li>
              <li><a href="#">棒球/垒球</a></li>
              <li><a href="#">高尔夫</a></li>
              <li><a href="#">滑板</a></li>
              <li><a href="#">网球</a></li>
              <li><a href="#">运动生活</a></li>
              <li><a href="#">竞走</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">男孩 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">休闲</a></li>
              <li><a href="#">跑步</a></li>
              <li><a href="#">篮球</a></li>
              <li><a href="#">足球</a></li>
              <li><a href="#">运动生活</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">年龄</li>
              <li><a href="#">童年(7~12岁)</a></li>
              <li><a href="#">幼儿(4~7岁)</a></li>
              <li><a href="#">婴孩(0~4岁)</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">女孩 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">休闲</a></li>
              <li><a href="#">跑步</a></li>
              <li><a href="#">篮球</a></li>
              <li><a href="#">足球</a></li>
              <li><a href="#">运动生活</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">年龄</li>
              <li><a href="#">童年(7~12岁)</a></li>
              <li><a href="#">幼儿(4~7岁)</a></li>
              <li><a href="#">婴孩(0~4岁)</a></li>
            </ul>
          </li>
        </ul>
      <ul class="nav navbar-nav navbar-right">

        <form class="navbar-form navbar-left" id="search" method="get" action="<?php echo SHOP_SITE_URL;?>">
            <input type="hidden" value="search" id="search_act" name="act">
            <input name="keyword" id="keyword" value="<?php echo $_GET['keyword'];?>" maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search" type="text" class="form-control" placeholder="请输入商品关键字">
          </form>
        <?php if ($_SESSION['is_login'] == '1'){ ?>
            <li class="dropdown">
                <a href="<?php echo urlShop('member','home');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['member_name'];?>
                <?php if ($output['member_info']['level_name']){ ?>
                    <span class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go('<?php echo urlShop('pointgrade','index');?>');"><?php echo $output['member_info']['level_name'];?></span>
                <?php } ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_message&op=message">站内消息(<span><?php echo $output['message_num']>0 ? $output['message_num']:'0';?></span>)</a></li>
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_consult&op=my_consult">咨询回复(<span id="member_consult">0</span>)</a></li>
                    
                    
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">我的订单</li>
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_new">待付款订单</a></li>
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_send">待确认收货</a></li>
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_noeval">待评价交易</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><?php echo $lang['nc_favorites'];?></li>
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fglist">商品收藏</a></li>
                    <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fslist">店铺收藏</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo urlShop('login','logout');?>"><?php echo $lang['nc_logout'];?></a></li>
                </ul>
          </li>
        <?php } else { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">登录 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo urlShop('login');?>"><?php echo $lang['nc_login'];?></a></li>
            <li><a href="<?php echo urlShop('login','register');?>"><?php echo $lang['nc_register'];?></a></li>
          </ul>
         </li>
        <?php } ?>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">联系 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">帮助中心</a></li>
            <li><a href="#">客服人员</a></li>
          </ul>
        </li>
        <?php if ($output['cart_goods_num'] > 0) { ?><li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=cart"><span class="badge"><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $output['cart_goods_num'];?></span></a>
        </li><?php } ?>
      </ul>
    </div>
  </div>
</nav>