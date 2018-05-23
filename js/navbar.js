
var el  = $('#nav-links')
el.css({
    'display':'none',
    'position':'fixed',
    'background':'white',
    'top': '0px',
    'left': '0px',
    'display': 'none',
})


$(document).ready(function(){

/*

    // Autocomplete
    $( "#search-box" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "db/search.php",
          dataType: "jsonp",
          data: {
            query: request.term
          },
          success: function( data ) {
            response( data );
          }
        } );
      },
      minLength: 1,
      select: function( event, ui ) {
        log( "Selected: " + ui.item.value + " aka " + ui.item.id );
      }
    } );

*/

});



$('body').append(el)
var clique = false
$("#nav-nom").click(function(e){
    if(!clique){
    clique = true
    var th = $(this)
    el.css({
    'left' : th.offset().left + "px",
    'top' : th.offset().top + +th.height()+10+ "px",
    'width' : th.width()+ "px",
    'display':'block',
 })
     e.stopPropagation()
        }
})
$(document).click(function(e){
    if(clique){
        el.hide()
        clique = false
    }

    


})
   el.find('li').click(function(e){
 
 $(this).find('a').click()

})

