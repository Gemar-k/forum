<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php include_once 'app/templates/header.php';
    include 'app/handlers/registerhandler.php';
    include 'app/templates/top.php'?>
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
                    <?= $registermessage ?>
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