<?php
if (isset($_POST['submit'])){
    if (isset($_POST['text'])){
        $text = $_POST['text'];
        $salt = $_POST['salt'];
        $text = $salt.$text;
        $function = $_POST['select'];
        $function = filter_var( $function, FILTER_SANITIZE_STRING);
        if ($text !=""){
            $return = hash($function,$text);
            //I did that at the beginning for reducing the risk fo injection but finally it's way easier and
            //more readable to sanitize it
            if ($function == "sha1"){
                $return = hash("sha1",$text);
            }elseif ($function == "md2") {
                $return = hash("md2", $text);
            }elseif ($function == "md5"){
                $return = hash("md5",$text);
            }elseif ($function == "sha256"){
                $return = hash("sha256",$text);
            }elseif ($function == "sha512"){
                $return = hash("sha512",$text);
            }elseif ($function == "sha224"){
                $return = hash("sha224",$text);
            }elseif ($function == "sha384"){
                $return = hash("sha384",$text);
            }elseif ($function == "ripemd128"){
                $return = hash("ripemd128",$text);
            }elseif ($function == "ripemd160"){
                $return = hash("ripemd160",$text);
            }elseif ($function == "ripemd256"){
                $return = hash("ripemd256",$text);
            }elseif ($function == "ripemd320"){
                $return = hash("ripemd320",$text);
            }elseif ($function == "whirlpool"){
                $return = hash("whirlpool",$text);
            }elseif ($function == "tiger128,3"){
                $return = hash("tiger128,3",$text);
            }elseif ($function == "tiger160,3"){
                $return = hash("tiger160,3",$text);
            }elseif ($function == "tiger192,3"){
                $return = hash("tiger192,3",$text);
            }elseif ($function == "tiger128,4"){
                $return = hash("tiger128,4",$text);
            }elseif ($function == "tiger160,4"){
                $return = hash("tiger160,4",$text);
            }elseif ($function == "tiger192,4"){
                $return = hash("tiger192,4",$text);
            }elseif ($function == "snefru"){
                $return = hash("snefru",$text);
            }elseif ($function == "snefru256"){
                $return = hash("snefru256",$text);
            }elseif ($function == "gost"){
                $return = hash("gost",$text);
            }elseif ($function == "gost-crypto"){
                $return = hash("gost-crypto",$text);
            }elseif ($function == "adler32"){
                $return = hash("adler32",$text);
            }elseif ($function == "crc32"){
                $return = hash("crc32",$text);
            }elseif ($function == "crc32b"){
                $return = hash("crc32b",$text);
            }elseif ($function == "fnv132"){
                $return = hash("fnv132",$text);
            }elseif ($function == "fnv1a32"){
                $return = hash("fnv1a32",$text);
            }elseif ($function == "fnv164"){
                $return = hash("fnv164",$text);
            }elseif ($function == "joaat"){
                $return = hash("joaat",$text);
            }elseif ($function == "haval128,3"){
                $return = hash("haval128,3",$text);
            }elseif ($function == "haval160,3"){
                $return = hash("haval160,3",$text);
            }elseif ($function == "haval192,3"){
                $return = hash("haval192,3",$text);
            }elseif ($function == "haval224,3"){
                $return = hash("haval224,3",$text);
            }elseif ($function == "haval256,3"){
                $return = hash("haval256,3",$text);
            }elseif ($function == "haval128,4"){
                $return = hash("haval128,4",$text);
            }elseif ($function == "haval160,4"){
                $return = hash("haval160,4",$text);
            }elseif ($function == "haval192,4"){
                $return = hash("haval192,4",$text);
            }elseif ($function == "haval224,4"){
                $return = hash("haval224,4",$text);
            }elseif ($function == "haval256,4"){
                $return = hash("haval256,4",$text);
            }elseif ($function == "haval128,5"){
                $return = hash("haval128,5",$text);
            }elseif ($function == "haval160,5"){
                $return = hash("haval160,5",$text);
            }elseif ($function == "haval192,5"){
                $return = hash("haval192,5",$text);
            }elseif ($function == "haval224,5"){
                $return = hash("haval224,5",$text);
            }elseif ($function == "haval256,5"){
                $return = hash("haval256,5",$text);
            }
        }else{
            $return =  'You are suppose to enter the text you want to hash in the text area.';
        }
    }else{
        $return =  'You are suppose to enter the text you want to hash in the text area.';
    }
}


