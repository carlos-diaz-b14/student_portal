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
  <link rel="stylesheet" type="text/css" href="../../../css/style_main.css">
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
            <a class="navbar-brand" href="../main.php"><img src="../../../Images/logowhite.jpg" class="logo"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav mainMenu">
              <li>
                <a href="../main.php" class="home">Home</a>
                <ul class="subMenu homeSubMenu">
                  <li><a href="../career.php">Career Prep</a></li>
                  <li><a href="../orientations.php">Co-op Orientation</a></li>
                  <li><a href="../term.php">Co-op Term</a></li>
                  <li><a href="../graduation.php">Graduation</a></li>
                </ul>
              </li>
              <li>
                <a href="../docs.php" class="requiredDoc">Required Docs</a>
                <ul class="subMenu requiredSubMenu">
                  <li><a href="../../documents/dmshostagreement.pdf" download>Host Agreement</a></li>
                  <li>
                    <a href="../../documents/dmshostagreement.pdf" download>Performance Evaluation</a>
                  </li>
                  <li>
                    <a href="../../documents/dmsfinalreport.pdf" download>Final Report</a>
                  </li>
                </ul>
              </li>
              <li><a href="../events.php">Events</a></li>
              <li><a href="../faq.php">FAQ</a></li>
              <li>
                <a href="resources.php" class="resources">Resources</a>
                <ul class="subMenu resourceSubMenu">
                  <li><a href="resume.php" >Resume</a></li>
                  <li><a href="cover.php">Cover Letter</a></li>
                  <li><a href="interview.php">Interview</a></li>
                  <li><a href="jobsearch.php">Job Search</a></li>
                  <li><a href="linkedin.php">Linkedin</a></li>
                  <li><a href="porfolio.php">Portfolio</a></li>
                  <li><a href="https://talent-ciccc.ca/" target="_blank">Complete Your Talent Profile</a></li>
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

function resources() {
echo <<<EOT
 <section class="bannerTitle">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="baseTitle valign fix-stroke">
            <span>Resources</span>
          </div>
        </div>
      </div>
      <div class="container">
        <h1>What do you want to learn about?</h1>
        <p>Learn about topics that will build your career readiness … the Canadian way!</p>
      </div>
    </div>
  </section>
  <section class="sectionImages">
    <div class="container">
      <div class="row">
              <div class="col-md-3 paddingNone">
                <a href="resume.php">
                  <div class="listImage">
                    <div class="img1 img"></div>
                    <span>Resume</span>
                  </div>
                </a>
              </div>
              <div class="col-md-9 noPaddingRight">
                <div class="container-fluid ">
                  <div class="row">
                    <div class="col-md-7 ">
                      <a href="cover.php">
                        <div class="listImage bg2 horizontal">
                          <div class="img2"></div>
                          <span>Cover Letter</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-5 noPaddingRight">
                      <div class="listImage bg5 horizontal">
                        <div class="img5"></div>
                        <span>Interview</span>
                      </div>
                    </div>
                  </div> 
                  <div class="row ">
                    <div class="col-md-5">
                      <!-- <a href=""> -->
                      <a href="jobSearch.php">
                        <div class="listImage bg5 horizontal marginTop30px">
                          <div class="img5"></div>
                          <span>Job Search</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-7 noPaddingRight">
                      <a href="linkedin.php">
                        <div class="listImage bg3 horizontal marginTop30px">
                          <div class="img3"></div>
                          <span>Linkedin</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 noPaddingRight">
                      <!-- <a href=""> -->
                      <a href="portifolio.php">
                        <div class="listImage bg4 horizontal marginTop30px">
                          <div class="img4"></div>
                          <span>Portfolio
                          </span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div> 
            
            <div class="row">
              <div class="col-md-12">
                <!-- <a href=""> -->
                <a href="http://talent-ciccc.ca" target="blank">
                  <div class="listImage bg6 horizontal marginTop30px">
                    <div class="img5"></div>
                    <span>Complete Your Talent Profile
                    </span>
                  </div>
                </a>
              </div>
            </div>
         
      </div>
    </div>
  </section>
EOT;
}

