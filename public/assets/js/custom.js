$(document).ready(function(){
  if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   // Mobile Device Detected ..
    $(".call-to-action .action-content .title").css("font-size","16px");
    $("#mobile").attr("onclick" , "");
  }
})
