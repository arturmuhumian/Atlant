<?php
    if (isset($_POST['contact']) or isset($_POST['orderwall']) or isset($_POST['orderfurniture']))
    {
        $email = "artur.muhumian@gmail.com";
        if (isset($_POST['contact']))
        {
            $head = "Форма обратной связи";
            $message = "Имя: ".$_POST['name']."<br>Номер телефона: ".$_POST['phone']."<br>Сообщение: ".$_POST['review'];
        }
        if (isset($_POST['orderwall']))
        {
            $head = "Заказ натяжного потолка";
            $message = "Имя: ".$_POST['name']."<br>Номер телефона: ".$_POST['phone']."<br>Вид потолка: ".$_POST['type']."<br>Дополнительный комментарий: ".$_POST['review'];
        }
        if (isset($_POST['orderfurniture']))
        {
            $head = "Заказ мебели";
            $message = "Имя: ".$_POST['name']."<br>Номер телефона: ".$_POST['phone']."<br>Вид потолка: ".$_POST['type']."<br>Дополнительный комментарий: ".$_POST['review'];
        }
        mail($email,$head,$message);
    }
?>