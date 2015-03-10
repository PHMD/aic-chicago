<?php get_header(); ?>

<!--content-->
<div class="row">
    <div class="column">
        <div class="panel">
            <h1> Contact Us </h1>

            <form action="contact.php" method="post" data-abide>

                <div class="row">
                    <div class="columns medium-4">

                        <label for="name">Name
                            <input type="text"
                                   name="name"
                                   id="name" required
                                   pattern="[a-zA-Z]+"/></label>
                        <small class="error">Name is required and must be a string.</small>

                        <label for="email">Email
                            <input type="email" name="email"
                                   id="email"/></label>
                        <small class="error">Email is required</small>
                    </div>


                    <div class="columns medium-4">
                        <label> What are you interested in? </label>
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Volunteer
                        Opportunities</label><br/>
                        <input id="checkbox2" type="checkbox"><label for="checkbox2">Making a donation</label><br/>
                        <input id="checkbox3" type="checkbox"><label for="checkbox3">Scheduling a tour</label><br/>
                        <input id="checkbox4" type="checkbox"><label for="checkbox4">Consent for use of photo</label>

                    </div>

                    <div class="columns medium-4">

                        <div id="map-canvas"></div>
                    </div>

                    <div class="columns ">
                        <label for="message">Message
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <button type="submit" class="right">Submit</button>
                    </div>
                </div>

        </div>
    </div>
<!--end content-->
</div>
<?php get_footer(); ?>
