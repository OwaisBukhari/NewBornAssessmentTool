<?php
error_reporting(0);

//$hello=123;
$a=$_POST['name'];

//echo $a;




$con = mysqli_connect('localhost','root','');

if(!$con)
{

    echo 'Not connecgt to db';
}

if(!mysqli_select_db($con,'newbornassessment'))
{
    echo 'Database not selected ';

}
$state=true;
while($state==true){
$data =file_get_contents("data.json");
$data=json_decode($data);
$content=substr($data->items[$a]->name,7);

$sql="SELECT id FROM newborndata where id='$content'";
$fire= mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($fire);
// unserialize($row);
$row = implode("",$row);
if($row==$content){

$a=$a+1;
//echo $a;
$state=true;
}else{
    $state=false;
    echo $a;}
    





}



?>