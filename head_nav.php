<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start();
    include("config.php");
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
         exit;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, friction, non-friction, genre, reviews">
    <meta name="author" content="Raijieli Saumailagi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        
            <h1>Orchid Reading</h1>
        </div>    <!-- / banner -->

           
        
        <div class="box side">
        
            <h2>Search | <a class="nav" href="index.php">Show All</a></h2>
            
            <i> Type part of the title / author name if desires</i>
            
            <hr />
            
            Title Search<br />
            Author Search<br />
            Gnre Search<br />
            Rating Search
            
    </div>  <!-- / side div -->
          