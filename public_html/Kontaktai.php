<?php

if(isset($_REQUEST["action"]) &&  $_REQUEST["action"]=="send") {

    $name = $_REQUEST["name"];
    $email= $_REQUEST["email"];
    $message = $_REQUEST["message"];

    $to      = 'tautvisva@gmail.com';
    $subject = 'laiskas is puslapio';
    $message = $name."\n".$message."\n".$email;

    mail($to, $subject, $message);
}

?>

<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="lib/boostarp4/css/bootstrap.min.css">
  <!-- galimos klaidos -->
  <!-- blogas kelias iki failo -->
  <!-- "/" ne i ta puse -->
  <!-- neuzdarete ">" -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/master.css">
  <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
</head>

<body class="">
  <header class="virsausfoto">
    <div class="logotipas">
      <a href="index.html"><img src="css/images/logo.jpg" class="logo" alt="..."></a>
      <div class="float-right virsus sonas">
        <nav class="telmenu">

          <a class="navigator"><i class="fas fa-bars"></i></a>
          <ul>
            <li><a class="btn btn-primary" href="Apie mus.html" role="button">Apie mus</a></li>
            <li><a class="btn btn-primary" href="Paslaugos.html" role="button">Paslaugos</a></li>
            <li><a class="btn btn-primary" href="Partneriai.html" role="button">Partneriai</a></li>
            <li><a class="btn btn-primary" href="Kainos.html" role="button">Kainos</a></li>
            <li><a class="btn btn-primary" href="Naujienos.html" role="button">Naujienos</a></li>
            <li><a class="btn btn-primary" href="Kontaktai.php" role="button">Kontaktai</a></li>
          </ul>
        </nav>
        <div style="clear: both"></div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
     <div class="row" >
       <div>
         <div>

           <div class="col-md-12 col-md-offset-3" id="form_container">
           <h2>Susisiektite</h2>
           <form role="form" method="post" action="Kontaktai.php?action=send">

               <div class="row">
                   <div class="col-sm-12 form-group">
                       <label for="message">
                           Jusu zinute</label>
                       <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                   </div>
               </div>
               <div class="row">
                   <div class="col-sm-6 form-group">
                       <label for="name">
                           Jusu vardas</label>
                       <input type="text" class="form-control" id="name" name="name" required="">
                   </div>
                   <div class="col-sm-6 form-group">
                       <label for="email">
                           @Email.lt</label>
                       <input type="email" class="form-control" id="email" name="email" required="">
                   </div>
               </div>


               <div class="row">
                   <div class="col-sm-12 form-group">
                       <button type="submit" class="btn btn-primary btn-default pull-right">Siusti →</button>
                   </div>
               </div>

           </form>
           <div id="success_message" style="width:100%; height:100%; display:none; ">
               <h3>Jusu zinute issiusta sekmingai!</h3>
           </div>
           <div id="error_message" style="width:100%; height:100%; display:none; ">
                       <h3>Error</h3>
                       Sorry there was an error sending your form.

           </div>
       </div>
      </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="apaciosfoto">
      <div class="apaciostextas">
        <div class="apaciosbuttonai">
          <nav class="telmenu">

            <a class="navigator"><i class="fas fa-bars"></i></a>
            <ul>
              <li><a class="btn btn-primary" href="Apie mus.html" role="button">Apie mus</a></li>
              <li><a class="btn btn-primary" href="Paslaugos.html" role="button">Paslaugos</a></li>
              <li><a class="btn btn-primary" href="Kainos.html" role="button">Kainos</a></li>
              <li><a class="btn btn-primary" href="Kontaktai.php" role="button">Kontaktai</a></li>
            </ul>
          </nav>
        </div>
        <h3 class="h3tekstas">&copy 2019 Geriausias atsakymas Jūsų finansų sprendimams</h3>
      </div>
    </div>
    <!-- mano js failas visada zemiausias -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"> </script>
</body>

</html>
