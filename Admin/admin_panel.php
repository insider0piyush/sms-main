<!DOCTYPE html>
<html>
    <head> <title>Admin Panel </title></head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Comic Sans MS";
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            text-align: center;
            font-family: arial;
            }
            button {
            font-family: "Comic Sans MS";
            border: none;
            outline: 0;
            border-radius: 12px;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            }

            a {
            text-decoration: none;
            font-size: 22px;
            color: black;
            }

            button:hover, a:hover {
            opacity: 0.7;
            }
        .box_left{
            color: white;
            background-color: #F96167;
            height: 471.1px;
            width: 380px;
            margin-left: 25px;
            border: 4px solid #F96167;
            border-radius: 25px;
        }
        .box_right{
            color: white;
            margin-left: 10px;
            background-color: orange;
            height: 144px;
            width: 450px;
            border: 4px solid orange;
            border-radius: 25px;
        }
        #grad_back {
            background: linear-gradient(to right ,  #EEA47F , white , #00539C);
        }
        .navbar {  
            width: 67.7%;
            margin: auto;
            background-color: #E9967A;
            overflow: auto;
        }

        .navbar a {
        float: left;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        }

        .navbar a:hover {
        background-color: #FF5733;
        }

        .active {
        background-color: #FF5733;
        }

        @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }
        }
    </style>

    <body id="grad_back">

        <div class="navbar" style="border-radius:25px ; border-color:#FF5733 ; border-style:solid ; border-width:2px">

            <a style="background-color:#E9967A">
                <h7 style="margin-left: 20px;">Student Management System</h7>
            </a>

            <a style="margin-left: 57.5px" class="active" href="admin_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Admin Panel 
            </a> 

            <a href="notice_panel.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notice
            </a>

            <a href="faculty_panel.php">
                <i class="fa fa-fw fa-graduation-cap"></i> 
                Faculty
            </a> 

            <a href="student_panel.php">
                <i class="fa fa-fw fa-user"></i> 
                Student  
            </a>

            <a href="admin_logout.php">
                <i class="fa fa-fw fa-power-off"></i> 
                Logout  
            </a>

        </div>

        <div style="margin-top:10px ; margin-left:10px ">
            <table>
                <td>
                    <div class="box_left">
                        <div class="card">
                            <img src="images_admin/admin.png" width=150px/>
                            <div style="text-align:center ; font-family:Comic Sans MS">
                                <?php
                                    include "Admin_init.php";
                                    $sql = "SELECT * FROM $ADMIN";
                                    $queryExe = mysqli_query($con,$sql);
                                    $dbquery = mysqli_query($con,$sql);
                                    $data = mysqli_num_rows($dbquery);
                                    if($dbquery){
                                        while($rows = mysqli_fetch_array($queryExe)){
                                            echo "Welcome , $rows[$ADMIN_NAME]"."</br>";
                                            echo "You Are Current Admin Now!"."</br>";
                                        }
                                    }
                                ?>
                            </div>
                            <p style="font-family:Comic Sans MS">Sutex Bank College Of Computer Applications & Science</p>
                            <div>
                                <a href="https://www.instagram.com/rajatt.dev/" style="margin-right:10px"><i class="fa fa-instagram"></i></a> 
                                <a href="https://wa.me/9327998218?text=Hi" style="margin-right:10px"><i class="fa fa-whatsapp"></i></a> 
                                <a href="https://www.linkedin.com/in/rajat-kevat-97340a252/" style="margin-right:10px"><i class="fa fa-linkedin"></i></a>  
                                <a href="https://www.facebook.com/rajat.kevat.7" style="margin-right:10px"><i class="fa fa-facebook"></i></a> 
                            </div>
                            <p>
                                <button style="margin-bottom:4px"><a href=""></a>About US</button>
                                <button style=margin-bottom:4px><a href=""></a>Contact US</button>
                            </p>
                        </div>
                    </div>
                </td>
                
                <td>

                </td>
                
                <td>

                </td>
            </table>
        </div>
        
    </body>
</html> 
