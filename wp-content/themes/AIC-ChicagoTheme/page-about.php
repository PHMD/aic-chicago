<?php get_header(); ?>

<!--content-->
<div class="row">
    <div class="columns">

        <div class="row">
            <div class="columns" id="mission_statement">
                <div class="panel">
                    <h1>Our Mission</h1>
                    <hr/>
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


        <div class="panel" id="board_wrap">
            <h1>Who we are</h1>
            <hr/>

            <!--BOARD-->

            <div class="row text-center">
                <h2>Our Board</h2>
                <hr/>
                <?php echo do_shortcode('[tmm name="board-members"]'); ?>
            <hr/>

            <!--STAFF-->
            <div class="row"><h2 class="text-center">Our Staff</h2>
                <hr/>
                <ul class="medium-6 columns" >
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                </ul>
                <ul class="medium-5 columns">
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                    <li>Staff member</li>
                </ul>
            </div>
    </div>


    </ul>


</div>
</div>
<!--end content-->


<?php get_footer(); ?>
