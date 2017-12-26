<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location: project_login.php");  
}  
?>  

<!DOCTYPE html>	
<html lang="en">
<head>	
<meta charset="utf-8">	
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<meta name="viewport" content="width=device-width, initial-
scale=1">	
<title>Hostel Management System Home page</title>	
	
<!-- Bootstrap -->	
<link href="css/bootstrap.min.css" rel="stylesheet">	
	
<!-- HTML5 Shim and Respond.js IE8 support of HTML5
elements and media queries -->	
<!-- WARNING: Respond.js doesn't work if you view the
page via file:// -->	
<!--[if lt IE 9]>	
<script src="https://oss.maxcdn.com/libs/html5shiv/
3.7.0/html5shiv.js"></script>	
<script src="https://oss.maxcdn.com/libs/respond.js/
1.4.2/respond.min.js"></script>	
<![endif]-->	
	
<style>	
	

.navbar-brand{
      font-size:1.8em;

}	

#topContainer{
       background-image:url("images/7.jpg");
       height:500px;
       width:100%;
       background-size:cover;      /*  FOR FULL IMAGE TO BE DISPLAYED NOT JUST PART OF IT  */   
}

#topRow{
      margin-top:100px;
      text-align:center;
      
}

#topRow h1{
     font-size:250%;
     color:#000000;
     padding-top:40px;

}

.bold{
    font-weight:bold;

}
	
.margintop{
     margin-top:30px;
     

}
.center{
      text-align:center;


}
.title{
    margin-top:100px;
    font-size:300%;

}
#footer{
     background-color:#B0D1FB;
     padding-top:70px;
     width:100%;

}
.marginbottom{
    margin-bottom:30px;

}

.appstoreimage{
    width:250px;

}
</style>	
</head>	
<body>	

   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">NIT RAIPUR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">	
	
                 <li class="active"><a href="#home">Home</a></li>	
	
                  <li><a href="about_us.php">About</a></li>	
	          <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="faqs.php">FAQs</a></li>		


	
             
         </ul>	
                  <div class="navbar-form navbar-right">
                      <!--<button class="btn btn-success" href="www.google.com">Logout</button>-->
                      <input type="button" class="btn btn-success" value="Logout" onclick="location.href = 'project_logout.php'">
                  </div>
          
        </div>
      </div>
    </nav>



<div class="container contentContainer" >
  
  <div class="row" class="center"> 
 
    <h1 class="center title"></h1>
    <p class="lead center"></p>


   </div>
   
   <div class="row marginbottom" >
           <div class="col-md-4 margintop"> 
           <h2><span class="glyphicon glyphicon-book"></span> Rules and Regulations</h2>
           <p>Information regarding the rules and regulations of the hostel</p>	

           <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'rules.php'">   
           </div>

           <div class="col-md-4 margintop"> 
           <h2><span class="glyphicon glyphicon-list-alt"></span> Hostel Committee</h2>
           <p>Gives brief idea about the various committees of the hostel</p>	

           <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'student_commitee.php'"> 
           </div>

           <div class="col-md-4 margintop"> 
           <h2><span class="glyphicon glyphicon-list"></span> Feedback</h2>
           <p>To give a review of the hostel facilities and management </p>

           <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'feedback.php'">  
           </div>



<div class="col-md-4 margintop"> 
              
           </div>

           <div class="col-md-4 margintop"> 
           <h2><span class="glyphicon glyphicon-info-sign"></span> FAQs</h2><p>Frequently asked questions</p>	

           <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'faqs.php'">   
           </div>
           <div class="col-md-4 margintop"> 
           <h2><span class="glyphicon glyphicon-list"></span> Room Allotment List</h2><p>Gives the list of the room alloted to the students</p>

           <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'allotment_list.php'">   
           </div>
<div class="col-md-4 margintop"> 
           <h2><span class="glyphicon glyphicon-list"></span> Complaints</h2>
           <p>Submit the complaints regarding the hostel facilities and management</p>

           <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'complaint.php'">   
           </div>

           
      </div>

 </div>

	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>	
<!-- Include all compiled plugins (below), or include individual files
as needed -->	
<script src="js/bootstrap.min.js"></script>	

<script>

      $(".contentContainer").css("min-height",$(window).height());  /*  FOR Content CONTAINER HEIGHT TO BE SET TO FULL WINDOW HEIGHT  */
/* if height of device is smaller then height--> min-height        */


</script>



</body>	
</html>
