<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';
$USER='root';
$PASSWORD='';

$STUD_FNAME='studfname';
$STUD_LNAME='studlname';
$STUD_EMAIL='studemail';
$STUD_MOBILE='studmno';
$STUD_GENDER='studgender';
$STUD_COLLEGE='studcollege';
$STUD_COURSE='studcourse';
$STUD_ID='studid';
$STUD_DIV='studdiv';
$STUD_RNO='studrno';
$STUD_ADDRESS='studaddress';
$STUD_CITY='studcity';
$STUD_STATE='studstate';
$STUD_PINCODE='studpincode';
$STUD_PASSWORD='studpassword';


$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>