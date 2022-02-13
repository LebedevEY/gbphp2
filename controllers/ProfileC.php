<?php

class ProfileC extends Controller
{

    public function index()
    {
        $user = $_SESSION['user'];
        if (!isset($user)) {
            $page = $this->Template('view/login.php');
        } else {
            $page = $this->Template('view/profile.php', array('user' => $user));
        }
        echo $page;
    }

    public function registration()
    {
        $USER = new UserM();
        $user_info = [
            'name' => strip_tags($_POST['name']),
            'surname' => strip_tags($_POST['surname']),
            'email' => strip_tags($_POST['email']),
            'password' => (strrev(md5($_POST['email'])) . md5($_POST['password']))
        ];
        if ($user_info['email'] !== '') {
            $i = $USER->Registration($user_info, $user_info['email']);
        }
        if ($i === false) {
            $page = $this->Template('view/registration.php', array('check' => true, 'test' => 'false', 'i' => $i));
        } elseif(is_string($i)) {
            $user = $USER->getUser($user_info['email'], $user_info['password']);
            $_SESSION['user'] = $user;
            $page = $this->Template('view/profile.php', array('user' => $user));
        } else {$page = $this->Template('view/registration.php', array('check' => false, 'test' => 'true', 'i' => $i));}
        echo $page;
    }

    public function login()
    {
        $user_info = [
            'email' => strip_tags($_POST['email']),
            'password' => (strrev(md5($_POST['email'])) . md5($_POST['password']))
        ];
        $USER = new UserM();
        $user = $USER->getUser($user_info['email'], $user_info['password']);
        $_SESSION['user'] = $user;
        $page = $this->Template('view/profile.php', array('user' => $user));
        echo $page;
    }

    public function exit() {
        unset($_SESSION['user']);
        $page = $this->Template('view/login.php');
        echo $page;
    }
}

//$user = $_SESSION['user'];
//if (!isset($user)) {
//    header("Location: login.php");
//}
//
//if ($_POST['action'] == 'exit') {
//    unset($_SESSION['user']);
//}