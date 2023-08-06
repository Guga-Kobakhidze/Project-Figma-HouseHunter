<?php include_once "./header.php" ?>
<?php include "./assets/variables/functions.php" ?>
<img class="vector_1" src="./assets/images/Vector.png" alt="" />
<img class="vector_2" src="./assets/images/Vector1.png" alt="" />
<section class="home_section">
    <div class="section_container">
        <div class="home_section_content">
            <div class="home_section_description">
                <h1 class="main_title">
                    find the place to live <span>your dreams</span> easily here
                </h1>
                <p class="paragraph">
                    Everything you need about finding your place to live will be here,
                    where it will be easier for you
                </p>
                <div class="location_content">
                    <img src="./assets/images/location.png" alt="location" />
                    <input class="location_input" type="text" name="text"
                        placeholder="Search for the location you want!" />
                    <div class="btn">
                        <a href="#">Search
                            <img src="./assets/images/rightarrow.png" alt="rightarrow" /></a>
                    </div>
                </div>
                <p class="paragraph">Our Partnership</p>
                <div class="brand_images">
                    <img src="./assets/images/traveloka.png" alt="traveloka" />
                    <img src="./assets/images/tiket.com.png" alt="tiket.com" />
                    <img src="./assets/images/airbnb.png" alt="airbnb" />
                    <img src="./assets/images/tripadvisor.png" alt="tripadvisor" />
                </div>
            </div>
            <img class="main_section_image" src="./assets/images/mainimage.png" alt="mainimage" />
        </div>
    </div>
</section>
<section class="home_section_2 carousel_slider">
    <div class="container">
        <div class="carousel_slider_content">
            <div class="carousel_slider_subtitle">
                <?php getTitle($title, [], [], []); ?>
            </div>
            <div class="button_chooser">
                <a href="#" class="house_choose_btn"><img src="./assets/images/Housebtn.png" alt="house" />House</a>
                <a href="#" class="house_choose_btn"><img src="./assets/images/villabtn.png" alt="house" />Villa</a>
                <a href="#" class="house_choose_btn"><img src="./assets/images/apartmentbtn.png"
                        alt="house" />Apartment</a>
            </div>
            <div class="handle_boxes">
                <button class="handle left-handle">
                    <i class="bx bx-chevron-left handle_btn"></i>
                </button>
                <button class="handle right-handle">
                    <i class="bx bx-chevron-right handle_btn"></i>
                </button>
            </div>
        </div>
        <div class="slider">
            <?php getImageSlider($imageSlider); ?>
        </div>
    </div>
</section>
<section class="home_section_3">
    <div class="section_container">
        <div class="home_content_section">
            <div class="contact_section">
                <?php getTitle($title2, [], [], []); ?>
                <p class="paragraph">
                    Houses recommended by our partners that have been <br />
                    curated to become the home of your dreams!
                </p>
                <h3 class="detail_title">House Detail</h3>
                <div class="detail_grid">
                    <?php getDetailGrid($detailGrid); ?>
                </div>
                <div class="owner_description">
                    <img src="./assets/images/owner3.png" alt="owner" />
                    <div class="description">
                        <h2>Dianne Russell</h2>
                        <p>Manchester, Kentucky</p>
                    </div>
                    <div class="btn">
                        <a href="#"><img src="./assets/images/phone.png" alt="rightarrow" />Contact Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="media_section">
                <img class="first_house" src="./assets/images/FirstHouse.png" alt="firsthouse" />
                <img src="./assets/images/imagewithvid.png" alt="imagewithvid" />
                <img src="./assets/images/imagewithvid2.png" alt="imagewithvid" />
                <img src="./assets/images/imagewithvid3.png" alt="imagewithvid" />
            </div>
        </div>
    </div>
    <img class="vector_3" src="./assets/images/Vector2.png" alt="Vector" />
    <img class="vector_4" src="./assets/images/Vector3.png" alt="Vector" />
</section>
<section class="home_section_4 carousel_slider_2">
    <div class="container">
        <div class="review_carousel_content">
            <?php getTitle([], [], $title3, []); ?>
        </div>
        <div class="carousel">
            <?php getImageSlider2($imageSlider2); ?>
        </div>
    </div>
</section>
<section class="home_section_5">
    <img class="vector_5" src="./assets/images/Vector4.png" alt="Vector" />
    <img class="vector_6" src="./assets/images/Vector5.png" alt="Vector" />
    <div class="section_container">
        <div class="section_title">
            <?php getTitle([], [], [], $title4); ?>
            <div class="btn2">
                <a href="#">More Artikel</a>
            </div>
        </div>
        <div class="section_content_5">
            <div class="last_cards">
                <?php getMergeCard($card, []); ?>
            </div>
            <?php getMergeCard([], $card2); ?>
        </div>
    </div>
</section>
<section class="home_section_6">
    <div class="section_container">
        <div class="subscribe_section">
            <img class="subscribe_section_img" src="./assets/images/lastSection.png" alt="BG" />
            <div class="subscribe_section_content">
                <h2 class="carousel_title">
                    Subscribe For More Info <br />and update from Hounter
                </h2>
                <div class="location_content">
                    <img src="./assets/images/emailicon.png" alt="emailicon" />
                    <input class="location_input" type="text" name="text" placeholder="Your email here" />
                    <div class="btn btn3">
                        <a href="#">Subsribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once "./footer.php" ?>