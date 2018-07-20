<?php

if(isset($_GET['feed'])){
 switch($_GET['feed']){
   case 'npr-podcast':
     FetchFeed('https://www.npr.org/rss/podcast.php?id=500005');
   case 'cbc-podcast':
     FetchFeed('http://www.cbc.ca/podcasting/includes/hourlynews.xml');
   case 'dw-podcast':
     FetchFeed('http://rss.dw.com/xml/podcast_news');
   case 'bbc-world-news':
     FetchFeed('http://podcasts.files.bbci.co.uk/p02nq0gn.rss');
   
   default:
     die('Unknown Feed');
 }
}

function FetchFeed($url){
  header("Content-type: text/xml");
  echo file_get_contents($url);
  exit;
}
