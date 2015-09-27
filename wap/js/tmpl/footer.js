$(function (){
    var memberHtml = '<a class="btn mr5" href="'+WapSiteUrl+'/tmpl/member/member.html?act=member">个人中心</a>';
    var act = GetQueryString("act");
    if(act && act == "member"){
        memberHtml = '<a class="btn mr5" id="logoutbtn" href="javascript:void(0);">注销账号</a>';
    }
    var tmpl = '<div class="footer">'
        +'<div class="footer-top">'
            +'<div class="footer-tleft">'+ memberHtml +'</div>'
            +'<a href="javascript:void(0);"class="gotop">'
                +'<span class="gotop-icon"></span>'
                +'<p>回顶部</p>'
            +'</a>'
        +'</div>'
        +'<div class="footer-content">'
            +'<p class="link">'
                  +'<a href="'+WapSiteUrl+'" class="standard">手机版首页</a>'
                +'<a href="'+AndroidSiteUrl+'">下载Android客户端</a>'
            +'</p>'
            /*+'<p class="copyright">'
                +'版权所有 2014-2015 © www.33hao.com'
            +'</p>'*/
        +'</div>'
    +'</div>';
	 var tmpl2 = '<div id="bottom">'
		+'<div style=" height:40px;">'
  +'<div id="nav-tab" style="bottom:-40px;">'
            +'<div id="nav-tab-btn"><i class="fa fa-chevron-down"></i></div>'
            +'<div class="clearfix tab-line nav">'
      +'<div class="tab-line-item" style="width:22%;" ><a href="'+WapSiteUrl+'"><i class="fa fa-home"></i><br>首页</a></div>'
      +'<div class="tab-line-item" style="width:22%;" ><a href="'+WapSiteUrl+'/tmpl/product_first_categroy.html"><i class="fa fa-th-list"></i><br>分类</a></div>'
      +'<div class="tab-line-item get_down" style="width:12%;line-height:40px;padding-top:5px;" ><i style="font-size:30px;" class="fa fa-chevron-circle-down"></i><br></div>'
      +'<div class="tab-line-item" style="width:22%;position: relative;" ><a href="'+WapSiteUrl+'/tmpl/cart_list.html"><i class="fa fa-shopping-cart"></i><br>购物车</a></div>'
      +'<div class="tab-line-item" style="width:22%;" ><a href="'+WapSiteUrl+'/tmpl/member/member.html?act=member"><i class="fa fa-user"></i><br>个人中心</a></div>'
    +'</div>'
   +'</div>'
+'</div>'
		+'<div style="z-index: 10000; border-radius: 3px; position: fixed; background: none repeat scroll 0% 0% rgb(255, 255, 255); display: none;" id="myAlert" class="modal hide fade">'
  +'<div style="text-align: center;padding: 15px 0 0;" class="title"></div>'
  +'<div style="min-height: 40px;padding: 15px;" class="modal-body"></div>'
  +'<div style="padding:3px;height: 35px;line-height: 35px;" class="alert-footer">'
  +'<a style="padding-top: 4px;border-top: 1px solid #ddd;display: block;float: left;width: 50%;text-align: center;border-right: 1px solid #ddd;margin-right: -1px;" class="confirm" href="javascript:;">Save changes</a><a aria-hidden="true" data-dismiss="modal" class="cancel" style="padding-top: 4px;border-top: 1px solid #ddd;display: block;float: left;width: 50%;text-align: center;" href="javascript:;">关闭</a></div>'
+'</div>'
		+'<div style="display:none;" class="tips"><i class="fa fa-info-circle fa-lg"></i><span style="margin-left:5px" class="tips_text"></span></div>'
		+'<div class="bgbg" id="bgbg" style="display: none;"></div>'
        +'</div>'
	+'</div>';
	var render = template.compile(tmpl);
	var html = render();
	$("#footer").html(html+tmpl2);
    //回到顶部
    $(".gotop").click(function (){
        $(window).scrollTop(0);
    });
    var key = getcookie('key');
	$('#logoutbtn').click(function(){
		var username = getcookie('username');
		var key = getcookie('key');
		var client = 'wap';
		$.ajax({
			type:'get',
			url:ApiUrl+'/index.php?act=logout',
			data:{username:username,key:key,client:client},
			success:function(result){
				if(result){
					delCookie('username');
					delCookie('key');
					location.href = WapSiteUrl+'/tmpl/member/login.html';
				}
			}
		});
	});
});

//bottom nav 33 hao-v3 by 33h ao.com Qq 1244 986 40
$(function() {
	setTimeout(function(){
		if($("#content .container").height()<$(window).height())
		{
			$("#content .container").css("min-height",$(window).height());
		}
	},300);
	$("#bottom .nav .get_down").click(function(){
	$("#bottom .nav").animate({ bottom: '-50px'},{duration:'slow'});
		//$("#bottom .nav").animate({"bottom":"-50px"});
		$("#nav-tab").animate({"bottom":"0px"});
	});
	$("#nav-tab-btn").click(function(){
	$("#bottom .nav").animate({ bottom: '0'},{duration:'slow'});
	$("#nav-tab").animate({ bottom: '-40px'},{duration:'slow'});
	
	//	$("#bottom .nav").animate({"bottom":"0px"});
		//$("#nav-tab").animate({"bottom":"-40px"});
		
	});
	setTimeout(function(){$("#bottom .nav .get_down").click();},500);
	$("#scrollUp").click(function(t) {
		$("html, body").scrollTop(300);
		$("html, body").animate( {
			scrollTop : 0
		}, 300);
		t.preventDefault()
	});
});