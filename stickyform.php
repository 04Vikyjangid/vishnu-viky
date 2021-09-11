<div class="sticky-form">
    <ul class="list-unstyled">
        <li>
            <button type="button" class="btn fob1" data-bs-toggle="modal" data-bs-target="#jobform" title="Job">
                J
            </button>

            <div class="modal fade" id="jobform" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-black">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">JOB</h5>
                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="get-in-touch">
                            <div class="col-12">
                                <form onsubmit="sendData(event, 'form-j')" id="form-j">
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
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select1" value="select1" checked>
                                            <label class="form-check-label" for="select1">
                                                Job
                                            </label>
                                        </div>
                                        <div class="form-check footer-radio-inline">
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select2" value="select2">
                                            <label class="form-check-label" for="select2">
                                                Internship
                                            </label>
                                        </div>

                                        <div class="form-check footer-radio-inline">
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select3" value="select3">
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
                    </div>
                </div>
            </div>
        </li>
        <li class="my-3">
            <button type="button" class="btn fob2" data-bs-toggle="modal" data-bs-target="#insternshipform"
                title="Internship">
                I
            </button>

            <div class="modal fade" id="insternshipform" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-black">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">INTERNSHIP</h5>
                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="get-in-touch">
                            <div class="col-12">
                                <form onsubmit="sendData(event, 'form-i')" id="form-i">
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
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select1" value="select1" checked>
                                            <label class="form-check-label" for="select1">
                                                Job
                                            </label>
                                        </div>
                                        <div class="form-check footer-radio-inline">
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select2" value="select2">
                                            <label class="form-check-label" for="select2">
                                                Internship
                                            </label>
                                        </div>

                                        <div class="form-check footer-radio-inline">
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select3" value="select3">
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
                    </div>
                </div>
            </div>
        </li>
        <li>
            <button type="button" class="btn fob3" data-bs-toggle="modal" data-bs-target="#collaborationform"
                title="Collaboration">
                C
            </button>
            <div class="modal fade" id="collaborationform" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-black">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">COLLABORATION</h5>
                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="get-in-touch">
                            <div class="col-12">
                                <form onsubmit="sendData(event, 'form-c')" id="form-c">
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
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select1" value="select1" checked>
                                            <label class="form-check-label" for="select1">
                                                Job
                                            </label>
                                        </div>
                                        <div class="form-check footer-radio-inline">
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select2" value="select2">
                                            <label class="form-check-label" for="select2">
                                                Internship
                                            </label>
                                        </div>

                                        <div class="form-check footer-radio-inline">
                                            <input class="form-check-input" type="radio" name="index-footer-radio"
                                                id="select3" value="select3">
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
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="sticky-social-icons">
    <ul class="list-unstyled sul">
        <li class="my-1">
            <a href="https://www.facebook.com/LinkUsSolutions" target="blank" class="text-decoration-none"><img
                    src="./media/images/home-digitalPatner-socialIcon-2.png" alt="social icon"
                    class="mx-2 social-icon facebook m-1" style="width: 10px;background-color:#000;"></a>
        </li>

        <li class="my-1">
            <a href="https://www.instagram.com/LinkUsSolutions" target="blank" class="text-decoration-none"><img
                    src="./media/images/home-digitalPatner-socialIcon-4.png" alt="social icon"
                    class="mx-2 social-icon instagram m-1" style="width: 20px;background-color:#000;">
            </a>
        </li>

        <li class="my-1">
            <a href="https://www.linkedin.com/Linkussolutions" target="blank" class="text-decoration-none"><img
                    src="./media/images/home-digitalPatner-socialIcon-3.png" alt="social icon"
                    class="mx-2 social-icon linkedin m-1" style="width: 20px;background-color:#000;">
            </a>
        </li>
        <li class="my-1">
            <a href="#" target="blank" class="text-decoration-none"><img src="./media/images/twitter-logo-4.png"
                    alt="social icon" class="social-icon m-1 twitter mx-2"
                    style="width: 20px;background-color:#000;"></a>
        </li>
        <li class="my-1">
            <a href="https://wa.me/+919343092938" target="blank" class="text-decoration-none"><img
                    src="./media/images/home-digitalPatner-socialIcon-1.png" alt="social icon"
                    class="mx-2 social-icon whatsapp m-1" style="width: 20px;background-color:#000;"></a>
        </li>

    </ul>
</div>

<style>
.fob1 {
    position: fixed;
    right: 0;
    top: 345px;
    background-color: white;
    color: black;
    z-index: 1;
    border-radius: 0;
    width: 2.5%;
}

.fob2 {
    position: fixed;
    right: 0;
    top: 385px;
    width: 2.5%;
    color: black;
    background-color: white;
    z-index: 1;
    border-radius: 0;
}

.fob3 {
    position: fixed;
    right: 0;
    top: 425px;
    color: black;
    background-color: white;
    z-index: 1;
    border-radius: 0;
    width: 2.5%;
}

.fob1:hover {
    border: white solid 2px;
    width: 3%;
    transition: 0.15s ease-in;
    /* background-color: #00e2f9; */
}

.fob2:hover {
    border: white solid 2px;
    width: 3%;
    transition: 0.15s ease-in;
    /* background-color:#db135d; */
}

.fob3:hover {
    border: white solid 2px;
    width: 3%;
    transition: 0.15s ease-in;
    /* background-color: #00e2f9; */
}

.sticky-social-icons {
    position: fixed;
    width: 50px;
    margin-top: 20px;
    transition: all 0.5s linear;
    /* box-shadow: 2px 2px 8px 0px rgba(0, 0, 0, .4); */
    z-index: 1;
}

.sul .social-list a span {
    display: none;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
}


.sul .social-list:hover #anchor span {
    padding-left: 30%;
    display: block;
}
</style>