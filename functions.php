<?php 
function db_result_to_array($result){
        $arr=array();
        while ($row=mysql_fetch_array($result)) {
           $arr[]=$row;
        }
        return $arr;
    }

    function select_all($id){
        $query = "SELECT * FROM user WHERE id=$id";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        return $row;
    }
     function show_products(){
        $result = mysql_query("SELECT * FROM `vewi` WHERE 1");
        $arr = db_result_to_array($result);
        foreach($arr as $product) {
        ?>
          
            <div class="img">
              <a target="_blank" href="jeans.jpg">
                <img src="<?=$product['image']?>" alt="Trolltunga Norway" width="200" height="150">
              </a>
              <div class="desc">Cost : <?=$product['price']?> kzt</div>
              <a href="add_to_basket.php?id=<?=$product['id']?>" class="button">add to basket</a>
            </div>
            
        <?php
       }
    }


    

    function show_box($id){
        $bill=0;
        $res=mysql_query("SELECT `basket` FROM `user` WHERE id='$id'");
        $arr=mysql_fetch_array($res);
        $box=unserialize($arr['basket']);
        foreach ($box as $key) {
            $res=mysql_query("SELECT * FROM `vewi` WHERE id='$key'");
            $arr=mysql_fetch_array($res);
            $bill+=$arr['price'];
            ?>
            <div  style="padding:20px;float:left;">
                    <img src="<?=$arr['image']?>" alt="img" width="100px" height="100px" style="float:left;">
                    <div style="margin-top:-20px;" >                     
                    <p><?=$arr['price']?> tenge</p>
                    </div>
            </div>
            <?php
        }
        return $bill;
    }

   


?>