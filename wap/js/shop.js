/**
 * all shop v3
 */


$(function() {
    $.ajax({
        url:ApiUrl+"/index.php?act=supermarket_index",
        type:'get',
        jsonp:'callback',
        dataType:'jsonp',
        success:function(result){
            var data = result.datas;
            data.WapSiteUrl = WapSiteUrl;
            var html = template.render('category-one', data);
            $("#categroy-cnt").html(html);
        }
    });
});