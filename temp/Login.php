<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <meta charset="UTF-8">
    <head>
        <title>
            Student Login
        </title>
    </head>
    <body>
        <style>
            .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;

            }.signin {
                border-color: crimson;
                color: crimson;
            }.signin:hover {
                background-color: crimson;
                color: white;

            }.already {
                border-color: crimson;
                color: crimson;
            }.already:hover {
                background-color: crimson;
                color: white;

            }.frgt {
                border-color: crimson;
                color: crimson;
            }.frgt:hover {
                background-color: crimson;
                color: white;
            }
            .label{
                font-family: "Comic Sans MS";
                color: white;
            }
            .split {
                height: 100%;
                width: 50%;
                position: fixed;
                z-index: 1;
                top: 0;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .left {
                left: 0;
                background-color: indigo;
            }

            .right {
                right: 0;
                background-color: palevioletred;
            }

            .centered {
                position: absolute;
                top: 50%;   
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .centered img {
                width: 300px;
                border-radius: 20%;
            }
        </style>

    <body>

        <div class="split left">
            <div class="centered">
                <img src="images/home_login.png" width="400px">
                <h1 style="font-family: Comic Sans MS ; color: white">Welcome Back</h1>
                <p style="font-family: Comic Sans MS ; color: white">To Keep Connected With Us Please Signin With Your Personal Info.</p>
            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <h1 style="font-family: Comic Sans MS ; color: white ;"> ~ Sign In Form </h1>
                <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474 ; margin-bottom: 25px">
                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Please Fill Up Data</fieldset>
                    </legend>
                            
                    <table>
                     <form action="#" method="post">
                        <td>
                            <tr>
                                <table>
                                    <td>
                                        <div class="label" style="margin-right: 28px;">
                                            <h9>Email</h9>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="email" name="studemail" id="studemail" 
                                                style="margin-inline-start: 7px ; padding: 7px ; 
                                                        width: 250px ; border-radius:12px ; 
                                                        outline-color: transparent ; border-color: transparent" 
                                                        placeholder="you@example.com" required >
                                        </div>
                                    </td>
                                </table>
                                <table>
                                    <td>
                                        <div class="label">
                                            <h9>Password</h9>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="password" name="studpassword" id="studpassword" 
                                                style="margin-inline-start: 7px ; padding: 7px ; margin-top: 5px;
                                                        width: 250px ; border-radius:12px ; 
                                                        outline-color: transparent ; border-color: transparent ; "  
                                                        placeholder="Atleast 8 Chars Please !" required>
                                        </div>
                                    </td>
                                </table>

                                <div style="margin-bottom: 15px">
                                    <input class="btn signin" type="submit" name="btnLogin" id="btnLogin" value="Login" 
                                    style="
                                    padding-left: 32px;
                                    padding-right: 32px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 22px">
                                </div>
                        </form>
                            </tr> 
                        </td>
                     </form>
                    </table>
                </fieldset>

                <table>
                    <tr>
                        <form action="#" method="post">

                            <div style="margin-bottom: 17px">

                                <button class="btn already" name="newAccount" id="newAccount" 
                                    style="
                                    padding-left: 48px;
                                    padding-right: 48px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 0px">New student ? 
                                </button>
                            </div>
                        </form>
                    
                        <form action="#" method="post">
                            <div style="margin-bottom: 17px">
                                <button class="btn frgt" name="forgotPassword" id="forgotPassword" 
                                    style="
                                    padding-left: 32px;
                                    padding-right: 32px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 0px">Forgot Password ? 
                                </button>
                            </div>
                        </form>
                    </tr>
                </table>

            </div>
        </div>
    </body>
        <?php
        include "_init.php" ;

        if(isset($_POST['btnLogin'])){
            $EMAIL=$_POST[$STUD_EMAIL];
            $PASSWORD=$_POST[$STUD_PASSWORD];
            

            $selectQuery="SELECT * FROM $STUDENT WHERE $STUD_EMAIL='$EMAIL' AND $STUD_PASSWORD='$PASSWORD'";
            $dbQuery=mysqli_query($con,$selectQuery);
            $data=mysqli_num_rows($dbQuery);

            if($data){
                ?>
                    <script type="text/javascript">    
                        alert('Successfully Login');
                        window.open("http://localhost/sms-main/main.php","_self");
                        </script>

                <?php

            }else if($selectQuery="SELECT * FROM $STUDENT WHERE $STUD_EMAIL='$EMAIL' "){
                $dbQuery=mysqli_query($con,$selectQuery);
                $data=mysqli_num_rows($dbQuery);
                if($data){
                    if($data){
                        ?>
                            <script type="text/javascript">
                                alert('Wrong Password')
                                </script>
        
                        <?php
                }
            }else{
                ?>
                        <script type="text/javascript">
                            alert('User not found Pls SignUp !')
                            </script>
    
                    <?php
            }
        }
    }
    if(isset($_POST['newAccount'])){
        ?>
            <script type="text/javascript">
                    window.open("http://localhost/sms-main/index.php","_self")
                </script>
        <?php
    }
    if(isset($_POST['forgotPassword'])){
        ?>
            <script type="text/javascript">
                    window.open("http://localhost/sms-main/ForgotPassword.php","_self")
                </script>
        <?php
    }
    ?>
    </body>
</html>