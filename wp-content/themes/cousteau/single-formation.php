<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="formation">
        <div class="formation__menu-navigation">
            <nav>
                <ul>
                    <li><a href="#presentation">Présentation</a></li>
                    <?php
                        if(!empty(get_field("debouches"))){
                    ?>
                        <li><a href="#debouches">Débouchés</a></li>
                    <?php 
                        }
                    ?>
                    <?php
                        if(!empty(get_field("conditions_dacces"))){
                    ?>
                        <li><a href="#conditions_dacces">Conditions d'accès</a></li>
                    <?php 
                        }
                    ?>
                    <?php
                        if(!empty(get_field("enseignements"))){
                    ?>
                        <li><a href="#enseignements">Enseignements</a></li>
                    <?php 
                        }
                    ?>
                    <?php
                        if(!empty(get_field("periode"))){
                    ?>
                        <li><a href="#periode">Période en milieu professionnelle</a></li>
                    <?php 
                        }
                    ?>
                </ul>
            </nav>
        </div>
        <div class="formation__main-content">
            <div class="entete">        
                <?php $terms = get_terms( 'formation-type' );
                    $termsNb = 0 ;
                ?> 
                <p class="entete__type-formation">
                    -- <?php foreach ( $terms as $term ) {
                        if($termsNb > 0){
                            echo ', ';
                        }
                        echo $term->name;
                        $termsNb++;
                    } ?> --
                </p>
                <h1 class="entete__title-formation"><?php the_title(); ?></h1>
                <div class="entete__infos-formation">
                    <div class="duree">
                        <p>Durée <span><?php echo get_field("duree"); ?></span></p>
                    </div>
                    <div class="niveau-entree">
                        <p>Niveau d'entrée <span><?php echo get_field("niveau_dentree"); ?></span></p>
                    </div>
                    <div class="alternance">
                        <p>Alternance <span>
                        <?php
                        if(empty(get_field("alternance"))){
                            echo "Non";
                        }else{
                            echo implode( ', ', get_field("alternance_duree") );
                        }
                        ?>
                        </span></p>
                    </div>
                </div>
            </div>
            <div class="content">
                <div id="presentation" class="content__presentation">
                    <?php echo get_field("presentation"); ?>
                </div>

                <?php
                    if(!empty(get_field("debouches"))){
                ?>
                <div id="debouches" class="content__debouches">
                    <h2 class="titre-section-content">Débouchés</h2>
                    <?php echo get_field("debouches"); ?>
                </div>
                <?php
                    }
                ?>

                <?php
                    if(!empty(get_field("conditions_dacces"))){
                ?>
                <div id="conditions_dacces" class="content__conditions_dacces">
                    <h2 class="titre-section-content">Conditions d'accès</h2>
                    <?php echo get_field("conditions_dacces"); ?>                    
                </div>
                <?php
                    }
                ?>

                <?php
                    if(!empty(get_field("enseignements"))){
                ?>
                <div id="enseignements" class="content__enseignements">
                    <h2 class="titre-section-content">Enseignements</h2>
                    <?php echo get_field("enseignements"); ?>
                </div>
                <?php
                    }
                ?>

                <?php
                    if(!empty(get_field("periode"))){
                ?>
                <div id="periode" class="content__periode">
                    <h2 class="titre-section-content">Période en milieu profesionnelle</h2>
                    <?php echo get_field("periode"); ?>
                </div>
                <?php
                    }
                ?>

                <div class="content__brochure-apprentissage">
                    <?php
                        if(!empty($brochure = get_field("brochure"))){
                    ?>
                        <a href="<?php the_field('brochure'); ?>" class="lien-brochure" target="__blank">Télécharger le brochure</a>
                    <?php
                        }
                    ?>
                    <a href="#" class="lien-apprentissage">Intéressé par l'apprentisage ?</a>
                </div>
            </div>
        </div>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>