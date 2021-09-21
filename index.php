<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    

    
<script>

    function hello(){

        alert('hello')
    }

    a=0;
        function zoomin(){
            a=a+0.1;

            r=document.querySelector(':root');

            r.style.setProperty('--p', a);
            
           // document.getElementById("img").style="zoom:var(--p)"
        }

       

        function zoomout(){
            a=a-0.1;

            r=document.querySelector(':root');

            r.style.setProperty('--p', a);
            
          //  document.getElementById("img").style="zoom:var(--p)"
        }
    


</script>


    <title>Document</title>
    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
  
    <script>
                  const firebaseConfig = {
              apiKey: "AIzaSyB6f-jtjCcZQ0jM0vWALPHABPWLWMDzuig",
              authDomain: "doctortool-f8a81.firebaseapp.com",
              databaseURL: "https://doctortool-f8a81.firebaseio.com",
              projectId: "doctortool-f8a81",
              storageBucket: "doctortool-f8a81.appspot.com",
              messagingSenderId: "798024300318",
              appId: "1:798024300318:web:0f5197b88f5c33f1687b0f",
              measurementId: "G-QRKSZLE60V"
              };
          
              // Initialize Firebase
              firebase.initializeApp(firebaseConfig);
              console.log(firebase);
              var p=26;
              const ref = firebase.storage().ref();
              ref.child("Images").listAll().then((result)=> {

                console.log(result.items)
              });
                     
  
                    
  


  
          
          function uthalo(){

              

                 ++p;

                 $.ajax({method:"post",data:{name:p} ,url:"forward.php",success:function(result){
                  //  alert(result);
                    document.getElementById('pvalue').innerHTML=result;
                    
                    


                }})



                function myFunction() {
                    // your code to run after the timeout

                    if(document.getElementById('pvalue').innerHTML!=""){
                    p=document.getElementById('pvalue').innerHTML;
                    }
               
               console.log(p);
               
                       
                      //  console.log("after incerment"+p)
                    const ref = firebase.storage().ref();
                    
 
                   
                    ref.child("Images").listAll().then((result)=> {
                        
                       // console.log("atfer"+p)
                       console.log(p);
                       var  tempadd=result.items[p].location.path;
                       k=String(tempadd);
 
                       ref.child(tempadd).getDownloadURL().then((url) => {
                         // `url` is the download URL for 'images/stars.jpg'
 
                         // This can be downloaded directly:
                     //   const xhr = new XMLHttpRequest();
                     // xhr.responseType = 'blob';
                         //xhr.onload = (event) => {
                         // const blob = xhr.response;
                     // };
                         //xhr.open('GET', url);
                         //xhr.send();
 
                         // Or inserted into an <img> element
                         const img = document.getElementById('imgg');
                         img.setAttribute('src', url);
                         document.getElementById('idnum').value = result.items[p].name;
                         document.getElementById('total').innerHTML= result.items.length;
                         document.getElementById('current').innerHTML=p;

                         console.log(result.items.length)

                     //console.log(ref.child('images').log())
 
 
                     console.log(ref.child('images').listAll());
                     });
 
 
 
 
 
                     });
 
                      ref.child("Images").listAll().then((result)=> {
                      console.log(result.items.length);
                     // document.getElementById('total').innerHTML= result.items.length();
                      // document.getElementById('idnum').value = result.items[0].name;
                      });
                      ;
              
 
                }

                // stop for sometime if needed
                setTimeout(myFunction, 2000);
                

                
                  }



                  
  
  
  
  
  
  
        function uthalo2(){
  
                    p=p-1;
                  
                 //++p;

                 $.ajax({method:"post",data:{name:p} ,url:"backward.php",success:function(result){
                  //  alert(result);
                    document.getElementById('pvalue').innerHTML=result;
                    
                    


                }})



                function myFunction() {
                    // your code to run after the timeout

                    if(document.getElementById('pvalue').innerHTML!=""){
                    p=document.getElementById('pvalue').innerHTML;
                    }
               
               console.log(p);
               
                       
                      //  console.log("after incerment"+p)
                    const ref = firebase.storage().ref();
                    
 
                   
                    ref.child("Images").listAll().then((result)=> {
                        
                       // console.log("atfer"+p)
                       console.log(p);
                       var  tempadd=result.items[p].location.path;
                       k=String(tempadd);
 
                       ref.child(tempadd).getDownloadURL().then((url) => {
                         // `url` is the download URL for 'images/stars.jpg'
 
                         // This can be downloaded directly:
                     //   const xhr = new XMLHttpRequest();
                     // xhr.responseType = 'blob';
                         //xhr.onload = (event) => {
                         // const blob = xhr.response;
                     // };
                         //xhr.open('GET', url);
                         //xhr.send();
 
                         // Or inserted into an <img> element
                         const img = document.getElementById('imgg');
                         img.setAttribute('src', url);
                         document.getElementById('idnum').value = result.items[p].name;
                         document.getElementById('total').innerHTML= result.items.length;
                         document.getElementById('current').innerHTML=p;

                         console.log(result.items.length)

                     //console.log(ref.child('images').log())
 
 
                     console.log(ref.child('images').listAll());
                     });
 
 
 
 
 
                     });
 
                      ref.child("Images").listAll().then((result)=> {
                      console.log(result.items.length);
                     // document.getElementById('total').innerHTML= result.items.length();
                      // document.getElementById('idnum').value = result.items[0].name;
                      });
                      ;
              
 
                }

                // stop for sometime if needed
                setTimeout(myFunction, 2000);
                

                
                  }


  
  
  
          
  
  
  
    </script>
