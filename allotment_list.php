
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
        <title>Hostel Room Allotment list</title>  
      <!-- Bootstrap -->	
<link href="css/bootstrap.min.css" rel="stylesheet">	
	
    </head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <div class="panel panel-primary" style="color:#26aae1;">
	   <div class="panel-heading" style="background:#d3eef9; text-align:center;font-weight:bold;font-size:30px;"><i class="fa fa-bars" style="background:#26aae1;color:white; " aria-hidden="true"></i>Hostel Room Allotment list</div>
      <br>
    <body>  
      
    <div class="table-scrol">  
         
      
    <div class="table-responsive">
      
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
           

<thead style="background:#26aae1;"><tr class="tableizer-firstrow"><th>Room No.</th><th>First Name </th><th>Lastname</th><th>Email</th></tr></thead>
      
            <?php  
            include("Db_conection.php");  
            $view_users_query="select * from registered_users";//select query for viewing users.  
            $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
      
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $user_id=$row[0];  
                $user_name=$row[2];  
                $user_email=$row[3];  
                $user_pass=$row[5];  
      
      
      
            ?>  
      
            <tr>  
    <!--here showing results in the table -->  
                <td><?php echo $user_id;  ?></td>  
                <td><?php echo $user_name;  ?></td>  
                <td><?php echo $user_email;  ?></td>  
                <td><?php echo $user_pass;  ?></td>  
                 
            </tr>  
      
            <?php } ?>  
      
        </table>  
            </div>  
    </div>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>	
<!-- Include all compiled plugins (below), or include individual files
as needed -->	
<script src="js/bootstrap.min.js"></script>
      
    </body>  
      
    </html>  

