<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item home"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item menu"><a class="nav-link" href="/menu">Menu</a></li>
                    <li class="nav-item about"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item dropdown pages">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="/reservation">Reservation</a>
                            <a class="dropdown-item" href="/stuff">Stuff</a>
                            <a class="dropdown-item" href="/gallery">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown blog">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="/blog">blog</a>
                            <a class="dropdown-item" href="/blog_details">blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item contact"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var link = document.location.href.split('/');
    if (link[3] == '') {
        $(".home").addClass("active");
    }
    else if (link[3] == 'menu') {
        $(".menu").addClass("active");
    }
    else if (link[3] == 'about') {
        $(".about").addClass("active");
    }
    else if (link[3] == 'reservation') {
        $(".pages").addClass("active");
    }
    else if (link[3] == 'stuff') {
        $(".pages").addClass("active");
    }
    else if (link[3] == 'gallery') {
        $(".pages").addClass("active");
    }
    else if (link[3] == 'blog_details') {
        $(".blog").addClass("active");
    }
    else if (link[3] == 'blog') {
        $(".blog").addClass("active");
    }
    else if (link[3] == 'contact') {
        $(".contact").addClass("active");
    }
</script>
