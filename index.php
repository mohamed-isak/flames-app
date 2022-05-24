<?php include "db.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>flames App</title>
	<script type='text/javascript' src='js/main.js'></script>
	<?php include "include/links.php";?>
</head>
<body>
	<div class="container-fluid">
      
      <div class="row  nav">
      	<div class="col-xs-5">
      		<p>storedub.presents</p>
      	</div>
        <div class="col-xs-5">
      		<h6>md.isak</h6>
      	</div>
      	
      </div>


      <div class="row" id="stsload">
      	<div class="col-xs-3">
      		<img src="img/heart.gif" class="gifs">
                           
      	</div>
      	<div class="col-xs-3 stsload">
      			<img src="img/heart.gif" class="gifs">
      	</div>
      	<div class="col-xs-3 stsload">
      			<img src="img/heart.gif" class="gifs">
      	</div>
      	<div class="col-xs-3 stsload">
      			<img src="img/heart.gif" class="gifs">
      	</div>
      </div>

       <?php   
       if(isset($_POST['submit']))
{
	   $name=$_POST["name"];
       $crush_name=$_POST["name1"];
   $sql = "INSERT INTO user_data (name, crush_name)
VALUES ('$name', '$crush_name')";
 $res1=$conn->query($sql);

  }     ?>

	   <section class="col-12">
	   	<form class="form-bg" name=first  method="post" enctype="multipart/form-data">


	   	<div class="row">
	   		<div class="col-xs-2"></div>
	   		<div class="col-xs-8">
	   		  <div class='p_name group'>
                 <label  class="inputs__label">
                 your name 
                 </label>
       <input value='' name=name onkeyup=checnum(this) type=text class='txt name' id='yname'>
  
        </div>	
	   		</div>
	   	</div>


<br>

	     <div class="row">
	     	<div class="col-xs-2"></div>
		  <div class="col-xs-8">
		  	<div class='group p_name'>          
               <center><label  class="inputs__label2">
                 your crush name 
                 </label></center>
         <input value='' name=name1 onkeyup=checnum(this) type=text class='txt name' id='pname'>
         </div>
          </div>
	     </div>
     
         <div class="row">
         	<div class="col-xs-12">
         		<div name=n1 id=nam1></div>
	    
         	</div>
         </div>

           <div class="row">
         	<div class="col-xs-12">
         <div style='font-weight:bold;' id='msg'></div>
         	</div>
         </div>

 


         <div class="row">
         	 <div class='but_por'>
         	 	
         	 	<div class="col-xs-6">
         <input name=submit type=submit value=FLAMES onclick=calc() class='buttonMini'>
         </div>
         <div class="col-xs-1"></div>
         <div class="col-xs-5">
         <input type=reset value=Reset onclick='clear_all()' class='buttonMini'>
         </div>

	     <span  align='center' style="font-size: 10px;color: #dadada;" id="dumdiv">
         </span>
          </div>
         </div>
        


          <div id='tablid' class='clearfix'>
              <div class='group' align='center'>
                 <div class='love_result'>
                    <span name=n1 id=nam1></span>
                 </div>
              </div>
           </div>

            </form>
        </section><!--sec closed-->
</div>

</body>
</html>