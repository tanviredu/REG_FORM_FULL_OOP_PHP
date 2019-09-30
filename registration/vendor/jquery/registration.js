$(document).ready(function() {
$("#register").click(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var address = $("#address").val();
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    // this is for testing
    //console.log(name);
    //console.log(email);
    //console.log(mobile);
    //console.log(address);
    //console.log(password);
    //console.log(cpassword);
    // its working


if (name == '' || mobile == '' || email == ''  || password == '' || address == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 6) {
alert("Password should atleast 6 character in length...!!!!!!");
} else if (!(cpassword).match(password)) {
alert("Your passwords don't match. Try again?");
} else {
    //post it with jquery
$.post("register.php", {
name1: name,
email1: email,
mobile1: mobile,
address1: address,
password1: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});