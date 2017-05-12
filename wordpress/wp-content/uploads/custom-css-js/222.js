<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Add your JavaScript code here.
                     
If you are using the jQuery library, then don't forget to wrap your code inside jQuery.ready() as follows:

jQuery(document).ready(function( $ ){
    // Your code in here 
});

End of comment */ 

jQuery(document).ready(function( $ ){
    // Your code in here 
  $('#video_overlays').hide();
  $('#video_overlays').click( 
    function(){ 
      $('#videoNutshell').trigger('play');
      $('#video_overlays').hide();
    } );
  $('#videoNutshell').click( 
    function(){ 
      $('#videoNutshell').trigger('pause');
      $('#video_overlays').show();
    } );
  $('#video_box').mouseover(
    function(){
      if( $("#videoNutshell").get(0).paused ){
    $('#video_overlays').show();
      }
  });
  $('#video_box').mouseleave(
    function(){
    $('#video_overlays').hide();
  })
});

</script>
<!-- end Simple Custom CSS and JS -->
