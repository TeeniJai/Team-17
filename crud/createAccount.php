<?php
$title = "A simle CRUD app";
include '../layout/header.php';
?>

<form method="post" action="" onsubmit="return  crud()" name="form1">
    <input type="text" name="fname" placeholder="Full Name" required > <br><br>
    <input type="text" name="email" placeholder="Email" required> <br><br>
    <input type="text" name="address" placeholder="Address" required> <br><br>
    <input type="text" name="phone " placeholder="Phone " required> <br><br>
   

    <select name="accountid">
        <option value="BBCAP22"> 8080 </option>
        <option value="BBCAP21"> 8081 </option>
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
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];
    $accountid = $_POST['accountid'];
    $payment= $_POST['payment'];

    include 'db.php';
    $sql = "insert into account table (fname, email, address, phone,accountid,payment)
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