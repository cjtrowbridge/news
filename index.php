<?php

if(isset($_GET['feed'])){
 switch($_GET['feed']){
   case 'npr':
     FetchFeed('https://www.npr.org/rss/podcast.php?id=500005');
   case 'cbc':
     FetchFeed('http://www.cbc.ca/podcasting/includes/hourlynews.xml');
   case 'dw':
     FetchFeed('http://rss.dw.com/xml/podcast_news');
   default:
     die('Unknown Feed');
 }
}

function FetchFeed($url){
  header("Content-type: text/xml");
  echo file_get_contents($url);
  exit;
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="/img/facepalm.jpg">

  <title>Damage Report</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="/css/style.css">
    
</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-dark bg-primary container">
    <a class="navbar-brand" href="https://damagereport.cjtrowbridge.com">Damage Report</a>
    <ul class="nav navbar-nav">
      
    </ul>
  </nav>

  <div class="container" id="bodyContainer">

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-5 podcastColumn">
      <img src="/img/damage-report.jpg" class="picard">
      <div class="podcastContainer" data-feed="/?feed=npr">
        <img src="https://media.npr.org/images/podcasts/2013/primary/hourly_news_summary-c464279737c989a5fbf3049bc229152af3c36b9d.png?s=1400">
        <h4>NPR: Hourly News Summary</h4>
        <div class="player"></div>
        <div class="clearer"></div>
      </div>
      <div class="podcastContainer" data-feed="/?feed=cbc">
        <img src="http://www.cbc.ca/podcasting/images/promo-hourlies.jpg">
        <h4>CBC: Hourly News</h4>
        <div class="player"></div>
        <div class="clearer"></div>
      </div>
      <div class="podcastContainer" data-feed="/?feed=dw">
        <img src="http://www.dw.com/image/2135752_7.jpg">
        <h4>Deutsche Welle: Hourly News</h4>
        <div class="player"></div>
        <div class="clearer"></div>
      </div>
    </div>
    <div class="col-xs-12 col-md-7">
      
    </div>
  </div>
  
  </div><!-- /.container -->
    
  <script>
    $(".podcastContainer").each(function(){
      var podcastContainer = $(this);
      var feed = $(podcastContainer).data('feed');
      $(podcastContainer).find(".player").html(feed);
      
      $.get(feed, function(data){
        var $url = $(data).find("enclosure:first-of-type").attr('url');
        var $player='<audio controls preload';
        if(feed=='/?feed=npr'){
           $player+=' autoplay';
        }
        $player+='><source src="'+$url+'" type="audio/mp3"></audio>';
        $(podcastContainer).find(".player").html($player);
        $(podcastContainer).find("audio").on('ended', function(){
         $.when($('.podcastContainer:first-of-type').fadeOut(400);)
         .done(function() {
          $('audio:first-of-type')[0].play();
         });
          
       });
      });
      
    });
    
    
    
  </script>
</body>
</html>
