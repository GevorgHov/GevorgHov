<article class="post">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p class="post-info">
                <?php the_time("F j, Y g:i a"); ?>
                | by
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" >
                    <?php the_author(); ?>
                </a>
                | posted in
                <?php
                $categories = get_the_category();// get_the_category() ֆունկցիան կվերադարձնի ընթացիկ փոստի կատեգորիաների ցուցակը

                foreach ($categories as $key => $value) {
                    $link = get_category_link($value->term_id);// get_category_link() ֆունկցիան վերադարձնում է իրեն փոխանցված id-ով կատեգորիային պատկանող բոլոր փոստերի հղումը
                    
                    echo "<a href='$link'>" . $value->name . "</a>";
                }
                ?>
            </p>
            <hr>
            <?php the_post_thumbnail('small-thumbnail'); ?>
            <p> <?php the_excerpt(); ?> 
                <a style="margin-left: 50%;" href="<?php the_permalink(); ?> "> Read more &raquo;</a>
            </p>
        </article>