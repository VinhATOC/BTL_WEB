<?php
function random_password($length)
{
    $string = '';
    for($i = 0; $i < $length; $i++){
        $type = rand(1,3);
        // type  1 is number
        if($type == 1){
            $string .= rand(0,9);
        }
        else if($type == 2){
            $string .= chr(rand(97,122));
        }
        else {
            $string .= chr(rand(65,90));
        }
    }
    return $string;
}
function text_to_link($string){
    $current_char = array(
        "â","ấ","ầ","ậ","ẩ","ẫ",
        "é","è","ẽ","ẹ","ẻ",
        "ê","ế","ề","ể","ệ","ễ",
        "ă","ắ","ằ","ẳ","ặ","ẵ",
        "á","à","ả","ạ","ã",
        "đ",
        "ý","ỳ","ỵ","ỷ","ỹ",
        "ú","ù","ụ","ũ","ủ",
        "ư","ứ","ừ","ử","ữ","ự",
        "í","ì","ị","ỉ","ĩ",
        "ó","ò","õ","ọ","ỏ",
        "ô","ố","ồ","ộ","ổ","ỗ",
        "ơ","ở","ợ","ờ","ỡ","ớ",
        " ",
        "Â","Ấ","Ầ","Ậ","Ẩ","Ẫ",
        "É","È","Ẽ","Ẹ","Ẻ",
        "Ê","Ế","Ề","Ẻ","Ệ","Ễ",
        "Ă","Ă","Ằ","Ẳ","Ặ","Ẵ",
        "Á","À","Ả","Ạ","Ã",
        "Đ",
        "Ý","Ỳ","Ỵ","Ỷ","Ỹ",
        "Ú","Ù","Ụ","Ũ","Ủ",
        "Ư","Ứ","Ừ","Ử","Ự","Ữ",
        "Í","Ì","Ị","Ỉ","Ĩ",
        "Ó","Ò","Õ","Ọ","Ỏ",
        "Ô","Ố","Ồ","Ộ","Ổ","Ỗ",
        "Ơ","Ở","Ợ","Ờ","Ỡ","Ớ");
    $new_char = array(
        "a","a","a","a","a","a",
        "e","e","e","e","e",
        "e","e","e","e","e","e",
        "a","a","a","a","a","a",
        "a","a","a","a","a",
        "d",
        "y","y","y","y","y",
        "u","u","u","u","u",
        "u","u","u","u","u","u",
        "i","i","i","i","i",
        "o","o","o","o","o",
        "o","o","o","o","o","o",
        "o","o","o","o","o","o",
        "-",
        "a","a","a","a","a","a",
        "e","e","e","e","e",
        "e","e","e","e","e","e",
        "a","a","a","a","a","a",
        "a","a","a","a","a",
        "d",
        "y","y","y","y","y",
        "u","u","u","u","u",
        "u","u","u","u","u","u",
        "i","i","i","i","i",
        "o","o","o","o","o",
        "o","o","o","o","o","o",
        "o","o","o","o","o","o");

    $new = str_replace($current_char,$new_char,$string);
    $new = strtolower($new);
    $length = strlen($new);
    for($i = 0; $i < $length; $i++){
        $ascii =  ord($new[$i]);
           if(!($ascii < 123 && $ascii > 96 || $ascii > 47 && $ascii < 58 || $new[$i] == '-')){
               $new[$i] = '-';
           }
    }
    $new= ltrim($new,'-');
    $new = rtrim($new,'-');
    while(strpos($new,'--') != false){
        $new = str_replace("--","-",$new);
    }
    return $new;
}
?>