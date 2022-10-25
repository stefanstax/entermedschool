<?php
if (is_page("imat")) {
    $imat_title = "IMAT 2022 - News and Updates";
    $imat_subtitle = "Everything you need to know before taking the IMAT exam and studying medicine in English in Italy.";
    $imat_link_one = "IMAT 2022 Course";
    $imat_link_two = "IMAT Forums"; ?>
    <section class="container-fluid">
        <div class="bg--gradient container_custom row justify-content-between gx-0">
            <div class="col-12 col-lg-12 custom--block">
                <h1 id="list-item-1" class="green w-100 fw ts60 lh70"><?php echo $imat_title ?></h1>
                <p class="green ts20"><?php echo $imat_subtitle ?></p>
                <div class="button--group">
                    <a href="https://entermedschool.com/courses/imat/" target="_blank" class="button--secondary bg-lipstick fb"><?php echo $imat_link_one ?></a>
                    <a href="https://staging.entermedschool.com/forums/forum/imat-forum/" target="_blank" class="button--secondary bg-lipstick fb"><?php echo $imat_link_two ?></a>
                </div>
            </div>
        </div>
    </section>
<?php
} elseif (is_page("neet")) {
    $neet_title = "NEET 2022 - News and Updates";
    $neet_subtitle = "Everything you need to know before taking the NEET exam and studying medicine in India.";
    $neet_link_one = "NEET UG 2022 | 1000's of practice questions";
    $neet_link_two = "NEET Forums"; ?>
    <section class="container-fluid">
        <div class="bg--gradient container_custom row justify-content-between gx-0">
            <div class="col-12 col-lg-12 custom--block">
                <h1 id="list-item-1" class="green w-100 fw ts60 lh70"><?php echo $neet_title ?></h1>
                <p class="green ts20"><?php echo $neet_subtitle ?></p>
                <div class="button--group">
                    <a href="https://staging.entermedschool.com/courses/neetug/" target="_blank" class="button--secondary bg-lipstick fb"><?php echo $neet_link_one ?></a>
                    <a href="https://staging.entermedschool.com/forums/forum/neet/" target="_blank" class="button--secondary bg-lipstick fb"><?php echo $neet_link_two ?></a>
                </div>
            </div>
        </div>
    </section>
<?php
} elseif (is_page("bmat")) {
    $bmat_title = "BMAT 2022 - News and Updates";
    $bmat_subtitle = "Everything you need to know before taking the BMAT exam";
    $bmat_link_one = "BMAT Courses";
    $bmat_link_two = "BMAT Forums"; ?>
    <section class="container-fluid">
        <div class="bg--gradient container_custom row justify-content-between gx-0">
            <div class="col-12 col-lg-12 custom--block">
                <h1 id="list-item-1" class="green w-100 fw ts60 lh70"><?php echo $bmat_title ?></h1>
                <p class="green ts20"><?php echo $bmat_subtitle ?></p>
                <div class="button--group">
                    <a href="https://entermedschool.com/courses" target="_blank" class="button--secondary bg-lipstick fb"><?php echo $bmat_link_one ?></a>
                    <a href="https://entermedschool.com/forums/forum/bmat" target="_blank" class="button--secondary bg-lipstick fb"><?php echo $bmat_link_two ?></a>
                </div>
            </div>
        </div>
    </section>
<?php
} ?>