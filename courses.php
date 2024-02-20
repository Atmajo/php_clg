<?php
include("include/header.php");
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "studentDB");
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$query = "SELECT * from student";
$result = $conn->query($query);
?>
<table border>
    <tr>
        <td>Id</td>
        <td>Course Name</td>
        <td>Course Description</td>
        <td>Status</td>
    </tr>
    <tr>
        <?php 
            while ($row = $result->fetch_assoc()) {
        ?>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['c_name']?></td>
            <td><?php echo $row['c_description']?></td>
            <td><?php echo $row['status']?></td>
            </tr> 
        <?php
            }
        ?>
    
</table>
<a href="./index.php">Add Courses</a>
<?php
include("include/footer.php");
?>