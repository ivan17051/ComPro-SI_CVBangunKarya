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
                <label>Tanggal Pemasukan</label>
                <input type="date" class="form-control" name="tanggal pemasukan">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" placeholder="Kategori">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" placeholder="Deskripsi">
            </div>

            <div class="form-group">
                <label>Jumlah Pemasukan Klien</label>
                <input type="number" class="form-control" placeholder="Jumlah Pemasukan">
            </div>

            <div class="input-group">
                <label>Upload Struk</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Pilih File</label>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
    
</body>
</html>