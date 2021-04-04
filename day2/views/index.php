<?php 
    include_once("../handler/products.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h4>List of Books</h4>
            <a href="insert.php" class="btn btn-warning shadow my-3 w-25 ">Insert Data</a>
        </div>
        <div class="card p-3 bg-light">
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col" class="col-2">#</th>
                            <th scope="col" class="col-3">Name</th>
                            <th scope="col" class="col-3">Description</th>
                            <th scope="col" class="col-2">Price</th>
                            <th scope="col" class="col-2">Stock</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach(getList() as $value){
                        ?>
                        <tr>
                            <td scope="row"><?= $i ?></td>
                            <td scope="row"><?= $value['name']; ?></td>
                            <td scope="row"><?= $value['description']; ?></td>
                            <td><?= $value['price']; ?></td>
                            <td><?= $value['stock']; ?></td>
                            <td>
                                <a href="detail.php?id_detail=<?=$value['id'] ?>" class="btn btn-success" >Detail</a>
                                <!-- <a href="../handler/books.php?id_delete=<?= $value['id']; ?>" class="btn btn-danger" >Delete</a> -->

                            </td>
                        </tr>

                        <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>