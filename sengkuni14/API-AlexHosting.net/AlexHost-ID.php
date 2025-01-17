<?php

// VALIDASI ID HIDEKIHOSTER
if(isset($_POST['userId'])) {
    $id = $_POST['userId'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api-avstore.my.id/rendzxd/?id=".$id."&token=rendzxd");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $res = json_decode($result,true);
    echo $res['nickname'];
}

?>