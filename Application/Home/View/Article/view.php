<style type="text/css">

.article-container {
	/*background-color: #0099FF;*/
	background-color: #ffffff;
	padding-left: 20px;
	padding-right: 20px;
	padding-top: 30px;
	margin-top: 50px;
	/*box-shadow: 0 0 3px rgba(0,0,0,0.5);*/
	box-shadow: 0 0 10px -4px #000;
	margin-bottom: 20px;
}

.title {
	margin-top: 0px;
	margin-bottom: 10px;
	font-size: 30px;
	height: 70px;
	line-height: 70px;
	vertical-align: middle;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
	/*text-shadow: 1px 1px 2px #3399FF, 0 0 0 #000;
	color: rgba(0,0,0,0.4);*/
	text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
	color: #000;
}

.subtitle {
	height: 40px;
	font-size: 18px;
	vertical-align: middle;
	line-height: 40px;
}

.calendar {
	color: #666;
	margin-right: 10px;
}
.calendar:hover {
	color: #000;
}

.label {
	margin-left: auto;
	margin-right: 0px;
}
.label:hover {
	box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.4) inset, -1px -1px 1px 0 rgba(255,255,255,0.4) inset;
}

.content {
	margin-top: 20px;
	padding-top: 10px;
	padding-bottom: 40px;
	color: #000;
}

.main-container {
	padding-left: 0px;
	padding-right: 0px;
}

.share-banner {
	padding: 10px;
	text-align: right;
	line-height: 22px;
	vertical-align: middle;
}

.share-banner > span {
	position: relative;
	top: -4px;
	font-size: 12px;
	line-height: 16px;
	vertical-align: middle;
	height: 16px;
}

.share-banner .icons-container {
	display: inline-block;
	height: 22px;
}

.share-banner iframe {
	height: 22px;
}

span.xn_share_wrapper {
	display: inline-block;
	position: relative;
	top: -2px;
}
</style>

<include file="Public:common_qzone_share" />
<div class="article-container margin-horizontal">
	<div class="title">{$article.title}</div>
	<div class="subtitle">
		<a class="button"><span class="calendar">{$article.create_time|translateDate}</span></a>
		<a class="button"><span class="label label-warning">{$article.tag|translateTag="Article",###}</span></a>
	</div>
	<div class="divider divider-horizontal"></div>
	<div class="share-banner">
		<span>分享到：</span>
		<div class="icons-container">
			<script type="text/javascript">
				var title = "{$article.title}";
				share_qzone({
					desc: "我分享了张家治的日志《{$article.title}》",
					summary: new String("{$article.summary}").slice(1, 128),
					title: "{$article.title}"
				});
			</script>
			<!-- <a href="javascript:void(0);" onclick="window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(document.location.href))+'&title='+{$article.title};return false;" title="分享到QQ空间" style="background-image:url('http://qzonestyle.gtimg.cn/qzone_v6/proj_connect_open/sprite/open_share_icon_widget.png?max_age=19830211&d=0213145612');background-position:-53px -34px; height:16px; width:16px; display:inline-block;"></a> -->
			<!-- <a href="http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('{$article.title}')+'"&appkey=433903842&pic class="t1" target="_blank" style="background-image:url('http://img.t.sinajs.cn/t4/appstyle/widget/images/shareButton/share_icon_mini.png?id=1375775002754')"  onclick="window.open('http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('{$article.title}')+'&appkey=433903842&pic')" ><img src="http://img.t.sinajs.cn/t4/appstyle/widget/images/shareButton/share_icon_mini.png?id=1375775002754" alt="分享到新浪微博" /></a>');</script> -->
			<wb:share-button appkey="xkq4I" addition="simple" type="icon" ralateUid="2121257510" pic="http%3A%2F%2Fwww.cosmozhang.com%2FPublic%2Fimg%2Flogo_128.png"></wb:share-button>
			<!--<script type="text/javascript" src="http://tj.see-say.com/code/tianji_r.js?move=0" charset=utf-8></script>-->
			<!-- <a href="javascript:void((function(s,d,e){if(/xiaonei\.com/.test(d.location))return;var%20f='http://share.xiaonei.com/share/buttonshare.do?link=',u=d.location,l=d.title,p=[e(u),'&amp;title=',e(l)].join('');function%20a(){if(!window.open([f,p].join(''),'xnshare',['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent));"><img src="更换成自己的图片地址/images/renren.gif" alt="分享到校内人人网" border="0" height="16" width="16"></a> -->
			<script type="text/javascript" src="http://widget.renren.com/js/rrshare.js"></script>
			<script>
        var imgUrl = "图片地址";
        var lineLink = "网址";
        var descContent = '爱在五月，\n\n妈咪爱1+1亲子健康之旅开启全国行首站----重庆站妈咪爱活性益生菌';
        var shareTitle = '标题';
        var appid = '';
         
        function shareFriend() {
            WeixinJSBridge.invoke('sendAppMessage',{
                "appid": appid,
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                //_report('send_msg', res.err_msg);
            })
        }
        function shareTimeline() {
            WeixinJSBridge.invoke('shareTimeline',{
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                   //_report('timeline', res.err_msg);
            });
        }
        function shareWeibo() {
            WeixinJSBridge.invoke('shareWeibo',{
                "content": descContent,
                "url": lineLink,
            }, function(res) {
                //_report('weibo', res.err_msg);
            });
        }
        // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            // 发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
                shareFriend();
            });
            // 分享到朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                shareTimeline();
            });
            // 分享到微博
            WeixinJSBridge.on('menu:share:weibo', function(argv){
                shareWeibo();
            });
        }, false);
			</script>
			<a name="xn_share" onclick="shareClick()" type="icon" href="javascript:;"></a>
			<script type="text/javascript">
				function shareClick() {
					var rrShareParam = {
						resourceUrl : '',	//分享的资源Url
						srcUrl : '',	//分享的资源来源Url,默认为header中的Referer,如果分享失败可以调整此值为resourceUrl试试
						pic : '',		//分享的主题图片Url
						title : '',		//分享的标题
						description : ''	//分享的详细描述
					};
					rrShareOnclick(rrShareParam);
				}
			</script>
		</div>
	</div>
	<div class=content>
		{$article.content}
	</div>
</div>