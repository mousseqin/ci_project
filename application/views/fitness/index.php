<!DOCTYPE HTML>
<html>
<head>
    <title>个人网站 | 还在施工中 | 兴趣爱好 </title>
    <?php include_once 'index_head.html'; ?>
</head>
<body>
<!--header start here-->
<div class="header-strip">

</div>
<div class="header">
    <div class="container">
        <div class="header-main">
            <div class="logo">
                <h1><a href="index.php/fitness">Wandering</a></h1>
            </div>
        </div>
    </div>
</div>
<div class="navg-strip">
    <div class="container">
        <div class="navg-main">
            <div class="top-nav">
                <span class="menu"> <img src="/public/images/icon.png" alt=""/></span>
                <ul class="res">
                    <li><a href="index.php/fitness" class="active">首页</a></li>
                    <li><a class="scroll" href="#about">欢迎</a></li>
                    <li><a class="scroll" href="#services">服务</a></li>
                    <li><a class="scroll" href="#gallery">画廊</a></li>
                    <li><a class="scroll" href="#contact">联系我们</a></li>
                </ul>
                <!--script-->
                <script>
                    $("span.menu").click(function () {
                        $("ul.res").slideToggle(500, function () {
                        });
                    });
                </script>
            </div>
            <div class="header-right">
                <div class="social-icons">
                    <ul>
                        <li><a href="<?php echo FACEBOOK_HOME; ?>" target="_blank"><span class="fa"> </span></a></li>
                        <li><a href="<?php echo TWITTER_HOME; ?>" target="_blank"><span class="tw"> </span></a></li>
                        <li><a title="<?php echo MYGMAIL; ?>"><span class="g"> </span></a></li>
<!--                        <li><a href="#"><span class="in"> </span></a></li>-->
<!--                        <li><a href="#"><span class="pin"> </span></a></li>-->
<!--                        <li><a href="#"><span class="you"> </span></a></li>-->
                    </ul>
                </div>
<!--                <div class="search-in">-->
<!--                    <div class="search">-->
<!--                        <form>-->
<!--                            <input type="text" class="text">-->
<!--                            <input type="submit" value="SEARCH">-->
<!--                        </form>-->
<!--                        <div class="close-in"><img src="/public/images/s-close.png" alt=""/></div>-->
<!--                    </div>-->
<!--                    <div class="right">-->
<!--                        <button></button>-->
<!--                    </div>-->
<!--                </div>-->
                <script type="text/javascript">
                    $('.search').hide();
                    $('button').click(function () {
                                $('.search').show();
                                $('.text').focus();
                            }
                    );
                    $('.close-in').click(function () {
                        $('.search').hide();
                    });
                </script>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--header end here-->
<!--banner start here-->
<div class="banner">
    <div class="container">
        <div class="banner-main">
            <h2>Lorem Ipsum is simply text</h2>
            <p>Lorem Ipsum is not simply random text. It has roots in a piece</p>
        </div>
    </div>
</div>
<!--banner end here-->
<!--about start here-->
<div class="about" id="about">
    <div class="container">
        <div class="about-main">
            <div class="about-bottom">
                <div class="col-md-6 about-left">
                    <h4>Welcome</h4>
                    <h5>Officia deserunt mollit anim id est laborum</h5>
                    <p>Cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum veniam,
                        quis nostr</p>
                    <div class="about-grid">
                        <div class="ab-sub-gd">
                            <span class="glyphicon glyphicon-star-empty ab-gd-img" aria-hidden="true"> </span>
                            <div class="ab-gd-text">
                                <h6>Neque porr dolore</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab-sub-gd">
                            <span class="glyphicon glyphicon-cloud ab-gd-img" aria-hidden="true"> </span>
                            <div class="ab-gd-text">
                                <h6>Anyone who loves</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab-sub-gd">
                            <span class="glyphicon glyphicon-leaf ab-gd-img" aria-hidden="true"> </span>
                            <div class="ab-gd-text">
                                <h6>Sed perspiciatis</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 about-right">
                    <a href="single.html"><img src="/public/images/ab.jpg" alt="" class="img-responsive"></a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit, sed quia consequuntur magni dolores</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--about end here-->
<!--ab-info start here-->
<div class="ab-info">
    <div class="container">
        <div class="ab-info-main">
            <div class="ab-info-bott">
                <div class="col-md-6 ab-info-left">
                    <h3>We are Fulfill <span class="ab-info-clr">Your All Dreams</span></h3>
                    <p>These cases are perfectly simple and easy to distinguish.</p>
                    <span class="ab-line"> </span>
                </div>
                <div class="col-md-6 ab-info-right">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                        born and I will give you a complete account.</p>
                    <a href="single.html">Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--ab-info end here-->
<!--services start here-->
<div class="services" id="services">
    <div class="services-main">
        <div class="ser-top">
            <h3>Services</h3>
            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is
                untrammelled and when nothing prevents our being</p>
        </div>
        <div class="ser-bottom">
            <div class="col-md-6 service-left">
                <img src="/public/images/ser1.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 services-right">
                <div class="ser-grid">
                    <span class="glyphicon glyphicon-plane ser-icon" aria-hidden="true"> </span>
                    <div class="ser-text">
                        <h4>Nam libero tempore cum soluta</h4>
                        <p>At vero eos et accusamus dignissimos ducimus qui blanditiis</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ser-grid">
                    <span class="glyphicon glyphicon-glass ser-icon" aria-hidden="true"> </span>
                    <div class="ser-text">
                        <h4>These cases are perfectly simple.</h4>
                        <p>At vero eos et accusamus dignissimos ducimus qui blanditiis</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ser-grid">
                    <span class="glyphicon glyphicon-cutlery ser-icon" aria-hidden="true"> </span>
                    <div class="ser-text">
                        <h4>Et harum quidem facilis distinct</h4>
                        <p>At vero eos et accusamus dignissimos ducimus qui blanditiis</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--services end here-->