function resume() {
echo <<<EOT
  <section class="banner resumeBanner positionRelative">
    <div class="overlay">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="baseTitle valign fix-stroke">
              <span>Resume</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row learnAbout ">
        <div class="col-md-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 paddingNone">
                <h1>What is a resume?</h1>
              </div>
            </div>
            <div class="row">
              <p>A resume is a professional document. It is a summary of your professional background, education and
                skills. A resume is essential if you want to apply for a job.</p>
              <p>
                Furthermore, a strong resume gives you a competitive advantage! If you have never written a resume
                before… keep reading.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <img src="../../../Images/resumeguide.jpg" class="img-responsive" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="templates">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Looking for templates</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-3">
            <a class="listTemplate canvasImg" href="https://www.canva.com/tools/resume-maker-v1/">
              <img src="../../../Images/canvas.png" class="img-responsive " alt="" />
            </a>
          </div>
          <div class="col-md-3">
            <a class="listTemplate" href="https://www.resumehelp.io/">
              <img src="../../../Images/novo.png" class="img-responsive " alt="" /></a>
          </div>
          <div class="col-md-3">
            <a class="listTemplate" href="https://zety.com/">
              <img src="../../../Images/3.png" class="img-responsive " alt="" /></a>
          </div>
          <div class="col-md-3">
            <a class="listTemplate" href="https://resumegenius.com/">
              <img src="../../../Images/4.png" class="img-responsive " alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="first_impression">
    <div class="container-fluid specialPadding">
      <div class="col-md-5 paddingSection">
        <div class="width50percent">
          <img src="../../../Images/min-area.jpeg" class="imageSection">
        </div>
      </div>
      <div class="col-md-6 col-sm-offset-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="firstImpressionContent">
                <h2>First Impressions are everything</h2>
                <h4 class="impressionTitle">Your resume should:
                </h4>
                <ul class="firstImpression">
                  <li>
                    <span>1</span>
                    Be <label>1 - 2 pages</label>, maximum. Do not send a resume that is more than 2 pages.
                  </li>
                  <li>
                    <span>2</span>
                    Be <label> easy to read.</label>
                    <ul>
                      <li>Do not overload the page with too much writing.</li>
                      <li>Do not leave huge blank spaces.</li>
                      <li>Organize the information on the page in a way that the brain can understand it easily. It has
                        been found that human eyes naturally reads information in an ‘E’ shape.</li>
                      <li>Use a professional format. </li>
                      <li>Use Arial, Verdana or Calibri font. </li>
                      <li>Avoid lots of colors and pictures. </li>
                    </ul>
                  </li>
                  <li>
                    <span>3</span>
                    <p><label> Include information relevant to the job you apply to.</label> Yes, that means you
                      should customize your resume for every job application. Highlight the skills and experiences that
                      are relevant to the job description only.</p>
                  </li>
                  <li>
                    <span>4</span>
                    <p>
                      <label>Have correct spelling and grammar.</label> Ask someone to check your spelling and grammar
                      before you send your resume. We recommend using Grammarly.com for excellent grammar support.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="whatDoInclude">
    <div class="overCollor"></div>
    <div class="backgroundImage"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="fixTitle">
            <h1>What to include</h1>
            <p>Click on the sections below to learn more about the various components of a resume.</p>
            <ul class="menuResume">
              <li class="active" data-content="header"><a href="#">Header</a></li>
              <li data-content="personal"><a href="#">Personal Summary </a></li>
              <li data-content="workExperience"><a href="#">Relevant Work Experience </a></li>
              <li data-content="education"><a href="#">Education </a></li>
              <li data-content="certifications"><a href="#">Certifications</a></li>
              <li data-content="skills"><a href="#">Skills</a></li>
              <li data-content="reference"><a href="#">References</a></li>
              <li data-content="hobbies"><a href="#">Hobbies, Interests, etc </a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <div class="positionRelative">
            <div class="headerContent">
              <div class="bgTextInformation">
                <h3>Header</h3>
                <ul>
                  <li>
                    <ul>
                      <li>
                        Name
                      </li>
                      <li>
                        City, Province
                      </li>
                      <li>
                        Phone Number
                      </li>
                      <li>
                        Email Address
                      </li>
                      <li>
                        LinkedIn/Portfolio (optional)
                      </li>
                    </ul>
                    <div class="examples">
                      <span>Rita Applicant</span>
                      Vancouver, BC | 123.456.7890 | jobseeker@student.ca |/in/julia-jobseeker
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="personalContent">
              <div class="bgTextInformation">
                <h3>Personal Summary</h3>
                <ul>
                  <li>
                    Imagine you have 15 seconds to explain your professional background, strengths and goal. That’s what
                    you
                    should write here! Approximately 2-3 sentences.
                    <ul>
                      <li>
                        Information about your background, strengths, and goal.
                      </li>
                      <li>
                        Something you can offer the employer.
                      </li>
                      <li>
                        Your target industry, role or company.
                      </li>
                      <li>
                        A list of 3-5 professional highlights including achievements and skills that you are well-known
                        for,
                        that are directly relevant for the job you want.
                      </li>
                    </ul>
                    <div class="examples">
                      Creative and driven marketer with skills in e-commerce, social media management, and photography.
                      Eager to join ABC Media to help produce data-driven outreach marketing campaigns that will boost
                      the
                      company’s online presence.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="workExperienceContent">
              <div class="bgTextInformation">
                <h3>Relevant Work Experience</h3>
                <p>Always write your most recent or current employment first. Only include 10 years of work history.</p>
                Include the following:
                <ul class="listList">
                  <li>
                    Job Title
                  </li>
                  <li>
                    Name of Company
                  </li>
                  <li>
                    City, Country
                  </li>
                  <li>
                    Date from - Date to
                  </li>
                  <li>
                    List your main responsibilities in bullet points
                  </li>
                  <ul>
                    <li>
                      Include statistics and numbers
                    </li>
                    <li>
                      Include an achievement / success
                    </li>
                    <li>
                      Use positive action verbs in the past simple when describing your responsibilities.
                    </li>
                  </ul>
                </ul>
                <div class="examples">
                  <p>Here are some examples of action verbs in the past simple ...</p>
                  <table class="table">
                    <tr>
                      <td>Drove</td>
                      <td>Organized</td>
                      <td>Delegated</td>
                    </tr>
                    <tr>
                      <td>Trained</td>
                      <td>Implemented</td>
                      <td>Managed</td>
                    </tr>
                    <tr>
                      <td>Engineered</td>
                      <td>Configured</td>
                      <td>Updated</td>
                    </tr>
                    <tr>
                      <td>Enabled</td>
                      <td>Developed</td>
                      <td>Increased</td>
                    </tr>
                    <tr>
                      <td>Collaborated</td>
                      <td>Identified</td>
                      <td>Planned</td>
                    </tr>
                    <tr>
                      <td>Solved</td>
                      <td>Delivered</td>
                      <td>Minimized</td>
                    </tr>
                    <tr>
                      <td>Sanitized/
                        Cleaned
                      </td>
                      <td>Identified</td>
                      <td>Presented</td>
                    </tr>
                    <tr>
                      <td>Solved</td>
                      <td>Delivered</td>
                      <td>Minimized</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="educationContent">
              <div class="bgTextInformation">
                <h3>Education</h3>
                <p>Always write your most recent or current education first.</p>
                <ul class="listList">
                  <li>Qualification</li>
                  <li>
                    University
                  </li>
                  <li>
                    City, Country
                  </li>
                  <li>
                    Date from - Date to
                  </li>
                </ul>
                <div class="examples">
                  <span>Digital Marketing Specialist Diploma</span>
                  <p>Cornerstone International Community College of Canada / Vancouver, BC / June 2020 - present</p>
                </div>
              </div>
            </div>
            <div class="certificationsContent">
              <div class="bgTextInformation">
                <h3>Certifications</h3>
                <p>Include valid certifications that are relevant to the job description.</p>
                <div class="examples">
                 
                  <ul>
                    <li>Social Marketing, Hootsuite </li>
                    <li>Inbound Marketing, Hubspot</li>
                    <li>Content Marketing, Hubspot</li>
                    <li>Google Adwords, Google</li>
                    <li>Google Analytics, Google</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="skillContent">
              <div class="bgTextInformation">
                <h3>Skills</h3>
                <p>
                  Many large companies use Applicant Tracking Systems (ATS) to filter through resumes. These systems
                  scan through resumes to look for specific keywords, such as certain skills necessary for the job. The
                  ATS summarizes what your skills are based on the keywords you chose. If the skills section of your
                  resume doesn’t exactly match the job description, you will not be chosen for an interview.
                </p>
                <p>Common digital marketing skills that employers are looking for:</p>
                <ul class="listList">
                  <li>
                    Facebook Manager
                  </li>
                  <li>Hootsuite</li>
                  <li>Adobe Photoshop
                  </li>
                  <li>Adobe Illustrator
                  </li>
                  <li>Wordpress</li>
                  <li>Communication</li>
                  <li>Content Creation</li>
                  <li>MailChimp</li>
                  <li>Canva</li>
                  <li>WooCommerce</li>
                  <li>Microsoft Office</li>
                  <li>Email Automation</li>
                  <li>Google Analytics</li>
                  <li>SEO</li>
                </ul>
                <div class="examples">
                  <span>PRO TIPS (ICON ALERT)</span>
                  <ul class="listList">
                    <li>
                      ALWAYS check the job description for the professional skills the employer is looking for. Do they
                      match your own?
                    </li>
                    <li>
                      Don’t know what your skills are, or why? Ask someone! Ask a coworker, friend, classmate or
                      instructor for feedback. People will be happy to share the great things about you. There are many,
                      we promise.
                    </li>
                    <li>
                      For every skill you write on your resume, you must have at least one example of when and how you
                      used this skill.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="referenceContent">
              <div class="bgTextInformation">
                <h3>References</h3>
                <p>You do not need to include details about your references on your resume. However, if requested, you
                  should have at least 2 professional references to provide to a new employer. You can ask your
                  Instructor or Co-op Advisor to be a reference for you. Usually, an employer will ask for references
                  after an interview. It is often a good sign that you were successful at the interview stage!</p>
              </div>
            </div>
            <div class="hobbiesContent">
              <div class="bgTextInformation">
                <h3>Hobbies, Interests, etc</h3>
                <p>You do not need to include hobbies or interests on your resume. However, if you think that your
                  interests are related to the job, then it could be a good idea to include them.</p>
                <div class="examples">
                  <ul class="listList">
                    <li>
                      If you are applying for a company that sells outdoor clothing and equipment, and you enjoy climbing
                    and running marathons… write that!
                    </li>
                    <li>
                      If you are applying for a travel agency position and you have travelled to 20 countries… write that!
                    </li>
                  </ul>
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
          <div class="col-sm-4">
            <div class="picture">
              <span><img src="../../../Images/javier.jpg" class="jess"></span><br>
              <h5 class="name">Javier</h5>
              <p class="description">DMS Co-op Coordinator</p>
            </div>
          </div>
          <div class="col-sm-8">
            <h1>Let`s Connect</h1>

            <p>This Co-op Portal is created for YOU to maximize your success in the Canadian labour market. This
              portal will help you understand the CICCC co-op process and provide information to start building
              your career resources ... the Canadian way! Click “Book Appointment" to meet with an advisor 1:1 and discuss this career topic in more detail. 
            </p>
            <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-03" target="_blank"><button class="btn marginBtn">Book Appointment</button></a>
          </div>
        </div>
      </div>
    </div>
  </section> 
EOT;
}


function cover() {
echo <<<EOT
<section class="banner resumeBanner positionRelative">
    <div class="overlay">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="baseTitle valign fix-stroke coverTittle">
              <span>Cover Letter</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row learnAbout ">
        <div class="col-md-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 paddingNone">
                <h1>What is a cover letter?</h1>
              </div>
            </div>
            <div class="row">
              <p>A cover letter is a 1-page, professional document that accompanies your resume. It provides more
                specific detail about how you are a perfect fit for the job. It is an opportunity to sell yourself! A
                cover letter should be customized for each application.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <img src="../../../Images/cover2.jpg" class="img-responsive" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="templates">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Looking for templates</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-3">
            <a class="listTemplate canvasImg" href="https://www.canva.com/tools/resume-maker-v1/">
              <img src="../../../Images/canvas.png" class="img-responsive " alt="" />
            </a>
          </div>
          <div class="col-md-3">
            <a class="listTemplate" href="https://www.resumehelp.io/">
              <img src="../../../Images/novo.png" class="img-responsive " alt="" /></a>
          </div>
          <div class="col-md-3">
            <a class="listTemplate" href="https://zety.com/">
              <img src="../../../Images/3.png" class="img-responsive " alt="" /></a>
          </div>
          <div class="col-md-3">
            <a class="listTemplate" href="https://resumegenius.com/">
              <img src="../../../Images/4.png" class="img-responsive " alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="whatDoInclude">
    <div class="overCollor"></div>
    <div class="backgroundImage"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="fixTitle">
            <h1>What to include</h1>
            <p>Click on the sections below to learn more about the various components of a cover letter.</p>
            <ul class="menuResume">
              <li class="active" data-content="header"><a href="#">Contact Information</a></li>
              <li data-content="personal"><a href="#">Salutation</a></li>
              <li data-content="workExperience"><a href="#">Intro Paragraph</a></li>
              <li data-content="education"><a href="#">Body Paragraphs</a></li>
              <li data-content="certifications"><a href="#">Call-to-action Paragraph</a></li>
              <li data-content="skills"><a href="#">Sign-off</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <div class="positionRelative">
            <div class="headerContent">
              <div class="bgTextInformation">
                <h3>Contact Information</h3>
                <ul class="listList">
                  <li>
                    Your Name
                  </li>
                  <li>Phone Number</li>
                  <li>
                    Email Address
                  </li>
                  <li><span>Date</span></li>
                  <li>Company Contact Name</li>
                  <li>Company Address (Street, City, Province, Postal Code)</li>
                  <li>Company Phone Number</li>
                  <li>Company Contact Email</li>
                </ul>
                <div class="examples">
                  <ul>
                    <li><span>Rita Applicant</span></li>
                    <li>123.456.7890 </li>
                    <li>jobseeker@student.ca </li>
                    <li><br></li>
                    <li>April 6, 2021</li>
                    <li><br></li>
                    <li>Mr. Bob Lee</li>
                    <li>345 Granville St</li>
                    <li>Vancouver, BC V7J 000</li>
                    <li>123-456-7890</li>
                    <li>boblee@example.com</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="personalContent">
              <div class="bgTextInformation">
                <h3>Salutation</h3>
                <p>If you know the name of the hiring manager, great!</p>
                <p>If you don’t know their name, here are some simple and appropriate options:</p>
                <ul class="withStyle">
                  <li>Dear [Insert Name],</li>
                  <li>Dear Hiring Manager,</li>
                  <li>Dear [Company Name] Team,</li>
                </ul>
                <p>Never use these salutations in a cover letter:</p>
                <ul class="withStyle">
                  <li>Hi,</li>
                  <li>Hello,</li>
                  <li>Dear Sir/Madam,</li>
                  <li>To Whom it May Concern,</li>
                </ul>
              </div>
            </div>
            <div class="workExperienceContent">
              <div class="bgTextInformation">
                <h3>Intro Paragraph</h3>
                <p>Always create a positive and personable introduction!</p>
                <ul class="withStyle">
                  <li>Mention the job title and the company</li>
                  <li>Show enthusiasm for the job</li>
                  <li>Briefly state your most related skills or achievement</li>
                </ul>
                <p>Never use these in your opening paragraph:</p>
                <ul class="withStyle">
                  <li>I’m [insert name]</li>
                  <li>How are you?</li>
                  <li>I am a co-op student</li>
                </ul>
                <span>An example of a BAD opening paragraph:</span>
                <div class="examples">
                  <p>Hi,</p>
                  <p>I’m Paula. I’m a co-op student at Cornerstone. I’m interested in the job of Marketing Assistant. I
                    am studying Digital Marketing and I have also worked in marketing in my own country so I know about
                    it. I worked for my company for 3 years.</p>
                </div>
                <span class="marginTop20px">An example of a GOOD opening paragraph:</span>
                <div class="examples">
                  <p>Dear Hiring Manager,</p>
                  <p>I was excited to see your job listing for the Lead Digital Marketing position at Jelly Marketing
                    Agency. As a dynamic marketing specialist with over two years of professional experience executing
                    market research, analyzing consumer data, and running A/B tests to drive successful marketing
                    campaigns, I’m confident that I would be a valuable asset to the team at Jelly Marketing. </p>
                </div>
              </div>
            </div>
            <div class="educationContent">
              <div class="bgTextInformation">
                <h3>Body Paragraphs</h3>
                <p>Explain how you can help the company achieve its goals, showcasing your relevant experience,
                  education, and skills. </p>
                <ul class="withStyle">
                  <li>Highlights of your background</li>
                  <li>Why are you a good fit for the company?</li>
                  <li>Why is the company a good fit for you?</li>
                  <li>Show your knowledge of the company</li>
                  <li>Look at the job description – what are they looking for in a candidate?</li>
                  <li>Look at your skills – how do they match the job description?</li>
                  <li>Evidence of 2 – 3 related examples to job description.</li>
                </ul>
                <span>An example of a GOOD body paragraph:</span>
                <div class="examples">
                  Your job listing mentions a need for someone who is experienced in email segmentation and campaign
                  development, both of which are areas I have extensive experience in. I’m currently employed at ABC
                  marketing, where I’ve honed my skills by running numerous successful email marketing campaigns. While
                  employed here, I’ve spearheaded a digital promotion campaign for the company’s new line of sandals
                  that successfully raised our total online engagement by an impressive 13% over the course of six
                  months, contributing substantially to the department’s annual goals.
                </div>
              </div>
            </div>
            <div class="certificationsContent">
              <div class="bgTextInformation">
                <h3>Call-to-action Paragraph</h3>
                <p>End your cover letter with a strong statement that is proactive and invites the hiring manager to
                  take the next step, like call you for an interview. </p>
                <span>An example of a GOOD body paragraph:
                </span>
                <div class="examples">
                  I look forward to discussing the Lead Digital Marketing position and my qualifications with you in
                  more detail. I’m available to talk at your convenience. I’ll be in touch next week to follow up and to
                  make sure you’ve received my application.
                </div>
              </div>
            </div>
            <div class="skillContent">
              <div class="bgTextInformation">
                <h3>Sign-off</h3>
                <p>Use a professional closing and sign your name.</p>
                <ul class="withStyle">
                  <li>Sincerely,</li>
                  <li>Regards,</li>
                  <li>Best Regards,</li>
                </ul>
                <div class="examples">
                  Sincerely,<br>
                  Paula Botega
                </div>
              </div>
            </div>
            <div class="referenceContent">
              <div class="bgTextInformation">
                <h3>References: available on request</h3>
                <p>You do not need to include details about your references on your resume. However, if requested, you
                  should have at least 2 professional references to provide to a new employer. You can ask your
                  Instructor or Co-op Advisor to be a reference for you. Usually, an employer will ask for references
                  after an interview. It is often a good sign that you were successful at the interview stage!</p>
              </div>
            </div>
            <div class="hobbiesContent">
              <div class="bgTextInformation">
                <h3>hobbies content</h3>
                <p>You do not need to include hobbies or interests on your resume. However, if you think that your
                  interests are related to the job, then it could be a good idea to include them.</p>
                <div class="examples">
                  <p>If you are applying for a company that sells outdoor clothing and equipment, and you enjoy climbing
                    and running marathons… write that!</p>
                  <p>
                    If you are applying for a travel agency position and you have travelled to 20 countries… write that!
                  </p>
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
          <div class="col-sm-4">
            <div class="picture">
              <span><img src="../../../Images/javier.jpg" class="jess"></span><br>
              <h5 class="name">Javier</h5>
              <p class="description">DMS Co-op Coordinator</p>
            </div>
          </div>
          <div class="col-sm-8">
            <h1>Let`s Connect</h1>

            <p>This Co-op Portal is created for YOU to maximize your success in the Canadian labour market. This
              portal will help you understand the CICCC co-op process and provide information to start building
              your career resources ... the Canadian way! Click “Book Appointment" to meet with an advisor 1:1 and discuss this career topic in more detail. 
            </p>
            <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-03" target="_blank"><button class="btn marginBtn">Book Appointment</button></a>
          </div>
        </div>
      </div>
    </div>
  </section> 
EOT;
}

