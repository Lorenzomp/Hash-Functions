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
            <li class="nav-item">
                <a class="nav-link" href="definition.php">What is a hash function ?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="comparison.php">Hash functions comparison</a>
            </li>
        </ul>
    </div>
</nav>



<!-- Contenu page -->
<div style="max-width: 100%; background-color: rgb(52,58,64) ; " class="container">
    <div style="padding-top: 100px; margin-bottom: 50px" class="text-center col-12">
        <h1 class="white">Comparison between hash functions</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
            <p class="white">
                As we saw in the precedent chapter, all the hash functions are different. During this chapter, we
                will try to identify the most important differences between the different hash functions. Our aim is
                to make in sort that a reader could identify easily what are the pros and the cons of each hash function.
                Because the number of different hash function is so big and keep increasing, we will have to focus on
                a certain number of functions.
                <br />
                The ones we chose (because by searching on the web, we identified them as the most commons ones) are :
            </p>
            <ul>
                <li class="white">MD2</li>
                <li class="white">MD5</li>
                <li class="white">Sha1</li>
                <li class="white">Sha256</li>
                <li class="white">Sha512</li>
                <li class="white">Haval-128 (Haval128,3)</li>
                <li class="white">Whirpool</li>
            </ul>
            <h3 class="white">In terms of time</h3>
            <p class="white">In a first time we wanted to compare the hash functions by complexity, but it
                appears to not be really relevant. That is why we decided to compare them via their time execution.
                <br />
                Here are the results :
                <br />
                <h5 class="white">Experimentation results : Time per 1 000 000 calculations per function</h5>
            </p>
            <img style="margin-bottom: 30px" src="../images/hash_functions_time.PNG">
            <h3 class="white">In terms of security</h3>
            <p class="white">
                Now, we will focus on the security aspect of these hash functions.
                <br /><br />
                For being secure a hash function must resist at 2 types of attacks :
                <br /><br />
                <b>The collision attack</b> : The aim of this attack is to find 2 different inputs (string or file)
                that produce the same output (hash value) : find (m1,m2) with h(m1) = h(m2), m1 != m2
                <br />
                <b>And The preimage attack</b> : The aim of this attack is : having a hash value, finding a message
                that, when hash, produce as output, the hash value : find m with h(m) = y, knowing y
                <br />
                And the second-preimage attack ? Yes, it is also an attack that we can perform on hash
                functions, quite similar to the preimage attack, as you can guess. The difference is that
                in the second-preimage attack, we have the hash value AND the message : find m2 with h(m1) =
                h(m2), knowing m1 and h(m1) (I know, if we have m1, we can compute h(m1))
                <br /><br />
                So, we will identify if the hash functions we chose to consider resist to these attacks or not.
                <br />
                Another important criterion, which has a big influence on the resistance to these attacks, is the size of the
                output. Indeed, the size of the output is directly linked with what we call security claim :
                considering an output of size n, then the preimage resistance is 2n and the collision resistance is 2n/2.
            </p>
            <img style="margin-bottom: 30px" src="../images/hash_functions_security.PNG">
            <h3 class="white">Conclusion</h3>
            <p class="white">Here is a table with the results from the 2 precedents table : </p>
            <img style="margin-bottom: 30px" src="../images/hash_finction_conclusion.PNG">
            <p class="white">So depdending on why do you need a hash function, you should now be able to chose one that perfectly stick to your
            needs ;)</p>
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

