<?php 
include_once 'classes/quote.php';
include 'classes/database.php';
    $obj = new Quote();
    $db = new MyDatabase();
    $obj = $db->getQuote();
?>
<form id="form1">
    <a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
    <div style="background-color:#008080; color: #fff; padding-top:40px; margin: 20px;">
        <h1>Sunjit For One</h1>
    </div>

    <svg style="background-color:#282A35; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath1" d="M0,0  L120, 0C35,150 25,0 0,100z" fill="#008080"></path>
    </svg>


    <div class="video-container">
        <video autoplay loop muted playsinline class="back-video">
            <source src="/assets/images/sunweb.mp4" type="video/mp4">
        </video>
    </div>


    <div class="outer" style="background-color:#282A35; color: #fff">
        <div class="inner">
            <p>Sunjit41 is my code name in the digital world. Myself a Software developer having 23+ years of experience
                in software development using various programming languages.</p>
            <p>Principal Software Architect & .NET Expert with 23+ years of experience delivering mission-critical
                enterprise systems. Combines deep expertise in full-stack C# development with a robust understanding of
                network infrastructure and security engineering. Proven track record of architecting secure,
                high-availability solutions by integrating DevSecOps principles and network-level optimization into the
                software development lifecycle.</p>
            <p>In this webiste, I will be sharing some of my projects both for Windows PC and for Android devices. Also
                the codes shared here are for educational purpose and can be copied or reproduced as you like.</p>
            <section>
                <h2>Achievements</h2>
                <hr style="border-top: 1px solid white;">
                <div class="slider-viewport" id="viewport">
                    <div class="slider-track" id="track">
                        <!-- Put your original logos here ONLY ONCE -->
                        <div class="logo-item"><img src="/assets/images/badges/bsc.webp"
                                alt="Bachelors Degree in Computer Science from Bharathiar University"><span>Graduation</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/az-900.webp"
                                alt="AZ-900 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/ai-901.webp"
                                alt="AI-901 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/dp-900.webp"
                                alt="DP-900 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/sc-900.webp"
                                alt="SC-900 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/ab-730.webp"
                                alt="AB-730 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/ab-731.webp"
                                alt="AB-731 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/gh-900.webp"
                                alt="gh-900 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/gh-100.webp"
                                alt="gh-100 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/gh-200.webp"
                                alt="gh-200 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/gh-300.webp"
                                alt="GH-300 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/gh-500.webp"
                                alt="GH-500 Badge"><span>Certification</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/netw.webp"
                                alt="Networking"><span>Networking</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/fcf.webp"
                                alt="Fortinet Certified Fundamentals in Cybersecurity"><span>Certification</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/nse1.webp"
                                alt="Fortinet NSE 1 - Introduction to the Threat Landscape"><span>Badge</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/nse11.webp"
                                alt="Fortinet NSE 1 - Getting started in Cybersecurity"><span>Badge</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/nse2.webp"
                                alt="Fortinet NSE 2 - Introduction to Cybersecurity"><span>Badge</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/fca.webp"
                                alt="Fortinet Certified Associate in Cybersecurity"><span>Certification</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/nse3.webp"
                                alt="Fortinet NSE 3 - FortiGate Operator"><span>Badge</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/py1.webp" alt="Python"><span>Python Badge</span>
                        </div>
                        <div class="logo-item"><img src="/assets/images/badges/cs.webp"
                                alt="C# Certifcation - Foudational C# with Microsoft"><span>Certification</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/prompt.webp"
                                alt="Course in One Million Prompters"><span>Course</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/mcad.webp"
                                alt="MCAD - Microsoft Certified Application Developer"><span>Certification</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/html.webp" alt="HTML Badge"><span>HTML
                                Badge</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/css.webp" alt="CSS Badge"><span>CSS
                                Badge</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/js.webp"
                                alt="Javascript Badge"><span>JavaScript</span></div>
                        <div class="logo-item"><img src="/assets/images/badges/mlearn.webp"
                                alt="Microsoft Learning"><span>Learning</span></div>
                    </div>
                </div>
            </section>
            <section>
                <h2>Education & Verified Credentials</h2>
                <hr style="border-top: 1px solid white;">
                <p><strong>Academic & Professional Foundation</strong></p>
                <ul>
                    <li>Bachelor's Degree in Computer Science</li>
                    <li>Microsoft Certified Application Developer (MCAD) – Legacy expertise in enterprise .NET
                        architecture.</li>
                    <li>Microsoft Learning
                        <ul>
                            <li>Microsoft Learn: Level 13</li>
                            <li>Total Learning XP: 300,000+</li>
                            <li>Focus Areas: Azure Architecture, C# Development, Cybersecurity, and Network
                                Infrastructure.</li>
                        </ul>
                    </li>
                    <li>Microsoft Certifications
                        <ul>
                            <li>Azure AI Fundamentals (AI-901)</li>
                            <li>AI Business Professional (AB-730)</li>
                            <li>AI Transformation Leader (AB-731)</li>
                            <li>Azure Fundamentals (AZ-900)</li>
                            <li>Security, Compliance, and Identity Fundamentals (SC-900)</li>
                            <li>Azure Data Fundamentals (DP-900)</li>
                            <li>Github Foundations (GH-900)</li>
                            <li>Github Administration (GH-100)</li>
                            <li>Github Actions (GH-200)</li>
                            <li>Github Copiot (GH-300)</li>
                            <li>Github Advanced Security (GH-500)</li>
                        </ul>
                    </li>
                    <li>freeCodeCamp.org Certifications
                        <ul>
                            <li>Foundational C# with Microsoft</li>
                            <li>Responsive Web Design</li>
                        </ul>
                    </li>
                    <li>Fortinet Certification (NSE 1, 2 & 3)
                        <ul>
                            <li>Fundamentals in Cybersecurity</li>
                            <li>Associate in Cybersecurity</li>
                        </ul>
                    </li>
                </ul>
                <a class="green-link" href="/credentials">Verifiy Credentials</a>
            </section>
            <section style="margin-top: 50px;">
                <h2>Inspiring Quotes</h2>
                <hr style="border-top: 1px solid white;">
                <blockquote class="modern-quote">
                    <q>
                        <?php echo $obj->quoteText;?>
                    </q>
                    <footer>- Words from
                        <?php echo $obj->quoteAuthor;?>
                    </footer>
                </blockquote>

            </section>
        </div>
    </div>




    <svg id="softwares" style="background-color:#0f172a; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">

        <path id="wavepath2" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#282A35"></path>
    </svg>

    <div class="outer">
        <div class="inner">
            <h2 style="color: #fff">Softwares Developed</h2>
            <svg viewBox="0 0 100 16" preserveAspectRatio="none"
                style="width: 100%; height: 16px; display: block; background: #0f172a !important;">
                <style>
                    .matrix-line {
                        stroke: #10b981;
                        /* Cyber green color */
                        stroke-width: 2;
                        stroke-dasharray: 1 2;
                        animation: march 1.5s linear infinite;
                    }

                    @keyframes march {
                        to {
                            stroke-dashoffset: -3;
                        }
                    }
                </style>
                <line class="matrix-line" x1="0" y1="8" x2="100" y2="8" />
            </svg>
            <br>
            <div class="groups">

                <h3>Utility & System Software</h3>
                <p>
                    A suite of low-latency system utilities and secure network automation tools engineered in C#/.NET
                    and VB.NET. These applications are designed to optimize local area network (LAN) operations,
                    automate complex IP subnetting topologies, execute multi-threaded network discovery, and manage
                    desktop asset workflows without reliance on external cloud dependancies.             
                </p>
                <ul>
                    <li><strong>IP Subnet</strong> & <strong>IP Search</strong>: Focus on network discovery, algorithmic
                        subnetting, and automated HTML reporting.</li>
                    <li><strong>Good LAN</strong>: Focus on secure, decentralized peer-to-peer data transport protocols.
                    </li>
                    <li><strong>Best QR</strong> & <strong>Number To</strong>: Focus on offline security, dynamic string
                        manipulation, and algorithmic base conversions.</li>
                    <li><strong>Desktop Shorts</strong> & <strong>SunClock</strong>: Focus on Windows API hooks, memory
                        management, and process lifecycle automation.</li>
                </ul>
   

                <a id="btn1" href="javascript:void(0);" title="Expand" class="green-link-dark">Show more</a>
                <div id="SoftwareGroup1" style="background-color:#0f172a">


                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>IP Subnet</h4>
                            <p>Architected and deployed custom network diagnostic and automated HTML reporting tools to optimize subnetting efficiency and accelerate LAN device discovery protocols.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in C#.Net</p>
                            <p><a class="green-link-dark" href="/apps/11">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/ipsub.webp" width="512" height="512" loading="lazy" alt="IP Subnet">
                        </div>
                    </section>

                    <section class="row reverse" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>IP Search</h4>
                            <p>Automated Network Device Discovery Engine in C#, highlighting low-latency node indexing and enhanced local network security posture.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in C#.Net</p>
                            <p><a class="green-link-dark" href="/apps/7">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/ips.webp" width="512" height="512" loading="lazy" alt="IP Search">
                        </div>
                    </section>

                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Good LAN</h4>
                            <p>Secure Enterprise LAN Data Transit System using VB.NET, focusing on peer-to-peer efficiency and zero-knowledge compliance without external cloud dependencies.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in Visual Basic.Net</p>
                            <p><a class="green-link-dark" href="/apps/1">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/gl.webp" width="512" height="512" loading="lazy" alt="Good LAN">
                        </div>
                    </section>

                    <section class="row reverse" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Best QR</h4>
                            <p>An application that helps users in generating (Quick Response) QR Codes. The app can
                                generate QR
                                codes for website links, vCards and for Wifi settings. More options to be added in
                                future
                                releases. The QR code generation does not require interent to process. No watermarks
                                will be
                                added to the output image.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in C#.Net</p>
                            <p><a class="green-link-dark" href="/apps/12">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/bqr.webp" width="512" height="512" loading="lazy" alt="Best QR">
                        </div>
                    </section>

                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Number To</h4>
                            <p>A windows application that converts an integer to Binary and Hexadecimal.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in C#.Net</p>
                            <p><a class="green-link-dark" href="/apps/10">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/numto.webp" width="512" height="512" loading="lazy" alt="Number To">
                        </div>
                    </section>

                    <section class="row reverse" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Desktop Shorts</h4>
                            <p>A windows application that is organize your favorite application's shorcut to a quick
                                access
                                location.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in C#.Net</p>
                            <p><a class="green-link-dark" href="/apps/8">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/ds.webp" width="512" height="512" loading="lazy" alt="D Shorts">
                        </div>
                    </section>

                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>SunClock</h4>
                            <p>A windows application that displays a Clock in windows desktop as a background.</p>
                            <p>Developed using Microsoft Visual Studio, and coded in C#.Net</p>
                            <p><a class="green-link-dark" href="/apps/9">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/sc.webp" width="512" height="512" loading="lazy" alt="Sun Clock">
                        </div>
                    </section>


                </div>
            </div>
            <br>
            <div class="groups">
                <h3>Gaming & Mobile Projects</h3>
                <p>A portfolio of cross-platform mobile applications and interactive 3D simulations engineered using the
                    Unity Engine (C#) and native Android SDKs (Java). This section demonstrates core competencies in
                    real-time physics simulation, mathematical game-state logic, memory-efficient asset pipelines,
                    low-latency UI rendering, and deployment across Android and Windows ecosystems.
                </p>
                <ul>
                    <li><strong>Rolling Ball</strong> & <strong>Zeros</strong>: Focus on real-time 3D rigid-body
                        physics, Vector calculus simulation, and Unity graphics.</li>
                    <li><strong>Shuffle 2D</strong> & <strong>Tic Tac Toe</strong>: Focus on state-machine logic,
                        deterministic algorithms, mathematical game trees.</li>
                    <li><strong>Kerala Easy Links</strong>: Focus on native Android WebView architectures, light-weight
                        mobile asset handling, and cross-platform information compilation.</li>
                </ul>

                <a id="btn2" href="javascript:void(0);" title="Expand" class="green-link-dark">Show more</a>
                <div id="SoftwareGroup2" style="background-color:#0f172a;">
                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Rolling Ball</h4>
                            <p>An amazing 3D game game developed for gamers. Contains no Ads. (Available for Microsoft
                                Windows
                                and Android)</p>
                            <p>Developed in Unity game engine using C# coding. Created all the 3D assets in Blender.
                                Graphics
                                created in Adobe Photoshop.</p>
                            <p><a class="green-link-dark" href="/apps/4">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/rb.webp" width="512" height="512" loading="lazy" alt="Rolling Ball">
                        </div>
                    </section>

                    <section class="row reverse" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Zeros</h4>
                            <p>Developed a 3D version of a game played in my childhood. Contains no Ads. (Available for
                                Microsoft Windows and Android)</p>
                            <p>Developed in Unity game engine using C# coding. Created the 3D assets in Blender.
                                Graphics
                                created in Adobe Photoshop.</p>
                            <p><a class="green-link-dark" href="/apps/5">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/zeros.webp" width="512" height="512" loading="lazy" alt="Zeros">
                        </div>
                    </section>

                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Shuffle 2D</h4>
                            <p>A puzzle game developed on 1 day. Contains no Ads. (Available for Microsoft Windows and
                                Android)
                            </p>
                            <p>Windows version developed in Visual Stuidio with C#.Net, and the Android version with
                                Android
                                studio and coded in Java</p>
                            <p><a class="green-link-dark" href="/apps/3">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/shuffle.webp" width="512" height="512" loading="lazy" alt="Shullfe Game">
                        </div>
                    </section>

                    <section class="row reverse" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Tic Tac Toe</h4>
                            <p>A small game developed for my friends. Contains no Ads. (Available for Android)</p>
                            <p>Developed using Android Studio, and coded in Java</p>
                            <p><a class="green-link-dark" href="/apps/2">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/ttt.webp" width="512" height="512" loading="lazy" alt="Tic Tac Toe">
                        </div>
                    </section>
                    
                    <section class="row" style="background-image: url('/assets/images/bg4.jpg')">
                        <div class="row-content">
                            <h4>Kerala Easy Links</h4>
                            <p>An app that provides links to the original webistes which are commonly useful for Kerala
                                people.
                                Contains no Ads. (Available for Android)</p>
                            <p><a class="green-link-dark" href="/apps/6">More details</a></p>
                        </div>
                        <div class="image-box">
                            <img src="/assets/images/kel.webp" width="512" height="512" loading="lazy" alt="Kerala Easy Links">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <svg id="codes" style="background-color:#282A35; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath3" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#0f172a"></path>
    </svg>

    <div class="outer" style="background-color:#282A35; color: #fff">
        <div class="inner">
            <h2>Programming Codes</h2>
            <svg viewBox="0 0 100 16" preserveAspectRatio="none"
                style="width: 100%; height: 16px; display: block; background: #282A35 !important;">
                <style>
                    .matrix-line {
                        stroke: #10b981;
                        /* Cyber green color */
                        stroke-width: 2;
                        stroke-dasharray: 1 2;
                        animation: march 1.5s linear infinite;
                    }

                    @keyframes march {
                        to {
                            stroke-dashoffset: -3;
                        }
                    }
                </style>
                <line class="matrix-line" x1="0" y1="8" x2="100" y2="8" />
            </svg>
            <section
                style="padding:20px; margin-top: 20px; margin-bottom: 20px; border-radius: 12px; box-shadow: 0 10px 30px rgba(196, 173, 173, 0.1); background-image: url('/images/bg4.jpg'); background-color:#FFFFFF; color:black;">

                <h3>Computer Graphics Programming in C++ using GLUT & Codeblocks</h3>
                <p>Programming Language : C++ <br>IDE : CodeBlocks<br>Tools used : GLUT (OpenGL Utility Toolkit)</p>
                <p><a class="green-link-dark" href="/codes">Go to Coding</a></p>
            </section>
            <section
                style="padding:20px;margin-top: 20px; margin-bottom: 20px; border-radius: 12px; box-shadow: 0 10px 30px rgba(196, 173, 173, 0.1); background-image: url('/images/bg4.jpg'); background-color:#FFFFFF; color:black;">
                <h3>Visual studio projects using C#.Net</h3>
                <p>Programming Language : C# <br>IDE : Visual Studio<br>Projects : Database CRUD operations, Multi
                    Threading, Fetching IP details, and much more ...</p>
                <p><a class="green-link-dark" href="/codes">Go to Coding</a></p>
            </section>
        </div>
    </div>

    <svg id="contact" style="background-color:#0f172a; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath4" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#282A35"></path>
    </svg>

    <div class="outer" style="background-color:#0f172a; color:black">
        <div class="inner">
            <h2 style="color: #fff">Contact Me</h2>
            <svg viewBox="0 0 100 16" preserveAspectRatio="none"
                style="width: 100%; height: 16px; display: block; background: #0f172a !important;">
                <style>
                    .matrix-line {
                        stroke: #10b981;
                        /* Cyber green color */
                        stroke-width: 2;
                        stroke-dasharray: 1 2;
                        animation: march 1.5s linear infinite;
                    }

                    @keyframes march {
                        to {
                            stroke-dashoffset: -3;
                        }
                    }
                </style>
                <line class="matrix-line" x1="0" y1="8" x2="100" y2="8" />
            </svg>
            <section
                style="background-color:#FFE6E8; justify-content: center; padding:20px;margin-top: 20px; margin-bottom: 20px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); background-image: url('/images/bg4.jpg'); text-align:center">

                <h3><b>E-Mail Address</b></h3>
                <p>sunjit41@yahoo.com <span>&bullet;</span> sunjit41@gmail.com <span>&bullet;</span>
                    sunjit41@hotmail.com</p>
                <hr>
                <h3><b>Social Media</b></h3>
                <p style="line-height: 48px; word-spacing: 20px; padding:20px;">
                    <a href="https://www.facebook.com/sunjit41" target="_blank"><span
                            style="display: inline-block; padding: 8px 16px;border-radius: 8px; background-color:#1877F2; color:white; letter-spacing: 1px;"><b>
                                Facebook </b></span></a>
<a href="https://www.linkedin.com/in/sunjit41" target="_blank"><span
                                    style="display: inline-block; padding: 8px 16px;border-radius: 8px; background-color:#0077B5; color:white; letter-spacing: 1px;"><b>
                                        Linkedin</b></span></a>                                                                    
                </p>
                <hr>
                <h3><b>Registered Address</b></h3>
                <p>Sunjit Bhavan, Moonnalam, Adoor P.O.<br>Pathanamthitta, Kerala, India - 691523<br>Mobile #: +91
                    9526 333 776</p>
                <hr>
                <h3><b>Goods & Services Tax (GST) Details</b></h3>
                <p>Trade Name : Sunjit41 <br>Registration # / GSTIN : 32MQBPS2324C1Z5<br>Constitution of Business :
                    Proprietorship</p>
                <p><a class="green-link-dark" href="/contact">More details</a></p>
            </section>
        </div>
    </div>

    <svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath5" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#0f172a"></path>
    </svg>
    <script>
        const track = document.getElementById('track');
        const viewport = document.getElementById('viewport');
        const soft1 = document.getElementById('SoftwareGroup1');
        const btn1 = document.getElementById('btn1');
        const soft2 = document.getElementById('SoftwareGroup2');
        const btn2 = document.getElementById('btn2');
        let isDragging = false, isHovered = false;
        let startX = 0, currentTranslate = 0, prevTranslate = 0;
        let originalWidth = 0;

        btn1.addEventListener('click', () => {
            const isShowing =  soft1.classList.toggle('show');
            if(isShowing) btn1.textContent = "Hide all";
        else btn1.textContent = "Show more";
        });

        btn2.addEventListener('click', () => {
        const isShowing =  soft2.classList.toggle('show');
            if(isShowing) btn2.textContent = "Hide all";

        else btn2.textContent = "Show more";          
        });
        // 1. CLONE LOGOS AUTOMATICALLY
        // This ensures the track is always wider than the screen
        function initSlider() {
            const items = Array.from(track.children);
            originalWidth = items.length * (150 + 120); // width + (gap * 2)

            // Clone enough sets to fill 3x the screen width to prevent gaps
            for (let i = 0; i < 10; i++) {
                items.forEach(item => {
                    const clone = item.cloneNode(true);
                    track.appendChild(clone);
                });
            }
            requestAnimationFrame(autoScroll);
        }

        // 2. INFINITE LOOP LOGIC
        function setSliderPosition() {
            // When we scroll past the original set, jump back seamlessly
            if (Math.abs(currentTranslate) >= originalWidth) {
                currentTranslate = 0;
                prevTranslate = 0;
            }
            if (currentTranslate > 0) {
                currentTranslate = -originalWidth;
                prevTranslate = -originalWidth;
            }
            track.style.transform = `translateX(${currentTranslate}px)`;
        }

        // 3. EVENT LISTENERS
        viewport.addEventListener('mouseenter', () => isHovered = true);
        viewport.addEventListener('mouseleave', () => isHovered = false);

        const dragStart = (e) => { isDragging = true; startX = e.pageX || e.touches[0].clientX; };
        const dragAction = (e) => {
            if (!isDragging) return;
            const x = e.pageX || e.touches[0].clientX;
            currentTranslate = prevTranslate + (x - startX);
            setSliderPosition();
        };
        const dragEnd = () => { isDragging = false; prevTranslate = currentTranslate; };

        viewport.addEventListener('mousedown', dragStart);
        viewport.addEventListener('touchstart', dragStart);
        window.addEventListener('mousemove', dragAction);
        window.addEventListener('touchmove', dragAction);
        window.addEventListener('mouseup', dragEnd);
        window.addEventListener('touchend', dragEnd);

        // 4. ANIMATION LOOP
        function autoScroll() {
            if (!isDragging && !isHovered) {
                currentTranslate -= 1; // Speed
                setSliderPosition();
                prevTranslate = currentTranslate;
            }
            requestAnimationFrame(autoScroll);
        }

        // Wait for images to load before starting to get correct widths
        window.onload = initSlider;
    </script>

</form>