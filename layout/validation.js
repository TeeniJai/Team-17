function accountVal() {
    let fname = (document.form1.fname.value).trim();
    let email = (document.form1.email.value).trim();
    let address = (document.form1.address.value).trim();
    let phone = (document.form1.phone.value).trim();
   
    if (fname.length<2) {
        alert("The name must have at least two(2) characters >:(");
        return false;
    }
    if (email.length<2) {
        alert("The email must have at least two(2) characters >:(");
        return false;
    }
    if (address.length<3) {
        alert("The address must have at least three(3) characters >:(");
        return false;
    }
    if (phone.length<5) {
        alert("The phone number must have at least five(5) characters >:(");
        return false;
    }

}
function deliveryVal() {
    let fname = (document.form2.fname.value).trim();
    let address = (document.form2.address.value).trim();
    let phone = (document.form2.phone.value).trim();
    if (fname.length<2) {
        alert("The name must have at least two(2) characters >:(");
        return false;
    }
    if (address.length<3) {
        alert("The address must have at least three(3) characters >:(");
        return false;
    }
    if (phone.length<5) {
        alert("The phone number must have at least five(5) characters >:(");
        return false;
    }
}
function reservationVal() {
    alert("wweeeeeeeeeeeeeeeeeeeeeee");
    let fname = (document.form3.fname.value).trim();
    let email = (document.form3.email.value).trim();
    let address = (document.form3.address.value).trim();
    let phone = (document.form3.phone.value).trim();
    if (fname.length<2) {
        alert("The name must have at least two(2) characters >:(");
        return false;
    }
    if (email.length<2) {
        alert("The email must have at least two(2) characters >:(");
        return false;
    }
    if (address.length<3) {
        alert("The address must have at least three(3) characters >:(");
        return false;
    }
    if (phone.length<5) {
        alert("The phone number must have at least five(5) characters >:(");
        return false;
    }
}