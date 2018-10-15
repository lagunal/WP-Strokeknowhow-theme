  
class Video {

    constructor() {
           var $j = jQuery.noConflict();

            $j(function() { 
            var videos  = $j(".video");

                videos.on("click", function(){
                    var elm = $j(this),
                        conts   = elm.contents(),
                        le      = conts.length,
                        ifr     = null;

                    for(var i = 0; i<le; i++){
                      if(conts[i].nodeType == 8) ifr = conts[i].textContent;
                    }

                    elm.addClass("player").html(ifr);
                    elm.off("click");
                });
            });   
    }

}    

export default Video;