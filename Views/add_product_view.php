<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Data</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <b> Tambahkan Barang </b>
                    <form class="table" action="/product/save" method="post">
                        <input class=" table-bordered table-striped" type="text" name="product_name">
                        <input class=" table-bordered table-striped" type="text" name="product_price">
                        <button class="btn btn-md btn-success mb-3" type="submit">Simpan</button>
                    </form>
                </div> 
        </div>
    </div> 
</div>
</body>
</html>