<!--dreams start here-->
<div class="dreams">
    <div class="container">
        <div class="dream-main">
            <div class="dream-top">
                <h3>Events</h3>
                <p>Nor again is there anyone who loves or pursues or desires</p>
            </div>
            <div class="dream-bottom">
                <div class="col-md-3 dream-grid">
                    <h3>9-08-2015</h3>
                    <h4>Nam libero tempore eligendi</h4>
                    <p>But explain idea of pleasure give you a complete</p>
                </div>
                <div class="col-md-3 dream-grid">
                    <h3>18-09-2015</h3>
                    <h4>Lorem Ipsum is simply text</h4>
                    <p>But explain idea of pleasure give you a complete</p>
                </div>
                <div class="col-md-3 dream-grid">
                    <h3>07-10-2015</h3>
                    <h4>There are variations passages</h4>
                    <p>But explain idea of pleasure give you a complete</p>
                </div>
                <div class="col-md-3 dream-grid">
                    <h3>12-11-2015</h3>
                    <h4>Nam libero tempore eligendi</h4>
                    <p>But explain idea of pleasure give you a complete</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--dreams end here-->
<!--testimonal strat here-->
<div class="testimo">
    <div class="container">
        <div class="testimo-main">
            <h3>Lorem ipsum dolor consectetur adipiscing </h3>
            <p>Duis dolor in reprehenderit in voluptate cillum dolore fugiat nulla pariatur.</p>
            <a href="single.html">Read More</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--testimonal end here-->
<!--test grid-img start here-->
<div class="test-grid-img">
    <div class="container">
        <div class="test-grid-img-main">
            <div class="col-md-4 test-grid">
                <a href="#"><img src="/public/images/t1.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-4 test-grid">
                <a href="#"><img src="/public/images/t2.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-4 test-grid">
                <a href="#"><img src="/public/images/t3.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--test grid img end here-->
<!--gallery start here-->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="gallery-top">
            <h3>Gallery</h3>
            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                but because occasionally circumstances.</p>
        </div>
        <div class="gallery-bottom">
            <div class="col-md-4 gallery-grid">
                <div class="project-eff">
                    <div id="nivo-lightbox-demo"><p><a href="/public/images/g4.jpg" data-lightbox-gallery="gallery1"
                                                       id="nivo-lightbox-demo"> <span class="rollover1"> </span></a></p>
                    </div>
                    <img class="img-responsive" src="/public/images/g4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="project-eff">
                    <div id="nivo-lightbox-demo"><p><a href="/public/images/g3.jpg" data-lightbox-gallery="gallery1"
                                                       id="nivo-lightbox-demo"> <span class="rollover1"> </span></a></p>
                    </div>
                    <img class="img-responsive" src="/public/images/g3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="project-eff">
                    <div id="nivo-lightbox-demo"><p><a href="/public/images/g2.jpg" data-lightbox-gallery="gallery1"
                                                       id="nivo-lightbox-demo"> <span class="rollover1"> </span></a></p>
                    </div>
                    <img class="img-responsive" src="/public/images/g2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="project-eff">
                    <div id="nivo-lightbox-demo"><p><a href="/public/images/g5.jpg" data-lightbox-gallery="gallery1"
                                                       id="nivo-lightbox-demo"> <span class="rollover1"> </span></a></p>
                    </div>
                    <img class="img-responsive" src="/public/images/g5.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="project-eff">
                    <div id="nivo-lightbox-demo"><p><a href="/public/images/g6.jpg" data-lightbox-gallery="gallery1"
                                                       id="nivo-lightbox-demo"> <span class="rollover1"> </span></a></p>
                    </div>
                    <img class="img-responsive" src="/public/images/g6.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="project-eff">
                    <div id="nivo-lightbox-demo"><p><a href="/public/images/g1.jpg" data-lightbox-gallery="gallery1"
                                                       id="nivo-lightbox-demo"> <span class="rollover1"> </span></a></p>
                    </div>
                    <img class="img-responsive" src="/public/images/g1.jpg" alt="">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/public/css/magnific-popup.css">
<script type="text/javascript" src="/public/js/nivo-lightbox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#nivo-lightbox-demo a').nivoLightbox({effect: 'fade'});
    });
</script>


<!--gallery end here-->
<!--contaact start here-->
<div class="contact" id="contact">
    <div class="container">
        <div class="contact-main">
            <div class="contact-top">
                <h3>Contact</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam architecto beatae.</p>
            </div>
            <div class="contact-bottom">
                <div class="col-md-6 contact-left">
                    <input type="text" placeholder="Name" required="">
                    <input type="text" placeholder="Email" required="">
                    <input type="text" placeholder="Phone" required="">
                </div>
                <div class="col-md-6 contact-right">
                    <textarea placeholder="Message" required=""></textarea>
                    <input type="submit" value="Submit">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--contact end here-->

<!--footer start here-->
<?php include_once "index_foot.php"; ?>
<!--footer end here-->

<!--copyright start here-->
<div class="copyright">
    <div class="container">
        <div class="copy-main">
            <p>Asia/Shanghai &copy; 2016.Private Web From Mousse(qinchao).</a>
            </p>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

    </div>
</div>

<!--copyright end here-->