<style type="text/css">
.login-form {
	margin-top: 100px;
	margin-left: 100px;
	margin-right: 100px;
	height: auto;
	padding: 10px 40px;
	background-color: #FFF;
	box-shadow: 0 0 7px -3px #000;
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
}
.input-group > * {
	vertical-align: middle;
}
.input-group label {
	display: inline-block;
	font-weight: bold;
	margin-bottom: 0px;
	width: 100px;
	padding: 0 0px;
	margin-right: 10px;
	text-align: right;
	font-family: "ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif
}
.input-group label i {
	font-size: 20px;
}
.input-group input {
	display: inline-block;
	width: 270px;
	height: 28px;
	line-height: 28px;
	vertical-align: middle;
	padding: 0 5px;
	border: 1px #CCC solid;
	box-shadow: 0 0 15px -9px #000 inset;
}
.input-group .description {
	display: inline-block;
	width: 300px;
	height: 28px;
	line-height: 28px;
	vertical-align: middle;
	padding: 0 5px;
	border: 1px #CCC solid;
	box-shadow: 0 0 15px -9px #000 inset;
}
.input-group input.button {
	margin: 0 10%;
	width: 180px;
	height: 40px;
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
			<label style="width:100%; height:auto; font-size:16px; text-align:center;">在花栗鼠与美女猫的世界中创建账号</label>
		</div>
		<div class="input-group" style="height:auto;">
			<span id="validate-message" style="display:inline-block; width:100%; height:auto; font-size:12px; text-align:center; white-space:normal; color:#f00;">{$msg}</span>
		</div>
		<div class="input-group">
			<label>用户名</label>
			<input type="text" id="username" value="{$post.username}" placeholder="4-16个字母、数字或下划线，以字母开头" />
		</div>
		<div class="input-group">
			<label>密码</label>
			<input type="password" id="password" placeholder="6-16个字符" />
		</div>
		<div class="input-group">
			<label>确认密码</label>
			<input type="password" id="password-check" placeholder="再次输入密码" />
		</div>
		<div class="input-group">
			<label>昵称</label>
			<input type="text" id="alias" value="{$post.alias}" placeholder="昵称" />
		</div>
		<div class="input-group">
			<label>邮箱</label>
			<input type="email" id="email" value="{$post.email}" placeholder="E-mail 地址" />
		</div>
		<input type="hidden" id="real-username" name="username" value="{$post.username}" />
		<input type="hidden" id="real-password" name="password" value="" />
		<input type="hidden" id="real-alias" name="alias" value="{$post.alias}" />
		<input type="hidden" id="real-email" name="email" value="{$post.email}" />
		<input type="hidden" name="next" value="">
		<div class="input-group" style="width:100%; height:auto;">
			<input type="submit" class="button" value="创  建"/>
		</div>
	</form>
</div>
<script type="text/javascript">
var usernameValidate = function(username) {
	if (typeof username != "string" || username == "") return false;
	if (username.match(/[a-zA-Z][a-zA-Z\d_]{3,15}/)) return true;
	return false;
}
var passwordValidate = function(password) {
	if (typeof password != "string" || password == "") return false;
	if (password.match(/[a-zA-Z\d][a-zA-Z\d_\/\\\-]{5,15}/)) return true;
	return false;
}
var emailValidate = function(email) {
	if (typeof email != "string" || email == "") return false;
	if (email.match(/[a-zA-Z\d][a-zA-Z\d_\/\\\-]{5,15}/)) return true;
	return false;
}
var formValidate = function() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var passwordChk = document.getElementById('password-check').value;
	var alias = document.getElementById('alias').value;
	var email = document.getElementById('email').value;
	if (!usernameValidate(username)) {
		document.getElementById('validate-message').innerHTML = "请输入正确的用户名，用户名必须为4-16个字符，只能由字母、数字、下划线组成，且必须以字母开头";
		return false;
	} else if (!passwordValidate(password)) {
		document.getElementById('validate-message').innerHTML = "请输入正确的密码，密码必须为6-16个字符，只能由字母、数字、下划线和斜杠组成，且不能以符号开头";
		return false;
	} else if (typeof alias != "string" || alias == "") {
		document.getElementById('validate-message').innerHTML = "请输入正确的昵称";
		return false;
	} else if (!emailValidate(email)) {
		document.getElementById('validate-message').innerHTML = "请输入正确的邮箱";
		return false;
	} else if (!(password === passwordChk)) {
		document.getElementById('validate-message').innerHTML = "密码不一致，请重新输入";
		return false;
	} else {
		document.getElementById('validate-message').innerHTML = "";
		return true;
	}
}
document.getElementById('login-form').onsubmit = function() {
	if (!formValidate()) return false;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var alias = document.getElementById('alias').value;
	var email = document.getElementById('email').value;
	document.getElementById('real-username').value = username;
	document.getElementById('real-password').value = password;
	document.getElementById('real-alias').value = alias;
	document.getElementById('real-email').value = email;
	return true;
}
// $(document).ready(function() {
// 	var username = document.getElementById('real-username').value;
// 	var password = document.getElementById('real-password').value;
// 	var alias = document.getElementById('real-alias').value;
// 	var email = document.getElementById('real-email').value;
// 	document.getElementById('username').value = username;
// 	document.getElementById('password').value = password;
// 	document.getElementById('password-check').value = password;
// 	document.getElementById('alias').value = username;
// 	document.getElementById('email').value = password;
// });
</script>