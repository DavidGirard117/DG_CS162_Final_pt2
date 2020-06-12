<body>
    <div class="container">
        <div class="nav-wrapper">
            <div class="left-side">
            </div>
            
            <div class="right-side">
                <div class="brand">
                    <div>The Ceil Inn</div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="portfolio-items-wrapper"> 
            
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url()"></div>
                
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="images/logo.jpg">
                        </div>

                        <div class="subtitle">
                            <div class="nav-link-wrapper">
                                <a href="index">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url()"></div>
                
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="images/employee-img.jpg">
                        </div>
                        <div class="subtitle">
                            <div class="nav-link-wrapper">
                                <a href="employees">Employee</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url()"></div>
                
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="images/customer.jpg">
                        </div>

                        <div class="subtitle">
                            <div class="nav-link-wrapper">
                                <a href="customers">Customer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url()"></div>
                
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="images/booking.jpg">
                        </div>

                        <div class="subtitle">
                            <div class="nav-link-wrapper">
                                <a href="bookings">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url()"></div>
                
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="images/room.jpg">
                        </div>

                        <div class="subtitle">
                            <div class="nav-link-wrapper">
                                <a href="rooms">Room</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url()"></div>
                
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="images/employee-img.jpg">
                        </div>

                        <div class="subtitle">
                            Words and stuff
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper')

    portfolioItems.forEach(portfolioItem => {
        portfolioItem.addEventListener('mouseover', () => {
            portfolioItem.childNodes[1].classList.add('image-darken');
        })
    

    portfolioItem.addEventListener('mouseout', () => {
            portfolioItem.childNodes[1].classList.remove('image-darken');
        })
    })
</script>

