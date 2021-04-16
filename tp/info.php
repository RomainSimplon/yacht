<?php
include('header.php');
?>

<div class="main-image">
    <img src="image/yacht_card.jpg">
</div>

<div id="info" class="parent grid gap-xs">
    <div class="col-9 ">
        
    </div>
    <h1>Le Romainz - 40000 mètres</h1>
    <div id="trait"></div>
    <div class="text">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae magnam at quibusdam placeat dignissimos facere suscipit architecto ut earum? Repudiandae vero nemo voluptatum placeat dolore, possimus nesciunt ut officiis accusantium!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, eveniet pariatur? Suscipit reiciendis nostrum nesciunt enim sunt quasi sed? Exercitationem ea consequuntur labore voluptatum, eum velit commodi enim sit voluptatem.
        </p>
    </div>
    <div id="tab" class="child grid gap-xs">
        <div class="col-9@sm">

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Option</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Disponibilites</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Equipage</button>
                <button class="tablinks" onclick="openCity(event, 'Galerie')">Galerie Photos</button>
            </div>

            <div id="London" class="tabcontent">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, cumque cum modi commodi magnam eveniet illo incidunt magni autem dolore eligendi in. Neque rem, ratione officiis est voluptate dolore eaque!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nesciunt expedita eaque eos aspernatur praesentium, debitis repellat possimus quis ad vel nulla porro est, reiciendis, nostrum tempora esse mollitia necessitatibus.
                </p><br>
                <div class="child grid gap-xs">
                    <div class="icone col-2"><i class="fa fa-users" aria-hidden="true"></i> 12</div>
                    <div class="icone col-2"><i class="fa fa-bed" aria-hidden="true"></i> 6</div>
                    <div class="icone col-2"><i class="fa fa-cutlery" aria-hidden="true"> 2</i></div>
                    <div class="icone col-2"><i class="fa fa-anchor" aria-hidden="true"></i> 3</div>
                    <div class="icone col-2"><i class="fa fa-desktop" aria-hidden="true"></i> 7</div>
                    <div class="icone col-2"><i class="fa fa-life-ring" aria-hidden="true"></i> 12</div>
                </div><br>

                <div class="child grid gap-xs">

                    <div class="avantage col-6@sm">
                        <h3>Les +</h3><br>
                        lorem ipsum dolor amet sed<br>
                        lorem ipsum dolor amet sed<br>
                        lorem ipsum dolor amet sed<br>
                        lorem ipsum dolor amet sed<br>
                    </div>

                    <div class="map col-6@sm">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1925287.3683124927!2d6.90916738133588!3d43.3852098908836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1618319879473!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>

            <div id="Paris" class="tabcontent">

                <p><iframe src="https://calendar.google.com/calendar/embed?src=romain.chatelet.fr%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe></p>
            </div>

            <div id="Tokyo" class="tabcontent">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit dolorem atque ad iure. Voluptatum dicta beatae vero minus labore distinctio? Veniam nam illo nostrum voluptates molestiae atque ipsum veritatis beatae.</p>

                <div class="child grid gap-xs">
                    <div class="card col-3">
                        <figure class="card__img">
                            <img src="image/yacht_équipage_1.jpeg" alt="Card preview img" height="120">
                        </figure>
                        <div class="card__content">
                            <div class="text-component">
                                <p class="text-sm color-contrast-medium">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi porro sit aliquid.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-3">
                        <figure class="card__img">
                            <img src="image/yacht_equipage_2.jpg" alt="Card preview img" height="120">
                        </figure>
                        <div class="card__content">
                            <div class="text-component">
                                <p class="text-sm color-contrast-medium">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi porro sit aliquid.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-3">
                        <figure class="card__img">
                            <img src="image/yatch_equipage_3.png" alt="Card preview img" height="130">
                        </figure>
                        <div class="card__content">
                            <div class="text-component">
                                <p class="text-sm color-contrast-medium">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi porro sit aliquid.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-3">
                        <figure class="card__img">
                            <img src="image/yacht_equipage_4.png" alt="Card preview img" height="120" width="200">
                        </figure>
                        <div class="card__content">
                            <div class="text-component">
                                <p class="text-sm color-contrast-medium">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi porro sit aliquid.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Galerie" class="tabcontent">
                <section id="actu">
                    <div class="carrousel">
                        <h4>Les actualités du Yacht</h4>
                        <div class="carousel flex flex-column js-carousel" data-drag="on">


                            <!-- Flickity HTML init -->
                            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                            </div>
                        </div>
                </section>

            </div>

        </div>
        <div class="col-3">
            <h5 class="titre-color">Récapitulatif de la demande</h5><br>
            <p>Le Romainz<br>40000 mètres<br></p>
            <p class="equipage"> Equipage + info sup</p><br>
            <input type="date" placeholder="Arrivée"><br><br>
            <input type="date" placeholder="Départ"><br><br>
            <select>
                <option>Nombre de pers.</option><br>
                <option>1 pers.</option>
                <option>2 pers.</option>
                <option>3 pers.</option>
            </select><br>
            <br>
            <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, commodi corrupti? Tenetur cum consequatur voluptatum corporis.</p>

        </div>
        <div class="bouton">
            <button class="btn-book">BOOK NOW</button>
        </div>
    </div>
</div>


<section id="actu">
    <div class="carrousel">
        <h4>Les actualités du Yacht</h4>
        <div class="carousel flex flex-column js-carousel" data-drag="on">


            <!-- Flickity HTML init -->
            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
                <div class="gallery-cell"><img src="image/yacht_card.jpg"></div>
            </div>
        </div>
</section>








<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
<script src="js/main.js"></script>
</body>

</html>