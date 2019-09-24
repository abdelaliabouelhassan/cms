  <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
              <!-- ============================================================== -->
              <!-- pageheader  -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="page-header">
                          <h2 class="pageheader-title"> Admin Dashboard </h2>
                          <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                          <div class="page-breadcrumb">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Concept - Admin Dashboard Template</li>
                                  </ol>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                      <div class="row">

                          <?php
                            require "../resours/templates/back/fun/fun_view.php";
                        filter_cat();

                            ?>










                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                      <div class="product-sidebar">
                          <div class="product-sidebar-widget">
                              <h4 class="mb-0">E-Commerce Filter</h4>
                          </div>
                          <div class="product-sidebar-widget">
                              <h4 class="product-sidebar-widget-title">Category</h4>

                              <form action="index?View" method="POST">
                                  <?php
                                    get_cat_felter();
                                    ?>


                          </div>
                          <div class="product-sidebar-widget">
                              <h4 class="product-sidebar-widget-title">Size</h4>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="size-1">
                                  <label class="custom-control-label" for="size-1">Small</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="size-2">
                                  <label class="custom-control-label" for="size-2">Medium</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="size-3">
                                  <label class="custom-control-label" for="size-3">Large</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="size-4">
                                  <label class="custom-control-label" for="size-4">Extra Large</label>
                              </div>
                          </div>
                          <div class="product-sidebar-widget">
                              <h4 class="product-sidebar-widget-title">Brand</h4>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="brand-1">
                                  <label class="custom-control-label" for="brand-1">Brand Name #1</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="brand-2">
                                  <label class="custom-control-label" for="brand-2">Brand Name #2</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="brand-3">
                                  <label class="custom-control-label" for="brand-3">Brand Name #3</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="brand-4">
                                  <label class="custom-control-label" for="brand-4">Brand Name #4</label>
                              </div>
                          </div>
                          <div class="product-sidebar-widget">
                              <h4 class="product-sidebar-widget-title">Color</h4>
                              <div class="custom-control custom-radio custom-color-blue ">
                                  <input type="radio" id="color-1" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="color-1">Blue</label>
                              </div>
                              <div class="custom-control custom-radio custom-color-red ">
                                  <input type="radio" id="color-2" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="color-2">Red</label>
                              </div>
                              <div class="custom-control custom-radio custom-color-yellow ">
                                  <input type="radio" id="color-3" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="color-3">Yellow</label>
                              </div>
                              <div class="custom-control custom-radio custom-color-black ">
                                  <input type="radio" id="color-4" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="color-4">Black</label>
                              </div>
                          </div>
                          <div class="product-sidebar-widget">
                              <h4 class="product-sidebar-widget-title">Price</h4>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="price-1">
                                  <label class="custom-control-label" for="price-1">$$</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="price-2">
                                  <label class="custom-control-label" for="price-2">$$$</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="price-3">
                                  <label class="custom-control-label" for="price-3">$$$$</label>
                              </div>
                          </div>
                          <div class="product-sidebar-widget">
                              <input type="submit" class="btn btn-outline-light" name="Filter" value="Filter">
                          </div>

                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- footer -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- end footer -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- end wrapper  -->
      <!-- ============================================================== -->
  </div>