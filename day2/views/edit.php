<?php
    include_once('../handler/products.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-3 mx-5">
        <h4 class="my-3 mx-5">Edit Book Data</h4>
            <div class="card mx-5 p-5 bg-light">
                <div class="card-body">
                    <form action="../handler/products.php" method="post">
                    <input type="hidden" name="id" value=<?= $result[0]['id']; ?>>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" value=<?= $result[0]['name']; ?>>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="description" class="form-control" placeholder="Description" value=<?= $result[0]['description']; ?>>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="price" class="form-control" placeholder="Price" value=<?= $result[0]['price']; ?>>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="stock" class="form-control" placeholder="Stock" value=<?= $result[0]['stock']; ?> >
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit_edit" class="btn btn-warning shadow w-50">Update
                                Data</button>
                                <a href="detail.php?id_detail=<?= $result[0]['id']; ?>" class="btn btn-success w-25 shadow">Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>



</body>

</html>