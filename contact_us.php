<?php
$pageTitle = 'Contact Us';
include('header.php');
include('stickyform.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1 class="ff-raleway fs-5rem mx-5 my-5 py-5">Available 24x7 <br>to serve best</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-circle px-5">
            <img src="./media/images/contact-circle.png">
        </div>
    </div>
</div>
<div class="d-none d-md-block">
    <div class="d-flex justify-content-between align-items-center my-3">
        <img src="./media/images/home-digitalPatner-line.png" alt="home-digitalPatner-line" class="home-line">
        <img src="./media/images/home-pink-triangle-right.png" id="pink-triangle" alt="pink-triangle" />
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="ff-Azonix p-5 text-center">GET IN TOUCH</h1>
            <section id="get-in-touch" class="bg-black">
                <div class="container text-center">
                    <div class="offset-md-2 col-12 col-md-8">
                        <form onsubmit="sendData(event, 'contactUs-form-submit')" id="contactUs-form-submit">
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

                                <label for="radio-input" class="form-label ff-azonix w-radio-100">Select</label>

                                <div class="form-check footer-radio-inline ms-2">
                                    <input class="form-check-input" type="radio" name="index-footer-radio" id="select1"
                                        value="select1" checked>
                                    <label class="form-check-label" for="select1">
                                        Job
                                    </label>
                                </div>
                                <div class="form-check footer-radio-inline">
                                    <input class="form-check-input" type="radio" name="index-footer-radio" id="select2"
                                        value="select2">
                                    <label class="form-check-label" for="select2">
                                        Internship
                                    </label>
                                </div>

                                <div class="form-check footer-radio-inline">
                                    <input class="form-check-input" type="radio" name="index-footer-radio" id="select3"
                                        value="select3">
                                    <label class="form-check-label" for="select3">
                                        Collaboration
                                    </label>
                                </div>

                            </div>
                            <div class="mb-3 text-start">
                                <label for="description-input" class="form-label ff-azonix">Description</label>
                                <textarea class="form-control" id="description-input" rows="3"></textarea>
                            </div>
                            <button type="submit"
                                class="btn btn-outline-light btn-lg rounded-pill px-5 mx-4 mt-3 text-uppercase">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="d-none d-md-block">
    <div class="d-flex justify-content-between align-items-center my-3">
        <img src="./media/images/home-grey-triangle-left.png" alt="home-grey-triangle-left"
            class="home-our-expertise-triangle" style="    height: auto; max-height: 16rem;">
        <img src="./media/images/home-digitalPatner-line.png" alt="home-digitalPatner-line" class="home-line">
    </div>
</div>
<div class="container">
    <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <section id="about-faqs" class="mt-4">
                <div class="col-12 col-lg-12 pt-5">
                    <h3 class="h1 ff-raleway mb-5 ms-3">FAQs</h3>
                    <div class="accordion ff-raleway" id="aboutAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="accordianSign me-3"> + </span> What we offer to our clients ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere
                                    veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores,
                                    dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="accordianSign me-3"> + </span> How we help you to fulfill your RPO
                                    needs?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere
                                    veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores,
                                    dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="accordianSign me-3"> + </span> What are the best services we offer
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere
                                    veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores,
                                    dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="accordianSign me-3"> + </span> What are the best services we offer
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere
                                    veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores,
                                    dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-que">
            <img src="./media/images/contact-que.png" class="W-50  p-5 justify-content-center">
        </div>
    </div>
</div>
<div class="d-flex justify-content-start my-5 ">
    <img src="./media/images/home-digitalPatner-line.png" alt="pink-triangle" class="W-50" />

</div>
<div class="container text-center">
    <div id="social" class="my-5">
        <div class="row">
            <div class="col-12">
                <spam class="ff-Azonix primary-blue display-1">Link</spam>
                <spam class="ff-Azonix primary-pink display-2">With</spam>
                <spam class="ff-Azonix primary-blue display-1">Us</spam>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="./media/images/home-digitalPatner-socialIcon-1.png" alt="social icon" class="social-icon m-1">
                <img src="./media/images/home-digitalPatner-socialIcon-2.png" alt="social icon" class="social-icon m-1">
                <img src="./media/images/home-digitalPatner-socialIcon-3.png" alt="social icon" class="social-icon m-1">
                <img src="./media/images/home-digitalPatner-socialIcon-4.png" alt="social icon" class="social-icon m-1">
            </div>
        </div>
    </div>
</div>
</section>
<div class="d-flex justify-content-end ">
    <img src="./media/images/home-digitalPatner-line.png" alt="pink-triangle" class="W-50 my-5" />
</div>

<?php
include('footer.php');
?>