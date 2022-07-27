<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database | TakeMyOnlineClassHelp.com</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!-- MAIN -->
    <link href="./css/style.css" rel="stylesheet" />

</head>

<body>
    
    <?php    
        // Data Stored into Database
        $host = "premium167.web-hosting.com";
        $username="cruiwbab_best_online_class_helper";
        $password="y7oIKsIG)Vg@";
        $db = "cruiwbab_best_online_class_helps";
        
        $connect = new mysqli($host, $username, $password, $db);
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }
            
    ?>        
   <?php  
    session_start();  
    if(isset($_SESSION["name"]))
    {  
  
        echo "<h1 align='center'>".$_SESSION["name"]."</h1>";  
        echo "<p align='center'><a href='https://bestonlineclasshelps.com/D%20A%20T%20A%20B%20A%20S%20E/logout.php' class='btn btn-primary'>Logout</a></p>";  
    }  
    else  
    {  
        header('location: index.php');  
    }  
    ?>  
    
    <div class="container-fluid">
        <!-- Tabs navs -->
    <ul class="nav nav-tabs nav-justified" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="ex3-tabs-1" aria-selected="true">Leads Record</a>
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex2-content">
        <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th class="col">ID</th>
                    <th class="col">Client Name</th>
                    <th class="col">Email Addres</th>
                    <th class="col">Phone Number</th>
                    <th class="col">Subject</th>
                    <th class="col">Messages</th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM `Leads_table` ORDER BY `ID` DESC";
                    $result = mysqli_query($connect, $query);
                    while ($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo '<td scope="row">' . $row['ID'] .'</td>';
                            echo '<td>' . $row['Name'] . '</td>';
                            echo '<td>' . $row['Email'] . '</td>';
                            echo '<td>' . $row['Phone'] . '</td>';
                            echo '<td>' . $row['Subject'] . '</td>';
                            echo '<td>' . $row['Message'] . '</td>';
                            echo "</tr>";
                    }
                    ?>
                </tbody>
              </table>
        </div>
    </div>
    <!-- Tabs content -->
    </div>

    <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Session Expired Login Again</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="login_form">  
     <input type="text" name="email" placeholder="Enter Email" class="form-control" required /><br />  
     <input type="password" name="password" placeholder="Enter Password" class="form-control" required /><br />  
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Login" />  
    </form>
   </div>
  </div>
    </div>
</div>
        <style>
            #loginModal{
                z-index: 9999;
            }
        </style>
    

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <script>  
$(document).ready(function(){
 
 var is_session_expired = 'no';
    function check_session()
    {
        $.ajax({
            url:"check_session.php",
            method:"POST",
            success:function(data)
            {
    if(data == '1')
    {
     $('#loginModal').modal({
      backdrop: 'static',
      keyboard: false,
     });
     is_session_expired = 'yes';
    }
   }
        })
    }
 
 var count_interval = setInterval(function(){
        check_session();
  if(is_session_expired == 'yes')
  {
   clearInterval(count_interval);
  }
    }, 10000);
 
 $('#login_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"check_login.php",
   method:"POST",
   data:$(this).serialize(),
   success:function(data){
    if(data != '')
    {
     $('#error_message').html(data);
    }
    else
    {
     location.reload();
    }
   }
  });
 });

});  
</script>

</body>

</html>