$(document).ready(function() {
$("#register").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#mobile").val();
var address = $("#address").val();
var password = $("#password").val();
var cpassword = $("#cpassword").val();

if (name == '' || mobile == '' || email == ''  || password == '' || address == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 6) {
alert("Password should atleast 6 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
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