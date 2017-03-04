<!DOCTYPE html>
<html lang="en-us">
  <head>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/Chart.js"></script>
    <meta charset="utf-8">
    <title>Pi Drive</title>
  </head>
  <body data-spy="scroll" data-offset="0" data-target="#nav">
    <div id="section-topbar">
      <div id="topbar-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <div class="dropdown">
                <ul id="nav" class="nav">
                  <li class="menu-item"><a href="" data-placement="bottom"data-toggle="tooltip" title="Movies"><i class="fa fa-film"></i></a></li>
                  <li class="menu-item"><a href="" data-placement="bottom"data-toggle="tooltip" title="Series"><i class="fa fa-tv"></i></a></li>
                </ul>
                <!--/ uL#nav -->
              </div>
              <!-- /.dropdown -->
            </div>
            <div class="col-sm-3">
              <form>
                <div class="group">      
                  <input type="text" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Search</label>
                </div>
              </form>
            </div>
            <div class="col-sm-1">
              <div class="dropdown">
                <ul id="nav" class="nav">
                  <li class="menu-item"><a href="" data-placement="bottom"data-toggle="tooltip" title="Settings"><i class="fa fa-gear"></i></a></li>
                </ul>
                <!--/ uL#nav -->
              </div>
              <!-- /.dropdown -->
            </div>
            <div class="clear"></div>
          </div>
          <!--/.row -->
        </div>
        <!--/.container -->
        <div class="clear"></div>
      </div>
      <!--/ #topbar-inner -->
    </div>
    <!--/ #section-topbar -->
    <br>
    <br>
    <br>
    <br>
    <div class="container grid" data-isotope='{ "itemSelector": ".grid-item", "layoutMode": "fitRows" }'>
      <?php
        $files = array_slice(scandir('images/movies/'),2,-1);
        foreach($files as $file) {
        	$name = explode("(",$file)[0];
        	$year = explode("(",$file)[-1];
          echo'
        
        <div class="grid-item">
            <div class="hovereffect">
                <img class="img-responsive" height="300px" src="images/movies/'.$file.'" alt="">
                    <div class="overlay">
                   
                        <p class="icon-links">
                            <a href="#" class="heart">
                                <span class="fa fa-heart-o"></span>
                            </a>
                        </p>
                    </div>
                    <div class="title">
                        '.$name.'
                        </div>
                         <div class="sub-text">
                        2016
                        </div>
        
            </div>
        </div>
          ';
          }
        ?>
    </div>
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
      });
    </script>
  </body>
</html>