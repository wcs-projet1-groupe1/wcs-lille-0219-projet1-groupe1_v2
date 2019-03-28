<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicon-32.png" type="image/png">
  <link rel="icon" sizes="64x64" href="img/favicon-64.png" type="image/png">
  <link rel="icon" sizes="96x96" href="img/favicon-96.png" type="image/png">
  <title>Home</title>
</head>

<body>

<?php require "nav.php"; ?>

<div class="content">
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner container">
        <div class="carousel-item active">
          <img src="img/euratech.jpg" class="d-block w-100" alt="lille">
          <div class="carousel-caption d-none d-md-block">
            <h2 class=>Euratechnologies</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/ibm.jpg" class="d-block w-100" alt="lille2">
          <div class="carousel-caption d-none d-md-block">
            <h2>I.B.M</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/eurasanté.jpg" class="d-block w-100" alt="lille3">
          <div class="carousel-caption d-none d-md-block">
            <h2>Eurasanté</h2>
          </div>
        </div>
        
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon fleche" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon fleche" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
        <span class="sr-only">Next</span>
      </a>
    </div>          
</div>
<div class="container">
<blockquote class="blockquote">
    <br>
    <h1>Lille is French Tech :</h1>
    <br>
    <h3>EuraTechnologies totem of labeling "Lille is French Tech".</h3>
    <p>
      Launched in January 2014, the call for certification "Métropole French Tech" (originally "digital neighborhoods") is aimed at French cities who want to mobilize and federate local stakeholders around an ambitious project to grow their ecosystem , in order to make it in a few years a flagship and internationally recognized place for its entrepreneurial dynamism and to position France as a true "startup nation" with global reach. 
    </p>
    <br>
    <div id="text">
        <h3>Lille, a natural choice.</h3>
        <p>
        It is by its privileged geographical position in the heart of Europe between Paris, London, Brussels and Amsterdam, that the French Tech Lille takes all its dimension.<br>

        By imposing itself naturally as the gateway to northern Europe. This makes it the epicenter of a pool of 70 million inhabitants, located within a radius of 300 km, connected in less than 1h30 of high-speed train, based on one of the largest broadband networks in the world , placed at the center of a market representing a consumer potential of $ 1.5 trillion (Experian Study 2011).<br>
        
        This great collective mobilization for the digital influence of France finds a particular echo here. Characterized by the presence of an ecosystem already mature in the region with the presence of big names in digital such as IBM, OVH, Ankama and promising young companies like Adictiz, Clic and Walk, Giroptic ...<br>
        
        While relying on a network of iconic sites such as: EuraTechnologies, La Plaine Images, Louvre Lens Valley or la Serre Numérique ...<br>
        What makes the strength of this ecosystem is its youth, openness, creativity and daring, Lille French Tech invites you to discover that it is already ready to anchor in this dynamic of the future.
        </p>
        <br>
        <h3>Lille is also within it that beats the heart of La French Tech.</h3>
        <p>
        The entrepreneurial spirit that historically characterizes the metropolitan economy is measured the number of companies located on its territory - all activities combined 200 companies with more than 200 employees, 150 mid-size companies with high growth potential - but also annual number of creations and takeovers - 9,000 in 2012. The strength of Lille French Tech is its youth, 35% of its population under 25 years. A trained youth, representing 10% of French engineers trained, determined and full of ideas.<br>

        Lille French Tech is a collaborative and unifying project that is completely in the DNA of the FRENCH TECH cities. Indeed, the French Tech is the meeting of all the talents that make the digital in France. Entrepreneurs of course, but also all those who build digital dynamics in our country: investors, engineers, designers, marketers, researchers, students, associations, bloggers, public operators ...<br>
        
        The Lille metropolitan area and the Nord-Pas de Calais region, along with the metropolises of Calais, Lens-Liévin and Valenciennes, are fully involved in this dynamic, involving all digital players to build the plural metropolis of tomorrow thanks to digital energies
        </p>
    </div>
  <div class="btn-container row">
  <div class="col-4"></div>
  <button id="toggle" class="btn btn-read mb-2 col-4">Read More</button>
  </div>
  <div class="col-4"></div>

    <br>
    <footer class="blockquote-footer">Source from <cite title="Source Title">https://www.euratechnologies.com</cite></footer>
  </blockquote>
</div>
</div>

<?php require "footer.php"; ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>

</html>