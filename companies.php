<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="companies.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicon-32.png" type="image/png">
  <link rel="icon" sizes="64x64" href="img/favicon-64.png" type="image/png">
  <link rel="icon" sizes="96x96" href="img/favicon-96.png" type="image/png">
  <title>Companies</title>
</head>

<body>
<?php require "nav.php"; ?>

<div class="content">
  <br>
  <div class="container">
   <div class="row">
   <div class="col-3"></div>
   <div class="col-6"><h1>Companies in Euratechnologie</h1></div>
   <div class="col-3"></div>
  </div> 
  <div class="row">
      <div class="col-3"></div>
      <div class="col-6"><a class="lienhere" href="https://www.euratechnologies.com/entreprises/">Full list here</a></div>
      <div class="col-3"></div>
     </div> 
  <br>

      <div class="card mb-3 float-left shadow p-3 mb-5 bg-white rounded firstcard">
          <div class="row">
              <div class="col-md-4">
              <img src="img/abordage.png" class="card-img" alt="logo abordage">
              </div>
              <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn float-right" onclick="showImage1();">Read More</a>
                    <div class="card hide"  id="loadingImage1">
                      <div class="card-header">
                        <img src="img/abordage.png" alt="abordage" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage1();"></a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">ABORDAGE</h5>
                        <p class="card-text">Abordage is an e-commerce start-up created in 2016 that aims at be the first on line concept-store dedicated to fashon bags.</p>
                        <a href="https://www.abordage-shop.com/fr/" class="btn" target="_blank">More info</a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      
      <br>
      <br>
      <br>

      <div class="card mb-3 float-right shadow p-3 mb-5 bg-white rounded firstcard">
              <div class="row">
                  <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <a class="btn" onclick="showImage2();">Read More</a>
                        <div class="card hide"  id="loadingImage2">
                          <div class="card-header">
                            <img src="img/CARFIT.png" alt="carfit" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage2();"></a>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">CARFIT</h5>
                            <p class="card-text">Carfit is a start-up specialised in technologic innovation in predictiv car maintenance. Thanks to a box fixed on the directionnal wheel CARFIT is able to analyse ne noises and the vibrations and to turn them in maintenance informations directely send to the user’s smartphone</p>
                            <a href="https://www.euratechnologies.com/entreprises/carfit/" class="btn" target="_blank">More info</a>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                  <img src="img/CARFIT.png" class="card-img" alt="logo carfit">
                  </div>
              
              </div>
      </div>

      <div class="card mb-3 float-left shadow p-3 mb-5 bg-white rounded firstcard" >
        <div class="row">
            <div class="col-md-4">
            <img src="img/dejbox.png" class="card-img" alt="logo dejbox">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                  </p>
                  <a class="btn float-right" onclick="showImage3();">Read More</a>
                  <div class="card hide"  id="loadingImage3">
                    <div class="card-header">
                      <img src="img/dejbox.png" alt="dejbox" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage3();"></a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">DEJBOX</h5>
                      <p class="card-text">Dejbox is the first dematerialised  company snack. It aims at allow companies that can’t afford to set a true snack in their buildings to offer their workers a good snack service.</p>
                      <a href="https://www.dejbox.fr/" class="btn" target="_blank">More info</a>
                    </div>
                  </div>
                </div>
        </div>
        </div>
      </div>
      <br>
      <br>
      <br>

    <div class="card mb-3 float-right shadow p-3 mb-5 bg-white rounded firstcard" >
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">
                      </p>
                      <a class="btn" onclick="showImage4();">Read More</a>
                      <div class="card hide"  id="loadingImage4">
                        <div class="card-header">
                          <img src="img/frizbiz.png" alt="frizbiz" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage4();"></a>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">FRIZBIZ</h5>
                          <p class="card-text">Frizibiz is about making an easy way to a personw ho needs a service and a person who can give the service to meet. The main idea is to make the use more important that the have so that people don’t have to buy a tool if they use their neighboors tool.</p>
                          <a href="https://www.frizbiz.com/fr" class="btn" target="_blank">More info</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                <img src="img/frizbiz.png" class="card-img" alt="logo frizbiz">
                </div>
            
            </div>
    </div>

    <div class="card mb-3 float-left shadow p-3 mb-5 bg-white rounded firstcard" >
      <div class="row">
          <div class="col-md-4">
          <img src="img/LAKKOR.jpg" class="card-img" alt="logo lakkor">
          </div>
          <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                </p>
                <a class="btn float-right" onclick="showImage5();">Read More</a>
                <div class="card hide"  id="loadingImage5">
                  <div class="card-header">
                    <img src="img/LAKKOR.jpg" alt="carfit" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage5();"></a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">LAKKOR</h5>
                    <p class="card-text">Lakkor is born thanks to 2 men, with a BeM degree (Kedge Bordeaux) and former wine merchants. Lakkor's idea is to set perfect wines with each meal.</p>
                    <a href="https://www.lakkor.fr/home" class="btn" target="_blank">More info</a>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  

    <div class="card mb-3 float-right shadow p-3 mb-5 bg-white rounded firstcard" >
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">
                      </p>
                      <a class="btn" onclick="showImage6();">Read More</a>
                      <div class="card hide"  id="loadingImage6">
                        <div class="card-header">
                          <img src="img/Mapwize.png" alt="mapwize" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage6();"></a>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">MAPWIZE</h5>
                          <p class="card-text">Mapping solution to drive an user inside a connected building..</p>
                          <a href="https://www.mapwize.io/fr/" class="btn" target="_blank">More info</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                <img src="img/Mapwize.png" class="card-img" alt="logo Mapwize">
                </div>
            
            </div>
    </div>

    <div class="card mb-3 float-left shadow p-3 mb-5 bg-white rounded firstcard">
      <div class="row">
          <div class="col-md-4">
              <img src="img/meet.jpg" class="card-img" alt="logo Meetyourdata">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"> </p>
                <a class="btn float-right" onclick="showImage7();">Read More</a>
                <div class="card hide"  id="loadingImage7">
                  <div class="card-header">
                    <img src="img/meet.jpg" alt="meetyourdata" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage7();"></a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">MEETYOURDATA</h5>
                    <p class="card-text">MeetYourData is specialised in the collect and the analysis of datas on the internet users, web, mobile et connected objects. Their main competences are : web analysis, tag management system et data integration.</p>
                    <a href="http://www.meet-your-data.fr/" class="btn" target="_blank">More info</a>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4">
          
        </div>
      
      </div>
      
    </div>

    <div class="card mb-3 float-right shadow p-3 mb-5 bg-white rounded firstcard">
        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                    </p>
                    <a class="btn" onclick="showImage8();">Read More</a>
                    <div class="card hide"  id="loadingImage8">
                      <div class="card-header">
                        <img src="img/wavely.jpg" alt="wavely" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage8();"></a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">WAVELY</h5>
                        <p class="card-text">Noise is everywere. Often noise is pollution for our ears, especially in our cities. It  is also a wonderful tool to analyse et understand dysfunctions or anomlyl.

                          Wavely is firm specialised in innovation in term of acoustic, developping 2 main products : <br>
                          
                          - Developping smart acoustic sensors, connected and smart enough to identify by themself a dysfuntion before a it happens on industrial equipements.<br>
                          
                          -A predictive mapping on urban noise, that integers every sources of noise.</p>
                        <a href="http://wavely.fr/" class="btn" target="_blank">More info</a>
                      </div>
                    </div>
                </div>
            </div>
          <div class="col-md-4">
            <img src="img/wavely.jpg" class="card-img" alt="logo wavely">
          </div>
        
        </div>
        
    </div>

    <div class="card mb-3 float-left shadow p-3 mb-5 bg-white rounded firstcard">
    <div class="row">
        <div class="col-md-4">
        <img src="img/tacotroc.jpg" class="card-img" alt="logo tacotroc">
        </div>
        <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">
              </p>
              <a class="btn float-right" onclick="showImage9();">Read More</a>
              <div class="card hide"  id="loadingImage9">
                <div class="card-header">
                  <img src="img/tacotroc.jpg" alt="tacotroc" class="cards-img"><a class="close"><img class="float-right cross" src="https://img.icons8.com/ios/28/000000/delete-sign-filled.png" alt="Card image cap" onclick="hideImage9();"></a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">TACOTROC</h5>
                  <p class="card-text">tacotroc.com is community plateformn dedicated to the old cars passion. This a place where people can share their love for mecanics, story of cars and brands,their interest about museam, old places , art, car professionals , etc...</p>
                  <a href="https://www.euratechnologies.com/entreprises/tacotroc-com/" class="btn" target="_blank">More info</a>
                </div>
              </div>
            </div>
    </div>
    </div>
    </div>
    
