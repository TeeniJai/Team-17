<?php
$title = "A simle CRUD app";
include '../layout/header.php';
?>

<form method="post" action="" onsubmit="return  crud()" name="form1">
    <input type="text" name="fname" placeholder="Full Name" required > <br><br>
    <input type="text" name="address" placeholder="Address" required> <br><br>
    <input type="text" name="email" placeholder="Email" required> <br><br>
    <input type="text" name="phone " placeholder=" phone" required> <br><br>

    <select name="ReservationID">
        <option value="1"> Salad </option>
        <option value="2"> Pizza </option>
        <option value="3"> Pasta </option>
        <option value="4"> Soup</option>
    </select><br><br>


    <select name="schedule">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select><br><br>
    
    <input type="submit" value="Submit" name="submit">
</form>


<?php
if (isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];
    $ReservationID = $_POST['ReservationID'];
    $schedule= $_POST['schedule'];
  

    include 'db.php';
    $sql = "insert into Reservation table (fname, address,phone ,Reservationid,schedule,)
    values('$fname', '$address', '$phone' ,  '$ReservationID' ,'$schedule',  )";

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