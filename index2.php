<?php

    require_once('simplepie/autoloader.php');
    $feed = new SimplePie();
     
    // Set which feed to process.
     
    // Run SimplePie.
    $feed->init();
     
     if (isset($_GET['js']))
    {
        SimplePie_Misc::output_javascript();
        die();
    }

    // Use the URL that was passed to the page in SimplePie
    $feed->set_feed_url('http://motivforce.com/blog/?category_name=News&feed=rss2');

    // Initialize the whole SimplePie object.  Read the feed, process it, parse it, cache it, and
    // all that other good stuff.  The feed's information will not be available to SimplePie before
    // this is called.
    $success = $feed->init();

    // We'll make sure that the right content type and character encoding gets set automatically.
    // This function will grab the proper character encoding, as well as set the content type to text/html.
    $feed->handle_content_type();

    // When we end our PHP block, we want to make sure our DOCTYPE is on the top line to make
    // sure that the browser snaps into Standards Mode.

    function truncate($string,$length=35,$append="&hellip;") {
      $string = trim($string);

      if(strlen($string) > $length) {
        $string = wordwrap($string, $length);
        $string = explode("\n", $string, 2);
        $string = $string[0] . $append;
      }

      return $string;
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Motivforce Marketing and Incentives :: Discover the MMI effect</title>
        <meta name="description" content="Motivforce Marketing & Incentives (MMI) · B2B loyalty & performance improvement programmes · bespoke incentives · event management · corporate hospitality">
        <meta name="viewport" content="width=device-width">
<!--        <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;"/> -->
        <link rel="stylesheet" href="./assets/vendors/normalize/normalize.css">
        <link rel="stylesheet" href="./assets/css/main.css?20130408">
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
	    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="//fast.fonts.com/cssapi/6ddf9258-8826-4e4e-aa04-8e1fb88b29fb.css">
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "7e577b5b-9c79-43fa-91c5-dabbd16180fd", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-39961277-1']);
            _gaq.push(['_trackPageview']);
            
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <!-- <script src="//load.sumome.com/" data-sumo-site-id="f7d51b4e16b52c8012af4fe7a3a4ced9825914134059607a35113d5de462b191" async>
        </script> -->
    </head>
    <body>
        <div id="skrollr-body">
        
            <div id="skrollr-inner"><div id="skrollr-content">
        
        
            <div id="header" data-anchor-target="#homepage" data-top="top: 0px;" data-center-bottom="top: -60px;">
                <div class="content">
                    <a class="logo" href="#homepage"><img class="logo" data-anchor-target="#homepage" data-top="margin-top: 28px; height: 60px;" data-center-bottom="margin-top: 65px; height: 30px;" src="./assets/images/mmi-logo.png" alt="Motivforce Marketing and Incentives"></a>
<div class="navbar-default" role="navigation">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div><!--/.container-fluid -->
      </div>
                    <ul data-anchor-target="#homepage" data-top="margin-top: 50px;" data-center-bottom="margin-top: 70px;" id="navbar1">
                        <li><a href="#why-mmi" data-anchor-target="#why-mmi" data-2-top="color: #888;" data-1-top="color: #e50278;" data-1-top-bottom="color: #e50278;" data-top-bottom="color: #888;">Why MMI</a>
                        <li class="separator">/</li><li><a href="#what-we-do" data-anchor-target="#what-we-do" data-2-top="color: #888;" data-1-top="color: #e50278;" data-1-top-bottom="color: #e50278;" data-top-bottom="color: #888;">What We Do</a>
                        <li class="separator">/</li><li><a href="#our-team" data-anchor-target="#our-team" data-2-top="color: #888;" data-1-top="color: #e50278;" data-1-top-bottom="color: #e50278;" data-top-bottom="color: #888;">Our Team</a>
                        <li class="separator">/</li><li><a href="#hmi" data-anchor-target="#hmi" data-2-top="color: #888;" data-1-top="color: #e50278;" data-1-top-bottom="color: #e50278;" data-top-bottom="color: #888;">HMI</a>
                        <li class="separator">/</li><li><a href="#blog" data-anchor-target="#blog" data-2-top="color: #888;" data-1-top="color: #e50278;" data-1-top-bottom="color: #e50278;" data-top-bottom="color: #888;">Blog</a>
                        <li class="separator">/</li><li><a href="#contact-us" data-anchor-target="#contact-us" data-2-top="color: #888;" data-1-top="color: #e50278;" data-1-top-bottom="color: #e50278;" data-top-bottom="color: #888;">Contact Us</a>
                    </ul>
                </div>
                <img class="gradient" src="./assets/images/header-gradient.jpg">
            </div>






            <div id="homepage" class="fullscreen-frame"><div class="inner">
                <img class="explosion" src="./assets/images/home/explosion.jpg" data-anchor-target="#homepage" data-center="top: 0%; height: 90%; left: 55%;" data--2000-center="top: -300%; height: 1000%; left: -150%;">
                <div class="content" data-anchor-target="#homepage" data-bottom="top: 0px;" data--2000-bottom="top: -1000px;">
                    <div class="copy vcenter">
                        <p>
                            
                            <?php
                                // Check to see if there are more than zero errors (i.e. if there are any errors at all)
                                if ($feed->error())
                                {
                                    // If so, start a <div> element with a classname so we can style it.
                                    echo '<div class="sp_errors">' . "\r\n";

                                        // ... and display it.
                                        echo '<p>' . htmlspecialchars($feed->error()) . "</p>\r\n";

                                    // Close the <div> element we opened.
                                    echo '</div>' . "\r\n";
                                }
                            ?>

                        </p>
                        <h1>Motivforce Marketing and Incentives (MMI) – and our sister brand HMI - means more than motivation.</h1>
                        <p>We are the dynamic global force behind the world’s cutting-edge B2B loyalty and performance improvement programmes, bespoke incentives, event management and corporate hospitality.</p>
                        <p>Our progressive and ground-breaking approach will take your partner, employee and customer loyalty and incentive marketing to a whole new level, helping your business succeed beyond your expectations.</p> 

                        <p><a href="#why-mmi">Discover the MMI effect</a>&nbsp; &gt;</p>
                    </div>
                </div>

                <a class="next-frame" href="#why-mmi"><img src="./assets/images/next-frame.png"></a>
            </div></div>





            <div id="why-mmi" class="fullscreen-frame"><div class="inner">
                <img class="bg" src="./assets/images/why-mmi/background.png" data-anchor-target="#why-mmi" data-bottom="bottom: 0px" data-2000-bottom="bottom: 1000px;" data--2000-bottom="bottom: -1000px;">
                
                <div class="content" data-anchor-target="#why-mmi" data-bottom="top: 0px; bottom: 0px;" data-top="top: 0px; bottom: 0px;" data--2000-bottom="top: -1000px; bottom: 1000px;" data-2000-top="top: 1000px; bottom: -1000px;">
                    <h1>MMI is more than Motivation... we are a dynamic team of highly experienced loyalty marketing, incentive travel and event production professionals who have been helping businesses achieve impressive results for the last 20 years</h1>

                    <h2>What causes the Motivforce effect?  MMI is the only global company of its kind that blends the following ingredients:</h2> 

                    <div class="left">
                        <ol>
                            <li><h2>Pioneering research</h2><p>MMI is ahead of the curve when it comes to designing  effective loyalty and reward programmes - we have access to leading University academics worldwide who are continuously researching consumer behaviour and communication preferences in order to develop the next generation of loyalty programmes – that means the programme we create for you will be innovative and on-trend, immediately connecting with your customers and employees</p></li> 
                            <li><h2>Contemporary strategic design and creative services</h2><p>our team leads the field in the design and operation of loyalty programmes – we work directly with clients throughout the entire design process in order to create a programme that meets your business objectives, then we bring it to life</p></li>
                        </ol>
                    </div>
                    <div class="right">
                        <ol start="3">
                            <li><h2>Leading edge technology and analytics</h2><p>our programmes use multiple media channels, mobile communications and business friendly applications to engage staff and customer loyalty. We also apply the latest skills, technologies, and practices to analyse performance and drive business decisions</p></li>
                            <li><h2>Stylish, ‘white-glove’ incentive travel and event management</h2><p>our philosophy is to re-invent the meaning of the ‘bespoke’ event – our clients describe us as passionate, creative and dedicated, whether we are managing a large scale meeting, or securing a single ticket</p></li>
                            <li><h2>Unrivalled attention to detail and flawless corporate hospitality with the ‘wow‘ factor</h2><p>we pride ourselves on delivering exceptional personal service backed by extensive product knowledge and unrivalled contacts with suppliers locally and globally to make your event or incentive travel experience a one-off.</p></li>
                        </ol>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <a class="next-frame" href="#what-we-do"><img src="./assets/images/next-frame.png"></a>
            </div></div>




            <div id="what-we-do" class="fullscreen-frame"><div class="inner">
                <img class="bg" src="./assets/images/what-we-do/background.jpg" data-anchor-target="#what-we-do" data-bottom="bottom: 0px" data-2000-bottom="bottom: 1000px;" data--2000-bottom="bottom: -1000px;">

                <div class="content"  data-anchor-target="#what-we-do" data-bottom="top: 0px; bottom: 0px;" data-top="top: 0px; bottom: 0px;" data--2000-bottom="top: -1000px; bottom: 1000px;" data-2000-top="top: 1000px; bottom: -1000px;">
                    <h1>Do you need to find new ways of engaging, motivating and rewarding your sales force, employees, customers and channel partners&nbsp;– something original, ground-breaking, that hasn’t been done before?</h1>
                    <div class="left">
                        <p>We are renowned for our creativity and forward-thinking in the development of customised B2B loyalty initiatives, employee engagement programmes, incentive experiences and corporate events.</p>
                        <p>Our knowledge and expertise is unrivalled and we consistently help our clients to improve business performance and exceed their goals.</p>
                        <p>MMI offers clients a range of strategic marketing services with tactical capabilities – we can deliver the whole programme for you, or just a single aspect, depending on your needs, objectives and budget</p>
                    </div>
                    <div class="right concertina">
                        <div class="concertina-element concertina-open">
                            <div class="concertina-header"><h2>Programmes</h2></div>
                            <div class="concertina-content">
                                <p><strong>Channel Incentives, Loyalty Programmes, Employee Incentives, Sales Promos</strong></p>
                                <p>MMI’s offering ranges from full service incentive and loyalty solutions to short-term tactical sales promotions. We are renowned for creating ground-breaking programmes which are ‘ahead of the curve’. Our dedicated team of practitioners can manage your entire reward and recognition programme, or specific components, including strategic input into the design of the incentive; customised and secure website development allowing participants to engage with your programme online; SMS and MMS communication; individual goal setter and tracker, reward fulfilment, and complete data upload management</p>
                            </div>
                        </div>
                        
                        <div class="concertina-element">
                            <div class="concertina-header"><h2>Insight</h2></div>
                            <div class="concertina-content">
                                <p><strong>Loyalty, Market &amp; Consumer Behaviour Research and Analytics</strong></p>
                                <p>We believe that research is the lifeblood of a successful reward and recognition programme in order to reveal changing consumer patterns and communication preferences. MMI is the only performance improvement company with direct links to the two top universities globally which are actively engaged in the study of effective motivational workplace incentives and loyalty engineering. Our clients are in the unique position of benefiting from this pioneering research as it enables us to create cutting-edge motivational programmes and channel incentives which will grab the attention of your employees and your sales reps, leading to better business performance. We also offer clients the latest skills, technologies and applications to explore past business performance in order to gain insight and drive business planning. Business analytics predicts future behaviour trends, answering questions such as: Why is this happening? What if these trends continue? What will happen next?</p>
                            </div>
                        </div>
                        
                        <div class="concertina-element">
                            <div class="concertina-header"><h2>Events</h2></div>
                            <div class="concertina-content">
                                <p><strong>Corporate Hospitality, Events, Concierge Services</strong></p>
                                <p>At MMI, we pride ourselves on attention to detail in order to create flawless events, incentives, and corporate hospitality experiences. We have an enviable network of contacts within the travel and hospitality industry meaning we have the ability to execute events that are distinctive and out of the ordinary all within budget. We have a reputation for creating the ‘wow’ factor, whether it’s an intimate meeting, client dinner, large-scale conference, product launch, imaginative overseas incentive travel, or securing impossible-to-find tickets to ‘sold out’ concerts.</p>
                            </div>
                        </div>
                        
                        <div class="concertina-element">
                            <div class="concertina-header"><h2>Creative</h2></div>
                            <div class="concertina-content">
                                <p><strong>Business Plans and Communications, Creative Services and Graphic Design</strong></p>
                                <p>Story board concept development, planning and screen writing; website design and hosting; film and video production; corporate identity, event collateral, database design and management – these are just a handful of the production services we are capable of providing in-house in order to meet our clients’ total incentive and performance improvement needs, or marketing and event management requirements. The team at MMI work directly with clients throughout the entire design process to bring their vision to life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>

                <a class="next-frame" href="#our-team"><img src="./assets/images/next-frame.png"></a>
            </div></div>





            <div id="our-team" class="fullscreen-frame"><div class="inner">
                <img class="bg" src="./assets/images/our-team/background.png" data-anchor-target="#our-team" data-bottom="bottom: 0px" data-2000-bottom="bottom: 1000px;" data--2000-bottom="bottom: -1000px;">

                <div class="content" data-anchor-target="#our-team" data-bottom="top: 0px; bottom: 0px;" data-top="top: 0px; bottom: 0px;" data--2000-bottom="top: -1000px; bottom: 1000px;" data-2000-top="top: 1000px; bottom: -1000px;">
                    <h1>MMI brings together an award-winning team of highly experienced and creative loyalty marketing, event production, research, and incentive travel specialists around the world. Our key individuals include:</h1>

                    <div id="ca-container" class="ca-container">
                    
                        <div class="ca-wrapper">
                        
                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/20.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>David Cox</h2>
                                    <h3>Chief Executive Officer</h3>
                                    <!--<p>David has unrivalled knowledge and experience of developing loyalty marketing and performance improvement solutions gained during an impressive 23 year career in the industry. Prior to joining MMI, he was Global General Manager for the loyalty marketing division of Flight Centre Limited, where he led the development...</p>-->
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...of specialised marketing solutions for clients across a wide range of industries including pharmaceutical, banking, retailing and IT. Prior to that David was Managing Director of Inmark, a company he established in 1998 and grew into one of Australia’s largest group travel, and incentive marketing organisations. He is one of the few Professors of loyalty and relationship marketing worldwide, mentoring post-graduate students at the University of Maastricht in the Netherlands and the University of NSW in Australia. David has been recognised for his contribution to the industry on numerous occasions including awards for ‘Best Application of a Channel Incentive Programme’ from the Australasian Incentive Association; the IMA’s ‘Circle of Excellence’ Award, and the ProAward for ‘Best Loyalty Programme’. David holds a PhD in Loyalty Marketing (UTS), an MBA (UTS), an M.Com (UNSW and a BA (SYD).</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/3.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>Nick Merry</h2>
                                    <h3>Managing Director APAC</h3>
                                    <!--<p>Nick has specialised in rewards and recognition events in the UK and Australia for over 16 years, particularly in delivering exceptional incentive travel campaigns to destinations worldwide. He also has valuable experience in the niche publishing industry...</p>-->
                                        <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...developing products primarily focused on channel and B2B publications. As a result Nick brings to MMI an eye for detail and a strong understanding of marketing concepts and offers that appeal to resellers, driving them to go that extra mile. Nick has exceptional customer service and client account management skills that have been honed over many years of managing all levels within blue chip clients across many industries. These skill-sets give him a unique point of difference and allow him to work as a strategic partner to MMI clients. From conceptualising, marketing and administering loyalty/rewards programmes, to managing and executing recognition events, Nick is well placed to ensure complete fulfilment of B2B loyalty and client growth tactics.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/7.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>Ko de Ruyter</h2>
                                    <h3>Global Strategic Director</h3>
                                    <!--<p>Ko is Professor of Marketing at Maastricht University, the Netherlands. His research focuses on marketing strategy, customer relationship management, social media and customer loyalty. He has published widely in flagship academic business journals, such as the Journal of Marketing and Management Science...</p>-->
                                        <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...For his leadership in the academic research community, he was recently awarded a life-time achievement by the American Marketing Association. This honour has by no means made him want to rest on his laurels. With the best yet to come, and a ‘mid-career mission’ combined with maximal insights and experience, Ko is passionate about the practical relevance of his research and its value for businesses and their customers. Now, perhaps more than ever, in turbulent economic times and with market places rapidly changing into social spaces, there is a need for guidance in strategy development that builds on fundamental as well as versatile thinking. Ko de Ruyter is able to offer such thinking and push its translation into actionable advice for businesses. He has proven experience in working closely with decision-makers in the private and public sectors, consulting on the challenges and opportunities that they face. This has made him an internationally renowned speaker at business events and conferences, as he is able to seamlessly explain the promise that state-of-the-art innovative concepts hold for business performance and transformation.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/22.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>Dr Debbie Keeling</h2>
                                    <h3>Global Engagement Manager</h3>
                                    <!--<p>Debbie is Assistant Professor of Marketing at Loughborough University, United Kingdom. Debbie’s expertise lies in customer motivation and behavioral change and how this is transformed by social media. In other words, she is interested in learning what makes customers tick, how social media can amplify this...</p>-->
                                        <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...and how one can analytically demonstrate that this is a powerful beat that drives loyalty programmes. Her work has been published in leading academic outlets, but what makes Debbie tick is to translate the findings of her research into actionable and tailor-made advice for companies. Over the course of her career, Debbie has designed and led tailor-made projects for many renowned global companies. Currently, she directs research for the Retail Research Forum, a UK-based consortium of international retailers and Manufacturers aimed at shaping the future of customer-driven retailing. In addition, she has developed, organised and moderated seminars and workshops that draw together experts from business and academia. Debbie has first-class experience of consultation with businesses on the ways to address the current challenges involved in staying with the contemporary beat of securing customer loyalty in a market-place that is increasingly dominated by the social media boom.</p>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="ca-item">
                                <div class="ca-item-main">
                                    <h2>Jan Pelser</h2>
                                    <h3>Head of Research and Analytics</h3>
                                    <p>Jan gained his PhD in Loyalty and Incentive Marketing from Department of Marketing and Supply Chain Management at Maastricht University in the Netherlands. His specialist area lies in the research of marketing strategy, employee performance, customer loyalty...</p>
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...and customer relationship management to improve business results.</p>
                                        <p>His background includes experience in strategic marketing at ThyssenKrupp Stainless International as well as consulting in the high-tech, food and automobile industries. In addition to his PhD, Jan also holds an MSc in Strategic Marketing and a BSc in International Business from Maastricht University.</p>
                                    </div>
                                </div>
                            </div>-->

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/26.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>Tony Zhang</h2>
                                    <h3>Managing Director Greater China</h3>
                                    <!--<p>Tony Zhang is a bilingual loyalty marketing professional with over ten years of international experience in multiple industry sectors. In the last six years, his background at MMI includes market research, recognition event and sales validation...</p>-->
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...that enable clients to encourage business partners to align with their product mix strategy in each market. Sales validation and sales claim auditing is a unique part of Tony's focus. By validating eligibility of customer sales information, his team forms an audit process that gives MMI clients the confidence to reward the right customers for selling specific client products to targeted market sectors.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <h2>Nelson Henriquez</h2>
                                    <h3>Global Operations Director</h3>
                                    <p>Nelson has over 25 years’ experience in accounting, sales & marketing, and consulting. His career includes senior director positions at United Fidelity Trust, Aruba Convention & Visitors Bureau, ALM Airlines and CiLoyalty where he managed loyalty programmes for operations in Latin America...</p>
                                        <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...Nelson is a natural linguist who speaks Dutch, Spanish, English and Portuguese. At MMI he oversees the customer service desk, Visa and MasterCard client reward programmes, and day-to-day operations in terms of implementation and distribution of rewards merchandise. Nelson holds a BA in International Business from Bowling Green State University in Ohio</p>
                                    </div>
                                </div>
                            </div>

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/18.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>Nikki Alexander</h2>
                                    <h3>Event Director &amp; Client Services</h3>
                                    <!--<p>Nikki brings extensive experience in corporate hospitality and event management to MMI. Her early career included various hotel management roles in banqueting, and sales & marketing in Australia before moving to the UK.  For the past 15 years she held the role of Corporate Event Manager for a UK Top 5 Business Agency...</p>-->
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...where she was responsible for managing anything from large scale conferences and exhibitions to key client dinners and personalised corporate hospitality not only throughout the UK but in locations around the world.  Nikki’s “little black book” of contacts with travel and hospitality suppliers, airlines, hotels, venues, sporting events and concert organisers are arguably the best in the business.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <h2>Brian Reddick</h2>
                                    <h3>Director of IT</h3>
                                    <p>Brian has over 20 years experience in the IT industry working with both large financial services organisations and IT companies specialising in systems integration. During this time he has been heavily involved in integrating not only the technical aspects of different teams but also the interpersonal and administrative aspects that are critical to delivering a stable and effective system...</p>
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...His experience has covered financial transactions, channel marketing, lead management and quoting through to internal systems for monitoring and problem resolution. Since relocating to London two years ago he has also worked with European based businesses in developing websites and integrating Internet technology within their current infrastructure and processes.</p>

<p>Brian brings a pragmatic and project manager approach to balancing IT delivery needs with business requirements and understanding that the end user experience is paramount. </p>

                                    </div>
                                </div>
                            </div>

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <p class="portrait">
                                    <img src="assets/images/our-team/2.png" width="165" height="191" alt="portrait"> </p>
                                    <h2>John Kovacevic</h2>
                                    <h3>Sales Manager APAC</h3>
                                    <!--<p>John is a B2B sales and account management expert with over 15 years’ experience covering digital, social, print media and event management. Having spent time in Asia, John is a great communicator across all cultures and understands how to piece together...</p>-->
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...sustainable, long-term programmes, with measurable results across multiple-countries. With his artistic flair, positive persona and passionate outlook he’s able to think outside the box and bring ideas to life. John’s philosophy of a client’s needs as a priority allow him to grow their business, whilst developing long-term strategies.</p>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <h2>James Brown</h2>
                                    <h3>Creative Director</h3>
                                    <p>James is a multidisciplinary designer with global design experience working in the UK and Australia for an international marketing agency. He provided creative B2B marketing campaigns for the world’s leading technology organisations including Oracle, RSA, Software AG, IBM...</p>
                                        <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...and consultancies Gartner, Cognizant to name a few. His sector experience also includes IT, events and hospitality, legal, beverages and Motorsport - in 2006-2007 he provided creative digital design services for the British Formula One champion helping initiate plans for a lucrative fan club site.</p> 
                                        <p>James has experience developing creative themes for lead generation campaigns for products and events as well as developing the associated print collateral, websites, emails, display signage - ensuring assets are unified in a consistent and cohesive look and feel.</p>
                                    </div>
                                </div>
                            </div>

<!-- 
                            <div class="ca-item">
                                <div class="ca-item-main">
                                    <h2></h2>
                                    <h3></h3>
                                    <p>...</p>
                                    <a href="#" class="ca-more">read more...</a>
                                </div>
                                <div class="ca-content-wrapper">
                                    <div class="ca-content">
                                        <a href="#" class="ca-close">close</a>
                                        <p>...</p>
                                    </div>
                                </div>
                            </div>
-->
                        </div>
                        
                    </div>
                </div>

                <a class="next-frame" href="#hmi"><img src="./assets/images/next-frame.png"></a>
            </div></div>




            <div id="hmi" class="fullscreen-frame"><div class="inner">
                <img class="bg" src="./assets/images/hmi/background.png" data-anchor-target="#hmi" data-bottom="bottom: 0px" data-2000-bottom="bottom: 1000px;" data--2000-bottom="bottom: -1000px;">

                <div class="content"  data-anchor-target="#hmi" data-bottom="top: 0px; bottom: 0px;" data-top="top: 0px; bottom: 0px;" data--2000-bottom="top: -1000px; bottom: 1000px;" data-2000-top="top: 1000px; bottom: -1000px;">
                    <h1>HMI – our North America and continental Europe branded operation - has an impressive history of helping businesses grow sales</h1>
                    <img src="./assets/images/hmi/hmi-logo.png" alt="HMI"/>
                    <div class="left">
                        <p>HMI&rsquo;s innovative strategies and seamless implementation have created successful programmes in over 20 different industry sectors, from manufacturers and distributors to service companies.</p>
                        <p>At HMI, it&rsquo;s our comprehensive approach to incentive initiatives that sets us apart. Our ability to ask the right questions; knowing what motivates whom and why; personal attention and respect for the bottom line, combine to increase performance - and profits for you.</p>
                        <p>From launch to programme conclusion, our unified service offering provides consistency, stability and peace of mind.</p>
                      <p>HMI and MMI are your totally global loyalty and incentive solution provider and we are proud to operate and execute a number of award winning global programmes.</p>
                        <p>To visit our North America website go to...</p>
                      <p><a href="http://www.hmiaward.com/" target="_blank">www.hmiaward.com</a>&nbsp; &gt;</p>
                    </div>
                </div>
                <div class="clear"></div>

                <a class="next-frame" href="#blog"><img src="./assets/images/next-frame.png"></a>
            </div></div>


            <div id="blog" class="fullscreen-frame"><div class="inner">
               <!-- <img class="bg skrollable   rendered " src="./assets/images/our-team/background.png" data-anchor-target="#blog" data-bottom="bottom: 0px" data-2000-bottom="bottom: 1000px;" data--2000-bottom="bottom: -1000px;" style="bottom: 155px;">-->

                <div class="content skrollable rendered " data-anchor-target="#blog" data-bottom="top: 0px; bottom: 0px;" data-top="top: 0px; bottom: 0px;" data--2000-bottom="top: -1000px; bottom: 1000px;" data-2000-top="top: 1000px; bottom: -1000px;" style="top: 14.5px; bottom: -14.5px;" >
                    <h1>News Blog</h1>
<div class="track example-3">
    <div class="inner">
          <?php if ($success): ?>

                <?php 

                    $i = 1; 
                    $blog_item_position = -280;

                ?>
                <?php foreach($feed->get_items() as $item): ?>
                    <?php 
                        // number of blog posts to display
                        if ($i++ == 20) break;
                        $blog_item_position = $blog_item_position + 280;
                        $class = 'xitem';
                        if($i % 2 == 0) 
{                            //echo '<div class="item">';
                        }
                            
                        
                        if (isset($item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data']))  {
                            $class = 'xitem '. $item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data'];
                        }
                        //var_dump($item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data']);
                    ?>
                    


                    <div class="<?php echo $class; ?>" id='<?php echo $i ?>'>
                        <h2><?php echo truncate($item->get_title()); ?></h2>
                        <h4><?php echo $item->get_date('jS F Y'); 
                        ?>
                        <!--<span class="separator">|</span>-->
                        <?php /*?><?php
                        echo ucwords($item->get_authors()[0]->name); ?><?php */?></h4>

                        <p><?php //echo preg_replace("/&#?[a-z0-9]+;/i"," ",strip_tags(substr($item->get_content(),0,550))); ?></p>
                        <div class="img_wrapper <?php echo $item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data']; ?>">
                            <?php 
                            if(preg_match('/(<img[^>]+>)/i', $item->get_content(), $matches)) {
                                echo strstr(strip_tags(substr($item->get_content(),0,250), "<img>"), '">', true).'">';
                            }
                            ?>
                        </div>

                        <?php 
                        // display tags
                            foreach($item->get_categories() as $tags) {
                                //echo '<p>'.$tags->term.'</p>';
                            }
                        ?>
                        <!--<a class="xmore" id='<?php echo $i ?>'>Read more...</a>-->
                    </div>
                

                    <?php if($i % 2 != 0) {
                            //$class .= ' item ';
                        //echo '</div>';
                        }
                    ?>
                    
                <?php endforeach; ?>

            <?php endif; ?>
    </div>
  </div>

                </div>

                <!-- <a class="next-frame" href="#contact-us"><img src="./assets/images/next-frame.png"></a>-->
            </div>
  
        </div>



            <div id="contact-us" class="fullscreen-frame"><div class="inner">
                <div class="content">
                    <h1>Talk to us and discover the MMI effect for yourself</h1>
                    <p>MMI has wholly owned offices around the world in London, Cyprus, New Delhi, Singapore, Hong Kong, Shanghai, Sydney, and Fort Lauderdale. Our sister brand HMI operates in the USA, Canada and continental Europe.</p>
<!--
-->
                    
                    <div class="mail-form">
                        <!-- <h2>Leave a message</h2> -->
                        <p>If you would like to find out more about how MMI can help you find new ways of motivating and rewarding your staff please contact us.</p>
                        <form>
                            <div class="control-group field-text">
                                <label for="name">Choose Region</label>
                                <select id="form-region" name="region" type="text" class="required">
                                    <option value="">Select Region</option>
                                    <option value="EMEA">United Kingdom and Europe</option>
                                    <option value="APAC">Asia Pacific</option>
                                    <option value="LATINAMERICA">Latin America</option>
                                    <option value="NORTHAMERICA">North America</option>
                                    <option value="CHINA">China</option>
                                </select>
                            </div>
                            <div class="clear"></div>


                            <div class="control-group field-text">
                                <label for="name">Name *</label>
                                <input name="name" type="text" class="required">
                            </div>

                            <div class="control-group field-text even">
                                <label for="phone">Phone</label>
                                <input name="phone" type="text">
                            </div>

                            <div class="control-group field-text">
                                <label for="company">Company</label>
                                <input name="company" type="text">
                            </div>

                            <div class="control-group field-text even">
                                <label for="email">Email *</label>
                                <input name="email" type="text" class="required email">
                            </div>

                            <div class="control-group field-textarea">
                                <label for="message">Message</label>
                                <textarea name="message" rows="5" class="required"></textarea>
                            </div>

                            <div class="control-group field-text field-captcha even">
                                <div class="inner-group">
                                    <img id="siimage" src="./contact/captcha-image/?<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image">
                                    <!-- <object type="application/x-shockwave-flash" data="./include/lib/securimage/securimage_play.swf?audio_file=./include/lib/securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" height="32" width="32">
                                        <param name="movie" value="./include/lib/securimage/securimage_play.swf?audio_file=./include/lib/securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000">
                                    </object> -->
                                    <a id="reload-captcha" tabindex="-1" href="#" title="Refresh Image"><img src="./include/lib/securimage/images/refresh.png" alt="Reload Image"></a>
                                </div>

                                <label for="ct_captcha">Maths Answer *</label><br/>
                                <input type="text" name="ct_captcha" class="short required" />

                            </div>
                            <div class="clear"></div>
                            <button type="submit">SEND</button>
                        </form>
                    </div>

                    <div id="map">
                        <img src="./assets/images/contact-us/map.png">
                        <div id="map-locations">
                            <div class="address" data-x="427" data-y="97"><div>
                              <p><strong>MMI London</strong></p>
                                16 Hanover Square<br />Mayfair<br />
London W1S 1HT<br/>
United Kingdom<br/><br/>
Nikki Alexander<br/>
                                e:&nbsp;<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#110;&#105;&#107;&#107;&#105;&#046;&#097;&#108;&#101;&#120;&#097;&#110;&#100;&#101;&#114;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;">&#110;&#105;&#107;&#107;&#105;&#046;&#097;&#108;&#101;&#120;&#097;&#110;&#100;&#101;&#114;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;</a><br/>
                                t: +44 (0)207 0167748
                            </div></div>
                            
                            <div class="address" data-x="703" data-y="223"><div>
                                <p><strong>MMI Singapore</strong></p>
                                20 Cecil Street<br/>
                                #14-01 Equity Plaza<br/>
                                Singapore 049705
                            </div></div>
                            
                            <div class="address" data-x="519" data-y="144"><div>
                              <p><strong>MMI Nicosia</strong></p>
                                <p>3, Athinodorou Street<br>
                                  2025 Dasoupoli, Strovolos<br>
                                  Cyprus</p>
                            </div></div>

                            <div class="address address-above address-left" data-x="800" data-y="320"><div>
                                                            <p><strong>MMI Melbourne</strong></p>
                                                            <p>Level 2, The Lantern<br>
                            707 Collins Street, Docklands<br>
                            Melbourne<br>
                            VIC 3008<br>
                            Australia</p>
                            </div></div>

                            <div class="address address-above address-left" data-x="817" data-y="314"><div>
                                <p><strong>MMI Sydney</strong></p>
                                <p>Po Box K500<br>
                                  Haymarket<br>
NSW 1240<br>
                                  Australia</p>
                            </div></div>
                            
                            <div class="address" data-x="636" data-y="151"><div>
                              <p><strong>MMI New Delhi</strong></p>
                                <p>Level 15<br>
                                  Eros Corporate Towers<br>
                                  Nehru Place<br>
                                  New Delhi 110019<br>
                                India</p>
</div></div>

                            <div class="address" data-x="232" data-y="161"><div>
                              <p><strong>MMI Fort Lauderdale</strong></p>
                                <p>10650 SW 48th Street<br>
                                  Davie FL 33328<br>
                                  USA</p>
Nelson Henriquez<br/>
                                e:&nbsp;<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#110;&#101;&#108;&#115;&#111;&#110;&#046;&#104;&#101;&#110;&#114;&#105;&#113;&#117;&#101;&#122;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;">&#110;&#101;&#108;&#115;&#111;&#110;&#046;&#104;&#101;&#110;&#114;&#105;&#113;&#117;&#101;&#122;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;</a><br/>
                                t: +1 (954) 224 4191
                            </div></div>
                            
                            <div class="address address-above address-right" data-x="304" data-y="279"><div>
                              <p><strong>MMI Brasilia</strong></p>
                                <p>CMD 01 Lote 15 &nbsp; loja 01&nbsp;<br>
                                  Praca Bicalio Taguatinga&nbsp;<br>
                                  Distrito Federal, Brasilia, Brasil<br>
                                  <br>
                                t: +55 (0)61 406 38216</p>
</div></div>

                            <div class="address address-left" data-x="720" data-y="185"><div>
                                <p><strong>MMI Hong Kong</strong></p>
                                Room 2103, Futura Plaza<br> 
111 How Ming Street, Kwun Tong<br>
Hong Kong
<br>
                              <br>
                              Tony Zhang<br/>
                                e:&nbsp;<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#116;&#111;&#110;&#121;&#046;&#122;&#104;&#097;&#110;&#103;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;">&#116;&#111;&#110;&#121;&#046;&#122;&#104;&#097;&#110;&#103;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;</a><br/>
                                t: +86 137 6113 6178
                            </div></div>

                            <div class="address address-left" data-x="740" data-y="167"><div>
                                <p><strong>MMI Shanghai</strong></p>
                                Room 1508, No. 1378 Lujiabang Road<br>
                              Shanghai, China 200011<br>
                              <br>
                              Tony Zhang<br/>
                                e:&nbsp;<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#116;&#111;&#110;&#121;&#046;&#122;&#104;&#097;&#110;&#103;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;">&#116;&#111;&#110;&#121;&#046;&#122;&#104;&#097;&#110;&#103;&#064;&#109;&#111;&#116;&#105;&#118;&#102;&#111;&#114;&#099;&#101;&#046;&#099;&#111;&#109;</a><br/>
                                t: +86 137 6113 6178
                            </div></div>

                            <div class="address address-left" data-x="441" data-y="112"><div>
                              <p><strong>MMI Maastricht</strong></p>
                              <p>Tongersestraat 53<br>
                                LM Maastricht<br>
                                    Netherlands<br>
                                  <br>
<!--t: +32 2 719 90 93-->  <br>
                                </p>
                            </div>
                            </div>

                            <div class="address" data-x="252" data-y="129"><div>
                                <p><strong>North America</strong></p>
                                Lincoln Smith<br/>
                                e:&nbsp;<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#108;&#115;&#109;&#105;&#116;&#104;&#064;&#104;&#109;&#105;&#097;&#119;&#097;&#114;&#100;&#046;&#099;&#111;&#109;">&#108;&#115;&#109;&#105;&#116;&#104;&#064;&#104;&#109;&#105;&#097;&#119;&#097;&#114;&#100;&#046;&#099;&#111;&#109;</a><br/>
                                t: +1 (617) 223 1140
                            </div></div>
                        </div>
                    </div>

<!-- 
                    <div id="map">
                        <img src="./assets/images/contact-us/map-colour.png">
                        <div class="overlay">We have wholly owned offices around the world in London, Brussels, Cyprus, New Delhi, Singapore, Hong Kong, Shanghai, Sydney, Fort Lauderdale, Boston.</div>
                    </div>
-->
                </div>
            </div></div>



            
            <div id="footer">
                <div class="content">
                    <div class="logo">
                        <img src="./assets/images/mmi-logo-white.png" height="53">
                        <div class="locations">London / Brussels / Nicosia / New Delhi /<br/>
                            Singapore / Hong Kong / Shanghai /<br/>
                            Sydney / Fort Lauderdale / Boston /<br/>
                            Toronto / Brasilia
                        </div>
                    </div>
                    <p class="copyright">&copy;<?php echo date("Y"); ?> Motivforce Marketing and Incentives Ltd</p>
                </div>
                <img class="gradient" src="./assets/images/header-gradient.jpg">
            </div>
            <div id="space-bottom">
            </div>
        <section id="popout">
        <div class="content">
            <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get class="email-signup" id="signup">
                <input name="list" type="hidden" value="lorem_list">
                <div class="input-with-button no-space row">
                    <div class="col-xs-5 col-m-4 col-m-offset-1 padded">
                        <span class="lead">
                            <span class="bold">MMI MESSENGER</span> - receive updates as they happen.
                        </span>
                    </div>
                    <div class="col-xs-3 col-xs-offset-2 col-m-3 col-m-offset-1">
                        <span class="input-with-icon">
                            <input class="" id="email" name="email" type="email" required="">
                        </span>
                    </div>
                    <div class="col-xs-2 col-m-1">
                        <button class="" name="subscribe" type="submit">Sign up</button>
                    </div>
                </div>
            </form>
            </div>
            <span id="response">
                    <?php require_once('./assets/vendors/mcapi-simple-subscribe-jquery/inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
            </span>
        </section>



            </div></div>
        </div>


<div class="overlay"></div>






        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="./assets/vendors/skrollr/skrollr.min.js"></script>
        <script src="./assets/vendors/skrollr/skrollr.menu.min.js"></script>
        <script type="text/javascript" src="./assets/vendors/carousel/jquery.contentcarousel.js"></script>
        <script type="text/javascript" src="./assets/js/Vague.js"></script>

        <!-- <script type="text/javascript" src="./assets/js/jquery.silver_track.js" charset="utf-8"></script>
        <script type="text/javascript" src="./assets/js/plugins/jquery.silver_track.navigator.js" charset="utf-8"></script>
        <script type="text/javascript" src="./assets/js/plugins/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
        <script type="text/javascript" src="./assets/js/plugins/jquery.silver_track.remote_content.js" charset="utf-8"></script>
        <script type="text/javascript" src="./assets/js/plugins/jquery.silver_track.responsive_hub_connector.js" charset="utf-8"></script>
        <script type="text/javascript" src="./assets/js/plugins/jquery.silver_track.css3_animation.js" charset="utf-8"></script>-->

        <!--<script type="text/javascript" src="//masonry.desandro.com/masonry.pkgd.js"></script>-->
        <script type="text/javascript" src="./assets/vendors/mcapi-simple-subscribe-jquery/js/mailing-list.js"></script>
        <script src="./assets/js/main.js?20130408"></script>
        <script src="./assets/js/forms.js?20130408"></script>


    
        <!--[if lt IE 9]>
        <script type="text/javascript" src="./assets/vendors/skrollr/skrollr.ie.min.js"></script>
        <![endif]-->
    


<!-- Cookie Control -->
<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script src="./assets/vendors/cookie-control/cookieControl-5.1.min.js" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[
  cookieControl({
      introText:'<p>This site uses some unobtrusive cookies to store information on your computer.</p>',
      fullText:'<p>Some cookies on this site are essential, and the site won\'t work as expected without them. These cookies are set when you submit a form, login or interact with the site by doing something that goes beyond clicking on simple links.</p><p>We also use some non-essential cookies to anonymously track visitors or enhance your experience of the site. If you\'re not happy with this, we won\'t set these cookies but some nice features of the site may be unavailable.</p><p>To control third party cookies, you can also adjust your <a href="http://www.civicuk.com/cookie-law/browser-settings" target="_blank">browser settings</a>.</p><p>By using our site you accept the terms of our <a href="http://motivforce.com/">Privacy Policy</a>.</p>',
      position:'right', // left or right
      shape:'triangle', // triangle or diamond
      theme:'light', // light or dark
      startOpen:false,
      autoHide:6000,
      subdomains:true,
      protectedCookies: [], //list the cookies you do not want deleted ['analytics', 'twitter']
      consentModel:'information_only',
      onAccept:function(){ccAddAnalytics()},
      onReady:function(){},
      onCookiesAllowed:function(){ccAddAnalytics()},
      onCookiesNotAllowed:function(){},
      countries:'United Kingdom,Netherlands' // Or supply a list ['United Kingdom', 'Greece']
      });

      function ccAddAnalytics() {
        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-39961277-1');
          GATracker._trackPageview();
        });
      }
   //]]>
</script>  

<?php if ($success): ?>

                <?php 

                    $i = 1; 
                    $blog_item_position = -280;

                ?>
                <?php foreach($feed->get_items() as $item): ?>
                    <?php 
                        // number of blog posys to display
                        if ($i++ == 50) break;
                        $blog_item_position = $blog_item_position + 280;
                        $class = 'xitem';
                        //if($i % 2 == 0) {
                            //$class .= ' item ';
                        //}
                            //echo '<div class="item">';
                        
                        if (isset($item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data']))  {
                            $class = 'xitem '. $item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data'];
                        }
                        //var_dump($item->get_item_tags('','custom_fields')[0]['child']['']['size'][0]['data']);
                    ?>
                    <div class="xitem2 individual" id='post_<?php echo $i ?>'>
                        <span id='close_<?php echo $i ?>' class='close'></span>
                        <h2><?php echo $item->get_title(); ?></h2>
                        <h4><?php echo $item->get_date('jS F Y'); 
                        ?>
                        <span class="separator">|</span>
                        <?php echo ucwords($item->get_authors()[0]->name); ?>
                        </h4>
                        <div class="individual_image">
                            <?php 
                                if(preg_match('/(<img[^>]+>)/i', $item->get_content(), $matches)) {
                                    echo strstr(strip_tags($item->get_content(), "<img>"), '">', true).'">';
                                }
                            ?>
                        </div>
                        <div class="col-md-6">

                            <?php 
                        // display tags
                        if(!empty($item->get_categories())) {
                            $out = array();

                            echo '<p>Posted in: <span class="grey">';
                            foreach($item->get_categories() as $tags) {
                                array_push($out, $tags->term);
                            }
                            echo ucwords(implode(', ', $out));
                            echo '.</span></p>';
                        }
                        ?>
                        

                            <p><?php echo preg_replace("/&#?[a-z0-9]+;/i"," ",strip_tags($item->get_content(), '<p>, <span>, <strong>')); ?></p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                <span class='st_linkedin_large' displayText='LinkedIn' st_url='http://motivforce.com/#blog'></span>
                                <span class='st_twitter_large' displayText='Tweet' st_url='http://motivforce.com/#blog'></span>
                                <span class='st_facebook_large' displayText='Facebook' st_url='http://motivforce.com/#blog'></span>
                                <span class='st_googleplus_large' displayText='Google +' st_url='http://motivforce.com/#blog'></span>
                            </p>
                        

                        
                        <span id='<?php echo $i ?>' class='close-bottom'>Close</span>
                        </div>
                    </div>

                    <?php //if($i % 2 != 0) {
                            //$class .= ' item ';
                        echo '</div>';
                        //}
                        ?>
                    
                <!-- Stop looping through each item once we've gone through all of them. -->
                <?php endforeach; ?>

            <!-- From here on, we're no longer using data from the feed. -->
            <?php endif; ?>

    </body>
</html>
