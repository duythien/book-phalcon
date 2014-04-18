<?php //namespace PhalconBook\Controllers;

/* 
* Nếu bạn muốn dùng namespace thì bỏ comment ra,chú ý bên models phải khai báo namespace
* va Cau hinh lai file loader.php trong thu muc config
*/
//use  PhalconBook\Models\Users;
class SessionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function loginAction()
    {
    	//echo "<h3>Login Form </h3>";
    	$user =Users::findFirst();
    	print $user->email;
    }
}

