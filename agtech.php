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
  
    <title>AgTech</title>
    
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
    <script type="text/javascript">
      function showImage1(){
        document.getElementById('loadingImage1').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage3').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
        document.getElementById('loadingImage6').style.visibility='hidden';
      }
      function hideImage1(){
        document.getElementById('loadingImage1').style.visibility='hidden';
      }
      function showImage2(){
        document.getElementById('loadingImage2').style.visibility='visible';
        document.getElementById('loadingImage1').style.visibility='hidden';
        document.getElementById('loadingImage3').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
        document.getElementById('loadingImage6').style.visibility='hidden';
      }
      function hideImage2(){
        document.getElementById('loadingImage2').style.visibility='hidden';
      }
      function showImage3(){
        document.getElementById('loadingImage3').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage1').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
        document.getElementById('loadingImage6').style.visibility='hidden';
      }
      function hideImage3(){
        document.getElementById('loadingImage3').style.visibility='hidden';
      }
      function showImage4(){
        document.getElementById('loadingImage4').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage3').style.visibility='hidden';
        document.getElementById('loadingImage1').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
        document.getElementById('loadingImage6').style.visibility='hidden';
      }
      function hideImage4(){
        document.getElementById('loadingImage4').style.visibility='hidden';
      }
      function showImage5(){
        document.getElementById('loadingImage5').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage3').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage1').style.visibility='hidden';
        document.getElementById('loadingImage6').style.visibility='hidden';
      }
      function hideImage5(){
        document.getElementById('loadingImage5').style.visibility='hidden';
      }
      function showImage6(){
        document.getElementById('loadingImage6').style.visibility='visible';
        document.getElementById('loadingImage2').style.visibility='hidden';
        document.getElementById('loadingImage3').style.visibility='hidden';
        document.getElementById('loadingImage4').style.visibility='hidden';
        document.getElementById('loadingImage5').style.visibility='hidden';
        document.getElementById('loadingImage1').style.visibility='hidden';
      }
      function hideImage6(){
        document.getElementById('loadingImage6').style.visibility='hidden';
      }

    </script>
  </head>

  <body>
    <?php require "nav.php"; ?>
    <div class="container content">        
<!--Début contenu-->
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">AgTech</h1>
            </div>
            <div class="card-body">
                <div class="container">                         
                    <div class="row">
                        <div class="col-sm p-3">
                            <h3 class="card-title">Connected Agriculture</h3>
                            <p>AgTech is an incubator and a start-up accelerator dedicated to AgTech project developers in Willems, located 20 min from Lille (connected agriculture, precision agriculture, permaculture). This incubator aims at helping the best possible conceptualization for project leaders by involving all stakeholders in the sector: farmers, researchers, Chambers of Agriculture, cooperatives, schools, universities, laboratories, builders …</p>
                        </div>
                        <div class="col-sm p-3">
                            <img src="http://www.agtechinsight.com/wp-content/uploads/2016/10/agtechinsight-logo.png" alt="Agtech" class="logo"> 
                        </div>
                    </div>
                    <h3>Some Companies</h3>
                    <div class="row">
                        <div class="col-sm p-3">
                            <div class="list-group">
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage1();">Sencrop<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage1">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage1();"></a>
                                        <img class="card-img-top" src="https://www.euratechnologies.com/content/uploads/2016/11/sencrop-logo-150x150.png" alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title">Sencrop</h5>
                                          <p class="card-text">Sencrop made a mobile app, linked in real time to agro-weather stations and sensors all over the field so it can helps daily to decide what to do thanks to ultra-local datas from the field.
                                          </p>
                                          <div class="p-3">
                                            <a href="https://www.euratechnologies.com/entreprises/sencrop/" class="btn w-100 ap" target="_blank">Discover</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage2();">Karnot<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage2">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage2();"></a>
                                        <img class="card-img-top" src="https://www.euratechnologies.com/content/uploads/2017/06/18922491_558369671219108_930435682804423958_o-150x150.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Karnott</h5>
                                            <p class="card-text">Karnott is an electronic box that aims at replace traditionnal  farmer’s note books. this box helps collectiong a lot of datas : agricultural machin’s tracking, Working time calculation, distance covered, working area..
                                            </p>
                                            <div class="p-3">
                                              <a href="https://www.karnott.fr/" class="btn w-100 ap" target="_blank">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage3();">WEENAT<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage3">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage3();"></a>
                                        <img class="card-img-top" src="https://www.euratechnologies.com/content/uploads/2018/07/weenat-150x150.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">WEENAT</h5>
                                            <p class="card-text">Weenat aimes at giving an access and capitalize the nature’s data to accelerate the decision-making and reduce bad impacts the closest from the real life possible. This solution is based on wireless low energy sensors and an online services plateform.
                                            </p>
                                            <div class="p-3">
                                              <a href="https://www.euratechnologies.com/entreprises/weenat/" class="btn w-100 ap" target="_blank">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm p-3">
                            <div class="list-group">
                              <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage4();">Chouette<i class="far fa-eye float-right"></i></a>
                              <div class="deplacer" id="loadingImage4">
                                  <div class="card" style="width:15rem;">
                                      <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage4();"></a>
                                        <img class="card-img-top" src="https://www.euratechnologies.com/content/uploads/2018/09/chouette-logo-150x150.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Chouette</h5>
                                            <p class="card-text">Chouette is making its own drones et and distributes a turnkey solution for winegrowers who wish to know them vinyards better : Detecting diseases apparition (Mildiou, ESCA,Flavescence) and analyse  vines strenght so they can manage their vines precisely.
                                            </p>
                                            <div class="p-3">
                                              <a href="https://www.chouette.vision/" class="btn w-100 ap" target="_blank">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage5();">Agrikolis<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage5">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage5();"></a>
                                        <img class="card-img-top" src="https://www.euratechnologies.com/content/uploads/2018/09/Agrikolis-logo-150x150.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Agrikolis</h5>
                                            <p class="card-text">Agrikolis puts packages pick up points in farm holdings so it will be easier to manage heavy an big packages for websites. Agrikolis set this way a new way to earn money for farmers.
                                            </p>
                                            <div class="p-3">
                                              <a href="http://agrikolis.com/" class="btn w-100 ap" target="_blank">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="apt list-group-item list-group-item-action list-group-item-success" onclick="showImage6();">Samsys<i class="far fa-eye float-right"></i></a>
                                <div class="deplacer" id="loadingImage6">
                                    <div class="card" style="width:15rem;">
                                        <a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage6();"></a>
                                        <img class="card-img-top" src="https://www.euratechnologies.com/content/uploads/2018/09/Samsys-logo-150x150.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Samsys</h5>
                                            <p class="card-text">Samsys developps a connected tool for agricultural machins. This connected and innovating tool allows the tracking of every works, so it can reduce charges and helps the farmers having a good sight of what each fields costs.
                                            </p>
                                            <div class="p-3">
                                              <a href="https://samsys.fr/" class="btn w-100 ap" target="_blank">Discover</a>
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
                            <a href="https://www.euratechnologies.com/incubateur-agtech-euratechnologies/" class="btn ap" target="_blank">More info</a>
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