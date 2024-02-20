<?php
include("include/header.php");
if(isset($_POST["submit"])){
    $cname = $_POST['c_name'];
    $cdescription = $_POST['c_description'];
    $query = "insert student set c_name='$cname', c_description='$cdescription'";
    mysqli_query($conn, $query);
}
?>
<a href="./courses.php">View Courses</a>
<form action="" method="post">
    <table>
        <tr>
            <td>Course name:</td>
            <td><input type="text" name="c_name"></td>
        </tr>
        <tr>
            <td>Course Description:</td>
            <td><input type="text" name="c_description"></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
<?php
include("include/footer.php");
?>