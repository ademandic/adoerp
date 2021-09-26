<?php

class Login extends Controller
{
    public function index()
    {
        $data = ['title'=>'Login'];
        $this->view('login', $data);
    }

    public function error()
    {
        $data = ['title'=>'Login'];
        $this->view('login', $data);
    }

    public function log_in()
    {
        $userinfo = $_POST;

        if(!$userinfo)
            return 0;
        
        if(!is_array($userinfo))
            return 0;
    
        if(!$userinfo['username'] && !$userinfo['password'])
            return 0;

        $password = md5($userinfo['password']*25599);
        $userinfo['password'] = $password;

        $loginModel = $this->model('LoginModel');
        $userResult = $loginModel->loginDb($userinfo)[0];
        $rowcount = count($userResult);

        if($rowcount > 0)
        {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['userinfo'] = $userResult;
            header('Location:' . URL_PREFIX . '/');
        }
        else
        {
            header('Location:' . URL_PREFIX . '/login/error');
        }
    }
}

?>