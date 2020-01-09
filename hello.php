
<?php
echo "Hello world!";
    
?>
<html>
<body>

<table border="2">
    <tr>
        <th>name</th>
        <th>number</th>

    </tr>
    <?php
    $conn = mysqli_connect("localhost","providentcrm","providentcrm","default");
    $q2 = "select * from abc ";
    $run = mysqli_query($conn, $q2);
    $row = mysqli_fetch_array($run);
    ?>
    <tr>
        <td><?= $row['name']; ?></td>
        <td><?= $row['number']; ?></td>
    </tr>
</table>
</body>
