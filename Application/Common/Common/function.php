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
	return date('Y年m月d日', $timestamp);
}
function translateDateTime($timestamp) {
	return date('Y年m月d日 H:i', $timestamp);
}
function translateTime($timestamp) {
	return date('H:i', $timestamp);
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
	if ($content) {
		(new \Behavior\ContentReplaceBehavior())->run($content);
		echo $content;
	} else {
		httpError(404, "Content not found");
	}
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

// This must be the basic function of all authentication functions 
// because it sets the session
function getUser() {
	$returnUser = null;
	$user_id = intval(session('user_id'));
	if (I('server.PHP_AUTH_USER',null)&&I('server.PHP_AUTH_PW',null)) {
		$condition = array('name'=>I('server.PHP_AUTH_USER',""),'password'=>md5(I('server.PHP_AUTH_PW',"")));
		$user = D('User')->where($condition)->find();
		if ($user) $returnUser = $user;
		else $returnUser = null;
	} elseif (is_string(I('get.username',null)) && is_string(I('get.password',null))) {
		$user = D('User')->where(array('name'=>I('get.username',""),'password'=>md5(I('get.password',""))))->find();
		if ($user) $returnUser = $user;
		else $returnUser = null;
	} elseif (is_string(I('post.username',null)) && is_string(I('post.password',null))) {
		$user = D('User')->where(array('name'=>I('post.username',""),'password'=>md5(I('post.password',""))))->find();
		if ($user) $returnUser = $user;
		else $returnUser = null;
	} elseif (is_numeric($user_id)) {
		$user = D('User')->find(intval(session('user_id')));
		if ($user) $returnUser = $user;
		else $returnUser = null;
	} else {
		$returnUser = null;
	}
	if ($returnUser) session('user_id', intval($returnUser['id']));
	return $returnUser;
}

function isAuth() {
	if (getUser()) return true;
	else return false;
}

function isAdmin() {
	if (APP_DEBUG) {
		return true;
	} if (APP_ADMIN) {
		return true;
	} else {
		$user = getUser();
		if ($user) {
			if ($user['admin']) return true;
			else return false;
		} else {
			return false;
		}
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

// 判断是否在手机端浏览
function is_mobile(){
	//正则表达式,批配不同手机浏览器UA关键词。
	$regex_match="/(nokia|iphone|ipad|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
	$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
	$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
	$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
	$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
	$regex_match.=")/i";
	return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT'])); //如果UA中存在上面的关键词则返回真。
}

function getTheme() {
	$theme = 'default';
	if (is_mobile()) {
		$theme = 'mobile';
	}
	return $theme;
}

/**
 * 生成缩略图
 * @author yangzhiguo0903@163.com, zjzxz3006@126.com
 * @param string     源图绝对完整地址{带文件名及后缀名}
 * @param string     目标图绝对完整地址{带文件名及后缀名}
 * @param int        缩略图宽{0:此时目标高度不能为0，目标宽度为源图宽*(目标高度/源图高)}
 * @param int        缩略图高{0:此时目标宽度不能为0，目标高度为源图高*(目标宽度/源图宽)}
 * @param int        是否裁切{宽,高必须非0}
 * @param int/float  缩放{0:不缩放, 0<this<1:缩放到相应比例(此时宽高限制和裁切均失效)}
 * @return boolean
 */
function img2thumb($src_img, $dst_img = '', $width = 75, $height = 75, $cut = 0, $proportion = 0) {
	$document_root = is_string($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : "";
	$src_img = $document_root.$src_img;
	$dst_img = $document_root.$dst_img;
	if (!file_exists($src_img)) {
		echo 'not exist';
		return false;
	}
	$ot = fileext($dst_img);
	if ($ot) $to_file = true;
	else $to_file = false;
	if ($to_file) $otfunc = 'image' . ($ot == 'jpg' ? 'jpeg' : $ot);
	$srcinfo = getimagesize($src_img);
	$src_w = $srcinfo[0];
	$src_h = $srcinfo[1];
	$type = strtolower(substr(image_type_to_extension($srcinfo[2]), 1));
	$createfun = 'imagecreatefrom'.($type == 'jpg' ? 'jpeg' : $type);

	$dst_h = $height;
	$dst_w = $width;
	$x = $y = 0;

	// 缩略图不超过源图尺寸（前提是宽或高只有一个）
	if(($width> $src_w && $height> $src_h) || ($height> $src_h && $width == 0) || ($width> $src_w && $height == 0)) {
		$proportion = 1;
	}
	if($width> $src_w) {
		$dst_w = $width = $src_w;
	}
	if($height> $src_h) {
		$dst_h = $height = $src_h;
	}

	if(!$width && !$height && !$proportion) {
		return false;
	}
	if(!$proportion) {
		if($cut == 0) {
			if($dst_w && $dst_h) {
				if($dst_w/$src_w> $dst_h/$src_h) {
					$dst_w = $src_w * ($dst_h / $src_h);
					$x = 0 - ($dst_w - $width) / 2;
				} else {
					$dst_h = $src_h * ($dst_w / $src_w);
					$y = 0 - ($dst_h - $height) / 2;
				}
			} elseif ($dst_w xor $dst_h) {
				if($dst_w && !$dst_h) {
					//有宽无高
					$propor = $dst_w / $src_w;
					$height = $dst_h  = $src_h * $propor;
				} else {
					//有高无宽
					$propor = $dst_h / $src_h;
					$width  = $dst_w = $src_w * $propor;
				}
			}
		} else {
			if(!$dst_h) {
				//裁剪时无高
				$height = $dst_h = $dst_w;
			}
			if(!$dst_w) {
				//裁剪时无宽
				$width = $dst_w = $dst_h;
			}
			$propor = min(max($dst_w / $src_w, $dst_h / $src_h), 1);
			$dst_w = (int)round($src_w * $propor);
			$dst_h = (int)round($src_h * $propor);
			$x = ($width - $dst_w) / 2;
			$y = ($height - $dst_h) / 2;
		}
	} else {
		$proportion = min($proportion, 1);
		$height = $dst_h = $src_h * $proportion;
		$width  = $dst_w = $src_w * $proportion;
	}

	$src = $createfun($src_img);
	$dst = imagecreatetruecolor($width ? $width : $dst_w, $height ? $height : $dst_h);
	$white = imagecolorallocate($dst, 255, 255, 255);
	imagefill($dst, 0, 0, $white);

	if(function_exists('imagecopyresampled')) {
		imagecopyresampled($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	} else {
		imagecopyresized($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	}

	if ($to_file && $otfunc) $otfunc($dst, $dst_img);
	else imagejpeg($dst);
	imagedestroy($dst);
	imagedestroy($src);
	return true;
}

function fileext($file) {
	return pathinfo($file, PATHINFO_EXTENSION);
}