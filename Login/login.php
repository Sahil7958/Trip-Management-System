<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <a class="logo">MAKE YOUR TRIP</a>
        <nav class="navigation">
           
              <div class="nav-links">
                <ul>
               <li><a href="#" target="html.html">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a herf="#">Services</a></li>
               <li><a herf="#">Conatact</a></li>
               <button class="btnlogin-popup">Login</button>
                </ul>
            </div>
            <span class="toggle_btn">
                <ion-icon name="menu-outline"></ion-icon>
            </span>
        </nav>
    </header>

<div class="wrapper">
<span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
    
<div class="form-box login">
        <h2>Login</h2> 
        <form action="#">
            <div class="input-box">
                <span class="icon"><ion-icon
                     name="mail-outline"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon 
                    name="lock-closed-outline"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">
                Remember me</label>
                <a href="OTP-verifiction.php"><h4>forgot Password?</h4></a>
            </div>
            <button type="submit" class="btn">login</button herf="index.html">
            <div class="login-register">
                <p>Don't have and account?
                    <a href="#" class="register-link">Register</a>
                </p>
            </div>
        </form>

    </div>
    <div class="form-box register">
        <h2>Registration </h2> 
        <form action="#">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon
                     name="mail-outline"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon 
                    name="lock-closed-outline"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms & conditions
                </label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="login-register">
                <p>Already have and account?
                    <a href="index.html" class="login-link">Login Here.</a>
                </p>
            </div>
        </form>

    </div>
</div> 
<div class="Dropdown_menu">
    <li><a href="#" >About</a></li>
    <li><a herf="#">Services</a></li>
    <li><a herf="#">Conatact</a></li>
    <button class="Bbtnlogin-popup">Login</button>

</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 <script>
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const btnPopup = document.querySelector('.btnlogin-popup');   
    const iconClose = document.querySelector('.icon-close'); 
    const DropdownMenu = document.querySelector('.Dropdown_menu') ;
    const toggleBtn = document.querySelector('.toggle_btn');
    const toggelBtnIcon = document.querySelector('.toggle_btn ') 
    const BtnPopup = document.querySelector('.Bbtnlogin-popup');   




    BtnPopup.addEventListener('click', ()=>{wrapper.classList.add('active-popup');});
    
    registerLink.addEventListener('click', ()=>{wrapper.classList.add('active');});

    loginLink.addEventListener('click', ()=>{ wrapper.classList.remove('active');});

    btnPopup.addEventListener('click', ()=>{ wrapper.classList.add('active-popup');});

    iconClose.addEventListener('click', ()=>{ wrapper.classList.remove('active-popup');});
      
    toggleBtn.onclick = function(){
    DropdownMenu.classList.toggle('open')
    }
 </script>
 </body>
</html>