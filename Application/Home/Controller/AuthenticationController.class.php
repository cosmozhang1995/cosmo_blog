<?php
namespace Home\Controller;
use Think\Controller;
class AuthenticationController extends Controller {
	public function indexAction(){
		$username = I('post.username', null);
		$password = I('post.password', null);
		// $redirect_to = I('post.next', I('get.next', null));
		// if (!$redirect_to) {
		// 	$redirect_to = I('server.HTTP_REFERER', null);
		// 	if (!$redirect_to) {
		// 		$redirect_to = U('Index/index');
		// 	}
		// } else {
		// 	$redirect_to = U($redirect_to);
		// }
		$redirect_to = I('post.next', I('get.next', I('server.HTTP_REFERER', 'Index/index')));
		if (is_string($username)&&is_string($password)&&$username!=""&&$password!="") {
			if (is_email($username)) $user = D('User')->where(array("email"=>$username))->find();
			else $user = D('User')->where(array("username"=>$username))->find();
			if ($user) {
				if ($user['password'] == md5($password)) {
					echo $user['id'];
					session('user_id', $user['id']);
					echo session('user_id');
					redirect($redirect_to);
					return;
				} else {
					$msg = '密码输错了哦，再试一次吧';
				}
			} else {
				$msg = '我没有找到你哦，你可以<a href="'.U('/register').'">创建账号</a>';
			}
		} else if (isAuth()) {
			$this->redirect('Index/index');
			return;
		}
		$this->assign('closeFanNav',true);
		$this->assign('page_info',array('title'=>'登录'));
		// if (intval(I('get.status', '0')) == 0) $this->assign('error', false);
		// else $this->assign('error',true);
		$this->assign('redirect_to',$redirect_to);
		$this->assign('msg',$msg);
		$this->assign('username',$username);
		$this->display();
	}

	public function registerAction(){
		$msg = "";
		// $redirect_to = I('post.next', I('get.next', null));
		// if (!$redirect_to) {
		// 	$redirect_to = I('server.HTTP_REFERER', null);
		// 	if (!$redirect_to) {
		// 		$redirect_to = U('Index/index');
		// 	}
		// } else {
		// 	$redirect_to = U($redirect_to);
		// }
		$redirect_to = I('post.next', I('get.next', I('server.HTTP_REFERER', 'Index/index')));
		if (I('post.username')&&I('post.username')!="") {
			$_POST['name'] = $_POST['username'];
			$User = D('User');
			$result = $User->create();
			if ($result) {
				$User->add();
				$createdUser = $User->select(array('name'=>I('post.username')))->find();
				session('user_id', $createdUser['id']);
				redirect($redirect_to);
				return;
			} else {
				$msg = $User->getError();
			}
		}

		$this->assign('closeFanNav',true);
		$this->assign('page_info',array('title'=>'注册'));
		$this->assign('redirect_to',$redirect_to);
		$this->assign('post',$_POST);
		$this->assign('msg',$msg);
		$this->display();
	}
}