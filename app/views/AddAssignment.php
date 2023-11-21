<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 20 19">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
            Home
        </a>

        <br>
        <br>

        <table class="task-table">
            <tr>
                <th>Employee</th>
                <th>Description</th>
                <th>Location</th>
                <th>Contact Number</th>
                <th>Customer Name</th>
                <th>Action</th>
            </tr>

            <?php
                $sql = "SELECT * FROM tasks";
                $result = $this->db->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['staff'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['costumer'] . "</td>";

                    echo "<td><a href='deleteRecord.php?id=" . $row['id'] . "'>Task Complete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
