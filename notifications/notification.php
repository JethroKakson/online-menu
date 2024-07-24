<?php
  include("./connection/DB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <style>
        body {
             margin:0 !important;
             padding:0 !important;
             box-sizing: border-box;
             font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
  <div class="container">
                     <h3>Notifications System</h3>
                     
                     <form class="form-horizontal" id="frm_data">
                         <div class="form-group row">
                            <label class="control-label col-md-4" for="notification">Name</label>
                            <div class="col-md-6">
                              <input type="text" name="notifications_name" id="notifications_name" class="form-control" placeholder="Notification name" required/>
                            </div> 
                         </div>   
                         <div class="form-group row">
                            <label class="control-label col-md-4" for="notification">Message</label>
                            <div class="col-md-6">
                              <textarea style="resize:none !important;"name="message" id="message" rows="4" cols="10" class='form-control'></textarea>
                            </div> 
                         </div>
                         <div class="form-group row">
                            <div class="col-md-10 col-offset-2" style="text-align:center;">
                            <input type="submit" id="notify" name="submit" class="btn btn-danger" value="NOTIFY"/>
                            </div>
                         </div>   
                     </form>       
              </div>
           
    
</body>
<script src="./script.js"></script>
</html>