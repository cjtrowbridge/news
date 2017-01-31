$(".podcastContainer").each(function(){
  
  var podcastContainer = $(this);
  var feed = $(podcastContainer).data('feed');

  $.get(feed, function(data){
    
    var $url = $(data).find("enclosure:first-of-type").attr('url');
    
    var $player='<audio controls preload';
    if(feed=='/?feed=npr'){
       $player+=' autoplay';
    }
    $player+='><source src="'+$url+'" type="audio/mp3"></audio>';
    
    $(podcastContainer).find(".player").html($player);
    
    if(feed=='/?feed=npr'){
      $('audio:first-of-type')[0].play();
    }
    
    $(podcastContainer).find("audio").on('ended', function(){
     
     var $dead = $('.podcastContainer:first-of-type');
     $.when($dead.fadeOut(400))
     .done(function() {
      $dead.remove();
      $('audio:first-of-type')[0].play();
     });

   });
   
  });

});







$(".feedContainer").each(function(){
  
  var feedContainer = $(this);
  var feed = $(feedContainer).data('feed');

  $.get(feed, function(data){
    
    $(data).find('item').each(function(){
       
       var $title       = $(this).find("title").html();
       var $link        = $(this).find("link").html();
       var $pubDate     = $(this).find("pubDate").html();
       var $description = $(this).find("description").html();
       
       $('feedContainer').append('<div class="card"><div class="card-block"><h4 class="card-title">'+$title+'</h4><p class="card-text">'+$description+'</p></div></div>');
     
    });
   
  });

});


<div id="feedContainer">Loading Stories...</div>
