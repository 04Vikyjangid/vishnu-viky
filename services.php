<?php
$pageTitle = 'Our Services';
include('header.php');
include('stickyform.php');
?>


<div class="container">
    <div class="text-animation py-5 my-5 mx-4">
        <div class="service-multitex">
            <div class="static-txt">WE PROVIDE </div>
            <ul class="dynamic-txts">
                <li><span>RPO</span></li>
                <li><span>DIGITAL SOLUTIONS</span></li>
                <li><span>IT SOLUTIONS</span></li>
                <li><span>EVENT MANAGEMENT</span></li>
                <li><span>TRAINING & DEVELOPMENT</span></li>
            </ul>
        </div>
    </div>
    <section class="service-tab">
        <nav class="my-5 ">
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
                        <h1 class="ff-azonix my-5">RECRUITMENT PROCESS <br> OUTSOURCING</h1>
                        <h4 class="ff-raleway my-5">As RPO LinkUsSolution provides a company’s HR or Resource function and placing people into the client's organization. We deliver staff, technology, and methodology as per client's requirement.</h4>
                    </div>
                    <div class="rpo-sub-services">
                        <div class="main-row-1">
                            <div class="row">
                                <div class="col-4 rpo-sub-services-1">
                                    <button type="button" class="btn rpo-sub-services-1-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-1">
                                        <img src="./media/images/RPO/RPO/talent-aquisition.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Talent Acquisition</h5>
                                                        <p>LinkUsSolution provides Talent Acquisition and here we deals mostly with recruiting and onboarding. It includes recruiting, tracking and interviewing job candidates, and Zonboarding and training new employees.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-2">
                                    <button type="button" class="btn rpo-sub-services-2-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-2">
                                        <img src="./media/images/RPO/RPO/pre-employment-screening.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Pre-Employment Screening</h5>
                                                        <p>LinkUsSolution provides Pre-Employment screening which cater the hiring process in order to eliminate a large number of unsuitable applicants without the need for a traditional interview.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-3">
                                    <button type="button" class="btn rpo-sub-services-3-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-3">
                                        <img src="./media/images/RPO/RPO/early-career.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Early Career/Graduate Recruitment</h5>
                                                        <p>LinkUsSolution providing the availability of Graduate recruitment or campus recruitment whereby employers undertake an organised program of attracting and hiring students who are about to graduate from colleges, and universities with less cost.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 rpo-sub-services-4">
                                        <button type="button" class="btn rpo-sub-services-4-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-4">
                                            <img src="./media/images/RPO/RPO/over-all-handling-of-hr.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="rpo-sub-services-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Overall Handling of HR</h5>
                                                            <p>LinkUsSolution providing the Overall Handling of HR. As we deal with the hiring, administration, and training of staff. So whether new staff or old staff we cater all needs as per requirements of our client.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn rpo-sub-services-5-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-5">
                                            <img src="./media/images/RPO/RPO/talent-engagement.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="rpo-sub-services-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Talent Engagement</h5>
                                                            <p>LinkUsSolution working for Talent Engagement as well, where attracting the right people to your organisation and getting candidates and employees to fully engage and connect with your company's values, goals, and principles.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-row-2">
                            <div class="row">
                                <div class="col-4 rpo-sub-services-6">
                                    <button type="button" class="btn rpo-sub-services-6-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-6">
                                        <img src="./media/images/RPO/RPO/candidate-management.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Candidate Management</h5>
                                                        <p>LinkUsSolution help to Build and maintain a healthy relationship between employer and employee. For that we recruits both active and passive candidates. Ultimately, candidate management allows recruiters to make better matches between candidates and clients. It further goes with relationships that recruiters build with candidates & allow them to develop a diverse pool of talent and to exercise good judgment when putting candidates forward for job vacancies. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-7">
                                    <button type="button" class="btn rpo-sub-services-7-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-7">
                                        <img src="./media/images/RPO/RPO/performance-management.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Performance Management</h5>
                                                        <p>Performance management is a corporate management tool that helps managers monitor and evaluate employees' work. Performance management's goal is to create an environment where people can perform to the best of their abilities to produce the highest-quality work most efficiently and effectively.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-8">
                                    <button type="button" class="btn rpo-sub-services-8-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-8">
                                        <img src="./media/images/RPO/RPO/performance-appraisal.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Performance Appraisal </h5>
                                                        <p>A performance appraisal is a regular review of an employee's job performance and overall contribution to a company. Also known as an annual review, performance review or evaluation, or employee appraisal, a performance appraisal evaluates an employee's skills, achievements, and growth--or lack thereof.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 rpo-sub-services-9">
                                    <button type="button" class="btn rpo-sub-services-9-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-9">
                                        <img src="./media/images/RPO/RPO/potential-appraisal-and-management.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Potential Appraisal & Management</h5>
                                                        <p>Potential appraisal is a future – oriented appraisal whose main objective is to identify and evaluate the potential of the employees to assume higher positions and responsibilities in the organizational hierarchy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn rpo-sub-services-10-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-10">
                                        <img src="./media/images/RPO/RPO/competency-analysis.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Competency Analysis </h5>
                                                        <p>Competency Analysis is a tool used to measure knowledge, skills, and capabilities either for analyzing a company's products, services, human capital, or it can be used in education in order to analyze the core competency in student performance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-row-3">
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4 rpo-sub-services-11">
                                    <button type="button" class="btn rpo-sub-services-11-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-11">
                                        <img src="./media/images/hexagon.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Competency Mapping</h5>
                                                        <p>Competency mapping is the process of identifying the specific skills, knowledge, abilities, and behaviours required to operate effectively in a specific trade, profession, or job position. ... All of our competency maps are all-encompassing, including professional, personal, and technical competencies.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 rpo-sub-services-12">
                                    <button type="button" class="btn rpo-sub-services-12-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-12">
                                        <img src="./media/images/RPO/RPO/performance-counselling.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Performance Counselling</h5>
                                                        <p>Performance Counseling refers to the help provided by a manager to his subordinates in objectively analyzing their performance. It attempts to help the employee in: Understanding himself - his strengths and weaknesses. Improving his professional and interpersonal competence by giving him feedback about his behavior.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 rpo-sub-services-13">
                                    <button type="button" class="btn rpo-sub-services-13-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-13">
                                        <img src="./media/images/RPO/RPO/succession-planning.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Succession Planning</h5>
                                                        <p>Succession planning is a strategy for passing on leadership roles—often the ownership of a company—to an employee or group of employees. Also known as "replacement planning," it ensures that businesses continue to run smoothly after a company's most important people move on to new opportunities, retire, or pass away.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4 rpo-sub-services-14">
                                    <button type="button" class="btn rpo-sub-services-14-btn" data-bs-toggle="modal" data-bs-target="#rpo-sub-services-14">
                                        <img src="./media/images/RPO/RPO/intervention-management.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="rpo-sub-services-14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Interventition Management</h5>
                                                        <p>This research defines a management intervention as an interaction between a manager. and employee. The interaction could be initiated by either party and would generally include some form of specific communication in one direction or both.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-digital-marketing" role="tabpanel" aria-labelledby="nav-digital-marketing-tab">
                <div class="container">
                    <div class="tab-heading my-5 text-center">
                        <h1 class="ff-azonix my-5">DIGITAL MARKETING & IT<br> SOLUTIONS</h1>
                        <h4 class="ff-raleway my-5">As IT Solutions LinkUsSolution provides a set of related software programs and/or services that are sold as a single package. LinkUs Solutions will provide several different services that helps customers with the guidance and support needed to maintain efficient and effective IT systems.
                        </h4>
                    </div>
                    <div class="digital-sub-services">
                        <div class="main-row-1">
                            <div class="row">
                                <div class="col-4 digital-sub-services-1">
                                    <button type="button" class="btn digital-sub-services-1-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-1">
                                        <img src="./media/images/DM/branding.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="digital-sub-services-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Brand Consultation</h5>
                                                        <p>LinkUs Solutions is here to provide the general and in-depth marketing expertise, brand analysis, and solutions for successfully selling the products attaining the business goals and objectives.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 digital-sub-services-2">
                                    <button type="button" class="btn digital-sub-services-2-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-2">
                                        <img src="./media/images/DM/Digital-Marketing.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="digital-sub-services-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Suggesting Marketing Strategies</h5>
                                                        <p>LinkUs Solutions will help to make marketing strategy to a client for reaching prospective consumers and turning them into customers of their products or services. So LinkUs Solutions is committed to make marketing strategies as it contains the company’s value proposition, key brand messaging, data on target customer demographics, and other high-level elements.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 digital-sub-services-3">
                                    <button type="button" class="btn digital-sub-services-3-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-3">
                                        <img src="./media/images/DM/merchandizing.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="digital-sub-services-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">New product Launch</h5>
                                                        <p>LinkUs Solutions will help their clients to get the strategies and stages for launching a new product effectively. And will also help to get through the technologies which will be helpful in launching a new product.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 digital-sub-services-4">
                                        <button type="button" class="btn digital-sub-services-4-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-4">
                                            <img src="./media/images/hexagon.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="digital-sub-services-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Segmentation</h5>
                                                            <p>To save the client's time and efforts LinkUs Solution is here to give them the service of Segmentation which means is to divide the marketplace into parts, or segments, which are definable, accessible, actionable, and profitable and have a growth potential.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn digital-sub-services-5-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-5">
                                            <img src="./media/images/hexagon.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="digital-sub-services-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">HEADING</h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dolorum tenetur molestias repellendus veritatis soluta
                                                                deleniti in nam ex pariatur, tempora nemo recusandae
                                                                sequi laboriosam totam ad obcaecati eius dignissimos
                                                                ipsa. Asperiores molestiae, labore possimus, numquam
                                                                quidem, quasi animi suscipit distinctio velit cumque
                                                                vitae. Iusto illum facere ut odio explicabo quam!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-row-2">
                            <div class="row">
                                <div class="col-4 rpo-sub-services-6">
                                </div>
                                <div class="col-4 digital-sub-services-7">
                                    <button type="button" class="btn digital-sub-services-7-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-7">
                                        <img src="./media/images/hexagon.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="digital-sub-services-7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">HEADING</h5>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dolorum tenetur molestias repellendus veritatis soluta
                                                            deleniti in nam ex pariatur, tempora nemo recusandae sequi
                                                            laboriosam totam ad obcaecati eius dignissimos ipsa.
                                                            Asperiores molestiae, labore possimus, numquam quidem, quasi
                                                            animi suscipit distinctio velit cumque vitae. Iusto illum
                                                            facere ut odio explicabo quam!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 rpo-sub-services-8">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 digital-sub-services-9">
                                    <button type="button" class="btn digital-sub-services-9-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-9">
                                        <img src="./media/images/hexagon.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="digital-sub-services-9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">HEADING</h5>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dolorum tenetur molestias repellendus veritatis soluta
                                                            deleniti in nam ex pariatur, tempora nemo recusandae sequi
                                                            laboriosam totam ad obcaecati eius dignissimos ipsa.
                                                            Asperiores molestiae, labore possimus, numquam quidem, quasi
                                                            animi suscipit distinctio velit cumque vitae. Iusto illum
                                                            facere ut odio explicabo quam!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn digital-sub-services-10-btn" data-bs-toggle="modal" data-bs-target="#digital-sub-services-10">
                                        <img src="./media/images/hexagon.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="digital-sub-services-10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">HEADING</h5>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dolorum tenetur molestias repellendus veritatis soluta
                                                            deleniti in nam ex pariatur, tempora nemo recusandae sequi
                                                            laboriosam totam ad obcaecati eius dignissimos ipsa.
                                                            Asperiores molestiae, labore possimus, numquam quidem, quasi
                                                            animi suscipit distinctio velit cumque vitae. Iusto illum
                                                            facere ut odio explicabo quam!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-pay-roll" role="tabpanel" aria-labelledby="nav-pay-roll-tab">
                <div class="container">
                    <div class="tab-heading my-5 text-center">
                        <h1 class="ff-azonix my-5">PAYROLL MARKETING & <br> MANAGEMENT</h1>
                        <h4 class="ff-raleway my-5">If you are looking for the payroll management process, LinkUs Solution is here to administrate a company's employee's financial records. This would include details of the employee's salaries, incentives, bonuses, deductions, and net pay.</h4>
                    </div>
                    <div class="digital-sub-services">
                        <div class="main-row-1">
                            <div class="row">
                                <div class="col-4 payroll-sub-services-1">
                                    <button type="button" class="btn payroll-sub-services-1-btn" data-bs-toggle="modal" data-bs-target="#payroll-sub-services-1">
                                        <img src="./media/images/PAYROLL/payroll-software.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="payroll-sub-services-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Payroll Software Providers</h5>
                                                        <p>LinkUs Solutions taking the responsibility of payroll management so we are also providing the software for payroll management. Payroll software can help organizations of all sizes to maintain compliance with tax laws and other financial regulations with reduce costs. Therefore, an application-based solution saves valuable time as editing of existing payroll is simplified and semi-automated.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 payroll-sub-services-2">
                                    <button type="button" class="btn payroll-sub-services-2-btn" data-bs-toggle="modal" data-bs-target="#payroll-sub-services-2">
                                        <img src="./media/images/PAYROLL/payroll-mngmnt.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="payroll-sub-services-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Management of Payroll</h5>
                                                        <p>In this process, LinkUs Solutions uses software applications to record employee details and manage salaries, track hours, manage to leave, bonuses, and deductions among other functions of payroll management including financial records.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 payroll-sub-services-3">
                                    <button type="button" class="btn payroll-sub-services-3-btn" data-bs-toggle="modal" data-bs-target="#payroll-sub-services-3">
                                        <img src="./media/images/PAYROLL/compensation-reward.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="payroll-sub-services-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Compensation & Reward Management</h5>
                                                        <p>Compensation management, also known as wage and salary administration, remuneration management, or reward management, is concerned with designing and implementing a total compensation package. Compensation is what employees receive in exchange for their work.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 payroll-sub-services-4">
                                        <button type="button" class="btn payroll-sub-services-4-btn" data-bs-toggle="modal" data-bs-target="#payroll-sub-services-4">
                                            <img src="./media/images/PAYROLL/payroll-database-mngmnt.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="payroll-sub-services-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Payroll Database Management</h5>
                                                            <p>Proper management of the payroll database, accounting for relevant factors, which include overtime, vacations, and bonuses, can become quite tricky. Also, varying taxes and deductions may apply to different staff. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn payroll-sub-services-5-btn" data-bs-toggle="modal" data-bs-target="#payroll-sub-services-5">
                                            <img src="./media/images/hexagon.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="payroll-sub-services-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">HEADING</h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dolorum tenetur molestias repellendus veritatis soluta
                                                                deleniti in nam ex pariatur, tempora nemo recusandae
                                                                sequi laboriosam totam ad obcaecati eius dignissimos
                                                                ipsa. Asperiores molestiae, labore possimus, numquam
                                                                quidem, quasi animi suscipit distinctio velit cumque
                                                                vitae. Iusto illum facere ut odio explicabo quam!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-training" role="tabpanel" aria-labelledby="nav-nav-training-tab">
                <div class="container">
                    <div class="tab-heading my-5 text-center">
                        <h1 class="ff-azonix my-5">TRAINING & <br> DEVELOPMENT</h1>
                        <h4 class="ff-raleway my-5">Looking for enhancing your knowledge, skills and competencies? Look no further than LinkUs Solutions. In today’s world full of competition, we at LinkUs aim at nourishing the talent of not only individuals, but also the organisations. With best practice knowledge, our training experts help our customers achieve workforce performance.</h4>
                    </div>
                    <div class="digital-sub-services">
                        <div class="main-row-1">
                            <div class="row">
                                <div class="col-4 training-sub-services-1">
                                    <button type="button" class="btn training-sub-services-1-btn" data-bs-toggle="modal" data-bs-target="#training-sub-services-1">
                                        <img src="./media/images/TR/corporate-employer-training.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="training-sub-services-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Corporate Training to the employer</h5>
                                                        <p>At LinkUs Solutions, we focus on empowering organizations to reach optimal performance results. We are determined with helping customers build training capacity and advance their practices. Our professionals can assist your company with the implementation of new processes and technology through customized training solutions.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 training-sub-services-2">
                                    <button type="button" class="btn training-sub-services-2-btn" data-bs-toggle="modal" data-bs-target="#training-sub-services-2">
                                        <img src="./media/images/TR/corporate-employee-training.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="training-sub-services-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Corporate Training to the employee</h5>
                                                        <p>Training and developing an employee doesn’t simply help their growth but pushes the company to grow as well. WE ARE HERE TO DO IT FOR YOU! We at LinkUs, prepare the employee for the current as well as future jobs, by providing them with learning opportunities to increase their capacities, to undertake more challenging and complex tasks. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 training-sub-services-3">
                                    <button type="button" class="btn training-sub-services-3-btn" data-bs-toggle="modal" data-bs-target="#training-sub-services-3">
                                        <img src="./media/images/TR/corporate-student-training.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="training-sub-services-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Corporate Training to students</h5>
                                                        <p>Corporate training helps students transition smoothly into corporate life. If correct guidance and inputs are given at the right time and the students are groomed properly, they can easily grab good opportunities early and become successful in their chosen career. LinkUs aims at helping students gain enough confidence to work with different people in teams and get over their inhibitions. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 training-sub-services-4">
                                        <button type="button" class="btn training-sub-services-4-btn" data-bs-toggle="modal" data-bs-target="#training-sub-services-4">
                                            <img src="./media/images/TR/personality-development.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="training-sub-services-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Training based on enhancing soft skills and personality</h5>
                                                            <p>For Enhancing Soft Skills and Personality training LinkUs Solutions will train our clients to develop qualities like emotional intelligence, effective communication skills, self-confidence, friendliness, etiquette, and more. This will lead to the all-around development of our clients.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn training-sub-services-5-btn" data-bs-toggle="modal" data-bs-target="#training-sub-services-5">
                                            <img src="./media/images/TR/HR-DEV.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="training-sub-services-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Human Resource Development Audit</h5>
                                                            <p>HRD audit is useful to achieve the organizational goal and also is a vital tool which helps to assess the effectiveness of HR functions of an organization and helps company remain competitive.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-councelling" role="tabpanel" aria-labelledby="nav-councelling-tab">
                <div class="container">
                    <div class="tab-heading my-5 text-center">
                        <h1 class="ff-azonix my-5">COUNCELLING</h1>
                        <h4 class="ff-raleway my-5">Facing job dissatisfaction? Confused about the right career path? Then all you need is a counselling session from great professionals. From helping choose the right course, college to choosing the right job, LinkUs Solutions is here for you!</h4>
                    </div>
                    <div class="councelling-sub-services">
                        <div class="main-row-1">
                            <div class="row">
                                <div class="col-6 councelling-sub-services-4">
                                    <button type="button" class="btn councelling-sub-services-4-btn" data-bs-toggle="modal" data-bs-target="#councelling-sub-services-4">
                                        <img src="./media/images/COUNCELLING/job-counselling.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="councelling-sub-services-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Job Counselling</h5>
                                                        <p>Only a few people can find it easy to strike the right balance between home demands, personal care, and work responsibilities. Most fail at it. At LinkUs, with job counselling, we aim at developing the necessary skills in them to make healthy lifestyle choices. Employee counselling helps both the organization and the employee as motivated, charged, and loyal employees will be the best brand ambassadors for your brand and business.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn councelling-sub-services-5-btn" data-bs-toggle="modal" data-bs-target="#councelling-sub-services-5">
                                        <img src="./media/images/COUNCELLING/career-counselling.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="councelling-sub-services-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Career Counselling</h5>
                                                        <p>We at LinkUs offer personalized career counselling to students. The students receive guidance from our professional counsellors that provide expert advice on the potentials, aptitude, motivations and skills.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-corporate-events" role="tabpanel" aria-labelledby="nav-corporate-events-tab">
                <div class="container">
                    <div class="tab-heading my-5 text-center">
                        <h1 class="ff-azonix my-5">CORPORATE EVENTS</h1>
                        <h4 class="ff-raleway my-5">Stressing over planning and organising an event? We are here to take away your stress! LinkUs Solutions is your one-stop event solutions provider that offers a wide range of corporate event management and creative services.</h4>
                    </div>
                    <div class="corporate-sub-services">
                        <div class="main-row-1">
                            <div class="row">
                                <div class="col-4 corporate-sub-services-1">
                                    <button type="button" class="btn corporate-sub-services-1-btn" data-bs-toggle="modal" data-bs-target="#corporate-sub-services-1">
                                        <img src="./media/images/EV/stress-management.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="corporate-sub-services-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Stress Management/ Stress Busting Activity</h5>
                                                        <p>Stress naturally occurs in the workplace. It can cause problems with concentration and teamwork and ultimately productivity. We are here to make sure that you don’t have to face such problems. We offer exciting activities to lighten up the stress at the workplace. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 corporate-sub-services-2">
                                    <button type="button" class="btn corporate-sub-services-2-btn" data-bs-toggle="modal" data-bs-target="#corporate-sub-services-2">
                                        <img src="./media/images/EV/happiness-activity.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="corporate-sub-services-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Happiness Activities (To increase happiness quotient)</h5>
                                                        <p>It’s hard to be creative and successful at work when we are feeling negative and stressed. Therefore, it is necessary to keep a happy and healthy workplace environment, and LinkUs is here to help you with that. Our Happiness activities help employees to increase optimism, boost brain function, and build team trust through shared experiences.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 corporate-sub-services-3">
                                    <button type="button" class="btn corporate-sub-services-3-btn" data-bs-toggle="modal" data-bs-target="#corporate-sub-services-3">
                                        <img src="./media/images/EV/motivational-activites.png" class="w-50">
                                    </button>
                                    <div class="modal fade" id="corporate-sub-services-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-black">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="get-in-touch">
                                                    <div class="offset-md-2 col-12 col-md-8">
                                                        <h5 class="ff-anzonix primary-blue">Motivational Activities</h5>
                                                        <p>A lack of motivation is one of the key productivity killers in the modern workplace. Thinking of how to motivate your workforce? Leave that task to LinkUs! We are here with some great engaging and motivating activities to make sure your workforce productivity doesn’t get affected.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 corporate-sub-services-4">
                                        <button type="button" class="btn corporate-sub-services-4-btn" data-bs-toggle="modal" data-bs-target="#corporate-sub-services-4">
                                            <img src="./media/images/EV/relaxing-activities.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="corporate-sub-services-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Relaxing Activities</h5>
                                                            <p>Office stress is one of the main culprits harming productivity and health at the workplace. But we are here to take care of it. We at LinkUs offer activities and exercises, which freshen up the employee’s mood and give their mind some relaxation.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn corporate-sub-services-5-btn" data-bs-toggle="modal" data-bs-target="#corporate-sub-services-5">
                                            <img src="./media/images/EV/ergonomics-exercises.png" class="w-50">
                                        </button>
                                        <div class="modal fade" id="corporate-sub-services-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-black">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="get-in-touch">
                                                        <div class="offset-md-2 col-12 col-md-8">
                                                            <h5 class="ff-anzonix primary-blue">Ergonomics Exeercises</h5>
                                                            <p>An average workday means sitting at a desk and computer for eight or more hours. This type of work can lead to a host of musculoskeletal problems such as back pain, spinal disc hernias, neck and shoulder pain and more. LinkUs Solutions offers Ergonomics Exercises which removes risk factors that lead to musculoskeletal injuries and allows for improved human performance and productivity.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include('footer.php');
?>