
/***************************************PARTIE HOME ONGLETS**************************************/

$(document).ready(function(){
    $('.div_align').click(function(){                   //je passe mes classes div_align en ecoute
        $('.div_align').removeClass('div_align_actif'); //je retire ma classe active
        $(this).addClass('div_align_actif');                //j'ajoute ma classe active avec (this) sur ma classe (di_align)

        var tabControler = $(this).data('onglet');      //je crée une variable avec mes data
        $('.article').removeClass('article-actif');     // je retire ma classe active

        $('#' + tabControler).addClass('article-actif');    // je rajoute à mon id ma variable tabControler et ajout classe active

    });



    /**********************************PARTIE HOME RESPONSIVE*******************************************/
    function cacherTexte(){
        $('#affichage_suite').hide();  
    }

    function cacherTexte1(){
        $('#affichage_suite1').hide();  
    }
    function cacherTexte2(){
        $('#affichage_suite2').hide();  
    }

    function cacherTexte3(){
        $('#affichage_suite3').hide();  
    }

    cacherTexte();
    cacherTexte1();
    cacherTexte2();
    cacherTexte3();

    $('#lire_la_suite').click(function(){        
        $('#affichage_suite').slideToggle(); 
    }); 
    $('#lire_la_suite1').click(function(){        
        $('#affichage_suite1').slideToggle(); 
    });  
    $('#lire_la_suite2').click(function(){        
        $('#affichage_suite2').slideToggle(); 
    }); 
    $('#lire_la_suite3').click(function(){        
        $('#affichage_suite3').slideToggle(); 
    });   
});


