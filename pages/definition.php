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
    <link rel="stylesheet" href="../style.css">
</head>

<body style="max-width: 100%;">
<!-- Navbar -->
<nav style="width: 100%; position: fixed; top: 0; z-index: 10" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php"><span style="">Hash Functions</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">What is a hash function ?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="comparison.php">Hash functions comparison</a>
            </li>
        </ul>
    </div>
</nav>



<!-- Contenu page -->
<div style="max-width: 100%; background-color: rgb(52,58,64) ; " class="container">
    <div style="padding-top: 100px; margin-bottom: 50px" class="text-center col-12">
        <h1 class="white">What is a hash function ?</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
            <p class="white">
                A (cryptographic) hash function is a function that transforms some
                variable-length input (the message) into a fixed-size or fixed length output.
                The output value is referred to as the hash value, (message) digest or checksum.
                <br />
                Certain properties should be present for a proper/consistent hash function:
            </p>
            <ul>
                <li class="white">It should be extremely easy to calculate a hash value for any data given.</li>
                <li class="white">It should be extremely computationally difficult to calculate an alphanumeric
                    text that has a given hash.</li>
                <li class="white">It should be very unlikely that two nearly-identical messages will have the same hash value.
                    This is called collision resistance.</li>
                <li class="white">The output of a cryptographic hash function must not reveal any information about the input.
                    This is called pre-image resistance.</li>
            </ul>
            <p class="white">A hash function should behave like a random function while remaining deterministic
                (Being deterministic means that the same input will always yield the same output). A cryptographic
                hash function is considered "insecure" (or broken) if at least one of the following tasks are
                computationally feasible: </p>
            <ul>
                <li class="white">Finding a (previously unseen) message that matches a given hash values.</li>
                <li class="white">Finding "collisions" - which are when two different messages yield the same hash value.</li>
            </ul>
            <p class="white">
                An attacker who is able to accomplish any of the above two tasks, can use the results
                to substitute an authorized message with an unauthorized one.
                <br />
                A hash function is also a one-way function - meaning that it should be impossible to reverse a hash
                value into the original message content and that it is ONLY possible to get from the original message
                to the hash value (and not the other way).
            </p>
        </div>
    </div>
    <br /><br /><br />
</div>




<!-- Script modal et validation mail-->
<script src="script/script.js" language="javascript" type="text/javascript" crossorigin="anonymous"></script>
<!-- Boostrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