<!--
<script type="text/javascript" src='ImageMove.js'></script>
<script type="text/javascript">
var imgMove = new ImageMove("container", "image");
imgMove.addPanEvents();
</script>  -->





  
  



</head>
<script>
    fetch('./data.json')
	.then(function(resp){
		return resp.json();
	})
        .then(function(data){
		console.log(data.items[p].name.substr(7));
        content=data.items[p].name.substr(7)


        

	});
  

</script>




<?php
error_reporting(0);



$con = mysqli_connect('localhost','root','');

if(!$con)
{

    echo 'Not connecgt to db';
}

if(!mysqli_select_db($con,'newbornassessment'))
{
    echo 'Database not selected ';

}

$repeat=true;


    
    $p=26;
            while($repeat==true){

                        $data =file_get_contents("data.json");
                        $data=json_decode($data);
                        $content=substr($data->items[$p]->name,7);
                       /// echo $content;
                


                    
                    



                            // echo $content;

                                

                                $sql="SELECT id FROM newborndata where id='$content'";
                                $fire= mysqli_query($con,$sql);
                                $row = mysqli_fetch_assoc($fire);
                               // unserialize($row);
                                $row = implode("",$row);
                                if($row==$content){

                                $p=$p+1;
                                $repeat=true;







                                    
                                

                        
                            }else{
                                $repeat=false;
                            }



             }


                         

 
            
  
?>
<script>

    var p="<?php echo $p ?>"
    
     console.log(p);
</script>

<script>
     //const ref = firebase.storage().ref();
     console.log(p);
  

  
                    
                     ref.child("Images").listAll().then((result)=> {
                        var  tempadd=result.items[p].location.path;
                        k=String(tempadd);
  
                        ref.child(tempadd).getDownloadURL().then((url) => {
                          // `url` is the download URL for 'images/stars.jpg'
  
                          // This can be downloaded directly:
                      //   const xhr = new XMLHttpRequest();
                      // xhr.responseType = 'blob';
                          //xhr.onload = (event) => {
                          // const blob = xhr.response;
                      // };
                          //xhr.open('GET', url);
                          //xhr.send();
  
                          // Or inserted into an <img> element
                          const img = document.getElementById('imgg');
                          img.setAttribute('src', url);
                          document.getElementById('idnum').value = result.items[p].name;
                          document.getElementById('current').innerHTML=p;
                      //console.log(ref.child('images').log())
  
  
                      console.log(ref.child('images').listAll());
                      });
  
  
  
  
  
                      });
  

</script>


