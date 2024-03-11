<?php include('include/header.php') ?>
<section  style="position: relative;" >
    <div class="inner-banner uk-flex uk-flex-middle uk-position-relative">
        <div class="uk-container uk-text-center ">
            <h1 class="text-white f-w-700 f-38 uk-margin-remove">Athletes</h1>
            <p class="text-white uk-margin-remove"><a href="index.php">Home</a> / Athletes</p>
        </div>
        <div class="texture">
            <img src="images/highertexture.png" alt="">
        </div>
    </div>
</section>
<section class="uk-padding-large">
    <div class="uk-container">
        <zing-grid caption="Player Profile" search pager page-size="10" page-size-options="10,20,30"  class="custom-cell-padding" layout="row" sort>
            <zg-data  data='[
                {
                    "Profile": "https://storage.googleapis.com/zg-demos.appspot.com/default_avatar.png",
                    "Player Name": "Alisha Sthapit",
                    "Birth Date" :"1991-01-05",
                    "Gender": "Female"
                },
                {
                    "Profile": "https://storage.googleapis.com/zg-demos.appspot.com/default_avatar.png",
                    "Player Name": "Robin  Maharjan",
                    "Birth Date" :"1992-02-05",
                    "Gender": "Male"
                },
                {
                    "Profile": "https://storage.googleapis.com/zg-demos.appspot.com/default_avatar.png",
                    "Player Name": "Reeta Joshi",
                    "Birth Date" :"1990-01-10",
                    "Gender": "Female"
                },
                {
                    "Profile": "https://storage.googleapis.com/zg-demos.appspot.com/default_avatar.png",
                    "Player Name": "Rima Shakya",
                    "Birth Date" :"2001-02-05",
                    "Gender": "Female"
                }
                ]'>
            </zg-data>
            <zg-colgroup>
                <zg-column index="Profile" type="image" width="70"></zg-column>
                <zg-column index="Player Name"></zg-column>
                <zg-column index="Birth Date"></zg-column>
                <zg-column index="Gender"></zg-column>
             </zg-colgroup>
        </zing-grid>
    </div>
</section>
<?php include('include/footer.php') ?>