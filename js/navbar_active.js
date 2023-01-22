$(document).ready(function () {
    var url = $(location).attr("href"); 
    var indexDebut = url.indexOf('uc=');
    console.log(indexDebut);
    console.log(url.substr(indexDebut));

    //! mettr le gif sut tout l'ecran TEST
    if(url.substr(indexDebut) == "uc=contact"){
        $("body").css("background-image", "url(/img/fxVE.gif)");
        $("body").css("width", "100vw ");
        $("body").css("height", "100vh");
        $("body").css("background-position", "center)");
        $("body").css("background-repeat", "no-repeat");
        $("body").css("background-size", "cover");
    }


    if(url.substr(indexDebut) == "uc=home"){
        $("#item0").addClass("active");
        $("#item0").css("color", "gold");
        $("#item0").css("text-decoration", "underline");
        $("#item0").css("text-underline-position", "under");
        $("#item0").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=creations"){
        $("#item1").addClass("active");
        $("#item1").css("color", "gold");
        $("#item1").css("text-decoration", "underline");
        $("#item1").css("text-underline-position", "under");
        $("#item1").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=parcours"){
        $("#item2").addClass("active");
        $("#item2").css("color", "gold");
        $("#item2").css("text-decoration", "underline");
        $("#item2").css("text-underline-position", "under");
        $("#item2").css("text-underline-offset", "5px");
    }
    if(url.substr(indexDebut) == "uc=contact"){
        $("#item3").addClass("active");
        $("#item3").css("color", "gold");
        $("#item3").css("text-decoration", "underline");
        $("#item3").css("text-underline-position", "under");
        $("#item3").css("text-underline-offset", "5px");
    }


    $(window).ready(function () {
        // executes when complete page is fully loaded, including all frames, objects and images
        $(".spinnerLoader").addClass("visually-hidden");
    });

});
