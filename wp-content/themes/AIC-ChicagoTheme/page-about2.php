<?php get_header(); ?>

<div class="row">
    <!--<div class="small-12 large-8 columns" role="main">-->
    <div class="row small-collapse medium-uncollapse">

		<!--content-->
<div class="row">
<div class="columns">
<div class="row">
<div id="mission_statement" class="columns">
<div class="panel">
<h1>Our Mission</h1>

<hr />
<p class="text-justify">To promote the fellowship among Indian people of all Tribes living in the
metropolitan Chicago, and to create bonds of understanding and communication between Indians and
non-Indians in this city. To advance the general welfare of American Indians into the
metropolitan
community life; to foster the economic and education advancement of Indian people; to sustain
cultural
artistic and avocational pursuits; and to perpetuate Indian cultural values</p>

</div>
</div>
</div>
<div id="board_wrap" class="panel">
<h1>Who we are</h1>

<hr />

<!--BOARD-->
<div class="row text-center">
<h2>Our Board</h2>

<hr />

<!--?php $url="";?-->

<?php echo do_shortcode('[tmm name="board-members"]'); ?>

<!--STAFF-->
<div class="row text-center">
<h2>Our Staff</h2>

<hr />

<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board1.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board2.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board3.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board4.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board1.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board2.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board3.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board4.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board1.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board2.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
<div class="small-6 medium-4 large-3 columns headshot"><img src="&lt;?php echo $url;?&gt;assets/img/board/board3.jpg" alt="" />


Name


Title


<i>Tribe</i></div>
</div>
</div>
</div>
</div>
<!--end content-->
        
        <?php do_action('foundationPress_after_content'); ?>

    </div>
    <?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
