
/***************************************PARTIE HOME ONGLETS**************************************/

$(document).ready(function(){
    $('.div_align').click(function(){                   //je passe mes classes div_align en ecoute
        $('.div_align').removeClass('div_align_actif'); //je retire ma classe active
    $(this).addClass('div_align_actif');                //j'ajoute ma classe active avec (this) sur ma classe (di_align)
        
        var tabControler = $(this).data('onglet');      //je crée une variable avec mes data
        $('.article').removeClass('article-actif');     // je retire ma classe active
        
        $('#' + tabControler).addClass('article-actif');    // je rajoute à mon id ma variable tabControler et ajout classe active
          
                        });
   
});