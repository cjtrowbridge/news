<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="">

  <title>Damage Report Global</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="/css/style.css">
  
  <!--Google Feeds API-->
  <script src="https://www.google.com/jsapi"></script>
  
  </head>

<body>

  <nav class="navbar navbar-fixed-top navbar-dark bg-primary container">
    <a class="navbar-brand" href="https://damagereport.cjtrowbridge.com">Damage Report Global</a>
    <ul class="nav navbar-nav">
      
    </ul>
  </nav>

  <div class="container" id="bodyContainer">

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-5">
      <img src="/img/damage-report.jpg">
      <div class="agrogator">
        <h2>
          <i class="material-icons agrogate_refresh" onclick="Agrogate();">cached</i>
          Dev News
        </h2>
        <span class="agrogator_enclosure" data-uri="http://stallman.org/rss/rss.xml"></span>
        <span class="agrogator_enclosure" data-uri="https://news.ycombinator.com/rss"></span>
        <span class="agrogator_enclosure" data-uri="https://www.reddit.com/r/web_design/.rss"></span>
        <span class="agrogator_enclosure" data-uri="https://www.reddit.com/r/Entrepreneur/.rss"></span>
        <span class="agrogator_enclosure" data-uri="https://www.reddit.com/r/HowToHack/.rss"></span>
        <span class="agrogator_enclosure" data-uri="https://www.reddit.com/r/programming/.rss"></span>
        <span class="agrogator_enclosure" data-uri="https://www.reddit.com/r/sysadmin/.rss"></span>
        <span class="agrogator_enclosure" data-uri="https://www.reddit.com/r/Futurology/.rss"></span>
        <span class="agrogator_enclosure" data-uri="https://devstash.io/trending.atom"></span>
        <div class="agrogator_container"></div>
      </div>
    </div>
    <div class="col-xs-12 col-md-7">
      
    </div>
  </div>
  
  </div><!-- /.container -->
    
  <script src="/js/agrogate-1.0.js"></script>
</body>
</html>
