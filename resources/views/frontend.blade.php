<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue and Lumen</title>

</head>
<body class="home page-template-default page page-id-6 wp-custom-logo">
<div id="frontend_app" class="site">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <section class="newspaper-x-news-ticker">
<span class="newspaper-x-module-title">
<span class="fa-stack fa-lg">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i>
</span>
Latest News </span>
                        <ul class="newspaper-x-news-carousel owl-carousel owl-theme">
                            <li class="item">
                                <a href="2017/05/10/sed-purus-velit-finibus-non-semper-nonut-utas/index.html">Sed purus velit, finibus non semper nonut am utas</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/nunc-hendrerit-egestas-amus-ad-arcu-im-usa/index.html">Nunc hendrerit egestas amus ad arcu im usa</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/itum-binus-sitam-conestum-ey/index.html">Itum as binus sitam conestum ey</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/vivamus-id-lorem-blandit/index.html">Vivamus id lorem blandit</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/nam-aliquet-lorem-vita/index.html">Nam aliquet, lorem vita</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/nulla-nec-enimus-amis/index.html">Nulla nec enimus amis</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/aliquet-lorem-pantum-2/index.html">Aliquet, lorem pantum.</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/odio-sapien-uta-accumsan-ut-dolor-vel/index.html">In odio sapien, at uta, accumsan ut dolor vel</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/maecenas-tincidunt-posuere-quam-eu-atimu/index.html">Maecenas tincidunt posuere quam, eu atimu</a>
                            </li>
                            <li class="item">
                                <a href="2017/05/10/maecenas-elit-ligula-placerat-elementum/index.html">Maecenas elit ligula, placerat elementum</a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-lg-4">
                    <form role="search" method="get" id="searchform" action="https://colorlib.com/newspaper-x/">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input class="search-field" placeholder="Search..." value="" name="s" type="search">
                        </label>
                        <button class="search-submit" value="Search  " type="submit"><span class="fa fa-search"></span>
                        </button>
                    </form>
                    <div class="top-header-icons">
                        <div id="menu-social" class="menu pull-right">
                            <ul id="menu-social-items" class="menu-items">
                                <li id="menu-item-111" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111">
                                    <a href="https://facebook.com/"><span class="screen-reader-text">Facebook</span></a>
                                </li>
                                <li id="menu-item-112" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112">
                                    <a href="https://tumblr.com/"><span class="screen-reader-text">Tumblr</span></a>
                                </li>
                                <li id="menu-item-113" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-113">
                                    <a href="https://twitter.com/"><span class="screen-reader-text">Twitter</span></a>
                                </li>
                                <li id="menu-item-115" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-115">
                                    <a href="https://plus.google.com/"><span class="screen-reader-text">Google +</span></a>
                                </li>
                                <li id="menu-item-114" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-114">
                                    <a href="https://youtube.com/"><span class="screen-reader-text">Youtube</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding container">
            <div class="row">
                <div class="col-md-4 header-logo">
                    <a href="index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="185" height="55" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/newspaperx_logo_185x55_dark.png" class="custom-logo" alt="Newspaper X"/></a>
                </div>
                <div class="col-md-8 header-banner">
                    <a href="https://colorlib.com/wp/forums/">
                        <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment-newspaper-x-wide-banner size-newspaper-x-wide-banner" alt="" loading="lazy"/>
                    </a>
                </div>
            </div>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span class="fa fa-bars"></span></button>
                        <div class="menu-primary-menu-container">
                            <ul id="primary-menu" class="menu">
                                <li id="menu-item-127" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-127">
                                    <router-link to="/">Home</router-link>
                                </li>
                                <li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135">
                                    <router-link to="/news-page">News</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="content" class="site-content container">
    </div>
    <router-view></router-view>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="widgets-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div id="text-2" class="widget widget_text"><h3 class="widget-title">About</h3>
                            <div class="textwidget">
                                <p>Maecenas finibus pretium congue. Quisque sed sem itum turpis. Mauris ut quam vitae urna dignissim. </p>
                                <p>Curabitur pharetra mauris id urna vestibulum, ne pharetra elit commodo. Nunc rutrum mi lectus am utan es nimbus avientin am estas potivan. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div id="recent-posts-3" class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent posts</h3>
                            <ul>
                                <li>
                                    <a href="2017/05/10/sed-purus-velit-finibus-non-semper-nonut-utas/index.html">Sed purus velit, finibus non semper nonut am utas</a>
                                    <span class="post-date">May 10, 2017</span>
                                </li>
                                <li>
                                    <a href="2017/05/10/nunc-hendrerit-egestas-amus-ad-arcu-im-usa/index.html">Nunc hendrerit egestas amus ad arcu im usa</a>
                                    <span class="post-date">May 10, 2017</span>
                                </li>
                                <li>
                                    <a href="2017/05/10/itum-binus-sitam-conestum-ey/index.html">Itum as binus sitam conestum ey</a>
                                    <span class="post-date">May 10, 2017</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div id="categories-3" class="widget widget_categories"><h3 class="widget-title">Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-2"><a href="category/editorial/index.html">Editorial</a>
                                    <span class="newspaper-x-cat-count">11</span>
                                </li>
                                <li class="cat-item cat-item-4"><a href="category/events/index.html">Events</a>
                                    <span class="newspaper-x-cat-count">9</span>
                                </li>
                                <li class="cat-item cat-item-5"><a href="category/news/index.html">News</a>
                                    <span class="newspaper-x-cat-count">3</span>
                                </li>
                                <li class="cat-item cat-item-3"><a href="category/the-world/index.html">The World</a>
                                    <span class="newspaper-x-cat-count">7</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div id="newspaper_x_widget_contact_us-2" class="newspaper-x-type-contact widget newspaper_x_widgets">
                            <h3 class="widget-title">Contact</h3>
                            <div class="textwidget contact-widget">
                                <div><span>Phone:</span> <a href="tel:228 135 887">228 135 887</a></div>
                                <div><span>Email:</span>
                                    <a href="https://colorlib.com/cdn-cgi/l/email-protection#dcb2b9abafacbdacb9aea49cbfb3b2a8bdbfa8f2bfb3b1"><span class="__cf_email__" data-cfemail="92fcf7e5e1e2f3e2f7e0ead2f1fdfce6f3f1e6bcf1fdff">[email&#160;protected]</span></a>
                                </div>
                                <div><span>Address:</span> Northon Street, 2015 NYC</div>
                                <div class="author-social-menu">
                                    <ul id="social-contact" class="menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111">
                                            <a href="https://facebook.com/"><span>Facebook</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112">
                                            <a href="https://tumblr.com/"><span>Tumblr</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-113">
                                            <a href="https://twitter.com/"><span>Twitter</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-115">
                                            <a href="https://plus.google.com/"><span>Google +</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-114">
                                            <a href="https://youtube.com/"><span>Youtube</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-to-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="javascript:void(0)" id="back-to-top">
                            <span>Go Up</span>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-info ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        &copy; 2020 Newspaper-X a theme by <a href="https://colorlib.com/">Colorlib</a>
                        <nav id="footer-navigation" class="pull-right text-right hidden-xs">
                            <div class="menu">
                                <ul>
                                    <li class="page_item page-item-132"><a href="blog/index.html">Blog</a></li>
                                    <li class="page_item page-item-138"><a href="contact/index.html">Contact</a></li>
                                    <li class="page_item page-item-6 current_page_item">
                                        <a href="index.html" aria-current="page">Home</a></li>
                                    <li class="page_item page-item-2"><a href="sample-page/index.html">Sample Page</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="dist/main.js"></script>
</body>
</html>
