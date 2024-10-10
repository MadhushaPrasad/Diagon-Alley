<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.svg">
    <title>Signup New</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="signUp grid">
        <div class="section-left">
            <div class="section-left-1">
                <img src="../assets/img/logo.svg" alt="" class="section-left-1-logo">
                <h2 class="section-left-1-mainText"> Get Started!</h2>
                <h4 class="section-left-1-subText">Please sign up to continue</h4>
            </div>
            <div class="section-left-2">
                <form action="">
                    <div class="email">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" placeholder="mail@example.com">
                    </div>
                    <div class="userName">
                        <label for="userName">User Name</label>
                        <input type="text" placeholder="madhush99">
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <span>
                        <input type="password" name="password" id="password" placeholder="">
                        <img src="../assets/img/Hide.svg" alt="hide-icon">
                    </span>
                    </div>
                    <div class="confirmPassword">
                        <label for="">Confirm Password</label>
                        <span>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="">
                        <img src="../assets/img/Hide.svg" alt="hide-icon">
                    </span>
                    </div>
                </form>
            </div>
            <div class="section-left-3">
                <div class="student">
                    <input type="radio" name="selection" id="student">
                    <label for="student">Student</label>
                </div>
                <div class="admin">
                    <input type="radio" name="selection" id="admin">
                    <label for="admin">Admin</label>
                </div> 
            </div>
            <div class="section-left-4">
                <input type="checkbox" name="termsCondition" id="termsCondition">
                <label for="">I accept <span>Terms and Conditions</span></label>
            </div>
            <button class="create-account">Create Account</button>
            <div class="sign-up">   
                <hr>
                <p>Or SIGN up with</p>
                    <hr>
                </div>
                <div class="social-media">
                    <button><img src="../assets/img/facebook-icon.png" alt="Facebook icon"> Sign up with Facebook</button>
                    <button><img src="../assets/img/google-icon.png" alt="Google icon"> Sign up with Google</button>
                </div>
                <div class="already">
                    <p>Already user? <a href="#">Login</a></p>
               </div>
        </div>
        <div class="section__right">
        <img src="../assets/img/SignUp.png" alt="young couple sitting on the floor and reading books" width="100%">
            <div class="text-content">
                <h4>Books are a uniquely portable magic.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae cras at</p>
            </div>
            <div class="hoverSection"> 
                <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                <div class="middleCircles">
                    <div class="round-one"></div>
                    <div class="round-two"></div>
                    <div class="round-three"></div>
                </div>
                <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</body>
</html>