$(document).ready( function() {

  
  //AJAX
  var $display = $('#tour-data');

    $.ajax({
      type:"GET",
      dataType: "json",
      url:"http://localhost/NO-ROME/docs/includes/tour-data-index.inc.php",
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

