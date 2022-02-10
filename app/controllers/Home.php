<?php


class Home extends Controller{

    public function index(){
        echo '<h1>Welcome home!</h1><br>';
    }

    public function sayHello($name = ''){
        echo "Hello $name <br>";
    }

    public function showUserName(){
        $user = $this->getModelInstance('User');
        echo $user->name;
    }
}