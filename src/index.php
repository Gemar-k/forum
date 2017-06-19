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
                <div class="panel-body">
                    <?php if ($themes->rowCount() > 0) {
                        $rows = $themes->fetchAll();
                        foreach ($rows as $row) {
                            $id = $row['id'];
                            echo '<tr>';
                            echo '<div class="thema">';
                            echo '<div class="row">';
                            echo '<td class="col-md-6"><a class="themelink" href="theme.php?id='.$id.'">'.$row['subject'].'</td></a><br>';
                            echo '<td class="col-md-6">'.$row['description'].'</td>';
                            echo '<td class="col-md-6">'.$row['created_at'].'</td>';
                            echo '<td class="col-md-6">'.$row['username'].'</td>';
                            echo '</tr>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
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