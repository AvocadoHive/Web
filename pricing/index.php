<?php include '../segment/ipfilter.php'; ?>
<?php
    if(ip_info("Visitor", "Country") == 'Philippines'){
        header("Location: https://avocadohive.com/");
        die();
    }
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;400;600;700;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/28b5b7d92f.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/services.css">
        <link rel="stylesheet" href="/css/pricing.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <link rel="shortcut icon" href="/images/logo-icon.png" type="image/x-icon">
        <title>Our Prices | Avocado Hive</title>
    </head>
    <body>
        <div class="d-main-content">
            <div class="d-secondary-above-fold">
                <?php include '../segment/header.php'; ?>
            </div>
            <div class="d-services-page">
                <h1>Pricing</h1>
                <div class="service-sub-header">We work as a team. <span>Your T eam.</span></div>
                <div class="services-offers">
                    <div class="service-offer-item offer-one offer-low">
                        <div class="d-offer-top">
                            <div class="offer-name">Lite</div>
                            <div class="offer-price">$200</div>
                        </div>
                        <div class="offer-desc">
                            <ul>
                                <li>20 hours per month</li>
                                <li>10-15 minutes guaranteed response time</li>
                                <li>Can perform any of the following: Admin, Phone-time, Knowledge-base work.</li>
                            </ul>
                        </div>
                        <div class="offer-button">
                            <a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="hvr-buzz-ou">Book a Call</a>
                        </div>
                    </div>
                    <div class="service-offer-item offer-two offer-high">
                        <div class="d-offer-top">
                            <div class="offer-name">Persea</div>
                            <div class="offer-price">$400</div>
                        </div>
                        <div class="offer-desc">
                            <ul>
                                <li>40 hours per month</li>
                                <li>10-15 minutes guaranteed response time</li>
                                <li>Can perform any of the following: Admin, Phone-time, Knowledge-base work.</li>
                            </ul>
                        </div>
                        <div class="offer-button">
                        <a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="hvr-buzz-ou">Book a Call</a>
                        </div>
                    </div>
                    <div class="service-offer-item offer-three offer-highest">
                        <div class="offerbadge">Most Popular</div>
                        <div class="d-offer-top">
                            <div class="offer-name">Honeycomb</div>
                            <div class="offer-price">$700</div>
                        </div>
                        <div class="offer-desc">
                            <ul>
                                <li>80 hours per month</li>
                                <li>5-10 minutes guaranteed response time</li>
                                <li>Time-blocking preference</li>
                                <li>Can split into bi-weekly payments</li>
                                <li>Can perform any of the following: Admin, Phone-time, Knowledge-base work.</li>
                            </ul>
                        </div>
                        <div class="offer-button">
                        <a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="hvr-buzz-ou">Book a Call</a>
                        </div>
                    </div>
                    <div class="service-offer-item offer-four offer-high">
                        <div class="d-offer-top">
                            <div class="offer-name">Avocado</div>
                            <div class="offer-price">$1,400</div>
                        </div>
                        <div class="offer-desc">
                            <ul>
                                <li>160 hours per month</li>
                                <li>5 minutes guaranteed response time</li>
                                <li>Time-blocking preference</li>
                                <li>Can split into bi-weekly payments</li>
                                <li>Can perform any of the following: Admin, Phone-time, Knowledge-base work.</li>
                            </ul>
                        </div>
                        <div class="offer-button">
                        <a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="hvr-buzz-ou">Book a Call</a>
                        </div>
                    </div>
                    <div class="service-offer-item offer-five offer-low custom-offer">
                        <div class="d-offer-top">
                            <div class="offer-name">Customized Hive</div>
                        </div>
                        <div class="offer-desc">
                            <ul>
                                <li>Our team can build a specific plan for you such as</li>
                                <li>Below 20 hours or Postpaid Arrangement</li>
                                <li>Exclusive Teams</li>
                            </ul>
                        </div>
                        <div class="offer-button">
                        <a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="hvr-buzz-ou">Book a Call</a>
                        </div>
                    </div>
                </div>
                

                <div class="price-comparison">
                    <div class="d-why-avocado" style="margin-bottom:0;">
                    <h2>Let Us <span>Compare</span></h2>
                    </div>
                    <div class="comp-table">
                        <div class="comp-row comp-header">
                            <div class="d-base-cell cell-one">&nbsp;</div>
                            <div class="d-base-cell cell-two">Lite</div>
                            <div class="d-base-cell cell-three">Persea</div>
                            <div class="d-base-cell cell-four">Honeycomb</div>
                            <div class="d-base-cell cell-five">Avocado</div>
                            <div class="d-base-cell cell-six">Customized Hive</div>
                        </div>
                        <div class="comp-row comp-item green-base">
                            <div class="d-base-cell cell-one">Hours</div>
                            <div class="d-base-cell cell-two">20</div>
                            <div class="d-base-cell cell-three">40</div>
                            <div class="d-base-cell cell-four">80</div>
                            <div class="d-base-cell cell-five">160</div>
                            <div class="d-base-cell cell-six">
                                <ul>
                                    <li>Below 20 hours</li>
                                    <li>Postpaid arrangement</li>
                                    <li>Exclusive Teams</li>
                                </ul>
                            </div>
                        </div>
                        <div class="comp-row comp-item">
                            <div class="d-base-cell cell-one">Guaranteed Response Time <span>(minutes)</span></div>
                            <div class="d-base-cell cell-two">10-15</div>
                            <div class="d-base-cell cell-three">10-15</div>
                            <div class="d-base-cell cell-four">5-10</div>
                            <div class="d-base-cell cell-five">5-10</div>
                            <div class="d-base-cell cell-six">&nbsp;</div>
                        </div>
                        <div class="comp-row comp-item green-base">
                            <div class="d-base-cell cell-one">Time-blocking preference</div>
                            <div class="d-base-cell cell-two mark-x"><i class="fa-solid fa-xmark"></i></div>
                            <div class="d-base-cell cell-three mark-x"><i class="fa-solid fa-xmark"></i></div>
                            <div class="d-base-cell cell-four mark-check"><i class="fa-solid fa-check"></i></div>
                            <div class="d-base-cell cell-five mark-check"><i class="fa-solid fa-check"></i></div>
                            <div class="d-base-cell cell-six">&nbsp;</div>
                        </div>
                        <div class="comp-row comp-item">
                            <div class="d-base-cell cell-one">Prepaid</div>
                            <div class="d-base-cell cell-two mark-check"><i class="fa-solid fa-check"></i></div>
                            <div class="d-base-cell cell-three mark-check"><i class="fa-solid fa-check"></i></div>
                            <div class="d-base-cell cell-four mark-check"><i class="fa-solid fa-check"></i></div>
                            <div class="d-base-cell cell-five mark-check"><i class="fa-solid fa-check"></i></div>
                            <div class="d-base-cell cell-six">&nbsp;</div>
                        </div>
                        <div class="comp-row comp-item green-base">
                            <div class="d-base-cell cell-one">Prepaid payment arrangements</div>
                            <div class="d-base-cell cell-two mark-x"><i class="fa-solid fa-xmark"></i></div>
                            <div class="d-base-cell cell-three mark-x"><i class="fa-solid fa-xmark"></i></div>
                            <div class="d-base-cell cell-four">Can divide into two billings</div>
                            <div class="d-base-cell cell-five">Can divide into two billings</div>
                            <div class="d-base-cell cell-six">&nbsp;</div>
                        </div>
                    </div>
                </div>

                <div class="d-why-content-full">
                    <div class="d-why-avocado" style="display:none;">
                        <h2>Why <span>AvocadoHive</span></h2>
                        <div class="d-reason-options">
                            <div class="d-ref-cols ops1">
                                <div class="d-why-icon">
                                    <img src="/images/why-1-icon.png" alt="">
                                </div>
                                <div class="d-why-into">Ensured Operations</div>
                                <div class="d-why-desc">Enjoy seamless operations with no disruptions from absences, or outages.</div>
                            </div>
                            <div class="d-ref-cols ops2">
                                <div class="d-why-icon">
                                    <img src="/images/why-2-icon.png" alt="">
                                </div>
                                <div class="d-why-into">Aligned Vision</div>
                                <div class="d-why-desc">Aligned with your intentions , whether growing your law firm, focusing on lawyering, or enhancing work-life balance.</div>
                            </div>
                            <div class="d-ref-cols ops3">
                                <div class="d-why-icon">
                                    <img src="/images/why-3-icon.png" alt="">
                                </div>
                                <div class="d-why-into">Scalable Solutions</div>
                                <div class="d-why-desc">Eliminate disappointment and retraining costs triggered by employee turnover with our risk-free system for knowledge base development.</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-we-offer">
                        <h2>We <span>Offer</span></h2>
                        <div class="sub-header">Flexible coverage options for every growing Law Firm.</div>
                        <div class="d-we-options">
                            <div class="d-we-items">
                                <div class="d-icon">
                                    <img src="/images/we-1.png" alt="">
                                </div>
                                <div class="d-item-title">Admin Tasks</div>
                                <div class="d-item-desc">Email, Calendar, and Law Firm CRM management, up to any admin tasks foreseeable.</div>
                            </div>
                            <div class="d-we-items">
                                <div class="d-icon">
                                    <img src="/images/we-2.png" alt="">
                                </div>
                                <div class="d-item-title">Phone Time Tasks</div>
                                <div class="d-item-desc">Day to day Phone-time needs like reception, intake, up to case coordination calls.</div>
                            </div>
                            <div class="d-we-items">
                                <div class="d-icon">
                                    <img src="/images/we-3.png" alt="">
                                </div>
                                <div class="d-item-title">Case Life-Cycle Management</div>
                                <div class="d-item-desc">Case management support in ensuring a seamless fulfillment from case inception to end.</div>
                            </div>
                            <div class="d-we-items">
                                <div class="d-icon">
                                    <img src="/images/we-4.png" alt="">
                                </div>
                                <div class="d-item-title">Legal Research</div>
                                <div class="d-item-desc">Legal research using the latest legal technology tools from basic up to any complex topics</div>
                            </div>
                            <div class="d-we-items">
                                <div class="d-icon">
                                    <img src="/images/we-5.png" alt="">
                                </div>
                                <div class="d-item-title">Legal Drafting</div>
                                <div class="d-item-desc">Assist with your drafting needs  through the combination of a legal mind, collaboration, and legal technology tools</div>
                            </div>
                            <div class="d-we-items">
                                <div class="d-icon">
                                    <img src="/images/we-6.png" alt="">
                                </div>
                                <div class="d-item-title">Document Review</div>
                                <div class="d-item-desc">From document formatting to making sure all the crucial points of your documents are complete.</div>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <div class="faq">
                    <div class="d-header">
                        <div class="d-main-header">TOP 5 FAQS </div>
                        <div class="d-sub-header">for <strong>PRICING</strong></div>
                    </div>
                    <div class="d-faq-content">
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Can I adjust my hours from month to month?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>Yes, you can. You can choose 40 hours this month, adjust to 80 hours the next month, and revert back to 20 hours during your firm’s off-season. You don’t have to worry about high-overhead costs during slow months. You do you. We’ll adjust to your needs.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">What are the payment terms?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                    <p>Save for customized plans, we charge prepaid subject to fair use, roll-over, and refund policies attached to your services agreement. However, Honeycomb and Avocado Plans are prepaid plans which you can split the payment into two.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Will I be paying for training costs?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>We normally don’t charge training hours save for cases of prolonged & time exhaustive training which can be discussed during the discovery call. We won’t also charge you for the transition cost which is the time spent on setting up the things needed to integrate and be operational for you e.g. Onboarding, Setting-up of tools etc, going over your script and processes.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">What is time-blocking preference?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>This is a feature that we allow for the Honeycomb, and Avocado Plans or the 80 hours and 160 hours plan respectively. Your designated servicing team member will not cater to any other clients or any other needs during the agreed work hours with you.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">What is the guaranteed response time?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>We will respond to your messages or inquiries within the agreed guaranteed response time for your availed plan. Normally, we respond much faster than the guaranteed response time. Our internal dashboard makes sure that we respond to you not later than your guaranteed response time. If we fail to deliver on that promise, that hour is free and charged on the house.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-footer">
                    <?php include '../segment/footer.php'; ?>
                    <?php include '../segment/footer-info.php'; ?>
                </div>
            </div>
            <?php include '../segment/scripts.php'; ?>
            
        </div>
    </body>
</html>