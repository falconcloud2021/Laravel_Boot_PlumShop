@extends('layouts.shop')

@section('content')

<!-- CONTENT START -->
  <div class="content"> 

    <!--======= Construction Store =========-->
    <section class="section-p-60px construction-store">
      <div class="container"> 
        
        <!--  Tittle -->
        {{-- <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3>OUR STORE</h3>
          <hr>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
        </div> --}}
        <div class="row">
          <div class="col-md-3  animate fadeInLeft" data-wow-delay="0.4s">
            <div class="categories">
              <h6>CATEOGRIES</h6>
              <!-- Nav tabs -->
              <ul class="nav nav-pills nav-stacked" role="tablist">
                <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">MEN’S</a></li>
                <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">WOMAN</a></li>
                <li role="presentation"><a href="#access" aria-controls="access" role="tab" data-toggle="tab">ACCESSORIES</a></li>
                <li role="presentation"><a href="#cloth" aria-controls="shoes" role="tab" data-toggle="tab">COLOTHING</a></li>
                <li role="presentation"><a href="#sport" aria-controls="shoes" role="tab" data-toggle="tab">SPORT</a></li>
                <li role="presentation"><a href="#bags" aria-controls="shoes" role="tab" data-toggle="tab">BAGS</a></li>
                <li role="presentation"><a href="#shoes" aria-controls="shoes" role="tab" data-toggle="tab">SHOES</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9  animate fadeInRight" data-wow-delay="0.4s"> 
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- MEN’S  -->
              <div role="tabpanel" class="tab-pane fade in active" id="men"> 
                
                <!--  New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <div class="new-col-slide"> 
                    
                    <!-- Item -->
                    <div class="items-in"> 
                      <!-- Image --> 
                      <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                      <!-- Hover Details -->
                      <div class="over-item">
                        <ul class="animated fadeIn">
                          <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                          <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                          <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                          <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                          <!-- Rating Stars -->
                          <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <!-- Item Name -->
                      <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="items-in">
                      <div class="off-tag"> -30% </div>
                      <!-- Image --> 
                      <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                      <!-- Hover Details -->
                      <div class="over-item">
                        <ul class="animated fadeIn">
                          <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                          <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                          <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                          <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                          <!-- Rating Stars -->
                          <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <!-- Item Name -->
                      <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="items-in">
                      <div class="new-tag"> NEW </div>
                      <!-- Image --> 
                      <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                      <!-- Hover Details -->
                      <div class="over-item">
                        <ul class="animated fadeIn">
                          <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                          <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                          <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                          <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                          <!-- Rating Stars -->
                          <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <!-- Item Name -->
                      <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="items-in"> 
                      
                      <!-- Image --> 
                      <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                      <!-- Hover Details -->
                      <div class="over-item">
                        <ul class="animated fadeIn">
                          <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                          <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                          <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                          <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                          <!-- Rating Stars -->
                          <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                        </ul>
                      </div>
                      <!-- Item Name -->
                      <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- WOMAN -->
              <div role="tabpanel" class="tab-pane fade" id="women"> 
                
                <!-- New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <ul class="row">
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in">
                        <div class="off-tag"> -30% </div>
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- ACCESSORIES -->
              <div role="tabpanel" class="tab-pane fade" id="access"> 
                
                <!-- New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <ul class="row">
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in">
                        <div class="off-tag"> -30% </div>
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- CLOUTH -->
              <div role="tabpanel" class="tab-pane fade" id="cloth"> 
                
                <!-- New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <ul class="row">
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in">
                        <div class="off-tag"> -30% </div>
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- Sports -->
              <div role="tabpanel" class="tab-pane fade" id="sport"> 
                
                <!-- New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <ul class="row">
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in">
                        <div class="off-tag"> -30% </div>
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- Bags -->
              <div role="tabpanel" class="tab-pane fade" id="bags"> 
                <!-- New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <ul class="row">
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in">
                        <div class="off-tag"> -30% </div>
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              
              <!-- Shoes -->
              <div role="tabpanel" class="tab-pane fade" id="shoes"> 
                <!-- New Arrival Tabs Products  -->
                <div class="popurlar_product">
                  <ul class="row">
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in">
                        <div class="off-tag"> -30% </div>
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-2.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-1.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD <span class="text-line">129.00 USD</span></span> </div>
                      </div>
                    </li>
                    
                    <!-- Item -->
                    <li class="col-sm-4">
                      <div class="items-in"> 
                        <!-- Image --> 
                        <img src="/shop/images/construction/item-img-3.jpg" alt=""> 
                        <!-- Hover Details -->
                        <div class="over-item">
                          <ul class="animated fadeIn">
                            <li> <a href="/shop/images/construction/item-img-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                            <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                            <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                            <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                            <!-- Rating Stars -->
                            <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                          </ul>
                        </div>
                        <!-- Item Name -->
                        <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Featured -->
    <section class="section-p-30px feature-con">
      <div class="container">
        <ul class="row">
          <li class="col-md-4  animate fadeInLeft" data-wow-delay="0.4s"> <a href="#."> <img src="/shop/images/construction/feature-img-1.jpg" alt="" > </a>
            <h6>BUILDING PROCESS</h6>
            <hr>
            <p class="font-montserrat">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
            <a href="#." class="btn btn-small btn-dark">READ MORE</a> </li>
          <li class="col-md-4  animate fadeInUp" data-wow-delay="0.4s"> <a href="#."> <img src="/shop/images/construction/feature-img-2.jpg" alt="" > </a>
            <h6>PROJECT MANAGEMENT</h6>
            <hr>
            <p class="font-montserrat">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
            <a href="#." class="btn btn-small btn-dark">READ MORE</a> </li>
          <li class="col-md-4  animate fadeInRight" data-wow-delay="0.4s"> <a href="#."> <img src="/shop/images/construction/feature-img-3.jpg" alt="" > </a>
            <h6>QUALITY CONTRUCTION</h6>
            <hr>
            <p class="font-montserrat">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
            <a href="#." class="btn btn-small btn-dark">READ MORE</a> </li>
        </ul>
      </div>
    </section>
    
    <!-- SERVICES -->
    <section class="section-p-60px services">
      <div class="container"> 
        
        <!-- TITTLE -->
        <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3>OUR SERVICES</h3>
          <hr>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
        </div>
        <ul class="row">
          
          <!-- SERVICES -->
          <li class="col-md-4  animate fadeInUp" data-wow-delay="0.4s">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-building-o"></i> </div>
              </div>
              <div class="media-body">
                <h6>BUILDINGS</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
              </div>
            </div>
          </li>
          
          <!-- SERVICES -->
          <li class="col-md-4  animate fadeInUp" data-wow-delay="0.6s">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-motorcycle"></i> </div>
              </div>
              <div class="media-body">
                <h6>METAL ROOFING</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
              </div>
            </div>
          </li>
          
          <!-- SERVICES -->
          <li class="col-md-4 animate fadeInUp" data-wow-delay="0.8s">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-ship"></i> </div>
              </div>
              <div class="media-body">
                <h6>CONTRUCTION CONSULTANT</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
              </div>
            </div>
          </li>
        </ul>
        <ul class="row">
          
          <!-- SERVICES -->
          <li class="col-md-4  animate fadeInUp" data-wow-delay="0.4s">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-bar-chart"></i> </div>
              </div>
              <div class="media-body">
                <h6>GENERAL CONTRACTING</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
              </div>
            </div>
          </li>
          
          <!-- SERVICES -->
          <li class="col-md-4  animate fadeInUp" data-wow-delay="0.6s">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-cubes"></i> </div>
              </div>
              <div class="media-body">
                <h6>INERIOR DESIGN</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
              </div>
            </div>
          </li>
          
          <!-- SERVICES -->
          <li class="col-md-4  animate fadeInUp" data-wow-delay="0.8s">
            <div class="media">
              <div class="media-left">
                <div class="icon"> <i class="fa fa-diamond"></i> </div>
              </div>
              <div class="media-body">
                <h6>ARCHITECTURE DESIGN</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
    <!--======= Portfolio =========-->
    <section class="section-p-60px portfolio port-wrap no-padding-b">
      <div class="container"> 
        <!--  Tittle -->
        <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3>OUR PORTFOLIO</h3>
          <hr>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
        </div>
        
        <!--======= NAV LINKS =========-->
        <ul class="nav-links filter  animate fadeInUp" data-wow-delay="0.4s">
          <li><a class="active" href="#." data-filter="*">ALL</a></li>
          <li><a href="#" data-filter=".int">INTERIOR DESIGN</a></li>
          <li><a href="#" data-filter=".arch">ARCHITECTURE</a></li>
          <li><a href="#" data-filter=".build">BULDING</a></li>
          <li><a href="#" data-filter=".plumb">PLUMPING</a></li>
        </ul>
      </div>
      <div class="container-fluid"> 
        <!-- Portfolio Row -->
        <ul class="port-folio-row row col-3 items  animate fadeInUp" data-wow-delay="0.4s">
          
          <!-- Project 1 -->
          <li class="item int plumb col-sm-3"> <img src="/shop/images/construction/project-img-1.jpg" alt=""> 
            <!-- Hover Info -->
            <div class="hover-port">
              <div class="position-center-center">
                <h5>GREEN HOUSE</h5>
                <hr>
                <a href="/shop/images/construction/project-img-1.jpg" data-lighter><i class="fa fa-search"></i></a> <a href="#."><i class="fa fa-link"></i></a> </div>
            </div>
          </li>
          
          <!-- Project 1 -->
          <li class="item  plumb col-sm-3"> <img src="/shop/images/construction/project-img-2.jpg" alt=""> 
            <!-- Hover Info -->
            <div class="hover-port">
              <div class="position-center-center">
                <h5>GREEN HOUSE</h5>
                <hr>
                <a href="/shop/images/construction/project-img-2.jpg" data-lighter><i class="fa fa-search"></i></a> <a href="#."><i class="fa fa-link"></i></a> </div>
            </div>
          </li>
          
          <!-- Project 1 -->
          <li class="item int plumb col-sm-3"> <img src="/shop/images/construction/project-img-3.jpg" alt=""> 
            <!-- Hover Info -->
            <div class="hover-port">
              <div class="position-center-center">
                <h5>GREEN HOUSE</h5>
                <hr>
                <a href="/shop/images/construction/project-img-3.jpg" data-lighter><i class="fa fa-search"></i></a> <a href="#."><i class="fa fa-link"></i></a> </div>
            </div>
          </li>
          
          <!-- Project 1 -->
          <li class="item  build plumb col-sm-3"> <img src="/shop/images/construction/project-img-4.jpg" alt=""> 
            <!-- Hover Info -->
            <div class="hover-port">
              <div class="position-center-center">
                <h5>GREEN HOUSE</h5>
                <hr>
                <a href="/shop/images/construction/project-img-4.jpg" data-lighter><i class="fa fa-search"></i></a> <a href="#."><i class="fa fa-link"></i></a> </div>
            </div>
          </li>
          
          <!-- Project 1 -->
          <li class="item int arch  col-sm-3"> <img src="/shop/images/construction/project-img-5.jpg" alt=""> 
            <!-- Hover Info -->
            <div class="hover-port">
              <div class="position-center-center">
                <h5>GREEN HOUSE</h5>
                <hr>
                <a href="/shop/images/construction/project-img-5.jpg" data-lighter><i class="fa fa-search"></i></a> <a href="#."><i class="fa fa-link"></i></a> </div>
            </div>
          </li>
          
          <!-- Project 1 -->
          <li class="item int arch build col-sm-3"> <img src="/shop/images/construction/project-img-6.jpg" alt=""> 
            <!-- Hover Info -->
            <div class="hover-port">
              <div class="position-center-center">
                <h5>GREEN HOUSE</h5>
                <hr>
                <a href="/shop/images/construction/project-img-6.jpg" data-lighter><i class="fa fa-search"></i></a> <a href="#."><i class="fa fa-link"></i></a> </div>
            </div>
          </li>
        </ul>
      </div>
      
      <!-- QUOTE -->
      <div class="quote">
        <div class="container">
          <h4>Looking for a quality and affordable constructor for your next project?</h4>
          <a href="#." class="btn">GET A QUOTE </a> </div>
      </div>
    </section>
    
    
    
    <!--======= Parallex =========-->
    <section class="parallex constra  animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.4">
      <div class="overlay">
        <div class="container  animate fadeInUp" data-wow-delay="0.4s">
          <h2>Construction <span class="text-color"> Equipment Clip Art </span></h2>
          <p>Our promise as a contractor is to build community va1lue into every project while delivering professional expertise, exceptional customers service and quality construction.</p>
          <a href="#." class="btn btn-corver">BULID THEME</a> <a href="#." class="btn btn-1 btn-corver">DISCOVER</a> </div>
      </div>
    </section>
    
    <!--======= WHO WE ARE =========-->
    <section class="section-p-60px who-we-are no-padding-b">
      <div class="container"> 
        
        <!--  Tittle -->
        <div class="tittle tittle-cont animate fadeInUp" data-wow-delay="0.4s">
          <h3>WHO WE ARE?</h3>
          <hr>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
        </div>
        
        <!--  Video Section -->
        <div class="vid animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.4">
          <div class="position-center-center"> <a href="#pop-open" class="link popup-vedio video-btn"></a> </div>
        </div>
        
        <!--======= POPUP VIDEO START =========-->
        <div id="pop-open" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <div class="video"> 
              <!--  Video Link -->
              <iframe src="https://player.vimeo.com/video/7449107"></iframe>
            </div>
          </div>
        </div>
        <!--======= POPUP VIDEO END =========-->
        
        <h3><span class="text-color  animate fadeInUp" data-wow-delay="0.4s"> SEBIAN </span>- BUILD YOUR DREAM</h3>
        <p class="font-montserrat  animate fadeInUp" data-wow-delay="0.4s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover .</p>
      </div>
      <a href="#." class="btn btn-corver  animate fadeInUp" data-wow-delay="0.4s">READ MORE</a> </section>
  </div>
    
@endsection