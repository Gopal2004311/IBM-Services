<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IBM Products & Services</title>
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
    <script src="./js/chart.js"></script>
    <script src="./js/products.js" defer></script>
  </head>
  <body>
    <?php require_once "./partials/navbar.php"?>
    <section id="products">
      <aside>
        <div class="company-products">
          <div class="heading">
            <h3>Products & Services</h3>
          </div>
          <div class="side-content">
            <ul>
              <li>
                <i class="fa-solid fa-star"></i
                ><a class="mx-2" href="#features">Features</a>
              </li>
              <li>
                <i class="fa-solid fa-graduation-cap"></i
                ><a class="mx-2" href="#ai&machineLearning">AI & Machine Learning</a>
              </li>
              <li>
                <i class="fa-solid fa-chart-simple"></i
                ><a class="mx-2" href="#analytics">Analytics</a>
              </li>
              <li>
                <i class="fa-solid fa-people-roof"></i
                ><a class="mx-2" href="#assetManagement">Asset Management</a>
              </li>
              <li>
                <i class="fa-solid fa-business-time"></i
                ><a class="mx-2" href="#businessAutomation">Business Automation</a>
              </li>
              <li>
                <i class="fa-solid fa-box-open"></i
                ><a class="mx-2" href="#containers">Containers</a>
              </li>
              <li>
                <i class="fa-solid fa-database"></i
                ><a class="mx-2" href="#databases">Databases</a>
              </li>
              <li>
                <i class="fa-solid fa-gauge-high"></i
                ><a class="mx-2" href="#devOps">DevOps</a>
              </li>
              <li>
                <i class="fa-solid fa-microchip"></i
                ><a class="mx-2" href="#ITAutomation">IT Automation</a>
              </li>
              <li>
                <i class="fa-solid fa-align-center"></i
                ><a class="mx-2" href="#middleware">Middleware</a>
              </li>
            </ul>
            <hr>
            <canvas height="150" width="100" id="productChart1" style="background-color: white;border-radius:4px;margin-top:1rem;"></canvas>
            <p style="width: 16rem; margin-top:1rem;">
              From 1991 to 2024, IBM underwent significant transformations. In the early
              1990s, CEO Lou Gerstner led a major restructuring, shifting focus from hardware
              to services and software. Throughout the 2000s, IBM expanded its software and
              consulting services, selling its PC division to Lenovo in 2005. The company
              invested heavily in data analytics, cloud computing, and AI, introducing Watson
              in 2011. In the 2010s, IBM re-branded as a cloud and cognitive solutions company,
              acquiring Red Hat in 2019 to enhance its hybrid cloud strategy. In the 2020s,
              IBM emphasized AI, quantum computing, and sustainability, solidifying its
              position as a leader in enterprise IT solutions.
            </p>
          </div>
        </div>
      </aside>
      <main>
        <div class="main-data">
          <div class="products">
            <div class="data-container">
              <div class="section-info" id="features">
                <div class="heading">
                  <h3>Features <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="api-connect">
                  <div class="content-heading">
                    <h4>API Connect</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM API Connect is a full lifecycle API management solution
                    that uses an intuitive experience to help consistently
                    create, manage, secure, socialize and monetize APIs, which
                    promotes digital transformation on premises and across
                    clouds. This means you and your customers can power digital
                    apps and spur innovation in real-time. IBM API Connect is
                    also available as-a-Service as a highly scalable, fully
                    managed API management platform on Amazon Web Services
                    (AWS).
                    </p>
                    <a
                    href="https://www.ibm.com/products/api-connect?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="IBMZ">
                  <div class="content-heading">
                    <h4>IBM Z</h4>
                  </div>
                  <div class="description">
                    <p>
                    IBM Z® is a family of modern infrastructure that runs
                    enterprise operating systems and IBM Z systems software. IBM
                    Z delivers the security, resiliency, performance,
                    scalability and sustainability that you would expect from a
                    flagship enterprise compute platform from IBM®. To help meet
                    the changing demands of the world's largest enterprises, IBM
                    z16™ enables AI inferencing at unprecedented speed and scale
                    and IBM watsonx Code Assistant™ for Z simplifies and
                    accelerates application modernization through generative AI.
                    </p>
                    <a
                    href="https://www.ibm.com/z?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="RPA">
                  <div class="content-heading">
                    <h4>Robotic Process Automation(RPA)</h4>
                  </div>
                  <div class="description">
                    <p>
                    The IBM Robotic Process Automation offering helps you
                    automate more businesses and IT processes at scale with the
                    ease and speed of traditional RPA. Software robots, or bots,
                    can act on AI insights to complete tasks with no lag time
                    and enable you to achieve digital transformation.
                    </p>
                    <a
                    href="https://www.ibm.com/products/robotic-process-automation?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="IBM Cloud">
                  <div class="content-heading">
                    <h4>IBM Cloud</h4>
                  </div>
                  <div class="description">
                    <p>
                    An enterprise cloud platform designed for even the most
                    regulated industries, delivering a highly resilient,
                    performant, secure and compliant cloud.
                    </p>
                    <a
                    href="https://www.ibm.com/cloud?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="IBM storage defender">
                  <div class="content-heading">
                    <h4>IBM Storage Defender</h4>
                  </div>
                  <div class="description">
                    <p>
                    IBM Storage Defender provides visibility across all of your
                    storage, leverages AI-driven intelligence from IBM to detect
                    threats such as ransomware, and identifies the safest
                    recovery points. Defender integrates with your existing
                    security operations so you can recover quickly and securely.
                    See what IBM Storage Defender can do by registering for a
                    live demo today.
                    </p>
                    <a
                    href="https://www.ibm.com/products/storage-defender?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="flash System">
                  <div class="content-heading">
                    <h4>IBM Storage Flash System</h4>
                  </div>
                  <div class="description">
                    <p>
                    Next gen FlashCore Module 4 (FCM4) provides resilient data
                    storage in the event of a cyber-attack. The new technology
                    enabled by FCM4 is designed to continuously monitor
                    statistics gathered from every single I/O using machine
                    learning models to detect anomalies like ransomware in less
                    than a minute4.
                      <br>
                      <b>Benefits include:</b>
                      <ul>
                        <li>Identify threats in real-time.</li>
                        <li>Respond to cyber threats quickly.</li>
                        <li>Use AI to improve cyber-threat detection times.</li>
                      </ul>
                    </p>
                    <a
                    href="https://www.ibm.com/products/storage-defender?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="ai&machineLearning">
                <div class="heading">
                  <h3>AI & Machine Learning <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="AIOps">
                  <div class="content-heading">
                    <h4>IBM Cloud Pak for AIOps</h4>
                  </div>
                  <div class="description">
                  <p>
                    Innovate faster, reduce operational cost and transform IT operations (ITOps)
                    across a changing landscape with an AIOps platform that delivers visibility into
                    performance data and dependencies across environments. Embrace artificial
                    intelligence, machine learning and automation to help ITOps managers and Site
                    Reliability Engineers (SREs) address incident management and remediation.
                  </p>
                  <a
                    href="https://www.ibm.com/products/cloud-pak-for-aiops?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
                <div class="content" id="data">
                  <div class="content-heading">
                    <h4>Cloud PAk for Data</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM Cloud Pak® for Data is a modular set of integrated software components for
                      data analysis, organization and management. It is available for self-hosting, or
                      as a managed service on IBM Cloud.
                    </p>
                    <a
                    href="https://www.ibm.com/products/cloud-pak-for-data?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                  </div>
                </div>

                <div class="content" id="catalog">
                  <div class="content-heading">
                    <h4>Knowledge Catalog</h4>
                  </div>
                  <div class="description">
                    <p>
                    IBM Knowledge Catalog is a data governance software that provides a data catalog
                    to automate data discovery, data quality management, data lineage and data
                    protection. The cloud-based enterprise metadata repository activates information
                    for artificial intelligence (AI), machine learning (ML) and deep learning
                    supported by active metadata. Find, understand, curate and access data,
                    knowledge assets and their relationships, wherever they reside. Use IBM
                    Knowledge Catalog for IBM Cloud Pak for Data to deliver business-ready data to
                    feed AI and analytics projects.
                    </p>
                    <a
                    href="https://www.ibm.com/products/knowledge-catalog?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                  </div>
                </div>
                <div class="content" id="watsonDiscovery">
                  <div class="content-heading">
                    <h4>Watson Discovery</h4>
                  </div>
                  <div class="description">
                    <p>
                    What if you could discover deeper insights buried inside your business documents
                    with less effort in a fraction of the time? With IBM Watson® Discovery, you can
                    boost the productivity of knowledge workers by automating the discovery of
                    information and insights with advanced Natural Language Processing and
                    Understanding. That means faster business results, satisfied customers and
                    happier employees. We deliver truly enterprise-grade, trusted, scalable and
                    easy-to-use Natural Language AI, powered by custom NLP models and Large Language
                    Models (LLMs) from IBM Research.
                    </p>
                    <a
                    href="https://www.ibm.com/products/watson-discovery?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                  </div>
                </div>
                <div class="content" id="watsonx">
                  <div class="content-heading">
                    <h4>Watsonx</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® watsonx™ AI and data platform includes three core components and a set of
                      AI assistants designed to help you scale and accelerate the impact of AI with
                      your trusted data across your business. Enterprises turn to watsonx because it is:
                      <ul>
                        <li>
                          <b>Open:</b>
                          <p>
                            Based on open technologies that provide a variety of models to cover enterprise
                            use cases and support compliance initiatives.
                          </p>
                        </li>
                        <li>
                          <b>targeted:</b>
                          <p>
                            Targeted to specific enterprise domains like HR, customer service or IT
                            operations to unlock new value.
                          </p>
                        </li>
                        <li>
                          <b>trusted:</b>
                          <p>
                            Designed with principles of transparency, responsibility and governance so you
                            can manage ethical and accuracy concerns.
                          </p>
                        </li>
                        <li>
                          <b>Empowering:</b>
                          <p>
                            Go beyond being an AI user and become an AI value creator, owning the value your
                            models create.
                          </p>
                        </li>
                      </ul>
                    </p>
                    <a
                    href="https://www.ibm.com/watsonx?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                  </div>
                </div>
                <div class="content" id="watsonxAssistant">
                  <div class="content-heading">
                    <h4>Watsonx Assistant</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM watsonx Assistant is a next-gen conversational AI solution—it that empowers
                      a broader audience that includes non-technical business users, anyone in your
                      organization to effortlessly build generative AI Assistants that deliver
                      frictionless self-service experiences to customers across any device or channel,
                      help boost employee productivity, and scale across your business.
                    </p>
                    <a
                    href="https://www.ibm.com/products/watsonx-assistant"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="analytics">
                <div class="heading">
                  <h3>Analytics <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="BAE">
                  <div class="content-heading">
                    <h4>Business Analytics Enterprise</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Business Analytics Enterprise provides a single entry no-code content hub
                      to discover, personalize and recommend business analytics content among multiple
                      vendors. It's an analytics platform that combines predictive analytics,
                      reporting, data analytics and data integration capabilities natively
                      out-of-the-box. Use insights mined from your data sets to adjust organizational
                      plans, budgets, reports and forecasts in real time. Adapt to changing market
                      conditions or customer demand at the speed of business, while ensuring
                      operational activities align to goals and objectives.
                    </p>
                    <a
                    href="https://www.ibm.com/products/business-analytics-enterprise?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="cognosAnalytic">
                  <div class="content-heading">
                    <h4>Congos Analytics</h4>
                  </div>
                  <div class="description">
                    <p>
                      Unlock the full potential of your data with AI-powered automation and insights
                      in Cognos Analytics. The natural language AI assistant is always
                      available - describe the data you need and let Cognos Analytics build stunning
                      data visualizations for you. Describe a question or a hypothesis you want to
                      test and let AI give you the insights you need.
                    </p>
                    <a
                    href="https://www.ibm.com/products/cognos-analytics?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="netezza">
                  <div class="content-heading">
                    <h4>Netezza</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Netezza® Performance Server is a cloud-native enterprise data warehouse
                      designed to operationalize deep analytics, business intelligence and
                      AI/maching-learning (ML) workloads by making data unified, accessible and
                      scalable, anywhere. With new support for open formats such as Parquet and Apache
                      Iceberg, plus native integration with your data lake and IBM watsonx.data™
                      lakehouse, Netezza empowers data engineers, data scientists and data analysts to
                      run complex workloads without additional ETL or data movement over cloud object
                      storage.
                    </p>
                    <a
                    href="https://www.ibm.com/products/netezza?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="cplex">
                  <div class="content-heading">
                    <h4>CPLEX</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® ILOG® CPLEX® Optimization Studio is a prescriptive analytics solution that
                      enables rapid development and deployment of decision optimization models using
                      mathematical and constraint programming. With this decision optimization
                      technology, you can:
                      <ul>
                        <li>Optimize your business decisions</li>
                        <li>Develop and deploy optimization models quickly</li>
                        <li>Create real-world applications that can significantly improve business outcomes</li>
                      </ul>
                    </p>
                    <a
                    href="https://www.ibm.com/products/ilog-cplex-optimization-studio?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="databand">
                  <div class="content-heading">
                    <h4>Databand</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Databand® is observability software for data pipelines and warehouses that
                      automatically collects metadata to build historical baselines, detect anomalies
                      and triage alerts to remediate data quality issues.
                    </p>
                    <a
                    href="https://www.ibm.com/products/databand?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="planningAnalytics">
                  <div class="content-heading">
                    <h4>Planning Analytics</h4>
                  </div>
                  <div class="description">
                    <p>
                      Predict outcomes with flexible and AI-infused forecasting. Analyze large-scale
                      and fine-grain what-if scenarios in real-time so you can pivot quickly. Deploy
                      as you need — on-premises or on cloud, including as a service on AWS (link
                      resides outside ibm.com).
                    </p>
                    <p>
                      With IBM Planning Analytics data integration capabilities, access data from
                      multiple sources via an intuitive web interface or familiar Excel spreadsheets.
                      Its in-memory database (TM1) analyzes big data fast to give real-time insights.
                    </p>
                    <a
                    href="https://www.ibm.com/products/planning-analytics?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="assetManagement">
                <div class="heading">
                  <h3>Asset Management <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="environment-intelligence-suite">
                  <div class="content-heading">
                    <h4>Environment Intelligence Suite</h4>
                  </div>
                  <div class="description">
                    <p>
                      Companies are increasingly vulnerable to climate-related asset damage, supply
                      chain disruptions, and operational challenges in today's climate. With the
                      growing demand from consumers and investors for environmentally responsible
                      decision-making and climate change continuing to impact businesses, it's
                      increasingly important for leaders to assess how extreme weather events impact
                      their operations, to predict and plan for unforeseen disruptions.
                    </p>
                    <a
                    href="https://www.ibm.com/products/environmental-intelligence-suite?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="envizi">
                  <div class="content-heading">
                    <h4>Envizi</h4>
                  </div>
                  <div class="description">
                    <p>
                      We remove the challenges and complexity of ESG data collection, analysis and
                      reporting so you can harness the power of data to fast-track your success.
                      Envizi's suite of cloud-based, ESG software products work together in three ways
                      to simplify your ESG reporting:
                      <ul>
                        <li>
                          <b>1.Build a data foundation</b>
                          <p>
                            A single system of record that delivers auditable, robust ESG data and GHG
                            calculations.
                          </p>
                        </li>
                        <li>
                          <b>2.Streamline reporting and disclosure</b>
                          <p>
                            Flexible reporting tools to meet internal and external requirements for
                            comprehensive, and simplified ESG reporting.
                          </p>
                        </li>
                        <li>
                          <b>3.Accelerate decarbonization</b>
                          <p>
                            Analytical tools identifying opportunities to reach low carbon goals and track
                            performance against commitments.
                          </p>
                        </li>
                      </ul>
                    </p>
                    <a
                    href="https://www.ibm.com/products/envizi?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="maximo">
                  <div class="content-heading">
                    <h4>Maximo</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM Maximo® Application Suite is a set of applications for asset monitoring,
                      management, predictive maintenance and reliability planning.
                    </p>
                    <a
                    href="https://www.ibm.com/products/maximo?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="tririga">
                  <div class="content-heading">
                    <h4>TRIRIGA</h4>
                  </div>
                  <div class="description">
                    <p>
                      The ability to access data through a single source of truth across the real
                      estate lifecycle is key to elevating operational performance. IBM® TRIRIGA®
                      offers a holistic Integrated Workplace Management System (IWMS) from a trusted
                      brand that leads the market in functionality, security, configurability and is a
                      natively integrated suite.
                    </p>
                    <a
                    href="https://www.ibm.com/products/tririga?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="businessAutomation">
                <div class="heading">
                  <h3>Business Automation <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="blue-works-live">
                  <div class="content-heading">
                    <h4>Blue Works Live</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM Blueworks Live is a cloud-based platform that transforms the way teams build
                      and refine business processes. It offers a unique, collaborative environment
                      that bridges the gap between process mapping and actionable insights.
                    </p>
                    <p>
                      With an intuitive, web-based interface, IBM Blueworks Live empowers teams to
                      document, analyze and streamline processes with unprecedented ease and
                      efficiency, with no downloads necessary. It's designed for dynamic
                      collaboration, enabling stakeholders to connect, share insights and drive
                      improvements in real-time, from anywhere.
                    </p>
                    <a
                    href="https://www.ibm.com/products/blueworkslive?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="datacap">
                  <div class="content-heading">
                    <h4>Data Cap</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Datacap software is a key capability of the IBM Cloud Pak® for Business
                      Automation. It streamlines the capture, recognition and classification of
                      business documents. Its natural language processing, text analytics and machine
                      learning technologies identify, classify and extract content from unstructured
                      or variable paper documents.
                    </p>
                    <a
                    href="https://www.ibm.com/products/data-capture-and-imaging?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="watsonx-orchestrate">
                  <div class="content-heading">
                    <h4>Watsonx Orchestrate</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM watsonx Orchestrate, powered by LLMs, is here to help by bringing generative
                      AI and automation to every business domain across the enterprise. Delivers
                      conversational AI and automation capabilities to transform how work gets done
                      while increasing productivity, lowering costs and improving agility. It's
                      personalized with the skills to support the work of your teams, using the tools
                      they already use. Use purpose-built AI assistants for quick and easy task
                      completion and complex processes facilitated by engaging natural language
                      experience Empower domain experts to create customized AI assistants with a
                      low-code builder, supporting diverse enterprise functions like HR, Finance,
                      Sales, and Procurement.
                    </p>
                    <a
                    href="https://www.ibm.com/products/watsonx-orchestrate?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="process-mining">
                  <div class="content-heading">
                    <h4>Process Mining</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Process Mining helps businesses make faster, more informed decisions for
                      process improvement through data-driven insights. Gain complete process
                      transparency using data from your business systems, such as ERP and CRM,
                      pinpoint inefficiences and prioritize automation by impact and expected ROI.
                      Drive continuous process improvements by triggering corrective actions or
                      generating RPA bot scaffolds.
                    </p>
                    <a
                    href="https://www.ibm.com/products/process-mining?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="business-automation-flow">
                  <div class="content-heading">
                    <h4>Business Automation Workflow</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Business Automation Workflow is a key capability of IBM Cloud Pak® for Business Automation. It unites information, processes and users to help you automate digital workflows on premises or on cloud. Create workflows that increase productivity, improve collaboration between teams, and gain new insight to resolve cases and drive better business outcomes.
                    </p>
                    <a
                    href="https://www.ibm.com/products/business-automation-workflow?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="file-net-content">
                  <div class="content-heading">
                    <h4>FileNet Content Manager</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM FileNet Content Manager is a flexible, full-featured content management solution that provides the foundation for IBM Cloud Pak® for Business Automation. It uses AI to deliver deep insights from your unstructured content. Use it to create innovative business applications on any cloud and more effectively manage all your content, from any source.
                    </p>
                    <a
                    href="https://www.ibm.com/products/filenet-content-manager?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="containers">
                <div class="heading">
                  <h3>Containers <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="code-engine">
                  <div class="content-heading">
                    <h4>Code Engine</h4>
                  </div>
                  <div class="description">
                    <p>
                     IBM Cloud® Code Engine is a fully managed, serverless platform. Bring your container images, batch jobs, source code or function and let IBM Cloud Code Engine manage and secure the underlying infrastructure. There's no need to size, deploy or scale container clusters yourself. And no networking skills are required.
                    </p>
                    <a
                    href="https://www.ibm.com/products/code-engine?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="cloud-satellite">
                  <div class="content-heading">
                    <h4>Cloud Satellite</h4>
                  </div>
                  <div class="description">
                    <p>
                      Deploy and run apps consistently across on-premises, edge computing and public cloud environments, enabled by secure and auditable communications with IBM Cloud.
                    </p>
                    <p>
                      Consume a common set of cloud services including toolchains, databases and AI in any location. The IBM Cloud Satellite-managed distributed cloud solution delivers cloud services, APIs, access policies, security controls and compliance.
                    </p>
                    <a
                    href="https://www.ibm.com/products/satellite?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="container-registry">
                  <div class="content-heading">
                    <h4>Container Registry</h4>
                  </div>
                  <div class="description">
                    <p>
                      Store and distribute container images in a fully managed private registry. Push private images to conveniently run them in the IBM Cloud® Kubernetes Service and other runtime environments. Images are checked for security issues so you can make informed decisions about your deployments.
                    </p>
                    <a
                    href="https://www.ibm.com/products/container-registry?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="kuburnetes">
                  <div class="content-heading">
                    <h4>Kuburnetes Service</h4>
                  </div>
                  <div class="description">
                    <p>
                      Experience a certified, managed Kubernetes solution, built for creating a cluster of compute hosts to deploy and manage containerized apps on IBM Cloud®. IBM manages the master, freeing you from having to administer the host OS, container runtime and Kubernetes version-update process.
                    </p>
                    <a
                    href="https://www.ibm.com/products/kubernetes-service?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="red-hat">
                  <div class="content-heading">
                    <h4>Red hat open shift on IBM cloud</h4>
                  </div>
                  <div class="description">
                    <p>
                      Red Hat OpenShift on IBM Cloud provides developers intelligent scheduling, self-healing, horizontal scaling, service discovery and load balancing, secret and configuration management for your apps, and automated rollouts and rollbacks. Combined with an intuitive user experience, built-in security and isolation, and advanced tools to secure, manage, and monitor your cluster workloads, you can rapidly deliver highly available and secure containerized apps in the public cloud.
                    </p>
                    <a
                    href="https://www.ibm.com/products/openshift?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="databases">
                <div class="heading">
                  <h3>Databases <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="cloudant">
                  <div class="content-heading">
                    <h4>Cloudant</h4>
                  </div>
                  <div class="description">
                    <p>
                      A fully managed, distributed database optimized for heavy workloads and fast-growing web and mobile apps, IBM® Cloudant® is available as an IBM Cloud® service with a 99.99% SLA. Cloudant elastically scales throughput and storage, and its API and replication protocols are compatible with Apache CouchDB for hybrid or multicloud architectures.
                    </p>
                    <a
                    href="https://www.ibm.com/products/cloudant?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="Db2">
                  <div class="content-heading">
                    <h4>IBM DB2</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Db2® is a cloud-native database built on decades of expertise in bringing data governance and security, low-latency transactions and continuous availability to your mission critical data, analytics and AI-driven applications. With support for mixed transactional and analytical workloads, it provides a single place for DBAs, enterprise architects and developers to keep apps running, store and query anything and simplify development. No matter the volume or complexity of transactions, make your applications secure, highly performant and resilient anywhere.
                    </p>
                    <a
                    href="https://www.ibm.com/products/db2-database?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="mysql">
                  <div class="content-heading">
                    <h4>IBM Cloud databases for MySQL</h4>
                  </div>
                  <div class="description">
                    <p>
                      Fully managed MySQL: Purpose-built for mission-critical workloads, offering sure performance with scalability, security and a de facto standard for web apps.
                      The most popular open-source relational database MySQL makes it easy to deploy, operate and scale cloud-native applications.
                      Focus on applications and business dev — and not database management — with this fully managed MySQL service.                    </p>
                    <a
                    href="https://www.ibm.com/products/databases-for-mysql?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="elastic-search">
                  <div class="content-heading">
                    <h4>IBM Cloud Databases for Elastic Search</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM Cloud Databases for Elasticsearch combines the flexibility of a full-text search engine with the indexing power of a JSON document database. With integrated machine learning (ML) models as well as specialised ML nodes, data types and search algorithms, IBM Cloud Databases for Elasticsearch is ready to power your enterprise.
                    </p>
                    <a
                    href="https://www.ibm.com/products/databases-for-elasticsearch?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="enterprise-db">
                  <div class="content-heading">
                    <h4>IBM Cloud Databases for EnterpriseDB</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM Cloud® Databases for EnterpriseDB is a database engine that optimizes the built-in features of PostgreSQL.
                      Gain greater scalability, security and reliability along with enhancements that improve DBA and developer productivity. Take advantage of native integration with IBM Cloud and compatibility with Oracle databases.
                    </p>
                    <a
                    href="https://www.ibm.com/products/databases-for-enterprisedb?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="mongo-db">
                  <div class="content-heading">
                    <h4>IBM Cloud Databases for MongoDB</h4>
                  </div>
                  <div class="description">
                    <p>
                      The IBM Cloud® Databases for MongoDB service allows developers to take advantage of the latest MongoDB features: rich JSON documents, powerful query language, multi-document transactions, and authentic APIs. The service also automates common database administration tasks like high availability, backups, encryption, and infrastructure planning.
                    </p>
                    <a
                    href="https://www.ibm.com/products/databases-for-mongodb?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="devOps">
                <div class="heading">
                  <h3>DevOps <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="devOps-build">
                  <div class="content-heading">
                    <h4>DevOps Build</h4>
                  </div>
                  <div class="description">
                    <p>
                      DevOps Build is a distributed, multiplatform build-management tool for configuring and running software builds.
                    </p>
                    <a
                    href="https://www.ibm.com/products/devops-build?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="devOps-deploy">
                  <div class="content-heading">
                    <h4>DevOps Deploy</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM DevOps Deploy is an application-release solution that infuses automation into the continuous delivery and continuous deployment (CI/CD) process and provides robust visibility, traceability and auditing capabilities.
                    </p>
                    <a
                    href="https://www.ibm.com/products/devops-deploy?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="devOps-test">
                  <div class="content-heading">
                    <h4>DevOps Test</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM DevOps Test is a collection of continuous testing offerings for automated test creation, execution, virtualization, and analysis. Automated testing helps organizations assess the current state of software to make informed decisions about when to release. Business success depends on the quality of the software that runs the business.
                    </p>
                    <a
                    href="https://www.ibm.com/products/devops-test?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="devOps-velocity">
                  <div class="content-heading">
                    <h4>DevOps Velocity</h4>
                  </div>
                  <div class="description">
                   <p>
                    IBM DevOps an enterprise-scale release management application that delivers pipeline orchestration and real-time analytics. Your teams can visualize your DevOps toolchain and data and can better determine the creation of value as work proceeds from idea to customer.
                   </p>
                    <a
                    href="https://www.ibm.com/products/devops-velocity?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="rational-quest">
                  <div class="content-heading">
                    <h4>Rational ClearQuest</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM Rational ClearQuest is change management software that helps improve developer productivity while accommodating the methodologies, processes and tools that best fit the project and the people on the team. It provides tools and processes that allow you to maintain control of changes while catering to the diverse needs of the developer.
                    </p>
                    <a
                    href="https://www.ibm.com/products/rational-clearquest?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="ITAutomation">
                <div class="heading">
                  <h3>IT Automation <span>&rbarr;</span></h3>
                </div>
                <div class="content" id="apptio">
                  <div class="content-heading">
                    <h4>Apptio</h4>
                  </div>
                  <div class="description">
                    <p>
                      Apptio intelligently structures vast amounts of technology-spend and enterprise-operational data to deliver actionable insights that business, finance and technology leaders can use to work better together. Apptio ingests, aggregates and normalizes spend, cost, consumption, performance and attribute data from disparate systems, including cloud vendors. This complete, connected understanding of your technology spend and the value each dollar returns to your business allows you to confidently prioritize work, embrace the cloud and optimize your technology investments.
                    </p>
                    <a
                    href="https://www.ibm.com/products/apptio?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="cloud-monitoring">
                  <div class="content-heading">
                    <h4>Cloud Monitoring</h4>
                  </div>
                  <div class="description">
                    <p>
                      Observability tools capture the health and resource utilization of IT infrastructure components, regardless where they reside. From your data center, at the edge, infrastructure as a service [IaaS] to your platform as a service [PaaS] in the cloud, your embraced cloud architecture is difficult to observe. As part of the observability in IBM Cloud stack, the IBM Cloud Monitoring service is a fully managed monitoring service for administrators, DevOps teams and developers. Expect deep container visibility and comprehensive metrics. Reduce cost as you free up DevOps and better manage the software lifecycle.
                    </p>
                    <a
                    href="https://www.ibm.com/products/cloud-monitoring?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="concert">
                  <div class="content-heading">
                    <h4>Concert</h4>
                  </div>
                  <div class="description">
                    <p>
                      IBM® Concert® puts you in control, so you can simplify and optimize your operations to focus on continuously delivering enhanced client experiences and improved developer and SRE productivity
                    </p>
                    <p>
                      IBM Concert provides generative AI insights that help you understand your application landscape and enables you to discover the connections, dependencies, gaps and opportunities in your application architecture.
                    </p>
                    <a
                    href="https://www.ibm.com/products/concert?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="flexera">
                  <div class="content-heading">
                    <h4>Flexera One</h4>
                  </div>
                  <div class="description">
                   <p>
                    The complexity of hybrid IT environments with software, hardware and cloud solutions from many vendors is becoming more and more challenging to manage. Flexera One with IBM® Observability is a comprehensive IT asset management solution to help you maximize your IT investments and mitigate risk.
                   </p>
                   <p>
                    Visualize your entire estate from on-premises to SaaS to the cloud. Flexera One with IBM Observability contains all the features of Flexera One, with IBM support embedded. And you can also integrate with IBM Turbonomic® to automate license and resource optimization.
                   </p>
                    <a
                    href="https://www.ibm.com/products/flexera-one?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="instana">
                  <div class="content-heading">
                    <h4>Instana</h4>
                  </div>
                  <div class="description">
                   <p>
                    Instana offers more than traditional APM solutions. It discovers, maps, and monitors all services and infrastructure components, providing actionable information with full context for DevOps, SRE, development and ITOps teams to optimize pipelines and applications effectively.
                   </p>
                    <a
                    href="https://www.ibm.com/products/instana?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="cloud-pak-aiops">
                  <div class="content-heading">
                    <h4>Cloud Pak for AIOps</h4>
                  </div>
                  <div class="description">
                  <p>
                    Innovate faster, reduce operational cost and transform IT operations (ITOps) across a changing landscape with an AIOps platform that delivers visibility into performance data and dependencies across environments. Embrace artificial intelligence, machine learning and automation to help ITOps managers and Site Reliability Engineers (SREs) address incident management and remediation.
                  </p>
                    <a
                    href="https://www.ibm.com/products/cloud-pak-for-aiops?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="section-info" id="middleware">
                <div class="heading">
                  <h3>Middleware<span>&rbarr;</span></h3>
                </div>
                <div class="content" id="data-power">
                  <div class="content-heading">
                    <h4>Data Power</h4>
                  </div>
                  <div class="description">
                    <p>
                      With web application attacks making up 39% of all breaches in 2021¹, IBM® DataPower® Gateway helps businesses meet their security and integration needs. Enterprise-grade security, control and comprehensive transport and data protocol support include IBM MQ, Apache Kafka and traditional business critical data formats.
                    </p>
                    <a
                    href="https://www.ibm.com/products/datapower-gateway?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="event-streams">
                  <div class="content-heading">
                    <h4>Event Streams</h4>
                  </div>
                  <div class="description">
                    <p>
                      To deliver more engaging customer experiences, you need to accelerate your event-driven efforts so that you can act in real-time. With IBM® Event Streams, you can leverage enterprise-grade event streaming capabilities to build smart apps to help react to events as they happen. Based on years of operational expertise gained from running  Apache Kafka® for enterprises, IBM Event Streams is ideal for mission-critical workloads.
                    </p>
                    <a
                    href="https://www.ibm.com/products/event-streams?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>

                <div class="content" id="mq">
                  <div class="content-heading">
                    <h4>MQ</h4>
                  </div>
                  <div class="description">
                    <p>
                      Connect applications and microservices in private data centers, across hybrid or multicloud environments, and at the edge of your enterprise.
                      Tap into the value of your existing mission-critical data to gain near-real-time insights. Only IBM® MQ protects your business from incorrect data and application errors with exactly-once message delivery.
                    </p>
                    <a
                    href="https: //www.ibm.com/products/mq?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="aspera">
                  <div class="content-heading">
                    <h4>Aspera</h4>
                  </div>
                  <div class="description">
                   <p>
                    IBM Aspera takes a different approach to tackling the challenges of big data movement over global WANs. Rather than optimize or accelerate data transfer, Aspera eliminates underlying bottlenecks by using a breakthrough transport technology that fully utilizes available network bandwidth to maximize speed and quickly scale up with no theoretical limit.
                   </p>
                    <a
                    href="https://www.ibm.com/products/aspera?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <div class="content" id="cloud-pak-app">
                  <div class="content-heading">
                    <h4>Cloud Pak for Applications</h4>
                  </div>
                  <div class="description">
                  <p>
                    More than 83% of execs say modernizing apps and data is central to their organization’s business strategy1. Where and how these applications are deployed will impact time to market and value realization. The reality is application landscapes are complex and challenge enterprises to maintain and modernize existing infrastructure while delivering new cloud-native features. At the same time, technical debt along with a lack of skills, resources and common operational practices continue to linger and inhibit achieving business objectives.
                  </p>
                  <p>
                    IBM Cloud Pak®  for Applications (CP4Apps) provides the ultimate flexibility for your application landscape. Whether it’s building new cloud-native services and applications, refactoring or re-platforming existing applications; CP4Apps has it covered. CP4Apps is designed-to leverage a comprehensive collection of application runtimes, AI-powered modernization tools and a Kubernetes container platform enabling your application landscape to transform with your business.
                  </p>
                    <a
                    href="https://www.ibm.com/products/cloud-pak-for-applications?lnk=flatitem"
                    target="_blank"
                    title="Get More"
                    ><i class="fa-solid fa-up-right-from-square"></i></a>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>
    <section class="bg-dark">
      <?php require_once "./partials/footer.php";?>
    </section>
  </body>
</html>
