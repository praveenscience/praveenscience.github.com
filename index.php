<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="" />
        <meta name="title" content="" />
        <meta name="description" content="" />
        <title>My GitHub Apps!</title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- ////////////////////////////////// -->
        <!-- //      Start Stylesheets       // -->
        <!-- ////////////////////////////////// -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!-- ////////////////////////////////// -->
        <!-- //      Javascript Files        // -->
        <!-- ////////////////////////////////// -->
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/Vegur_400-Vegur_700.font.js"></script>
        <script type="text/javascript">
            Cufon.replace('h1') ('h1 a') ('h2') ('h3') ('h4') ('h5') ('h6');
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
            });
        </script>
        <script type="text/javascript" src="js/contact.js"></script>
        <!--[if IE 6]>
            <script src="js/DD_belatedPNG.js"></script>
            <script>
            DD_belatedPNG.fix('img, #logo, .img-frame, ul.main_box, ul.main_box .more');
            </script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <div id="container-top">
                <div class="centercolumn">
                    <div id="top">
                        <div id="logo">
                            <a href="/"><img src="images/logo.png" alt="" /></a>
                        </div>
                        <div id="header">
                            <div class="pad_header">
                                <h1>My <strong>key</strong> projects...</h1>
                                <ul id="container-box">
                                    <li>
                                        <ul class="main_box">
                                            <li><img src="images/icon1.png" alt="" /></li>
                                            <li><h5>PasteBin</h5></li>
                                            <li>
                                                <p>Paste all you want. Have a collection of pastes.</p>
                                                <a href="#"><span class="more">Open Repo</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="main_box">
                                            <li><img src="images/icon2.png" alt="" /></li>
                                            <li><h5>Web Diff</h5></li>
                                            <li>
                                                <p>Difference between files online. Just on Web Browser!</p>
                                                <a href="http://tbg.ptrl/"><span class="more">Open Repo</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="main_box">
                                            <li><img src="images/icon3.png" alt="" /></li>
                                            <li><h5>Virtual Hosts</h5></li>
                                            <li>
                                                <p>Create Virtual Hosts for WAMP Server.</p>
                                                <a href="http://clients.ptrl/"><span class="more">Open Repo</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="main_box">
                                            <li><img src="images/icon4.png" alt="" /></li>
                                            <li><h5>CSS Frame</h5></li>
                                            <li>
                                                <p>Generate CSS frame for your HTML.</p>
                                                <a href="http://praveentech.ptrl/"><span class="more">Open Repo</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
<?php if (0) { ?>
                    <div class="other-apps">
                        <h3>Other Applications</h3>
                        <ul>
<?php
foreach (array("calendar", "contacts", "cssgen", "diff", "pastebin", "quizengine", "softmart", "zencoding", "blog") as $folder/* => $name*/)
    echo '                            <li><a href="app/', $folder, '/"><img src="app/', $folder, '/thumb.png" alt="', /*$name,*/'" /></a></li>';
?>
                        </ul>
                    </div>
                </div>
            </div>
<?php } ?>
            <div id="container-bottom">
                <div class="centercolumn">
                    <div id="main-footer">
                        <div class="pad_footer">
                            <div id="foot-ptrl">Copyright &copy; 2012 <a href="/">Praveen Kumar</a>.</div>
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </body>
</html>
