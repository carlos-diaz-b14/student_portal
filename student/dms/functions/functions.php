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
                  <li><a href="../documents/dmshostagreement.pdf" download>Host Agreement</a></li>
                  <li>
                    <a href="../documents/dmshostagreement.pdf" download>Performance Evaluation</a>
                  </li>
                  <li>
                    <a href="../documents/dmsfinalreport.pdf" download>Final Report</a>
                  </li>
                </ul>
              </li>
              <li><a href="events.php">Events</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li>
                <a href="resources/resources.php" class="resources">Resources</a>
                <ul class="subMenu resourceSubMenu">
                  <li><a href="resources/resume.php" >Resume</a></li>
                  <li><a href="resources/coverLetter.php">Cover Letter</a></li>
                  <li><a href="resources/interview.php">Interview</a></li>
                  <li><a href="resources/jobSearch.php">Job Search</a></li>
                  <li><a href="resources/linkedin.php">Linkedin</a></li>
                  <li><a href="resources/porfolio.php">Portfolio</a></li>
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

function mainpage() {
echo <<<EOT

  <div class="container-fluid">
    <div class="row ">
      <div class="col-md-12 paddingNone">
        <div class="banner coopProcess carrer"> 
          <div class="overlay">
            <h1>Welcome, DMS Students!</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row learnAbout ">
      <div class="col-md-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <div class="image1 image marginImage">
                <img src="../../Images/bgImage2.jpg" class="img-responsive" alt="" />
              </div>
            </div>
            <div class="col-md-7">
              <div class="image image2">
                <img src="../../Images/bgImage3.jpg" class="img-responsive" alt="" />
              </div>
              <div class="image1 image marginLeft20px">
                <img src="../../Images/bgImage4.jpg" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-offset-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 paddingNone">
              <h1>Learn About Co-op Process</h1>
            </div>
          </div>
          <div class="row">
            <p>Cooperative education is a structured method of combining classroom-based education with practical work experience. A cooperative education experience, commonly known as a “co-op”, provides academic credit for structured job experience.</p>
            <p>
              Successful co-ops start with preparation at the beginning of your academic studies leading up to your
              co-op placement term. In order to maximize your success, we broke down the co-op process into four
              modules: Career Prep, Co-op Orientation, Co-op Term, and Graduation.</p>
            <p>
              Try to take each module step-by-step, and don’t get overwhelmed by trying to complete all the steps at
              once. Each module indicates when you should focus on each area. Once you click “Get Started” you
              will see
              the recommended steps to complete each module that will ultimately help you prepare for your
              co-op,
              and successfully land your co-op placement.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="sectionTimeline">
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="timeline">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="content_timeline marginContent left coopOrientation">
                    <div class="point pointLeft">
                      <div class="pointInside"></div>
                    </div>
                    <h2>Co-op Orientation</h2>
                    <h4>Prior to your co-op start date<br> Month 4 - 6</h4>
                    <p>Co-op Orientation is the second module in the co-op process. Here you will learn about the co-op
                      requirements, including documentation, along with how to search for a job, and ultimately have a
                      successful interview once an employer calls you for an interview.</p>
                    <a href="orientations.php"> <button class="btn">Get Started</button></a>
                  </div>
                  <div class="content_timeline marginContent left graduation">
                    <div class="point pointLeft">
                      <div class="pointInside"></div>
                    </div>
                    <h2>Graduation</h2>
                    <h4>1 month prior to your co-op end date <br> Month 12</h4>
                    <p>Graduation is the fourth and final module in the co-op process. Here you will learn about the
                      documents
                      required at the end of your co-op, proper submissions, and when you can expect to receive your
                      diploma.
                    </p>
                    <a href="graduation.php"><button class="btn">Get Started</button></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="content_timeline right careerPrep">
                    <div class="point pointRight firstPointer">
                      <div class="pointInside"></div>
                    </div>
                    <h2>Career Prep</h2>
                    <h4>During your academic studies<br> Month 1 - 3</h4>
                    <p>Career prep is the first module in the co-op process. Here you will learn about resources at the
                      college,
                      gaining your initial marketing experiences, and building your career resources such as a resume
                      and
                      cover
                      letter that will get noticed by an employer.</p>
                    <a href="career.php"><button class="btn">Get Started</button></a>
                  </div>
                  <div class="content_timeline right marginContent coopTerm">
                    <div class="point pointRight ">
                      <div class="pointInside"></div>
                    </div>
                    <h2>Co-op Term</h2>
                    <h4>During your co-op period <br> Month 7 +</h4>
                    <p>Co-op Term is the third module in the co-op process. Here you will be reminded of the documents
                      required at
                      the beginning of your co-op term and the support available during your co-op period.</p>
                    <a href="term.php"><button class="btn">Get Started</button></a>
                    <div class="point pointRight lastPoint">
                      <div class="pointInside"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="Coop_advisor">
    <div class="container">
      <div class="row ">
        <!-- Container (About Section) -->
        <div class="row">
          <div class="col-md-12">
            <h1 class="marginBottom40px">Our Team</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="picture">
              <span><img src="../../Images/fernanda1.png" class="jess"></span><br>
              <h5 class="name">Fernanda Ave</h5>
              <p class="description">Head of Tech Programs</p>
              <a href="mailto:someone@example.com" class="emailProfile titleCorrect">head.tech@ciccc.ca</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="picture">
              <span><img src="../../Images/paula_portrait.png" class="jess"></span><br>
              <h5 class="name">Paula </h5>
              <p class="description">DMS Co-op Coordinator</p>
              <a href="mailto:dms.coordinator@ciccc.ca" class="emailProfile">dms.coordinator@ciccc.ca</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="picture">
              <span><img src="../../Images/javier.jpg" class="jess"></span><br>
              <h5 class="name">Javier</h5>
              <p class="description">DMS Program Coordinator</p>
              <a href="mailto:coop.advisor@ciccc.ca" class="emailProfile">coop.advisor@ciccc.ca</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="picture">
              <span><img src="../../Images/bruno1.jpg" class="jess"></span><br>
              <h5 class="name">Bruno</h5>
              <p class="description">Co-op Assistant</p>
              <a href="mailto:tech@talent-ciccc.ca" class="emailProfile">tech@talent-ciccc.ca</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
EOT;
}


