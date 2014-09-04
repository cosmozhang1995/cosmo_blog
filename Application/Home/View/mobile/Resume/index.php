<style type="text/css">
.section-box {
	padding: 10px;
	box-shadow: 1px 0px 7px 0px #000;
	color: #fff;
}
.portrait-container {
	text-align: center;
}
.portrait {
	display: inline-block;
	background-image: url("__IMG_RES__/myphoto-mobile.jpg");
	border-radius: 50%;
	background-size: 100% 100%;
	box-shadow: 2px 0px 10px -2px #000 inset;
}
@media screen and (max-width: 180px) {
	.portrait {
		width: 0px;
		height: 0px;
		box-shadow: none;
		display: none;
	}
	.portrait-container {
		/*margin-top: -0px;*/
	}
	.section-box.info {
		margin-top: -0px;
	}
}
@media screen and (min-width: 181px) and (max-width: 400px) {
	.portrait {
		width: 90px;
		height: 90px;
	}
	.section-box.info {
		margin-top: -45px;
	}
}
@media screen and (min-width: 401px) and (max-width: 800px) {
	.portrait {
		width: 150px;
		height: 150px;
	}
	.section-box.info {
		margin-top: -75px;
	}
}
@media screen and (min-width: 801px) and (max-width: 1200px) {
	.portrait {
		width: 180px;
		height: 180px;
	}
	.section-box.info {
		margin-top: -90px;
	}
}
@media screen and (min-width: 1201px) {
	.portrait {
		width: 240px;
		height: 240px;
	}
	.section-box.info {
		margin-top: -120px;
	}
}
.title {
	font-size: 22px;
}
.subtitle {
	font-size: 12px;
	margin-bottom: 10px;
}
.title,.subtitle {
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
	white-space: nowrap;
	overflow: hidden;
}
.desc {
	font-size: 16px;
}
.desc-col {
	display: inline-block;
}
.desc a {
	color: inherit;
}
.desc a:hover {
	color: inherit;
}
.desc a:active {
	color: inherit;
}
.desc a:visited {
	color: inherit;
}
.desc a:link {
	color: inherit;
}

.info {
	background-color: #e83f0c;
}
.skills {
	background-color: #e5bb00;
}
.education {
	background-color: #0c88e8;
}
.career {
	background-color: #0acc24;
}
.projects {
	background-color: #b200ff;
}

.skills .skill-bar-container {
	display: block;
	height: 20px;
	background-color: #fff;
	overflow: hidden;
	margin-bottom: 10px;
}
.skills .skill-bar-container .skill-bar {
	display: inline-block;
	padding-left: 5px;
	padding-right: 5px;
	height: 20px;
	line-height: 20px;
	font-size: 12px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	font-family: "Courier New", Courier, monospace;
	background-color: #b200ff;
}
.skills .skill-bar-container .skill-bar:last-child {
	/*margin-bottom: 0px;*/
}
.skills .skill-bar-container .skill-bar.skill-bar-1 {
	width: 10%;
}
.skills .skill-bar-container .skill-bar.skill-bar-2 {
	width: 20%;
}
.skills .skill-bar-container .skill-bar.skill-bar-3 {
	width: 30%;
}
.skills .skill-bar-container .skill-bar.skill-bar-4 {
	width: 40%;
}
.skills .skill-bar-container .skill-bar.skill-bar-5 {
	width: 50%;
}
.skills .skill-bar-container .skill-bar.skill-bar-6 {
	width: 60%;
}
.skills .skill-bar-container .skill-bar.skill-bar-7 {
	width: 70%;
}
.skills .skill-bar-container .skill-bar.skill-bar-8 {
	width: 80%;
}
.skills .skill-bar-container .skill-bar.skill-bar-9 {
	width: 90%;
}
.skills .skill-bar-container .skill-bar.skill-bar-10 {
	width: 100%;
}

