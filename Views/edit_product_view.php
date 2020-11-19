<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Product</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <b> Edit Barang </b>
                <form class="table" action="/product/update" method="post">
                    <input class=" table-bordered table-striped" type="text" name="product_name" value="<?= $product->product_name;?>">
                    <input class=" table-bordered table-striped" type="text" name="product_price" value="<?= $product->product_price;?>">
                    <input class=" table-bordered table-striped" type="hidden" name="product_id" value="<?= $product->product_id;?>">
                    <button class="btn btn-md btn-success mb-3" type="submit">Memperbarui</button>
                </form>
        </div>
    </div> 
</div>
</body>
</html>
