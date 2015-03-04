<?php get_header(); ?>

<div class="row">
<!--content-->

<div class="row">
    <div class="column">
        <div class="panel">
            <form action="volunteer.php" method="post" data-abide>
                <h1>Volunteer Form</h1>
                <fieldset>
                    <legend>General Info</legend>
                    <div class="row">
                        <div class="columns medium-6">

                            <label for="firstname">First Name
                                <small>required</small>
                                <input type="text"
                                       name="firstname"
                                       id="firstname" required
                                       pattern="[a-zA-Z]+"/></label>
                            <small class="error">First Name is required and must be a string.</small>

                            <label for="lastname">Last Name
                                <small>required</small>
                                <input type="text"
                                       name="lastname"
                                       id="lastname"
                                       required
                                       pattern="[a-zA-Z]+"/></label>
                            <small class="error">Last Name is required and must be a string.</small>
                        </div>

                        <div class="columns medium-6">
                            <label for="email">Email
                                <small>required</small>
                                <input type="email" name="email"
                                       id="email"
                                       required/></label>
                            <small class="error">A is required</small>
                            <label for="dob">Date of Birth
                                <small>required</small>
                                <input type="date" name="dob"
                                       id="dob"
                                       required/></label>
                            <small class="error">Email is required</small>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Address</legend>
                    <div class="row ">
                        <div class="column medium-6">
                            <label for="street_line1">Street Line 1
                                <small>required</small>
                                <input type="text"
                                       name="street_line1"
                                       id="street_line1"
                                       required/></label>
                            <small class="error">Street Line 1 is required.</small>

                            <label for="street_line2">Street Line 2
                                <input type="text"
                                       name="street_line2"
                                       id="street_line2"/></label>
                        </div>

                        <div class="columns medium-3">
                            <label for="city">City
                                <small>required</small>
                                <input type="text" name="city"
                                       id="city"
                                       required/></label>
                            <small class="error">City is required.</small>

                            <label for="state">State
                                <select name="state" id="state" required pattern=[a-zA-Z]+">
                                    <option value="00"></option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </label>
                            <small class="error">State is required.</small>
                        </div>

                        <div class="columns medium-3">
                            <label for="zip">Zip Code
                                <small>required</small>
                                <input type="number" name="zip" id="zip" required
                                       pattern="[\d]{5}(-[\d]{4})"/></label>
                            <small class="error">Zip Code is required.</small>

                            <label for="phone#">Phone Number
                                <small>required</small>
                                <input type="tel"
                                       name="phone#" id="phone#" required
                                       pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}'/></label>
                            <small class="error">Phone Number is required.</small>
                        </div>

                    </div>
                </fieldset>

                <fieldset>
                    <legend>More Info</legend>
                    <div class="row">
                        <div class="columns medium-6">
                            <label for="ethnicity">Ethnicity/Tribe
                                <input type="text" name="ethnicity" id="ethnicity"/>
                            </label>
                            <label>Voting Member </label>
                            <input type="radio"
                                   name="vote"
                                   value="yes"
                                   id="voteYes"/><label for="voteYes">Yes</label>
                            <input type="radio"
                                   name="vote"
                                   value="no"
                                   id="voteNO"/><label for="voteNo">No</label>
                        </div>


                        <div class="columns medium-6">
                            <label for="education-level">Highest Level of Education
                                <input type="text" name="education-level" id="education-level"/>
                            </label>
                            <label for="occupation">Current Occupation
                                <input type="text" name="occupation" id="occupation"/>
                            </label>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Interests</legend>

                    <div class="row">
                        <div class="columns medium-6 large-3"><input type="checkbox" name="youth-programs"
                                                                     id="youth-programs"/><label for="youth-programs">Youth
                            Programs</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="elder-programs"
                                                                     id="elder-programs"/><label for="elder-programs">Elder
                            Programs</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="outdoors"
                                                                     id="outdoors"/><label for="outdoors">Outdoors /
                            Gardening</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="environment"
                                                                     id="environment"/><label for="environment">Environment
                            / Recycling</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="health-programs"
                                                                     id="health-programs"/><label for="health-programs">Health
                            Programs</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="arts-crafts"
                                                                     id="arts-crafts"/><label for="arts-crafts">Arts /
                            Crafts</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="arts-crafts"
                                                                     id="arts-crafts"/><label for="arts-crafts">Arts /
                            Crafts</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="data-entry" id="data-entry"/><label
                                for="data-entry">Data Entry / Office Work</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="fundraising"
                                                                     id="fundraising"/><label for="fundraising">Fundraising</label>
                        </div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="events" id="events"/><label
                                for="events">Special Events</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="building-electric"
                                                                     id="building-electric"/><label
                                for="building-electric">Building / Electric</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="building-plumbing"
                                                                     id="building-plumbing"/><label
                                for="building-plumbing">Building / Plumbing</label></div>
                        <div class="columns medium-6 large-3"><input type="checkbox" name="building-carpentry"
                                                                     id="building-carpentry"/><label
                                for="building-carpentry">Building / Carpentry</label></div>
                        <div class="columns medium-6 large-3 end"><input type="checkbox" name="building-painting"
                                                                         id="building-painting"/><label
                                for="building-painting">Building / Painting</label></div>
                    </div>

                    <div class="row">
                        <div class="columns medium-6">
                            <label for="other-skills">Other Skills<input type="text" name="other-skills"
                                                                         id="other-skills"/></label>
                        </div>
                        <div class="columns medium-6 ">
                            <label>How often would you like to volunteer?</label>
                            <input type="radio" name="volunteer-time" id="daily"/><label for="daily">Daily</label>
                            <input type="radio" name="volunteer-time" id="weekly"/><label for="weekly">Weekly</label>
                            <input type="radio" name="volunteer-time" id="monthly"/><label for="monthly">Monthly</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="columns large-6">
                            <label for="availability">Whats your availability?</label><textarea name="availability"
                                                                                                id="availability"
                                                                                                cols="30" rows="5">Whats your Availability?</textarea>
                        </div>
                        <div class="columns large-6">
                            <label for="volunteer-credits">Please provide details if this is part of school/work/other
                                volunteer program</label><textarea name="volunteer-credits" id="volunteer-credits"
                                                                   cols="30" rows="5"></textarea>
                        </div>
                        <div class="columns large-6">
                            <label for="why-aic">Explain briefly why you wish to volunteer at the AIC</label><textarea
                                name="why-aic" id="why-aic" cols="30" rows="5"></textarea>
                        </div>
                        <div class="column large-6">
                            <label for="referral">If some referred you to the AIC, please list their
                                name</label><textarea
                                name="referral" id="referral" cols="30" rows="5"></textarea>
                        </div>

                        <div class="row">

                            <div class="column small-1 text-center">
                                <input type="checkbox" name="info-correct" id="info-correct"/>
                            </div>
                            <div class="column small-11">
                                <label for="info-correct"> I certify that all of the above information is correct. I
                                    understand the information I provided will be used only for AIC Volunteer purposes.I
                                    understand that some volunteer opportunities may require special certification, training
                                    or testing.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-1 text-center">
                                <input type="checkbox" name="accept-terms" id="accept-terms"/>
                            </div>
                            <div class="column small-11">
                                <label for="accept-terms">I understand I will be notified of these special
                                    circumstances, and I will have the right to refuse them. I understand volunteering
                                    at AIC may be contingent upon completing and passing certain special certification,
                                    training or testing.</label>
                            </div>
                        </div>
                    </div>


                </fieldset>

                <div class="row">
                    <div class="column">
                        <button class="button right" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--end content-->
</div>
<?php get_footer(); ?>
