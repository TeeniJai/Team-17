<?php
$title = "A simle CRUP app";
include '../layout/header.php';
?>

<form method="post" action="">
    <input type="text" name="fname" placeholder="Full Name" required> <br><br>
    <input type="text" name="email" placeholder="Email" required> <br><br>
    <input type="text" name="address" placeholder="Address" required> <br><br>
    <input type="text" name="phone " placeholder="Phone " required> <br><br>
   

    <select name="accountid">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select><br><br>
    <select name="payment ">
        <option value="cash"> Cash </option>
        <option value="card"> Card </option>
       
    </select><br><br>
    <input type="submit" value="Submit" name="submit">
</form>


<?php
if (isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $email= $_POST['email'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];
    $accountid = $_POST['accountid'];
    $payment= $_POST['payment'];

    include 'db.php';
    $sql = "insert into studentinfo (fname, email, address, phone,accountid,payment)
    values('$fname', '$email', '$address', '$phone' ,  '$accountid' , '$payment'  )";

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