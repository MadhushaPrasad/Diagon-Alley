<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <title>SignUp Page</title>
</head>
<body>
    <div class="container">
        <div class="component-1">
            <img id="logo" src="../assets/img/logo.svg" alt="logo" width="182px" height="40px" >
           
            <h2>Get Started!</h2>
            <h4>Please sign up to continue</h4>

            <div class="form">
                <label for="">Email</label>
                <input type="email" name="" id="" placeholder="mail@example.com">

                <label for="">User Name</label>
                <input type="text" name="" id="" placeholder="madhush99">

                <label for="">Password</label>
                <input type="password" name="" id="" placeholder="********">

                <label for="">Confirm Password</label>
                <input type="password" name="" id="" placeholder="********">
            </div>

            <div class="position">
                <input type="radio" name="position" id="">
                <label for="Student">Student</label>
                <input type="radio" name="position" id="">
                <label for="Student">Admin</label>
            </div>
            
            <div class="terms-condition">
                <input type="checkbox" name="" id="">
                <p>I accept <a href="#">Terms and Conditions</a></p>
            </div>

            <button type="submit">Create Account</button>
            <div class="sign-up">   
            <hr>
            <p>Or SIGN up with</p>
                <hr>
            </div>

            <div class="social-media">
                <a href="#"> <img src="../assets/img/google-icon.png" alt="">Sign up with Google</a>
                <a href="#"><img src="../assets/img/facebook-icon.png" alt=""> Sign up with Facebook</a>
            </div>

            <div class="already">
                 <p>Already user? <a href="#">Login</a></p>
            </div>
        </div>
            
        <div class="component-2">
        <div class="position-fixed">
            <img src="../assets/img/young couple sitting on the floor and reading books.svg" alt="couple image" width="550px">
            <div class="text-content">
                <h4>Books are a uniquely portable magic.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae cras at</p>
            </div>
            </div>
        </div> 
    </div>
</body>
</html>