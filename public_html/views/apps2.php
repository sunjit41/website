<?php
include_once 'classes/software.php';
include 'classes/database.php';

$path = $_SERVER["REQUEST_URI"];
//echo 'path = '.$path;
$exploded[] = explode('/', $path);

if (count($exploded[0]) > 2) {
    $id = $exploded[0][2];
    $db = new MyDatabase();
    $obj = $db->getSoftwares($id);
    $obj2 = $db->getAppLinks($id);
    $objscreen = $db->getScreens($id);
    //echo count($obj2);
    $Go = false;
    if ($obj->hasRows) {
?>
<form id="form1">
    <a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
    <div style="background-color:#008080; color: #fff; padding-top:40px; margin: 20px; ">
        <h1>Software</h1>
    </div>
    <svg style="background-color:#0f172a; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath1" d="M0,0  L100, 0C35,150 35,0 0,100z" fill="#008080"></path>
    </svg>
    <div class="outer">
        <div class="inner">
            <h2 style="color: white;">
                <?php echo $obj->appName; ?>
            </h2>
            <hr style="border: 1px solid rgb(255, 255, 255)">
            <?php 
                $screenCount = count($objscreen);
                if ($screenCount > 1) {
                    ?>
            <div class="content">
                <div class="slider-container" id="slider">
                    <div class="slides-wrapper" id="wrapper">
                        <?php
                                while($screenCount > 1)
                                {?>
                        <div class="slide" style="background-color:white;">
                            <img src="<?php echo($objscreen[$screenCount-1]->src) ?>"
                                style="width:100%; height:auto; aspect-ratio: 16 / 9;" alt="Screenshot">
                        </div>
                        <?php
                                    $screenCount--;
                                }?>
                    </div>
                    <button type="button" class="prev" id="prevBtn">&#10094;</button>
                    <button type="button" class="next" id="nextBtn">&#10095;</button>
                    <div class="dots-container" id="dots-container"></div>
                </div>
            </div>
            <?php }
            else{ 
                echo "<div class=\"content\" style=\"background-color:teal; color:white;\">";
                echo "<p>No screenshots to display</p></div>";
            }?>
            <?php
            ?>

            <section class="row" style="background-image: url('/assets/images/bg4.jpg'); color:black">
                <div class="content">
                    <h3>About -
                        <?php echo $obj->appName; ?>
                    </h3>
                    <p>
                        <?php echo $obj->para1; ?>
                    </p>
                    <p>
                        <?php echo $obj->para2; ?>
                    </p>
                </div>
            </section>

            <section class="row" style="overflow: hidden; background-image: url('/assets/images/bg4.jpg'); color:black">
                <div class="column">
                    <div style="background-color: teal; color: white; margin: 0; padding: 15px 20px;">
                        <h3>Software details</h3>
                    </div>
                    <div style="padding:0px; margin:0px; width:100%;">
                        <table>
                            <tr>
                                <td><b>Application Name:</b></td>
                                <td>
                                    <?php echo $obj->appName; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Version:</b></td>
                                <td>
                                    <?php echo $obj->version; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Type:</b></td>
                                <td>
                                    <?php echo $obj->type; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Platform:</b></td>
                                <td>
                                    <?php echo $obj->platform; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Development Tool:</b></td>
                                <td>
                                    <?php echo $obj->tool; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Programming Language:</b></td>
                                <td>
                                    <?php echo $obj->language; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Download Available:</b></td>
                                <td>
                                    <?php echo $obj->getfrom; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Prerequistes:</b></td>
                                <td>
                                    <?php echo $obj->requires; ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="column">
                    <div style="background-color: teal; color: white; margin: 0; padding: 15px 20px;">
                        <h3>Software Link</h3>
                    </div>
                    <div
                        style="display: flex; flex-direction: column; padding:0px; margin:10px; align-items: flex-start;">
                        <?php
                        $arrayCount = count($obj2);
                        if ($arrayCount > 1) {
                            while($arrayCount > 1)
                            {
                                if($obj2[$arrayCount-1]->linkType == "1")
                                {
                                    ?>
                        <p><img src="<?php echo $obj2[$arrayCount-1]->imagePath ?>" height="50" width="50"
                                alt="Download">&nbsp;<b><a href="<?php echo $obj2[$arrayCount-1]->linkPath ?>"
                                    class="blue-link-dark">
                                    <?php echo $obj2[$arrayCount-1]->displayText ?>
                                </a></b></p>
                        <?php
                                }
                                else{
                                    ?>
                        <p><img src="<?php echo $obj2[$arrayCount-1]->imagePath ?>" height="50" width="50"
                                alt="Download">&nbsp;<b><a href="<?php echo $obj2[$arrayCount-1]->linkPath ?>"
                                    class="blue-link-dark" target="_blank">
                                    <?php echo $obj2[$arrayCount-1]->displayText ?>
                                </a></b></p>
                        <?php
                                }
                                ?>


                        <?php
                                $arrayCount --;
                            }
                            
                        } 
                        else {
                            echo "No Records";
                            ?>
                        <p><img src="/assets/images/apps/app1.png" height="50" width="50" alt="Coming Soon"><b><a
                                    href="javascript:Updating();" class="blue-link-dark">Coming Soon</a></b></p>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </section>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
    <svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath2" d="M0,0  L100, 0C35,150 35,0 0,100z" fill="#0f172a"></path>
    </svg>
    <script>
        // 1. DOM ELEMENTS
        const wrapper = document.getElementById('wrapper');
        const slides = document.querySelectorAll('.slide');
        const dotsContainer = document.getElementById('dots-container');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        // 2. STATE VARIABLES
        let currentIndex = 0;
        let isDragging = false;
        let startX = 0;
        let endX = 0;
        const totalSlides = slides.length;

        // 3. INITIALIZE DOTS
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');

            dot.addEventListener('click', () => {
                goToSlide(index);
            });

            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        // 4. CORE NAVIGATION FUNCTIONS
        function updateSlider() {
            // Moves the wrapper based on current index
            wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
            // Update pagination dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlider();
            resetTimer();
        }

        // 5. TIMER LOGIC (5-second auto-play)
        let autoPlay = setInterval(nextSlide, 8000);

        function resetTimer() {
            clearInterval(autoPlay);
            autoPlay = setInterval(nextSlide, 8000);
        }

        // 6. EVENT LISTENERS (Buttons & Keyboard)
        nextBtn.addEventListener('click', () => { nextSlide(); resetTimer(); });
        prevBtn.addEventListener('click', () => { prevSlide(); resetTimer(); });

        document.addEventListener('keydown', (e) => {
            if (e.key === "ArrowLeft") { prevSlide(); resetTimer(); }
            if (e.key === "ArrowRight") { nextSlide(); resetTimer(); }
        });

        // 7. UNIFIED DRAG LOGIC (Mouse & Touch)
        // Helper to get X-position for both mouse and touch
        const getX = (e) => e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;

        const startDragging = (e) => {
            isDragging = true;
            startX = getX(e);
            wrapper.style.transition = 'none'; // Instant feedback while dragging
        };

        const moveDragging = (e) => {
            if (!isDragging) return;
            // Prevent browser default behaviors like text selection
            if (e.type === 'mousemove') e.preventDefault();
        };

        const stopDragging = (e) => {
            if (!isDragging) return;

            // Capture end position
            if (e.type.includes('mouse')) {
                endX = e.pageX;
            } else {
                endX = e.changedTouches[0].clientX;
            }

            isDragging = false;
            wrapper.style.transition = 'transform 0.5s ease-in-out'; // Restore smooth movement

            handleSwipe();
        };

        function handleSwipe() {
            const threshold = 50; // Pixels required to trigger a slide change
            if (startX - endX > threshold) {
                nextSlide();
                resetTimer();
            } else if (endX - startX > threshold) {
                prevSlide();
                resetTimer();
            } else {
                updateSlider(); // Snap back if swipe wasn't far enough
            }
        }

        // Attach Listeners to Wrapper
        wrapper.addEventListener('mousedown', startDragging);
        wrapper.addEventListener('mousemove', moveDragging);
        window.addEventListener('mouseup', stopDragging); // Handles release outside the box

        wrapper.addEventListener('touchstart', startDragging, { passive: true });
        wrapper.addEventListener('touchmove', moveDragging, { passive: true });
        wrapper.addEventListener('touchend', stopDragging, { passive: true });

        wrapper.addEventListener('mouseenter', () => clearInterval(autoPlay));
        wrapper.addEventListener('mouseleave', () => resetTimer());

        // Prevent images from being "dragged" as files
        wrapper.querySelectorAll('img').forEach(img => {
            img.addEventListener('dragstart', (e) => e.preventDefault());
        });

        function moveSlide(direction, event) {
            if (event) event.preventDefault(); // Stops the refresh
            currentIndex = (currentIndex + direction + slides.length) % slides.length;
            goToSlide(currentIndex);
        }
    </script>
</form>
<?php
    } else {
        ?>
<a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
<div style="background-color:#008080; color: #fff; padding-top:40px; margin: 20px; ">
    <h1>Software link - Error</h1>
</div>
<svg style="background-color:#0f172a; display: block;" width="100%" height="45" viewBox="0 0 100 100"
    preserveAspectRatio="none">
    <path id="wavepath1" d="M0,0  L100, 0C35,150 35,0 0,100z" fill="#008080"></path>
</svg>
<div class="outer">
    <div class="inner">
        <h2>An error occured</h2>
        <hr>
        <h3>Error details:-</h3>

        <?php
        echo '<ul>';
        echo '<li>Message: Could not find the Application record</li>';
        echo '<li>Requested URI: '. $_SERVER["REQUEST_URI"] .'</li>';
        echo '<li>Please navigate to the home page</li>';
        echo '</ul>';
        echo '<a href="/" class="green-link-dark" onclick="toggleNav()">Home</a>';
        ?>

    </div>
</div>
<svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
    preserveAspectRatio="none">
    <path id="wavepath2" d="M0,0  L100, 0C35,150 35,0 0,100z" fill="#0f172a"></path>
</svg>
<?php   
        

    }
} else {
    ?>
<a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
<div style="background-color:#E6B89C; color: #fff; padding-top:40px; margin: 20px; ">
    <h1>Software link - Error</h1>
</div>
<svg style="background-color:#0f172a; display: block;" width="100%" height="45" viewBox="0 0 100 100"
    preserveAspectRatio="none">
    <path id="wavepath1" d="M0,0  L100, 0C35,150 35,0 0,100z" fill="#008080"></path>
</svg>
<div class="outer">
    <div class="inner">
        <h2 style="color: black;">An error occured</h2>
        <hr style="border: 1px solid rgb(51, 49, 49)">
        <h3>Error details:-</h3>

        <?php
        echo '<ul>';
        echo '<li>Message: Exploded less than 2</li>';
        echo '<li>Requested URI: '. $_SERVER["REQUEST_URI"] .'</li>';
        echo '<li>Please navigate to the home page</li>';
        echo '</ul>';
        echo '<a href="/" class="green-link-dark" onclick="toggleNav()">Home</a>';
        ?>

    </div>
</div>
<svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
    preserveAspectRatio="none">
    <path id="wavepath2" d="M0,0  L100, 0C35,150 35,0 0,100z" fill="#0f172a"></path>
</svg>    
    <?php
    
}
?>