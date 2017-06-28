<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php include_once 'app/templates/header.php';
    include 'app/templates/top.php';
    include 'app/handlers/userblocker.php';
    include 'app/handlers/newthemehandler.php'?>
    <section class="middensectie">
        <div class="row">
            <div class="loginsectie col-md-4 col-md-offset-4">
                <h1 class="text-center">New Theme</h1>
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" placeholder="Subject" type="text" name="theme_subject">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Description" type="text" name="theme_description">
                    </div>
                    <?= $newthememessage ?>
                    <div class="form-group">
                        <button class="form-control loginbutton" name="themepost" type="submit">Post</button>
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