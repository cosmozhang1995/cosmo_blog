<?php
function translateStatus2Alert($status) {
	switch ($status) {
		case 2:
			return "alert-danger";
			break;
		case 1:
			return "alert-warning";
			break;
		case 0:
			return "alert-success";
			break;
		default:
			return "";
			break;
	}
}

function translateTag($model, $name) {
	$Tag = D($model.'Tag');
	$_tag = $Tag->getFieldByName($name, 'tag');
	return $_tag;
}

function getTags($model) {
	$Tag = D($model.'Tag');
	return $Tag->select();
}

function translateDate($timestamp) {
	return date('Y/m/d H:i', $timestamp);
}

function httpError($code, $msg) {
	header('HTTP/1.1 '.$code.' '.$msg);
}

/**
 * Remove a value-specified element from an array
 * @param  Object $needle The value of the element to be removed
 * @param  Array  $array  The array from which the element will be removed
 * @return int         How many elements removed
 */
function array_remove($needle, &$array) {
	$key = array_search($needle, $array);
	$cnt = 0;
	while (!($key === false || $key === null)) {
		$cnt++;
		if (is_int($key)) {
			array_splice($array, $key, 1);
		} else {
			unset($array[$key]);
		}
		$key = array_search($needle, $array);
	}
	return $cnt;
}

function htmlContentReadFilter($content) {
	return htmlspecialchars_decode($content);
}

function getAsset($path, $method) {
	// $filename = __ROOT__.'/Public/assets/'.(trim(trim($path), '/'));
	$filename = './Public/assets/'.(trim(trim($path), '/'));
	if (!is_string($method)) $method = "r";
	if ($method == "r") {
		$contents = file_get_contents($filename);
	} else {
		$handle = fopen($filename, $method);
		$contents = fread($handle, filesize($filename));
		fclose($handle);
	}
	return $contents;
}

function jsonFetchAction($filename) {
	$content = getAsset($filename);
	if ($content) echo $content;
	else httpError(404, "Content not found");
}

function noLF($str) {
	return str_replace(array("/r/n", "/r", "/n"), "", $str);
}

function validate_username($str) {

}

function base_auth($username, $password) {
	$tok = $username + ':' + $password;
	$hash = base64_encode($tok);
	return "Basic ".$hash;
}
function base_unauth($auth) {
	$str = substr($auth, 6);
	$str = base64_decode($str);
	$username = explode(':', $str)[0];
	$password = explode(':', $str)[1];
  return array("username"=>$username, "password"=>$password);
}

function isAuth() {
	if (is_string(I('get.username',null)) && is_string(I('get.password',null))) {
		return \Common\Model\UserModel::auth(I('get.username',""), I('get.password',""));
	} elseif (is_string(I('post.username',null)) && is_string(I('post.password',null))) {
		return \Common\Model\UserModel::auth(I('post.username',""), I('post.password',""));
	} elseif (is_numeric(session('user_id'))) {
		$user = D('User')->find(intval(session('user_id')));
		if ($user) return true;
	}
	return false;
}

function is_email($subject) {
	$pattern = "/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";
	if (is_string($subject)) {
		if (preg_match($pattern, $subject)) return true;
		else return false;
	} else {
		return false;
	}
	return false;
}

/**
 * 系统邮件发送函数
 * @param string $to    接收邮件者邮箱
 * @param string $name  接收邮件者名称
 * @param string $subject 邮件主题 
 * @param string $body    邮件内容
 * @param string $attachment 附件列表
 * @return boolean 
 */
function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){
    $config = C('THINK_EMAIL');
    vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
    $mail             = new PHPMailer(); //PHPMailer对象
    $mail->CharSet    = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();  // 设定使用SMTP服务
    $mail->SMTPDebug  = 0;                     // 关闭SMTP调试功能
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';                 // 使用安全协议
    $mail->Host       = $config['SMTP_HOST'];  // SMTP 服务器
    $mail->Port       = $config['SMTP_PORT'];  // SMTP服务器的端口号
    $mail->Username   = $config['SMTP_USER'];  // SMTP服务器用户名
    $mail->Password   = $config['SMTP_PASS'];  // SMTP服务器密码
    $mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);
    $replyEmail       = $config['REPLY_EMAIL']?$config['REPLY_EMAIL']:$config['FROM_EMAIL'];
    $replyName        = $config['REPLY_NAME']?$config['REPLY_NAME']:$config['FROM_NAME'];
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject    = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($to, $name);
    if(is_array($attachment)){ // 添加附件
        foreach ($attachment as $file){
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send() ? true : $mail->ErrorInfo;
}