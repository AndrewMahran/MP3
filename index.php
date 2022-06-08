

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <?php 
        //$sql = "SELECT id FROM `clicker.clicks` WHERE id=( SELECT MAX(id) FROM clicks )";
        //$result = mysqli_query($con, $sql);
        //$id = mysqli_num_rows($result);
        //$sql = "SELECT username FROM `clicker.clicks` WHERE id=( SELECT MAX(id) FROM clicks )";
        //$result = mysqli_query($con, $sql);
        //$username = mysqli_num_rows($result);
        ?>
        <h1>
            <center>
                Clicker
            </center>
        </h1>
        <h2>
            <center>
                Click till your heart desire
            </center>
        </h2>
        <form action="includes/insert.inc.php" method="POST">
            <h4 id="output"><?php
            //$id
        ?><?php
        //$username
    ?> has the last click</h4>
            <input type="text" name="username" placeholder="username">
            <button type="submit" name="submit">+1</button>
        </form>
            <button onclick=addPoints()>+1</button>
        <h4></h4>
    </body>
</html>
<script>
    var points = 0;

    document.getElementById('output').innerHTML = points;
    function addPoints() {
        points = points + 1;
        document.getElementById('output').innerHTML = points;
    }
</script>