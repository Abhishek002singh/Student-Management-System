<?php

session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}
?>

<?php

include('header.php');
include('titlehead.php');
include('../dbcon.php');



$sid=$_GET['sid'];
$sql = "SELECT * FROM `student` WHERE id = '$sid';";
$run = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($run);


?>



<form action="updatedata.php" method="post" enctype="multipart/form-data">
    <table align="center" border="1" style="width:70%; margin-top:40px; background-color:#808000; color:#fff;">
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required="required"></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" value="<?php echo $data['name']; ?>" required="requuired" ></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" value="<?php echo $data['city']; ?>" required="required" ></td>
        </tr>
        <tr>
            <th>Parent Contact no</th>
            <td><input type="text" name="pcon" value="<?php echo $data['pcont']; ?>" required="required"></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="std" value="<?php echo $data['standard']; ?>" required="required"></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required="required"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
                <input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>