<?php
$pageTitle = 'Our Services';
include('header.php');
include('stickyform.php');
?>


<div class="container">
    <div class="service-multitex m-4">
        <div class="static-txt ">WE PROVIDE </div>
        <ul class="dynamic-txts">
            <li><span>RPO</span></li>
            <li><span>DIGITAL SOLUTIONS</span></li>
            <li><span>IT SOLUTIONS</span></li>
            <li><span>EVENT MANAGEMENT</span></li>
            <li><span>TRAINING & DEVELOPMENT</span></li>
        </ul>
    </div>
</div>
<div class="container">
    <section class="service-tab">
        <nav class="">
            <div class="nav nav-tabs " id="nav-tab" role="tablist">
                <button class="nav-link active bg-black" id="nav-rpo-tab" data-bs-toggle="tab" data-bs-target="#nav-rpo" type="button" role="tab" aria-controls="nav-rpo" aria-selected="true">RPO</button>
                <button class="nav-link bg-black " id="nav-digital-marketing-tab" data-bs-toggle="tab" data-bs-target="#nav-digital-marketing" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Digital Marketing and IT Solution</button>
                <button class="nav-link bg-black" id="nav-pay-roll-tab" data-bs-toggle="tab" data-bs-target="#nav-pay-roll" type="button" role="tab" aria-controls="nav-pay-roll" aria-selected="false">Pay Roll Handling And Management</button>
                <button class="nav-link bg-black " id="nav-nav-training-tab" data-bs-toggle="tab" data-bs-target="#nav-training" type="button" role="tab" aria-controls="nav-training" aria-selected="false">Training And Development</button>
                <button class="nav-link bg-black" id="nav-councelling-tab" data-bs-toggle="tab" data-bs-target="#nav-councelling" type="button" role="tab" aria-controls="nav-counceling" aria-selected="false">Councelling</button>
                <button class="nav-link bg-black" id="nav-corporate-events-tab" data-bs-toggle="tab" data-bs-target="#nav-corporate-events" type="button" role="tab" aria-controls="nav-corporate-events" aria-selected="false">Corporate Events</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-rpo" role="tabpanel" aria-labelledby="nav-rpo-tab">
                <div class="container">
                    <div class="tab-heading my-5 text-center">
                        <h1 class="ff-azonix">RECRUITMENT PROCESS <br> OUTSOURCING</h1>
                        <h4 class="ff-raleway">As RPO LinkUs Solution provides a company's HR or Resource function and planning people into the client's organization. We deliver staff, technology, and methodology as per client's reuirement.</h4>
                    </div>
                    <div class="rpo-sub-services d-flex ">
                        <div class="rpo-sub-services-1">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-1">
                                <img src="./media/images/service-hexa.png" class="w-50">
                            </button>

                            <div class="modal fade" id="rpo-sub-services-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-black">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">JOB</h5>
                                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="get-in-touch">
                                            <div class="offset-md-2 col-12 col-md-8">
                                                <form>
                                                    <div class="mb-3 text-start">
                                                        <label for="name-input" class="form-label ff-azonix">Name</label>
                                                        <input type="text" class="form-control" id="name-input">
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="contact-input" class="form-label ff-azonix">Contact</label>
                                                        <input type="tel" class="form-control" id="contact-input">
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="email-input" class="form-label ff-azonix">Email</label>
                                                        <input type="email" class="form-control" id="email-input">
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="select-input" class="form-label ff-azonix">Select</label>
                                                        <select id="select-input" class="form-select">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="exampleInputPassword1" class="form-label ff-azonix">Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-outline-light btn-lg rounded-pill px-5 mx-4 mt-3 text-uppercase">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rpo-sub-services-2">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#jobform">
                                <img src="./media/images/service-hexa.png" class="w-50">
                            </button>
                            <div class="modal fade" id="jobform" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-black">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">JOB</h5>
                                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="get-in-touch">
                                            <div class="offset-md-2 col-12 col-md-8">
                                                <form>
                                                    <div class="mb-3 text-start">
                                                        <label for="name-input" class="form-label ff-azonix">Name</label>
                                                        <input type="text" class="form-control" id="name-input">
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="contact-input" class="form-label ff-azonix">Contact</label>
                                                        <input type="tel" class="form-control" id="contact-input">
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="email-input" class="form-label ff-azonix">Email</label>
                                                        <input type="email" class="form-control" id="email-input">
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="select-input" class="form-label ff-azonix">Select</label>
                                                        <select id="select-input" class="form-select">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label for="exampleInputPassword1" class="form-label ff-azonix">Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-outline-light btn-lg rounded-pill px-5 mx-4 mt-3 text-uppercase">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-digital-marketing" role="tabpanel" aria-labelledby="nav-digital-marketing-tab">tab 2</div>
            <div class="tab-pane fade" id="nav-pay-roll" role="tabpanel" aria-labelledby="nav-pay-roll-tab">tab 3</div>
            <div class="tab-pane fade" id="nav-training" role="tabpanel" aria-labelledby="nav-nav-training-tab">tab 4</div>
            <div class="tab-pane fade" id="nav-councelling" role="tabpanel" aria-labelledby="nav-councelling-tab">tab 5</div>
            <div class="tab-pane fade" id="nav-corporate-events" role="tabpanel" aria-labelledby="nav-corporate-events-tab">tab 6</div>
        </div>
    </section>
</div>

<?php
include('footer.php');
?>