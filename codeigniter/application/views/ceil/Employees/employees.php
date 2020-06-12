<body>
    <div class="container">
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper">
                    <a href="index">Home</a>
                </div>
                
                <div class="nav-link-wrapper">
                    <a href="employees">Employee</a> - <a href="codeigniter/employees/delete" style="color:red;">delete</a>                </div>
                    - <a href="codeigniter/employees/update" style="color: blue;">update</a>
                <div class="nav-link-wrapper">
                    <a href="customers">Customer</a>
                </div>
                
                <div class="nav-link-wrapper">
                    <a href="rooms">Room</a>
                </div>
                
                <div class="nav-link-wrapper">
                    <a href="bookings">Booking</a>
                </div>
            </div>
            <div class="right-side">
              <div class="brand">
                  <div>The Ceil Inn</div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper">
      <div class="portfolio-items-wrapper">

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio1.jpg)"></div>

          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/bellboy.jpg" alt="">
            </div>

            <div class="subtitle">Our Bellboys</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio2.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/management.jpg" alt="">
            </div>

            <div class="subtitle">The Management Team</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio3.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/cook.jpg" alt="">
            </div>

            <div class="subtitle">Kitchen Staff</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio4.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/receptionist.jpg" alt="">
            </div>

            <div class="subtitle">Receptonists</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio5.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/housekeeping.jpg" alt="">
            </div>

            <div class="subtitle">House Keepers</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio6.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/bartend.jpg" alt="">
            </div>

            <div class="subtitle">Bartending and Waitstaff</div>
          </div>
        </div>

            <div class="subtitle">Ceil Staff at their finest.</div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

  portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.add('image-blur');
    });

    portfolioItem.addEventListener('mouseout', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.remove('image-blur');
    });
  });