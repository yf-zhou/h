<html>
    <body>
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "db_connect");
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["guest_user"] . "</td><td>" . $row["guest_pass"] . "</td></tr>";
            }
        } else {
            echo "No Results";
        }
        $conn->close();
        ?>
        </table>
    </body>
</html>