.experience-section {
}
.time-line {
	position: absolute;
	left: 58px;
	top: 0px;
	display: inline-block;
	width: 4px;
	height: 100%;
	background-color: #fff;
}
.experience-container {
	position: relative;
}
.experience-list {
	display: block;
}
.experience-item {
	display: block;
	font-size: 0px;
	margin-bottom: 15px;
}
.experience-item .time {
	float: left;
	width: 50px;
	height: 20px;
	line-height: 23px;
	color: rgba(255,255,255,0.5);
	font-size: 12px;
	text-align: right;
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	vertical-align: middle;
}
.experience-item .pointer-container {
	float: left;
	width: 20px;
	height: 20px;
	position: relative;
}
.experience-item .pointer-container .pointer {
	display: inline-block;
	position: absolute;
	left: 5px;
	top: 5px;
	width: 10px;
	height: 10px;
	background-color: #fff;
	transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform-origin: 5px 5px;
	-webkit-transform-origin: 5px 5px;
	-moz-transform-origin: 5px 5px;
	-o-transform-origin: 5px 5px;
	-ms-transform-origin: 5px 5px;
}
.experience-item .text {
	display: block;
	margin-left: 70px;
}
.experience-item .text .title {
	height: auto;
	line-height: 20px;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
	font-size: 16px;
	vertical-align: middle;
	margin-bottom: 5px;
	white-space: normal;
	color: rgba(255,255,255,1);
}
.experience-item .text .desc {
	height: auto;
	line-height: 1;
	font-size: 13px;
	white-space: normal;
	color: rgba(255,255,255,0.8);
}
.experience-item .text .desc .rest {
	display: block;
	height: 5px;
}

.education .time {
	color: #ffa866;
}
.career .time {
	color: #cc2929;
}
.projects .time {
	color: #94ff66;
}
</style>
<div class="resume-container">
	<div class="portrait-container">
		<div class="portrait"></div>
	</div>
	<div class="section-box info">
		<div class="title">张家治</div>
		<div class="subtitle">Cosmo Zhang</div>
		<div class="desc" style="white-space:nowrap;">
			<div class="desc-col" style="width:50%;">
				<div class="desc">北京邮电大学</div>
				<div class="desc">
					<a href="mailto:cosmozhang1995@gmail.com"><i class="fa fa-fw fa-google-plus-square"></i></a>
					<a href="https://github.com/cosmozhang1995"><i class="fa fa-fw fa-github"></i></a>
					<a href="http://stackoverflow.com/users/3429266/cosmozhang"><i class="fa fa-fw fa-stack-overflow"></i></a>
				</div>
			</div>
			<div class="desc-col" style="width:50%; text-align:right;">
				<div class="desc"><a href="tel:18610965714">+86 18610965714</a></div>
				<div class="desc"><a href="mail:zjzxz3006@126.com">zjzxz3006@126.com</a></div>
			</div>
		</div>
	</div>
	<div class="section-box skills">
		<div class="title">个人技能</div>
		<div class="subtitle"></div>
		<div class="desc" id="skillbars">
		</div>
	</div>
	<div id="experience-education" class="section-box experience-section education">
		<div class="title">教育经历</div>
		<div class="experience-container">
			<div class="time-line"></div>
			<div class="experience-list">
				<!-- <div class="experience-item">
					<div class="time">2012</div>
					<div class="pointer-container">
						<div class="pointer"></div>
					</div>
					<div class="text">
						<div class="title">河南省信阳高中</div>
						<div class="desc">打算打开浪费就撒旦快疯了冬季施工考虑时间弗兰克的设计费看电视了交换机的咖啡哈伦裤解放后撒健康的粉红色的积分卡当回事</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<div id="experience-career" class="section-box experience-section career">
		<div class="title">工作经历</div>
		<div class="experience-container">
			<div class="time-line"></div>
			<div class="experience-list"></div>
		</div>
	</div>
	<div id="experience-projects" class="section-box experience-section projects">
		<div class="title">项目经历</div>
		<div class="experience-container">
			<div class="time-line"></div>
			<div class="experience-list"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
