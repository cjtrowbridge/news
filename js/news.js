$(".podcastContainer").each(function(){
  
  var podcastContainer = $(this);
  var feed = $(podcastContainer).data('feed');

  $.get(feed, function(data){
    
    var $url = $(data).find("enclosure:first-of-type").attr('url');
    
    var $player='<audio controls preload';
    if(feed=='./api/?feed=npr-podcast'){
       $player+=' autoplay';
    }
    $player+=' feed="'+feed+'"><source src="'+$url+'" type="audio/mp3"></audio>';
    
    $(podcastContainer).find(".player").html($player);
    
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
