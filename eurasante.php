<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="pole.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="img/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="img/favicon-96.png" type="image/png">
    <title>Eurasanté</title>

    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
    <script>
      function showImage1(){
        document.getElementById('loadingImage1').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
      }
      function hideImage1(){
        document.getElementById('loadingImage1').style.visibility='hidden';
      }
      function showImage2(){
        document.getElementById('loadingImage2').style.visibility='visible';
        document.getElementById('loadingImage1').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
      }
      function hideImage2(){
        document.getElementById('loadingImage2').style.visibility='hidden';
      }
      function showImage4(){
        document.getElementById('loadingImage4').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage1').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
      }
      function hideImage4(){
        document.getElementById('loadingImage4').style.visibility='hidden';
      }
      function showImage5(){
        document.getElementById('loadingImage5').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage1').style.visibility='hidden';
      }
      function hideImage5(){
        document.getElementById('loadingImage5').style.visibility='hidden';
      }

    </script>
  </head>
  <body>
  <?php require "nav.php"; ?>
    <div class="container content">        
<!--Début contenu-->
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Eurasanté</h1>
            </div>
            <div class="card-body">
                <div class="container">                         
                    <div class="row">
                        <div class="col-sm p-3">
                            <h3 class="card-title">Tech transfer and business development in life sciences sector</h3>
                            <p>Eurasanté is an incubator, a technology transfer tool and a cluster manager in the biotech, medtech, nutrition and healthcare fields in Northern France. It assists French and foreign companies, entrepreneurs, scientists and clinicians with their innovations and development projects.</p>
                        </div>
                        <div class="col-sm p-3">
                            <img src="https://www.staminic.com/images/clients-logos/eurasante.png" alt="Eurasanté" class="w-75"> 
                        </div>
                    </div>
                    <h3>Some Companies</h3>
                    <div class="row">
                        <div class="col-sm p-3">
                            <div class="list-group">
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage1();">OCR<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage1">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage1();"></a>
                                        <img class="card-img-top" src="http://www.oncovet-clinical-research.com/wp-content/uploads/2015/12/logo.png" alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title">OCR</h5>
                                          <p class="card-text">OCR works with pharmaceutical partners – Human health – for the
                                            cost-effective design and management of clinical trials in dogs and cats
                                            with spontaneous diseases, as well as in vitro/ex-vivo studies.<br>
                                            
                                            This mission and innovative approach helps to advance the R&D process
                                            for new drug candidates and medical devices for humans
                                            in a variety of therapeutic areas including :
                                            <br>– Oncology
                                            <br>– Cardiology
                                            <br>– Neurology
                                            <br>– Inflammation
                                          </p>
                                          <div class="p-3">
                                            <a href="http://www.oncovet-clinical-research.com/" class="btn w-100 ap" target="_blank">Discover</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage2();">GENFIT<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage2">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage2();"></a>
                                        <img class="card-img-top" src="https://www.genfit.fr/wp-content/uploads/2014/02/genfit.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">GENFIT</h5>
                                            <p class="card-text">GENFIT is a biopharmaceutical company conducting advanced clinical trials whose purpose is the discovery and development of innovative candidate drugs and diagnostic solutions. We target metabolic diseases and associated liver diseases; pathologies for which significant medical needs remain unmet due to a lack of approved treatments.
                                            </p>
                                            <div class="p-3">
                                              <a href="https://www.genfit.fr/" class="btn w-100 ap" target="_blank">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm p-3">
                            <div class="list-group">
                              <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage4();">DIAGAST<i class="far fa-eye float-right"></i></a>
                              <div class="deplacer" id="loadingImage4">
                                  <div class="card" style="width:15rem;">
                                      <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage4();"></a>
                                        <img class="card-img-top" src="https://www.diagast.com/images/logo.gif" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">DIAGAST</h5>
                                            <p class="card-text">Receiving blood is receiving life. DIAGAST’s goal is to help healthcare professionals transmit life with the help of the best blood group determination technologies. Even though it is not always a matter of life and death, transfusion errors are never acceptable.
                                            </p>
                                            <div class="p-3">
                                              <a href="https://www.diagast.com/page/28/Home" class="btn w-100 ap" target="_blank">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage5();">HMS & VILGO<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage5">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage5();"></a>
                                        <img class="card-img-top" src="https://www.hms-vilgo.com/img/logo_en.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">HMS & VILGO</h5>
                                            <p class="card-text">HMS and VILGO hold innovation and development as priorities when they conceive products for the home care and nursing homes market. Products including Home care beds, hoists and a complete range of medical devices for differently-abled people, are manufactured at our facilities in France.
                                            </p>
                                            <div class="p-3">
                                              <a href="https://www.hms-vilgo.com/en/" class="btn w-100 ap" target="_blank">Discover</a>
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
                            <a href="https://www.eurasante.com/" class="btn w-100 ap" target="_blank">More info</a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
  </body>
</html>