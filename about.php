<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IBM About-Us</title>
    <link rel="website icon" href="./img/logo1.jpg">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="./js/common.js" defer></script>
    <script src="./js/about.js" defer></script>
  </head>
  <body>
    <!----Navbar Included here--->
    <?php require_once "./partials/navbar.php"?>
    <!--About Section Start here-->
    <section id="about">
      <div class="about-section shadow-sm">
        <div class="basic-info">
          <div class="about-img">
            <img src="./img/ibmBg.jpg" />
            <div class="w-100 text-center text-warning">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="ibm-info">
            <div class="heading">
              <h3>International Business Machines</h3>
            </div>
            <div class="information">
              <div class="content">
                <p>
                  IBM Corporation, founded in 1911 and based in Armonk, New
                  York, is a leading American tech company. Known for
                  innovations like the ATM and floppy disk, IBM now focuses on
                  cloud computing, AI, and data analytics, exemplified by its
                  Watson AI platform. Renowned for research and development, IBM
                  drives digital transformation worldwide.
                </p>
                <ul>
                  <li>
                    <i class="fa-solid fa-location-crosshairs"></i
                    ><span class="mx-3"
                      >IBM corporation,Armonk,New York,United States of
                      America</span
                    >
                  </li>
                  <li>
                    <i class="fa-solid fa-envelope"></i
                    ><span class="mx-3">ibmservices@corporate.com</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-phone"></i
                    ><span class="mx-3">+095463724143</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-location-dot"></i
                    ><span class="mx-3">United States of America</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="company-projects">
          <div class="project-info">
            <div class="head">
              <span class="background-text">Company Projects</span>
              <h2 class="main-heading">Projects</h2>
            </div>
            <button class="previous" id="previous-btn">Prev</button>
            <button class="next" id="next-btn">Next</button>
            <div class="project-container" id="project-container">
              <div class="project">
                <h3>1997</h3>
                <h4>Deep Blue</h4>
                <p>
                  A chess-playing computer that defeated world champion Garry
                  Kasparov.
                </p>
              </div>
              <div class="project">
                <h3>1991</h3>
                <h4>IBM global services</h4>
                <p>
                  The formation of IBM's services arm, focusing on IT consulting
                  and outsourcing.
                </p>
              </div>
              <div class="project">
                <h3>1997</h3>
                <h4>Deep Blue</h4>
                <p>
                  A chess-playing computer that defeated world champion Garry
                  Kasparov.
                </p>
              </div>
              <div class="project">
                <h3>1992</h3>
                <h4>ThinkPad</h4>
                <p>
                  Introduction of the iconic laptop series, later sold to Lenovo
                  in 2005.
                </p>
              </div>
              <div class="project">
                <h3>2004</h3>
                <h4>Blue Gene</h4>
                <p>
                  A project to design supercomputers, leading to some of the
                  fastest machines of their time.
                </p>
              </div>
              <div class="project">
                <h3>2011</h3>
                <h4>IBM Watson</h4>
                <p>
                  AI platform that won Jeopardy! against former champions and
                  later expanded into various industries.
                </p>
              </div>
              <div class="project">
                <h3>2013</h3>
                <h4>IBM Cloud</h4>
                <p>
                  Development of IBM's cloud computing services, including IaaS,
                  PaaS, and SaaS.
                </p>
              </div>
              <div class="project">
                <h3>2016</h3>
                <h4>Quantum Computing</h4>
                <p>
                  Launch of the IBM Quantum Experience, providing public access
                  to quantum computers.
                </p>
              </div>
              <div class="project">
                <h3>2017</h3>
                <h4>IBM Blockchain</h4>
                <p>
                  Development of blockchain solutions for supply chain
                  management, finance, and other industries.
                </p>
              </div>
              <div class="project">
                <h3>2018</h3>
                <h4>Project Debater</h4>
                <p>
                  An AI system capable of debating humans on complex topics.
                </p>
              </div>
              <div class="project">
                <h3>2019</h3>
                <h4>Red Hat Acquisition</h4>
                <p>
                  IBM's $34 billion purchase of Red Hat to strengthen its hybrid
                  cloud offerings.
                </p>
              </div>
              <div class="project">
                <h3>2019</h3>
                <h4>IBM Research AI Hardware Center</h4>
                <p>Initiative to advance AI hardware technology.</p>
              </div>
              <div class="project">
                <h3>2020</h3>
                <h4>COVID-19 Response</h4>
                <p>
                  Various projects including AI-driven research and health data
                  management tools.
                </p>
              </div>
              <div class="project">
                <h3>2020</h3>
                <h4>AI Fairness 360</h4>
                <p>
                  An open-source toolkit to help detect and mitigate bias in
                  machine learning models.
                </p>
              </div>
              <div class="project">
                <h3>2021</h3>
                <h4>IBM Cloud Satellite</h4>
                <p>
                  A service that extends IBM Cloud to any environment, including
                  on-premises and edge locations.
                </p>
              </div>
              <div class="project">
                <h3>2022</h3>
                <h4>IBM Carbon Performance Engine</h4>
                <p>
                  A platform to help companies manage and reduce their carbon
                  footprint.
                </p>
              </div>
              <div class="project">
                <h3>2023</h3>
                <h4>AI for Cybersecurity</h4>
                <p>
                  Enhancements in using AI to detect and respond to
                  cybersecurity threats.
                </p>
              </div>
              <div class="project">
                <h3>2024</h3>
                <h4>Hybrid Cloud and AI Strategy</h4>
                <p>
                  Ongoing projects focusing on integrating AI with hybrid cloud
                  solutions.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="company-location">
          <div class="location">
            <div class="head">
              <span class="background-text">Let's Find We!</span>
              <h2 class="main-heading">Location</h2>
            </div>
            <div class="map">
              <div class="map-content">
                <div class="data">
                  <div class="sub-heading">
                    <h4>IBM India private limited,pune</h4>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="mx-3">
                          191A/2a/1/2, Loop Rd, Off Airport Road, Next to Don
                          Bosco School, Shastrinagar, Yerawada, Pune,
                          Maharashtra 411006
                        </p>
                      </li>
                      <li>
                        <i class="fa-solid fa-phone"></i>
                        <span class="mx-3">+008765432190 </span>
                      </li>
                      <li>
                        <i class="fa-solid fa-envelope"></i>
                        <span class="mx-3"> ibmservice@corporate.com </span>
                      </li>
                      <li>
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <span class="mx-3"> Pune,Maharashtra,India. </span>
                      </li>
                      <li class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </li>
                      <li class="text-primary">
                        <span>Reviews :</span>
                        <span>1,398</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.467985169195!2d73.88915517417034!3d18.552928668187068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c125eeac05af%3A0x46a71deb5fdc86c7!2sIBM%20India%20Private%20Limited!5e0!3m2!1sen!2sin!4v1720541633492!5m2!1sen!2sin"
                allowfullscreen=""
                height="450"
                width="65%"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---Footer Included here--->
    <section class="bg-dark">
      <?php require_once "./partials/footer.php";?>
    </section>
  </body>
</html>