<body style="background-image: url('bg.jpg');">
    <h1 id="title">New Born Assessment Tool V1</h1>

    <form  action="insert.php" method="post">

    <div id="leftdiv">
        <div class="left"  style="font-family: Arial; font-size: small; margin-left: 20px;">

                           

            <table>
                
        
        

            
                <tr>
                    <td class="subhead"  style=" font-size: smaller;">  <label for="exampleInputEmail1">Head Shape</label></td>
                    <td> 
                        <select name="headshape" >
                            <option selected hidden value="">Select One</option>
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <tr>
                    <td class="subhead"  style="font-size: smaller;">  <label for="exampleInputEmail1">Head Size</label></td>
                    <td> 
                        <select  name="headsize">
                            <option value="Looking Normal">Looking Normal</option>
                            <option value="Small">Small</option>
                            <option value="Large">Large</option>
                            <option value="Not Visualized">Not Visualized</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Head Swelling</label></td>
                    <td> 
                        <select  name="headswelling">
                            <option value="NO">NO</option>
                            <option value="Yes on back of head">Yes on back of head </option>
                            <option value="Yes on right lateral side">Yes on right lateral side</option>
                            <option value="Yes Above Head">Yes Above Head</option>
                            <option value="Not Visualized">Not Visualized</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <br>
            
                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Eye Left</label></td>
                    <td> 
                        <select  name="eyeleft">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Eye Right</label></td>
                    <td> 
                        <select  name="eyeright">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>


            

                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Ear Right</label></td>
                    <td> 
                        <select  name="earright">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Ear Left</label></td>
                    <td> 
                        <select name="earleft">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>


                <tr>
                    <td  class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Nose</label> </td>
                    <td> 
                        <select name="nose">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                </tr>

            

                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Mouth Lips</label></td>
                    <td> 
                        <select name="mouthlips">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>

                <tr>
                    <td class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Mouth Chin</label></td>
                    <td> 
                        <select name="mouthchin">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

                <tr>
                    <td  class="subhead" style=" font-size: smaller;">  <label  for="exampleInputEmail1">Over all facial appearance</label> </td>
                    <td> 
                        <select name="overallfacialappearance">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>


                <tr>
                    <td  class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Facial features relating to</label> </td>
                    <td>
                        <select name="facialfeaturesrelatingto">
                            <option value="Asian">Asian</option>
                            <option value="African">African</option>
                            <option value="European">European</option>
                        </select>
                    </td>
                
                </tr>


                <tr>
                    <td  class="subhead" style=" font-size: smaller;">  <label for="exampleInputEmail1">Neck</label> </td>
                    <td> 
                        <select name="neck">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

            
                                
            </table>





           




        
        
      



    </div>   







    </div>


    <div id="rightdiv">

        <div class="right" style="font-family: Arial; font-size: small;">
            <table align="right" style="align-items: center; font-size: smaller;">

                <input hidden type="text" id="idnum" name="idnumber">


                <tr>
                    <td>  <label for="exampleInputEmail1">Chest</label> </td>
                    <td> 
                        <select name="R1">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                    
                        </select>
                    </td>
                
                </tr>

                <tr>
                    <td>  <label for="exampleInputEmail1">Right Upper Limb</label> </td>
                    <td> 
                        <select  name="R2">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

                <tr>
                    <td>  <label for="exampleInputEmail1">Left Upper Limb</label> </td>
                    <td> 
                        <select name="R3">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

                <tr>
                    <td>  <label for="exampleInputEmail1">Right Hand</label> </td>
                    <td> 
                        <select name="R4">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>  <label for="exampleInputEmail1">Left Hand</label> </td>
                    <td> 
                        <select  name="R5">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

                <tr>
                    <td>  <label for="exampleInputEmail1">Abdomen</label> </td>
                    <td> 
                        <select  name="R6">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>  <label for="exampleInputEmail1">Umbilicus</label> </td>
                    <td> 
                        <select name="R7">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>

                
                
                </tr>
            
                <tr>
                    <td>  <label for="exampleInputEmail1">Penis</label></td>
                    <td> 
                        <select  name="R8">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Applicable">Not Applicable</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <br>

                <tr>
                    <td>  <label for="exampleInputEmail1">Scrotum</label></td>
                    <td> 
                        <select name="R9">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Applicable">Not Applicable</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <tr>
                    <td>  <label for="exampleInputEmail1">Female Genitalia</label></td>
                    <td> 
                        <select  name="R10">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Applicable">Not Applicable</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                    
                
                </tr>
                <tr>
                    <td>  <label for="exampleInputEmail1">Legs position</label> </td>
                    <td> 
                        <select  name="R11">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                
                </tr>
        
        
                <tr>
                    <td>  <label for="exampleInputEmail1">Right Lower Limb</label> </td>
                    <td> 
                        <select  name="R12">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        
                        </select>
                    </td>
                
                
                </tr>
        
                <tr>
                    <td>  <label for="exampleInputEmail1">Left Lower Limb</label> </td>
                    <td> 
                        <select  name="R13">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                
                </tr>
        
                <tr>
                    <td>  <label for="exampleInputEmail1">Right Foot </label> </td>
                    <td> 
                        <select  name="R14">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>
        
        
                <tr>
                    <td>  <label for="exampleInputEmail1">Left Foot</label> </td>
                    <td> 
                        <select  name="R15">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                
                </tr>
        
        
                <tr>
                    <td>  <label for="exampleInputEmail1">Back</label> </td>
                    <td> 
                        <select name="R16">
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Not Visualised">Not Visualised</option>
                            <option value="Cannot Comment">Cannot Comment</option>
                        </select>
                    </td>
                
                </tr>
        
                <tr>
                    <td>  <label for="exampleInputEmail1">Color</label> </td>
                    <td>
                        <select name="R17">
                            <option value="PinkishWhite">Pinkish White</option>
                            <option value="PinkishRed">Pinkish Red</option>
                            <option value="LightYellow">Light Yellow</option>
                            <option value="DarkYellow">Dark Yellow</option>
                            <option value="OrangeYellow">Orange Yellow</option>
                            <option value="BlueLips/Finger/Nose">BlueLips/Finger/Nose</option>
                        </select>
                    </td>
                
                </tr>
        
            
                
                
            </table>

          

        </div>

        <input type="submit" class="button" value="Submit" name="put">
    </div>
    </form>
    <div id="centerdiv">

        



            <style>
    
                /* demo styles. Remove if desired */
                #pcontainer1{
                    width: 100%;
                    height: 500px;
                }
                
                @media screen and (max-width: 780px){ /* responsive setting */
                    #pcontainer1{
                        width: 100%;
                        height: 400px;
                    }
                }
                
                </style>
                
                <link rel="stylesheet" href="imagepanner.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="jquery.kinetic.min.js" type="text/javascript"></script>
                <script src="jquery.mousewheel.min.js"></script>
                <script src="imagepanner.js">
                
                /***********************************************
                * Simple Image Panner and Zoomer v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
                * Please keep this notice intact
                * Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
                ***********************************************/
                
                </script>
                
                <script>
                
                var panimage1 // register arbitrary variable
                jQuery(function($){
                    panimage1 = new imagepanner({
                        wrapper: $('#pcontainer1'), // jQuery selector to image container
                      //  imgpos: [100, 300], // initial image position- x, y
                        maxlevel: 4 // maximum zoom level
                    })
                })
                
                </script>
        
        
            <div id="pcontainer1" class="pancontainer" style="position: relative; overflow: hidden;">
                <div style="width: 100%;height: 100%;position: relative;overflow: hidden;cursor: move;right: -2vh;" class="kinetic-active"><div style="width: 100%; height: 100%; position: relative; overflow: hidden; cursor: move;" class="kinetic-active"><img id="imgg" src="pleasewait5.jpg" width="auto" height="782" style="width: auto; height: 782px;"></div></div>
                <ul class="zoomcontrols"><li title="Zoom In" class="in">+</li><li title="Zoom Out" class="out">-</li></ul><ul class="zoomcontrols"><li title="Zoom In" class="in">+</li><li title="Zoom Out" class="out">-</li></ul></div>
                
                <br>
              
        
        
        



        

         <div class="buttons">
            <a href="#" class="previous round" onclick="uthalo2()" ; >&#8249;</a>
            <a href="#" class="next round"  onclick="uthalo()">&#8250;</a>
            <a href="#" class="previous round" onclick="panimage1.zoom(1)">&#8634;</a>
           <!--- <i onclick="zoomin()"  class="icon-zoom-in zoomin" style="font-size: x-large;"></i>
            <i onclick="zoomout()" class="icon-zoom-out zoomout"  style="font-size: x-large;"></i> -->

            <div id="count">
            <p id="current"></p><p>of</p> <p id="total">17982</p>
            
            </div>
            <div id="pvalue" hidden></div>
    
    
        </div>




    
    
    </div>

    

  



    











































    
    
</body>

</html>