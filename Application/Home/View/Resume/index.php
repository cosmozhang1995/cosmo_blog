<style type="text/css">
.resume-container {
	overflow: hidden;
	padding-bottom: 20px;
	margin: 0 150px;
	margin-top: 100px;
}
.resume-row {
	width: 100%;
}

.resume-row-info {
	box-shadow: 0 0 4px 0 #000;
	background-color: #ccccff;
	/*border-top: 1px #000 solid;*/
	padding: 10px;
	min-height: 245px;
}
.resume-row-info .photo {
	box-shadow: 0 0 4px 0 #000 inset;
	float: left;
	width: 150px;
	height: 225px;
}
.resume-row-info .photo img {
	width: 100%;
	height: 100%;
}
.resume-row-info .info {
	margin-left: 170px;
	white-space: nowrap;
}
.resume-row-info .info .item-block {
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flex;
	display: -webkit-flex;
	display: flex;
}
.resume-row-info .info .item-column {
	display: inline-block;
	width: auto;
	margin-right: 10px;
	box-flex: none;
	-moz-box-flex: none;
	-webkit-box-flex: 0.0;
}
.resume-row-info .info .item-column:last-child {
	margin-right: 20px;
}
.resume-row-info .info .item-column-padder {
	display: inline-block;
	-moz-box-flex: 1 0;
	-webkit-box-flex: 1 0;
	-ms-flex: 1 0;
	-webkit-flex: 1 0;
	flex: 1 0;
}
.resume-row-info .info .item-row {
	margin-bottom: 10px;
	white-space: nowrap;
}
.resume-row-info .info .item-row:last-child {
	/*margin-bottom: 0px;*/
}
.resume-row-info .info .item {
	/*margin-right: 25px;*/
	/*width: 200px;*/
	color: #330066;
	line-height: 20px;
	vertical-align: top;
}
.resume-row-info .info .item a {
	color: inherit;
}
.resume-row-info .info .item:last-child {
	/*margin-right: 0px;*/
}
.resume-row-info .info .item .icon {
	display: block;
	width: 35px;
	height: 100%;
	text-align: center;
	float: left;
}
.resume-row-info .info .item .desc {
	display: block;
	white-space: normal;
	/*width: 100%;*/
	margin-left: 35px;
}
.resume-row-info .info .item .desc.link-in {
	white-space: nowrap;
	overflow: hidden;
	text-overflow:ellipsis;
}
/*.resume-row-info .info .item .desc.link-in a {
	width: 100%;
	white-space: nowrap;
	text-overflow:ellipsis;
}*/
.resume-row-info .info .item .fa {
	height: 20px;
	line-height: 20px;
	font-size: 20px;
	margin-right: 5px;
}
.resume-row-info .info .item .desc {
	/*display: inline-block;
	height: 20px;
	line-height: 20px;
	vertical-align: middle;*/
	font-size: 16px;
	/*margin-top: -5px;*/
}

.resume-row-skills {
	height: 280px;
	position: relative;
	width: 50%;
	left: 50%;
	top: 140px;
	/*z-index: 10;*/
}
.resume-row-skills .skill-container {
	display: inline-block;
	padding: 10px;
	border-radius: 50%;
	position: absolute;
}
.resume-row-skills .skill-container:hover {
	background-color: rgba(200,200,200,0.5);
	transform: scale(1.5);
	-webkit-transform: scale(1.5);
	-ms-transform: scale(1.5);
	-o-transform: scale(1.5);
	-moz-transform: scale(1.5);
	z-index: 1;
}
.resume-row-skills .skill {
	display: inline-block;
	border-radius: 50%;
	vertical-align: middle;
	text-align: center;
	cursor: pointer;
	box-shadow: 0 0 10px -4px #000;
}
.resume-row-skills .skill-text {
	color: white;
	text-align: center;
	display: inline-block;
	width: auto;
	height: auto;
}

