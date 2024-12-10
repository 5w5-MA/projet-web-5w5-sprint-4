<?php

get_header();

while (have_posts()) {
    the_post();
?>



    <body>
        <div id="bg">
            <canvas id="canvas1"></canvas>
            <canvas></canvas>
            <canvas></canvas>
        </div>
        <main class="vieEtudiante">
            <!-- section de titre -->
            <div class="titrePage">
                <h1><?php the_title(); ?></h1>
                <div class="imgEnteteDiv">

                </div>
            </div>
            <!-- section du comité étudiant -->
            <div class="cetim">
                <div class="titreSection">
                    <h2>Le comité étudiant</h2>
                    <div class="decoTitre"></div>
                </div>
                <div class="informations">
                    <div class="texte">
                        <p>Le CÉTIM (Comité étudiant en Technique d'intégration multimédia) est un conseil par et pour les
                            étudiants de la technique, ayant pour mission de rendre l'expérience en TIM inoubliable. Si
                            l'aspect académique
                            est primordial, il est
                            particulièrement important en TIM de développer des relations, de s'intégrer à la vie sociale,
                            de rencontrer ses
                            collègues et de se faire des amis. C'est ce que le CÉTIM s'efforce à favoriser.</p>
                        <p>Actuellement composé de neuf étudiant·es en 2e et 3e année, le CÉTIM a, au cours des deux
                            dernières années, organisé une
                            demi-douzaine de soirées jeux, un concours suivi d’une vente de hoodies aux couleurs de la
                            technique et une refonte
                            complète du serveur Discord qui est plus vivant que jamais.</p>

                    </div>
                    <div class="imageVie"><img src="<?php $imgComiteEtudiant = get_field('comite_etudiant');
                                                    echo $imgComiteEtudiant['sizes']['imagesVieEtude'] ?>" alt=""></div>
                </div>
            </div>
            <!-- section des locaux -->
            <div class="locaux">
                <div class="titreSection">
                    <h2>Les locaux</h2>
                    <div class="decoTitre"></div>
                </div>
                <div class="informations">
                    <div class="texte">
                        <p>La technique de multimédia a plusieurs locaux réservés à ses élèves. Ces locaux contiennent des
                            ordinateurs de qualités
                            très puissants.</p>

                    </div>
                    <div class="imageVie"><img src="<?php $imgLesLocaux = get_field('image_les_locaux');
                                                    echo $imgLesLocaux['sizes']['imagesVieEtude'] ?>" alt=""></div>
                </div>

            </div>
            <!-- section du matériel -->
            <div class="materiel">
                <div class="titreSection">
                    <h2>Le matériel</h2>
                    <div class="decoTitre"></div>
                </div>
                <div class="informations">
                    <div class="texte">
                        <p>En tant qu’élève en multimédia vous avez accès à du matériel exclusif.</p>
                        <p>-Caméras</p>
                        <p>-Projecteurs</p>
                        <p>-Casque de réalité virtuelle</p>
                        <p>Ces objets sont vu dans le cadre de vos cours et peuvent être utilisé lors du projet de fin
                            d'études.</p>
                    </div>
                    <div class="imageVie"><img src="<?php $materielImg = get_field('image_materiel');
                                                    echo $materielImg['sizes']['imagesVieEtude'] ?>" alt=""></div>
                </div>
            </div>
        </main>



    </body>

    </html>

<?php }
get_footer();
?>