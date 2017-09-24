    </head>
<body>
<header id="header">
    <div class="header-content clearfix">
        <a class="logo" href="<?php echo $baseUrl; ?>"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/ThaiHerbal-logo-white.png" alt="Thai Herbal Logo" class="img-responsive"></a>
        <nav class="navigation" role="navigation">
            <ul class="primary-nav">
                <li <?php echo $home_selected; ?>><a href="<?php echo $baseUrl; ?>">Home</a></li>
                <li <?php echo $about_selected; ?>><a href="<?php echo $baseUrl; ?>/about">About</a></li>
                <li class="sub_menu">
                    <a href="#">Products</a>
                    <ul>
                        <li><a href="http://www.herbalshopthailand.com/index.php" target="_blank"><i class="icon-list"></i>&nbsp;&nbsp;Product list</a></li>
                        <li><a href="http://www.xn--i3cdfkjosmlnjq3e1ewb6d9kc8l.com/activities.php" target="_blank"><i class="icon-list"></i>&nbsp;&nbsp;Production</a></li>
                        <li><a href="http://www.xn--i3cdfkjosmlnjq3e1ewb6d9kc8l.com/QA4.php" target="_blank"><i class="icon-list"></i>&nbsp;&nbsp;Research</a></li>
                    </ul>
                </li>
                <li><a href="http://www.herbalshopthailand.com/index.php">Herbal Shop</a></li>
                <li <?php echo $news_selected; ?>><a href="<?php echo $baseUrl; ?>/news_event">News & Event</a></li>
                <li <?php echo $article_selected; ?>><a href="<?php echo $baseUrl; ?>/article">Article</a></li>
                <li <?php echo $contact_selected; ?>><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
    </div>
    <!-- header content -->
</header>
<!-- header -->