<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <!--lien bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

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
                <a class="flex-sm-fill text-sm-center nav-link activegreen disabled" data-active="activegreen" href="#bienvenue"><i id="acceuil" class="fas fa-home"></i></a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" data-active="activedark" href="#portfolio"><i id="pinceau" class="fas fa-paint-brush"></i>PORTFOLIO</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" data-active="activegreen" href="#unpeudemoi"><i id="pouce" class="fas fa-thumbs-up"></i>UN PEU DE MOI</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" data-active="activedark" href="#contact"><i id="phone" class="fas fa-mobile-alt"></i>CONTACT</a>
            </nav>
        </div>
        <!--fin du menu-->

        <!--debut des sections-->

        <!--section 1-->
        <section class="bienvenue block" id="bienvenue">
            <div class="containerBienvenue">
                <h2 class="h2 white h2bienvenue text-center text-uppercase text-secondary mb-0">Bienvenue</h2>
                <div class="home">
                    <i id="light" class="fas fa-home"></i>
                    <hr class="star-light">
                </div>
                <div>
                    <p id="presentation">Bienvenue sur mon Portfolio!!!!!<br> </p>
                        
                      
            </div>
        </section>

        <!--section 2-->
        <section class="portfolio block" id="portfolio">
            <div class="containerPortfolio">
                <h2 class="h2 dark text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <div class="livre">
                    <i id="dark" class="fas fa-paint-brush"></i>
                    <hr class="star-dark">
                </div>

                <!-- Portfolio Grid Section -->
                <!--container 1-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <a class="imgContainer" href="">
                                <img class="img-fluid" src="images/submarine.png" alt=""/>
                                <div class='effet3DHover'>
                                    <div class="textHover">
                                        <h3>Projet SAS</h3>
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--container 2-->
                        <div class="col-sm">
                            <a class="imgContainer" href="fichiers/ProjetStartFinalrendu.pdf" target="blank">
                                <img class="img-fluid" src="images/submarine.png" alt=""/>
                                <div class='effet3DHover'>
                                    <div class="textHover">
                                        <h3>Projet START</h3>
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--container 3-->
                        <div class="col-sm">
                            <a class="imgContainer" href="">
                                <img class="img-fluid" src="images/submarine.png" alt=""/>
                                <div class='effet3DHover'>
                                    <div class="textHover">
                                        <h3>Projet EVOLUTION</h3>
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--container 4-->
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <a class="imgContainer" href="">
                                <img class="img-fluid" src="images/submarine.png" alt=""/>
                                <div class='effet3DHover'>
                                    <div class="textHover">
                                        <h3>Projet SAS</h3>
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--container 5-->
                        <div class="col-sm">
                            <a class="imgContainer" href="">
                                <img class="img-fluid" src="images/submarine.png" alt=""/>
                                <div class='effet3DHover'>
                                    <div class="textHover">
                                        <h3>Projet START</h3>
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--container 6-->
                        <div class="col-sm">
                            <a class="imgContainer" href="">
                                <img class="img-fluid" src="images/submarine.png" alt=""/>
                                <div class='effet3DHover'>
                                    <div class="textHover">
                                        <h3>Projet EVOLUTION</h3>
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--section 3-->
        <section class="unpeudemoi block" id="unpeudemoi">
            <div class="containerUnpeudemoi">
                <h2 class="h2 white text-center text-uppercase text-secondary mb-0">Un peu de moi</h2>
                <div class="moi">
                    <i id="light" class="fas fa-thumbs-up"></i>
                    <hr class="star-light">
                </div>
                <div class="profile">
                    <img id="jimmy" src="images/jimmy.jpeg" alt=""/>
                </div>
        </section>

        <!--section 4-->
        <section class="contact block" id="contact">
            <div class="containerContact">
                <h2 class="h2 dark text-center text-uppercase text-secondary mb-0">Contact</h2>
                <div class="tel">
                    <i id="dark" class="fas fa-mobile-alt"></i>
                    <hr class="star-dark">
                </div>
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
