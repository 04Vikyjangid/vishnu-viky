<?php
$pageTitle = 'Contact_Us';
include('header.php');
include('stickyform.php');

?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1 class="ff-raleway p-5">AVAILABLE 24x7 <br>to serve best</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1 class="ff-raleway p-5">Circle Image</h1>

        </div>
    </div>
</div>
<div class="d-none d-md-block">
    <div class="d-flex justify-content-between align-items-center my-3">
        <img src="./media/images/home-digitalPatner-line.png" alt="home-digitalPatner-line" class="home-line">
        <img src="./media/images/home-pink-triangle-right.png" id="pink-triangle" alt="pink-triangle" />
    </div>
</div>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1 class="ff-Azonix p-5">GET IN TOUCH</h1>
            <section id="get-in-touch" class="bg-black">
                <div class="container text-center">
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
            </section>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <section id="about-faqs" class="mt-4">
                <div class="col-12 col-lg-12 pt-5">
                    <h3 class="h1 ff-raleway mb-5 ms-3">FAQs</h3>
                    <div class="accordion ff-raleway" id="aboutAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="accordianSign me-3"> + </span> What we offer to our clients ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores, dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="accordianSign me-3"> + </span> How we help you to fulfill your RPO needs?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores, dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="accordianSign me-3"> + </span> What are the best services we offer
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores, dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="accordianSign me-3"> + </span> What are the best services we offer
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil facere veniam
                                    rem eaque ut at dolorem excepturi assumenda laudantium error iusto, officiis itaque
                                    doloribus! Eum cum temporibus esse et? Nesciunt ut necessitatibus sunt. Maiores, dolorem
                                    non deserunt inventore minus cum voluptate! Atque, incidunt aspernatur? Accusamus,
                                    aspernatur? Fugiat, deserunt rerum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>
</div>
</div>


<div class="container text-center my-5">
    <div class="neon-wrapper">
        <span class="txt ff-Azonix float-left">LINK</span>
        <span class="gradient"></span>
        <span class="dodge"></span>
    </div>
    <span class="tag-line your mx-5 ff-Azonix text-white">Your</span>
    <br>
    <span class="tag-line mx-2 ff-Azonix text-blue fs-6rem business">BUSINESS</span>
    <br>
    <span class="tag-line with mx-5 ff-Azonix text-white">With</span>
    <div class="neon-wrapper">
        <span class="txt-us ff-Azonix float-right ">US</span>
        <span class="gradient"></span>
        <span class="dodge"></span>
    </div>
</div>

<?php
include('footer.php');
?>