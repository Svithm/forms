<?php //error_reporting(0);
    $mail="svithmphp@gmail.com";
    $subj="first mail";
    $text="Лист прийшов";

    mail($mail,$subj,$text, "Conten-type: text/html; charset=utf-8 \r\n");
    echo ("Полетіло");
    