
jQuery(document).ready(function($) {
   /* check if uses home page template */
   if($("#home-meu").length){
      $('body').addClass('saeonhome');
   };
   
   /* home page header */
   $("#home-meu").click(function(){
      $(".saeon-header").removeClass("sn-noscroll");
   });

   
});
