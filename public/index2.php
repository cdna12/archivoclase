<?php 
include('functions.php'); 

// $spiderMan = new Character;
// $spiderMan->name = "Spider Man";

$hulk = new Character("Hulk", "Bruce Banner", "Male", "4");

$richard = new Persona("Richard", 80, 1.7);
$persona1 = new Persona("Alan", 75, 1.64);
$persona2 = new Persona("Mónica", 85, 1.59);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container py-4">
    <div class="row justify-content-center mb-4">
        <div class="col-6">
            <h1 class="text-center py-4 bg-danger text-white mb-0">PHP Classes</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <pre class="mb-4">
                <?php print_r($hulk); ?>
            </pre>

            <pre>
                <?php print_r($richard); ?>
            </pre>

            <p><?= $richard->get_bmi(); ?></p>
            <p><?= $persona1->get_bmi(); ?></p>
            <p><?= $persona2->get_bmi(); ?></p>
        </div>
    </div>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>