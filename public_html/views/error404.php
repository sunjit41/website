<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us">

<head>
    <title>Sunjit41 - Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/error.css">
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
</head>

<body style="background-color: #008080;">
    <header class="stay-top">
        <nav>
            <div class="main-logo">SUNJIT41</div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="/" onclick="toggleNav()">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
        <div style="background-color:#008080; color: #fff;  padding-top:40px; margin: 20px;">
            <h1>Error Page</h1>
        </div>
        <svg style="background-color:#FFE6E8; display: block;" width="100%" height="45" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path id="wavepath1" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#008080"></path>
        </svg>
        <div class="outer">
            <div class="inner">
                <h2>An error occured</h2>
                <hr>
                <h3>Error Details:-</h3>
                
                <ul>
                    <li><?php 
                        if(session_status() === PHP_SESSION_NONE) 
                            {
                                session_start();
                            }
                        if(isset($_SESSION['errornum'])) 
                        {
                            echo $_SESSION['errornum']; 
                            unset($_SESSION['errornum']);
                        }
                        else{
                            echo ("No Error number");
                        }
                        ?></li>
                    <li><?php 
                        if(isset($_SESSION['request_uri']))
                        {
                            echo "Requested URI : ". $_SESSION['request_uri'];
                            unset($_SESSION['request_uri']);
                        }
                        else{
                            echo ("No URI");
                        }                        
                           ?></li>
                    <li><?php 
                        if(isset($_SESSION['sunerror']))
                        {
                            echo "Error Message : ". $_SESSION['sunerror'];  
                            unset($_SESSION['sunerror']);
                        }
                        else{
                            echo ("No Message");
                        }                        
                        ?></li>
                    <li>Please navigate to the home page</li>
                </ul>
                <a href="/" class="green-link-dark" onclick="toggleNav()">Home</a>
            </div>
        </div>
        <svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path id="wavepath2" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#FFE6E8"></path>
        </svg>        
    </main>
    <?php require('views/footer.php');?>
</body>

</html>