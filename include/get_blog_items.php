<?php

    require_once('../simplepie/autoloader.php');
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
    $feed->set_feed_url('http://localhost/wordpress/?category_name=News&feed=rss2');

    // Initialize the whole SimplePie object.  Read the feed, process it, parse it, cache it, and
    // all that other good stuff.  The feed's information will not be available to SimplePie before
    // this is called.
    $success = $feed->init();

    // We'll make sure that the right content type and character encoding gets set automatically.
    // This function will grab the proper character encoding, as well as set the content type to text/html.
    $feed->handle_content_type();

    // When we end our PHP block, we want to make sure our DOCTYPE is on the top line to make
    // sure that the browser snaps into Standards Mode.
?>
<?php if ($success): ?>

                <?php 

                    $i = 1; 
                    $blog_item_position = -280;

                ?>
                <?php foreach($feed->get_items() as $item): ?>
                    <?php 

                        //if ($i++ == 5) break;
                        $blog_item_position = $blog_item_position + 280;
                        $class = 'xitem';
                        if (isset($item->get_item_tags('','size')[0]['data']))  {
                            $class = 'xitem '. $item->get_item_tags('','size')[0]['data'];
                        }
                    ?>
                    <div class="<?php echo $class; ?>">
                        <?php 
                            if(preg_match('/(<img[^>]+>)/i', $item->get_content(), $matches)) {
                                echo strstr(strip_tags(substr($item->get_content(),0,250), "<img>"), '">', true).'">';
                            }
                        ?>
                        <h2><?php echo $item->get_title(); ?></h2>
                        <h4><?php echo $item->get_date('jS F Y'); 
                        ?>
                        <span class="separator">|</span>
                        <?php
                        echo ucwords($item->get_authors()[0]->name); ?></h4>

                        <!-- Display the item's primary content. -->
                        <p><?php echo strip_tags(substr($item->get_content(),0,650)); ?>...</p>

                        <?php 
                        // display tags
                            foreach($item->get_categories() as $tags) {
                                //echo '<p>'.$tags->term.'</p>';
                            }
                        ?>
                        <a class="xmore">Read more...</a>
                    </div>

                <!-- Stop looping through each item once we've gone through all of them. -->
                <?php endforeach; ?>

            <!-- From here on, we're no longer using data from the feed. -->
            <?php endif; ?>