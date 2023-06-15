<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="half login_part">
            <div class="logo">
                <a href="index.html">
                <img src="img/logo/MeCubeIcon.png" alt=""><h2>MeCube</h2>
                </a>
            </div>
            <div class="loginform">
                <div class="loginFrame">
                    <div class="social">
                        <h1>Welcome Member</h1>
                        <p>Welcome Member! Please enter your details</p>
                        <div class="social_link">
                            <a href="">
                                <button><img src="img/icons8_google_48px_1.png" alt=""> Log in with Google</button>
                            </a>
                        </div>
                    </div>
                    <div class="spacer">
                        <p>or</p>
                    </div>
                    <div class="user_login">
                        <!-- Login Form -->
                        <form action="login-error.php" method="get">
                            <section>
                                <input type="text" name="username" id="username" placeholder="Email" required>
                            </section>
                            <section>
                                <input type="password" name="password" id="password" placeholder="Password " required>
                            </section>
                            <section>
                                <a href="">Forgot password</a>
                            </section>
                            <section>
                                <button class="login-btn">Log In</button>
                            </section>
                            <section>
                                <p>Don't have an account? <a href="">Sign up for free</a></p>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="half backdrop">
            <div class="liner3">
                <img src="img/logo/MeCube1.png" alt="">
            </div>
        </div>
    </main>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script> <div class="commonninja_component pid-aad9c77a-0b1f-4910-acd4-899b0ca7992e"></div>
</body>
</html>
