        <!-- Footer -->
        <footer style="color: #ffffff; text-align: center; padding: 30px;" >
            <p style="color: #ffffff">&copy; 2026 Sunjit41. All Rights Reserved.<br>Powered by PHP<br> Hosted at Bluehost.com</p>
        </footer>
        
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () { scrollFunction() };

            function scrollFunction() {
                if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }

            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <script>
            function Updating() {
                alert('Links will be updated soon');
            }
            function closeMenu() {
                var x = document.getElementById("navDemo");
                x.className = x.className.replace(" w3-show", "");
            }

            function menuFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>