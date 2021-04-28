<?php
    if(!empty($_POST['name']))
    {
        echo "Привет, ".$_POST['name'];
    }
    else
    {
        echo "Введите имя";
    }
?>