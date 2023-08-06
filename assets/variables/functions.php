<?php

$imageSlider = [
    'image' => [
        './assets/images/home1.png', './assets/images/home2.png', './assets/images/home3.png', './assets/images/home4.png',
        './assets/images/home5.jpg', './assets/images/home6.jpg', './assets/images/home7.jpg', './assets/images/home8.jpg',
        './assets/images/home9.jpg', './assets/images/home10.jpg',
    ],
    'price_image' => [
        './assets/images/popularicon.png', './assets/images/homeicon.png', './assets/images/besticon.png',
        './assets/images/popularicon.png', './assets/images/homeicon.png', './assets/images/besticon.png',
        './assets/images/popularicon.png', './assets/images/homeicon.png', './assets/images/besticon.png',
        './assets/images/popularicon.png',
    ],
    'price_title' => [
        'Popular', 'New house', 'Best Deals', 'Popular', 'New house', 'Best Deals',
        'Popular', 'New house', 'Best Deals', 'Popular',
    ],
    'house_name' => [
        'Roselands House', 'Woodlandside', 'The Old Lighthouse', 'Roselands House', 'Woodlandside', 'The Old Lighthouse',
        'Roselands House', 'Woodlandside', 'The Old Lighthouse', 'Roselands House',
    ],
    'price' => [
        '$ 35.000.000', '$ 20.000.000', '$ 44.000.000', '$ 35.000.000', '$ 20.000.000', '$ 44.000.000',
        '$ 35.000.000', '$ 20.000.000', '$ 44.000.000', '$ 35.000.000',
    ],
    'owner_image' => [
        './assets/images/owner3.png', './assets/images/owner1.png', './assets/images/owner2.png',
        './assets/images/owner3.png', './assets/images/owner1.png', './assets/images/owner2.png',
        './assets/images/owner3.png', './assets/images/owner1.png', './assets/images/owner2.png',
        './assets/images/owner3.png',
    ],
    'owner_name' => [
        'Dianne Russell', 'obert Fox', 'Ronald Richards', 'Dianne Russell', 'obert Fox', 'Ronald Richards',
        'Dianne Russell', 'obert Fox', 'Ronald Richards', 'Dianne Russell',
    ],
    'location' => [
        'Manchester, Kentucky', 'Dr. San Jose, South Dakota', 'Santa Ana, Illinois',
        'Manchester, Kentucky', 'Dr. San Jose, South Dakota', 'Santa Ana, Illinois',
        'Manchester, Kentucky', 'Dr. San Jose, South Dakota', 'Santa Ana, Illinois',
        'Manchester, Kentucky',
    ],
];

function getImageSlider($imageSlider)
{
    $icons = ['popular_icon', 'home_icon', 'best_icon'];

    for ($i = 0; $i < 10; $i++) {
        $slider = $imageSlider;
        $iconClass = $icons[$i % 3];

        echo '<div class="image">
                <div class="image_card">
                    <img src="' . $slider['image'][$i] . '" alt="home1" />
                    <div class="price_title ' . $iconClass . '">
                        <img src="' . $slider['price_image'][$i] . '" alt="" />
                        <h3>' . $slider['price_title'][$i] . '</h3>
                    </div>
                </div>
                <div class="house_description">
                    <h2>' . $slider['house_name'][$i] . '</h2>
                    <h4>' . $slider['price'][$i] . '</h4>
                    <div class="owner_description">
                        <img src="' . $slider['owner_image'][$i] . '" alt="owner" />
                        <div class="description">
                            <h2>' . $slider['owner_name'][$i] . '</h2>
                            <p>' . $slider['location'][$i] . '</p>
                        </div>
                    </div>
                </div>
            </div>';
    }
    return $slider;
}

$imageSlider2 = [
    'image' => [
        './assets/images/carousel_house.png', './assets/images/carousel_house2.png',
        './assets/images/carousel_house3.png', './assets/images/carousel_house4.jpg',
        './assets/images/carousel_house5.jpg',
    ],
    'title' => [
        'Best! I got the house I wanted through Hounter', 'Best! I got the house I wanted through Hounter',
        'Best! I got the house I wanted through Hounter', 'Best! I got the house I wanted through Hounter',
        'Best! I got the house I wanted through Hounter',
    ],
    'description' => [
        'Through this website I can get a house with the type and
                       specifications I want very easily, without a complicated process
                       to be able to find information on the house we want.',
        'Through this website I can get a house with the type and
                       specifications I want very easily, without a complicated process
                       to be able to find information on the house we want.',
        'Through this website I can get a house with the type and
                       specifications I want very easily, without a complicated process
                       to be able to find information on the house we want.',
        'Through this website I can get a house with the type and
                       specifications I want very easily, without a complicated process
                       to be able to find information on the house we want.',
        'Through this website I can get a house with the type and
                       specifications I want very easily, without a complicated process
                       to be able to find information on the house we want.',
    ],
    'owner_image' => [
        './assets/images/owner3.png', './assets/images/owner1.png',
        './assets/images/owner2.png', './assets/images/owner3.png',
        './assets/images/owner1.png',
    ],
    'owner_name' => [
        'Dianne Russell', 'obert Fox', 'Ronald Richards',
        'Dianne Russell', 'obert Fox',
    ],
    'location' => [
        'Manchester, Kentucky', 'Dr. San Jose, South Dakota', 'Santa Ana, Illinois',
        'Manchester, Kentucky', 'Dr. San Jose, South Dakota',
    ],
    'rate' => ['4.6', '5.0', '4.8', '4.6', '4.7'],
];

