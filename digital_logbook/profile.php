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
            background-color: #f0eeee;  
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
        <div style="background-color: white; height: 4vw; width: 4vw; border-radius: 100%; float: left; margin: 5px;">
            <a href="home.php"> <img src="images/SIWES-logo.png"
                    style="width: 4.5vw; margin-top: 5px; margin-left: -2px;"></a>
        </div>
        <!-- <div style="float: right;">
            <a href="profile.php"><img src="images/profile-icon-2.png"
                    style="margin-top: 1vw; width: 3vw; height: 3vw; margin-right: 5px;">
                <p style="float: right; margin-right: 12px; margin-top: 1.8vw; color: white;">Adeleke Adekunle</p>
            </a>
        </div> -->
        <div class="main" style="padding-top:10px">
        <ul>
            <li><a  class="active" href="home.php">home</a></li>
            <li><a href="viewlogbook.php">Logbook</a></li>                    
            <li><a href="profile.php">Profile</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </div>
    </header>
    <div class="home-wrap" style="margin-top: 5px;">
        <button onclick="history.back()" style="background-color: rgb(255, 0, 0);  cursor: pointer; float: left; border-radius: 10px; padding: 3px; margin-right:-4vw; width: 4vw;">Back</button>
        <h2>Profile</h2>
        <div class="table-box">
            <div class="profile">
                <img src="images/profile-icon-2.png"><br>
                <button>Update Photo</button><br>
               <a href="org-profile.php"> <button>Organization Profile</button></a>
            </div>
            <table>
                <tr>
                    <td style="border-top: none;">&nbsp;</td>
                    <td style="border-top: none;">&nbsp;</td>
                </tr>
                <tr>
                    <td>Name of Student</td>
                    <td>Adeleke Adekunle</td>
                </tr>
                <tr>
                    <td>Matriculation #</td>
                    <td>BHU/18/04/05/0024
                </tr>
                </tr>
                <tr>
                    <td>Faculty/Department</td>
                    <td>Science and Technology</td>
                </tr>
                <tr>
                    <td>Course of Study</td>
                    <td>Computer Science</td>
                </tr>
                <tr>
                    <td>Year of Study</td>
                    <td>Fourth Year</td>
                </tr>
                <tr>
                    <td>Permarnent Home Address</td>
                    <td>Lorem 123, Ipsum street, Abuja.</td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>Male</td>
                </tr>
                <tr>
                    <td>Name and Address of Next of Kin</td>
                    <td>Lorem ipsum dolor echit lorem</td>
                </tr>
                <tr>
                    <td>Name of Industry-Based Supervisor</td>
                    <td>Mr. Chinedu Oladele</td>
                </tr>
                <tr>
                    <td>Name of University-Based Co-ordinator &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                    <td>Mr. Adelaiye Ishaya</td>
                </tr>
                <tr>
                    <td style="border-bottom: none; margin-bottom: 10px;">&nbsp;</td>
                    <td style="border-bottom: none; margin-bottom: 10px;">&nbsp;</td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>