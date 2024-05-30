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
            <form action="../../php/admin/adminreg.php" method="post" name="registerForm" autocomplete="off">
                <div class="regform">
                    <label style="font-size: 18px; font-weight: 300; padding: 15px 0 15px 0;">Welcome Back !!!</label>
                    <label style="font-size: 30px; font-weight: 600;">Admin Register</label>
                    <div style="padding: 15px; width: 80%;">
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Name" name="name" id='name' required />
                            <label for="name" class="form__label">Name</label>
                        </div>
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Address" name="Address" id='Address'
                                required />
                            <label for="name" class="form__label">Address</label>
                        </div>
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Phone No" name="Phone" id='PhoneNO'
                                required />
                            <label for="name" class="form__label">Phone No</label>
                        </div>
                        <div class="form__group field">
                            <input type="email" class="form__field" placeholder="Email" name="Email" id='Email'
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                            <label for="name" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" class="form__field" placeholder="Password" name="Password"
                                id='Password' required />
                            <label for="Password" class="form__label">Password</label>
                        </div>
                        <div style="display: flex; flex-direction: column; padding-top: 30px;">
                            <button class="button-59" type="submit">Register</button>
                            <p style="margin-top: 20px; font-size: 16px;">Already have an account? <a
                                href="../admin/adminlog.php">Log in here</a></p>
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
<script src="../js/client/register.js"></script>

</html>