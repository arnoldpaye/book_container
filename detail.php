<!DOCTYPE html>
<html>
<head>
    <title>Detail Page</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "123456";
        $database = "book_container";

        // create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn-> connect_error);
        } else {
            //echo "Connection successfully";
            $query = "SELECT id,title,description,content,img FROM book WHERE id =".$_GET['id'];
            $result = $conn->query($query);
            $value = $result->fetch_assoc();
            echo '<h1>'.$value['title'].'</h1>';
            echo '<p>'.$value['title'].'</p>';
            $conn->close();
        }
    ?>
    <a href="index.php">Atras</a>
</body>
</html>