<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>

        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"> Full Name </span>
                    <input type="text" value="Enter Your Name" required>
                </div>
                <div class="input-box">
                    <span class="details"> Department </span>
                    <input type="text" value="Enter Department" required>
                </div>
                <div class="input-box">
                    <span class="details">Email </span>
                    <input type="email" value="Enter Email" required>
                </div>
                <div class="input-box">
                    <span class="details"> Phone Number </span>
                    <input type="text" value="Enter Phone Number" required>
                </div>
                <div class="input-box">
                    <span class="details"> Password </span>
                    <input type="password" value="Create Password" required>
                </div>
                <div class="input-box">
                    <span class="details"> Confirm Password </span>
                    <input type="password" value="Confirm Password" required>
                </div>
                <div class="input-box">
                    <span class="details"> Course </span>
                    <input type="text" value="Enter your course" required>
                </div>

                <div class="input-box">
                    <span class="details"> School ID No</span>
                    <input type="details" value="Your School ID no " required>
                </div>
            </div>
            <div class="gender-details">

                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">

                <span class="gender-title"> Gender </span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>

                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>

                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register a Student">
            </div>
    </div>
    </form>
    </div>
</body>

</html>