<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php
    include_once 'app/templates/header.php';
    include 'app/templates/top.php';
    include 'app/handlers/replieshandler.php'?>
    <section class="middensectie">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading themaheader">
                        <div class="row">
                            <div class="col-md-1">Replies</div>
                            <div class="col-md-1 col-md-offset-10">
                                <?= $newreplybutton ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                            <?php while( $row = $replies->fetch()) : ?>
                            <tr>
                                <th><?php echo $row['content']; ?></th>
                                <th>Date</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row['username']; ?></td>
                            </tr>
                            <?php endwhile ?>
                            </tbody>
                        </table>
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