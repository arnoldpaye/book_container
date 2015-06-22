<!DOCTYPE html>
<html>
<head>
    <title>Book.org Container</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
    <h1>Book.org Container</h1>
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
            $query = "SELECT id,title,summary,content,img, active FROM book WHERE active";
            if ($result = $conn->query($query)) {
                echo '<ul class="wrapper columns-3">';
                while($row = $result->fetch_assoc()) {
                    echo '<li>';
                    echo '<a href="detail.php?id='.$row['id'].'">';
                    echo '<img src="./img/'.$row['img'].'"/>';
                    echo '</a>';
                    echo '<h3>' . $row['title'] . '</h3>';
                    echo '<p>' . $row['summary'] . '</p>';
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                die("Connection failed: " . $conn-> connect_error);
            }
            $conn->close();
        }
    ?>
</body>
</html>