function career() {
echo <<<EOT

<section class="banner careerPrepar">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Career Prep</h1>
            <p>Career prep is the first module in the co-op process. Here you will learn about resources at the college,
              gaining your initial marketing experiences, and building your career resources such as a resume and
              cover letter that will get noticed by an employer.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgProgressBar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Progress</h3>
          <div class="progress">
            <div class="progress-bar carrerPage" role="progressbar" aria-valuenow="80" aria-valuemin="0"
              aria-valuemax="100">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="main.php"> <button class="btn marginTop57Negative goBack">Go Back to Home</button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <ul class="listQuestions">
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Attend DMS Orientation</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer1" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer1">
                      Planning for your co-op starts during your academic studies, which is why we want to connect with
                      you
                      at the beginning of your program, so you have all of the information upfront.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Join Slack Co-op Channels</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer2" name="box2" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer2">
                      The <a href="https://slack.com/intl/en-ca/">Slack</a> messaging app connects you, other students
                      and staff, and is used to update you about job
                      opportunities, events, and other important information. Messages from the co-op department are
                      sent
                      via #job-board #career-services #events.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Read Co-op Intro E-mail</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer3" name="box3" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer3">
                      Carefully read this e-mail sent to you during the first week of classes; it contains essential
                      information
                      about policies, regulations, and resources for your co-op.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Login to the Co-op Portal</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer4" name="box4" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer4">
                      This portal is the ultimate resource hub where you learn about the co-op process, documentation,
                      events, and career tips that will guide you towards a successful co-op.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Watch a Career Talk Series</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer5" name="box5" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer5">
                      The <a href="events.html" target="_blank">Career Talk Series</a> provides professional development in the most critical career areas,
                      including
                      resumes, cover letters, LinkedIn, portfolios, interviewing, etc. You can expect to attend a
                      30-minute
                      session once per week until all talks are complete.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Start Building Your Career Portfolio</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer6" name="box6" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer6">
                      Build your career portfolio that will showcase your experiences and land you the job you want in
                      the
                      Canadian job market. Your career portfolio should consist of four items:
                    </label>
                    <ul class="resourceStyle">
                      <li>
                        <a href="resume.html" target="_blank">Resume</a>
                      </li>
                      <li>
                        <a href="coverLetter.html" target="_blank">Cover Letter</a>
                      </li>
                      <li>
                        <a href="linkedin.html" target="_blank">LinkedIn profile</a>
                      </li>
                      <li>
                        <a href="portifolio.html" target="_blank">Portfolio</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Build Experience In-and-out of the Classroom</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputCarrer7" name="box7" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputCarrer7">
                      The key to finding a job in a competitive market is standing out in a crowd. Plan to maximize your
                      digital marketing experiences during your academic studies by participating in-class projects,
                      non-profit
                      volunteer opportunities, mentorships (
                        <a href="https://app.acadium.com/signup/student" target="_blank">Acadium</a> , <a href="https://www.latincouver.ca/" target="_blank">Latincouver</a> , <a href="https://www.beeznests.com/" target="_blank">Beeznests</a> ), or even freelance projects for
                      small businesses.
                    </label>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="bgImages">
          <div class="col-md-7">
            <div class="bg-hands">
              <img src="../../Images/hands.jpg" class="hands img-responsive" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
EOT;
}


function orientations() {
echo <<<EOT

<section class="banner orientation">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Co-op Orientations</h1>
            <p>Co-op Orientation is the second module in the co-op process. Here you will learn about the co-op
              requirements, including documentation, along with how to search for a job, and ultimately have a
              successful interview once an employer calls you for an interview.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="bgProgressBar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Progress</h3>
          <div class="progress">
            <div class="progress-bar orientationPage" role="progressbar" aria-valuenow="80" aria-valuemin="0"
              aria-valuemax="100">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="main.php"> <button class="btn marginTop57Negative goBack">Go back to Home</button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <ul class="listQuestions">
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Attend DMS Orientation</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation1" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation1">
                      A Co-op Orientation session will equip you with knowledge about your co-op requirements and
                      documentation needed to graduate. This will be scheduled with your instructor in-classWork Experience
                      approximately
                      halfway through your academic studies. You will receive a notication via e-mail about the
                      mandatory
                      session when it gets closer.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Read Work Experience Policy (T&Cs)</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation2" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation2">
                      Following the Co-op Orientation session, you will receive an e-mail about the <a href="documents/Co-opWorkExperiencePolicyTech.pdf" download>Work
                        Experience Policy</a>
                      for your co-op. You must read the document and agree to the terms prior to beginning your co-op.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Book an Appointment with a Co-op Advisor</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation3" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation3">
                     <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-04"> Book an appointment</a>  with a Co-op Advisor to discuss your co-op goals and review your complete
                      career portfolio.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Complete a Talent CiCCC Portfolio</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation4" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation4">
                      Record your talent in the  <a href="https://talent-ciccc.ca/" target="_blank">Talent CICCC</a> platform to showcase your experience and skills to our
                      partner
                      organizations seeking to hire from CICCC.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Attend Job Fairs & Networking Events</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation5" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation5">
                      Most jobs are found through the "hidden" market (jobs not formally advertised). Use your network
                      and
                      connections to find employment in your field. You can find local events on <a href="https://www.eventbrite.ca/" target="_blank">Eventbrite.ca</a>, <a href="https://www.meetup.com/" target="_blank">MeetUp.com</a>,
                      and CICCC's <a href="events.php" target="_blank">Tech & Career Events</a>.
                      
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Apply for Jobs</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation6" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation6">
                      There are a variety of ways to do <a href="resources/jobsearch.php" target="_blank">job searching</a> for your co-op placement. Set a goal of applying
                      to at
                      least 5-10 jobs per day, as finding a co-op can take up to 6-12 weeks (or more), on average.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Start Interviewing</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputOrientation7" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputOrientation7">
                      The secret to a successful <a href="resources/interview.php" target="_blank">interview</a> is preparation. Research the company in advance and make a
                      list of
                      your relevant experiences. You can even <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-04" target="_blank">book a mock interview </a> with a Co-op Advisor to practice if
                      needed.
                    </label>
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>
        <div class="bgImages">
          <div class="col-md-7">
            <div class="bg-hands">
              <img src="../../Images/studentMatch.png" class="hands img-responsive" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

EOT;
}

