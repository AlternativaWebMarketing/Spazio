
        <main>
            <!-- início perfil -->
            <div class="profile" id="profile">
                <div class="container wow fadeIn">
                    <h3>Olá, eu sou o Marcos</h3>
                    <div class='profile-img'>
                        <figure>
                            <img src="<?php bloginfo(template_url); ?>/img/perfil.JPG" alt="foto perfil">
                        </figure>
                    </div>
                    <div class="profile-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores necessitatibus eos, animi veniam a similique aperiam unde, adipisci ratione voluptates voluptate tempora provident maiores sed fugiat est rerum, iusto recusandae!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectethelloworldur adipisicing elit. Asperiores necessitatibus eos, animi veniam a similique aperiam unde, adipisci ratione voluptates voluptate tempora provident maiores sed fugiat est rerum, iusto recusandae!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores necessitatibus eos, animi veniam a similique aperiam unde, adipisci ratione voluptates voluptate tempora provident maiores sed fugiat est rerum, iusto recusandae!
                        </p>
                        <div class="see-more">
                            <a class="btn">Veja mais <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- fim perfil -->
            <!-- início 'o que eu faço' -->
            <div class="my-works page-section" id="my-works">
                <div class="container wow fadeIn">
                    <h3>O que faço</h3>
                    <div class="items">

                        <div class='icon arq'>
                            <i class="fa icon-tools"></i>
                            <h5>Projetos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>

                        <div class='icon proj'>
                            <i class="fa icon-camera"></i>
                            <h5>Projetos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>

                        <div class='icon design'>
                            <i class="fa fa-facebook"></i>
                            <h5>Projetos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>

                        <div class='icon medic'>
                            <i class="fa fa-facebook"></i>
                            <h5>Projetos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fim 'o que eu faço' -->
            <!-- início portfolio -->
            <div class="portfolio" id="portfolio">
                <div class="container wow fadeIn">
                    <h3>Portfolio</h3>
                    <?php query_posts('post_type=portfolio && posts_per_page=8'); ?>
                    <ul>
                        <li>
                            <?php while(have_posts()) : the_post(); ?>
                            <figure class='imghvr-shutter-in-out-diag-2'>
                                <img src="<?php the_post_thumbnail_url('portfolio-thumb'); ?>" alt="">
                                <a href="">
                                    <figcaption>
                                            <h4><?php the_title(); ?></h4>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php wp_reset_query(); ?>
                </div>
                <a class="portfolio-btn" href='index.php/portfolio'>Veja mais <i class="fa fa-arrow-right"></i></a>

            </div>
            <!-- fim portfolio -->
            <!-- clientes -->
            <div class="clients">
                <div class="container">
                    <div id="carousel" class="owl-carousel owl-theme">
                        <div class='item'>
                            <i class="icon icon-profile-male"></i>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <h5><span></span>Walter</h5>
                        </div>

                        <div class='item'>
                            <i class="icon icon-profile-male"></i>
                            <p>
                                Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <h5><span></span>Walter</h5>
                        </div>

                        <div class='item'>
                            <i class="icon icon-profile-female"></i>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <h5><span></span>Anna</h5>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fim clientes -->
            <!-- contato -->
            <div class="contact" id="contact">
                <div class="container wow fadeIn">
                    <div class="subcontainer">
                        <h3>Contato</h3>
                        <section class="contactform">
                            <form action="">
                                <div class="form">
                                    <label for="">nome</label>
                                    <input type="text">
                                </div>
                                <div class="form">
                                    <label for="">email</label>
                                    <input type="text">
                                </div>
                                <div class="form">
                                    <label for="">assunto</label>
                                    <input type="text">
                                </div>
                                <textarea name="name"></textarea>

                                <input type="submit" value="Enviar mensagem">
                            </form>
                        </section>
                        <aside class="contactlist">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, natus officia molestiae maiores vel consequatur magni incidunt corporis ullam tempora et rem voluptas eum perferendis ipsam tenetur laudantium laboriosam totam.</p>
                            <h5><i class="fa fa-phone"></i> (24)3333-3333</h5>
                            <h5><i class="fa fa-envelope"></i> contato@mail.com</h5>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- fim contato -->
        </main>
        <?php include 'footer.php'; ?>
