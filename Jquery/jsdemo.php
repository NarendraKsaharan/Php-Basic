<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

<form action="" id="formid">
    <input type="text" name="email" id="email" class="textbox"><span class="email-msg"></span>
    <input type="submit" class="submit">
</form>

<input type="button" value="Show" class="show">
<input type="button" value="Hide" class="hide">

<input type="button" value="Show/Hide" class="show-hide">
<div class="span-cls" style="padding:10px;background:red;width:100px;display:none;"></div>

<script>

$(document).ready(function(){

    $('.show-hide').click(function(){
        $('.span-cls').toggle(1000);
    });

    $('.show').click(function(){
        $('.span-cls').fadeIn(1000);
    });
    $('.hide').click(function(){
        $('.span-cls').fadeOut(2000);
    });


    $('#formid').submit(function(e){
        var email = $('#email').val();
        if(email == "") {
            $('.email-msg').html("Email is required...");
            e.preventDefault();
        } else {
            $('.email-msg').html("");
        }
        
    });

    $('.textbox').click(function(){
        //$(this).css("border", "2px solid green");
        $(this).addClass("active");
        //console.log("clicked....");
        // alert("Clicked...");
    });
    $('.textbox').blur(function(){
        $(this).removeClass("active");
        //$(this).css("border", "none");
    });

    // $('#textbox').mouseleave(function(){
    //     //console.log("clicked....");
    //     alert("textbox leaveee...");
    // });

    // $('.spancls').mouseleave(function(){
    //     //console.log("clicked....");
    //     alert("spancls leaveee...");
    // });

});

</script>

</body>
</html>