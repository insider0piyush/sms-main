<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
    <meta charset="UTF-8">
    <head>
        <style>
            #grad_back {
                background: linear-gradient(to right , red , indigo , salmon);
            }
            .label{
                font-size: 32px;
                font-family: "Comic Sans MS";
                font-weight: bold;
                font-style: italic;
                color: white;
            }.legend{
                margin-right: auto;
                margin-left: auto;
                padding: 3px 6px;
            }.input {
                margin: 0.4rem;
            }.btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
            }
            .signdes {
                border-color: crimson;
                color: crimson;
            }.signdes:hover {
                background-color: crimson;
                color: white;
            }
        </style>
        <title>
            Sign Up Here
        </title>
    </head>

    <body id="grad_back">

        <table style="margin-left:auto ; margin-right:auto ; margin-top:40px ; margin-bottom:40px">

                <td>
                    <img src="images/home_register.png"></br>
                    <label class="label">
                        Welcome To SMS ~</br>
                    </label>
                    <label class="label">
                        ~ Registration Form</br>
                    </label>
                </td>

            <td></td> <td></td> <td></td> <td></td> <td></td>
            <td></td> <td></td> <td></td> <td></td> <td></td>
            <td></td> <td></td> <td></td> <td></td> <td></td>

            <td>
                <table>
                    <td>
                        <tr>
                            <form action="" method="post">
                            <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                                <legend style="color:white ; font-family:Comic Sans MS">
                                    <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Student Personal Details</fieldset>
                                </legend>

                                <div style="margin-top: 17px;">
                                    <input type="text" name="studfname" 
                                            id="studfname" 
                                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 128px; margin-right: 0px;" 
                                            placeholder="Enter First Name" required>
                                    <input type="text" name="studlname" 
                                            id="studlname" 
                                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 128px;" 
                                            placeholder="Enter Last Name" required>
                                </div>

                                <div style="margin-top: 7px;">
                                    <input type="email" name="studemail" id="studemail" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter Email Id" required>
                                </div>

                                <div style="margin-top: 7px;">
                                    <select name="mcode" style="border-right: 10px solid transparent ; border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px ; padding: 7px;">
                                        <option name="mcode">+91</option>
                                        <option name="mcode">+93</option>
                                        <option name="mcode">+213</option>
                                        <option name="mcode">+1</option>
                                        <option name="mcode">+57</option>
                                        <option name="mcode">+49</option>
                                        <option name="mcode">+30</option>
                                        <option name="mcode">+261</option>
                                        <option name="mcode">+60</option>
                                        <option name="mcode">+212</option>
                                        <option name="mcode">+258</option>
                                        <option name="mcode">+242</option>
                                        <option name="mcode">+262</option>
                                        <option name="mcode">+58</option>
                                        <option name="mcode">+84</option>
                                        <option name="mcode">+260</option>
                                    </select>
                                    <input type="text" name="studmno" id="studmno" 
                                        style="border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 202px;" 
                                        placeholder="Enter Mobile Number" required>
                                </div>

                                <div>
                                    <label for="studgender" style="font-family:Comic Sans MS ; color:white ; padding: 7px;margin-top: 7px;">Gender</label>
                                    <select name="studgender"
                                        style="border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px ; padding: 7px; width: 232px ; margin-top: 7px ; border-right: 16px solid transparent">
                                        <option name="studgender">Male</option>
                                        <option name="studgender">Female</option>
                                        <option name="studgender">Other</option>
                                    </select>
                                </div>
                            </fieldset>
                        </tr>
                            </br>
                        <tr>
                            <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                                <legend style="color:white ; font-family:Comic Sans MS">
                                    <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Student College Details</fieldset>
                                </legend>   
                                <div style="margin-top: 7px;">
                                    <input type="text" name="studcollege" id="studcollege" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter College Name" required>
                                </div>

                                <div style="margin-top: 7px;">
                                    <input type="text" name="studcourse" id="studcourse" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter Your Course" required>
                                </div>

                                <div style="margin-top: 7px;">
                                    <input type="text" name="studid" id="studid" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter Your SID" required>
                                </div>

                                <div>
                                    <label for="studdiv" style="padding: 4px;margin-top: 7px; font-family:Comic Sans MS ; color:white ">Division</label>
                                    <select name="studdiv" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px; border-right: 16px solid transparent">
                                        <option name="studdiv">1</option>
                                        <option name="studdiv">2</option>
                                        <option name="studdiv">3</option>
                                        <option name="studdiv">4</option>
                                        <option name="studdiv">5</option>
                                        <option name="studdiv">6</option>
                                        <option name="studdiv">7</option>
                                        <option name="studdiv">8</option>
                                    </select>
                                </div>

                                <div style="margin-top: 7px;">
                                    <input type="text" name="studrno" id="studrno" 
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                                        placeholder="Enter Your Roll No" required>
                                </div>
                            </fieldset>
                        </tr>
                    </td>
                </table>
            </td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td>
                <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                    <legend style="color:white ; font-family:Comic Sans MS">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">Student Residential Data</fieldset>
                    </legend>
                    <div style="margin-top: 7px;">
                        <textarea name="studaddress" id="studaddress"  
                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px; " 
                            placeholder="Enter Your Address" required></textarea>
                    </div>

                    <div>
                        <input type="text" name="studcity" id="studcity" 
                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                            placeholder="Enter Current City" required>
                    </div>

                    <div>
                        <label for="studstate" style="padding: 7px;margin-top: 7px ; font-family:Comic Sans MS ; color:white">State </label>
                        <select name="studstate" 
                            style="border-right: 16px solid transparent ; border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px;">
                            <option name="studstate">Gujarat</option>
                            <option name="studstate">Maharastra</option>
                            <option name="studstate">Delhi</option>
                            <option name="studstate">MadhyaPradesh</option>
                            <option name="studstate">Banglore</option>
                        </select>
                    </div>

                    <div style="margin-top: 7px;">
                        <input type="text" name="studpincode" id="studpincode" 
                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                            placeholder="Enter Correct Pincode" required>
                    </div>

                    <div style="margin-top: 7px;">
                        <input type="password" name="studpassword" id="studpassword" 
                            style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;" 
                            placeholder="Create Strong Password" required>
                    </div>

                    <div style="margin-top: 7px;">
                        <p style="color: white ; font-family:Comic Sans MS">
                            Please Remember Your Email & </br> Password CareFully !
                        </p> 
                    </div>

                    </fieldset>

                    </br>


                    <div>
                        <input class="btn signdes"type="submit" name="btnSignUp" id="btnSignUp" value="Sign up" 
                        style=" padding-left: 82px ; padding-right: 82px;
                                padding-top: 7px;padding-bottom: 7px;
                                font-size: 17px;
                                font-family: Comic Sans MS ; 
                                font-weight: bold ;   
                                border-radius: 12px ; 
                                margin-top: 22px">
                    </div>

                </form>

                <form action="" method="post">
                        <div>
                            <button 
                                class="btn signdes" 
                                style="padding-left: 26px;padding-right: 26px;
                                        padding-top: 7px;padding-bottom: 7px;font-size: 17px;
                                        font-family: Comic Sans MS ; 
                                        font-weight: bold ;   
                                        border-radius: 12px ; 
                                        margin-top: 22px"
                                name="alreadyAccount">Already A Student ?
                            </button>
                        </div>
                    </form>
            </td>
        </table>
    </body>
