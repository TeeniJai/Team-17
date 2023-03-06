<?php
$title = "Reservation";
include '../layout/header.php';
?>

<form method="post" action="" onsubmit="return  reservationVal()" name="form3">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="fname" placeholder="Full Name" required> <br><br>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="address" placeholder="Address" required> <br><br>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="email" placeholder="Email" required> <br><br>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required> <br><br>
        </div>

        <input type="date" name="schedule">

        <input type="submit" value="Submit" name="submit">
    </div>
</form>


<?php
if (isset($_POST["submit"])) {
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $schedule = $_POST['schedule'];
    $email = $_POST['email'];

    include 'db.php';
    $sql = "insert into Reservation (fname, address, phone, schedule, email)
    values('$fname', '$address', '$phone','$schedule','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Your information is added successfully";
    } else {
        echo "Error:" . $conn->error;
    }
}
?>

<?php
include '../layout/footer.php';
?>