function term() {
echo <<<EOT

  <section class="banner termBanner">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Co-op Term</h1>
            <p>Co-op Term is the third module in the co-op process. <br>Here you will be reminded of the documents
              required at the beginning of your co-op term and the support available during your co-op period.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="bgProgressBar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Progress</h3>
          <div class="progress">
            <div class="progress-bar termPage" role="progressbar" aria-valuenow="80" aria-valuemin="0"
              aria-valuemax="100">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="main.php"> <button class="btn marginTop57Negative goBack">Go Back to Home</button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <ul class="listQuestions">
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Start Working in Your Co-op Placement</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputTerm1" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputTerm1">
                      We are here to provide support during your co-op placement. If anything changes with your co-op
                      placement, please reach out to us, including changes to your contact information, struggling to
                      find a
                      job, switching jobs, etc. We also want to hear about your good news and achievements too!
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Submit Host Agreement</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputTerm2" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputTerm2">
                      You and your employer must complete the <a href="docs.html" target="_blank">Host Agreement</a>
                      within the first week of starting work
                      during your co-op period. Each employer used for your co-op hours should <a
                        href="documents/dmshostagreement.pdf" download> complete a Host Agreement</a></a>.
                      Submit this document on <a href="https://ciccc.classe365.com/" target="_blank">Classe365</a> once
                      complete.

                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Work 480 Hours</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputTerm3" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputTerm3">
                      Once you reach 480 hours, you can choose to graduate or continue working. Any hours worked over
                      the required hours are counted as “independent of the co-op.” You are legally allowed to work up
                      to 40
                      hours per week until your co-op end date. If you reach your co-op hours early and would like to
                      graduate, please let a <a href="https://calendly.com/tech-coop-questions/co-op-documentation-questions" target="_blank">Co-op Assistant</a> know.
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Request an Extension, if Needed</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputTerm4" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputTerm4">
                      You may be eligible for a co-op extension if you cannot reach the required hours within your co-op
                      period. You can receive an extension up to 25% of your co-op program length, which is six
                      additional
                      weeks, if there is extra time on your permits. Please reach out to a <a href="https://calendly.com/tech-coop-questions/co-op-documentation-questions" target="_blank">Co-op Assistant</a>  for more
                      information.
                    </label>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="bgImages">
          <div class="col-md-7">
            <div class="bg-hands">
              <img src="../../Images/bg56.jpg" class="hands img-responsive" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

EOT;
}


