<?php
session_start();

function template_header($title) {

$login_link = isset($_SESSION['account_loggedin']) ? '<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>' : '<a href="login.php"><i class="fas fa-lock"></i>Login</a>';
$admin_link = isset($_SESSION['account_loggedin']) && $_SESSION['account_role'] == 'Admin' ? '<a href="admin/index.php" target="_blank"><i class="fas fa-cog"></i>Admin</a>' : '';
echo <<<EOT


<!DOCTYPE html>
<html>
	<head>
  <title>Co-op Process</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/style_main.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="container">
     <!-- Nav -->
     <div class="row">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="main.php"><img src="../../Images/logowhite.jpg" class="logo"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav mainMenu">
              <li>
                <a href="main.php" class="home">Home</a>
                <ul class="subMenu homeSubMenu">
                  <li><a href="career.php">Career Prep</a></li>
                  <li><a href="orientations.php">Co-op Orientation</a></li>
                  <li><a href="term.php">Co-op Term</a></li>
                  <li><a href="graduation.php">Graduation</a></li>
                </ul>
              </li>
              <li>
                <a href="docs.php" class="requiredDoc">Required Docs</a>
                <ul class="subMenu requiredSubMenu">
                  <li><a href="documents/dmshostagreement.pdf" download>Host Agreement</a></li>
                  <li>
                    <a href="documents/dmshostagreement.pdf" download>Performance Evaluation</a>
                  </li>
                  <li>
                    <a href="documents/dmsfinalreport.pdf" download>Final Report</a>
                  </li>
                </ul>
              </li>
              <li><a href="events.php">Events</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li>
                <a href="/resources.php" class="resources">Resources</a>
                <ul class="subMenu resourceSubMenu">
                  <li><a href="resume.php" >Resume</a></li>
                  <li><a href="coverLetter.php">Cover Letter</a></li>
                  <li><a href="interview.php">Interview</a></li>
                  <li><a href="jobSearch.php">Job Search</a></li>
                  <li><a href="linkedin.php">Linkedin</a></li>
                  <li><a href="portifolio.php">Portfolio</a></li>
                  <li><a href="https://talent-ciccc.ca/">Complete Your Talent Profile</a></li>
                </ul>
              </li>
              <li class="social"><a href="https://www.instagram.com/cicccvancouver/" target="_blank"
                  class="fa fa-instagram"></a>
              </li>
              <li class="social"><a href="https://www.facebook.com/cicccvancouver" target="_blank"
                  class="fa fa-facebook"></a></li>
              <li class="social"> <a
                  href="https://www.google.com/search?sxsrf=ALeKk02RabiqBJaqpEy1UfdJ-rsmKCta8w%3A1613597590693&source=hp&ei=lostYP2HJ4_O0PEPl6C_uAw&iflsig=AINFCbYAAAAAYC2ZpnHkSy3GxOzKcABbP0s9jLNL43FX&q=ciccc&oq=ciccc&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAgjECcyCgguEMcBEK8BECcyAggAMgIIADICCAAyAggAMgQIABBDMgQIABAKMgIIADoKCC4QxwEQrwEQQzoFCC4QkQI6CwguELEDEMcBEKMCOg4ILhCxAxCDARDHARCjAjoICAAQsQMQgwE6CwguEMcBEK8BEJECOggILhCxAxCDAToFCAAQkQI6CAgAELEDEJECOgQILhBDOggILhDHARCvAVDqBFj9CGDlDmgAcAB4AIAB1wGIAfQEkgEFMi4yLjGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwj9qs257_HuAhUPJzQIHRfQD8cQ4dUDCAk&uact=5"
                  target="_blank" class="fa fa-google"></a></li>
              <li class="social"><a href="mailto:coop.advisor@ciccc.ca" class="fa fa-envelope"></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
EOT;
}
// Template footer
function template_footer() {
echo <<<EOT

<div class="container">
      <div class="row">
        <div class="col-md-12">
          <footer class="text-center">
            <a href="#myPage" title="To Top">
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>&copy; 2021 ciccc.com Powered by CICCC</a> </p>
          </footer>
        </div>
      </div>
    </div>
    </body>
</html>
EOT;
}



?>
