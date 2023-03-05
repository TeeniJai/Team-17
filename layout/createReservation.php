<?php
$title = "A simle CRUD app";
include '../layout/header.php';
?>

<form method="post" action="" onsubmit="return  crud()" name="form1">
    <input type="text" name="fname" placeholder="Full Name" required > <br><br>
    <input type="text" name="address" placeholder="Address" required> <br><br>
    <input type="text" name="email" placeholder="Email" required> <br><br>
    <input type="text" name="phone" placeholder="phone" required> <br><br>

    <input type="date" name="schedule">
    
    <input type="submit" value="Submit" name="submit">
</form>


<?php
if (isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];
    $schedule= $_POST['schedule'];
    $email= $_POST['email'];

    include 'db.php';
    $sql = "insert into Reservation (fname, address, phone, schedule, email)
    values('$fname', '$address', '$phone','$schedule','$email')";

    if ($conn ->query($sql) === TRUE){
        echo "Your information is added successfully";
    }
    else {
        echo "Error:" . $conn->error;
    }
}
?>

<?php
include '../layout/footer.php';
?>