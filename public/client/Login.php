<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextStyle</title>
    <link rel="stylesheet" href="../css/client/log_reg.css" type="text/css">
</head>

<body>
    <div class="leftside">
        <div style="height: 50px; padding: 15px;">
            <label style="font-size: 30px; font-weight: 600; text-decoration: underline;">NextStyle</label>
        </div>
        <div>
            <form action="../../php/client/login.php" method="post" name="loginForm" autocomplete="off">
                <div class="regform">
                    <label style="font-size: 18; font-weight: 300; padding: 15px 0 15px 0;">Welcome Back !!!</label>
                    <label style="font-size: 30px; font-weight: 600;">Login</label>
                    <div style="padding: 15px; width: 80%;">
                        <div class="form__group field">
                            <input type="email" class="form__field" placeholder="Email" name="Emial" id='Email'
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                            <label for="name" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" class="form__field" placeholder="Password" name="Password"
                                id='Password' required />
                            <label for="Password" class="form__label">Password</label>
                        </div>

                        <div style="display: flex; flex-direction: column; padding-top: 30px;">
                            <button class="button-59" type="submit">Login</button>
                            <p style="margin-top: 20px; font-size: 16px;">Don't have an account? <a
                                    href="../client/register.php">Register here</a></p>
                        </div>
                    </div>
                </div>


            </form>

        </div>


    </div>
    <div class="rightside">
        <img src="../img/img.png" alt="Registration Image" class="registration-image">
    </div>

</body>
<script src="../js/client/login.js"></script>

</html>