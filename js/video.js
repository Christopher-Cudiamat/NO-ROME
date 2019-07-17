$(document).ready(function(){
  /*forEach{
    onclick {
      1. calcolare lunghezza del video
      2. aggiungi la funzionalita di play/ pause
      3. aggiorna seekbar
    }
  
  4 .onclick di seekbar
  5. controllare il volume
  6. fulscreen
  7. toggle controls
  }

  funzioni {
    1.prende il percent del video in andata
    2. calc duration// min e sec
    3.pad - se il numero e meno di 2 aggiungiame 0
  }
  }*/

  $(".video-player").toArray().forEach(function(videoPlayer) {

    var video = $(videoPlayer).find("video")[0];
    var videoTitle = $(videoPlayer).find(".video-title");
    var share = $(videoPlayer).find(".video-title .share");
    var playPauseBtn = $(videoPlayer).find(".play-pause-btn");
    var fullScreen = $(videoPlayer).find(".full-screen");
    var startTime = $(videoPlayer).find(".start-time");
    var playerSeekBar = $(videoPlayer).find(".controls .seek-bar-time");
    var playerProgressBar = $(videoPlayer).find(".controls .seek-bar-time .progress-bar-time");
    var volumeSeekBar = $(videoPlayer).find(".volume-ctrl .seek-bar");
    var volumeProgressBar = $(videoPlayer).find(".volume-ctrl .seek-bar .progress-bar");
    var volumeIcon = $(videoPlayer).find(".volume-ctrl .icon");

    var currentDuration,endDuration,seekBarPercentage,interval,completeDuration;
    

    $(playPauseBtn).on("click", function(){

      //1  calcola length di video
      completeDuration = video.duration;
      endDuration = calculateDuration(completeDuration);

      //2  play pause functions
      if(playPauseBtn.hasClass("play")) {
        videoTitle.css({"color": "teal"});
        share.fadeIn();
        video.play();
        playPauseBtn.addClass("pause").removeClass("play");
      } else if (playPauseBtn.hasClass("pause")) {
        videoTitle.css({"color": "grey"});
        share.fadeOut();
        video.pause();
        playPauseBtn.addClass("play").removeClass("pause");
      }

      //3  aggiorna seekbar onclick di play
      interval = setInterval(function(){
        if(!video.paused){
          updateSeekBar();
          console.log(seekBarPercentage);
        }   
        if(video.paused) {
          clearInterval(interval);
        }
        if(video.ended){
          clearInterval(interval);
          playPauseBtn.addClass("play").removeClass("pause");
          playerProgressBar.css("width","100%");
          videoTitle.css("color", "grey");
          share.fadeOut();
        }
      },500);

    });//playPauseBtn onclick END

    playerSeekBar.on("click",function(e) {
      if(!video.ended && completeDuration != undefined) {
        var seekPosition = e.pageX - $(playerSeekBar).offset().left;
        if(seekPosition >= 0 && seekPosition < $(playerSeekBar).outerWidth()){
          video.currentTime = (seekPosition * completeDuration) / $(playerSeekBar).outerWidth();
          updateSeekBar();
        }
      }
    });// playerSeekBar.onclick END

    volumeSeekBar.on("click", function(e) {
      var volumePosition = e.pageX - $(volumeSeekBar).offset().left;
      var videoVolume = volumePosition  / $(volumeSeekBar).outerWidth();

      if(videoVolume >= 0 && videoVolume <=1 ){
        video.volume = videoVolume;
        volumeProgressBar.css("width", videoVolume * 100 + "%");
      }
    });//volumeSeekBar.onclick END


    volumeIcon.on("click", function (){
      if( $("video").prop('muted') ) {
        $("video").prop('muted', false);
        $(this).css("color","#f60438"); 
      } else {
        $("video").prop('muted', true);
        $(this).css("color","#707070");
      }
    });// volumeIcon.onclick END

    fullScreen.on("click", function(){
      if(video.requestFullscreen){
        video.requestFullscreen();
      } else if(video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
      }
    });// fullScreen.onclick END

    //FUNCTION per aggiornare il seekbar
    var updateSeekBar = function() {
      seekBarPercentage = getPercentage(video.currentTime, video.duration);
      currentDuration = calculateDuration(video.currentTime);
      startTime.text(currentDuration.minutes+":"+currentDuration.seconds);
      $(playerProgressBar).css("width",seekBarPercentage + "%");
    };
    //modioficare il width di P-bar in base del current time del cvid

  });//foreach loop end//

  /*MAIN FUNCTIONS*/

  var getPercentage = function(presentTime,totalLength) {
    var calcPercentage = (presentTime / totalLength) * 100; //num diviso a tot per 100=percento
    //parseFloat() function parses a string and returns a floating point number.
    //toString() function is used with a number and converts the number to a string
    return parseFloat(calcPercentage.toString());
  }


  //calcola quanto dura il video
  var calculateDuration = function(duration){
    var seconds = parseInt(duration % 60);
    var minutes = parseInt((duration % 3600) / 60);

    return {
      minutes:pad(minutes.toFixed()),
      seconds:pad(seconds.toFixed())
    };
  };


  //se il numero e menu di 10 si stamp come 01-02-03 etc
  var pad = function(number) {
    if(number > -10 && number < 10) {
      return "0"+number;
    } else {
      return number;
    }
  }

});//document.reary end//


