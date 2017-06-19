<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PDO Forum</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="section1">
    <?php include_once 'app/templates/header.php';
    include 'app/handlers/profielhandler.php'?>
    <section class="middensectie">
        <div class="row">
            <div class="loginsectie col-md-4 col-md-offset-4">
                <h1 class="text-center">Profiel</h1>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/profile.png">
                    </div>
                    <div class="col-md-6">
                        <p>Name: <?= $profiel_name?></p>
                        <p>Username: <?= $profiel_username?></p>
                        <p>Email: <?= $profiel_email?></p>
                        <p>Sex: <?= $profiel_sex?></p>
                        <p>Created at: <?= $profiel_created_at?></p>
                    </div>
                </div>
                <div class="form-group">
                    <a href="index.php" class="form-control text-center loginbutton">Close</a>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>