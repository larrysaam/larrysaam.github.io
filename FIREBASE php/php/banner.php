<?php
     
    function banner($banner_img){
        $banner ="
    <section id=\"banner\">
        <img src=\"$banner_img\" alt=\"logo\">
        <p></p>
    </section>
        ";
        echo $banner;
    }
?>