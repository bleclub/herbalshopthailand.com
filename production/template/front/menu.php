<?php
    require 'controllers/front/menu.php';
?>
    
    </head>
<body>
<header id="header">
    <div class="header-content clearfix">
        <a class="logo" href="<?php echo $baseUrl.'/'.$lang; ?>"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/ThaiHerbal-logo-white.png" alt="Thai Herbal Logo" class="img-responsive"></a>
        <?php 
            if($lang == 'th'){ 
                $lang_active_th = 'class="selected"';
            } 
            else if($lang == 'en'){
                $lang_active_en = 'class="selected"';
            }
        ?>
        <nav class="navigation" role="navigation">
            <ul class="lang">
                <!-- <li>Langauge:</li> -->
                <li <?php echo $lang_active_th; ?>><a href="<?php echo switch_lg('th'); ?>" >TH</a></li>
                <li <?php echo $lang_active_en; ?>><a href="<?php echo switch_lg('en'); ?>">EN</a></li>
            </ul>
            <ul class="primary-nav">
                <li <?php echo @$home_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                <li <?php echo @$about_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/about">About</a></li>
                <li class="sub_menu <?php echo @$product_selected; ?>" style="cursor: pointer;">
                    <a  style="cursor: pointer;">Products</a>
                    <ul>
                    <?php
                        while($rs_category = $db->get($results_product)) { 
                    ?>
                        <li><a href="<?php echo $baseUrl.'/'.$lang.'/product/category/'.$rs_category['category_name_en'] ?>"><i class="icon-list"></i>&nbsp;&nbsp;<?php echo $rs_category['category_name_en']; ?></a></li>
                    <?php } ?>
                        
                        <!-- <li><a href="<?php //echo $baseUrl.'/'.$lang; ?>/production"><i class="icon-list"></i>&nbsp;&nbsp;Production</a></li>
                        <li><a href="<?php //echo $baseUrl.'/'.$lang; ?>/research"><i class="icon-list"></i>&nbsp;&nbsp;Research</a></li> -->
                    </ul>
                </li>
                <li <?php echo @$herblist_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/herblist">Herbal list</a></li>
                <li <?php echo @$news_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/news_event">News & Event</a></li>
                <li <?php echo @$article_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/article">Article</a></li>
                <li <?php echo @$contact_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/contact">Contact</a></li>
                <li <?php echo @$career_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/career">Career</a></li>
                <li <?php echo @$distribution_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/distribution">Distribution</a></li>
            </ul>
            
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
    </div>
    <!-- header content -->
</header>
<!-- header -->



