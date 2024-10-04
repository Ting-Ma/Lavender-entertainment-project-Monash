<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?= $this->Html->meta('icon') ?>

        <title><?= $this->fetch('title') ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)--> 
        <?= $this->Html->css('styles.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <style>
        .logo {
            width: 300px; /* Adjust this value to your desired width */
            height: auto; /* This will maintain the aspect ratio */
        }
        </style>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">The perfect venue for your occasion</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Choose one of many venues</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue1.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[0]['name'] ?></h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">1000</span>
                                    starting $<?= $data[0]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Banquet</span><!-- end ngIf: workspace.PrimaryVenueType --> Hall</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[0]['street'] ?>, <?= $data[0]['suburb'] ?>, <?= $data[0]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                 <?= $this->Form->postLink(
                   'Send Request',
                  ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[0]['id'],'name'=>$data[0]['name']]], // Modify the URL as needed
                  ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                 ) ?>
         </div>
</div> 
                        </div>
                    </div>  
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue2.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[1]['name'] ?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">3000</span>
                                    starting $<?= $data[1]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Wedding</span><!-- end ngIf: workspace.PrimaryVenueType --> Events</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[1]['street'] ?>, <?= $data[1]['suburb'] ?>, <?= $data[1]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[1]['id'],'name'=>$data[1]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue3.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[2]['name'] ?></h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$2000.00</span>
                                    Starting $<?= $data[2]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Boutique</span><!-- end ngIf: workspace.PrimaryVenueType --> Function</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[2]['street'] ?>, <?= $data[2]['suburb'] ?>, <?= $data[2]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[2]['id'],'name'=>$data[2]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue4.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[3]['name'] ?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$10,000</span>
                                    Starting $<?= $data[3]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Festival</span><!-- end ngIf: workspace.PrimaryVenueType --> Events</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[3]['street'] ?>, <?= $data[3]['suburb'] ?>, <?= $data[3]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[3]['id'],'name'=>$data[3]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue5.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[4]['name'] ?></h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$1800.00</span>
                                    Starting $<?= $data[4]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Traditional</span><!-- end ngIf: workspace.PrimaryVenueType --> Function Room</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[4]['street'] ?>, <?= $data[4]['suburb'] ?>, <?= $data[4]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[4]['id'],'name'=>$data[4]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue6.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[5]['name'] ?></h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$8888</span>
                                    Starting $<?= $data[5]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Outdoor</span><!-- end ngIf: workspace.PrimaryVenueType --> Spring/Summer Style</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[5]['street'] ?>, <?= $data[5]['suburb'] ?>, <?= $data[5]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[5]['id'],'name'=>$data[5]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue7.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[6]['name'] ?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$7000</span>
                                    Starting $<?= $data[6]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">HSU</span><!-- end ngIf: workspace.PrimaryVenueType --> Events</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[6]['street'] ?>, <?= $data[6]['suburb'] ?>, <?= $data[6]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[6]['id'],'name'=>$data[6]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/mockData/venue8.jpg" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $data[7]['name'] ?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20,000.00</span>
                                    Starting $<?= $data[7]['price'] ?>
                                    <div class="card__text-wrap">    
                                        <h5 class="card__title ng-binding"><!-- ngIf: workspace.PrimaryVenueType --><span class="card__venue-primary-type ng-binding ng-scope" ng-if="workspace.PrimaryVenueType">Boutique</span><!-- end ngIf: workspace.PrimaryVenueType --> Indoor Space</h5>
                                        <!-- ngIf: $root.user && $root.user.Role == 'admin' -->
                                        <span class="card__subtitle ng-binding"><?= $data[7]['street'] ?>, <?= $data[7]['suburb'] ?>, <?= $data[7]['postcode'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center">
                                <?= $this->Form->postLink(
                                              'Send Request',
                                              ['controller' => 'Booking', 'action' => 'clientBook', '?' => ['venue_id' => $data[7]['id'],'name'=>$data[7]['name']]], // Modify the URL as needed
                                                ['class' => 'btn btn-outline-dark mt-auto', 'id' => 'sendRequestButton']
                                                 ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
            </div>
        
            
        
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html>