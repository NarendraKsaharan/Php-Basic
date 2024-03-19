<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<!-- <h2 class="heading">Heading Section</h2>
<div class="acc-section">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div> -->

<!-- 
<span>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</span>

<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p> -->

<style>
    .acc-section {
        display:none;
    }

    .divsec {
        background: green;
    }
</style>
<script>
$(document).ready(function(){

    $('.heading').hover(function(){
        $(this).toggleClass('divsec');
        $(this).next().toggle(500);
    });

    // $('div').mouseenter(function(){
    //     $(this).css('background', 'red');
    // });

    // $('span').mouseenter(function(){
    //     $(this).css('background', 'green');
    // });

    // $('p').mouseenter(function(){
    //     $(this).css('background', 'yellow');
    // });
    $('div, span, p').mouseenter(function(){
        $(this).addClass('divsec');
    });

    $('div, span, p').mouseleave(function(){
        $(this).removeClass('divsec');
        //$(this).css('background', 'white');
    });


    
    


});
</script>


</body>
</html>