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
		$is_admin = false;
		if (($username == "admin") && ($password == "93319")) {
			$is_admin = true;
			cookie('auth', 'loveyan');
			redirect(U('Admin/Article'));
			return;
		}
		$redirect_to = I('post.next', I('get.next', I('server.HTTP_REFERER', U('Index/index'))));
		if (is_string($username)&&is_string($password)&&$username!=""&&$password!="") {
			if (is_email($username)) $user = D('User')->where(array("email"=>$username))->find();
			else $user = D('User')->where(array("name"=>$username))->find();
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
		$redirect_to = I('post.next', I('get.next', I('server.HTTP_REFERER', U('Index/index'))));
		if (I('post.username')&&I('post.username')!="") {
			$_POST['name'] = $_POST['username'];
			$User = D('User');
			$result = $User->create();
			if ($result) {
				$User->add();
				$createdUser = $User->where(array('name'=>I('post.username')))->find();
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

	public function settingsAction() {
		$msg = "";
		$User = D('User');
		$user_id = intval(session('user_id'));
		$user = $User->find($user_id);
		$redirect_to = I('post.next', I('get.next', I('server.HTTP_REFERER', U('Index/index'))));
		if (isAuth()) {
			if (I('post.alias')&&I('post.alias')!="") {
				$updateData = array("id"=>$user_id, "alias"=>I('post.alias'), "email"=>I('post.email'));
				if (I('post.password')&&I('post.password')!="") {
					if (\Common\Model\UserModel::auth($user_id, I('post.oldpassword',""))) {
						$updateData['password'] = I('post.password');
					} else {
						$msg = "修改密码失败，原密码不正确";
					}
				}
				$result = $User->create($updateData);
				if (!$result) {
					$msg = $User->getError();
				} else {
					$User->save();
				}
			}
		} else {
			redirect($redirect_to);
			return;
		}
		$user = $User->find($user_id);
		$this->assign('closeFanNav',true);
		$this->assign('page_info',array('title'=>$user['alias']));
		$this->assign('redirect_to',$redirect_to);
		$this->assign('user',$user);
		$this->assign('msg',$msg);
		$this->display();
	}

	public function logoutAction() {
		// $redirect_to = I('server.HTTP_REFERER', U('Index/index'));
		$redirect_to = U('/');
		if (isAuth()) {
			session('user_id', null);
		}
		redirect($redirect_to);
	}
}