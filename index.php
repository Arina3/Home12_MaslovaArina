<?php
$data = require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans|Oswald:400,500" rel="stylesheet">
    <script src="https://use.fontawesome.com/8f10f6eafe.js"></script>
    <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="container-header">
        <nav class="menu-bar">
            <ul class="top-menu-items clearfix">
                <?php
                foreach ($data['mainMenu'] as $menuItem) {
                    ?>
                <li class="items-top">
                    <a href="<?php echo $menuItem['url']; ?>" class="items-top-link"><?php echo $menuItem['title']; ?></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <div class="logo-block">
            <a href="#" target="_self" class="logo-link">
                <img src="<?php echo $data['siteLogo']; ?>" class="logo-image" alt="Cantus">
            </a>
        </div>
        <nav class="socials-bar">
            <ul class="socials-items">
                <?php
                foreach ($data['socialLinks'] as $socialLink) {
                ?>
                <li class="socials">
                    <a href="<?php echo $socialLink['url']; ?>" class="socials-link" target="_blank">
                        <i class="fa <?php echo $socialLink['class']; ?>" aria-hidden="true">
                            <span class="like-number">
                                <?php echo $socialLink['count']; ?>
                            </span>
                        </i>
                    </a>
                </li>
                <?php
                }
                ?>
                <li class="purchase">
                    <a href="<?php echo $data['buttonBuy']['url']; ?>" class="purchase-link-header" target="_blank"><?php echo $data['buttonBuy']['title']; ?></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section class="main-background clearfix">
    <div class="flexslider">
        <ul class="slides">
            <?php
            foreach ($data['mainSliders'] as $mainSlider) {
            ?>
            <li class="slide">
                <img src="<?php echo $mainSlider['image']; ?>">
                <div class="container-background">
                    <h1 class="main-heading"><?php echo $mainSlider['mainHeading']; ?>
                        <span class="subheading">
                            <?php echo $mainSlider['mainSubheading']; ?>
                        </span>
                    </h1>
                    <a href="<?php echo $mainSlider['buttonDiscover']['url']; ?>" class="discover-link" target="_self"><?php echo $mainSlider['buttonDiscover']['title']; ?></a>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar"></div>
                </div>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</section>
<section class="members-section clearfix">
    <div class="container-main">
        <div class="heading">
            <h2 class="second-heading"><?php echo $data['memberSection']['secondHeading']; ?>
            <span class="third-heading">
                <?php echo $data['memberSection']['secondSubheading']; ?>
            </span>
            </h2>
        </div>
        <div class="custom-navigation">
            <ul class="custom-arrows-introducing">
                <?php
                foreach ($data['customArrows'] as $customArrow) {
                ?>
                <li>
                    <a href="<?php echo $customArrow['url']; ?>" class="flex-prev">
                        <i class="fa <?php echo $customArrow['class']; ?>" aria-hidden="true"></i>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="flexslider2 clearfix">
            <ul class="slides">
                <?php
                foreach ($data['memberSlider'] as $sliderItem) {
                ?>
                <li class="member">
                    <a href="<?php echo $sliderItem['url']; ?>" class="member-link" target="_self">
                        <img src="<?php echo $sliderItem['image']; ?>" class="member-image">
                        <div class="member-desc">
                            <h4 class="member-name"><?php echo $sliderItem['name']; ?></h4>
                            <p class="member-genre"><?php echo $sliderItem['genre']; ?></p>
                            <ul class="socials-items members">
                                <?php
                                foreach ($sliderItem['socialLinks'] as $socialLink) {
                                ?>
                                <li class="socials-popup">
                                    <a href="<?php echo $socialLink['url']; ?>" class="socials-link" target="_blank">
                                        <i class="fa <?php echo $socialLink['class']; ?>" aria-hidden="true">
                                            <span class="like-number">
                                                <?php echo $socialLink['count']; ?>
                                            </span>
                                        </i>
                                    </a>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<section class="upcoming-latest">
    <div class="container-main upcoming">
        <section class="upcoming-conserts">
            <div class="heading">
                <h2 class="second-heading">
                    <?php echo $data['sectionConcerts']['secondHeading']; ?>
                    <span class="third-heading">
                        <?php echo $data['sectionConcerts']['secondSubheading']; ?>
                    </span>
                </h2>
            </div>
            <div class="upcoming-consert-details">
                <div class="consert-image">
                    <a href="#" class="consert-image-link" target="_self">
                        <img src="<?php echo $data['concertImage']; ?>" alt="Texas Rock Nation 2016" title="Texas Rock Nation 2016">
                    </a>
                </div>
                <div class="consert-details">
                    <h4 class="consert-details-heading"><?php echo $data['concertTitle']; ?></h4>
                    <table>
                        <?php
                        foreach ($data['concertTable'] as $tableItem) {
                        ?>
                        <tr>
                            <td><?php echo $tableItem['title']; ?></td>
                            <td><?php echo $tableItem['colon']; ?></td>
                            <td><?php echo $tableItem['details']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <a href="<?php echo $data['buttonBuy']['url']; ?>" class="purchase-link-section" target="_blank"><?php echo $data['buttonBuy']['title']; ?></a>
                </div>
            </div>
            <div class="progress-bar-upcoming">
                <div class="progress-bar-string"></div>
            </div>
        </section>
        <section class="latest-video">
            <div class="heading">
                <h2 class="second-heading"><?php echo $data['sectionVideo']['secondHeading']; ?>
                    <span class="third-heading">
                        <?php echo $data['sectionVideo']['secondSubheading']; ?>
                    </span>
                </h2>
            </div>
            <div class="custom-navigation">
                <ul class="custom-arrows-video">
                    <?php
                    foreach ($data['customArrows'] as $customArrow) {
                    ?>
                        <li>
                            <a href="<?php echo $customArrow['url']; ?>" class="flex-prev">
                                <i class="fa <?php echo $customArrow['class']; ?>" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="flexslider3">
                <ul class="slides">
                    <?php
                    foreach ($data['videoSlider'] as $videoItem) {
                    ?>
                        <li>
                            <iframe width="372" height="290" src="<?php echo $videoItem['source']; ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </li>
                     <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>
</section>
<section class="founder" id="learn-more-popup">
    <div class="container-main">
        <p class="cantus-founder">
            <img src="<?php echo $data['founderImage']; ?>" alt="Cantus founder 1982" class="cantus-founder-image">
        </p>
        <div class="container-founder">
            <h2 class="section-heading"><?php echo $data['sectionFounder']['title']; ?></h2>
            <p class="section-desc">
                <?php echo $data['sectionFounder']['desc1']; ?><span class="cantus"><?php echo $data['sectionFounder']['siteName']; ?></span> <?php echo $data['sectionFounder']['desc2']; ?>.
            </p>
            <a href="<?php echo $data['buttonLearnMore']['url']; ?>" class="learn-more-link" target="_self"><?php echo $data['buttonLearnMore']['title']; ?></a>
            <div class="popup">
                <div class="popup-block">
                    <h5><?php echo $data['founderPopup']['title']; ?></h5>
                    <p><?php echo $data['founderPopup']['desc']; ?></p>
                    <a href="<?php echo $data['buttonClose']['url']; ?>" class="close-popup-link"><?php echo $data['buttonClose']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-instagram">
    <div class="container-main popular">
        <section class="polular-songs">
            <div class="heading">
                <h2 class="second-heading"><?php echo $data['sectionSongs']['secondHeading']; ?>
                    <span class="third-heading">
                        <?php echo $data['sectionSongs']['secondSubheading']; ?>
                    </span>
                </h2>
            </div>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="<?php echo $data['songContainer']; ?>"></iframe>
            <ul class="song-list">
                <?php
                foreach ($data['songList'] as $songItem) {
                ?>
                    <li class="song-item"><?php echo $songItem['title']; ?></li>
                <?php
                }
                ?>
            </ul>
        </section>
        <section class="instagram-feed">
            <div class="heading">
                <h2 class="second-heading"><?php echo $data['sectionInstagram']['secondHeading']; ?>
                    <span class="third-heading">
                        <?php echo $data['sectionInstagram']['secondSubheading']; ?>
                    </span>
                </h2>
            </div>
            <ul class="instagram-list">
                <?php
                foreach ($data['instagramList'] as $instagramItem) {
                ?>
                    <li class="instagram-image-item">
                        <a href="<?php echo $instagramItem['url']; ?>" class="instagram-image-link" target="_blank">
                            <img src="<?php echo $instagramItem['image']; ?>" alt="Instagram account" class="instagram-image">
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </section>
    </div>
</section>
<section class="download app">
    <div class="container-main image">
        <div class="container-section">
            <h2 class="section-heading"><?php echo $data['sectionDownload']['title']; ?></h2>
            <p class="section-desc">
                <?php echo $data['sectionDownload']['desc']; ?>
            </p>
            <ul class="download-store-list">
                <?php
                foreach ($data['storesList'] as $storeItem) {
                ?>
                    <li class="store-item">
                        <a href="<?php echo $storeItem['url']; ?>" class="app-store-link" target="_blank"></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<section class="subscription">
    <div class="container-form">
        <form action="<?php echo $data['sectionForm']['url']; ?>" id="newsletter" name="newsletter" method="post">
            <input type="email" id="email" name="email" required="required" placeholder="subscribe newsletter" class="email">
            <button><i class="fa <?php echo $data['sectionForm']['class']; ?>"></i></button>
        </form>
    </div>
</section>
<footer>
    <div class="container-bottom">
        <nav class="menu-bar-footer">
            <ul class="bottom-menu-items">
                <?php
                foreach ($data['bottomMenu'] as $bottomMenuItem) {
                ?>
                    <li class="items-bottom">
                        <a href="<?php echo $bottomMenuItem['url']; ?>" target="_blank" class="items-bottom-link"><?php echo $bottomMenuItem['title']; ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <p class="copyright">
            <?php echo $data['copyright']['title']; ?>
            <span class="company-title">
                <a href="<?php echo $data['copyright']['companyTitle']['url']; ?>" id="cantus-link" class="company-link" target="_self"><?php echo $data['copyright']['companyTitle']['siteName']; ?></a>
            </span>
            <?php echo $data['copyright']['desc']; ?>
        </p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script>
</body>
</html>