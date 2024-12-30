<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="d-flex align-items-center me-auto">
            <img src="images/pps-ethics-logo.png" width="120px" alt="Logo">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                  <!-- Courses Dropdown -->
                  <li class="listing-dropdown">
                    <a href="business.php"><span>Our Business</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul class="dropdown-grid">
                        <li>
                       <h3><img src="images/pps-ethics-logo.png" alt="Products Icon" class="icon"><a href="#">PPS & Co</h3></a>
                        </li>
                        <li>
                        <h3><img src="images/pps-ethics-logo.png" alt="Brands Icon" class="icon"><a href="#">PPS Metal</h3></a>
                        </li>
                        <li>
                       <h3><img src="images/pps-ethics-logo.png" alt="Applications Icon" class="icon"> <a href="#">Mahabali Steels</h3></a>
                        </li>
                        <li>
                        <h3><img src="images/pps-ethics-logo.png" alt="Experience Center Icon" class="icon"><a href="#">P.P.S STEELS</h3></a>
                        </li>
                        <li>
                        <h3><img src="images/pps-ethics-logo.png" alt="Privilege Club Icon" class="icon"><a href="#">Manufacturing Units</h3></a>
                        </li>
                    </ul>
                </li>

             
                  <!-- Courses Dropdown -->
                  <li class="listing-dropdown">
                    <a href="services.php"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul class="dropdown-grid">
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Products Icon" class="icon">Retail Trading</h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Brands Icon" class="icon">Import and Export</h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Applications Icon" class="icon">Scrap Trading</h3>
                        </li>
                       
                    </ul>
                </li>
                 <!-- Products Dropdown -->
                 <li class="listing-dropdown">
                    <a href="products.php"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul class="dropdown-grid">
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="PPS TMT Icon" class="icon"> <a href="#">PPS TMT</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Angels Icon" class="icon"> <a href="#">Angels</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="MS Channels Icon" class="icon"> <a href="#">MS Channels</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="MS Rounds Icon" class="icon"> <a href="#">MS Rounds</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Flat Icon" class="icon"> <a href="#">Flat</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Pipes Icon" class="icon"> <a href="#">Pipes</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Binding Wire Icon" class="icon"> <a href="#">Binding Wire</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Brand Icon" class="icon"> <a href="#">Brand</a></h3>
                        </li>
                        <li>
                            <h3><img src="images/pps-ethics-logo.png" alt="Ingot Icon" class="icon"> <a href="#">Ingot</a></h3>
                        </li>
                    </ul>
                </li>
                <li><a href="education.php">Eductaion</a></li>
                <a href="contact.php" class="btn-get-started">Contact Us</a>
              
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      

    </div>
</header>
</body>


<style>
/* Dropdown Grid Layout */
.dropdown-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 15px;
    padding: 10px;
    max-width: 100vw; /* Prevent overflow */
    overflow-x: auto; /* Add horizontal scroll if necessary */
}
.dropdown-grid img.icon {
    width: 60px;
    height: 60px;
    object-fit: cover;
    margin-right: 10px;
    border-radius: 5px;
}
.dropdown-grid h3 {
    display: flex;
    align-items: center;
    font-size: 1rem;
}
.dropdown-grid a {
    text-decoration: none;
    color: #333;
}
.dropdown-grid a:hover {
    color: #003366;
}

.btn-get-started {
  color: var(--contrast-color);
  background: var(--accent-color);
  font-family: var(--heading-font);
  font-weight: 300;
  font-size: 10px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 24px 12px 24px;
  border-radius: 50px;
  transition: 0.5s;
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.btn-get-started:hover {
  color: var(--contrast-color);
  background: color-mix(in srgb, var(--accent-color), transparent 15%);
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

</style>
