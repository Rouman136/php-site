<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if(strlen($login) < 2){
        echo "Login error";
        exit;
    }
    if(strlen($password) < 2){
        echo "Password error";
        exit;
    }
    
    //pass
    $salt = '3sdfk-sf-sdpf_p-ew';
    $password = md5($salt . $password);


    //DB
    require "db.php";

    //Auth USER
    $sql = 'SELECT id FROM users WHERE login = ? AND password = ?'; //Проверка на совпадение логина и пароля
    $query = $pdo->prepare($sql);
    $query->execute([$login, $password]);

    if($query->rowCount() == 0)
        echo "Такого пользователя нет!";
    else{
        setcookie('login', $login, time() + 3600 * 24 * 30, "/dudari1");
        header('Location: /dudari1/user.php');
    }