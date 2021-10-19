<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Functions</title>
    <meta name="description" content="This website will allow you compute the most common hash functions and help you to choose
    the hash function you need." />
    <!-- Bootstrapp CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="max-width: 100%;">
<!-- Navbar -->
<nav style="width: 100%; position: fixed; top: 0; z-index: 10" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><span style="">Hash Functions</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="pages/definition.php">What is a hash function ?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/comparison.php">Hash functions comparison</a>
            </li>
        </ul>
    </div>
</nav>

<!-- computing the hash functions -->
<?php
include 'pages/hashFunctionComputation.php';
?>

<!-- Contenu page -->
<div style="max-width: 100%; height: 100vh; background-color: rgb(52,58,64)" class="container">
    <div class="row h-100">
        <div class="col-sm-12 my-auto">
            <form method="post" action="">
                <div class="form-group col-6 col-lg-4 offset-3 offset-lg-4">
                    <label class="white" for="select">Hash function : </label>
                    <select class="form-control" id="select" name="select">
                        <option value="adler32">adler32</option>
                        <option value="crc32">crc32</option>
                        <option value="crc32b">crc32b</option>
                        <option value="fnv132">fnv132</option>
                        <option value="fnv1a32">fnv1a32</option>
                        <option value="fnv164">fnv164</option>
                        <option value="fnv164">fnv164</option>
                        <option value="gost">gost</option>
                        <option value="gost-crypto">gost-crypto</option>
                        <option value="haval128,3">haval128,3</option>
                        <option value="haval160,3">haval160,3</option>
                        <option value="haval192,3">haval192,3</option>
                        <option value="haval224,3">haval224,3</option>
                        <option value="haval256,3">haval256,3</option>
                        <option value="haval128,4">haval128,4</option>
                        <option value="haval160,4">haval160,4</option>
                        <option value="haval192,4">haval192,4</option>
                        <option value="haval224,4">haval224,4</option>
                        <option value="haval256,4">haval256,4</option>
                        <option value="haval128,5">haval128,5</option>
                        <option value="haval160,5">haval160,5</option>
                        <option value="haval192,5">haval192,5</option>
                        <option value="haval224,5">haval224,5</option>
                        <option value="haval256,5">haval256,5</option>
                        <option value="joaat">joaat</option>
                        <option value="md2">md2</option>
                        <option value="md5">md5</option>
                        <option value="ripemd128">ripemd128</option>
                        <option value="ripemd160">ripemd160</option>
                        <option value="ripemd256">ripemd256</option>
                        <option value="ripemd320">ripemd320</option>
                        <option value="sha1">sha1</option>
                        <option value="sha224">sha224</option>
                        <option value="sha256">sha256</option>
                       <option value="sha384">sha384</option>
                        <option value="sha512">sha512</option>
                        <option value="snefru">snefru</option>
                        <option value="snefru256">snefru256</option>
                        <option value="tiger128,3">tiger128,3</option>
                        <option value="tiger128,3">tiger128,3</option>
                        <option value="tiger160,3">tiger160,3</option>
                        <option value="tiger192,">tiger192,3</option>
                        <option value="tiger128,4">tiger128,4</option>
                        <option value="tiger160,4">tiger160,4</option>
                        <option value="tiger192,4">tiger192,4</option>
                        <option value="whirlpool">whirlpool</option>
                        <!--
                        Some option are puts in comment because we didn't studied them, but I will
                        uncomment it after the presentation, as I will let this website online
                        -->
                    </select>
                </div>
                <div class="form-group col-lg-6 offset-lg-3">
                    <textarea class="form-control" id="text" name="text" rows="3"><?php
                        if (isset($return)){
                            echo $return;
                        }
                        ?></textarea>
                </div>
                <div class="form-group col-6 col-lg-4 offset-3 offset-lg-4">
                    <label class="white">Adding salt ?
                        <a data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                            <img style="height: 3vh" src="images/question2.png">
                        </a>
                    </label>
                    <div class="collapse" id="collapse">
                            <p class="white">
                                The salt is a string we add at the beginning (or somewhere else) of the message to make it more difficult to find a reverse function.
                            </p>
                    </div>
                    <textarea class="form-control" id="salt" name="salt" rows="2"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Script modal et validation mail-->
<script src="script/script.js" language="javascript" type="text/javascript" crossorigin="anonymous"></script>
<!-- Boostrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

