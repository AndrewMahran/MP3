<!DOCTYPE html>
<html>

<head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Database#1";
    $db = "clicker";
    $id = 0;

    $conn = mysqli_connect($servername, $username, $password);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected Successfully";

        $sql = "SELECT id, username FROM `clicks` WHERE id=( SELECT MAX(id) FROM clicks );";
        //$sql = "SELECT * FROM clicker.clicks";
        $id = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
    ?>

    <link rel="stylesheet" href="style.css">
    <title>Clicker</title>
</head>

<body>
    <h1 id="head">
        Clicker
    </h1>
    <h2 id="head">
        Click till your heart desire
    </h2>
    <form action="includes/insert.inc.php" method="POST">
        <p name="text" style="color: red;">
                <?php
            foreach ($id as $row) {
                echo "<h4 style='font-size: 600%;'>" . $row['id'] . "</h4>";
                echo "<h4>" . $row['username'] . " has the last click. Thank you "  . $row['username'] . "!</h4>";
            }
            ?>
        </p>
        <center>
            <button class="button">Add 1</button>
        </center>

        <input type="text" name="username" placeholder="username">
    </form>
    <p style="text-align:right; padding-bottom: 1.5%;" id="me">Made by Andrew Mahran</p>
    <p id="me">DM me with feedback @itsandrewmahran</p>
</body>

</html>