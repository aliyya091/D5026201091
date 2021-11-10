<!DOCTYPE html>
<html>

<head>
    <title>Validation Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

    <style>
        body {
            background-color: #272f49;
        }

        .card {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-right: 5px;
            margin-left: 5px;
            border: 1px solid #dbdbdb;
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="card" style="margin: 5px;">
                        <div class="card-header text-center" style="padding: 3px; background: #fffbd4;">
                            <h1 class="card-title">Javascript Form Validation</h1>
                        </div>
                        <div class="card-body" style="padding: 10px; background-color: white;">
                            <p class="text-danger">All fields are mandatory</p>
                            <form action="https://www.youtube.com/watch?v=KrNUrgaOsCc" class="needs-validation"
                                novalidate>
                                <!--Full Name-->
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" id="fullname"
                                        placeholder="Enter your full name here" name="fullname" pattern="[a-zA-Z\s]+"
                                        required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Please fill out with letters only</div>
                                </div>
                                <!--Username-->
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="usn"
                                        placeholder="Enter your username here" name="usn" pattern="[A-Za-z0-9]+"
                                        minlength="6" maxlength="8" required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Please fill out with 6-8 characters of letters and
                                        numbers only</div>
                                </div>
                                <!--Email-->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter a valid email here" name="email" required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Please fill out a valid email address</div>
                                </div>
                                <!--State-->
                                <div class="form-group">
                                    <label for="state">State:</label>
                                    <select class="form-control" id="state" name="state" required>
                                        <option value="" selected disabled>Please Choose</option>
                                        <option>Indonesia</option>
                                        <option>Singapore</option>
                                        <option>Malaysia</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <!--Address-->
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" name="address"
                                        placeholder="Enter your current address here" rows="3" cols="50" wrap="soft"
                                        required></textarea>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Please fill out your address</div>
                                </div>
                                <!--Zipcode-->
                                <div class="form-group">
                                    <label for="zipcode">Zipcode</label>
                                    <input type="text" class="form-control" id="zipcode" name="zipcode"
                                        placeholder="Enter your zipcode here" minlength="6" maxlength="6"
                                        pattern="[0-9]+" required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Please fill out your zipcode</div>

                                </div>
                                <button type="submit" class="btn btn-warning btn-lg btn-block" id="button"
                                    value="Submit">Check
                                    Form</button>
                            </form>
                            <!-- <script>
                                $(document).ready(function(){
                                  $("form").submit(function(){
                                    alert("Form submitted! Thank you.");
                                  });
                                });
                            </script> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>

</body>

</html>
