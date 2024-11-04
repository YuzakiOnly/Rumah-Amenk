<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Rumah Amenk</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <!-- <div class="social-icons">
                    <a class="xl" href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a class="xl1" href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div> -->
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>     
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <!-- <div class="social-icons">
                    <a class="xl" href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a class="xl1" href="#" class="icon1"><i class="fa-brands fa-facebook-f"></i></a>
                </div> -->
                <span>or use your email password</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <div class="skip">
                    <a href="#">Forget Your Password?</a>
                <a href="index.php">Skip Account?</a>
                </div>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./JS/main.js"></script>
</body>

</html>