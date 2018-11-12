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
      <a href="Home.html"><img src="css/images/logo.jpg" class="logo" alt="..."></a>
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
        <div style="clear: both;"></div>
        </select>
      </div>
    </div>
  </header>

<section>
  <div class="container">
   <div class="row">
     <div class="page-content default-template">
       <div class="col-md-8 col-sm-8">

       </div>
       <div class="col-md-4 col-sm-4">
<div class="screen-reader-responsive">
  <form action="/kontaktai/#wpcf7-f96-p20-o1" method="post" class="wpcf7-form" novalidate="novalidate">
  <div style="display: none;">
  <input type="hidden" name="vardas" value="96">
  <input type="hidden" name="Pavarde" value="4.9">
  </div>
  <p class="field">
      <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Jūsų vardas"></span> </p>
  <p class="field">
     <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Jūsų elektroninis paštas"></span> </p>
  <p class="field">
  <span class="wpcf7-form-control-wrap text-473"><input type="text" name="text-473" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Jūsų telefonas"></span>
  </p>
  <p class="field">
      <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Jūsų žinutė"></textarea></span> </p>
  <p class="submit-wrap"><input type="submit" value="Siųsti" class="wpcf7-form-control wpcf7-submit btn-primary"><span class="ajax-loader"></span></p>
  <div class="wpcf7-response-output wpcf7-display-none"></div></form>
</div>
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
          <a class="btn btn-primary" href="Apie mus.html" role="button">Apie mus</a>
          <a class="btn btn-primary" href="Paslaugos.html" role="button">Paslaugos</a>
          <a class="btn btn-primary" href="Kainos.html" role="button">Kainos</a>
          <a class="btn btn-primary" href="Kontaktai.php" role="button">Kontaktai</a>
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


include_once __DIR__."/dbconnection.php";

$getconnection = new DBConnection();
$conn = $getconnection->getConnection();
$conn->query("INSERT INTO `Animals`.`Animals` (`id`, `Vardas`, `Type`, `Name`, `Weight`, `Height`, `Action`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL);");
$db->getConnection()->close();



dbconnectionclass DBConnection
{
private $host = "localhost";
private $db = "Animals";
private $user = "root";
private $pass = "root";

private $connection;

public function __construct()
{
$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
}
public function getConnection()
{
return $this->connection;
}

}
?>