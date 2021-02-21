<html>
    <body>
        <table>
            <tr>
                <th>User</th>
                <th>brand</th>
                <th>type</th>
                <th>comments</th>
                <th>date</th>
            </tr>
        <?php
        $conn = mysqli_connect("sql107.epizy.com ", "epiz_27976921", " 	
        Cdfo6FMv4dBn", "epiz_27976921_tc");
        $sql = "SELECT * FROM reviews";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["User"] . "</td><td>" . $row["brand"] . "</td><td>" . $row["type"] . "</td><td>" . $row["comments"] . "</td><td>" . $row["date"] . "</td></tr>";
            }
        } else {
            echo "No Results";
        }
        $conn->close();
        ?>
        </table>
    </body>
</html>