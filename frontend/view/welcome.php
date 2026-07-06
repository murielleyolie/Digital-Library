
<?php
include(URL_VIEW."nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_CSS1 ?>welcome.css"> 
    <link rel="stylesheet" href="<?= URL_FONTAWESOME ?>">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <div class="middle">
            <p> 
                Small Effort<br>
                Make Big Change<br>
                Don't Worry Just Be Ready And Enjoy
            </p>
        </div>
        <!-- <div class="defile">
            <p>admin6.jpg</p>
            <p>client1.jpg</p>
            <p>client2.jpg</p>
            <p>client3.jpg</p>
        </div> -->
        <div class="point">
            <div class="rond un" onclick="changeUn()"></div>
            <div class="rond deux " onclick="changeDeux()"></div>
            <div class="rond trois" onclick="changeTrois()"></div>
            <div class="rond quatre" onclick="changeQuatre()"></div>
        </div>
    </header>
    <section>
        <article>
            <p>We are here for the welbeings of our youngs so lets be ready to face difficult cases</p>
        </article>
        <section class="section">
            <div><p class="icony"><i class="fas fa-coins"></i></p>
                 <p><span class="spans">We being created since 2012</span> and offer donations to many family as 
                    our <span class="spansb">goal is ton increase the standard of living </span><br>of our city for a better future</p>
                    <!-- <P>Don't hesitate we are the best in our field</P> -->
            </div>
            <div><p class="icony"><i class="fas fa-user-friends"></i></p>
                 <p><span class="spans">Pleasure lives amongs us</span>
                    Don't hesitate we are the best in our <br>field.<br>
                    <span class="spansb">Many positive testimonials are made by </span><br> 
                    millions of people as our <br>work is effective 
                </p>
            </div>
            <div><p class="icony"><i class="fas fa-award"></i></p>
                <p><span class="spans">Lets turn tears to smile</span><br>
                    It's never easy to trust but our returns are always true.<br>
                    <span class="spansb">One of the greatest association in the world with</span><br> more than thousands of refugees
                </p>
            </div>
        </section>    
    </section>
    <div class="espace">

    </div>
    <script src="<?= URL_JS1 ?>welcome.js"></script>
</body>
</html>
<?php include(URL_VIEW."footer.php");?>