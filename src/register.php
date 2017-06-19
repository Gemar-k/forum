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
    include 'app/handlers/registerhandler.php'?>
    <section class="middensectie">
        <div class="row">
            <div class="loginsectie col-md-4 col-md-offset-4">
                <h1 class="text-center">Register</h1>
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email" type="text" name="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Name" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Username" type="text" name="new_username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" minlength="6" placeholder="Password" type="password" name="new_password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" minlength="6" placeholder="Repeat Password" type="password" name="check_new_password">
                    </div>
                    <?= $passwordmessage ?>
                    <div class="form-group">
                        <label>Male</label>
                        <input type="radio" value="male" name="sex">
                        <label>Female</label>
                        <input type="radio" value="female" name="sex">
                    </div>
                    <div class="form-group">
                        <button class="form-control loginbutton" name="register" type="submit">Register</button>
                    </div>
                </form>
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