<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="reg.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div id="container">
        <form action="home.php" method="post">
        <div id="box">
            <div id="head">Registration</div>
            <input type="text" placeholder="Enter your Name"><br>
            <input type="text" placeholder="Enter Email"><br>
            <input type="text" placeholder="Enter Username"><br>
            <input type="password" placeholder="Enter password"><br>
            <input type="number" placeholder="Enter your Phone number"><br>
            <input type="text" placeholder="Enter your District"><br>
            <div class="date">
                <h4>Date Of Birth</h4>
                <input type="date" placeholder="Enter your Dob"><br>

            </div>

            <div id="gender">
                <div class="section">
                    <div class="name">Male</div>
                    <input type="radio" name="Gender" id="others">

                </div>
                <div class="section">
                    <div class="name">Female</div>
                    <input type="radio" name="Gender" id="others">

                </div>
                <div class="section">
                    <div class="name">Other</div>
                    <input type="radio" name="Gender" id="others">

                </div>
            </div>
<h3>Address</h3>
            <textarea name="address" id="add"></textarea>
            
            <div>
                <a href="" id="button"><button>Register</button></a>
            </div>
        </div>

    </div>
</form>
    </div>
</body>

</html>