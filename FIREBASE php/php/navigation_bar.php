<?php

    function nav(){
        $nav ="
    <nav>
        <label><span>LOGO</span></label>
        <ul>
            <li><button id=\"cart_btn\" onclick=\"goto_cart_page()\">cart</button></li>
            <li><a href=\"#\" id=\"home\">HOME</a></li>
            <li><a href=\"#category_label\">CATEGORY</a></li>
            <li><a href=\"#\">PROMO</a></li>
            <li><a href=\"#footer\">SERVICES</a></li>
        </ul>
    </nav>
        ";
        echo $nav;
    }

?>

