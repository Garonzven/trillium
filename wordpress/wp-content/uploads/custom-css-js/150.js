<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Add your JavaScript code here.
                     
If you are using the jQuery library, then don't forget to wrap your code inside jQuery.ready() as follows:

jQuery(document).ready(function( $ ){
    // Your code in here 
});

End of comment */ 

$('#about, #four, #life').hide();

   $(".side-nav li ul li").each(function(i) {
        $(this).click(function() {
            $(".wrapper").find("div:eq('" + i + "')").show().siblings().hide();
        });
    });

      $('.side-nav li ul li').on('click', function(){
        $('.side-nav li ul li').removeClass('highlight');
        $(this).addClass('highlight');
      });
  
  		$('.side-nav li ul li p ').on('click', function() {
    var $this = $(this);
    if (!$this.find('span').length) {
     	 $("span").remove();
        $this.prepend($('<span/>').html('&bull;')).addClass('selected');
    }
});</script>
<!-- end Simple Custom CSS and JS -->
