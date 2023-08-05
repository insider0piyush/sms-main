<html>
    <head>
        <title>
            Student Management System
        </title>
    </head>
    
    <style>
        .center{
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;
        }
        .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
            }
            .panel {
                border-color: crimson;
                color: crimson;
            }.panel:hover {
                background-color: crimson;
                color: white;
            }
        #grad_back 
        {
            background-image: linear-gradient(to bottom right , red , indigo , red);
        }
    </style>

    <body id="grad_back">
        <h1 style="margin-top: 20px; text-align:center ; font-family:Comic Sans MS ; color: white"> 
            Welcome To Student Management System 
        </h1>
        <table class="center">
            <td>
                <img src="home_main.png"/>
            </td>
            <td>
                <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474 ; margin-bottom: 25px">
                    <legend style="font-family: Comic Sans MS ; color: white">
                        <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">
                            Who Are You ?
                        </fieldset>
                    </legend>
                    
                    <form action="Admin/Admin.php" method="post">
                        <div style="margin-bottom: 15px ; text-align: center">
                            <input class="btn panel" type="submit" name="btnAdmin" id="btnAdmin" value="Admin" 
                            style="
                            padding-left: 40px;
                            padding-right: 40px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; 
                            margin-top: 22px">
                        </div>
                    </form>

                    <form action="Faculty/Faculty.php" method="post">
                        <div style="margin-bottom: 15px ; text-align: center">
                            <input class="btn panel" type="submit" name="btnFaculty" id="btnFaculty" value="Faculty" 
                            style="
                            padding-left: 36px;
                            padding-right: 36px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; ">
                        </div>
                    </form>

                    <form action="Student/Student.php" method="post">
                        <div style="margin-bottom: 15px ; text-align: center">
                            <input class="btn panel" type="submit" name="btnStudent" id="btnStudent" value="Student " 
                            style="
                            padding-left: 30px;
                            padding-right: 30px;
                            padding-top: 7px;
                            padding-bottom: 7px;
                            font-size: 17px;
                            font-family: Comic Sans MS ; 
                            font-weight: bold ;   
                            border-radius: 12px ; ">
                        </div>
                    </form>
                </fieldset>
            </td>
        </table>
    </body>
</html>

