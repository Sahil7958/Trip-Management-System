<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Otp.css">
</head>
<body>
    <div class="wrapper">

        <div class="form-box login">
                <h2>Login</h2> 
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon
                             name="mail-outline"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
               
                    <button type="submit" class="btn" onclick="send_otp()">send OTP</button>
                   
                </form>
        
            </div>
          
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
function send_otp()
{
    var email=jQuery('#email').val();
}

        </script> 
</body>
</html>