$(document).ready(function(){
    let toggled = function(){
        $("#wrapper").toggleClass("toggled");
        
        if ($("#wrapper").hasClass('toggled')) {
            $("#menu-toggle > i").removeClass('fa-close');
            $("#menu-toggle > i").addClass('fa-bars');
        }
        else {
            $("#menu-toggle > i").removeClass('fa-bars');
            $("#menu-toggle > i").addClass('fa-close');
        }
        
    }
    
    toggled();
    
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
       

        toggled();

    });
})