function graduation() {
echo <<<EOT

  <section class="banner graduationBanner">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Graduation</h1>
            <p>Graduation is the fourth and final module in the co-op process.<br> Here you will learn about the
              documents required at the end of your co-op, proper submissions, and when you can expect to receive your
              diploma.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="bgProgressBar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Progress</h3>
          <div class="progress">
            <div class="progress-bar graduationPage" role="progressbar" aria-valuenow="80" aria-valuemin="0"
              aria-valuemax="100">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="main.php"> <button class="btn marginTop57Negative goBack">Go Back to Home</button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <ul class="listQuestions">
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Submit Performance Evaluation</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="box1" name="inputGraduation1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputGraduation1">
                      The <a href="docs.php" target="_blank">Performance Evaluation</a> is completed by your employer
                      at the end of your co-op, at least one
                      week before your co-op end date. Each employer used for your co-op hours should <a
                        href="documents/dmsfinalreport" download>complete a
                        Performance Evaluation</a>. Submit this document on <a href="https://www.classe365.com/"
                        target="_blank">Classe365</a> once complete.

                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Submit Final Report</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputGraduation2" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputGraduation2">
                      <p>The <a href="resources/resources.php" target="_blank">Final Report</a> is completed by you at the end of
                        your co-op, at least one week before your co-op end date. Learn about the <a
                          href="documents/dmsfinalreport.pdf" target="_blank" download>requirements for the Final
                          Report</a> Submit this document on <a href="https://www.classe365.com/"
                          target="_blank">Classe365</a> once complete.</p>

                    </label>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container-fluid paddingNone">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Graduate</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <input type="checkbox" id="inputGraduation3" name="box1" class="trigger" />
                  </div>
                  <div class="col-md-11">
                    <label for="inputGraduation3">
                      Your diploma will be sent via e-mail from the Admission's Office approximately 2-3 weeks after
                      your co-op end date. Any questions? Contact a <a href="https://calendly.com/tech-coop-questions/co-op-documentation-questions" target="_blank">Co-op Assistant</a> for more information.
                    </label>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="bgImages">
          <div class="col-md-7">
            <div class="bg-hands">
              <img src="../../Images/back1.jpg" class="hands img-responsive" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

EOT;
}
function docs() {
echo <<<EOT
<section class="banner requiredDocBanner">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Required Docs</h1>
            <p>You must submit three required documents in Classe365 to complete your course and receive your
              diploma. Without these documents, you will not be able to graduate.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="containerDocuments">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="documentsContainer">
            <div class="boxDocuments">
              <h1>Host Agreement</h1>
              <div class="bgNumbers">
                <img src="../../Images/docHost.jpg" data-toggle="modal" data-target="#hostAgreement"/>
              </div>
            </div>
            <p> <span class="step">Step 1:</span>The document your employer completes at the begnning of your placement agreeing to host you for your
              co-op.
              <p class="textDetails"> Submit within 1 week of starting work.</p>
            </p>
            <a href="../documents/dmshostagreement.pdf" download="" class="btn downloadDocuments">Download</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="documentsContainer">
            <div class="boxDocuments">
              <h1>Performance Evaluation</h1>
              <div class="bgNumbers">
                <img src="../../Images/docPerformace.jpg" data-toggle="modal" data-target="#performanceEvaluation"/>
              </div>
            </div>
            <p> <span class="step">Step 2:</span> The document your employer completes at the end of your placement evaluating your performance on the job.
              <p class="textDetails"> Submit at least 1 week prior to your co-op and date.</p>
            </p>
            <a href="../documents/dmshostagreement.pdf" download="" class="btn downloadDocuments">Download</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="documentsContainer">
            <div class="boxDocuments">
              <h1>Final Report</h1>
              <div class="bgNumbers">
                <img src="../../Images/docFinalReport.jpg" data-toggle="modal" data-target="#finalReport">
              </div>
            </div>
            <p> <span class="step">Step 3:</span>The report you write at the end of your co-op placement highlighting what you did and what you learned.
              <p class="textDetails"> Submit at least 1 week prior to your co-op end date.</p>
            </p>
            <a href="../documents/dmsfinalreport.pdf" download class="btn downloadDocuments">Download</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="submitDocuments">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="submitDocs">
            <h1>Submitting Documents</h1>
            <p>Upload your co-op documents to your Learning Management System in Classe365 when complete.</p>
            <div class="embedVideo">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://ttprivatenew.s3.amazonaws.com/pulse/coop-ciccc/attachments/12150045/TinyTake19-12-2019-10-45-07.mp4" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="Coop_advisor student_advisor">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="picture">
            <span><img src="../../Images/bruno.jpg" class="jess"></span><br>
            <h5 class="name">Bruno</h5>
            <p class="description">DMS Co-op Assistant</p>
          </div>
        </div>
        <div class="col-md-8 ">
          <h1 class="contactTitle">Contact Co-op Assistant</h1>
          <p class="contactTitle">Send a message below for more information regarding co-op requirements and documentation.</p>
          <form method="post" action="contact-form-process1.php" class="formContact">
            <div class="col-sm-12 paddingNone">
              <div class="row">
                <div class="col-sm-6 form-group paddingNone">
                  <input class="form-control" id="name" name="Name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="Email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-12 paddingNone">
                  <textarea class="form-control " id="comments" name="Message" placeholder="Message"
                    rows="5"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-default pull-right contactButton" type="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <section>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="hostAgreement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Host Agreement Document</h4>
      </div>
      <div class="modal-body">
        <img src="../../Images/docHost.jpg" class="img-responsive" />
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="performanceEvaluation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Performance Evaluation Document</h4>
      </div>
      <div class="modal-body">
        <img src="../../Images/docPerformace.jpg" class="img-responsive" />
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="finalReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Final Report Document</h4>
      </div>
      <div class="modal-body">
        <img src="../../Images/docFinalReport.jpg" class="img-responsive" />
      </div>
    </div>
  </div>
</div>
  </section>

EOT;
}

