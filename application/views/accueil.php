<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx">
                    <img src="image/img1.jpg">
                </div>
                <div class="formBx">
                    <form action="<?= base_url('welcome/checkUtilisateur') ?>"  method="post">
                        <h2>Sign In</h2>
                        <input type="text" placeholder="Username" name="nom" value="tokyy">
                        <input type="password" placeholder="Password" name="mdp" value="toky">
                        <input type="submit" value="Login">
                        <p class="signup">don't have an account?<a href="#" onclick="toggleForm();">Sign up.</a></p>
                    </form>
                </div>
            </div>

            <div class="user signupBx">
                <div class="formBx">
                    <form>
                        <h2>Create an account</h2>
                        <input type="text" placeholder="Username">
                        <input type="text" placeholder="Email Address">
                        <input type="password" placeholder="Create Password">
                        <input type="password" placeholder="Confirm Password">
                        <input type="submit" Value="Sign Up">
                        <p class="signup">Already have an account?<a href="#" onclick="toggleForm();">Sign in.</a></p>
                    </form>
                </div>
                <div class="imgBx"><img src="image/img2.jpg"></div>
            </div>
        </div>
    </section>
    <script>
        function toggleForm(){
            section = document.querySelector('section');
            container = document.querySelector('.container');
            container.classList.toggle('active');
            section.classList.toggle('active');
        }
    </script>
</body>
</html>