<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Why Choose Me</h2>
                    <p>As a professional Web Designer and Developer, I offer expertise in creating stunning,
                        functional websites. I prioritize understanding your unique needs, ensuring every
                        project is crafted with creativity and strategic planning. I make your digital dreams a
                        reality with style, engagement, and smooth functionality. Let's collaborate to elevate your
                        online presence and achieve your web design goal.</p>
                    <!-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#education-section"><span class="icon-long-arrow-right mr-2"></span>Education</a></li>
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</li>
                        <li><a href="#skills-section"><span class="icon-long-arrow-right mr-2"></span>Skills</li>
                        <li><a href="#interest-section"><span class="icon-long-arrow-right mr-2"></span>Interest</li>
                        <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li> -->
                        <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        @foreach ($servicesData as $service)
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>{{$service->service_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><a
                                    href="https://maps.app.goo.gl/6JvqLN8ziJMhPstY8" target="_blank">{{$siteSettingData->address}}</a></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$siteSettingData->phone}}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">{{$siteSettingData->email}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <span class="text">Kolkata Leather Complex, Kolkata, West Bengal, India</span> -->
        <div class="row">
            <div class="col-md-12 text-left">
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100077226802472"
                            target="_blank"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/freelancer_ranjit/"
                            target="_blank"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.linkedin.com/in/ranjit-biswas-219723219/"
                            target="_blank"><span class="icon-linkedin"></span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> is designed by PRIYA. |
                    All Rights Reserved
                    <!-- is made with <i class="icon-heart color-danger" aria-hidden="true"></i> -->
                    <!-- <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>