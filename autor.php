<?php
    $login = "Maksim";
    $pass = "12345";
    if(empty($_POST['login']))
    {
        echo "Введи логин";
        return 0;
    }
    if(empty($_POST['pass']))
    {
        echo "Введи пароль";
        return 0;
    }
    if($login == $_POST['login'] and $pass == $_POST['pass'])
    {
        echo "Доступ разрешён!";
    }
    else
    {
        echo "Доступ запрещён!";
    }
?>