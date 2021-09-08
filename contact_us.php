<?php
$pageTitle = 'Contact_Us';
include('header.php');
?>


<section id="reach-us-out" class="bg-black">
    <div class="container text-center">
        <p class="h1 mt-5 ff-Azonix fs-5rem">
            Reach Us Out
        </p>

        <p class="h4 mb-5 ff-raleway">
            Why to wait to reach us ? We are always happy yo listen from you.
        </p>

        <div class="row px-2">
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
                    <button type="submit"
                        class="btn btn-outline-light btn-lg rounded-pill px-5 mx-4 mt-3 text-uppercase">Submit</button>
                </form>
            </div>
        </div>
</section>


<?php
include('footer.php');
?>