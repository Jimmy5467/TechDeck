<html>
    <head>
        <link rel="stylesheet" href="sign_css.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.cs">
    </head>
    <body>
        <h2>SIGN UP / SIGN IN</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="registration.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" name="user" placeholder="Name" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="validation.php" method="post">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control"/>
                    </div >
                    <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control"  />
                    </div>
                    <a href="#">Forgot your password?</a>
                    <button type="submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>Lot more exciting stuff waiting for you</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>New to CODE-DECK,lets begin</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
      
        
        <footer>
            <p>
                &copy copyrights 2020 CODE-DECKS. All rights reserved.
            </p>
        </footer>  
        <script type="text/javascript" src="sign_js.js"></script>
    </body>
</html>

