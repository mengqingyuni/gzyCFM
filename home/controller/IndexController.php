<?php

/**
 * Created by IndexController.php.
 * User: gongzhiyang
 * Date: 18/11/16
 * Time: 12:11 上午
 */
namespace home\controller;
use core\gzy\controller\Controller;
use models\Index;


class IndexController extends Controller {

	public function run(){
		echo "欢迎大家提意见。此框架只用于学习";exit;

		// 接收参数
		$username = $this->getParams('name','G');

		$password = $this->getParams('pwd','P');
		$email = $this->getParams('email','G');
        $phone = $this->getParams('phone','G');

		// 验证邮箱
		if (!$this->is_email($email)){
			echo "邮箱格式不正确";
		}
		//验证手机号
		if (!$this->is_phone($phone)){
			echo "手机号格式不正确";
		}

		// 重定向
		//$this->redirect('/gzyCFM/index.php?c=Index&a=demo');
	}

	public function demo(){
		//phpinfo();
		echo "欢迎大家提意见。此框架只用于学习";exit;
		$m = new Index();

		//var_dump($m->find());

		$this->assign('data',["s"=>2,"3"=>"qq"]);
		//echo readfile("file:///Users/gongzgiyang/www/gzyCFM/runtime/HTML/dbebd60b1b1ff497802718a930bb8d52.php");
		$this->render('Index/demo');




	}
}