</div>
</div>
<?php require "footer.php"; ?>

<script type="text/javascript">
  function showImage1(){
    document.getElementById('loadingImage1').style.visibility='visible';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage1(){
    document.getElementById('loadingImage1').style.visibility='hidden';
  }
  function showImage2(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='visible';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage2(){
    document.getElementById('loadingImage2').style.visibility='hidden';
  }
  function showImage3(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='visible';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage3(){
    document.getElementById('loadingImage3').style.visibility='hidden';
  }
  function showImage4(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='visible';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage4(){
    document.getElementById('loadingImage4').style.visibility='hidden';
  }
  function showImage5(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='visible';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage5(){
    document.getElementById('loadingImage5').style.visibility='hidden';
  }
  function showImage6(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='visible';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage6(){
    document.getElementById('loadingImage6').style.visibility='hidden';
  }
  function showImage7(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='visible';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage7(){
    document.getElementById('loadingImage7').style.visibility='hidden';
  }
  function showImage8(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='visible';
    document.getElementById('loadingImage9').style.visibility='hidden';
  }
  function hideImage8(){
    document.getElementById('loadingImage8').style.visibility='hidden';
  }
  function showImage9(){
    document.getElementById('loadingImage1').style.visibility='hidden';
    document.getElementById('loadingImage2').style.visibility='hidden';
    document.getElementById('loadingImage3').style.visibility='hidden';
    document.getElementById('loadingImage4').style.visibility='hidden';
    document.getElementById('loadingImage5').style.visibility='hidden';
    document.getElementById('loadingImage6').style.visibility='hidden';
    document.getElementById('loadingImage7').style.visibility='hidden';
    document.getElementById('loadingImage8').style.visibility='hidden';
    document.getElementById('loadingImage9').style.visibility='visible';
  }
  function hideImage9(){
    document.getElementById('loadingImage9').style.visibility='hidden';
  }

</script>

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