<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>News</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="css/style.css">

  <meta property="og:title" content="News">
  <meta property="og:type" content="website">
  <meta property="og:description" content="These high quality news sources do not include any commentary, just news." />
  <meta property="og:url" content="https://cjtrowbridge.com/news">
  
</head>

<body>

  <div class="container">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="podcastContainer" data-feed="./api/?feed=npr-podcast">
            <img src="//media.npr.org/images/podcasts/2013/primary/hourly_news_summary-c464279737c989a5fbf3049bc229152af3c36b9d.png?s=1400">
            <h4>NPR: Hourly World News</h4>
            <div class="player"></div>
            <div class="clearer"></div>
          </div>
          <div class="podcastContainer" data-feed="./api/?feed=cbc-podcast">
            <img src="//www.cbc.ca/podcasting/images/promo-hourlies.jpg">
            <h4>CBC: Hourly World News</h4>
            <div class="player"></div>
            <div class="clearer"></div>
          </div>
          <div class="podcastContainer" data-feed="./api/?feed=dw-podcast">
            <img src="//www.dw.com/image/2135752_7.jpg">
            <h4>Deutsche Welle: Hourly World News</h4>
            <div class="player"></div>
            <div class="clearer"></div>
          </div>
          <div class="podcastContainer" data-feed="./api/?feed=bbc-world-news">
            <img src="https://pbs.twimg.com/media/DUXWo-lX4AA75gs.jpg">
            <h4>BBC: World News</h4>
            <div class="player"></div>
            <div class="clearer"></div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          
        </div>
      </div>
    </div>
  </div><!-- /.container -->
    
  <script src="js/news.js"></script>
  
</body>
</html>
