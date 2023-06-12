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
        <!-- <link rel="stylesheet" href="/css/services.css"> -->
        <link rel="stylesheet" href="/css/how_we_work.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <link rel="shortcut icon" href="/images/logo-icon.png" type="image/x-icon">
        <title>How we Work | Avocado Hive</title>
    </head>
    <body>
        <div class="d-main-content">
            <div class="d-secondary-above-fold">
                <?php include '../segment/header.php'; ?>
            </div>
            <div class="d-how-we-work-page">
                <h1>A team can achieve <span>more things for your firm</span> than doing it all alone.</h1>
                <div class="d-service-features">
                    <div class="d-features-inner">
                        <div class="d-feat-item">
                            <div class="d-feat-image">
                                <img src="/images/service-1.png" alt="">
                            </div>
                            <div class="d-feat-text">
                                <div class="d-feat-right-inner">
                                    <h3>Work With a Team</h3>
                                    <p>Bees outlived the dinosaurs and they are able to thrive in their environment because they work cohesively as a team. We take inspiration from that minus the bee sting.</p>
                                    <p>We are structured as a team in order to ensure zero downtime on operations, ensured knowledgebase retention, and flexibility on expertise and delivery of tasks.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-feat-item">
                            <div class="d-feat-text">
                                <div class="d-feat-left-inner">
                                    <h3>We can do this for you</h3>
                                    <p>Anything from Admin, Phone-time, Case management, up to complex legal technical work. We could also provide what a single virtual legal assistant or virtual paralegal can do for you minus the hassle of vetting and finding them individually or retraining once they move on from your firm. </p>
                                    <p>If your needs are much more complex, we can provide you with a customized Front Office, Back-Office, or Entire Office management coverage.</p>
                                </div>
                            </div>
                            <div class="d-feat-image">
                                <img src="/images/service-2.png" alt="">
                            </div>
                        </div>

                        <div class="d-feat-item">
                            <div class="d-feat-image">
                                <img src="/images/service-3.png" alt="">
                            </div>
                            <div class="d-feat-text">
                                <div class="d-feat-right-inner">
                                    <h3>Not only that.</h3>
                                    <p>We don’t charge transition cost. You just need to complete a simple 3-Step process before you get serviced.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-started">
                    <h2>How to get Started</h2>
                    <div class="started-columns">
                        <div class="d-column-item">
                            <div class="d-col-icon"><i class="fa-solid fa-phone-volume"></i></div>
                            <div class="d-col-title">
                                <span class="one-top">Discovery Call:</span><span class="two-top">Pick your plan<br />& inclusions </span>
                            </div>
                            <div class="d-col-desc">We will send you an onboarding form that will capture your onboarding schedule preferences, expectations, and list of tasks.</div>
                        </div>
                        <div class="d-column-item">
                            <div class="d-col-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                            <div class="d-col-title"><span class="one-top">Get Onboarded</span><span class="two-top">ASAP</span></div>
                            <div class="d-col-desc">We will arrange an onboarding call together with your designated team so we can onboard you to the Avocado Hive Team System.</div>
                        </div>
                        <div class="d-column-item">
                            <div class="d-col-icon"><i class="fa-solid fa-code-merge"></i></div>
                            <div class="d-col-title"><span class="one-top">Integrate & </span><span class="two-top">Reiterate</span></div>
                            <div class="d-col-desc">We will capture your needs, build a back-up system, and make sure you can scale on-demand using our Avocado Hive Team System.</div>
                        </div>
                    </div>
                </div>
                <div class="guaranteed-section">
                    <div class="guaranteed-item gr-one">
                        <div class="d-gone-icon"><i class="fa-solid fa-people-robbery"></i></div>
                        <div class="d-gone-header">Guaranteed response time </div>
                        <div class="d-gone-desc">Depending on your selected plan, we will reach out or reply to you not later than your guaranteed response time. Most of the time earlier than the guaranty</div>
                    </div>
                    <div class="guaranteed-item gr-two">
                        <div class="d-gone-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                        <div class="d-gone-header">Time-blocking preference </div>
                        <div class="d-gone-desc">(For Honeycomb & Avocado Plans) Your designated team member will not cater to any other needs from other clients during your chosen work hours.</div>
                    </div>
                </div>
                <div class="faq">
                    <div class="d-header">
                        <div class="d-main-header">TOP 5 FAQS </div>
                        <div class="d-sub-header">for <strong>HOW WE WORK</strong></div>
                    </div>
                    <div class="d-faq-content">
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Do you work in US hours?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>Yes, we work 9-5 US time whether Eastern, Central, or Pacific time.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Will I be working with the same people?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                    <p>Yes, and No. </p>
                                    <p>Depending on the plan you’ve availed, or the circumstances involved, we will designate a team member who will work for you on a daily basis save for emergency cases wherein the Avocado Hive Team System will take care of the tasks for you.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Are the daily operations ensured?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>Yes. You don’t have to worry about absences, leaves, or resignation. Our Avocado Hive Team System will take care of it for you. Guaranteed daily operations – Talent Attrition Safe system.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Do you cater to all specializations?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>We cater to admin, and phone-time tasks for all specializations. For tasks outside admin, and phone-time we can only cater to specific competencies which will be discussed to you during the discovery call.</p>
                            </div>
                        </div>
                        <div class="d-faq-item">
                            <div class="d-faq-header">
                                <div class="d-text-part">Are your team members well-versed with Clio, My Case etc. X-name of legal tool?</div>
                                <div class="d-text-ico"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                            </div>
                            <div class="d-faq-desc">
                                <p>We are well-versed and have experience with the top software tools lawyers in North America use. We can help with setting up your phone-system or setting up your practice online if you're new to it or about to start one. We also have experience with tools that use Large Language Models just like GPT-4 for the legal field use case.</p>
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