function interview() {
echo <<<EOT

<div class="jumbotron">
  <h1>Interview <br> Preparation</h1> <br>
  <a href="mailto:coop.advisor@ciccc.ca"><button class="btn">Contact your advisor </button></a>
</div>
<h2 style="margin-left: 10%;">Checklist for different types of interviews</h2>

<button type="button" class="collapsible" >In-person interview
<span class="glyphicon glyphicon-user" style="float: right;"></span> </button>
<div class="contentcc" >
<p class="resume1">
<li>Check the location, directions and the public transport (do a practice run if you can!)</li>
<li>Arrive 10 minute early</li>
<li>Wear professional clothing</li>
<li>Bring a copy of your resume</li>
<li>Read your notes before your interview</li>
<li>Look at interview questions from the company beforehand</li>
<li>Smile!</li>
<li>Don’t look at your watch or phone</li>
<li>Have questions prepared for the interviewer</li>
<li>It is okay to explain that you are a little nervous, but excited</li>
<li>Don’t ask about salary / vacation /benefits until they mention the topic</li>

</p> 
    
</div><div><h4></h4></div>

<button type="button" class="collapsible">Video interview (Zoom, Skype, Microsoft Teams, etc)<span class="glyphicon glyphicon-facetime-video" style="float: right;"></span></button>
<div class="contentcc">
<p class="resume1">
 <li> Check your internet connection! Do a test-run with a friend.</li>
<li>Choose somewhere quiet with good lighting an simple background</li>
<li>Dress like it is an in-person interview</li>
<li>Keep some notes and a copy of your resume in front of you</li>
<li>Look directly at the camera, not at yourself.</li>
<li>Have questions prepared for the interviewer</li>
<li>It is okay to explain that you are a little nervous, but excited</li>
<li>Don’t ask about salary / vacation /benefits until they mention the topic</li>


</p>

  </div><div><h4></h4></div>

<button type="button" class="collapsible">Phone Interview<span class="glyphicon glyphicon-earphone" style="float: right;"></span></button>
<div class="contentcc">
 <p class="resume1">
 <li>  Choose a quiet place with good reception to take the call</li>

<li>Confirm the date and time before the interview</li>

<li>Find out the name of who will interview you</li>

<li>Keep your notes and a copy of your resume with you</li>

<li>Smile! Even if the interviewer can’t see you, they can hear the smile in your voice</li>

<li>Be direct with your answers</li>

<li>It is okay to explain that you are a little nervous, but excited</li>

<li>Ask about the next step. When will you hear from them again?</li>

<li>Don’t ask about salary / vacation /benefits until they mention the topic</li>




 </p>

</div><div><h4></h4></div>

<button type="button" class="collapsible">Interview follow up<span class="glyphicon glyphicon-eye-open" style="float: right;"></span></button>
<div class="contentcc">
 <p class="resume1">
  <li>Send a thank you e-mail to the person/people who interviewed you (the same day.</li>
<li>If you have any questions that you forgot to ask, follow up in an e-mail. </li>
<li>If you do not hear a response, follow up with a second e-mail to explain that you are still interested in the position.</li>
 
   
 </p>

</div><div><h4></h4></div>





EOT;
}

function job() {
echo <<<EOT
<section class="banner resumeBanner positionRelative">
    <div class="overlay">
      <div class="container-fluid"> font-size: 12vw;
        <div class="row">
          <div class="col-md-12">
            <div class="baseTitle valign fix-stroke jobTitle">
              <span>Job Search</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row learnAbout ">
        <div class="col-md-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 paddingNone">
                <h1>About job searching</h1>
              </div>
            </div>
            <div class="row">
              <p>Job searching involves more than searching for open positions and sending your resume to employers.
              </p>
              <p>You also need to make sure you’re a good fit for the job, can catch the hiring manager’s attention and
                are well-prepared to answer interview questions. Here are tips that you can use to improve your chances
                of finding the employment you desire:</p>
              <div class="row">
                <div class="container-fluid paddingNone">
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="listTemplate1">
                        <li>Know your career goals. </li>
                        <li>Plan ahead </li>
                        <li>Get resume and cover letter help
                        </li>
                        <li>Use all job search resources</li>
                        <li>Customize your resume
                        </li>
                        <li>Research companies </li>
                        <li>Apply with confidence</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="listTemplate1">
                        <li>Schedule informational interviews</li>
                        <li>Succeed in your current job</li>
                        <li>Network regularly</li>
                        <li>Identify examples of your skills</li>
                        <li>Prepare for interviews</li>
                        <li>Follow up</li>
                        <li>Expand your skills</li>
                      </ul>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <img src="../../../Images/hiring.png" class="img-responsive" />
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <img src="../../../Images/Job.jpg" class="img-responsive" />
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="ProTips">
            <h3>⚠️ Pro Tips ⚠️ When searching for jobs online</h3>
            <ul>
              <li>Search using a variety of keywords </li>
              <li>Sort by Post Date </li>
              <li>Check company website first
              </li>
              <li>Apply by attaching your cover letter & resume as a PDF</li>
              <li>Call the company to get more details
              </li>
              <li>Try emailing a decision-maker directly </li>
              <li>Follow-up on the application</li>
            </ul>
            <img src="../../../Images/hiring.png" class="img-responsive imgHiring" />
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1>Where to search online
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <a href="https://ca.indeed.com/">
              <img src="../../../Images/9.png" class="img-responsive">
            </a>
          </div>
          <div class="col-md-2">
            <a href="https://www.linkedin.com/">
              <img src="../../../Images/11.png" class="img-responsive">
            </a>
          </div>
          <div class="col-md-2"><a href="https://www.workbc.ca">
              <img src="../../../Images/12.png" class="img-responsive">
            </a></div>
          <div class="col-md-2"><a href="https://www.jobbank.gc.ca/home">
              <img src="../../../Images/13.png" class="img-responsive">
            </a></div>
          <div class="col-md-2"><a href="https://www.facebook.com">
              <img src="../../../Images/14.png" class="img-responsive">
            </a></div>
          <div class="col-md-2"><a href="https://vancouver.craigslist.org/">
              <img src="../../../Images/15.png" class="img-responsive">
            </a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="whatDoInclude">
    <div class="overCollor"></div>
    <div class="backgroundImage"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="fixTitle">
            <h1>Identifying your goals</h1>
            <p>Click on the sections below to learn more about the various components of a job search.</p>
            <ul class="menuResume">
              <li class="active" data-content="header"><a href="#">Identify your short-term and long-term goals</a></li>
              <li data-content="personal"><a href="#">What is your ideal job: Industry vs. Role</a></li>
              <li data-content="workExperience"><a href="#">Know your skills </a></li>
              <li data-content="education"><a href="#">Understand the job market demand </a></li>
              <li data-content="certifications"><a href="#">Benefits</a></li>
              <li data-content="skills"><a href="#">The importance networking</a></li>
              <li data-content="reference"><a href="#">Finding networking opportunities </a></li>
              <li data-content="hobbies"><a href="#">Hobbies, Interests, etc </a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <div class="positionRelative">
            <div class="headerContent">
              <div class="bgTextInformation">
                <h3>Identify your short-term and long-term goals</h3>
                <ul class="listList">
                  <li>
                    Improve your English?
                  </li>
                  <li>
                    Expand your network and meet new people?
                  </li>
                  <li>
                    Gain Canadian experience and stay in Canada?
                  </li>
                  <li>
                    Gain an international qualification?
                  </li>
                  <li>
                    Start a new career path?
                  </li>
                  <li>
                    All of the above?
                  </li>
                </ul>
              </div>
            </div>
            <div class="personalContent">
              <div class="bgTextInformation">
                <h3>What is your ideal job: Industry vs. Role</h3>
                <p>Choose which is most important to you. If your goal is to gain industry experience, then focus your
                  search on the company or industry rather than the job title. If your goal is to get a specific job
                  title, maybe the company or industry is not very important.</p>
                <ul>
                  <li>
                    For example, maybe you want to gain sales and marketing experience, but what you sell is not
                    important because you are gaining skills and experience in the field.
                  </li>
                  <li>
                    Or maybe you want to do something in marketing, but it doesn’t matter what position you work in
                    because you are gaining industry insight.
                  </li>
                </ul>
              </div>
            </div>
            <div class="workExperienceContent">
              <div class="bgTextInformation">
                <h3>Know your skills</h3>
                <p>There are many different roles and responsibilities within the digital marketing field: social media,
                  campaign management, SEO, market research, data analytics, and more!</p>
                <p>Where can you apply your skills and experience?</p>
              </div>
            </div>
            <div class="educationContent">
              <div class="bgTextInformation">
                <h3>Understand the job market demand</h3>
                <p>With a world that has changed so much, think about the job market and high-demand opportunities in
                  your field. </p>


                <div class="examples">
                  <p>Think about how your skills and experience fit in and what types of roles you would succeed at -
                    then, brand yourself for those opportunities and apply!
                  </p>
                </div>
              </div>
            </div>
            <div class="certificationsContent">
              <div class="bgTextInformation">
                <h3>Benefits</h3>
               
                  <ul class="listList"> 
                    <li>Networking increases the number of people you know and who know you.asdfs
                    </li>
                    <li>
                      You can turn to more people for help and advice.
                    </li>
                    <li>
                      Networking keeps you in touch with opportunities.
                    </li>
                    <li>
                      Networking may be very useful at the start of your career when you are less well connected.
                    </li>
                    <li>
                      Effective networkers are more likely to be offered opportunities.
                    </li>
                    <li>
                      Networking allows you to contribute something to others – the principle of reciprocity.
                    </li>
                  </ul>
                
              </div>
            </div>
            <div class="skillContent">
              <div class="bgTextInformation">
                <h3>The importance networking
                </h3>
                <p>
                  Networking is the action or process of interacting with others to exchange information and develop
                  professional or social contacts. The hidden job market is a term used to describe jobs that aren't
                  advertised or posted online. Typically these types of jobs are found by using your network!
                </p>
                <div class="examples">
                  <ul class="listList">
                    <li>
                      80% of available jobs are not posted online
                    </li>
                    <li>
                      Referrals account for ⅓ of all hires
                    </li>
                    <li>
                      ~85% of jobs are filled through networking
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="referenceContent">
              <div class="bgTextInformation">
                <h3>Finding networking opportunities</h3>
                Check eventbrite.ca, meetup.com for networking events such as: <br/>
                <b>Job Fairs</b>
                <ul class="listList">
                  <li>Bring copies of resume</li>
                  <li>Research companies attending ahead of time</li>
                  <li>Prepare questions and make notes</li>
                  <li>Network with other people attending</li>
                </ul>
                <b>Meetups & Conferences</b>
                <ul class="listList">
                  <li>Join groups related to your interests</li>
                  <li>Chat with fellow marketers, students</li>
                  <li>Stay in touch with people you meet</li>
                  <li>Learning opportunity – ask questions</li>
                </ul>
                <b>Webinars</b>
                <ul class="listList">
                  <li>Attend online workshop
                  </li>
                  <li>Can connect with organizer or speaker</li>
                  <li>Generally there is a chat function
                  </li>
       
                </ul>
                <b>Use networking on social platforms such as -</b>
                <b>Slack Communities</b>
                <ul class="listList">
                  <li>Search for communities with topics that interest you</li>
                  <li>Connect with other users, join chats
                  </li>
                  <li><a href="https://slofile.com/">https://slofile.com/</a></li>
                  <li><a href="https://blog.standuply.com/the-ultimate-list-of-400-slack-communities-2a7f3954f1d3">https://blog.standuply.com/the-ultimate-list-of-400-slack-communities-2a7f3954f1d3</a></li>
                </ul>
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
      <div class="row">
        <!-- Container (About Section) -->
        <div class="row">
          <div class="col-sm-4">
            <div class="picture">
              <span><img src="../../../Images/javier.jpg" class="jess"></span><br>
              <h5 class="name">Javier</h5>
              <p class="description">DMS Co-op Coordinator</p>
            </div>
          </div>
          <div class="col-sm-8">
            <h1>Let`s Connect</h1>
            <p>This Co-op Portal is created for YOU to maximize your success in the Canadian labour market. This
              portal will help you understand the CICCC co-op process and provide information to start building
              your career resources ... the Canadian way! Click “Book Appointment" to meet with an advisor 1:1 and discuss this career topic in more detail. 
            </p>
            <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-03" target="_blank"><button class="btn marginBtn">Book Appointment</button></a>
          </div>
        </div>
      </div>
    </div>
  </section> 

EOT;
}

function linked() {
echo <<<EOT
 <section class="banner resumeBanner positionRelative">
    <div class="overlay">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="baseTitle valign fix-stroke">
              <span>LinkedIn</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row learnAbout ">
        <div class="col-md-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 paddingNone">
                <h1>What is LinkedIn?</h1>
              </div>
            </div>
            <div class="row">
              <p>LinkedIn is a professional social networking platform. It allows you to look for jobs, for
                companies to find new employees and for you to stay connected and up-to-date about your industry.</p>
              <p>
                When searching for a job, having a strong LinkedIn profile is just as important as a resume.
              </p>
              <a href="http://www.linkedin.com" target="_blank"><button class="btn">Linkedin.com</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <img src="../../../Images/page.jpg" class="img-responsive borderImage" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="templates">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>How to create a profile that will get you hired</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h4 class="goodShot">Good Shots</h4>
          <div class="container-fluid paddingNone">
            <div class="row">
              <div class="col-md-6">
                <img src="../../../Images/goodShot1.jpg" class="img-responsive" alt="" />
              </div>
              <div class="col-md-6">
                <img src="../../../Images/goodShot2.jpg" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h4 class="badShot">Bad Shots</h4>
          <div class="container-fluid paddingNone">
            <div class="row">
              <div class="col-md-6">
                <img src="../../../Images/badShot.jpg" class="img-responsive" alt="" />
              </div>
              <div class="col-md-6">
                <img src="../../../Images/badshot2.jpg" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="whatDoInclude">
    <div class="overCollor"></div>
    <div class="backgroundImage"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="fixTitle">
            <h1>What to include</h1>
            <p>Click on the sections below to learn more about the various components of a LinkedIn profile.</p>
            <ul class="menuResume">
              <li class="active" data-content="header"><a href="#">Attention-grabbing Headline</a></li>
              <li data-content="personal"><a href="#">A Summary that Sells</a></li>
              <li data-content="workExperience"><a href="#">Relevant Work Experience </a></li>
              <li data-content="education"><a href="#">Experience and Education </a></li>
              <li data-content="certifications"><a href="#">Skills</a></li>
              <li data-content="skills"><a href="#">Recommendations</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <div class="positionRelative">
            <div class="headerContent">
              <div class="bgTextInformation">
                <h3>Attention-grabbing Headline</h3>
                <span>Here are a few examples to give you some inspiration:</span>
                <div class="examples">
                  <ul class="listList">
                    <li>Digital Marketing Specialist with Social Media Marketing experience</li>
                    <li>Digital Marketing Specialist | SEO | Data Analytics
                    </li>
                    <li>Digital Marketing expert with experience increasing sales through effective ad campaigns</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="personalContent">
              <div class="bgTextInformation">
                <h3>A Summary that Sells </h3>
                <p>Your LinkedIn summary depends on your objective. Explain your passion and how it drives your goal, or
                  how you help others succeed. Tell a brief professional story or achievement (give examples). It is
                  much more personal than your resume objective. </p>
                <span>Here is an example:</span>
                <div class="examples">
                  I am a data-driven marketing professional with more than two years of channel and digital marketing
                  experience. My focus has been and continues to be helping small businesses find success by supporting
                  their marketing efforts across digital, social, and content.
                </div>
                <span>Here is another example:</span>
                <div class="examples">
                  I am an SEO Consultant highly specialized in boutique SEO consultancy and blogging. Awarded as the
                  Canadian Search Personality of the Year in 2020, included in Vancouver Sun’s top 10 online marketing
                  experts to follow in 2019, in Entrepreneur as one of the 50 online marketing influencers. My passion
                  is helping small brands optimize in competitive SEO markets. I offer a deep SEO know-how and help
                  clients succeed in challenging scenarios.
                </div>
              </div>
            </div>
            <div class="workExperienceContent">
              <div class="bgTextInformation">
                <h3>Experience and Education</h3>
                <p>Your Education and Experience sections should reflect what is on your resume.</p>
                <ul class="listList">
                  <li>
                    List your current and previous jobs, in reverse chronological order.
                  </li>
                  <li>
                    Find the exact company with the correct logo if you can.
                  </li>
                  <li>
                    List all of your relevant experiences that relate to your goal.
                  </li>
                  <li>
                    List your top 3-5 responsibilities that showcase your best achievements, not everything.
                  </li>
                </ul>
              </div> 
            </div>
            <div class="certificationsContent">
              <div class="bgTextInformation">
                <h3>Skills</h3>
                <p>Don’t skip this section! You can add up to 50 skills. It will help recruiters find you based on the
                  skills on your profile and you will appear in more searches each week! LinkedIn will also recommend
                  jobs to you, based on the skills on your profile.</p>
               
                <div class="examples">
                  <ul class="listList">
                    <li>Look at the skills on someone who has a job you would like to do</li>
                    <li>Look at the skills and requirements on a job description that interests you</li>
                    <li>You should also ask friends, coworkers and classmates to endorse your skills (confirm that they
                      are true). This adds A LOT of credibility to your profile.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="educationContent">
              <div class="bgTextInformation">
                <h3>Recommendations</h3>
                <p>Have you ever written a review on Google for a product or a service? Well imagine the same thing, but
                  you are the product! Ask a coworker, classmate, instructor or ex-colleague to write a few good words
                  about you and your abilities.</p>
                <div class="examples">
                  <ul class="listList">
                    <li>Be proactive… Consistently! Write posts, share posts, share articles.
                    </li>
                    <li>Send a message when you connect with someone. For example, “Hi, I am intrigued by your
                      experience in the xxxxxx industry. I would love to connect as we have similar backgrounds and
                      fields of work. Have a great week.”</li>
                      <li>
                        If you have an online portfolio….. share it! You can attach samples of your work in the experience section or include a link in your profile summary.
                      </li>
                      <li>
                        Include your LinkedIn profile on your resume, cover letter and emails to employers.
                      </li>
                  </ul>
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
          <div class="col-sm-4">
            <div class="picture">
              <span><img src="../../../Images/javier.jpg" class="jess"></span><br>
              <h5 class="name">Javier</h5>
              <p class="description">DMS Co-op Coordinator</p>
            </div>
          </div>
          <div class="col-sm-8">
            <h1>Let`s Connect</h1>

            <p>This Co-op Portal is created for YOU to maximize your success in the Canadian labour market. This
              portal will help you understand the CICCC co-op process and provide information to start building
              your career resources ... the Canadian way! Click “Book Appointment" to meet with an advisor 1:1 and discuss this career topic in more detail. 
            </p>
            <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-03" target="_blank"><button class="btn marginBtn">Book Appointment</button></a>
          </div>
        </div>
      </div>
    </div>
  </section> 
EOT;
}

function portfolio() {
echo <<<EOT
 <section class="banner resumeBanner positionRelative">
    <div class="overlay">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="baseTitle valign fix-stroke">
              <span>Portifolio</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row learnAbout ">
        <div class="row">
          <div class="col-md-12 paddingNone">
            <h1>What is a portfolio?</h1>
          </div>
        </div>
        <div class="row">
          <p>While a resume tells the world what you do, a portfolio shows how you do it. People are more likely to
            show interest in your work if you provide them with examples of your achievements. </p>
          <p>
            Additionally, a marketing portfolio helps you offer inspiration to the people who might want to work
            with you.
          </p>
          <p>
            When viewing engaging examples of your work, your audience can better envision the kinds of projects you
            will create for them.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="templates">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>What does a portfolio look like?</h1>
          <a href="https://www.canva.com/design/DAEXuZj3IVE/myrk2TjCC_vCdKLOXdUL4w/view?website#2" target="_blank"
            class="porfolioLink">Paula Botega Portfolio</a>
        </div>
        <div class="col-md-5 col-sm-offset-1">
          <img src="../../../Images/paulaPortfolio.png" class="img-responsive" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="choosingPlataform">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Choosing a Platform</h1>
          <p>Portfolios put together the pieces of your best work -- the projects that showcase your achievements,
            qualifications, and experience. To show your work, choose the right platform!</p>
          <!-- <ul>
            <li>LinkedIn</li>
            <li>Instagram</li>
            <li>Wordpress</li>
            <li>Canva</li>
            <li>Dribble</li>
            <li>Wix</li>
            <li>Squarespace</li>
          </ul> -->
          <!-- <div class="examples">
            <ul>
              <li>Are you a web designer? Build your portfolio on Wordpress!
              </li>
              <li>Are you a photographer? Show your work with Instagram!</li>
              <li>Are you a marketing campaign manager? Use PDF slides or even Canva!</li>
            </ul>
          </div> -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <a href="https://www.linkedin.com/">
            <img src="../../../Images/11.png" class="img-responsive">
          </a>
        </div>
        <div class="col-md-2">
          <a href="https://instagram.com/">
            <img src="../../../Images/5.png" class="img-responsive">
          </a>
        </div>
        <div class="col-md-2"><a href="https://www.wordpress.com">
            <img src="../../../Images/6.png" class="img-responsive">
          </a></div>
        <div class="col-md-2"><a href="https://www.canva.com/">
            <img src="../../../Images/2.png" class="img-responsive">
          </a></div>
        <div class="col-md-2"><a href="https://www.wix.com/">
            <img src="../../../Images/7.png" class="img-responsive">
          </a></div>
        <div class="col-md-2"><a
            href="https://www.squarespace.com/website-design/?channel=pbr&subchannel=go&campaign=pbr-dr-go-ca-en-squarespace-core-e&subcampaign=(brand-core_squarespace_e)&utm_source=google&utm_medium=pbr&utm_campaign=pbr-dr-go-ca-en-squarespace-core-e&utm_term=squarespace&gclid=Cj0KCQjw--GFBhDeARIsACH_kdZFEpSqTB5nBj2xGJ02xYA-fVLOehWt3qiNJF6_Yy7vX61VK3uPVDwaAnpQEALw_wcB">
            <img src="../../../Images/10.png" class="img-responsive">
          </a></div>
      </div>

    </div>
  </section>

  <section class="whatDoInclude">
    <div class="overCollor"></div>
    <div class="backgroundImage"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="fixTitle">
            <h1>What to include</h1>
            <p>
              Click on the sections below to learn more about the various components of a portfolio.
            </p>
            <ul class="menuResume">
              <li class="active" data-content="header"><a href="#">Cover Page</a></li>
              <li data-content="personal"><a href="#">Short Bio </a></li>
              <li data-content="workExperience"><a href="#">Resume </a></li>
              <li data-content="education"><a href="#"> Samples of your best work</a></li>
              <li data-content="certifications"><a href="#"> Contact Details</a></li>
              <li data-content="skills"><a href="#">Recommendations</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-offset-1">
          <div class="positionRelative">
            <div class="headerContent">
              <div class="bgTextInformation">
                <h3>Cover Page</h3>
                <p>Prepare a simple cover page with your name, professional title, and business name and logo (if
                  relevant).</p>
              </div>
            </div>
            <div class="personalContent">
              <div class="bgTextInformation">
                <h3>Short Bio </h3>
                <p>Introduce your work with a strong personal statement that highlights your interests, background and
                  expertise. This is also a great place to include an explanation of why you find your work meaningful.
                </p>
              </div>
            </div>
            <div class="workExperienceContent">
              <div class="bgTextInformation">
                <h3>Resume</h3>
                <p>Add a resume to your portfolio to outline your education and work experiences and give some context
                  behind your work. </p>
              </div>
            </div>
            <div class="certificationsContent">
              <div class="bgTextInformation">
                <h3>Contact Details</h3>
                <p>If the goal of your portfolio is to get people to contact you for work opportunities, you’ll need to
                  make it easy for them to find your professional email address and phone number. If you have social
                  media accounts relevant to your profession - for instance, a LinkedIn account or Instagram account
                  showcasing your work, you may want to link to those pages as well.</p>
              </div>
            </div>
            <div class="educationContent">
              <div class="bgTextInformation">
                <h3>Samples of your best work</h3>
                <p>This is the core of your marketing portfolio. Highlight your most successful projects by sharing
                  stunning visuals of your work, as well as explanations of the thought process and methodology behind
                  each project. You should also accompany each explanation with data-driven metrics, such as increases
                  in conversions and revenue.</p>
                <b>Describe the following for each project</b>
                <ul class="listList">
                  <li>Goals of the project
                  </li>
                  <li>Your role / duties</li>
                  <li>
                    Explain your work process
                  </li>
                  <li>
                    Show your results
                  </li>
                </ul>
              </div>
            </div>
            <div class="skillContent">
              <div class="bgTextInformation">
                <h3>Recommendations</h3>
                <p>To create a strong first impression, place positive customer testimonials side-by-side your work
                  samples. Assuring people that customers were satisfied with your work can boost the credibility of
                  your claims. You can also include recommendations from coworkers, classmates, or even your
                  instructors.</p>
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
          <div class="col-sm-4">
            <div class="picture">
              <span><img src="../../../Images/javier.jpg" class="jess"></span><br>
              <h5 class="name">Javier</h5>
              <p class="description">DMS Co-op Coordinator</p>
            </div>
          </div>
          <div class="col-sm-8">
            <h1>Let`s Connect</h1>

            <p>This Co-op Portal is created for YOU to maximize your success in the Canadian labour market. This
              portal will help you understand the CICCC co-op process and provide information to start building
              your career resources ... the Canadian way! Click “Book Appointment" to meet with an advisor 1:1 and
              discuss this career topic in more detail.
            </p>
            <a href="https://calendly.com/coop-advisor-ciccc/student-appointments?month=2021-03" target="_blank"><button
                class="btn marginBtn">Book Appointment</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
EOT;
}
?>
