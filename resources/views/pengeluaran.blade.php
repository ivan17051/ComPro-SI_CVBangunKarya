<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemasukan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Tanggal Belanja</label>
                <input type="date" class="form-control" name="tanggal belanja">
            </div>

            <div class="form-group">
                <label>List Belanja</label>
                <input type="text" class="form-control" placeholder="List">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" placeholder="Deskripsi">
            </div>

            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="number" class="form-control" placeholder="Jumlah Barang">
            </div>

            <div class="form-group">
                <label>Harga Satuan</label>
                <input type="number" class="form-control" placeholder="Harga Satuan">
            </div>

            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" placeholder="Jumlah">
            </div>

            <div class="form-group">
                <label>Nama Toko</label>
                <input type="text" class="form-control" placeholder="Nama Toko">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Pilih File</label>
                </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
    
</body>
</html>