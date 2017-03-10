<div id="content">
    <div class="section why" id="anchor1" >
        <div class="container">
            <div class="row">
                <h2>6 причин працювати з нами</h2>
                <div class="col-md-4 col-xs-12">
                    <div class="icon-box">
                        <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icons/procent_color.png" alt="exclusive">
                        <p>Ексклюзив</p>
                    </div>
                    <div class="icon-box-bottom">
                        <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icons/Track-Order-100.png" alt="Track-Order-100">
                        <p>Іноваційні<br>технології</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="icon-box">
                        <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icons/Prize-100.png" alt="exclusive">
                        <p class="expce">Досвід</p>
                    </div>
                    <div class="icon-box-bottom midle">
                        <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icons/marketing-icon.png" alt="Track-Order-100">
                        <p class="marng">Індивідуальний<br>маркетинг</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="icon-box">
                        <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icons/Commercial-Development-Management-100.png" alt="exclusive">
                        <p class="prtnr">Мережа партнерів</p>
                    </div>
                    <div class="icon-box-bottom">
                        <img class="icon" src="<?php bloginfo('template_url'); ?>/img/icons/Combo-Chart-100.png" alt="Track-Order-100">
                        <p class="perf">Вдосконалення<br>майстерності</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="anchor2">
    <div class="section blue">
        <div class="container">
            <div class="row">
                <h2><?php echo get_cat_name(2);?></h2>
                <div class="col-md-12">
                    <div class="r_estate">
                        <div class="sl">
                                    <?php
                                        $recent = new WP_Query('cat=2&nopaging=1');
                                        while($recent -> have_posts()) : $recent -> the_post(); ?>
                                        <div class="img_block">
                                        <?php the_post_thumbnail('full'); ?>
                                        <div class="img_hover" id="home_1">
                                        <h3><?php echo (get_post_meta($post->ID, 'цена', true)); ?></h3>
                                            <strong class="price"><?php echo (get_post_meta($post->ID, 'продажа-аренда', true)); ?></strong>
                                            <a href="<?php the_permalink(); ?>"><span>докладно</span></a>
                                        </div>
                                    </div>
                                    <?php wp_reset_postdata(); ?>
                                    <?php endwhile; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section blue">
        <div class="container">
            <div class="row">
                <h2><?php echo get_cat_name(3);?></h2>
                <div class="col-md-12">
                    <div class="r_estate">
                            <div class="sl">
                            <?php 
                                $recent = new WP_Query('cat=3&nopaging=1');
                                while($recent -> have_posts()) : $recent -> the_post(); ?>
                                        <div class="img_block">
                                            <?php the_post_thumbnail('full'); ?>
                                        <div class="img_hover" id="home_1">
                                            <h3><?php echo (get_post_meta($post->ID, 'цена', true)); ?></h3>
                                            <strong class="price"><?php echo (get_post_meta($post->ID, 'продажа-аренда', true)); ?></strong>
                                            <a href="<?php the_permalink();?>"><span>докладно</span></a>
                                        </div>
                                    </div>
                                    <?php wp_reset_postdata(); ?>
                                <?php endwhile; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section blue">
        <div class="container">
            <div class="row">
                <h2><?php echo get_cat_name(4);?></h2>
                <div class="col-md-12">
                    <div class="r_estate">
                        <div class="sl">
                              <?php 
                                $recent = new WP_Query('cat=4&nopaging=1');
                                while($recent -> have_posts()) : $recent -> the_post(); ?>
                                        <div class="img_block">
                                            <?php the_post_thumbnail('full'); ?>
                                        <div class="img_hover" id="home_1">
                                            <h3><?php echo (get_post_meta($post->ID, 'цена', true)); ?></h3>
                                            <strong class="price"><?php echo (get_post_meta($post->ID, 'продажа-аренда', true)); ?></strong>
                                            <a href="<?php the_permalink();?>"><span>докладно</span></a>
                                        </div>
                                    </div>
                                    <?php wp_reset_postdata(); ?>
                                <?php endwhile; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section rev_section" id="anchor3">
        <div class="container">
            <div class="row">
                    <h2><?php echo get_cat_name(5);?></h2>
                <div class="col-md-12">
                    <div class="r_estate">
                        <div class="reviews">
                            <?php
                                $recent = new WP_Query('cat=5&nopaging=1');
                                while($recent -> have_posts()) : $recent -> the_post(); ?>
                                        <div class="img_block">
                                            <div class="ava">
                                                <?php the_post_thumbnail('full'); ?>
                                            </div>
                                        <h3><?php echo get_the_title( $post ) ?></h3>
                                            <p><?php the_content( ); ?></p>
                                </div>
                                    <?php wp_reset_postdata(); ?>
                                <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


