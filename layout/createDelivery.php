<?php
$title = "A simle CRUD app";
include '../layout/header.php';
?>

<form method="post" action="" onsubmit="return  crud()" name="form1">
    <input type="text" name="fname" placeholder="Full Name" required > <br><br>
    <input type="text" name="address" placeholder="Address" required> <br><br>
    <input type="text" name="phone" placeholder="phone" required> <br><br>

 

    <select name="orderID">
        <option value="1"> Salad </option>
        <option value="2"> Pizza </option>
        <option value="3"> Pasta </option>
        <option value="4"> Soup</option>
    </select><br><br>


    <select name=" payment">
        <option value="cash"> Cash </option>
        <option value="card"> Card </option>
       
    </select><br><br>
    <input type="submit" value="Submit" name="submit">
</form>


<?php
if (isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];
    $orderID = $_POST['orderID'];
    $payment= $_POST['payment'];

    include 'db.php';
    $sql = "insert into Delivery(fname, address,phone ,orderid,payment)
    values('$fname', '$address', '$phone' ,  '$orderID' , '$payment'  )";

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