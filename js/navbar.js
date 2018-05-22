var el = $(`<div class='options'>
<ul>
<li>
<a href="../public/mon-compte/generaux" >Mon compte</a>
</li>
<li>
<a href="../public/mes-messages">Mes messages</a>
</li>
<li>
<a href="../public/administration">Administration</a>
</li>
</ul>
</div>`)
el.css({
    'display':'none',
    'position':'fixed',
    'background':'white',
    'top': '0px',
    'left': '0px',
    'display': 'none',
})



$('body').append(el)
var clique = false
$("#nom-nav-principale").click(function(e){
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

