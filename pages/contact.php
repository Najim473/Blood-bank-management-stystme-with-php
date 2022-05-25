<?php
    require_once("./header.php");
?>

<!-- end main-header  -->
    <section class="section-content-block"  style="background-color: #f5f5f5">
        <div class="container">
            <div class="row" >
                <div class="col-12 ">
                    <div class="appointment-form-wrapper text-center clearfix">
                        <h3 class="join-heading">Request Appointment</h3>
                        <form class="appoinment-form">
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" placeholder="Name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_email" class="form-control" placeholder="Email" type="email">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="your_center">
                                        <option>Donation Center</option>
                                        <option>Los Angles</option>
                                        <option>California</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_date" class="form-control" placeholder="Date" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_time" class="form-control" placeholder="Time" type="text">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button id="btn_submit" class="btn-submit" type="submit">Get Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    



<?php
    require_once("./footer.php");
?>