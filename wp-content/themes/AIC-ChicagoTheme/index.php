<?php get_header(); ?>
<!--content-->


<div class="row small-collapse medium-uncollapse">
    <?php echo do_shortcode('[espro-slider id=137]'); ?>
</div>

<div class="row" data-equalizer>
    <div class="medium-7 columns" id="powwow_programs_wrap">
        <div class="" id="powwow">
            <div class="panel small-uncollapse">
                <a href="powwow.html"><img src="assets/img/powwow/PowWow-boxsmaller.jpg" alt=""/></a>
            </div>
        </div>
        <div class="row" id="programs" data-equalizer>
            <div class="columns">
                <div class="panel text-center" data-equalizer-watch>
                    <div class="row">
                        <h1>Programs</h1>
                        <hr/>
                        <div class="small-6 columns">
                            <h3>Education</h3>
                            <a href="education.html" class="icon-education" data-icon="b"></a>
                        </div>
                        <div class="small-6 columns">
                            <h3>Arts</h3>
                            <a href="arts.html" class="icon-arts" data-icon="a"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-6 columns">
                            <h3>Activities</h3>
                            <a href="activities.html" class="icon-archery" data-icon="i"></a>
                        </div>
                        <div class="small-6 columns">
                            <h3>Wellness</h3>
                            <a href="wellness.html" class="icon-wellness" data-icon="h"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="medium-5 columns" id="news">
        <div class="panel" data-equalizer-watch><a href="news.html"><h1 class="text-center">News</h1></a>
            <hr/>

            <h2>Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci consequatur corporis eaque
                fugit harum laborum nam necessitatibus nisi odit, praesentium provident qui recusandae rerum sit, sunt
                tenetur vitae, voluptatum.</p>
            <hr/>


            <h2>Title</h2>
            <p>Accusamus aliquid, animi blanditiis, dolorem dolores est ex, hic odit omnis quia soluta suscipit tenetur.
                A, cum dignissimos eum fugit hic modi neque officia possimus praesentium quaerat reiciendis similique
                voluptates.</p>
            <hr/>

            <h2>Title</h2>
            <p>Aperiam beatae doloribus, fugiat labore minus modi omnis quam sunt? Accusamus autem, dicta dolor dolorem
                eaque eos ex exercitationem fugit illo ipsa natus possimus quisquam saepe ut veritatis vero
                voluptas!</p>
        </div>

    </div>
</div>

<!--end content-->
<?php /*?>        <?php if (have_posts()) : ?>

            <?php do_action('foundationPress_before_content'); ?>

            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>

            <?php do_action('foundationPress_before_pagination'); ?>

        <?php endif; ?>



        <?php if (function_exists('FoundationPress_pagination')) {
            FoundationPress_pagination();
        } else if (is_paged()) { ?>
            <nav id="post-nav">
                <div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'FoundationPress')); ?></div>
                <div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'FoundationPress')); ?></div>
            </nav>
        <?php } ?><?php 

        <?php do_action('foundationPress_after_content'); ?>

    </div>
    <?php get_sidebar(); ?>
	*/?>
</div>
<?php get_footer(); ?>
