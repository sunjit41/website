<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us">
<head>
    <title>Sunjit41</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/css/certs.css">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <style>

    </style>
</head>
<body style="background-color: #008080;">
    <header class="stay-top">
      <nav>
        <div class="main-logo">SUNJIT41</div>
                <button class="sandwich-btn" id="sandwich" onclick="toggleNav()">
              &#9776;
          </button>
        <ul class="nav-menu" id="nav-menu">
          <li><a href="/" onclick="toggleNav()">Home</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <?php
    require('views/certs2.php');
    require('views/footer.php');
    ?>
        <script>
            function toggleNav() {
                const menu = document.getElementById("nav-menu");
                // Toggles the 'active' class to show/hide links
                menu.classList.toggle("active");
            }
        </script>
    </main>
</body>
</html>