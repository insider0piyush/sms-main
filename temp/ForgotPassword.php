<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
            Forgot Password
        </title>
        <style>
            .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;

            }.chng_pass {
                border-color: crimson;
                color: crimson;
            }.chng_pass:hover {
                background-color: crimson;
                color: white;
            }.go_to_home {
                border-color: crimson;
                color: crimson;
            }.go_to_home:hover {
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
                background-color: Royalblue;
            }

            .right {
                right: 0;
                background-color: #EEA47F;
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
            }
        </style>

    </head>

    <body>

        <div class="split left">
            <div class="centered">
                <img src="images/home_forget_pass.png">
                <h1 style="font-family: Comic Sans MS ; color: white">Forget Password ? </h1>
                <p style="font-family: Comic Sans MS ; color: white ; font-size: 20px;">Dont Worry I Gotch You , Be Patient , And Fill The Form Calmly ~</p>
            </div>
        </div>

        <div class="split right">

            <div class="centered">

                <h2 style="font-family: Comic Sans MS ; color: white ;"> ~ Change Password Here </h2>

                <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: #FF7474 ; margin-bottom: 25px">

                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:4px ; background-color: crimson">Please Fill Up Data</fieldset>
                    </legend>

                    <form action="#" method="post">

                        <div style="margin-top: 17px;">
                            <input type="text" name="studrno" id="studrno" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Roll No" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input type="text" name="studid" id="studid" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter SID No" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input type="email" name="studemail" id="studemail" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                        border-radius: 12px; outline-color: transparent;
                                        border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Email ID" >
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input type="password" name="studpassword" id="studpassword" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Password Here" required>
                        </div>
            
                        <div style="margin-top: 7px;">
                            <input type="password" name="studcpassword" id="studcpassword" 
                                style="margin-inline-start: 7px;padding: 7px; width: 250px;
                                    border-radius: 12px; outline-color: transparent;
                                    border-color: transparent; margin-bottom: 3px" 
                                placeholder="Enter Confirm Password" required>
                        </div>
            
                        <div>
                            <input class="btn chng_pass" type="submit" name="changePassword" id="changePassword" value="Change Password" 
                            style="
                                    padding-left: 28px;
                                    padding-right: 28px;
                                    padding-top: 7px;
                                    padding-bottom: 7px;
                                    font-size: 17px;
                                    font-family: Comic Sans MS ; 
                                    font-weight: bold ;   
                                    border-radius: 12px ; 
                                    margin-top: 22px">
                        </div>  
            
                    </form>

                    <form action="#" method="post">

                        <div style="margin-top: 17px;">
                            <button class="btn go_to_home" name="gotoHome" id="gotoHome" 
                            style="
                                padding-left: 48px;
                                padding-right: 48px;
                                padding-top: 7px;
                                padding-bottom: 7px;
                                font-size: 17px;
                                font-family: Comic Sans MS ; 
                                font-weight: bold ;   
                                border-radius: 12px ; 
                                margin-bottom: 22px">Go to Home</button>
                        </div>
            
                    </form>

                </fieldset>

            </div>

        </div>
       <?php
        include "_init.php" ;
        if(isset($_POST['changePassword'])){
        $RNO=$_POST[$STUD_RNO];
        $SID=$_POST[$STUD_ID];
        $EMAIL=$_POST[$STUD_EMAIL];
        $PASSWD=$_POST[$STUD_PASSWORD];
        $CPASSWD=$_POST['studcpassword'];

            if($PASSWD==$CPASSWD){
                $sql="UPDATE $STUDENT SET $STUD_PASSWORD='$PASSWD' WHERE $STUD_RNO=$RNO OR $STUD_ID=$SID OR $STUD_EMAIL='$EMAIL'";
                $dbQuery=mysqli_query($con,$sql);
                if(!$dbQuery){
                ?>
                    <script type="text/javascript">
                    alert("Something went wrong")
                    </script>
                <?php
                }else{
                ?>
                <script type="text/javascript">
                alert("Password Update Successfully")
                    window.open("http://localhost/sms-main/Login.php","_self")
                </script>
                <?php
                }
            }else{
                ?>
                <script type="text/javascript">
                alert("Confirm Password Must be Same as Password")
                </script>
                <?php
            }
        }
        
        if(isset($_POST['gotoHome'])){
            ?>
                <script type="text/javascript">
                        window.open("http://localhost/sms-main/Home.php","_self")
                    </script>
            <?php
        }

       ?>
    </body>
</html>