<!DOCTYPE html>
<html lang="en">
<body>
<section class="section1">
    <?php
    include_once 'app/templates/header.php';
    include 'app/handlers/themahandler.php';
    include 'app/templates/top.php';?>
    <section class="middensectie">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading themaheader">Thema's</div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                        <?php while( $row = $themes->fetch()) : ?>
                        <tr>
                            <th><?php echo '<a class="themelink" href="">'.$row['subject'].'</a>'?></th>
                            <th>Date</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                            </tr>
                        <?php endwhile ?>
                        </tbody>
                    </table>
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