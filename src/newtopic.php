<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php include_once 'app/templates/header.php';
    include 'app/handlers/newtopichandler.php';
    include 'app/templates/top.php'?>
    <section class="middensectie">
        <div class="row">
            <div class="loginsectie col-md-4 col-md-offset-4">
                <h1 class="text-center">New topic</h1>
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" placeholder="Subject" type="text" name="subject">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Description" type="text" name="description">
                    </div>
                    <?= $newtopicmessage ?>
                    <div class="form-group">
                        <button class="form-control loginbutton" name="topicpost" type="submit">Post</button>
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