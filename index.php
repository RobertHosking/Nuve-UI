<!DOCTYPE html>
<html lang="en-us">
  <head>
    <link rel="stylesheet" href="css/bootstrap-addons.css" type="text/css" />
    <link rel="stylesheet" href="css/mdb.min.css" type="text/css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <title>Pi Drive</title>
  </head>
  <body data-spy="scroll" data-offset="0" data-target="#nav">
    <div id="section-topbar">
      <div id="topbar-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
 
 
 <ul class="nav nav-tabs">
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
      All <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li class="active"><a href="#dropdown1" data-toggle="tab" aria-expanded="true">All</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Action</a></li>
      <li><a href="#dropdown2" data-toggle="tab">Adventure</a></li>
      <li><a href="#dropdown2" data-toggle="tab">Drama</a></li>
      <li><a href="#dropdown2" data-toggle="tab">Horror</a></li>
      <li><a href="#dropdown2" data-toggle="tab">Romance</a></li>

    </ul>
  </li>
  
  
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
      Recently Added <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li class="active"><a href="#dropdown1" data-toggle="tab" aria-expanded="true">Recently Added</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Newest First</a></li>
      <li><a href="#dropdown2" data-toggle="tab">Oldest First</a></li>
    </ul>
  </li>
</ul>
 
 
            </div>
            <div class="col-sm-4">
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
                  <input type="text" class="form-control search" placeholder="Search" />
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
                            <a href="/movie-preview.html" class="heart">
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
