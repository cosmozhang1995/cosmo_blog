<style type="text/css">
.login-form {
	display: block;
	margin-left: 40px;
	margin-right: 40px;
	height: auto;
	padding: 10px 40px;
	background-color: #FFF;
	box-shadow: 0px 1px 10px -3px #000;
	text-align: center;
}
.login-form form {
	text-align: center;
}
.input-group {
	height: 30px;
	line-height: 30px;
	vertical-align: middle;
	margin-bottom: 10px;
	display: block;
	font-size: 0px;
}
.input-group > * {
	vertical-align: middle;
	font-size: 14px;
}
.input-group label {
	display: inline-block;
	float: left;
	font-weight: bold;
	margin-bottom: 0px;
	width: auto;
	padding: 0 0px;
	/*margin-right: 10px;*/
	margin-top: 4px;
	text-align: right;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif
}
.input-group label i {
	font-size: 20px;
}
.input-group .input-container {
	display: block;
	margin-left: 25px;
}
.input-group input {
	/*display: inline-block;*/
	display: block;
	width: 100%;
	max-width: 400px;
	height: 28px;
	line-height: 28px;
	vertical-align: middle;
	padding: 0 5px;
	border: 1px #CCC solid;
	box-shadow: 0 0 15px -9px #000 inset;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
}
.input-group input.button {
	margin: 0 10%;
	width: 80%;
	height: 100%;
	background-color: rgb(0, 128, 255);
	font-weight: normal;
	font-size: 18px;
	color: #fff;
	box-shadow: 0 0 15px -9px #000;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif
}
.input-group input.button:hover {
	background-color: rgb(50, 170, 255);
}
</style>
<div class="login-form">
	<form method="post" id="login-form">
		<div class="input-group" style="height:auto;">
			<img src="__IMG_RES__/logo_128.png" style="width:80px; height:80px;" />
		</div>
		<div class="input-group">
			<label style="width:100%; height:auto; font-size:16px; text-align:center;">踏入花栗鼠与美女猫的世界</label>
		</div>
		<div class="input-group" style="height:auto;">
			<span id="validate-message" style="display:inline-block; width:100%; height:auto; font-size:12px; text-align:center; white-space:normal; color:#f00;">{$msg}</span>
		</div>
		<div class="input-group">
			<label><i class="fa fa-fw fa-user"></i></label>
			<div class="input-container"><input type="text" id="username" value="{$username}" placeholder="用户名或邮箱" /></div>
		</div>
		<div class="input-group">
			<label><i class="fa fa-fw fa-lock"></i></label>
			<div class="input-container"><input type="password" id="password" placeholder="密码" /></div>
		</div>
		<input type="hidden" id="real-username" name="username" value="{$username}" />
		<input type="hidden" id="real-password" name="password" value="{$password}" />
		<input type="hidden" name="next" value="{$redirect_to}" />
		<div class="input-group" style="width:100%; height:40px;">
			<input type="submit" class="button" value="登  录"/>
		</div>
		<div class="input-group" style="width:100%; height:auto;">
			<a href="{:U('/register')}">创建账号</a>
		</div>
	</form>
</div>
<script type="text/javascript">
var formValidate = function() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	if (typeof username != "string" || username == "") {
		document.getElementById('validate-message').innerHTML = "请输入正确的用户名";
		return false;
	} else if (typeof password != "string" || password == "") {
		document.getElementById('validate-message').innerHTML = "请输入正确的密码";
		return false;
	} else {
		document.getElementById('validate-message').innerHTML = "";
		return true;
	}
}
document.getElementById('login-form').onsubmit = function() {
	console.log(formValidate());
	if (!formValidate()) return false;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	document.getElementById('real-username').value = username;
	document.getElementById('real-password').value = password;
	return true;
}
$(document).ready(function() {
	var username = document.getElementById('real-username').value;
	var password = document.getElementById('real-password').value;
	document.getElementById('username').value = username;
	document.getElementById('password').value = password;
});
</script>