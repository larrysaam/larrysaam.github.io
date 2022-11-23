<?php
     
     function item($prod_id, $prod_img,$prod_name,$prod_desc,$prod_price){
        $item="
        <div class=\"item\">
            <form action=\"home.php\" method=\"POST\">
                    <input type=\"hidden\" value=\"$prod_id\" name=\"product_id\">
                    <img src=\"$prod_img\" alt=\"item\" id=\"item_image\">
                    <b id=\"item_name\">$prod_name</b>
                    <P id=\"item_description\">$prod_desc</P>
                    <b id=\"item_price\">$prod_price</b>
                    <button id=\"add_to_cart\" type=\"submit\" name=\"add_to_cart\">Add to Cart</button>
            </form>
        </div>
            
        ";

        echo $item;
     }
?>
