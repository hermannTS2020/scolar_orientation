<body>
    <!--================Header Area =================-->
    <header class="header_area" style="background: black">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: black">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img style= "height: 70px; width: 160px;" src="<?= base_url() ?>assets/images/photo_logo.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto" >
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Accueil</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#" >Nos espaces</a>
                            <div class="sub-menu">
                                <ul>
                                    <?php foreach($espace as $rows): ?>
                                        <li>
                                            <a href="<?= base_url('Espace/index/'.$rows->id_espace)?>"><?= $rows->libelle?> </a>  
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Contact') ?>">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Connexion') ?>">Connexion</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li> 
                        <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>-->
                    </ul>
                </div> 
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
    
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                <h4>LAGON SUITES</h4>
                    <h2>Vous avez 05 raisons d'y séjourner</h2>
                    <p>Le Lagon Suites vous offre un espace agréable aux multiples variétés</p>
                    <a href="#" class="btn theme_btn button_hover">-----</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Reservez<br> Votre Suite</h2>
                    </div>
                    <div class="col-md-9">
                        <form action="<?= base_url('Reservation/envoyer') ?>" method="post" id="form">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <label for="date_debut" class="control-label mb-1">Date de debut(*) </label><br>
                                                <div class='input-group date' id='datetimepicker11'>   
                                                    <input type='datetime-local' name ="date_debut" id="date_debut" class="form-control" placeholder="Date de debut" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="date_debut" class="control-label mb-1">Date de fin(*) </label><br>
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='datetime-local' name ="date_fin" id="date_fin" class="form-control" placeholder="Date de fin" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <div class="form-group">
                                                    <label for="nom" class="control-label mb-1">Nom </label>
                                                    <input id="nom" name="nom" placeholder ="Votre nom" type="text" class="form-control" autocomplete="off" required>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="form-group">
                                                    <label for="email" class="control-label mb-1">Email</label>
                                                    <input id="email" name="email" placeholder ="Votre email" type="email" class="form-control" autocomplete="off" required>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <label>Choisissez votre suite</label><br>
                                            <div class="input-group">
                                                
                                                <select class="form-control espaceSelect" name = "id_espace">
                                                    <?php foreach($espace as $rows){?>
                                                        <option selected="selected" value="<?= $rows->id_espace ?>"><?= $rows->libelle ?></option>
                                                    <?php } ?>  
                                                </select>
                                            </div>
                                            
                                        </div><br>
                                        <button type="submit" class="btn btn-warning" id="envoyer">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->
    
    <!--================ Accomodation Area  =================-->
    
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Nos Espaces</h2>
                <p>05 suites de luxe et une salle de sport à votre disposition </p>
            </div>
            <div class="row mb_30">
                <?php foreach($espace as $rows): ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img style="width: 400px; height: 350px;" src="<?= base_url() ?>assets/images_upload/<?= $rows->image?>" alt="">
                                <a href="#" class="btn theme_btn button_hover">
                                    <?php if($rows->etat == 1) { ?>
                                        <?php echo "Occupé";?>
                                    <?php }else if($rows->etat == -1){?>
                                        <?php echo "Libre";?>
                                    <?php }else if($rows->etat == 0){?>
                                        <?php echo "Reservé";?>
                                    <?php }?>
                                </a>
                            </div>
                            <a href="#"><h4 class="sec_h4"><?= $rows->libelle?></h4></a>
                            
                            <a href="<?= base_url('Espace/index/'.$rows->id_espace)?>"><h4 class="sec_h4"><button class="btn btn-outline-primary">VISITER LA SUITE</button></h4></a>
                        </div>
                    </div> 
                    
                <?php endforeach; ?>
               
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->




    
    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Lagon Suites Facilities</h2>
                <p>Vos besoins sont à notre portée</p>
            </div>
            <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Room Service</h4>
                        <p>Nous passons vos commandes auprès des restaurants de votre choix et en assurons le service.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Salle de Sport</h4>
                        <p>Equipé d'un ensemble de machines haut de gamme, notre salle de sport vous apportera detente et relaxation ...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Service personnalisé</h4>
                        <p>Nous mettons à votre diposition un personnel dédié et à votre écoute.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Navette</h4>
                        <p>Au besoin, un chauffeur et une navette son mis à votre disposition.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Sécurité et Accessibilité</h4>
                        <p>Une sécurité accrue et un accès illimité à notre réseau WIFI haut débit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Un espace écologique</h4>
                        <p>Le respect de la nature est notre priorité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->
    
    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
       
    </section>
    <!--================ About History Area  =================-->
    
    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Ils nous ont fait confiance</h2>
                <p>Vous aussi, venez rejoindre le Lagon Suites. </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="<?= base_url() ?>assets/images/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Je suis tombé sous le charme dès mon premier regard </p>
                        <a href="#"><h4 class="sec_h4">Tatiana DOMKAM</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>    
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="<?= base_url() ?>assets/images/testtimonial-2.jpg" alt="">
                    <div class="media-body">
                        <p>Tout ce que je peux dire, c'est "Faites y un tour!" </p>
                        <a href="#"><h4 class="sec_h4">Cassandra Kouadjo</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="<?= base_url() ?>assets/images/blog/author.png" alt="">
                    <div class="media-body">
                        <p>It is just a wonderfull place to visit! </p>
                        <a href="#"><h4 class="sec_h4">Phill Scoot</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>    
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="<?= base_url() ?>assets/images/blog/c5.jpg" alt="">
                    <div class="media-body">
                        <p>Mon séjour fut très agréable. j'y reviendrais assurément. </p>
                        <a href="#"><h4 class="sec_h4">Mr Hans</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->
    
    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Espace récemment ajouté</h2>
            </div>
            
            <div class="row mb_30">
                <?php foreach($espaceRecent as $rows): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="<?= base_url() ?>assets/images_upload/<?= $rows->image?>" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <!--<a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>-->
                                </div>
                                <a href="#"><h4 class="sec_h4"><?= $rows->libelle?></h4></a>
                                <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.</p>
                            </div>	
                        </div>
                    </div>
                
                <?php endforeach; ?>
                
            </div>
        </div>
    </section>
    
    <!--================ Recent Area  =================-->
    
    
    
    
    
</body>

<script src="<?= base_url() ?>assets/cote_client/vendor/js/jquery-3.2.1.min.js"></script>

<script>
    $(document).ready(function(){
        window.FakeLoader.init({
          auto_hide:true,
          fade_timeout: 200,
          overlay_id:'fakeloader-overlay'

        }); 

        <?php if($this->session->flashdata('message_mail')=='success'){?>
			toastr.success('<span class="fa fa-check"></span> Votre reservation a été envoyé avec succès!');
        <?php unset($_SESSION['success']); }else if($this->session->flashdata('message_mail')=='erreur'){?>
            toastr.error('Une erreur a été rencontré lors de la reservation de votre suite!');
        <?php }else if($this->session->flashdata('message_mail')=='info'){ ?>
            toastr.error('Entrez des dates de séjour raisonnables !');
        <?php } ?>
    });
</script>
