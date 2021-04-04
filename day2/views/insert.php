<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-3 mx-5">
            <div class="card mx-5 p-5 bg-light">
                <div class="card-body">
                    <form action="../handler/products.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="stock" class="form-control" placeholder="Stock">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit_insert" class="btn btn-warning shadow w-50">Save
                                Data</button>
                                <a href="index.php" class="btn btn-success w-25 shadow">Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>



</body>

</html>