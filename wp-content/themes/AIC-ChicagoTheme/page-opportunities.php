<?php get_header(); ?>

<div class="row">
  <!--content-->

<div class="row">
    <div class="column">
        <div class="panel">
        <?php
$post_id = 73;
$queried_post = get_post(128);
?>
<p><?php echo $queried_post->post_content; ?></p>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <hr/>

            <p><?php echo $queried_post->post_content; ?></p>
        </div>

        <div class="panel">
                 <?php
$post_id = 73;
$queried_post = get_post(130);
?>
<p><?php echo $queried_post->post_content; ?></p>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <hr/>

            <p><?php echo $queried_post->post_content; ?></p>

        </div>
        <div class="panel">
                 <?php
$post_id = 73;
$queried_post = get_post(132);
?>
<p><?php echo $queried_post->post_content; ?></p>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <hr/>

            <p><?php echo $queried_post->post_content; ?></p>
            </div>

        </div>
    </div>
</div>

<!--end content-->

</div>
<?php get_footer(); ?>
