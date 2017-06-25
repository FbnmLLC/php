<?php
include_once('functions.php');
$merchant_id = '';
$State = $_REQUEST['State'];
$RefNum = $_REQUEST['RefNum'];
if ($State == 'OK') {
    $response = verify($merchant_id, $RefNum);
    $result = json_decode($response);
    if ($result->status) {
        echo 'تراکنش موفق';
    } else {
        echo '<pre>';
        print_r($result);
        echo '<pre>';
    }
} else {
    echo 'تراکنش ناموفق - نیازی به ارسال متد وریفای نیست';
}
?>