<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>My first Bootstrap </title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</head>
<body>
    <div class="wrapper">
        
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="http://www.iit.du.ac.bd/" target="_blank" style="color: white">IIT DU</a></h3>
        
            </div>

            <ul class="list-group">
                <li>
                    <a href="test.html" target="_blank">
                        <span class="glyphicon glyphicon-home"></span>
                        Home
                    </a>
                    
                </li>
                <li >
                    <a href="about.html" target="_blank">
                        <span class="glyphicon glyphicon-th-large"></span>
                        About Us
                    </a>
                    
                </li>
                <li >
                    <a href="#students" data-toggle="collapse" class="dropdown-toggle" >
                        <span class="glyphicon glyphicon-education"></span>
                        Our Branches
                    </a>
                    <ul class="collapse list-unstyled" id="students">
                        <li class="active">
                            <a href="bsse.html" target="_blank" >Motijheel</a>
                        </li>
                        <li class="active">
                            <a href="bsse.html" target="_blank">Kolabagan</a>
                        </li>
                        <li class="active">
                            <a href="bsse.html" target="_blank">Uttara</a>
                        </li>
                        <li class="active">
                            <a href="bsse.html" target="_blank">PGDIT</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="achievements.html" target="_blank" >
                        <span class="glyphicon glyphicon-certificate"></span>
                        Achievement
                    </a>
                    
                
            </li>
            <li >
                    <a href="notice.html" target="_blank">
                        <span class="glyphicon glyphicon-bullhorn"></span>
                        Notices 
                    </a>
                    
                
            </li>
            </li>
                <li >
                    <a href="contact.html" target="_blank">
                        <span class="glyphicon glyphicon-home"></span>
                        Contact Us
                    </a>
                    
                </li>
            </ul>

        </nav>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-inverse">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class=" glyphicon glyphicon-th-list"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                        <i class="  glyphicon glyphicon-th-list"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                            <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                        <form class="form-inline" >
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
                    </div>
                </div>
            </nav>


	