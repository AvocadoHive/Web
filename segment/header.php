<div class="header">
    <div class="d-inner-header">
        <div class="d-header-logo">
            <a href="/">
                <img src="/images/logo.png" alt="">
            </a>
        </div>
        <div class="d-header-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <?php if(!ip_info("Visitor", "Country") == 'Philippines'): ?>
                    <li><a href="/how_we_work">How we work</a></li>
                <?php endif; ?>
                <li><a href="/about">About Us</a></li>
                <li><a href="/career">Careers</a></li>
                <li><a href="#">Blogs</a></li>
                <?php if(!ip_info("Visitor", "Country") == 'Philippines'): ?>
                    <li><a href="/pricing">Pricing</a></li>
                <?php endif; ?>
                <li><a data-bs-toggle="modal" data-bs-target="#bookacall">Contact Us</a></li>
                <?php if(ip_info("Visitor", "Country") == 'Philippines'): ?>
                    <li><a href="/career" class="book-an-appointment">Join our Team</a></li>
                <?php else: ?>
                    <li><a href="https://calendly.com/avocadohive/discovery-call-30minutes" class="book-an-appointment">Schedule a Call</a></li>
                <?php endif; ?>
                
            </ul>
        </div>

        <!-- Content Us modal -->
        <div class="modal fade" id="bookacall" tabindex="-1" aria-labelledby="bookacallLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered d-hive-modal">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="contact-base-inner">
                        <div class="d-contact-content">
                            <div class="d-contact-header">
                                <h2>Let’s get in touch</h2>
                                <div class="d-contact-sub-header">Get down to business!</div>
                            </div>
                            <div class="d-contact-content">
                                <ul>
                                    <!-- <li><span><i class="fa fa-solid fa-phone"></i></span> (302) 222-222 US</li> -->
                                    <li><span><i class="fa-solid fa-envelope"></i></span> info@avocadohive.com</li>
                                    <!-- <li><span><i class="fa-solid fa-location-dot"></i></span> 99 Wall St Suite 000, New York NY</li> -->
                                </ul>
                                <div class="d-contact-form-item">
                                    <input type="text" placeholder="name">
                                </div>
                                <div class="d-contact-form-item">
                                    <input type="text" placeholder="email">
                                </div>
                                <div class="d-contact-form-item">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="d-contact-form-item">
                                    <input type="submit" value="Book a call">
                                </div>
                            </div>
                            <div class="d-contact-submit"></div>
                        </div>
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>
        </div> 
    </div>
</div>