<?php
    include('header.php');
    ?>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1925287.3683124927!2d6.90916738133588!3d43.3852098908836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1618319879473!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <div id="dest" class="parent grid gap-xs">
        <div class="col-3@md"><input type="text" placeholder="&#xf041; Destination" style="font-family: New Tegomin,FontAwesome;"></div>
        <div class="col-2@md"><input type="date" placeholder="Destination"></div>
        <div class="col-2@md"><input type="date" placeholder="Destination"></div>
        <div class="col-2@md"><select>
                <option>Taille du bateau</option>
            </select></div>
        <div class="col-3@md"><button>RECHERCHER</button></div>

    </div>
    <h4 class="result">Résultats de votre recherche</h4>
    <p class="dispo">ou voir tous les Yacht disponible</p>

    <div id="filtre" class="parent grid gap-xs">
        <div class="col-3@md selec">
            <p>Filtrer<br>la sélection</p>
        </div>
        <div class="col-3@md">
            <p>Taille du bateau</p>
        </div>
        <div class="col-2@md">
            <p>Points d'achat</p>
        </div>
        <div class="col-2@md">
            <p>Pers a bord</p>
        </div>
        <div class="col-2@md">
            <p>Disponibilité</p>
        </div>
    </div>

    <div id="features" class="parent grid gap-xs">
        <div class="col-9@md">
            <div id="card" class="parent grid gap-xs">
                <?php
                $i = 0;
                while ($i <= 11) {
                    $i++;

                    echo '<div class="card col-4@md">
  <figure class="card__img">
    <img src="image/yacht_card.jpg" alt="Card preview img">
  </figure>

  <div class="card__content">
    <div class="text-component">
      <h4 class="title">Le Romainz-40000 mètres</h4>
      <p class="text-sm color-contrast-medium">
      <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> disponible </span>minimum 6jours 23H 59s<br><br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.<br>
      <i class="fa fa-users" aria-hidden="true"> 12 
      <i class="fa fa-anchor" aria-hidden="true"></i> Port d\'attache </i><a href="info.php"><button>Book now</button></a></p>
    </div>
  </div>
</div> ';
                }
                ?>
            </div>
        </div>
        <div class="col-3@md">
            <div id="slide" class="parent grid gap-xs">
                <div class="col-12@md">
                </div>
                <div class="col-12@md">
                </div>
            </div>
        </div>
    </div>


    <section id="actu">
        <div class="carrousel">
            <h4>Les actualités du  Yacht</h4>
            <div class="carousel flex flex-column js-carousel" data-drag="on">
            

<!-- Flickity HTML init -->
<div class="gallery js-flickity"
  data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
  <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
  <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
  <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
  <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
</div>
        </div>
    </section>










    
    <?php
    include './footer.php';
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
</body>
</html>