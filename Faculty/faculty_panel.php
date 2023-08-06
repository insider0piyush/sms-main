<!DOCTYPE html>
<html>
    <head> <title>Faculty Panel</title> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body {font-family: "Comic Sans MS"}

        img{
            margin-top: 25px;
            border-radius: 50%;
        }
        .button {
            font-family: "Comic Sans MS";
            border: 2px solid black;
            border-radius: 12px;
            background-color: white;
            color: black;
            padding: 7px 14px;
            font-size: 16px;
            cursor: pointer;
        }
        .des {
            border-color: orange;
            color: orange;
        }.des:hover {
             background-color: black;
             color: white;
        }
        .card {
            color:black;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px 0 black;
            max-width: 300px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            text-align: center;
            font-family: arial;
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
            margin-left: 30px;
            border: 4px solid #F96167;
            border-radius: 25px;
        }
        .box_right{
            color: white;
            margin-left: 10px;
            padding-left: 8px;
            padding-right: 8px;
            background-color: orange;
            height: 471.1px;
            width: 850px;
            border: 4px solid orange;
            border-radius: 25px 0px 0px 25px;
        }

        #grad_back {
            background: linear-gradient(to right ,  #F9E795 , white , #F96167);
        }

        .navbar {  
            width: 59.625%;
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

            <a class="active" style="margin-left: 6px" 
                href="faculty_panel.php">
                <i class="fa fa-fw fa-home"></i> 
                Faculty Panel 
            </a> 

            <a href="faculty_assignments.php">
                <i class="fa fa-fw fa-book"></i> 
                Assignments
            </a> 

            <a href="faculty_notice.php">
                <i class="fa fa-fw fa-bell"></i> 
                Notices  
            </a>

            <a href="faculty_logout.php">
                <i class="fa fa-fw fa-power-off"></i> 
                Logout  
            </a>

        </div>

        <div style="margin-top:10px ; margin-left:10px ">
            <table>
                <td>
                    <div class="box_left">
                        <div class="card">
                            <img src="images_faculty/piyush.jpg" width=150px/>
                            <div style="text-align:center ; font-family:Comic Sans MS ">
                                <p>Piyush Makwana</p>
                            </div>
                            <p style="font-family:Comic Sans MS">Sutex Bank College Of Computer Applications & Science</p>
                            <div>
                                <a href="https://www.instagram.com/rajatt.dev/" style="color:#F96167 ; margin-right:10px"><i class="fa fa-instagram"></i></a> 
                                <a href="https://wa.me/9327998218?text=Hi" style="color:#F96167 ; margin-right:10px"><i class="fa fa-whatsapp"></i></a> 
                                <a href="https://www.linkedin.com/in/rajat-kevat-97340a252/" style="color:#F96167 ; margin-right:10px"><i class="fa fa-linkedin"></i></a>  
                                <a href="https://www.facebook.com/rajat.kevat.7" style="color:#F96167 ; margin-right:10px"><i class="fa fa-facebook"></i></a> 
                                <p style="font-family:Comic Sans MS"> You Can Delete </br> Student From Here ~</p>
                                </br>
                            </div>
                        </div>
                    </div>
                </td>
                
                <td>
                    <div class="box_right" style="overflow-y:scroll ; overflow-x:hidden ">
                    <h2 style="text-align:center">Student Data ~</h2> 
                        <table border="6px" cellspacing="0px" cellpadding="12px" style="margin-top:10px; margin-left: auto; margin-right: auto; margin-bottom:10px; background-color: transparent;border-radius: 6px; border-color: #81490F;">
                            <tr>
                                <th style="font-family: Comic Sans MS;
                                font-size: 16px; font-weight: bold;" >
                                    NAME
                                </th>
                                <th colspan="0px" style="font-family: Comic Sans MS;
                                font-size: 16px; font-weight: bold;">
                                    MOBILE NO
                                </th>
                                <th style="font-family: Comic Sans MS;
                                font-size: 16px; font-weight: bold;">
                                EMAIL
                                </th>
                                <th style="font-family: Comic Sans Ms;
                                font-size: 16px; font-weight: bold;">
                                    RESULT
                                </th>
                                <th colspan="0px" style="font-family: Comic Sans MS;
                                font-size: 16px; font-weight: bold;">
                                    PASSWORD
                                </th>
                                <th colspan="0px" style="font-family: Comic Sans MS;
                                font-size: 16px; font-weight: bold;">
                                    ACTION
                                </th>
                            </tr>

                            <?php
                            include "Faculty_init.php";
                            $sql = "SELECT * FROM $STUDENT_ADD";
                            $queryExe = mysqli_query($con,$sql);
                            $data = mysqli_num_rows($queryExe);
                            if($data){
                                while($row=mysqli_fetch_array($queryExe)){
                                    ?>
                                    <tr style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                    font-size: 17px; font-weight: bold;">
                                        <td>
                                            <?php
                                                echo $row[$STUDENT_NAME];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row[$STUDENT_MNO];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row[$STUDENT_EMAIL];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row[$STUDENT_RESULT];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row[$STUDENT_PASSWORD];
                                            ?>
                                        </td>
                                        <td> 
                                            <a href="student_delete.php?student_email=<?php echo $row['student_email'] ?> "><button class="button des">Delete</button></a>
                                        </td>
                                    
                                    </tr>
                                    <?php
                                }
                            }else{

                            }
                            ?>
                        </table>
                    </div>
                </td>
            </table>
        </div>

    </body>
</html>