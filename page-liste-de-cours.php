<?php

/**
 * Template Name: liste de cours
 */
get_header(); ?>
<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>
<main class="pageCours">
    <section class="coursPrincipale">
        <h1><?php the_title(); ?></h1>
        <div class="imgCours">
        <img class="imagesGeneral" src="<?php echo  wp_get_attachment_url(84); ?>" alt="">
        </div>
        <div class="txt"></div>
    </section>
    <section class="coursMenu">
        <input type="checkbox" id="chkBtnSession1">
        <input type="checkbox" id="chkBtnSession2">
        <input type="checkbox" id="chkBtnSession3">
        <input type="checkbox" id="chkBtnSession4">
        <input type="checkbox" id="chkBtnSession5">
        <input type="checkbox" id="chkBtnSession6">
        <div class="displayFlexBtn1">
            <div class="btnSession1Wrap">
                <label for="chkBtnSession1" class="btnSession1">Session1</label>
            </div>
            <div class="btnSession2Wrap">
                <label for="chkBtnSession2" class="btnSession2">Session2</label>
            </div>
            <div class="btnSession3Wrap">
                <label for="chkBtnSession3" class="btnSession3">Session3</label>
            </div>
        </div>
        <div class="displayFlexBtn2">
            <div class="btnSession4Wrap">
                <label for="chkBtnSession4" class="btnSession4">Session4</label>
            </div>
            <div class="btnSession5Wrap">
                <label for="chkBtnSession5" class="btnSession5">Session5</label>
            </div>
            <div class="btnSession6Wrap">
                <label for="chkBtnSession6" class="btnSession6">Session6</label>
            </div>
        </div>
    </section>



    <section class="listeCours">
        <div class="cours1">
            <div class="coursImg"></div>
            <div class="infoCours">
                <h2 class="nomCours">Création vidéo</h2>
                <div class="boutonCours">
                    <div class="btn1"></div>
                    <div class="btn2">En savoir plus</div>
                    <div class="btn3"></div>
                    <div class="btn4"></div>
                    <div class="btn5"></div>
                    <div class="btn6"></div>
                </div>
            </div>
        </div>

    </section>
</main>



<?php get_footer(); ?>