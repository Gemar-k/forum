<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php
    include_once 'app/templates/header.php';
    include 'app/handlers/topichandler.php';
    include 'app/templates/top.php';?>
    <section class="middensectie">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading themaheader">
                        <div class="row">
                            <div class="col-md-1">Topics</div>
                            <div class="col-md-1 col-md-offset-10">
                                <?= $newtopicbutton ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                            <?php while( $row = $topics->fetch()) : ?>
                            <tr>
                                <th><?php echo '<a class="themelink" href="">'.$row[1].'</a>'?></th>
                                <th>Date</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
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