var mySkills = {};
var personalSkills = function(skills) {
	var skills = skills;
	var skillsInRate = {
		"1": [],
		"2": [],
		"3": [],
		"4": [],
		"5": [],
		"6": [],
		"7": [],
		"8": [],
		"9": [],
		"10": []
	};

	function addSkill(skill) {
		if ((typeof skill.rate === "number") && skill.rate >=1 && skill.rate <= 10)
			skillsInRate["" + parseInt(skill.rate)].push(skill);
	}
	function addAllSkills() {
		for (var i = 1; i <= 10; i++) {
			skillsInRate["" + i] = [];
		}
		for (var i = 0; i < skills.length; i++) {
			addSkill(skills[i]);
		}
	}
	function initialSkillBar(rate) {
		var theSkills = skillsInRate["" + rate];
		if (theSkills.length > 0) {
			var skillShortNames = [];
			for (var i = 0; i < theSkills.length; i++) {
				skillShortNames.push(theSkills[i].shortName);
			}

			var barContainer = document.createElement('div');
			barContainer.className = "skill-bar-container";
			var bar = document.createElement('div');
			bar.className = "skill-bar skill-bar-" + rate;
			bar.innerHTML = skillShortNames.join(", ");
			barContainer.appendChild(bar);
			document.getElementById('skillbars').appendChild(barContainer);
		}
	}
	function initialSkills() {
		document.getElementById('skillbars').removeAllChildNodes();
		for (var i = 10; i >= 1; i--) {
			initialSkillBar(i);
		}
	}
	addAllSkills();
	initialSkills();
}
$(document).ready(function() {
	$.getJSON("{:U('/api/resume/skills')}", function(data) {
		mySkills = data;
		personalSkills(mySkills);
	});
});
</script>
<script type="text/javascript">
var experiences = {
	"education": [],
	"career": [],
	"projects": []
};
function handleDesc(desc) {
	var returnString = desc;
	returnString = returnString.replace(/<br\/{0,1}><br\/{0,1}>/g, '<br/><span class="rest"></span>');
	return returnString;
}
function addItem(type, item) {
	var theContainer = document.getElementById("experience-" + type);
	if (theContainer) {
		var theList = $(theContainer).find('.experience-list')[0];
		if (theList) {
			var itemDiv = document.createElement('div');
			itemDiv.className = "experience-item";
			var timeDiv = document.createElement('div');
			timeDiv.className = "time";
			var pointerContainer = document.createElement('div');
			pointerContainer.className = "pointer-container";
			var pointerDiv = document.createElement('div');
			pointerDiv.className = "pointer";
			var textDiv = document.createElement('div');
			textDiv.className = "text";
			var titleDiv = document.createElement('div');
			titleDiv.className = "title";
			var descDiv = document.createElement('div');
			descDiv.className = "desc";

			timeDiv.innerHTML = item.startYear + "." + item.startMonth;
			titleDiv.innerHTML = item.title;
			descDiv.innerHTML = handleDesc(item.desc);

			textDiv.appendChild(titleDiv);
			textDiv.appendChild(descDiv);
			pointerContainer.appendChild(pointerDiv);
			itemDiv.appendChild(timeDiv);
			itemDiv.appendChild(pointerContainer);
			itemDiv.appendChild(textDiv);
			theList.appendChild(itemDiv);
		}
	}
}
function addType(type, list) {
	var theContainer = document.getElementById("experience-" + type);
	if (theContainer) {
		var theList = $(theContainer).find('.experience-list')[0];
		if (theList) {
			theList.removeAllChildNodes();
			for (var i = 0; i < list.length; i++) {
				addItem(type, list[i]);
			}
		}
	}
}
function addAllItems(experienceList) {
	for (var type in experienceList) {
		addType(type, experienceList[type]);
	}
}
$(document).ready(function() {
	$.getJSON("{:U('/api/resume/education')}", function(data) {
		experiences['education'] = data;
		addType('education', data);
	});
	$.getJSON("{:U('/api/resume/career')}", function(data) {
		experiences['career'] = data;
		addType('career', data);
	});
	$.getJSON("{:U('/api/resume/projects')}", function(data) {
		experiences['projects'] = data;
		addType('projects', data);
	});
})
</script>