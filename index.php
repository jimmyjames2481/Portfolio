<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <!--lien bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!--script css-->
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>

        <!--        script important pour le responsiv sur mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>BIENVENUE</title>
    </head>
    <body>
        <!--debut du menu-->
        <div class="containerMenu">
            <nav class="nav nav-pills flex-column flex-sm-row navbar-fixed-top">
                <a class="flex-sm-fill text-sm-center nav-link activegreen disabled" data-active="activegreen" href="#bienvenue">BIENVENUE</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" data-active="activedark" href="#portfolio">PORTFOLIO</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" data-active="activegreen" href="#unpeudemoi">UN PEU DE MOI</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" data-active="activedark" href="#contact">CONTACT</a>
            </nav>
        </div>
        <!--fin du menu-->

        <!--debut des sections-->

        <!--section 1-->
        <section class="bienvenue block" id="bienvenue">
            <div class="containerBienvenue">
                <h2 class="h2 white h2bienvenue text-center text-uppercase text-secondary mb-0">Bienvenue</h2>
                <div class="home">
                    <i class="fas fa-home"></i>
                    <hr class="star-light">

                </div>
            </div>
        </section>

        <!--section 2-->
        <section class="portfolio block" id="portfolio">
            <div class="containerPortfolio">
                <h2 class="h2 dark text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <hr class="star-dark">
            </div>
        </section>

        <!--section 3-->
        <section class="unpeudemoi block" id="unpeudemoi">
            <div class="containerUnpeudemoi">
                <h2 class="h2 white text-center text-uppercase text-secondary mb-0">Un peu de moi</h2>
                <hr class="star-light">
            </div>
        </section>

        <!--section 4-->
        <section class="contact block" id="contact">
            <div class="containerContact">
                <h2 class="h2 dark text-center text-uppercase text-secondary mb-0">Contact</h2>
                <hr class="star-dark">
            </div>
        </section>
        <!--fin des sections-->

        <!--script jquery-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('a[href^="#"]').on('click', function (event) {
                    var target = $(this.getAttribute('href'));

                    $("a").each(function () {
                        $(this).removeClass("activegreen");
                        $(this).removeClass("activedark");
                    });
                    if ($(this).data("active") == "activegreen") {
                        $(this).addClass("activegreen");
                    } else if ($(this).data("active") == "activedark") {
                        $(this).addClass("activedark");
                    }


                    if (target.length) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: target.offset().top - 70
                        }, 1000);
                    }
                });
            });
        </script>
    </body>

</html>
