<?php get_header(); ?>

<div class="row">
<!--content-->

<div class="row">
    <div class="columns">
        <div class="panel">

            <h1>Membership</h1>

            <p>THANK YOU for your interest in becoming a member of the American Indian Center, Inc., the oldest urban
                Native American Indian center in the United States created after the Relocation Act, 1950. Our members
                are our greatest resource! AIC Membership entitles you to:</p>

            <ul>

                <li>Discounted Admissions (at most AIC events)</li>
                <li>Electronic Newsletter: Smoke Signals</li>
                <li>Invitations to Special Events</li>
                <li>Discounts on AIC programs, classes and summer camp</li>
                <li>Special members only raffles and door prizes (at selected events)</li>
            </ul>
            <p>Individuals 16 years and older must obtain their own membership. Membership is valid through December 31,
                2014. Please note that there are two (2) types of memberships: voting and non-voting. A voting AIC
                member permits participation in the Board of Directors election held at the Annual AIC Meeting
                (February). In order to vote, proof of tribal citizenship must be presented.</p>

            <p>Please complete the form below:</p>

            <form action="members.php" method="post" data-abide>

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
                            <label>How did you hear about us?</label>
                            <input type="radio"
                                   name="connection"
                                   value="friend"
                                   id="friend"/><label for="friend">Friend</label>
                            <input type="radio"
                                   name="connection"
                                   value="internet"
                                   id="internet"/><label for="internet">Internet</label>
                            <input type="radio"
                                   name="connection"
                                   value="other"
                                   id="other"/><label for="other">Other</label>
                            <label for="other_text">Other
                                <input type="text" name="other_text" id="other_text"/></textarea>
                            </label>
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
