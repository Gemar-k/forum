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
    <?php include_once 'app/templates/header.php';?>
    <section class="middensectie">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading themaheader">Thema's</div>
                <div class="panel-body">
                    <div class="thema"><a href="topic.html">Hi dit moet een thema voorstellen</a></div>
                    <div class="thema"><a href="topic.html">Hi dit is nog een thema</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading recentheader">Recent Topics</div>
                <div class="panel-body">
                    <div class="recenttopic"><a href="topic.html">Hi dit is een recent topic</a></div>
                </div>
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