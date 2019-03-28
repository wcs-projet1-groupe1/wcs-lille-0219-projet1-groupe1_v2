<?php 
if($_POST){

    //mail
    $errors =array();

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $email=test_input($_POST["email"]);

    //validation
    if(empty($_POST['firstName'])) {
        $errors['firstName1']= "* your First name cannot be empty";
    }
    if(empty($_POST['lastName'])) {
        $errors['lastName1']= "* your Last name cannot be empty";
    }

    //mail

    if(empty($_POST['email'])) {
        $errors['email1']= "* your email cannot be empty";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email2']="* invalid email format";
        }
        if (!preg_match("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)){
            $errors['email2']="* invalid email format";
        }
        //pas besoin de !preg_match normalement filter_var suffit car techniquement '@h.f est une entré valide
      }
    //end mail

    if(empty($_POST['msg'])) {
        $errors['msg1']= "* Message cannot be empty";
    }

    if($_POST['sel'] === '0'){
        $errors['sel1']= "* you must select an option";
    }
    //check errors

    if(count($errors) == 0){
        //redirect to success page
        header("location: confirmation.php");
        exit();
    }

}
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="img/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="img/favicon-96.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact</title>
</head>

<body>

<?php require "nav.php"; ?>
<div class="content">

<h2 class="titre">Meet the dev team !</h2>
    <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <a href="https://www.linkedin.com/in/tiphaine-dussart-16a62598" target="_blank"><img src="https://i.imgur.com/jL9XsrL.png" alt="Tiphaine"  title="Tiphaine Caudrelier
                        tiphaineava@gmail.com" class="img_contact"/><i class="fas fa-plus"></i></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <a href="https://www.linkedin.com/in/benoit-lebacq-079495181/" target="_blank"><img src="https://i.imgur.com/RLWtEn5.png" alt="Benoît"  title="Benoît Lebacq
                lebacqbenoit@gmail.com" class="img_contact"/><i class="fas fa-plus"></i></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <a href="https://www.linkedin.com/in/axelle-adamkiewicz-65a85a180/" target="_blank"><img src="https://i.imgur.com/c6VfS5Y.png" alt="Axelle"  title="Axelle Adamkiewicz
                axelle.adamkiewicz@gmail.com" class="img_contact"/><i class="fas fa-plus"></i></a>
            </div>
        </div>
        </div>     
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <a href="https://www.facebook.com/samuel.freche" target="_blank"><img src="https://i.imgur.com/mpx5PDV.png" alt="Samuel" title="Samuel Freche
                    kejinfreche@gmail.com" class="img_contact"/><i class="fas fa-plus"></i></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <a href="https://www.linkedin.com/in/marine-saussé-a9b058168/" target="_blank"><img src="https://i.imgur.com/t8qOWIX.png" alt="Marine" title="Marine Sausse
                    saussemarine@gmail.com" class="img_contact"/><i class="fas fa-plus"></i></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                   <a href="https://www.linkedin.com/in/alexy-samyn-166649168" target="_blank"><img src="https://i.imgur.com/hUWFHVb.png" alt="Alexy" title="Alexy Samyn
                    alexy59430@gmail.com" class="img_contact"/><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <br>      
<div class="content">
<div class="container">
        <div id="contact" class="container">
                <h1>Contact Us</h1>
                <br>
                <form method="post" action="contact.php#contact">
                    <div class="form-group">
                        <label for="firstName">first Name :</label>
                        <input type="text" required title="insert you first name here" name="firstName" class="form-control" id="firstName" placeholder="Your First name" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];?>">
                        <h6><?php if(isset($errors['firstName1'])) echo $errors['firstName1']; ?></h6>
                    </div>
                    <div class="form-group">
                        <label for="lastName">last Name :</label>
                        <input type="text" title="insert your last name here" required name="lastName" class="form-control" id="lastName" placeholder="Your Last name"value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName'];?>">
                        <h6><?php if(isset($errors['lastName1'])) echo $errors['lastName1']; ?></h6>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>

                        <input type="email" required title="valid mail adress only" name="email" 
                        class="form-control" id="email" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$"
                        placeholder="Your Mail Adress"value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"
                        >
                        <h6><?php if(isset($errors['email1'])) echo $errors['email1']; ?></h6>
                        <h6><?php if(isset($errors['email2'])) echo $errors['email2']; ?></h6>
                    </div>
                    <!-- pattern pas obligatoire -->
                    
                    <div class="form-group">
                    <label for=sel>Object :</label>
                    <select id="sel" required title="please take an option" name="sel" class="form-control">
                            <option value="0" selected>Pick One...</option>
                            <option value="1">I have a question about your city.</option>
                            <option value="2">I want to know more about the jobs.</option>
                            <option value="3">I just want to comment something.</option>
                            <option value="4">I want to meet this amazing DevTeam !</option>
                            <option value="5">Everything else...</option>
                        </select>
                        <h6><?php if(isset($errors['sel1'])) echo $errors['sel1']; ?></h6>
                    </div>
                    <div class="form-group">
                    <label for="msg">Your Message :</label>
                    <textarea id="msg" required name="msg" class="form-control" rows="5" cols="120" placeholder="Tell us about your feelings." value="<?php if(isset($_POST['msg'])) echo $_POST['msg'];?>"></textarea>
                    <br>
                    <div class="container row">
                    <div class="col-4"></div>
                    <button type="submit" class="btn btn-primary mb-2 btnfo col-4">Submit</button>
                    </div>
                    <div class="col-4"></div>
                    <h6><?php if(isset($errors['msg1'])) echo $errors['msg1']; ?></h6>
                </div>
                </form>
            </div>
            <div class="gmap col-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.681106505239!2d3.017859951490843!3d50.633040581971606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d55c764ab439:0x2e9bfd5c48d283b!2sEuraTechnologies!5e0!3m2!1sfr!2sfr!4v1553761258922" width="205%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<br>
</div>
</div>
</div>



<?php require "footer.php"; ?>
</div>

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