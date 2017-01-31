<?php

if(isset($_GET['feed'])){
 switch($_GET['feed']){
   case 'npr-podcast':
     FetchFeed('https://www.npr.org/rss/podcast.php?id=500005');
   case 'cbc-podcast':
     FetchFeed('http://www.cbc.ca/podcasting/includes/hourlynews.xml');
   case 'dw-podcast':
     FetchFeed('http://rss.dw.com/xml/podcast_news');
   case 'npr':
     FetchFeed('http://www.npr.org/rss/rss.php?id=1004');
   case 'cbc':
     FetchFeed('http://www.cbc.ca/cmlink/rss-world');
   case 'aj':
     FetchFeed('http://www.aljazeera.com/xml/rss/all.xml');
   case 'dw':
     FetchFeed('http://rss.dw.com/rdf/rss-en-top');
   case 'bbc':
     FetchFeed('http://feeds.bbci.co.uk/news/world/rss.xml');
   case 'fox':
     FetchFeed('http://feeds.foxnews.com/foxnews/world?format=xml');
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

  <link rel="icon" href="/img/damage-report.jpg">

  <title>Damage Report</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="/css/style.css">

  <meta property="og:title" content="Damage Report">
  <meta property="og:type" content="website">
  <meta property="og:description" content="These high quality news sources do not include any commentary, just news." />
  <meta property="og:url" content="https://damagereport.cjtrowbridge.com">
  <meta property="og:image" content="https://damagereport.cjtrowbridge.com/img/damage-report.jpg">
    
</head>

<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=269096993490945";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <nav class="navbar navbar-fixed-top navbar-dark bg-primary container">
    <a class="navbar-brand" href="https://damagereport.cjtrowbridge.com">Damage Report</a>
    <ul class="nav navbar-nav">
      
    </ul>
    <div class="facebookBox">
      <div class="fb-like" data-href="http://damagereport.cjtrowbridge.com/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div>
  </nav>

  <div class="container" id="bodyContainer">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-5 podcastColumn">
        <img src="/img/damage-report.jpg" class="picard">
        <div class="podcastContainer" data-feed="/?feed=npr-podcast">
          <img src="https://media.npr.org/images/podcasts/2013/primary/hourly_news_summary-c464279737c989a5fbf3049bc229152af3c36b9d.png?s=1400">
          <h4>NPR: Hourly World News</h4>
          <div class="player"></div>
          <div class="clearer"></div>
        </div>
        <div class="podcastContainer" data-feed="/?feed=cbc-podcast">
          <img src="http://www.cbc.ca/podcasting/images/promo-hourlies.jpg">
          <h4>CBC: Hourly World News</h4>
          <div class="player"></div>
          <div class="clearer"></div>
        </div>
        <div class="podcastContainer" data-feed="/?feed=dw-podcast">
          <img src="http://www.dw.com/image/2135752_7.jpg">
          <h4>Deutsche Welle: Hourly World News</h4>
          <div class="player"></div>
          <div class="clearer"></div>
        </div>
      </div>
      <div class="col-xs-12 col-md-7 storyColumn">
        <h1>An Important Distinction</h1>
        <p>
          There is a difference between news and commentary. Many of the most popular sources people think of as "news" do not even claim to be news. 
          If you go to <a href="http://www.huffingtonpost.com/" target="_blank">Huffington Post</a> or <a href="http://www.drudgereport.com/" target="_blank">Drudge Report</a> and open up their top five links, you will see a banner at the top that says "Opinion." 
          <a href="http://www.foxnews.com/" target="_blank">Fox News</a>, despite its name, only claims to be news during morning news hours.
       </p>
       <h2>Finding News and Avoiding Commentary</h2>
       <p>
         It is surprisingly easy to avoid opinion and commentary and get high-quality news. If you go to Fox News' website, you will see a long list of commentary and opinion on the front page, but if you go to the "World News" page you will find actual news content with far less bias.
       </p>
       <?php
       /*
       These are not ready. DW uses weird dates which are hard to sort. Will work on that later.
       ?>
       <div class="feedContainer" data-feed="/?feed=npr"></div>
       <div class="feedContainer" data-feed="/?feed=cbc"></div>
       <div class="feedContainer" data-feed="/?feed=aj"></div>
       <div class="feedContainer" data-feed="/?feed=dw"></div>
       <div class="feedContainer" data-feed="/?feed=bbc"></div>
       <div class="feedContainer" data-feed="/?feed=fox"></div>
       <?php
       */
       ?>
       <div id="feedContainer">Loading Stories...</div>
      </div>
    </div>
  
  </div><!-- /.container -->
    
  <script src="/js/damagereport.js"></script>
</body>
</html>
