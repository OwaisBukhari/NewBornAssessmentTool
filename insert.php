<?php

    $con = mysqli_connect('localhost','root','');

    if(!$con)
    {

        echo 'Not connecgt to db';
    }

    if(!mysqli_select_db($con,'newbornassessment'))
    {
        echo 'Database not selected ';

    }

    
   // $ali = $_POST['ali'];
    $headshape = $_POST['headshape'];
    $headsize = $_POST['headsize'];
    $headswelling = $_POST['headswelling'];
    $eyeleft = $_POST['eyeleft'];
    $eyeright = $_POST['eyeright'];
    $earright = $_POST['earright'];
    $earleft = $_POST['earleft'];
    $nose = $_POST['nose'];
    $mouthlips = $_POST['mouthlips'];
    $mouthchin = $_POST['mouthchin'];
    $overallfacialappearance = $_POST['overallfacialappearance'];
    $facialfeaturesrelatingto = $_POST['facialfeaturesrelatingto'];
    $neck = $_POST['neck'];
    //eyeleft,eyeright,earright,earleft,nose,mouthlips,mouthchin,overallfacialappearance,facialfeaturesrelatingto,neck

    $id=$_POST['idnumber'];

    $R1 = $_POST['R1'];
    $R2 = $_POST['R2'];
    $R3 = $_POST['R3'];

    $R4 = $_POST['R4'];

    $R4 = $_POST['R4'];
    $R5 = $_POST['R5'];
    $R6 = $_POST['R6'];
    $R7 = $_POST['R7'];
    $R8 = $_POST['R8'];
    $R9 = $_POST['R9'];
    $R10 = $_POST['R10'];
    $R11 = $_POST['R11'];
    $R12 = $_POST['R12'];
    $R13 = $_POST['R13'];
    $R14 = $_POST['R14'];
    $R15 = $_POST['R15'];
    $R16 = $_POST['R16'];
    $R17 = $_POST['R17'];

    



    //$email = $_POST['email'];
    //$pata = $_POST['pata'];

    $sql= "INSERT INTO  newborndata (HeadShape,HeadSize,HeadSwelling,EyeLeft,EyeRight,EarRight,EarLeft,Nose,MouthLips,MouthChin,OverallFacialAppearance,FacialFeaturesRelatingTo,Neck,Chest,RightUpperLimb,LeftUpperLimb,RightHand,LeftHand,Abdomen,Umbilicus,Penis,Scrotum,FemaleGenitalia,Legsposition,RightLowerLimb,LeftLowerLimb,RightFoot,LeftFoot,Back,Color,id) VALUES ('$headshape','$headsize','$headswelling','$eyeleft','$eyeright','$earright','$earleft','$nose','$mouthlips','$mouthchin','$overallfacialappearance','$facialfeaturesrelatingto','$neck','$R1','$R2','$R3','$R4','$R5','$R6','$R7','$R8','$R9','$R10','$R11','$R12','$R13','$R14','$R15','$R16','$R17','$id')";                                                        

    IF(!mysqli_query($con,$sql))
    {
        echo 'not inseted0';



    }

    else
    {

        

        echo 'inserted';


    }

    header("refresh:5;index.html");








?>