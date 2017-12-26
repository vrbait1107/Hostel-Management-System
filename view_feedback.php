
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
        <title>Feedback</title>  
      <!-- Bootstrap -->	
<link href="css/bootstrap.min.css" rel="stylesheet">
  
    </head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <div class="panel panel-primary" style="color:#26aae1;">
	   <div class="panel-heading" style="background:#d3eef9; text-align:center;font-weight:bold;font-size:30px;"><i class="fa fa-bars" style="background:#26aae1;color:white; " aria-hidden="true"></i> Student Feedback</div>
      <br>  
      
    <body>  
      
    <div class="table-scrol">  
         
      
    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
      
      
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            
<thead style="background:#26aae1;"><tr class="tableizer-firstrow"><th> Name </th><th>  Feedback </th></tr></thead>
      
            <?php  
            include("Db_conection.php");  
            $view_users_query="select * from feedback";//select query for viewing users.  
            $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
      
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $user_name=$row[0];  
                $user_feed=$row[1];  
                  
      
      
      
            ?>  
      
            <tr>  
    <!--here showing results in the table -->  
                <td><?php echo $user_name;  ?></td>  
                <td><?php echo $user_feed;  ?></td>  
                  
                  
            </tr>  
      
            <?php } ?>  
      
        </table>  
            </div>  
    </div>  
      
      
    </body>  
      
    </html>  
