<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Logbook</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            /* background-color: #f0eeee;   */
        }
        html,
        body {
            height: 100%;
            margin: 0;
        }

        main{
            /* max-width: 12000px; */
            /* margin-top:0 auto; */
        }
        ul{
            list-style: none;
            float: right;
        }
        ul li{
            display: inline-block;
        }
        ul li a{
            text-decoration: none;
            color: white;
            padding:5px 20px;
            border:1px solid transparent;
            transition: 0.6s ease;
            text-transform: capitalize;
        }
        ul li a:hover{
            background-color: rgba(194, 186, 186, 0.685);
            color:#131212;
            border: 1px solid white;
        }

    </style>
</head>

<body>   
    
 <header class="header">
        <div style="font-size: 30px; color: white; height: 4vw; width: 9 vw; float: left; margin: 19px;">
            <a href="home.php" style="color: white;"> Supervisor Home</a>
        </div>
        <!-- <div style="float: right;">
            <a href="profile.php"><img src="images/profile-icon-2.png"
                    style="margin-top: 1vw; width: 3vw; height: 3vw; margin-right: 5px;">
                <p style="float: right; margin-right: 12px; margin-top: 1.8vw; color: white;">Adeleke Adekunle</p>
            </a>
        </div> -->
        <div class="main" style="padding-top:10px">
        <ul>
            <!-- <li><a  class="active" href="home.php">home</a></li> -->
            <!-- <li><a href="viewlogbook.php">Logbook</a></li>                     -->
            <!-- <li><a href="profile.php">Profile</a></li> -->
            <!-- <li><a href="signout.php">Sign out</a></li> -->
        </ul>
    </div>
    </header>
    
    <div class="home-wrap">
        <h2> Welcome</h2>
        <p style="font-style: oblique;">What would you like to do?</p>
        <div class="home-box">
            <!-- <a href="profile.php"> <button>View Profile</button></a> -->
            <a href="intern.php"><button>View Intern</button></a>
            <a href="report.php" style="margin-left"><button>Report Issue</button></a>
            <!-- <a href="help.php" style=""><button>Help</button></a> -->
        </div>
        <a href="signout.php"><button class="logout">Logout</button></a>
    </div>
</body>

</html>