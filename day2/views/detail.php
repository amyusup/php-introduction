<?php
    include_once("../handler/products.php");
    // echo "<pre>";
    // var_dump($result[0]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="my-3">Products Detail</h4>
        <div class="card bg-light p-3">
            <div class="card-body">
                <b>Name</b> : <?= $result[0]['name']; ?>
                <br />
                <b>Description</b> : <?= $result[0]['description']; ?>
                <br />
                <b>Price</b> : <?= $result[0]['price']; ?>
                <br />
                <b>Stock</b> : <?= $result[0]['stock']; ?>
                <br />
            </div>
        </div>
                <div class="text-center my-3">
                     <a href="edit.php?id_edit=<?= $result[0]['id']; ?>" class="btn btn-warning shadow w-25" >Edit</a>
                     <a href="../handler/products.php?id_delete=<?= $result[0]['id']; ?>" class="btn btn-danger shadow w-25" >Delete</a>
                     <a href="index.php" class="btn btn-success shadow w-25" >Back</a>
                </div>
    </div>

</body>

</html>