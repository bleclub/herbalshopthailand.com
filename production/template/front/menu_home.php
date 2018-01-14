<?php
    require 'controllers/front/menu.php';
?>
<style>

    .navigation{
        display:none;
    }
    #header{
        position: absolute;
    }
    #header.fixed{
        background:transparent;
    }
    #header .logo{
       display:none;
    }
    #header .logo.logo_full{
        width: 450px;
        display:block;
        outline:none;
    }

    .home_navigation{
      background-color: rgba(0,0,0,.6);
      position: absolute;
      width:  100%;
      z-index: 99;
      top:auto;
      bottom: 60px;
    -moz-transition: top 0.8s;
    -o-transition: top 0.8s;
    -webkit-transition: top 0.8s;
    transition: top 0.8s;
    }
    .home_navigation.fixing{
        position: fixed;
        bottom:auto;
        top:-100px;
    }
    .home_navigation.fixed{
        position: fixed;
        bottom:auto;
        top:0;
    }

    ul.home-primary-nav {
      text-align: center;
    }
    ul.home-primary-nav li {
      margin: 30px 15px 30px;
      text-transform: uppercase;
      font-weight: 300;
      font-size: 13px;
      display: inline-block;
      letter-spacing: 1px;
    }

    .home_navigation.fixed ul.home-primary-nav li {
    margin: 30px 0 30px 30px;
}

    ul.home-primary-nav li a {
      color: #fff;
    }

    .home_navigation.fixed ul.home-primary-nav{
        float:right;
    }

    .home_navigation.fixed ul.home-primary-nav li .open li {
        margin: 20px 0 20px 0;
    }


    .home_navigation a {
        color: #fff;
        font-size: 13px;
        font-weight: 300;
        margin-left: 0px;
        padding: 10px 0;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
    }

    .home_navigation a:hover, .navigation a.active {
      color: #47c9af; 
    }

    .home_navigation .selected > a {
      color: #47c9af;
    }

    

    .home_navigation .logo {
        width: 80px;
        float: left;
        display:none;
    }

    .home_navigation.fixed .logo {
        display:block;
    }

    .home-primary-nav ul {
    background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
    border-top: 2px solid #fff;
    color: #fff;
    float: none;
    font-family: kanit;
    font-size: 13px;
    font-weight: 300;
    line-height: 1.8;
    margin-left: 0;
    position: absolute;
    text-transform: uppercase;
    top: 100%;
    width: 200px;
    opacity: 0;
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    transition: opacity 0.5s;
}

    .home-primary-nav ul.open{
      opacity: 1;
    }
    .home-primary-nav ul li {
        display: block;
        margin: 20px 30px;
        padding: 0;
    }
    .home-primary-nav ul li a {
        margin-left: -20px;
        padding: 0;
    }

    @media screen and (max-width: 1024px) {

        .home_navigation{
            display: none;
        }

        .navigation {
            display: block;
        }

        #header{
            position:fixed;
        }

        #header.fixed{
            background: rgba(0,0,0,0.6);
        }
        
        #header.fixed .nav-toggle {
            top: 25px;
        }

        #header .logo.logo_full{
            width:350px;
        }

    }
    @media screen and (max-width: 600px) {
        #header .logo.logo_full{
            display:none;
        }

        #header .logo{
            display:block;
            width:80px;
        }

        #header.fixed .logo{
            width:70px;
        }

        #header.fixed .nav-toggle {
            top: 18px;
        }
    }


</style>



<header id="header">
    <div class="header-content clearfix">
        <a class="logo" href="<?php echo $baseUrl.'/'.$lang; ?>"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/ThaiHerbal-logo-white.png" alt="Thai Herbal Logo" class="img-responsive"></a>
        <a class="logo logo_full" href="<?php echo $baseUrl.'/'.$lang; ?>"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/ThaiHerbal-logo-full.png" alt="Thai Herbal Logo" class="img-responsive"></a>        
        <?php 
            if($lang == 'th'){ 
                $lang_active_th = 'class="selected"';
            } 
            else if($lang == 'en'){
                $lang_active_en = 'class="selected"';
            }
        ?>
        <nav class="navigation" role="navigation">
            
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

    
    <nav class="home_navigation" role="navigation">
        <div class="container">
             <a class="logo" href="<?php echo $baseUrl.'/'.$lang; ?>"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/ThaiHerbal-logo-white.png" alt="Thai Herbal Logo" class="img-responsive"></a>
             <ul class="lang">
                <!-- <li>Langauge:</li> -->
                <li <?php echo $lang_active_th; ?>><a href="<?php echo switch_lg('th'); ?>" >TH</a></li>
                <li <?php echo $lang_active_en; ?>><a href="<?php echo switch_lg('en'); ?>">EN</a></li>
            </ul>
            <ul class="home-primary-nav">
                <li <?php echo @$home_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                <li <?php echo @$about_selected; ?>><a href="<?php echo $baseUrl.'/'.$lang; ?>/about">About</a></li>
                <li class="sub_menu_home <?php echo @$product_selected; ?>" style="cursor: pointer;">
                    <a  style="cursor: pointer;">Products</a>
                    <ul>
                    <?php
                        while($rs_category2 = $db->get($results_product2)) { 
                    ?>
                        <li><a href="<?php echo $baseUrl.'/'.$lang.'/product/category/'.$rs_category2['category_name_en'] ?>"><i class="icon-list"></i>&nbsp;&nbsp;<?php echo $rs_category2['category_name_en']; ?></a></li>
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
        </div>
    </nav>