function events() {
echo <<<EOT
<section class="banner eventBanner">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1> Events</h1>
            <p>Most jobs are found through the hidden job market, which is your network - it’s all about who you know! You must start building relationships with people in the industry you want to work in right away, which will ultimately help you land a co-op placement. Enjoy our internal and external events to build your network and get more experience.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row ">
      <div class="col-md-12 paddingNone">
        <div class=>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="maps">
          <iframe
            src="https://calendar.google.com/calendar/embed?src=o96gl54m4pdskfda5dm8pmvcjs%40group.calendar.google.com&ctz=America%2FVancouver"
            style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </div>
  </div>

EOT;
}
function faq() {
echo <<<EOT
<section class="banner  bgFaq">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1> Co-op FAQs</h1>
            <p>Below are the most frequently asked questions (FAQs) about the co-op program. Read each question carefully as you will find most of the answers to your questions on this page. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="questions">
    <div class="container">
      <div class="row learnAbout ">
        <div class="staticContainer">
          <div class="col-md-5 staticContainer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <h1>The co-op</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p>Cooperative education is a structured method of combining classroom-based education with practical
                    work experience. A cooperative education experience, commonly known as a “co-op”, provides academic
                    credit for structured job experience. </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="buttonsFaq">
                    <li class="triggercu active" data-name="dmsFaq" id="dmsFaq">
                      General Questions
                    </li>
                    <li class="triggercu" data-name="wmadFaq" id="wmadFaq">
                      Questions by Category
                    </li>
                    <li class="listSub">
                      <ul class="subSectionsQuestions active">
                        <li>
                          <a href="#Co-workTerm">Co-op Work Term</a>
                        </li>
                        <li>
                          <a href="#Co-opHours">Co-op Hours</a>
                        </li>
                        <li>
                          <a href="#Co-opPositions">Co-op Positions</a>
                        </li>
                        <li>
                          <a href="#Co-requiredDocumentation">Co-op Required Documentation</a>
                        </li>
                        <li>
                          <a href="#Visas&Permits">Visas & Permits</a>
                        </li>
                        <li>
                          <a href="#coopExtensions">Co-op Extensions</a>
                        </li>
                        <li>
                          <a href="#coopGradutation">Co-op End & Graduation</a>
                        </li>
                        <li>
                          <a href="#DualDiplomaPrograms">Dual Diploma Programs
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="containerQuestions">
            <div class="questionDMSRaphael">
              <h4>General Questions</h4>
              <ul class="faq">
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion1" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How long is the co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion1">
                    <div class="card card-body anwserQuestion">
                      Students must complete 480 co-op hours within a 6 month designated co-op period.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion2" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      When does it start? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="dmsQuestion2">
                    <div class="card card-body anwserQuestion">
                      <p>Co-ops start after completion of your academic studies.&nbsp;</p>
                      <p>Each co-op has a designated start and end date depending on when your academic
                        studies began at Cornerstone. For example:</p>
                      <p class="boldText">Scenario #1:</p>
                      <ul>
                        <li>Academic Start Date: January 2020</li>
                        <li>Coop Start Date: July 2020</li>
                        <li>Co-op End date: December 2020</li>
                      </ul>
                      <p class="boldText">Scenario #2:</p>
                      <ul>
                        <li>Academic Start Date: April 2020</li>
                        <li>Coop Start Date: October 2020</li>
                        <li>Co-op End date: March 2020</li>
                      </ul>
                      <p class="boldText">Scenario #3:</p>
                      <ul>
                        <li>Academic Start Date: July 2020</li>
                        <li>Coop Start Date: January 2021</li>
                        <li>Co-op End date: June 2021</li>
                      </ul>
                      <p class="boldText">Scenario #3:</p>
                      <p class="">Scenario #4:</p>
                      <ul>
                        <li>Academic Start Date: September 2020</li>
                        <li>Coop Start Date: March 2021</li>
                        <li>Co-op End date: August 2021</li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion3" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How many hours per week do I need to spend at work? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion3">
                    <div class="card card-body anwserQuestion">
                      <p>A student pursuing a DMS diploma must reach a total of 480 hours within 6 months of
                        their co-op start date to graduate. The priority is the number of hours rather than
                        the number of weeks/months you are employed. </p>
                      <p>For example, if you are employed at the beginning of your co-op period you would
                        need
                        to work an average of 20 hours per week. If your co-op is delayed you may need to
                        work
                        more hours per week. It is highly suggested that you find work by the start of your
                        co-op period.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion4" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What do I need in order to start my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="dmsQuestion4">
                    <div class="card card-body anwserQuestion">
                      <p>In order to begin the co-op period, you must have:
                      </p>
                      <ul>
                        <li>Study and work permits</li>
                        <li>Social Insurance Number (SIN)</li>
                        <li>All fees paid to CICCC</li>
                        <li>Class attendance of 80%+</li>
                        <li>Grade average of 70%+</li>
                      </ul>

                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion5" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Who do I need to contact if I need more information about co-op? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="dmsQuestion5">
                    <div class="card card-body anwserQuestion">
                      <p>We are passionate about delivering exceptional Career Services as we help students
                        find a co-op to achieve their goals. For more information, please contact a Co-op
                        Advisor by emailing or visiting us on campus.</p>
                      <p class="boldText">CICCC Tech Campus</p>
                      <p>
                        816 Granville St. </br>
                        Vancouver, BC V6Z 1K3 </br>
                        4th floor (Microsoft Room)
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion6" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      I am already working, can I use the same company for my co-op? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion6">
                    <div class="card card-body anwserQuestion">
                      Yes, but only if the job is demonstrably connected to your program of studies.
                      All co-op hours must be completed between the designated co-op start and end dates.
                      Hours completed before or after those dates will not count.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion7" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Do I get paid during the co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion7">
                    <div class="card card-body anwserQuestion">
                      <p>Yes, you should find a co-op placement that is paid. </p>

                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion8" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How much do I get paid? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion8">
                    <div class="card card-body anwserQuestion">
                      <p>The amount of pay depends on the position. An entry-level position in Digital
                        Marketing pays on average $14-18 CAD per hour. Students will have a higher earning
                        potential as they gain more experience in their chosen field.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion9" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Is it easy to find a job in Canada <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion9">
                    <div class="card card-body anwserQuestion">
                      <p>It is always challenging to find a job in a competitive environment but those who
                        make a solid effort usually find a job in Canada. Persistence and dedication are key
                        characteristics in student success rates. Workshops and one-on-one coaching are
                        provided by Career Services at Cornerstone offering students further resources and
                        guidance on their job search. </p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion10" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What can I do during my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion10">
                    <div class="card card-body anwserQuestion">
                      <p>There are a range of acceptable co-op positions for DMS students. <span
                          class="boldText">Students should search for a job title/description that has
                          responsibilities that are demonstrably connected to the student’s course
                          content/program of study.</span> Even hybrid positions that have a mixture of
                        related and unrelated responsibilities can be acceptable. For example, a Digital
                        Marketing student can work as an Office Assistant who helps create marketing
                        materials
                        and updates the company website.</p>
                      <p>The majority of placements will take place in Vancouver, but positions all across
                        Canada or even other countries (with permission) will be accepted. Remote work,
                        contract work, and freelance work may be accepted upon approval from a Career
                        Advisor.
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion11" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How can Career Services help me find a co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="dmsQuestion11">
                    <div class="card card-body anwserQuestion">
                      <p>Career Services can provide you with resources to position yourself as an
                        attractive
                        candidate to employers. Most students know that Career Services can help with resume
                        and cover letter editing, but did you know Career Services also provides many other
                        resources including, but not limited to: </p>
                      <ul>
                        <li>External events happening in Vancouver’s tech and marketing scene</li>
                        <li>
                          Weekly or bi-weekly career workshops (resumes, cover letters, LinkedIn,
                          portfolios,
                          technical interviews, job search tips, networking, etc.)
                        </li>
                        <li>Mock interviews</li>
                        <li>Presentations by startup companies</li>
                        <li>Job boards in Slack workspaces</li>
                        <li>Guest speakers</li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion12" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I continue working after my co-op end date, until my permits expire? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion12">
                    <div class="card card-body anwserQuestion">

                      <p>No</p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion13" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I work full-time for my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion13">
                    <div class="card card-body anwserQuestion">
                      <p>Yes, you can work up to a maximum of 40 hours per week during your co-op period.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion50" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      If I work full-time, can i finish my co-op early? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion50">
                    <div class="card card-body anwserQuestion">
                      <p>Yes, however, study and work permits are only valid while you are an enrolled and
                        active student. After graduating, you cannot continue working using CICCC’s permits.
                        Students who work full-time will never be forced to graduate before their designated
                        co-op end date.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion15" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I extend my co-op period? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="dmsQuestion15">
                    <div class="card card-body anwserQuestion">
                      <p>Students can request a one-time extension of 25% the length of the co-op for a $300
                        fee. The extension is not guaranteed. If you are considering an extension please
                        contact your advisor for more information.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#dmsQuestion16" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What documents do I need in order to complete my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="dmsQuestion16">
                    <div class="card card-body anwserQuestion">
                      <p>All co-op documents must be completed correctly & submitted online in order for the
                        student to graduate.</p>
                      <ul>
                        <li>1. <span class="boldText">Host Agreement </span> – This document is submitted at
                          the beginning of the student’s placement and must be completed with a supervisor
                          or
                          manager.</li>
                        <li>2. <span class="boldText">Performance Evaluation</span> – This document must be
                          submitted when a student is leaving a job, either at the end of their co-op period
                          or for any other reason (e.g. switching jobs, ending a temporary contract, if they
                          are let go).</li>
                        <li>3. <span class="boldText">Final Report</span>– A report where students will
                          write
                          about the company they worked at, their job, and what they learned during the
                          co-op
                          period.</li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="questionGeneralRaphael">
              <ul class="faq">
                <li class="nameGroupQuestion" id="Co-workTerm">
                  Co-op Work Term
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion1" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How long is my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion1">
                    <div class="card card-body anwserQuestion">
                      The Digital Marketing Specialist program requires that you reach 480 co-op hours within 6 months.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion2" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How do I know the dates of my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion2">
                    <div class="card card-body anwserQuestion">
                      A student’s co-op dates can be found on their student enrollment contract or by logging into their
                      profile on Classe365.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion3" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I work the entire duration of my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion3">
                    <div class="card card-body anwserQuestion">
                      Yes. Please check your co-op start and end dates.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion4" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Does my co-op job have to be relevant to my diploma? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion4">
                    <div class="card card-body anwserQuestion">
                      We encourage 100% relevancy. However, reality is that many jobs don’t have clear definitions. 50%
                      of your job duties should be relevant to your diploma. If you are doing dual diploma programs, the
                      best choice is to find a job that encompasses both sets of professional skills.

                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion5" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Does my co-op need to be paid? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion5">
                    <div class="card card-body anwserQuestion">
                      Yes! Your coop must be paid at least minimum wage. Volunteer work cannot be counted towards coop
                      hours.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion6" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What if I don’t have a job when I start my co-op period? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion6">
                    <div class="card card-body anwserQuestion">
                      Students struggling to find a co-op placement should contact a Co-op Advisor immediately.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion7" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      I am taking courses in a CICCC diploma program and my co-op hasn’t started yet. However, I am
                      working in a similar field while I am taking my courses. Can I count my work towards my coop?
                      <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion7">
                    <div class="card card-body anwserQuestion">
                      No. Only work completed between your co-op start and co-op end date will count towards your co-op.
                      Any work before your co-op start date doesn’t count. But you can work up to 20 hours per week to
                      cover your life expenses or just to gain Canadian experience and improve your
                      language skills.

                    </div>
                  </div>
                </li>
                <li id="Co-opHours" class="progressNamePage">CoopHours</li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion8" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can Cornerstone help me find a job? How? (Will they place me?) <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion8">
                    <div class="card card-body anwserQuestion">
                      Yes. Upon arrival in college during your academic studies, you will be given the chance to attend
                      many workshops and skill building events. There will be lots of one-on-one opportunities with
                      industry experts as well as mentorship from your instructors, coop advisor and career advisors.
                      They will connect you with the job market and support you every step of the way. As for the
                      placement process, we will continue to support you. Please note that seeking employment should take reasonable time within the time frame
                      of your contract.

                    </div>
                  </div>
                </li>
                <li class="nameGroupQuestion">
                  Co-op Hours
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion20" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How do I keep track of the hours? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion20">
                    <div class="card card-body anwserQuestion">
                      Keep track of the hours based on your work schedule/timesheet or your paystub.

                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion21" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Who do I submit my hours counted towards co-op to? What about the hours independent of
                      co-op?)<span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion21">
                    <div class="card card-body anwserQuestion">
                      Your coop advisor will need the accurate number of your coop hours. For independent hours, keep
                      track of them in case they are needed. Normally college won’t ask for those hours.

                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion88" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How many hours can I work per week during my coop? (Are there any exceptions to this?) <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion88">
                    <div class="card card-body anwserQuestion">
                      In total you can work 40 hours if you have both your work and study permits. Students are allowed
                      to work 20 hours with a study permit and another 20 hours with your work permit. There are no
                      exceptions.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion22" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How do I notify Cornerstone about my hours? (Do I need to show a paystub?)
                      <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion22">
                    <div class="card card-body anwserQuestion">
                      It is the student’s responsibility to track the hours worked towards co-op. Cornerstone does not
                      require students to submit proof of hours worked; the hours are certified by the student’s
                      employer on the Performance Evaluation at the end of their co-op placement.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion1222" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I work more than the number of hours allowed in my co-op contract?

                      <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion1222">
                    <div class="card card-body anwserQuestion">
                      Under normal circumstances you can’t. Your coop work experience cannot be more than 50% of your
                      total diploma program length.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion12300" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      I work at a coffee shop, but I also do their web design and e-store for example. Can I count my
                      job towards my coop?

                      <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion12300">
                    <div class="card card-body anwserQuestion">
                      Many jobs nowadays don’t have a clear job description, but we encourage 100% relevancy. 50% of
                      your job duties should be relevant to your diploma.

                    </div>
                  </div>
                </li>
                <li id="Co-opPositions" class="progressNamePage">CoopPosition</li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion124" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      My coop has started. I can’t find a job in the tech industry. Can I work full-time at a coffee
                      shop?

                      <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion124">
                    <div class="card card-body anwserQuestion">
                      No. Your work permit is only valid for jobs related to your diploma program.

                    </div>
                  </div>
                </li>
                <li class="nameGroupQuestion">
                  Co-op Positions
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion23" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I count contract or freelance work towards my co-op? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion23">
                    <div class="card card-body anwserQuestion">
                      Students may be able to count contract and freelance work towards their co-op hours if they work
                      with a long-term client who is willing to complete the required paperwork. Students should check
                      with a Co-op Advisor to review whether this type of work can be counted towards their co-op.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion24" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      I found a co-op job. The company wants to hire me as a contractor, is that ok? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion24">
                    <div class="card card-body anwserQuestion">
                      Yes, that’s perfectly fine. Our requirements are that you keep track of all the hours you’ve
                      worked, and the company that hired you needs to sign your HA and PE.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion25" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I do my co-op outside Vancouver or Canada? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion25">
                    <div class="card card-body anwserQuestion">
                      Yes, you can do your coop anywhere in Canada or even your own country. This is possible only if
                      the employer agrees to the same terms as Canadian employers, including completing the required
                      co-op paperwork, providing a position with marketing-related duties, and payment for work
                      completed. Please communicate all this information very clearly with your coop advisor.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion26" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      If I own my own business (related to my program of study) will this count towards co-op? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion26">
                    <div class="card card-body anwserQuestion">
                      Typically, no, for a small business experience to count towards co-op, the student must be 1)
                      supervised by someone qualified in a relevant career occupation and 2) employed or retained by the
                      host organization.
                    </div>
                  </div>
                </li>
                <li id="Co-requiredDocumentation" class="progressNamePage">requiredDocument</li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion27" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I work for multiple companies at the same time? (Company A: 10 hours/week, Company B: 30
                      hours/week)? How do I submit the paperwork? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse" id="GeneralQuestion27">
                    <div class="card card-body anwserQuestion">
                      Yes, you can work for multiple companies at the same time. But we will need Host Agreements and
                      Performance Evaluations from all companies. For multiple documents you can contact your coop
                      advisor for further assistance as there is a process that needs to be followed. However, we need
                      only one Final Report.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion28" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What if I lose my job? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse " id="GeneralQuestion28">
                    <div class="card card-body anwserQuestion">
                      Contact your coop advisor immediately for more guidance and options going forward. You can always
                      start a new job but you will need HA, PE from every single employer you work for during your coop.
                      Also please note that being laid off due to circumstances such as COVID or termination of a timed
                      contract is very different from being dismissed or fired due to failure to meet the expectations
                      of the employer or requirements of the job. In brief, try to change jobs professionally.
                    </div>
                  </div>
                </li>
                <li class="nameGroupQuestion">
                  Co-op Required Documentation
                </li>
                <li>
                  <p>
                    <button class="collapsible " data-toggle="collapse" href="#GeneralQuestion33" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What are the required co-op documents and when should I submit them? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion33">
                    <div class="card card-body anwserQuestion">
                      There are three required co-op documents, including:
                      <ul>
                        <li><span class="boldText">Host Agreement</span> - this document is completed by the student’s
                          employer within the first week of starting work during their co-op period.
                        </li>
                        <li>
                          <span class="boldText">Performance Evaluation</span> - this document is completed by the
                          student’s employer at the end of their co-op period or as soon as work is terminated.
                        </li>
                        <li>
                          <span class="boldText">Final Report</span> - The report you write at the end of your co-op placemnt highlighting what you did and what you learned.
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion333" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Where can I access the required co-op documents?
                      <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion333">
                    <div class="card card-body anwserQuestion">
                      All documents can be accessed in the Classe365 platform under “Learning Management System” by
                      choosing the corresponding co-op class. Students will not have access to these documents until
                      they are transferred into their co-op class at the beginning of their co-op period.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion34" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What’s a Host Agreement? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion34">
                    <div class="card card-body anwserQuestion">
                      A Host Agreement is a document which proves that you are undergoing the work experience component
                      of your diploma program at an official company, and that you’re being supervised and mentored by a
                      senior at the company. You, your supervisor, and your coop advisor have to sign the document.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion35" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      When do I need to submit a HA? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion35">
                    <div class="card card-body anwserQuestion">
                      Please submit your HA within the first week of your coop job.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion36" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What’s a Performance Evaluation? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion36">
                    <div class="card card-body anwserQuestion">
                      A PE is an evaluation of your performance by your supervisor at the company. We need to see what
                      your supervisor thinks about your performance during the coop. Please note that it is very
                      important to show excellent work ethics and knowledge of Canadian workplace. If you ever need to
                      change your job, make sure to submit a written request minimum 2 weeks before the ending date. In
                      other words, it is important to have a satisfactory evaluation assessment.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion37" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      When do I need to submit a PE? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion37">
                    <div class="card card-body anwserQuestion">
                      A PE is usually submitted in the final week of your coop OR if you’re changing jobs/companies in
                      the final week of that specific job before your start at a new company.

                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion38" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What’s a Final Report? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion38">
                    <div class="card card-body anwserQuestion">
                      A Final Report is a 500-1000-word essay in which you tell us about your co-op experience: your
                      job, the company, your supervisor, your responsibilities, what you’ve learned etc.
                    </div>
                  </div>
                </li>
                <li id="Visas&Permits" class="progressNamePage">visasPermits</li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion39" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What dates should I use for my co-op start date / end date? (Should I use co-op contract dates or
                      the date I actually began working?) <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion39">
                    <div class="card card-body anwserQuestion">
                      Students should use their actual co-op start date and co-op end date listed on their contract if
                      they are working the entire duration of their co-op. If the student starts their co-op later
                      because they could not find a co-op placement right away, they can use the actual date they
                      started working. If the student stops working at a co-op placement early, they can use the exact
                      date they terminated work with the employer. **Important** All dates listed on the co-op documents
                      should be within the student’s co-op period; dates before or after the student’s co-op period are
                      not acceptable.
                    </div>
                  </div>
                </li>
                <li class="nameGroupQuestion">
                  Visas & Permits
                </li>
                <li id="coopExtensions" class="progressNamePage">coopExtensions</li> 
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion42" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Do I need both permits to start coop? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion42">
                    <div class="card card-body anwserQuestion">
                      Yes. You must have your Study Permit and your Work Permit. This is the Cornerstone policy.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion43" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      My permits expire before my coop end date. What do I do? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion43">
                    <div class="card card-body anwserQuestion">
                      Please note that extension of your permits is done through Immigration Canada and you must renew
                      your permits if they expire before your coop end date. To do that, you will need to contact your
                      co-op advisor who will direct you to the admissions office. There are 4 pieces of documents needed
                      at this point: A Co-op Letter and a Letter of Acceptance (LOA), and
                      Enrollment Letter and your Transcript from Cornerstone. Your student advisor will provide the
                      first 2 and the admissions office will give you the other 2 documents. With all 4 documents, you
                      then need to reach out to your immigration consultant/lawyer to apply for extension of your
                      permits. Please note that once you applied for renewal of your permits you should send the
                      Admission’s Office the Confirmation of submission to the IRCC which proves you are in implied
                      status. Once you receive your new permits, you should send a copy to the Admission’s Office
                      (admission.office@ciccc.ca).
                    </div>
                  </div>
                </li>
                <li class="nameGroupQuestion" id="Co-opExtensions">
                  Co-op Extensions
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion44" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I extend my co-op if I need more hours or have difficulty finding a job? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion44">
                    <div class="card card-body anwserQuestion">
                      Only under special circumstances are students allowed to apply for coop extensions. E.g. you need
                      a few extra weeks to complete your coop hours; that’s a valid reason. Also, coop extensions are
                      never guaranteed to be approved and there’s a $300 fee.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion75" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      When can I apply for an extension? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion75">
                    <div class="card card-body anwserQuestion">
                      Contact your coop advisor first. Your advisor will ask you questions and send you the information
                      you need. At this point you will be referred to the admissions office for the documentation and
                      other possible processes involved including possible need for extension of your permits.
                    </div>
                  </div>
                </li>
                <li id="coopGradutation" class="progressNamePage">coopGradutation</li> 
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion76" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I go on a leave during my coop? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion76">
                    <div class="card card-body anwserQuestion">
                      It is not advisable but yes you might be eligible for a leave. You need to submit a leave request
                      to your coop advisor and admission office. If it is approved, you can take a leave. Please
                      remember there is a limited number of days that you can go on a leave during your whole program.
                      Admission office will let you know how many days you are eligible for. Please note that you CANNOT
                      work during your leave.
                    </div>
                  </div>
                </li>
                <li id="DualDiplomaPrograms" class="progressNamePage">dualDiploma</li> 
                <li class="nameGroupQuestion">
                  Co-op End & Graduation
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion77" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What is the minimum number of hours I need to graduate from co-op? (Has COVID changed the number
                      of hours required?) <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion77">
                    <div class="card card-body anwserQuestion">
                      Due to COVID and in order to support our students, you can complete your program with a minimum
                      75% of required coop hours. Please reach out to your coop advisor who can give you accurate
                      numbers.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion78" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      I have completed my coop hours. What now? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion78">
                    <div class="card card-body anwserQuestion">
                      You and your advisor must make sure that all your documents are complete (Host Agreement,
                      Performance Evaluation, Final Report, all fees owed to the college must be paid etc.). After that,
                      your graduation will be processed, and you should graduate within 2 weeks.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion79" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I continue working after I apply for graduation? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion79">
                    <div class="card card-body anwserQuestion">
                      You can work until your co-op end date.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion80" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      I haven’t been able to complete my coop hours / I haven’t been able to find a relevant coop job.
                      Can I still graduate and get a diploma? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion80">
                    <div class="card card-body anwserQuestion">
                      Unfortunately, the coop component is a crucial part of your diploma program. You cannot graduate
                      without coop completion. If despite having applied for a co-op extension, you still haven’t
                      finished your hours, your file will be closed as incomplete as extensions are given only once. You
                      are still eligible to receive an official transcript showing the completed courses. You will NOT
                      receive a diploma.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion81" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      When (and how) will I receive my diploma? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion81">
                    <div class="card card-body anwserQuestion">
                      After submission of all your coop documents, the admissions office will be in touch with you, if
                      they require any further documentations and if everything is complete, you can expect your diploma
                      to be emailed to you within 2-3 business weeks. If you require paper copies or mailing to a
                      certain address, you need to send in a written request to the admissions office and the process
                      might take longer.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion82" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      Can I graduate early? <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion82">
                    <div class="card card-body anwserQuestion">
                      Yes. If you have completed your hours and submitted all documents, you can have early completion.
                      Please discuss this with your coop advisor.
                    </div>
                  </div>
                </li>
                <li class="nameGroupQuestion">
                  Dual Diploma Programs
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion882" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      How many hours do I need to work for my co-op? (What if I am dual diploma)? <span
                        class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion882">
                    <div class="card card-body anwserQuestion">
                      Please discuss this with your coop advisor because the number of required hours vary depending on
                      your program.
                    </div>
                  </div>
                </li>
                <li>
                  <p>
                    <button class="collapsible" data-toggle="collapse" href="#GeneralQuestion883" role="button"
                      aria-expanded="false" aria-controls="collapseExample">
                      What is the paperwork like for a dual diploma? (Do I need to fill out documents for both
                      programs?) <span class="collapsibleIcon">+</span>
                    </button>
                  </p>
                  <div class="collapse internalList" id="GeneralQuestion883">
                    <div class="card card-body anwserQuestion">
                      You will need to submit 2 HA, 2 PE and 1 final report if you have had only 2 employers, 1 for each
                      program. Yes.
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


EOT;
}

?>
