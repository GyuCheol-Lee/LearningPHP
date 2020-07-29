<?php
$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);
if($zip_length !=5 ) {
    print "우편번호를 5자리로 입력해주세요";
}