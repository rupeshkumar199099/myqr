
<?php
    if(isset($_POST['submit'])){
        $amt= $_POST['amount'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>QR Code!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->



<div class="text-center" style="margin-top:10%">
<div class="col-12">
    <form action="" method="POST" id="myForm">
    <div class="col-lg-3">
        <label for="">Enter Amount</label>
        <input type="number" class="form-control" name="amount">
    </div>
    <div class="col-lg-3 mt-3">
        <button type="submit" class="btn btn-primary btn-sm" id="genQR">Submit</button>    
    </div>
    </form>
</div>
<canvas id="qr-code"></canvas>
<h5 style="text-align:center; color:green;">Scan & Pay Here</h5>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
   <script>
    var buttonqr = document.getElementById('genQR');
    buttonqr.addEventListener("click", function(e) {
    e.preventDefault(); // Prevent default form submission behavior
    
    var form = document.getElementById('myForm');
    var input1value = form.elements['amount'].value; // Retrieve input value dynamically
    
    var qr;
    (function() {
        qr = new QRious({
            element: document.getElementById('qr-code'),
            size: 200,
            value: "upi://pay?pa=rupeshkumaryadav199099-1@okaxis&pn=Rupesh Kumar&tr=pfoIUlcnUy&tn=Add Balance&am="+input1value+"&cu=INR"
        });
    })();

    console.log("Input 1 value:", input1value);
});

        </script>
  </body>
</html>