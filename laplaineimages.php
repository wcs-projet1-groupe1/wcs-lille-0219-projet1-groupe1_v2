<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="pole.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicon-32.png" type="image/png">
  <link rel="icon" sizes="64x64" href="img/favicon-64.png" type="image/png">
  <link rel="icon" sizes="96x96" href="img/favicon-96.png" type="image/png">
  
  <title>La Plaine Images</title>

  <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
  <script type="text/javascript">
    function showImage1() {
      document.getElementById('loadingImage1').style.visibility = 'visible';
      document.getElementById('loadingImage2').style.visibility = 'hidden';
      document.getElementById('loadingImage3').style.visibility = 'hidden';
      document.getElementById('loadingImage4').style.visibility = 'hidden';
      document.getElementById('loadingImage5').style.visibility = 'hidden';
      document.getElementById('loadingImage6').style.visibility = 'hidden';
    }

    function hideImage1() {
      document.getElementById('loadingImage1').style.visibility = 'hidden';
    }

    function showImage2() {
      document.getElementById('loadingImage2').style.visibility = 'visible';
      document.getElementById('loadingImage1').style.visibility = 'hidden';
      document.getElementById('loadingImage3').style.visibility = 'hidden';
      document.getElementById('loadingImage4').style.visibility = 'hidden';
      document.getElementById('loadingImage5').style.visibility = 'hidden';
      document.getElementById('loadingImage6').style.visibility = 'hidden';
    }

    function hideImage2() {
      document.getElementById('loadingImage2').style.visibility = 'hidden';
    }

    function showImage3() {
      document.getElementById('loadingImage3').style.visibility = 'visible';
      document.getElementById('loadingImage2').style.visibility = 'hidden';
      document.getElementById('loadingImage1').style.visibility = 'hidden';
      document.getElementById('loadingImage4').style.visibility = 'hidden';
      document.getElementById('loadingImage5').style.visibility = 'hidden';
      document.getElementById('loadingImage6').style.visibility = 'hidden';
    }

    function hideImage3() {
      document.getElementById('loadingImage3').style.visibility = 'hidden';
    }

    function showImage4() {
      document.getElementById('loadingImage4').style.visibility = 'visible';
      document.getElementById('loadingImage2').style.visibility = 'hidden';
      document.getElementById('loadingImage3').style.visibility = 'hidden';
      document.getElementById('loadingImage1').style.visibility = 'hidden';
      document.getElementById('loadingImage5').style.visibility = 'hidden';
      document.getElementById('loadingImage6').style.visibility = 'hidden';
    }

    function hideImage4() {
      document.getElementById('loadingImage4').style.visibility = 'hidden';
    }
  </script>
</head>