.resume-row-time-line {
	position: relative;
	margin-top: 20px;
}
.resume-row-time-line .time-line {
	position: absolute;
	height: 100%;
	width: 10px;
	top: 0px;
	left: 50%;
	margin-left: -5px;
	z-index: -10;
	background-color: rgb(153,204,51);
}
.resume-row-time-line .time-line > div {
	height: 100%;
	width: 100%;
	background: rgb(225,225,225); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(225,225,225,1) 0%, rgba(225,225,225,1) 50%, rgba(225,225,225,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(225,225,225,1)), color-stop(50%,rgba(225,225,225,1)), color-stop(100%,rgba(225,225,225,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(225,225,225,1) 0%,rgba(225,225,225,1) 50%,rgba(225,225,225,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1e1e1', endColorstr='#e19696',GradientType=0 ); /* IE6-9 */
}
.resume-row-time-line .item {
	min-height: 50px;
}
.resume-row-time-line .item-title {
	text-align: center;
	margin-bottom: 20px;
}
.resume-row-time-line .item-title .title {
	display: inline-block;
	height: 22px;
	line-height: 22px;
	/*width: 150px;*/
	padding: 5px;
	background-color: rgb(150,150,150);
	color: white;
	font-family: Verdana, Geneva, sans-serif;
	border-radius: 5px;
	/*padding-top: 0px;*/
}
.resume-row-time-line .item-title .title span {
	display: inline-block;
	height: 12px;
	line-height: 12px;
	font-size: 12px;
}
.resume-row-time-line .item-foot {
	text-align: center;
	margin-bottom: 20px;
}
.resume-row-time-line .item-foot .foot {
	display: inline-block;
	height: 22px;
	line-height: 22px;
	/*width: 150px;*/
	padding: 5px;
	background-color: rgb(150,150,150);
	color: white;
	font-family: Verdana, Geneva, sans-serif;
	border-radius: 5px;
	/*padding-top: 0px;*/
}
.resume-row-time-line .item-foot .foot span {
	display: inline-block;
	height: 12px;
	line-height: 12px;
	font-size: 12px;
}
.resume-row-time-line .item {
	display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
	display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
	display: -ms-flexbox;      /* TWEENER - IE 10 */
	display: -webkit-flex;     /* NEW - Chrome */
	display: flex;
}
.resume-row-time-line .item .column-middle {
	width: 20px;
	-webkit-box-flex: 0;      /* OLD - iOS 6-, Safari 3.1-6 */
	-moz-box-flex: 0;         /* OLD - Firefox 19- */
	-webkit-flex: 0;          /* Chrome */
	-ms-flex: 0;              /* IE 10 */
	flex: 0;                  /* NEW, Spec - Opera 12.1, Firefox 20+ */
}
.resume-row-time-line .item .column-left,.column-right {
	-webkit-box-flex: 1;      /* OLD - iOS 6-, Safari 3.1-6 */
	-moz-box-flex: 1;         /* OLD - Firefox 19- */
	-webkit-flex: 1;          /* Chrome */
	-ms-flex: 1;              /* IE 10 */
	flex: 1;                  /* NEW, Spec - Opera 12.1, Firefox 20+ */
}
.resume-row-time-line .item .column {
	padding: 10px;
}
.resume-row-time-line .item .column-left {
	text-align: right;
}
.resume-row-time-line .item .column-right {
	text-align: left;
}
.resume-row-time-line .item .column .quot-container {
	display: block;
	position: relative;
	padding-left: 10px;
	padding-right: 10px;
}
.resume-row-time-line .item .column .quot-container .quot-block {
	display: inline-block;
	min-height: 40px;
	border-radius: 5px;
	text-align: left;
	padding: 10px;
	min-width: 40%;
	max-width: 80%;
	cursor: pointer;
	/*padding-top: 20px;*/
}
.resume-row-time-line .item .column .quot-container .quot-arrow {
	display: inline-block;
	width: 0px;
	height: 0px;
	border-width: 10px;
	border-style: solid;
	position: absolute;
	top: 10px;
}
.resume-row-time-line .item .column-left .quot-container .quot-arrow {
	/*border-style: none none solid none;*/
	right: -10px;
}
.resume-row-time-line .item .column-right .quot-container .quot-arrow {
	/*border-style: solid none none none;*/
	left: -10px;
}
.resume-row-time-line .item .column .quot-container .quot-block .title {
	/*display: inline-block;*/
	font-size: 16px;
	font-family: Verdana, Geneva, sans-serif;
	color: #ffffff;
}
.resume-row-time-line .item .column .quot-container .quot-block .desc {
	/*display: inline-block;*/
	margin-top: 10px;
	font-size: 13px;
	font-family: Verdana, Geneva, sans-serif;
	color: #eeeeee;
}
.resume-row-time-line .item .column .quot-container .quot-block .desc .desc-inner {
}
.resume-row-time-line .item .column .info-container {
	display: inline-block;
	position: relative;
}
.resume-row-time-line .item .column-left .info-container {
	text-align: right;
}
.resume-row-time-line .item .column-right .info-container {
	text-align: left;
	padding-top: 0px;
}
.resume-row-time-line .item .column .info-container .info-tag {
	display: block;
	font-size: 16px;
	font-family: Verdana, Geneva, sans-serif;
}
.resume-row-time-line .item .column .info-container .info-time {
	display: block;
	font-size: 13px;
	font-family: Verdana, Geneva, sans-serif;
	color: #999999;
}
.resume-row-time-line .item .column-middle .circle {
	background-color: #FFFFFC;
	margin-top: 10px;
	margin-left: -10px;
	border-radius: 50%;
	width: 20px;
	height: 20px;
	border-width: 3px;
	border-color: rgb(225,225,225);
	border-style: solid;
}

/*#resume-row-time-line-education .quot-block {
	background-color: rgb(153,204,51);
}
#resume-row-time-line-education .quot-arrow {
	border-color: rgb(153,204,51);
}*/
</style>

<div class="resume-container">
	<div class="resume-row resume-row-info">
		<div class="photo">
			<img src="__IMG_RES__/myphoto.jpg"/>
		</div>
		<div class="info">
			<div class="item-block" style="height:50px;margin-bottom:30px;">
				<img src="__IMG_RES__/resume_signature.png" style="height:100%;"/>
			</div>
			<div class="item-block">
			<div class="item-column">
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-graduation-cap"></i></span><span class="desc">北京邮电大学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通信工程专业</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-map-marker"></i></span><span class="desc">北京市海淀区西土城路10号</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-mobile"></i></span><span class="desc">+86 18610965714</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-envelope"></i></span><span class="desc link-in"><a href="mailto:zjzxz3006@126.com">zjzxz3006@126.com</a></span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-qq"></i></span><span class="desc">597789699</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-google-plus-square"></i></span><span class="desc link-in"><a href="mailto:cosmozhang1995@gmail.com">cosmozhang1995@gmail.com</a></span>
					</div>
				</div>
			</div>
			<div class="item-column-padder"></div>
			<div class="item-column">
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-cogs"></i></span><span class="desc">Front Ender&nbsp;&nbsp;&amp;&nbsp;&nbsp;PHPer</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-heart"></i></span><span class="desc">Awesome CSS&nbsp;&amp;&nbsp;Flawless RESTful&nbsp;&amp;&nbsp;Agile development</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-github"></i></span><span class="desc"><a target="_blank" href="https://github.com/cosmozhang1995">cosmozhang1995</a></span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-stack-overflow"></i></span><span class="desc"><a target="_blank" href="http://stackoverflow.com/users/3429266/cosmozhang">cosmozhang</a></span>
					</div>
				</div>
				<div class="item-row">
					<div class="item">
						<span class="icon"><i class="fa fa-coffee"></i></span><span class="desc">Soccer&nbsp;&nbsp;&amp;&nbsp;&nbsp;Photograph</span>
					</div>
				</div>
				<div class="item-row">
					<div class="item" style="white-space:normal; display:block;">
						Also a developer of:&nbsp;&nbsp;<i class="fa fa-android"></i>Android&nbsp;&nbsp;<i class="fa fa-drupal"></i>Drupal&nbsp;&nbsp;<i class="fa fa-weixin"></i>Wechat Platform
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="resume-row-skills" class="resume-row resume-row-skills">
	</div>
	<div id="resume-row-time-line-container">
	</div>
</div>

<script type="text/javascript">
var mySkills = 
function personalSkills (skills) {
	var skills = skills;

	function addSkill(skill) {
		var innerDiv = document.createElement('div');
		innerDiv.className = "skill-text";
		innerDiv.innerHTML = skill.displayName;
		innerDiv.style.fontSize = skill.css.fontSize + 'px';
		var div = document.createElement('div');
		div.className = "skill";
		div.style.width = skill.css.size + 'px';
		div.style.height = skill.css.size + 'px';
		div.style.lineHeight = skill.css.size + 'px';
		div.style.backgroundColor = skill.css.backgroundColor;
		var outerDiv = document.createElement('div');
		outerDiv.className = "skill-container";
		outerDiv.style.top = skill.css.y - (skill.css.size/2) + 'px';
		outerDiv.style.left = skill.css.x - (skill.css.size/2) - 10 + 'px';
		document.getElementById('resume-row-skills').appendChild(outerDiv);
		outerDiv.appendChild(div);
		div.appendChild(innerDiv);
		thediv = outerDiv;
	}
	function initialSkills() {
		document.getElementById('resume-row-skills').removeAllChildNodes();
		for (var i = 0; i < skills.length; i++) {
			addSkill(skills[i]);
		}
	}
	initialSkills();
}
$(document).ready(function() {
	personalSkills(mySkills);
});
</script>
<script type="text/javascript">
var myCourse = {
	configs: {
		'education': {
			'color': 'rgb(153,204,51)',
			'tagColor': 'rgb(255,102,102)',
			'icon': 'graduation-cap',
			'title': '教育经历&nbsp;EDUCATION',
			'foot': 'TODAY'
		},
		'career': {
			'color': 'rgb(0,153,204)',
			'tagColor': 'rgb(153,204,51)',
			'icon': 'rocket',
			'title': '工作经历&nbsp;CAREER',
			'foot': 'TODAY'
		},
		'project': {
			'color': 'rgb(255,102,102)',
			'tagColor': 'rgb(0,153,204)',
			'icon': 'cubes',
			'title': '项目经历&nbsp;PROJECTS',
			'foot': 'TODAY'
		}
	},
	education: [
		{
			'startYear': 2009,
			'startMonth': 9,
			'endYear': 2012,
			'endMonth': 6,
			'tag': 'Senior High',
			'title': '河南省信阳高中',
			'desc': '校信息办助理'
		},
		{
			'startYear': 2012,
			'startMonth': 9,
			'endYear': null,
			'endMonth': null,
			'tag': 'University',
			'title': '北京邮电大学',
			'desc': '通信工程专业试点班培养方案<br/>北邮学生会网络部副部长'
		}
	],
	career: [
		{
			'startYear': 2012,
			'startMonth': 9,
			'endYear': 2014,
			'endMonth': 6,
			'tag': 'Campus Geek',
			'title': '北京邮电大学学生会',
			'desc': '<i class="fa fa-user"></i>&nbsp;网络部副部长<br/><br/>主讲部门内部软件开发技能培训<br/>主持学生会官网、微信平台、手机App等新媒体平台开发和运维<br/>在任期间学生会网络宣传力度达到高潮'
		},
		{
			'startYear': 2014,
			'startMonth': 6,
			'endYear': 2014,
			'endMonth': 12,
			'tag': 'Front End',
			'title': '搜狐北京研发中心',
			'desc': '<i class="fa fa-user"></i>&nbsp;前端工程师<br/><br/>在职期间独立完成搜狐Otocyon系统前端<br/>查找修复项目过去前端遗留下来的问题，并整理代码'
		}
	],
	project: [
		{
			'startYear': 2013,
			'startMonth': 3,
			'endYear': 2013,
			'endMonth': 7,
			'tag': 'Android App',
			'title': '北邮学生会Android客户端',
			'desc': '<i class="fa fa-user"></i>&nbsp;负责人<br/><br/>主责整个 App 的开发<br/>负责课表查询功能模块的开发<br/>负责指导服务器端程序开发'
		},
		{
			'startYear': 2013,
			'startMonth': 8,
			'endYear': 2013,
			'endMonth': 12,
			'tag': 'Website',
			'title': '北邮学生会官方网站',
			'desc': '<i class="fa fa-user"></i>&nbsp;负责人<br/><br/>主责整个网站的开发<br/>指导前端开发<br/>协调前端程序员和 UI 平面设计人员<br/>负责指导服务器端程序开发'
		},
		{
			'startYear': 2013,
			'startMonth': 12,
			'endYear': 2014,
			'endMonth': 1,
			'tag': 'Wechat',
			'title': '“北邮学生会”微信平台',
			'desc': '<i class="fa fa-user"></i>&nbsp;独立开发者<br/><br/>使用 PHP 语言开发<br/>结合微信平台特性, 创造性地使用了“动作链”的思想,使得平台具有高拓展性和可编辑性。'
		},
		{
			'startYear': 2014,
			'startMonth': 3,
			'endYear': 2014,
			'endMonth': 6,
			'tag': 'Android App',
			'title': '基于大数据与智能优化算法的智慧校园安卓应用开发项目',
			'desc': '<i class="fa fa-user"></i>&nbsp;技术负责人<br/><br/>统筹合并各版块程序<br/>负责“学生教学和生活信息查询”的开发<br/>获得了北京邮电大学 15 万元的投资'
		},
		{
			'startYear': 2014,
			'startMonth': 3,
			'endYear': 2014,
			'endMonth': 6,
			'tag': 'Web App',
			'title': '大学生创业项目“停吧”',
			'desc': '<i class="fa fa-user"></i>&nbsp;技术负责人<br/><br/>空闲车位自由出租/租赁平台<br/>结合微信平台,打造了一个基于 HTML5 的移动应用<br/>2014年北京市“创青春”大学生创业大赛银奖<br/><br/>负责前端开发<br/>协助后台程序开发'
		},
		{
			'startYear': 2014,
			'startMonth': 3,
			'endYear': 2014,
			'endMonth': 5,
			'tag': 'Wechat',
			'title': '大学生创业项目“基于微信的电子会员卡:云台”',
			'desc': '<i class="fa fa-user"></i>&nbsp;技术负责人<br/><br/>负责前端开发，协助后台程序开发<br/>为小微商铺开发微信平台电子会员卡系统及OA系统<br/>开发自有微信平台,方便客人统一管理自己的会员卡<br/>已为北京邮电大学周边十余家商铺提供会员卡系统，使得这些商铺的业绩有了显著提升'
		},
		{
			'startYear': 2014,
			'startMonth': 6,
			'endYear': 2014,
			'endMonth': 8,
			'tag': 'Web Application',
			'title': '搜狐公司Otocyon数据中心智能管理平台',
			'desc': '<i class="fa fa-user"></i>&nbsp;前端工程师<br/><br/>主责前端开发<br/>指导后台通过代理方式完成跨站登录<br/>修复过往前端遗留的BUG，整理杂乱的代码<br/>完成前端项目文档'
		}
	]
}
function personalCourse(course) {

	function checkDescHover(e, ele, checkIn) {
		var title = $(ele).find('.title')[0];
		var descInner = $(ele).find('.desc-inner')[0];
		var desc = $(ele).find('.desc')[0];
		var appendHeight = 20 + descInner.clientHeight;
		// if (!checkIn) appendHeight -= 100;		// Always has a error 100, I don't know why, waiting to solve
		var pos = title.getPosition();
		pos.bottom += appendHeight;
		var clientX = e.clientX + document.body.scrollLeft;
		var clientY = e.clientY + document.body.scrollTop;
		console.log({x:clientX,y:clientY}, pos);
		if (clientX <= pos.right && clientX >= pos.left && clientY <= pos.bottom && clientY >= pos.top) 
			return true;
		return false;
	}

	function mouseOver(e) {
		console.log('in');
		if (checkDescHover(e,this, true)) {
			var theItem = $(this).parents('.item')[0];
			var theBackColor = $('body').css('background-color');
			$(theItem).find('.column-middle .circle').css('background-color', this.style.backgroundColor);
			$(theItem).find('.column-middle .circle').css('border-color', theBackColor);
			$(this).find('.desc').show(200, function() {
				var windowBottom = document.documentElement.clientHeight + document.body.scrollTop||document.documentElement.scrollTop;
				var bottomMargin = windowBottom - ($(this).parents('.item')[0].getPosition().bottom) ;
				if (bottomMargin < 0) {
					var offset = -bottomMargin;
					var currScrollTop = document.body.scrollTop||document.documentElement.scrollTop;
					var toScrollTop = currScrollTop + offset + 'px';
					$(document.body).animate({'scrollTop': toScrollTop}, 200);
				}
			});
		}
	}

	function mouseOut(e) {
		console.log('out');
		if (!checkDescHover(e,this,false)) {
			var theItem = $(this).parents('.item')[0];
			var theBackColor = $('body').css('background-color');
			// $(theItem).find('.column-middle .circle').css('border-color', this.style.backgroundColor);
			$(theItem).find('.column-middle .circle').css('border-color', 'rgb(225,225,225)');
			$(theItem).find('.column-middle .circle').css('background-color', theBackColor);
			$(this).find('.desc').hide(200);
		}
	}

	function addItem(courseType, courseItem, contentInLeft) {
		var row = document.createElement('div');
		row.className = "item";
		var columnLeft = document.createElement('div');
		columnLeft.className = "column column-left";
		var columnMiddle = document.createElement('div');
		columnMiddle.className = "column column-middle";
		var columnRight = document.createElement('div');
		columnRight.className = "column column-right";
		var middleCircle = document.createElement('div');
		middleCircle.className = "circle";
		var infoBlock = document.createElement('div');
		infoBlock.className = "info-container";
		var quotBlock = document.createElement('div');
		quotBlock.className = "quot-container";
		var infoTag = document.createElement('div');
		infoTag.className = "info-tag";
		var infoTime = document.createElement('div');
		infoTime.className = "info-time";
		var quotBody = document.createElement('div');
		quotBody.className = "quot-block";
		var quotTitle = document.createElement('div');
		quotTitle.className = "title";
		var quotDesc = document.createElement('div');
		quotDesc.className = "desc";
		var quotDescInner = document.createElement('div');
		quotDescInner.className = "desc-inner";
		var quotArrow = document.createElement('div');
		quotArrow.className = "quot-arrow";

		quotTitle.innerHTML = courseItem.title;
		quotDescInner.innerHTML = courseItem.desc;
		infoTag.innerHTML = courseItem.tag;
		infoTime.innerHTML = courseItem.startYear;

		quotDesc.style.display = 'none';
		quotBody.onmouseover = mouseOver;
		quotBody.onmouseout = mouseOut;

		var config = course.configs[courseType];
		infoTag.style.color = config.tagColor;
		quotBody.style.backgroundColor = config.color;
		if (contentInLeft) {
			quotArrow.style.borderColor = 'transparent transparent transparent ' + config.color;
		} else {
			quotArrow.style.borderColor = 'transparent ' + config.color + ' transparent transparent';
		}

		$('#resume-row-time-line-' + courseType + ' .item-content')[0].appendChild(row);
		row.appendChild(columnLeft);
		row.appendChild(columnMiddle);
		row.appendChild(columnRight);
		columnMiddle.appendChild(middleCircle);
		if (contentInLeft) {
			columnLeft.appendChild(quotBlock);
			columnRight.appendChild(infoBlock);
		} else {
			columnRight.appendChild(quotBlock);
			columnLeft.appendChild(infoBlock);
		}
		quotBlock.appendChild(quotArrow);
		quotBlock.appendChild(quotBody);
		quotBody.appendChild(quotTitle);
		quotBody.appendChild(quotDesc);
		quotDesc.appendChild(quotDescInner);
		infoBlock.appendChild(infoTag);
		infoBlock.appendChild(infoTime);
	}

	function addItems(courseType) {
		addFrame(courseType);
		var config = course.configs[courseType];
		$('#resume-row-time-line-' + courseType + ' .time-line').css('background-color', config.color);
		$('#resume-row-time-line-' + courseType + ' .item-content *').remove();
		var theCourseItems = course[courseType];
		var contentInLeft = Math.random() >= 0.5 ? false : true;
		for (var i = 0; i < theCourseItems.length; i++) {
			contentInLeft = !contentInLeft;
			addItem(courseType, theCourseItems[i], contentInLeft);
		}
	}

	function addFrame(courseType) {
		if (document.getElementById('resume-row-time-line-' + courseType) == undefined) {
			var config = course.configs[courseType];
			var row = document.createElement('div');
			row.className = 'resume-row resume-row-time-line';
			row.id = 'resume-row-time-line-' + courseType;
			var timeLine = document.createElement('div');
			timeLine.className = 'time-line';
			var itemTitle = document.createElement('div');
			itemTitle.className = 'item-title';
			var itemTitleTitle = document.createElement('div');
			itemTitleTitle.className = 'title';
			var itemIconSpan = document.createElement('span');
			var itemTitleSpan = document.createElement('span');
			var itemIconIcon = document.createElement('i');
			itemIconIcon.className = 'fa fa-' + config.icon;
			var itemContent = document.createElement('div');
			itemContent.className = 'item-content';
			var itemFoot = document.createElement('div');
			itemFoot.className = 'item-foot';
			var itemFootFoot = document.createElement('div');
			itemFootFoot.className = 'foot';
			var itemFootSpan = document.createElement('span');
			itemTitleSpan.innerHTML = '&nbsp;' + config.title;
			itemFootSpan.innerHTML = config.foot;
			document.getElementById('resume-row-time-line-container').appendChild(row);
			row.appendChild(timeLine);
			timeLine.appendChild(document.createElement('div'));
			row.appendChild(itemTitle);
			itemTitle.appendChild(itemTitleTitle);
			itemTitleTitle.appendChild(itemIconSpan);
			itemIconSpan.appendChild(itemIconIcon);
			itemTitleTitle.appendChild(itemTitleSpan);
			row.appendChild(itemContent);
			row.appendChild(itemFoot);
			itemFoot.appendChild(itemFootFoot);
			itemFootFoot.appendChild(itemFootSpan);
		}
	}

	function addAllItems() {
		// addItems('education');
		for (var type in myCourse) {
			if (type != 'configs') {
				addItems(type);
			}
		}
	}

	addAllItems();
}
$(document).ready(function() {
	personalCourse(myCourse);
});
</script>