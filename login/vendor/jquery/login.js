$(document).ready(function(){
    $("#login").click(function(){
        // when the click function is triggered
        var mobile = $("#mobile").val();
        var password = $("#password").val();
        console.log(mobile);
        console.log(password);

// Checking for blank fields.
    if( mobile =='' || password ==''){ // if there is no entry
        $('input[type="text"],input[type="password"]').css("border","2px solid red");
        $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
        alert("Please fill all fields...!!!!!!");
    }
         else {
//     // post with ajax
     $.post("login.php",{ mobile1: mobile, password1:password},
//     // this data is coming from the back end 
 function(data) {
     if(data=='Invalid mobile.......') {
//         // if the mobile is invalid then do that
         $('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
         $('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
         alert(data);
 }else if(data=='mobile or Password is wrong...!!!!'){
//     // if both are wrong
     $('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
     alert(data);
 } else if(data=='Successfully Logged in...'){
//     // if successfully logged in
     $("form")[0].reset();
     $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
     alert(data);
 } else{
//     // if any other things happen
     alert(data);
     }
 });
 }
});
});