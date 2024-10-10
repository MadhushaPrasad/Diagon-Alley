<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.svg">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="login grid">
        <div class="section-left">
            <div class="section-left-1">
                <img src="../assets/img/logo.svg" alt="" class="section-left-1-logo">
                <h2 class="section-left-1-mainText"> Hello!</h2>
                <h4 class="section-left-1-subText">Please sign in to continue</h4>
            </div>
            <div class="section-left-2">
                <form action="">
                    <div class="email">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" placeholder="mail@example.com">
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <span>
                            <input type="password" name="password" id="password" placeholder="">
                            <img src="../assets/img/Hide.svg" alt="hide-icon" class="svg-icon">
                        </span>
                    </div>

                </form>
            </div>
            <div class="remember-section">
                <div class="checkbox-remember">
                    <input type="checkbox" name="termsCondition" id="termsCondition">
                    <label for="termsCondition">Remember Me</label>
                </div>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button class="create-account">Create Account</button>
            <div class="sign-up">
                <hr>
                <p>Or SIGN in with</p>
                <hr>
            </div>
            <div class="social-media">
                <button><img src="../assets/img/facebook-icon.png" alt="Facebook icon"> Sign in with Facebook</button>
                <button><img src="../assets/img/google-icon.png" alt="Google icon"> Sign in with Google</button>
            </div>
            <div class="already">
                <p>New user? <a href="#">Create an account</a></p>
            </div>
        </div>
        <div class="section__right">
            <img src="../assets/img/young couple sitting on the floor and reading books.svg" alt="young couple sitting on the floor and reading books" width="100%">
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