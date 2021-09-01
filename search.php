


<div class="container">
    <div class="row">
        <div class="col-md-8">

            <?php get_header(); ?>


            <?php

                $s=get_search_query();
                $args = array(
                                's' =>$s
                            );
                    // The Query

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                        _e("<h2 style= 'font-weight:bold; color:#000;margin-top:200px'>Search Results for: ".get_query_var('s')."</h2>");
                        while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>"> <?php the_title();?> <?php the_content();?></a>                   
                                <?php
                        }
                    }else{
                ?>
                        <h2 style='font-weight:bold;color:#000;margin-top:200px'>Nothing Found</h2>
                        <div class="alert alert-info">
                        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                        </div>
                <?php } ?>


               
        </div>
    </div>


</div>

<?php get_footer(); ?>