</html>
<?php
        include "_init.php" ;
            $createTable= "CREATE TABLE $STUDENT(
                $STUD_FNAME VARCHAR(20),$STUD_LNAME VARCHAR(20),
                $STUD_EMAIL VARCHAR(42) UNIQUE,$STUD_MOBILE BIGINT(10) UNIQUE,$STUD_GENDER VARCHAR(10),
                $STUD_COLLEGE VARCHAR(100),$STUD_COURSE VARCHAR(52),
                $STUD_ID BIGINT(10) UNIQUE , $STUD_DIV INT(1),$STUD_RNO INT(3) UNIQUE,$STUD_ADDRESS VARCHAR(100),
                $STUD_CITY VARCHAR(20), $STUD_STATE VARCHAR(10),$STUD_PINCODE INT(6),$STUD_PASSWORD TEXT)";

            //$queryExe=mysqli_query($con,$createTable);

            if(isset($_POST['btnSignUp']))
            {
                $FNAME=$_POST[$STUD_FNAME];
                $LNAME=$_POST[$STUD_LNAME];
                $EMAIL=$_POST[$STUD_EMAIL];
                $MCODE=$_POST['mcode'];
                $MNO=$_POST[$STUD_MOBILE];
                $MOBILE=$MCODE.$MNO;
                $GENDER=$_POST[$STUD_GENDER];
                $COLLEGE=$_POST[$STUD_COLLEGE];
                $COURSE=$_POST[$STUD_COURSE];
                $ID=$_POST[$STUD_ID];
                $DIV=$_POST[$STUD_DIV];
                $RNO=$_POST[$STUD_RNO];
                $ADDRESS=$_POST[$STUD_ADDRESS];
                $CITY=$_POST[$STUD_CITY];
                $STATE=$_POST[$STUD_STATE];
                $PINCODE=$_POST[$STUD_PINCODE];
                $PASSWORD=$_POST[$STUD_PASSWORD];

                $sql="SELECT * FROM $STUDENT WHERE $STUD_EMAIL='$EMAIL' OR $STUD_MOBILE=$MOBILE OR  $STUD_RNO=$RNO OR $STUD_ID=$ID";
                    $dbquery=mysqli_query($con,$sql);
                    $data=mysqli_num_rows($dbquery);
                    if($data){
                        ?>
                            <script type="text/javascript">
                                alert("User account already exist, Please kindly contact to administrator")
                                window.open("http://localhost/php/sms/Home/Login.php","_self")
                            </script>
                        <?php
                    }else{
                        $insertInTable= "INSERT INTO $STUDENT VALUES('$FNAME','$LNAME','$EMAIL',$MOBILE,'$GENDER','$COLLEGE','$COURSE',$ID,$DIV,$RNO,'$ADDRESS','$CITY','$STATE',$PINCODE,'$PASSWORD')";
                        $queryExe=mysqli_query($con,$insertInTable);
                        if($queryExe){
                        ?>
                        <script type="text/javascript">
                            alert("Successfully Register !")
                            window.open("http://localhost/sms-main/Login.php","_self")
                            </script>
                        <?php
                    }
                }
            }

            if(isset($_POST['alreadyAccount'])){
                ?>
                <script>
                    window.open("http://localhost/sms-main/Login.php","_self")
                    </script>
                <?php
            }
        ?>