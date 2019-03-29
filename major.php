<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="major.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicon-32.png" type="image/png">
  <link rel="icon" sizes="64x64" href="img/favicon-64.png" type="image/png">
  <link rel="icon" sizes="96x96" href="img/favicon-96.png" type="image/png">
  <title>Major Companies</title>
</head>
<body>

<?php require "nav.php"; ?>

<div class="content">
    <div class="container">
    <div class="row">
        <br>
        <br>
                <div class="col-3"></div>
                <span class="col-6"><h1>Major companies :</h1></span>
                <div class="col-3"></div>
            </div> 
            <br>
            <br>
        <div>
            <div class="container card-deck">
                <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card shadow p-3 mb-5 bg-white rounded">
                    <img src="img/ibm-logo.png" class="card-img-top" alt="logo ibm">
                    <div class="card-body">
                        <p class="card-text">International Business Machines (IBM), is a global technology company that provides hardware, software, cloud-based services and cognitive computing.</p>
                        <a href="https://www.ibm.com/fr-fr/" target="_blank" target="_blank" class="btn col-6">Website</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card shadow p-3 mb-5 bg-white rounded">
                    <img src="img/deloitte.png" class="card-img-top" alt="logo deloitte">
                    <div class="card-body">
                        <p class="card-text">Deloites provides professional consulting, financial advisory & tax management services to it's cutsomers,whatever they are public or private companies.</p>
                        <a href="https://www2.deloitte.com/fr/fr/services/consulting.html" target="_blank" class="btn col-6">Website</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card shadow p-3 mb-5 bg-white rounded">
                    <img src="img/sopra.png" class="card-img-top" alt="logo sopra">
                    <div class="card-body">
                        <p class="card-text">Sopra Steria, provides portfolios of offerings on the market, spanning consulting, systems integration, industry-specific solutions, infrastructure management and business process services. </p>
                        <a href="https://www.soprasteria.com/en/home" target="_blank" class="btn col-6">Website</a>
                    </div>
                </div>
                </div>
            </div>

            <div class="container card-deck">
                    <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card shadow p-3 mb-5 bg-white rounded">
                        <img src="img/ovh.png" class="card-img-top" alt="logo ovh">
                        <div class="card-body">
                            <p class="card-text">Ovh offers a lot of IT services for companies or peoples : Cloud , web hosting, datacenters, dedicated servers & data saving.</p>
                            <a href="https://www.ovh.co.uk/" target="_blank" class="btn col-6">Website</a>
                        </div>
                    </div>
            
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card shadow p-3 mb-5 bg-white rounded">
                        <img src="img/acxiom-1-logo.png" class="card-img-top" alt="logo axciom">
                        <div class="card-body">
                            <p class="card-text">Acxiom enables people-based marketing everywhere through a simple, open approach to connecting systems and data that drives seamless customer experiences and higher ROI.</p>
                            <a href="https://www.acxiom.com/" target="_blank" class="btn col-6">Website</a>
                        </div>
                    </div>
            
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card shadow p-3 mb-5 bg-white rounded">
                        <img src="img/capge.jpg" class="card-img-top" alt="logo capgemini">
                        <div class="card-body">
                            <p class="card-text">A global leader in consulting, technology services and digital transformation, it is at the forefront of innovation to address the entire breadth of clients’ opportunities in the evolving world of cloud, digital and platforms.</p>
                            <a href="https://www.capgemini.com/" target="_blank" class="btn col-6">Website</a>
                        </div>
                    </div> 
                    </div>                  
                </div>
            </div>    
    </div>
</div>

<?php require "footer.php"; ?>

<script>
    window.onscroll = function() {myFunction()};
    
    const navbar = document.getElementById("navbar");
    
    const sticky = navbar.offsetTop;
    
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