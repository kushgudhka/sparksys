<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Sparx Banking</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            
            <div class="row intro py-1" style="background: rgb(34,193,195);  background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(189,253,45,0.8547794117647058) 100%);">
              <div class="col-sm-12 col-md mt-5">
                <div class="heading text-center my-5">
                  <h3 style="font-family: 'M PLUS Rounded 1c', sans-serif;">Welcome to</h3>
                  <h1 style="font-family: 'Exo 2', sans-serif;">Sparx Banking</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center mt-1">
                <img src="img/bankPng.png" class="img-fluid pt-2" width="312px" height=auto>
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act mt-2">
                    <img src="img/user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4; font-family: 'M PLUS Rounded 1c', sans-serif;">Create a User</button></a>
                  </div>
                  <div class="col-md act mt-2">
                    <img src="img/transfer.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4; font-family: 'M PLUS Rounded 1c', sans-serif;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act mt-2">
                    <img src="img/transaction.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4; font-family: 'M PLUS Rounded 1c', sans-serif;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-4 py-2" style=>
        <p style="font-family: 'M PLUS Rounded 1c', sans-serif; font-style: italic;  ">&copy June 2021. by <b >Kush Gudhka</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>