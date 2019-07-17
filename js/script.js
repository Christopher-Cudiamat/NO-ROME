$(document).ready( function() {

    //SOCIAL MENU APRE
  $(".social-menu").on("click", function(e) {
    e.preventDefault();
    $("#social").css({
      "top": "0%",
      "position" : "fixed"
    })

    $("html").animate({scrollTop:0}), '1000';
  });//END

  //NAV CHANGE- effeti di navigazione
  $(window).on("scroll", function() {
    var navOffsetTop = $("#nav").offset().top;
    
    if (navOffsetTop > 20) {
      // console.log(navOffsetTop);
      $("#nav div").removeClass("changeNavToNormal").addClass("changeNavToBlack");
      $("#nav div a").css("color", "#fff");
      $("#nav div button").css("color", "#fff");
      $(".borderBlack").css("borderRight" , "1px solid #fff");
      $(".nav-logo").attr("src","../assets/icons/norome-nav-logo-white.png");
      $("#nav div .active-menu").css({"color": "hsl(347, 97%, 49%)"});
    } else {
      $("#nav div").removeClass("changeNavToBlack").addClass("changeNavToNormal");
      $("#nav div a").css("color", "#000");
      $("#nav div button").css("color", "#000");
      $(".borderBlack").css("borderRight" , "1px solid #000");
      $(".nav-logo").attr("src","../assets/icons/norome-nav-logo-black.png");
      $("#nav div .active-menu").css({"color": "hsl(347, 97%, 49%)"});
    }

  });//END

  $(window).on("scroll", function() {
    var distanceHtml = $("html").scrollTop() + 600;
    var distanceTour = $("#tour-index").offset().top;
    var distanceNews = $("#news").offset().top;
    var distanceGallery = $("#gallery").offset().top;
    

    if (distanceHtml >= distanceTour) {
      $("#tour-index").css({opacity: "1"});
    }
    if (distanceHtml >= distanceNews) {
      $("#news div ul").animate({marginRight: "0"}, 800);
    }
    if (distanceHtml >=  distanceGallery) {
      $("#gallery div img").css({marginRight: "100rem;" })
    }
  });//END
  
  // SOCIAL MENU NAV CHIUDE
  $("#social h1").on("click", function() {
    $(this).parent().css({
      "top": "-100%",
      "position" : "absolute"
    })
  });//END

  //SUBSCRIBE FOOTER FORM
  $(".subscribe-section form").submit(function(e) {
    e.preventDefault();
    var formSubscribe = $(".subscribe-section form");
    var inputSubscribe = $("#emailSubscribe");
    var emailValue = inputSubscribe.val();
   
    if (!inputSubscribe.val()) {
      inputSubscribe.attr("placeholder", "Please insert email");
    } else if (!isEmail(emailValue)) {
      inputSubscribe.attr("placeholder", "Inser valid email");
    } else{
      $(formSubscribe)[0].reset()
      inputSubscribe.attr("placeholder", "Thanks for subscribing");
    }
  })//END

  //GALLERY PHOTO LIGHT BOX
  $("#photo-section figure img").on("click", function(){
    $(".btn-lightbox").css({"display": "block"});//lightbox controls
    $(".lightbox-bg-left").css({"top": "0%"});
    $(".lightbox-bg-right").css({"bottom": "0%"});
    
    var img = $('<img/>', { 
              src : this.src,
              'class' : 'bigImage'//ADD CLASS
            });

    $(".full-img").fadeIn().html(img);//mette dentro .full-img(div vuoto) il var img

  })//END

  //CLOSE  GALLERY PHOTO LIGHTBOX
  $(".lightbox-container h1").on("click", function() {
    $(".lightbox-container h1").css({"display": "none"});
    $(this).siblings(".lightbox-bg-left").css({"top": "-110%",})
    $(this).siblings(".lightbox-bg-right").css({"bottom": "-110%",})
    $(".full-img").fadeOut();
  });//END

  //LOGIN DISPLAY BUTTON
  $("form .inp, form .inpp").on("change", function(){
    if ($("form .inp").val().length >= 1 && $("form .inpp").val().length >= 1) {
      var control = loginDisplayError($(this).attr("type"), $(this));
      var confirm = 0;
      
      if (control != undefined && control != false) {
        confirm++;
        if (confirm == 1){
          $(".login-btn-active").show();
          $(".login-btn").hide();
        }
      }
    }
  });//END

  // $("tbody").on('click','.view-map', function(e){
  //GOOGLE MAP DISPLAY
  $("tbody").on('click','.view-map', function(e){
    e.preventDefault();
    $(".map-container").removeClass("bottom-white");
    $(".close-map").css("display", "none");
    $(".view-map").css("display", "inline-block");
    $(".gmap").css("height","0px");
    // $(this).parent().parent().parent().next().css("border-bottom","2px solid #fff");
    $(this).parent().parent().parent().next().addClass("bottom-white");
    $(this).parent().parent().parent().next().children().children().css("height","500px");
    $(this).css("display", "none");
    $(this).next(".close-map").css("display", "inline-block");
   
  });//END

  $("tbody").on('click','.close-map', function(e){
    e.preventDefault();
    $(".map-container").removeClass("bottom-white");
    $(this).parent().parent().parent().next().children().children().css("height","0px");
    $(this).prev(".view-map").css("display", "inline-block");
    $(".close-map").css("display", "none");
  });//END
  //GOOGLE MAP DISPLAY END

  //AJAX
  var $display = $('#tour-data');

    $.ajax({
      type:"GET",
      dataType: "json",
      url:"http://localhost/NO-ROME/docs/includes/tour-data.inc.php",
      success:function(data) {
        console.log(data);

        var str = '';

        $.each(data, function(i, data){
          console.log(i);
          // $display.append('<h1>' + data.city + '</h1>');

        
          str +='<tr>';
          str +='<td>'+ data.date +'</td>';
          str +='<td>'+ data.venue + '<br>';
          str +=  '<div>';
          str +=    '<div class="view-map">';
          str +=      '<a href="#">View Map</a><span><img src="../assets/icons/map-placeholder.png"';
          str +=        'class="icon-map" alt="map-placeholder"></span>';
          str +=    '</div>';
          str +=    '<div  class="close-map">';
          str +=      '<a href="#">Close Map</a><span><img src="../assets/icons/icon-lcose.png"';
          str +=        'class="icon-map" alt="map-placeholder"></span>';
          str +=   '</div>';
          str +=  '</div> '; 
          str +=  '</td>';
          str +=  '<td>'+ data.city +'</td>';
          str +=  '<td>';
          str +=    '<img src="../assets/icons/icon-share.png" alt="share icon">';
          str +=  '</td>';
          str +=  '<td><a href="https://www.ticketmaster.com/no-rome-tickets/artist/2560724"                  target="_blank">TICKET</a></td>';
          str +='</tr>';
          str +='<tr class="map-container">';
          str +=  '<td colspan="5" class="map-wrapper">';
          str +=    '<iframe src="https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr" class="gmap"></iframe>';
          str +=  '</td>';
          str +='</tr>';
        })

        $display.append(str);

      }
    })

});//document.ready END


//FUNZIONE PER IL DISPLAY DI ERROR
function loginDisplayError(type,field){
  switch (type) {
    case "text":
      if (field.val().length >= 5) {
        return true; 
      } else {
        return false;
      }
      break;
    case "password":
      if (field.val().length >= 5) {
        return true; 
      } else {
        return false;
      }
      break;
  }   
};


// IL FORMATO DI EMAIL  INSERITO E GIUSTO
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
};