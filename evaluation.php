<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IBM Evaluation</title>
    <link rel="website icon" href="./img/logo1.jpg">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/media.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script defer src="./js/chart.js"></script>
    <script defer src="./js/chartIntegrate.js"></script>
    <script src="./js/common.js" defer></script>
  </head>
  <body>
    <?php require_once "./partials/navbar.php"?>
    <section id="evaluation">
      <div class="evaluation d-flex">
        <div class="sidebar">
          <ul>
            <h4>Company Evaluation</h4>
            <li>
              <i class="fa-solid fa-magnifying-glass-chart"></i>
              <a href="#share">Share Evaluation</a>
            </li>
            <li>
              <i class="fa-solid fa-flag"></i>
              <a href="#brand">Brand Evaluation </a>
            </li>
            <li>
              <i class="fa-brands fa-superpowers"></i>
              <a href="#goodwill">Goodwill </a>
            </li>
            <li>
              <i class="fa-solid fa-money-bill-trend-up"></i>
              <a href="#market">Market value </a>
            </li>
            <li>
              <i class="fa-solid fa-comment-medical"></i>
              <a href="#employee">Employee Opinion </a>
            </li>
          </ul>
          <hr style="color: white" />
          <div class="other-info text-light">
            <div class="content">
              <h5>Early Years (1911-1930s)</h5>
              <div class="data">
                <li>1911</li>
                <p>
                  IBM was founded as the Computing-Tabulating-Recording Company
                  (CTR) through a merger of three companies: the Tabulating
                  Machine Company, the International Time Recording Company, and
                  the Computing Scale Company.
                </p>
              </div>
              <div class="data">
                <li>1924</li>
                <p>
                  CTR was renamed International Business Machines Corporation
                  (IBM).
                </p>
              </div>
              <div class="data">
                <li>1930</li>
                <p>
                  IBM introduced the first electric accounting machine and was a
                  major supplier of punch card equipment used in government and
                  business data processing.
                </p>
              </div>
            </div>
            <hr />
            <div class="content">
              <h5>Mid-20th Century (1940s-1960s)</h5>
              <div class="data">
                <li>1944</li>
                <p>
                  IBM collaborated with Harvard University to develop the Mark
                  I, the first programmable digital computer in the United
                  States.
                </p>
              </div>
              <div class="data">
                <li>1956</li>
                <p>
                  IBM introduced the IBM 305 RAMAC, the first computer with a
                  hard disk drive.
                </p>
              </div>
            </div>
            <hr />
            <div class="content">
              <h5>Modern Era (2000s-Present)</h5>
              <div class="data">
                <li>2011</li>
                <p>
                  IBM celebrated its 100th anniversary and continued to focus on
                  areas like cloud computing, data analytics, and artificial
                  intelligence.
                </p>
              </div>
              <div class="data">
                <li>2020</li>
                <p>
                  IBM announced the spin-off of its managed infrastructure
                  services unit into a new public company, Kyndryl, which was
                  completed in 2021.
                </p>
              </div>
              <div class="data">
                <li>2024</li>
                <p>
                  IBM continues to be a leader in hybrid cloud, AI, and quantum
                  computing, driving innovation and helping businesses digitally
                  transform.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="charts">
          <div class="info" id="share">
            <div class="section-heading">
              <span class="background-text">Stock Evaluation</span>
              <h4>Share</h4>
            </div>
            <div class="d-flex">
              <div class="chart">
                <canvas id="chart" height="400" width="400"></canvas>
              </div>
              <div class="information">
                <p>
                  IBM (International Business Machines Corporation) has long
                  been a significant player in the technology sector. Its stock
                  performance reflects its position as a leader in areas such as
                  cloud computing, artificial intelligence, and quantum
                  computing. While IBM has faced challenges from newer tech
                  giants and evolving market trends, it continues to adapt
                  through strategic acquisitions and innovations. The company's
                  emphasis on hybrid cloud solutions and AI-driven services aims
                  to bolster its competitive edge. Despite fluctuations in its
                  share price, IBM's consistent dividend payouts and focus on
                  high-margin businesses contribute to its appeal among
                  investors looking for stability and growth in the tech
                  industry.
                </p>
                <a href="#" class="btn btn-primary">Explore More</a>
              </div>
            </div>
          </div>
          <div class="info" id="brand">
            <div class="section-heading">
              <span class="background-text">Brand Evaluation</span>
              <h4>Brand's</h4>
            </div>
            <div class="d-flex">
              <div class="information">
                <p>
                  IBM offers a diverse range of products and brands that cater
                  to various industries. Its powerful mainframes, like the IBM Z
                  series, and high-performance computing systems, such as IBM
                  Power Systems, are widely used in enterprise environments. The
                  IBM Watson AI platform provides advanced data analysis and
                  cognitive computing capabilities, while IBM Cloud offers
                  robust infrastructure and platform solutions for businesses.
                  The acquisition of Red Hat has bolstered IBM's open-source
                  software offerings. Additionally, IBM provides comprehensive
                  consulting and IT services, helping organizations optimize
                  their technology and drive innovation.
                </p>
                <a href="#" class="btn btn-primary">Explore More</a>
              </div>
              <div class="chart">
                <canvas id="chart1" height="400" width="400"></canvas>
              </div>
            </div>
          </div>
          <div class="info" id="goodwill">
            <div class="section-heading">
              <span class="background-text">Company Goodwill</span>
              <h4>Goodwill</h4>
            </div>
            <div class="d-flex">
              <div class="chart">
                <canvas id="chart2" height="400" width="400"></canvas>
              </div>
              <div class="information">
                <p>
                  IBM's goodwill reflects its long-standing reputation for
                  innovation, quality, and reliability in the tech industry.
                  Built on decades of pioneering advancements, this intangible
                  asset fosters strong customer loyalty and sustained business
                  relationships. Strategic acquisitions like Red Hat and robust
                  corporate social responsibility initiatives further enhance
                  IBM's public perception and overall goodwill.
                </p>
                <a href="#" class="btn btn-primary">Explore More</a>
              </div>
            </div>
          </div>
          <div class="info" id="market">
            <div class="section-heading">
              <span class="background-text">Market Evaluation</span>
              <h4>Market</h4>
            </div>
            <div class="d-flex">
              <div class="information">
                <p>
                  IBM's market value reflects its significant position in the
                  global technology sector. Despite facing competition from
                  newer tech giants, IBM remains a key player due to its strong
                  presence in cloud computing, AI, and enterprise solutions. The
                  company's strategic acquisitions and consistent dividend
                  payouts contribute to its appeal among investors. While market
                  fluctuations impact its share price, IBM's focus on
                  high-margin businesses and innovation sustains its market
                  value over time.
                </p>
                <a href="#" class="btn btn-primary">Explore More</a>
              </div>
              <div class="chart">
                <canvas id="chart3" height="400" width="500"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="employee">
        <div class="head">
          <span class="background-text">Team & Members</span>
          <h2 class="main-heading">Members</h2>
        </div>
        <button class="previous">Prev</button>
        <button class="next">Next</button>
        <div
          class="employee-opinion d-flex overflow-scroll"
          id="Employee-Opinions"
        >
          <div class="opinions">
            <img src="./img/consultant1.jpg" alt="" />
            <p>
              IBM offers great opportunities for career growth and learning through its diverse projects
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
          </div>
          <div class="opinions">
            <img src="./img/consultant2.jpg" alt="" />
            <p>
              The work-life balance at IBM is generally good, with flexible working arrangements.
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </span>
          </div>

          <div class="opinions">
            <img src="./img/consultant3.jpg" alt="" />
            <p>
              Management encourages innovation and provides resources to explore new ideas.
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </span>
          </div>

          <div class="opinions">
            <img src="./img/consultant4.jpg" alt="" />
            <p>
              IBM's commitment to diversity and inclusion makes it a welcoming place to work.
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </span>
          </div>

          <div class="opinions">
            <img src="./img/consultant5.jpg" alt="" />
            <p>
              The benefits package at IBM is competitive and includes perks like health insurance and retirement plans.
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </span>
          </div>
          <div class="opinions">
            <img src="./img/consultant6.jpg" alt="" />
            <p>
              Team collaboration is strong at IBM, fostering a supportive and inclusive work environment.
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
          </div>
          <div class="opinions">
            <img src="./img/consultant7.jpg"/>
            <p>
              IBM invest on employee development and there growth.
            </p>
            <span
              ><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </span>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-dark">
      <?php require_once "./partials/footer.php";?>
    </section>
  </body>
</html>
