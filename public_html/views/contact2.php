<form id="form1">
    <a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
    <div style="background-color:#008080; color: #fff;  padding-top:40px; margin: 20px;">
        <h1>Contact</h1>
    </div>
    <svg style="background-color:#0f172a; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath1" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#008080"></path>
    </svg>
    <div class="outer">
        <div class="inner">
            <h2 style="color: #fff">Connect with me:</h2>
            <hr style="border-top: 1px solid white;">
            <div class="container">
                <div class="child" style="text-align: center; background-color: whitesmoke;">
                    <h3>Social Network</h3>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/sunjit41" target="_blank"><span
                                    style="display: inline-block; padding: 8px 16px;border-radius: 8px; background-color:#0077B5; color:white; letter-spacing: 1px;"><b>
                                        Linked in </b></span></a></li>
                        <li><a href="https://www.youtube.com/@sunjit41" target="_blank"><span
                                    style="display: inline-block; padding: 8px 16px; border-radius: 8px; background-color:#FF0000; color:white; letter-spacing: 1px;"><b>
                                        Youtube </b></span></a></li>
                        <li><a href="https://www.facebook.com/sunjit41" target="_blank"><span
                                    style="display: inline-block; padding: 8px 16px;border-radius: 8px; background-color:#1877F2; color:white; letter-spacing: 1px;"><b>
                                        Facebook </b></span></a></li>
                        <li><a href="https://www.instagram.com/sunjit41/" target="_blank"><span
                                    style="display: inline-block; padding: 8px 16px;border-radius: 8px; background-color:#125688; color:white; letter-spacing: 1px;"><b>
                                        Instagram </b></span></a></li>
                        <li><a href="https://github.com/sunjit41" target="_blank"><span
                                    style="display: inline-block; padding: 8px 16px;border-radius: 8px; background-color:#1B1F23; color:white; letter-spacing: 1px;"><b>
                                        Github </b></span></a></li>
                    </ul>
                </div>
                <div class="child" style="text-align: center; background-color: whitesmoke;">
                    <h3>Registered Address</h3>
                    <p>Sunjit41, Sunjit Bhavan, Moonnalam, Adoor P.O.<br>Pathanamthitta, Kerala, India -
                        691523<br>Mobile #: +91 9526 333 776</p>
                    <hr>
                    <h3>Goods & Services Tax (GST) Details</h3>
                    <p>Trade Name : Sunjit41 <br>Registration # / GSTIN : 32MQBPS2324C1Z5<br>Constitution of
                        Business : Proprietorship</p>
                    <p><b><a href="javascript:void(0);" onclick="document.getElementById('id01').style.display='block'"
                                class="green-link-dark">Government Certificate</a></b></p>
                </div>
            </div>


            <div class="container">
                <div class="child" style="background-color:white; padding: 20px;">
                    <h3>On Google Maps</h3>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.9281475680295!2d76.71984681478756!3d9.160954693429431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88f26b0d5537743f!2sSunjit41!5e0!3m2!1sen!2sin!4v1622735956688!5m2!1sen!2sin"
                            style="border:0; height:450px; width:100%"></iframe>
                    </div>
                </div>
            </div>



        </div>


        <div id="id01" class="modal-form">
            <div class="animate-zoom">
                <div class="second-form">

                    <div class="header-container">
                        <h2>Government Certificate</h2>
                        <button type="button" class="close-btn"
                            onclick="document.getElementById('id01').style.display='none'"
                            title="Close Panel">&times;</button>
                    </div>
                    <div style="padding:20px;">
                        <div>
                            <button type="button" class="tab-item" onclick="showPage(event, 'page1')">Page 1</button>
                            <button type="button" class="tab-item" onclick="showPage(event, 'page2')">Page 2</button>
                            <button type="button" class="tab-item" onclick="showPage(event, 'page3')">Page 3</button>
                        </div>
                        <hr>
                        <div id="page1" class="certs">
                            <h3>Page 1</h3>
                            <img src="/assets/images/gst1.jpg" class="cert-image" alt="GST Page 1">
                        </div>
                        <div id="page2" class="certs">
                            <h3>Page 2</h3>
                            <img src="/assets/images/gst2.jpg" class="cert-image" alt="GST Page 2">
                        </div>

                        <div id="page3" class="certs">
                            <h3>Page 3</h3>
                            <img src="/assets/images/gst3.jpg" class="cert-image" alt="GST Page 3">
                        </div>

                        <div>
                            <button type="button" class="close-button"
                                onclick="document.getElementById('id01').style.display='none'"
                                title="Close Panel">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementsByClassName("tab-item")[0].click();

            function showPage(evt, cityName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("certs");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(cityName).style.display = "block";
            }
        </script>

    </div>
</form>
        <svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path id="wavepath2" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#0f172a"></path>
        </svg>