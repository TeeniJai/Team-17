<?php
$title = "Update your info";
include '../layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn,"select * from account table 
where id= '$a'");
$row =mysqli_fetch_array($result);
?>
 <h2>Update your information below </h2>

 
<form name = "update" method = "post" action = "">

    <input type ="text" name ="Fname" placeholder="First Name" required value = "<?php echo $row['Fname'];?>"> <br><br>
    <input type ="text" name ="phone" placeholder="Phone" required value = "<?php echo $row['phone'];?>"> <br><br>
    <input type ="text" name ="address" placeholder="Address" required value = "<?php echo $row['address'];?>"><br><br>
    <input type ="text" name ="email" placeholder="Email" required value = "<?php echo $row['email'];?>"><br><br>
    <input type ="text" name ="payment" placeholder="Payment" required value = "<?php echo $row['payment'];?>"><br><br>
        <select name="accountID" value = "<?php echo $row['accountID'];?>">
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
        </select><br><br>

        <input type ="submit" value ="Update your info" name="update"> <br></br>
        <input type ="submit" value ="Delete your info" name="delete"> <br></br>

</form>

<?php

if (isset($_POST['update'])){
    $fname = $_POST['Fname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];
    $accountID = $_POST['accountID'];
    $query = mysqli_query($conn, "UPDATE account table set Fname = '$fname', phone = '$phone' , address= '$address' ,email = '$email' ,payment = '$payment' ,accountID = '$accountID'     where id = '$a'");

        if ($query){

            echo "<h2> success </h2>";
        }
        else{
            echo "<h2> fail to update </h2>";
        }
}


if (isset($_POST['delete'])){
    $fname = $_POST['Fname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];
    $accountID = $_POST['accountID'];

    $query = mysqli_query($conn, "delete from account table  where id = '$a'");

        if ($query){

            echo "<h2> success </h2>";
        }
        else{
            echo "<h2> fail </h2>";
        }
}

?>

    


