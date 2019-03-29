<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>
    <h1>Login page</h1>
    <p>Fill in the details below in our website</p>
    <?php if(isset($_SESSION['success'])){?>
     <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
    <?php
    }
    ?>
    <?php echo validation_errors('<div class="alert alert-dangers">','</div>');?>
    <form action="" method="POST"> 
        <div class="col-lg-5 col-lg-offset-2">
            <div class="form-group">
                <label for="email" class="label-default">Email:</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            <div class="form-group">
                <label for="password" class="label-default">Password:</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div>
                <button class="btn btn-primary" name="login">Login</button>
            </div>  
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>