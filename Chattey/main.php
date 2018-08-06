<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Chat Website</title>
    <link rel="stylesheet" href="chatStyle.css">
    <link rel="icon" type="image/png" href="https://s3.amazonaws.com/ionic-marketplace/video-and-text-chat-app-backend/icon.png">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="bground"></div>
    <div class="container">
       <img src="https://s3.amazonaws.com/ionic-marketplace/video-and-text-chat-app-backend/icon.png">
        <ul>
            <li>HOME</li>
            <li>NEWS FEED</li>
            <li>LOGIN</li>
            <li>SIGN-IN</li>
        </ul>
    </div>
    <br><br><br><br><hr>
    <div id="wrapper">
        <div class="chatwrapper">
            <div class="chat"></div>
            <form method="post">
                <textarea name="message" class="txt" cols="30" rows="5"></textarea>
            </form>
        </div>
    </div>
    <div class="footer">
        <section class="counter"></section>
        <section class="contact"></section>
        <section class="follow"></section>
    </div>
    
    <script>
        $('.txt').keyup(function(e){
            if(e.which==13){
                $('.form').submit();
            }
        });
        $('form').submit(function(){
            alert('Sending Message!!!');
            var message =$('.txt').val();
            $.post('message.php?action=sendMessage&message='+message,function(response){
                
            });
            return false;
        });
    </script>
    <footer id="foter">
        <p>Project made with ❤️ in VIT</p>
    </footer>
    
</body>
</html>