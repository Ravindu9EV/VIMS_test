<!DOCTYPE HTML>
<html>

    <head>

        <title>Full Option Account Setup</title>

        <link rel="stylesheet" href="fulloptionaccountsetup.css">

    </head>

    <body>

        <div class="wrapper">

            <form action="fcustomerAddPrc.php" method="POST" enctype="multipart/ form-data">

                <h1>Setup Your Full Option Account</h1>

                <div class="input-box">
                    <label for="setusername">Set Username</label>
                    <input type="text" id="Set Username" minlength="8" maxlength="24" required>
                </div>
                <div class="input-box">
                    <label for="setemail">Set Email</label>
                    <input type="text" id="Set email" name="email" minlength="8" maxlength="24" required>
                </div>
                <div class="input-box">
                    <label for="setpassword">Set Password</label>
                    <input type="password" id="Set Password" minlength="8" maxlength="16" required>
                </div>
                <div class="input-box">
                    <label for="repeatpassword">Repeat Password</label>
                    <input type="password" id="Repeat Password" minlength="8" maxlength="16" required>
                </div>

                <button type="submit" class="button">Register</button>

            </form>

        </div>

        <button type="button" class="back-button">Back</button>

    </body>

</html>