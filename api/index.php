<?php

if(isset($_GET['feed'])){
  switch($_GET['feed']){

    /* Center */
    case 'npr-podcast':
      FetchFeed('https://www.npr.org/rss/podcast.php?id=500005');
    case 'cbc-podcast':
      FetchFeed('http://www.cbc.ca/podcasting/includes/hourlynews.xml');
    case 'dw-podcast':
      FetchFeed('http://rss.dw.com/xml/podcast_news');
    case 'bbc-world-news':
      FetchFeed('http://podcasts.files.bbci.co.uk/p02nq0gn.rss');

    /* Left */
    case 'tyt':
      FetchFeed('http://tytnetworkpodcast.com/rss');
    case 'majority-report':
      FetchFeed('https://feeds.feedburner.com/MajorityReport?format=xml');
    case '538':
      FetchFeed('https://www.espn.com/espnradio/feeds/rss/podcast.xml?id=14554755');
    case 'pod-save-america':
      FetchFeed('https://feeds.feedburner.com/pod-save-america');

    /* Right */
    case 'hannity':
      FetchFeed('https://rss.art19.com/the-sean-hannity-show');
    case 'limbaugh':
      FetchFeed('https://rss.art19.com/rush-limbaugh-morning-update');
    case 'shapiro':
      FetchFeed('http://feeds.soundcloud.com/users/soundcloud:users:174770374/sounds.rss');
      
    default:
      die('Unknown Feed');
  }
}

function FetchFeed($URL){
  $CacheDir = 'cache/'.$_GET['feed'];
  $CacheFile = 'cache/'.$_GET['feed'].'/'.date('Y-m-d-H:i:00').'.xml';
  
  if(!(is_dir('cache'))){
    mkdir('cache');
  }
  if(is_dir($CacheDir)){
    if(file_exists($CacheFile)){
      $Data = file_get_contents($CacheFile);
      echo $Data;
      exit;
    }
  }else{
    //Create cache dir
    mkdir($CacheDir);
  }
  
  header("Content-type: text/xml");
  $Data = file_get_contents($URL);
  file_put_contents($CacheFile,$Data);
  echo $Data;
  exit;
}
