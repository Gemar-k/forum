<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php include_once 'app/templates/header.php';
    include 'app/handlers/profielhandler.php';
    include 'app/templates/top.php'?>
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