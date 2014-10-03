<?php $page = isset($page) ? $page : ""; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>CustardLabs AS<?php echo $page ? " ~ " . $page : "" ?></title>
  <meta name="description" content="Oslo based IT company specialising in implementation and continuing support of web applications, in particular large membership administration platforms for organisations">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="PHP, Membership system, Membernet, Scoutnet, Min Speiding, Web development, utvikling, nettsider, medlemHTML, HTML5, CSS, JavaScript, medlemssystem, kontingent, medlemsystem,
                                 medlemsregister, medlemshåndtering, organisasjon, klubb, forbund, forening, krets, distrikt, register, club, society, sports, membership administration, CRM, consulting,
                                 support, norway, english, norwegian, norsk, svensk, nynorsk, lag, elephpant, angular, bootstrap, backbone">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/lifestream.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div id="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/"><span class="custard">Custard</span>Labs AS</a>

        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
            <li <?php echo $page == "home" ? "class='active'" : ""; ?>><a href="/" >Home</a></li>
            <li <?php echo $page == "about" ? "class='active'" : ""; ?>><a href="about">About us</a></li>
            <li <?php echo $page == "projects" ? "class='active'" : ""; ?>><a href="projects">Projects</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="jumbotron">
      <div class="container">
        <h1><span class="custard">Custard</span>Labs AS</h1>
        <p>Web application development and maintenance</p>
      </div>
    </div>