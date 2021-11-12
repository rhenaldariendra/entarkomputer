<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/CSS/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <section>
        <div class="containers">
            <div class="user signinBox">
                <div class="imgBox">
                    <img src="/Asset/Image/login.svg" alt="">
                </div>
                <div class="formBox">
                    <form id="login" action="login" method="POST">
                        @csrf
                        <h2>Sign In</h2>
                        <input type="text" name="email" placeholder="Email">
                        <input type="Password" name="password" placeholder="Password">
                        <input type="submit" name="" value="Login">
                        <p class="signup">Don't have an account ? <a href="#" onclick="toogleForm();">Sign Up</a></a></p>
                        <a href="/" class="gotohome"><p>Go to Home</p></a>
                    </form>
                </div>
            </div>
            <div class="user signupBox">
                <div class="formBox">
                    <form id="regis">
                        <h2>Create an account</h2>
                        <input type="text" name="fname" id="fname" placeholder="Fullname">
                        <input type="text" name="uname" id="uname" placeholder="Username">
                        <input type="text" placeholder="Phone" id="phone">
                        <input type="email" name="email" id="email" placeholder="Email Address">
                        <div class="testing">
                            <p class="gends">Gender</p>
                            <input type="radio" id="male" name="genders" value="male" />
                            <label for="male">Male</label>

                            <input type="radio" id="two" name="genders" value="female" />
                            <label for="female">Female</label>
                        </div>
                        <input type="number" name="age" id="age" placeholder="Age">
                        <input type="Password" name="pass" id="pass" placeholder="Create Password">
                        <input type="Password" name="confpass" id="confpass" placeholder="Confirm Password">
                        <input type="submit" name="" value="Sign Up">
                        <p class="signup">Already have an account ? <a href="#" onclick="toogleForm();">Sign In</a></a></p>
                        <a href="/" class="gotohome"><p>Go to Home</p></a>
                    </form>
                </div>
                <div class="imgBox">
                    <img src="/Asset/Image/register.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function toogleForm(){
            var containers = document.querySelector('.containers');
            containers.classList.toggle('active');
            $("#login")[0].reset();
            $("#regis")[0].reset()
        }
    </script>
</body>
</html>
