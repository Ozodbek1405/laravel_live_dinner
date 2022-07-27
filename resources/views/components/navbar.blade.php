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
                    <li class="nav-item reservation"><a class="nav-link" href="/reservation">Reservation</a></li>
                    <li class="nav-item gallery"><a class="nav-link" href="/gallery">Gallery</a></li>
                    <li class="nav-item about"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item blog"><a class="nav-link" href="/blog">Blog</a></li>
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
        $(".reservation").addClass("active");
    }
    else if (link[3] == 'blog') {
        $(".blog").addClass("active");
    }
    else if (link[3] == 'gallery') {
        $(".gallery").addClass("active");
    }
    else if (link[3] == 'blog_details') {
        $(".blog").addClass("active");
    }
</script>
