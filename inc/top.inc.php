<?php #page specific processing
    $raw = explode('.', basename( $_SERVER['SCRIPT_FILENAME'] ) );
    $page = $raw[0];
 ?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Satang Banja">
    <link rel="" href="">


    <title><?php echo ucwords($page).' | '; ?>ROSOR</title>

    <!-- Assets imported -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper">

      <div class="contents inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index.php" id="rosor">ROSOR</a></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="<?php echo ($page == 'home')? 'active' : '' ?>"><a href="home.php">Home</a></li>
                  <li class="<?php echo ($page == 'menu')? 'active' : '' ?>"><a href="menu.php">Menu</a></li>
                  <li class="<?php echo ($page == 'reservation')? 'active' : '' ?>"><a href="reservation.php">Reservations</a></li>
                  <li class="<?php echo ($page == 'feedback')? 'active' : '' ?>"><a href="feedback.php">Feedback</a></li>
                  <li class="<?php echo ($page == 'contact')? 'active' : '' ?>"><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="content">