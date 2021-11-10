<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>

    <title>Form Input Data Barang</title>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script type="text/javascript">
        function minHarga(value, min)
        {
            if(parseInt(value) < 5000 || isNaN(parseInt(value)))
                return min;
            else return value;
        }
    </script>

    <style>
        .container-fluid{
            background-color: #6897bb;
        }
        .card-header{
            background-color: #118da3;
            font-size: 20px;
        }
        .card-body{
            background-color: white;
        }
        #identitas{
            background-color: #9bdae5;
            width: 300px;
            top: 5;
            left: 5;
            position: fixed;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <br>
        <br>
        <div class="container text-left" id="identitas">
            <p>ALIYYA ZAHRA NURULHUSNA</p>
            <p>ALIYYA</p>
            <p>5026201091</p>
        </div>
        <div class="row">
            <br>
            <br>
            <!--kosong-->
            <div class="col-sm-4">

            </div>
            <!--card form-->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header text-center" style="padding: 3px;">
                        <h1>Form Input Data Barang</h1>
                    </div>
                    <div class="card-body">
                        <p class="text-danger">*Semua harus diisi*</p>
                        <form action="https://www.youtube.com/watch?v=KrNUrgaOsCc" class="needs-validation" novalidate>
                            <!--Nama Barang-->
                            <div class="form-group">
                                <label for="namabarang">Nama Barang</label>
                                <input type="text" class="form-control" id="namaBarang" name="fullname" minlength="10"
                                    required>
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Mohon isi minimal 10 karakter</div>
                            </div>
                            <!--Harga-->
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" onkeyup="this.value = minHarga(this.value, 5000)" required>
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Mohon isi dengan nilai minimum sebesar 5000</div>
                            </div>
                            <!--Jenis Barang-->
                            <div class="form-group">
                                <label for="jenisBarang">Jenis Barang</label>
                                <select class="form-control" id="jenisBarang" name="jenisBarang" required>
                                    <option value="" selected disabled>Please Choose</option>
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                    <option>Non Mamin</option>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Mohon pilih jenis barang</div>
                                </select>
                            </div>
                            <!--Kode Barcode-->
                            <div class="form-group">
                                <label for="barcode">Kode Barcode</label>
                                <input type="text" class="form-control" id="barcode" name="barcode" pattern="[0-9]+"
                                    minlength="10" required>
                                <div class="valid-feedback">Valid</div>
                                <div class="invalid-feedback">Mohon isi dengan angka minimal 10 karakter</div>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="button" value="Submit">
                                    Kirim
                                </button>
                                <input type="reset" class="btn btn-secondary btn-lg btn-block" value="Reset">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--kosong-->
            <div class="col-sm-4">

            </div>
        </div>
        <br>
        <br>
    </div>
</body>

</html>