function getImageSlider2($imageSlider2)
{
    for ($i = 0; $i < sizeof($imageSlider2['image']); $i++) {
        $carousel = $imageSlider2;
        echo '<div class="carousel_inner">
                <img src="' . $carousel['image'][$i] . '" alt="" />
                <div class="carousel_inner_content">
                    <h2 class="carousel_title carousel_inner_title">' . $carousel['title'][$i] . '</h2>
                    <p class="paragraph">' . $carousel['description'][$i] . '</p>
                    <div class="carousel_inner_owner">
                        <div class="owner_description">
                            <img src="' . $carousel['owner_image'][$i] . '" alt="owner" />
                            <div class="description">
                                <h2>' . $carousel['owner_name'][$i] . '</h2>
                                <p>' . $carousel['location'][$i] . '</p>
                            </div>
                        </div>
                        <div class="star_result">
                            <img src="./assets/images/star.png" alt="star" />
                            <h4>' . $carousel['rate'][$i] . '</h4>
                        </div>
                    </div>
                </div>
            </div>';
    }
    return $carousel;
}

$card = [
    'image' => ['./assets/images/lastcardimg1.png', './assets/images/lastcardimg2.png', './assets/images/lastcardimg3.png',],
    'owner_image' => ['./assets/images/owner3.png', './assets/images/owner1.png', './assets/images/owner2.png',],
    'owner_name' => ['Dianne Russell', 'obert Fox', 'Ronald Richards',],
    'description' => [
        'The things we need to check when we want to buy a house',
        '7 Ways to distinguish the quality of the house we want to buy',
        'The best way to know the quality of the house we want to buy',
    ],
    'text' => ['', '', '',],
    'time' => ['4 min read | 25 Apr 2021', '6 min read | 24 Apr 2021', '2 min read | 24 Apr 2021',],
];

$card2 = [
    'image' => ['./assets/images/lastcardimg4.png'],
    'owner_image' => ['./assets/images/owner3.png'],
    'owner_name' => ['Cameron Williamson',],
    'description' => ['12 Things to know before buying a house',],
    'text' => ['Want to buy a house but are unsure about what we should know,
                here I will try to explain what we should know and check when we
                want to buy a house'],
    'time' => ['8 min read | 25 Apr 2021',],
];

function getMergeCard($card, $card2)
{
    $MergeCard = array_merge($card, $card2);
    for ($i = 0; $i < sizeof($MergeCard['image']); $i++) {
        switch ($MergeCard) {
            case $card:
                $divClass = 'last_card';
                $imgClass = 'last_card_image';
                $textArea = '';
                break;
            case $card2:
                $divClass = 'new_card';
                $imgClass = 'new_card_image';
                $textArea = $MergeCard['text'][$i];
                break;
            default:
                echo "something went wrong!";
        }
        echo '<div class="' . $divClass . '">
        <img class="' . $imgClass . '" src="' . $MergeCard['image'][$i] . '" alt="IMG" />
        <div class="last_card_description">
            <div class="last_card_owner">
                <img src="' . $MergeCard['owner_image'][$i] . '" alt="ower" />
                <h4 class="name_owner">' . $MergeCard['owner_name'][$i] . '</h4>
            </div>
            <h3 class="short_description">' . $MergeCard['description'][$i] . '</h3>
            <p class="paragraph">' . $textArea . ' </p>
            <div class="date_time">
                <img src="./assets/images/time.png" alt="icon" />
                <p>' . $MergeCard['time'][$i] . '</p>
            </div>
        </div>
    </div>';
    }
    return $MergeCard;
}

$detailGrid = [
    'image' => [
        './assets/images/detail1.png', './assets/images/detail2.png',
        './assets/images/detail3.png', './assets/images/detail4.png'
    ],
    'title' => ['4 Bedrooms', '2 Bathrooms', '1 Carport', '2 Floors']
];

function getDetailGrid($detailGrid)
{
    $i = 0;
    while ($i < sizeof($detailGrid['title'])) {
        echo '<div class="detail_grid_inner">
                <img src="' . $detailGrid['image'][$i] . '" alt="detail" />
                <h4 class="detail_grid_text">' . $detailGrid['title'][$i] . '</h4>
            </div>';
        $i++;
    }
    return $detailGrid;
}

$title = [
    'link_name' => 'Our Recommendation',
    'subtitle' => 'Featured House',
];

$title2 = [
    'link_name' => 'Ready to Sell!',
    'subtitle' => 'Let’s tour and see our house!',
];

$title3 = [
    'link_name' => 'See Our Review',
    'subtitle' => 'What Our User Say About Us',
];

$title4 = [
    'link_name' => 'See tips and trick from our partnership',
    'subtitle' => 'Find out more about <br />selling and buying homes',
];

function getTitle($title, $title2, $title3, $title4)
{
    $titleMerge = array_merge($title, $title2, $title3, $title4);
    switch ($titleMerge) {
        case ($title || $title2):
            $class = 'slider_link';
            break;
        case ($title3 || $title4):
            $class = 'review_slider';
            break;
        default:
            echo 'there is an error!';
    }
    echo '<div class="' . $class . '">
            <img src="./assets/images/line.png" alt="line" />
            <a href="#">' . $titleMerge['link_name'] . '</a>
        </div>
            <h2 class="carousel_title">' . $titleMerge['subtitle'] . '</h2>';
    return $titleMerge;
}