<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="main/main.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="accordion.js"></script>

    <script type="text/javascript">
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
</head>
<body>
    
    <!--Nav-Bar-->
    <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <a href="#!">Logo</a>
          </div>
          <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="#!">About</a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="about.php">About MPA</a>
                  </li>
                  <li>
                    <a href="faq.php">FAQs</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="member.php">Resources</a>
              </li>
              <li>
                <a href="#!">Membership</a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="membership.php">Membership</a>
                  </li>
                  <li>
                    <a href="#!">Newsletter</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="message.php#contact-start">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>

<!--FAQ SECTION-->
        <div class="faq-wrapper">
            <h1 class="faq-title">
                Frequently Asked Questions & Calender
            </h1>
        </div>
        
    </head>
    <body>
        <div id="container">
            
            <ul class="faq">
                <li class="q"><i class="ion-chevron-right"></i>How can I tell if it is time to ask for some help?
                </li>
                <li class="a">
                        <ul>
                                <li class="bullet-1">Are you a licensed psychologist or licensed psychological associate? How long have you been practicing?
                                    </li>
                                    <li class="bullet-2">What areas do you specialize in? (such as family therapy, child psychology, adult psychotherapy, etc.)
                                        </li>
                                        <li class="bullet-3">What kind of treatment do you usually use, and why do you feel this would be effective for my situation? How long would you expect my treatment to last?
                                            </li>
                                            <li class="bullet-4">What are your fees? Do you accept my insurance or HMO coverage? Will you directly bill my insurance company? Do you have a sliding fee scale, or will you set up a payment plan? 
                                                </li>
                            </ul>
                </li>
                
                <li class="q"><i class="ion-chevron-right"></i>What is a psychologist?</li>
                <li class="a">Psychologists are highly trained professionals with expertise in the areas of human behavior, mental health assessment, diagnosis, treatment, and behavior change. Psychologists apply scientifically validated procedures to help people change their thoughts, emotions, and behaviors, and to cope better with difficult situations.
                    <ul>
                        <li class="second-para">In North Carolina, licensed psychologists have a doctoral degree in psychology. After graduation from college, licensed psychologists spend an average of 7 years in graduate education, training, and research. As part of their professional training they complete a supervised clinical internship in a hospital or organized health setting, and at least one year of post-doctoral supervised experience before they can practice independently in any health care arena. Licensed psychological associates have a master's degree in psychology. They also have graduate-level training, a clinical internship, and post-graduate supervision. 

                            </li>
                    </ul>
                </li>
                
                <li class="q"><i class="ion-chevron-right"></i>How can I find a psychologist?</li>
                <li class="a">First, gather information. Talk to your doctor or other health professionals. Today, many family practitioners work with a team of providers, including psychologists, and can refer you to one that they know and trust. Consult the department of psychology at a local college or university, or the local community mental health center. You could also ask a clergy member, as well as family members and friends who may know or have heard about individual psychologists in your community.</li>
                
              <li class="q"><i class="ion-chevron-right"></i>How can I choose a psychologist who is right for me?              </li>
                <li class="a">Once you have the name of several psychologists, there are several questions you'll want to ask, including:
                    <ul>
                        <li class="bullet-1">Are you a licensed psychologist or licensed psychological associate? How long have you been practicing?
                            </li>
                            <li class="bullet-2">What areas do you specialize in? (such as family therapy, child psychology, adult psychotherapy, etc.)
                                </li>
                                <li class="bullet-3">What kind of treatment do you usually use, and why do you feel this would be effective for my situation? How long would you expect my treatment to last?
                                    </li>
                                    <li class="bullet-4">What are your fees? Do you accept my insurance or HMO coverage? Will you directly bill my insurance company? Do you have a sliding fee scale, or will you set up a payment plan? 
                                        </li>
                    </ul>
                </li>
                
                <li class="q"><i class="ion-chevron-right"></i>How does therapy work?</li>
                <li class="a">Therapy works by helping you look objectively at behaviors, feelings, and thoughts in situations that you find problematic. It helps you to learn more effective ways to deal with those situations. 
                    </li>
                
                <li class="q"><i class="ion-chevron-right"></i>What is a Psychiatrist</li>
                <li class="a">A psychiatrist is a physician (MD or DO) who completes medical school and an additional three or four year psychiatric residency, and is licensed to prescribe medications. 
                    </li>
                
                <li class="q"><i class="ion-chevron-right"></i>What is a psychotherapist or counselor?</li>
                <li class="a">Psychotherapists and counselors may have various kinds of training of varying quality. Some therapists/counselors have only a bachelor's degree, some have a master's degree, and some have a doctorate. A person who describes himself/herself as a "psychotherapist" is not necessarily a licensed psychologist.
                    </li>
                
                <li class="q"><i class="ion-chevron-right"></i>Is therapy included in my health plan coverage?</li>
                <li class="a">If you do not have coverage and will be paying out of pocket, you can talk with your psychologist about sliding scale fees or working out a payment plan. Community mental health centers are also an alternative. 

                    </li>
                
              <li class="q"><i class="ion-chevron-right"></i>How should I evaluate my insurance coverage for psychological services?</li>
                <li class="a">
                        <ul>
                                <li class="bullet-1">Are you a licensed psychologist or licensed psychological associate? How long have you been practicing?
                                    </li>
                                    <li class="bullet-2">What areas do you specialize in? (such as family therapy, child psychology, adult psychotherapy, etc.)
                                        </li>
                                        <li class="bullet-3">What kind of treatment do you usually use, and why do you feel this would be effective for my situation? How long would you expect my treatment to last?
                                            </li>
                                            <li class="bullet-4">What are your fees? Do you accept my insurance or HMO coverage? Will you directly bill my insurance company? Do you have a sliding fee scale, or will you set up a payment plan? 
                                                </li>
                                                <li class="bullet-4">What are your fees? Do you accept my insurance or HMO coverage? Will you directly bill my insurance company? Do you have a sliding fee scale, or will you set up a payment plan? 
                                                    </li>
                            </ul>
                </li>
                
                <li class="q"><i class="ion-chevron-right"></i>What if I do not have insurance coverage, or if the coverage is inadequate?  </li>
                <li class="a">You can talk with the benefits or human resource manager at your place of employment. Let him/her know that you believe mental health services are important, and that you are concerned that you have limited or no coverage. If you belong to a union, you can talk to your union leaders. 
                    </li>
                
            </ul>
        </div>
        
        <footer>
            <h3>Have a question? Ask us <a href="message.html">here</a>, and we will get back to you shortly.</h3>
        </footer>

        <div class="footer-container">

                <img src="img/Nero.png" alt="" class="nero">
                <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                        All rights reserved.</p>
            </div>
    </body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
    sal();
</script>
<script src="app.js"></script>
</html>