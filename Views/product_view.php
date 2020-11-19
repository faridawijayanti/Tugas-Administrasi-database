<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Product List</title>
</head>
<body id="page-top">
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row text-center">
                    
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="text-center">
                                <h2 class="section-heading text-uppercase">Daftar Makanan</h2>
                            </div>
                            <a href="/product/add_new" class="btn btn-md btn-success mb-3"> TAMBAH DATA</a>
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th>Nama Makanan</th>
                                                <th>Harga Makanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                    </thead>
                                        <tbody>
                                        <?php foreach($product as $row):?>
                                            <tr>
                                                <td><?= $row['product_name'];?></td>
                                                <td><?= $row['product_price'];?></td>
                                                <td>
                                                    <a href="/product/edit/<?= $row['product_id'];?>" class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="/product/delete/<?= $row['product_id'];?>" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<body>
    
</body>
</html>