<body>
<?php require "nav.php"; ?>
  <div class="container content">
    <!--Début contenu-->
    <div class="card">
      <div class="card-header">
        <h1 class="text-center">La Plaine Images</h1>
      </div>
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-sm p-3">
              <h3 class="card-title">A site of excellence dedicated to creative indistries</h3>
              <p>The Plaine Images is located on a rehabilitated industrial site in Roubaix. A district totally
                dedicated to creative indutries: audio-visual – game – AR/VR –
                Design (virtual reality, video games, serious game/e-learning, animation, marketing digital...)
                Innovative projects of industries of tomorrow are built in its incubator!</p>
            </div>
            <div class="col-sm p-3">
              <img class="plaineimage" src="data:image/png;base64,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"
                alt="Agtech" class="logo">
            </div>
          </div>
          <h3>Some Companies</h3>
          <div class="row">
            <div class="col-sm p-3">
              <div class="list-group">
                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage1();">APF
                  Lab-Le Hub<i class="far fa-eye float-right"></i></a>
                <div class="deplacer" id="loadingImage1">
                  <div class="card" style="width:15rem;">
                    <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png"
                        alt="Card image cap" onclick="hideImage1();"></a>
                    <img class="card-img-top" src="data:image/png;base64,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"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">APF Lab le Hub</h5>
                      <p class="card-text">APF Lab le Hub ensures the evaluation and promotion of technical aids using
                        new technologies that can help people with disabilities in their daily, school and professional
                        lives.
                      </p>
                      <div class="col-auto p-3">
                        <a class="btn w-100 ap" href=" https://www.apf-francehandicap.org/handicap-et-nouvelles-technologies-9730" target="_blank"
                          class="btn w-100">Discover</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage2();">1P2P
                  Studio<i class="far fa-eye float-right"></i></a>
                <div class="deplacer" id="loadingImage2">
                  <div class="card" style="width:15rem;">
                    <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png"
                        alt="Card image cap" onclick="hideImage2();"></a>
                    <img class="card-img-top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAACuCAMAAAClZfCTAAAAvVBMVEX///8Atar/SlAAsKT/SE7Y8e//4OFXV1f/OUD/T1T/5ufs7OwAsqYUuK7/Rkzw+vmlpaX/PkX/YmcAu6/M7OmJiYmS19Gj3dj/+fr/8/P/MTn/1tdeXl6rq6vy8vL/en5ex7+z49//xcfd3d2D0sz/gIRQUFA2vbP/b3P/pqi+vr5vzMWd29ZUVFR/f3/AwMCVlZWKjoj/WF7W1tZERETY2Nh4eHiFw73/wsMoxbv/srT/mZzk9vT/Iiz/hokyAa9kAAAD+UlEQVR4nO3abVfaMACG4ZTWBbQi3awKq1gHg0mtsM05N53//2ctL31N4jxHD40zz/UBQ+BDuE/bgKeEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAHeNb8/ylefpoeyt5rcbB5JNpfukbY2R+utXlvELjYNgzNVqGnqlRxqbTrS/qVeGFeoZGrJBnaJSJ6bSTpb0S4x4vpDcShfRGWTGddrZA6+QxpDcqCqmNsmo67XSZFpXHkNqoKsRiNPa1rDGddr5YK+pjiGnsa41CzUZZazq1suSOtQo1GrUK1Y0yZTq1tvDOKIWqc00pVDbKtOnU6vI7oBeSjbRCspFW6O03Gkd6Id7ol56CN5obp1Pbn2K7PkeGRL3+1w+GFl5oKuT557Y/xJaZG0XmRk4WenEjBwq9sJEThV7UyJFCL2jkTKFnN3Ko0DMbOVXoWY0cK/SMRs4VerwRCtXOTI2CyU83f3WYGRoFk49k7hsKHdterCVaI16IGBo5W0hrJAvpjRwupDQqC6mNnC7UalQXajdyvFCjUbNQs5HzhapG7UJ1IxQiRSO1UNkIhQTWSC8kG6FQ4SwyFOKNUKhyZirEGqEQAGzP7rsKOXmnIAc7TYTsKA5sL78L7yf9QkR2//RbJuTQbyIHvuKRm47fli/lrQ/BgOz227/1I3LYuuWKJWr/6g+d2OWQ6ElI9CRDoiCSNx7xRH4oKInKGUcSRYGSKOhd3D0MZaL7uSDvT6sShdl87lCiu4dBoCQaEPKxLxMVdvxWIv+ekNCdRGzbH6qJbm/viqPocH8ptE+08Oj83KGjSE9UX4v67FpkvFxX1yInvhcZEpX6F0/saKHnxLfrxxNNLsi/E4X7jhQynmjM5DepEsmdv3WiMUvbK++MdrnuXXDiNn6ZaHkkzKvL9Vw8t73w7ug7Wv2aSBRm5dPGpu+UJxN5y+NL7giJHk2kXouQSE+k7GhIhESqZqKAGTYTGb9dO5doIP81O4nI7nDAfatfO/T2ax45kE891xKdlGwvBP5jqxHHBmsxmLIRe7o3WhExYooRab3HJZuE5vk1G4wWSUKv+cdPFtPZIuYvUjaViNFiwR9PKc2T3LlEdDWbzdhgb3aVrH7wqYROZ1SEOU02a5loLY6lUzqasVetLdaOTRKPNhsxjOlM/K0TfWdJ5IgWR9GKuJcozilNcjmk4iBqJFpXiRLKH91MtMfIz99IRLSjqEy0djDRaRzHaqIkvpJXoJvkphgViZKb2L1E8SLP5YWGXF1/F38pk1/xUV6N5I42yil7s2uJpvxM2yuGckrMTNWR8mYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgDfhL+TAXhrFc8ZLAAAAAElFTkSuQmCC"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">1P2P Studio </h5>
                      <p class="card-text">1P2P is a studio for development of independent video games for PC and home
                        consoles</p>
                      <div class="col-auto p-3">
                        <a href=" http://1p2p-studio.com/" target="_blank" class="btn w-100 ap">Discover</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-sm p-3">
              <div class="list-group">
                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage3();">Cyber
                  Group Studio<i class="far fa-eye float-right"></i></a>
                <div class="deplacer" id="loadingImage4">
                  <div class="card" style="width:15rem;">
                    <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png"
                        alt="Card image cap" onclick="hideImage4();"></a>
                    <img class="card-img-top" src="data:image/jpeg;base64,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"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Cyber Group Studio</h5>
                      <p class="card-text">Since 2005, the series produced and distributed by Cyber Group Studios
                        delight children around the world
                        introducing them to new friends and great stories that will help them grow.
                        They rank among the broadcasters’ best rated shows and have earned multiple international
                        nominations and awards.
                      </p>
                      <div class="col-auto p-3">
                        <a href="https://www.cybergroupstudios.com" target="_blank" class="btn w-100 ap">Discover</a>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage4();">3W
                  Academy<i class="far fa-eye float-right"></i></a>
                <div class="deplacer" id="loadingImage3">
                  <div class="card" style="width:15rem;">
                    <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png"
                        alt="Card image cap" onclick="hideImage3();"></a>
                    <img class="card-img-top" src="data:image/png;base64,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"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">3W Academy</h5>
                      <p class="card-text">The 3W Academy is a training school for web developer-integrator and mobile
                        developer trades. The school was founded by training professionals and web enthusiasts.
                      </p>
                      <div class="col-auto p-3">
                        <a href=" https://3wa.fr/" target="_blank" class="btn w-100 ap">Discover</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm p-3">

            </div>
            <div class="col-auto p-3">
              <a href="https://www.plaine-images.fr/" target="_blank" class="btn w-100 ap">More info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--Fin contenu-->
  </div>
  <?php require "footer.php"; ?>
  <script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>