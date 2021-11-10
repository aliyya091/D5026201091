<!DOCTYPE html>
<html>
    <title>AJAX load() Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body{
            background-color: #990000;
            color: white;
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>Lout of Count's Family <br>Newsletter Subscribe</h1>
        <hr>
        <h4 style="text-align: center;">Please fill out this form to subscribe to our newsletter and get the latest info of <strong>Lout of Count's Family</strong>!</h4>
    </div>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" placeholder="Please enter your preferred name" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" placeholder="Please enter a valid email address" required>
        </div>
        <button class="btn btn-light" id="button" style="color: black;">Submit</button>
        <script>
            $(document).ready(function(){
              $("button").click(function(){
                $("#test").load("testing1.txt");
              });
            });
        </script>
        <br>
        <div id="test">
            <p>Don't forget to read on legal sites only!</p>
        </div>
    </form>


</body>

</html>
