<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
        
        
        
    </head>
    <body>
        <?php
        // put your code here
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


      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="/assets/example/bg_suburb.jpg" style="width:100%" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Eletronic</h1>
                <p>Eletronic products for your office or great an option for gifts </p>
                <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
              </p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="http://lorempixel.com/2000/600/abstract/1" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Home & Office</h1>
                <p>Great and funny gears to build up your office or home office. </p>
                <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="http://placehold.it/1500X500" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Toys</h1>
                <p>If you are a Techy guy/girl you will love this toys that we have for you.</p>
                <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
          
        </a>  
      </div>
      <!-- /.carousel -->


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
            
            
<!-- LIST OF products HERE just change all of the codes down here using the same classes and elements 
    CLASSES SHOULD BE KEPT AS THEY ARE ALL FROM BOOTSTRAP
    the classes table-responsive and table in the next two elements are important to keep the table responsive--> 
    
        <div class="table-responsive">
            <table class="table">

                <!-- NEW ROW FOR THE TABLE WITH THE PRODUCTS -->
                <tr class="bottomMargin">    
                    <td id="list-product-browse">
                        <div class="col-md-12 text-center">
                            <!-- Dynamic content according to each row-->
                            <img class="img-circle" src="http://placehold.it/140x140">
                            <h2>Technology</h2>
                            <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
                            <!-- ROW THREE BUTTONS -->
                            <!-- ROW THREE BUTTONS -->
                            <p>
                                <a class="btn btn-success" href="#">Shop »</a>
                                <a class="btn btn-success" href="#">Add to Cart »</a>
                                <a class="btn btn-primary " href="#">Details »</a>
                            </p>
                            <!-- Finish three buttons -->

                        </div>
                    </td>

                    <td id="list-product-browse">
                        <div class="col-md-12 text-center">
                          <img class="img-circle" src="http://placehold.it/140x140">
                          <h2>Home & Office</h2>
                          <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
                          <!-- ROW THREE BUTTONS -->
                            <p>
                                <a class="btn btn-success" href="#">Shop »</a>
                                <a class="btn btn-success" href="#">Add to Cart »</a>
                                <a class="btn btn-primary " href="#">Details »</a>
                            </p>
                            <!-- Finish three buttons -->
                        </div>
                    <td>
                    <td>    
                        <div class="col-md-12 text-center">
                            <img class="img-circle" src="http://placehold.it/140x140">
                            <h2>Toys</h2>
                            <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
                             <!-- ROW THREE BUTTONS -->
                            <!-- ROW THREE BUTTONS -->
                            <p>
                                <a class="btn btn-success" href="#">Shop »</a>
                                <a class="btn btn-success" href="#">Add to Cart »</a>
                                <a class="btn btn-primary " href="#">Details »</a>
                            </p>
                            <!-- Finish three buttons -->
                        </div>
                    </td>    
                </tr>

                
                <!-- NEW ROW FOR THE TABLE WITH THE PRODUCTS -->
                <tr>    
                    <td id="list-product-browse">
                        <div class="col-md-12 text-center">
                          <img class="img-circle" src="http://placehold.it/140x140">
                          <h2>Technology</h2>
                          <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
                          <!-- ROW THREE BUTTONS -->
                            <p>
                                <a class="btn btn-success" href="#">Shop »</a>
                                <a class="btn btn-success" href="#">Add to Cart »</a>
                                <a class="btn btn-primary " href="#">Details »</a>
                            </p>
                            <!-- Finish three buttons -->
                        </div>
                    </td>

                    <td id="list-product-browse">
                        <div class="col-md-12 text-center">
                          <img class="img-circle" src="http://placehold.it/140x140">
                          <h2>Home & Office</h2>
                          <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
                          <!-- ROW THREE BUTTONS -->
                            <p>
                                <a class="btn btn-success" href="#">Shop »</a>
                                <a class="btn btn-success" href="#">Add to Cart »</a>
                                <a class="btn btn-primary " href="#">Details »</a>
                            </p>
                            <!-- Finish three buttons -->
                        </div>
                    <td>
                    <td>    
                        <div class="col-md-12 text-center">
                            <img class="img-circle" src="http://placehold.it/140x140">
                            <h2>Toys</h2>
                            <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
                            <!-- ROW THREE BUTTONS -->
                            <p>
                                <a class="btn btn-success" href="#">Shop »</a>
                                <a class="btn btn-success" href="#">Add to Cart »</a>
                                <a class="btn btn-primary " href="#">Details »</a>
                            </p>
                            <!-- Finish three buttons -->
                        </div>
                    </td>    
                </tr>
            </table>
        <!-- /PRODUCT BROWSE ENDS HERE -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
          <p class="pull-right"><a href="#myNavBar">Back to top</a></p>
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
