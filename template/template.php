<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
</head>

<body style="padding-bottom: 75px;"> <!-- make a style -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;"> <!-- make a style for navbar -->
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
         <?php nav_menu(); ?>
      </div>
      </nav>

        <header class="container text-center", >
            <div class="jumbotron jumbotron-fluid">
                <h1><?php site_name(); ?></h1>
            </div>

        <article class="mx-auto">
            <?php page_content(); ?>
        </article>

        </header>
    
<footer class="container text-center">
    <br>
    <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
</footer>

    <nav class="navbar fixed-bottom navbar-dark bg-primary"> </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    





<script>
        $("#button").click(function() {
            $.ajax({
                type: 'post',
                url: '../includes/functions.php',
                data: {
                    "random": true
                },
                dataType: "HTML",
                success: function(result) {
                    $("#randomPic").html(result);
                },
                error: function() {
                    alert("Sorry bro, looks like it couldnt couldn't load the pic");
                }
            });
            return false;
        });
    </script>

    </body>
</html>