<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TechOS.Web</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootbootstrap-theme.css">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <script src="js/npm.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="js/signup.js" type="text/javascript"></script>
        <script type="text/javascript" src="bower_components/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        
    </head>
    <body>
        <?php 
            include 'techos-webfinal/config.php';
           // include '../../includes/techos-webfinal/loginFormFunction.php';
            
            
            ?>
        <div class="navbar-wrapper">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">TechOS.Web</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eletronic <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Page 1-1</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Home&AMP;Office</a></li>
                            <li><a href="#">Toys</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="signup-form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="login-form.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

         
        </div><!-- /navbar wrapper -->
        
        
        <div class="panel panel-default">
            <div class="top-session">
                
            </div>    
            
        </div>
        
        
        
        
        
         <div class="container marketing">
             <!-- Sign Up  Form -->
             <div class="container col-md-12 margin-top-med center-page-signup">
                   <form class="col-lg-3" action="techos-webfinal/signupForm.php" id="signUpForm" method="post">
                       <div id="form-group ">
                           <fieldset>
                               <legend>Sign Up</legend>
                               <div id="form-group">
                                   <input type="text" focus="true" class="form-control" id="username" name="username" placeholder="Username"/><br>
                               </div>
                               <div id="form-group">
                                   <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"/><br>
                               </div>
                               <div id="form-group">
                                   <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"/><br>
                               </div>
                               <div class="form-group">    
                                   <div class="form-group">
                                       <div class="input-group date" id="datetimepicker1">
                                           <input type='text' class="form-control" name="dob" id="dob" placeholder="Date of Birth"/>
                                           <span class="input-group-addon">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                           </span>
                                       </div>

                                       <script type="text/javascript">
                                           $(function () {
                                               $('#datetimepicker1').datetimepicker();
                                           });
                                       </script>
                                   </div>
                               </div>    
                               <div id="form-group">
                                   <input type="email" class="form-control" id="email" name="email" placeholder="Email"/><br>
                               </div>
                               <div id="form-group">
                                   <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password"/><br>
                               </div>
                               <div id="form-group">
                                   <input type="checkbox" class="" id="checkEnabled" name="checkEnebled" value="1"/><span>  Do you authorize TechosWeb to send you email with the latest promotions?</span><br>
                               </div>
                               <div id="form-group">
                                   <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">
                               </div>
                           </fieldset>
                        </div>
                   </form>
               </div>  
            </div><!-- end of Sign Up Form-->
             
            
             <!-- FOOTER -->
            <footer class="bottom">
              <br/>  
              <br/>  
              <p class="pull-right"><a href="#">Back to top</a></p>
              <p>This Bootstrap layout is compliments of Bootply. · <a href="http://www.bootply.com/62603">Edit on Bootply.com</a></p>
            </footer>

        </div><!-- /.container -->
              
        
        <!-- script references -->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/npm.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
