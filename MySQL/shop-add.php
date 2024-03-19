<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>

<body>
    <div class="main">
        <div class="register">
            <form action="shop-save.php" method="post" id="register" class="shop_register">
                <h2>Step 1: Your Details</h2>
                <div class="border">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="First and Last Name" size="28" required>
                </div>
                <div class="border">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="exp@domain.com" size="28" required>
                </div>
                <div class="border">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" placeholder="Eg.+447500000" size="28" required>
                </div><h2>Step 2: Delivery Address</h2>
                <div class="fix">
                    <p class="add">Address</p>
                    <textarea name="address" id="address" cols="29" rows="5" required></textarea>
                </div>
                <div class="fix">
                    <label for="pin">Post Code</label>
                    <input type="text" name="post_code" size="28" required>
                </div>        
                <div class="fix">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="con" size="28" required>
                </div>        
                <h2>Step 3: Card Details</h2>
                <div class="icon">
                    <label for="card_type">Card Type</label><br>
                    <input type="radio" name="card_type" value="VISA"><span>&nbsp;<i class="fa-brands fa-cc-visa"></i>&nbsp;VISA</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="card_type" value="AmEx"><span>&nbsp;<i class="fa-brands fa-cc-amex"></i>&nbsp;AmEx</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="card_type" value="Mastercard" required><span>&nbsp;<i class="fa-brands fa-cc-mastercard"></i>&nbsp;Mastercard</span>
                </div>
                <div class="card">
                    <label for="cnumber">Card  Number</label>
                    <input type="text" name="card_number" size="28" required>
                </div>
                <div class="secu">
                    <label for="scode">Security code</label>
                    <input type="number" name="security_code" minlength="6" required>
                </div>
                <div class="card">
                    <label for="cname">Name On Card</label>
                    <input type="text" name="name_on_card" id="fit" placeholder="Exact Name As On Card" size="28" required>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" id="submit" value="BUY IT!">
                </div> 
            </form>
        </div>
    </div>
</body>
<script>
$(document).ready(function(){

    //$('#name').click(function(){
    // hover, keypress, keyUp, keyDown, blur, change
    // $('input, textarea').keypress(function(){
    //     fieldName = $(this).attr('name');
    //     //$(this).val(fieldName);
    //     console.log("Clicked on "+fieldName+"....");
    // });


    $('.shop_register').validate();

});
</script>
</html>