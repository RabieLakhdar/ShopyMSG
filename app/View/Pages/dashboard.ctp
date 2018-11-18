<!--
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">850</h3>
                      <h6>Products Sold</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">$748</h3>
                      <h6>Net Profit</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">146</h3>
                      <h6>New Customers</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">99.89 %</h3>
                      <h6>Customer Satisfaction</h6>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row match-height">
          <div class="col-xl-8 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
              <div class="card-header card-header-transparent py-20">
                <div class="btn-group dropdown">
                  <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                  <div class="dropdown-menu animate" role="menu">
                    <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">profit</a>
                  </div>
                </div>
                <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                  <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                </ul>
              </div>
              <div class="widget-content tab-content bg-white p-20">
                <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                  <div class="table-responsive">
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">Product</th>
                          <th class="border-top-0">Customers</th>
                          <th class="border-top-0">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-truncate">iPhone X</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe"
                              class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-19.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols"
                              class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-18.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver"
                              class="avatar avatar-sm pull-up">
                              <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-17.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>

                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+4 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$8999</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Pixel 2</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Scott"
                              class="avatar avatar-sm pull-up">


  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-16.png',array('class'=>'media-object rounded-circle','alt'=>'shopMessage')) ?>

                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Charles Miller"
                              class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-15.png',array('class'=>'media-object rounded-circle','alt'=>'shopMessage')) ?>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$5550</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">OnePlus</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Christine Ramos"
                              class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-11.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Thomas Brewer"
                              class="avatar avatar-sm pull-up">
                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-10.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Chapman"
                              class="avatar avatar-sm pull-up">
                               <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-9.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+3 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$9000</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Galaxy</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Ryan Schneider"
                              class="avatar avatar-sm pull-up">
                              <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-14.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Tiffany Oliver"
                              class="avatar avatar-sm pull-up">
                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-13.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joan Reid"
                              class="avatar avatar-sm pull-up">
                            <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-12.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$7500</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">Moto Z2</td>
                          <td class="text-truncate p-1">
                            <ul class="list-unstyled users-list m-0">
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                              class="avatar avatar-sm pull-up">
                               <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-8.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                              class="avatar avatar-sm pull-up">
                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-7.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                              class="avatar avatar-sm pull-up">
                               <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-6.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                              </li>
                              <li class="avatar avatar-sm">
                                <span class="badge badge-info">+1 more</span>
                              </li>
                            </ul>
                          </td>
                          <td class="text-truncate">$8500</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                      href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Invoice#</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Products</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Shipping</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">

                            <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-4.png',array('class'=>'media-object rounded-circle','alt'=>"ShopMessage")) ?>
                          </span>
                          <span>Elizabeth W.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">

                            <?php echo $this->Html->image('admin/images/portfolio/portfolio-1.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">

         <?php echo $this->Html->image('admin/images/portfolio/portfolio-2.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">

                            <?php echo $this->Html->image('admin/images/portfolio/portfolio-4.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>                          Declined</td>
                        <td class="text-truncate"><a href="#">INV-001002</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
           <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-5.png',array('class'=>'box-shadow-2','alt'=>"ShopMessage")) ?>
                          </span>
                          <span>Doris R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portfolio/portfolio-5.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                               <?php echo $this->Html->image('admin/images/portfolio/portfolio-6.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>



                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+2 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1850.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>                          Pending</td>
                        <td class="text-truncate"><a href="#">INV-001003</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-6.png',array('class'=>'box-shadow-2','alt'=>"ShopMessage")) ?>
                          </span>
                          <span>Megan S.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">

                              <?php echo $this->Html->image('admin/images/portfolio/portfolio-2.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius2','alt'=>"ShopMessage")) ?>
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portfolio/portfolio-5.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 3200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001004</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                   <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-7.png',array('class'=>'box-shadow-2','alt'=>"ShopMessage")) ?>
                          </span>
                          <span>Andrew D.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portfolio/portfolio-6.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">


                                <?php echo $this->Html->image('admin/images/portfolio/portfolio-1.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 4500.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001005</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">

                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-9.png',array('class'=>'box-shadow-2','alt'=>"ShopMessage")) ?>
                          </span>
                          <span>Walter R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">


                                <?php echo $this->Html->image('admin/images/portfolio/portfolio-5.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">

                                <?php echo $this->Html->image('admin/images/portfolio/portfolio-3.jpg',array('class'=>'media-object rounded-circle no-border-top-radius no-border-bottom-radius','alt'=>"ShopMessage")) ?>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%"
                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1500.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-content ">
                <div id="cost-revenue" class="height-250 position-relative"></div>
              </div>
              <div class="card-footer">
                <div class="row mt-1">
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Products</h6>
                    <h2 class="block font-weight-normal">18.6 k</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%"
                      aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Sales</h6>
                    <h2 class="block font-weight-normal">64.54 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Cost</h6>
                    <h2 class="block font-weight-normal">24.38 B</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%"
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Revenue</h6>
                    <h2 class="block font-weight-normal">36.72 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%"
                      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body sales-growth-chart">
                  <div id="monthly-sales" class="height-250"></div>
                </div>
              </div>
              <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                  <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                  <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a>
                  <span class="text-muted">for the last year.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row match-height">
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic Card</h4>
              </div>
              <div class="card-content">


                                <?php echo $this->Html->image('admin/images/carousel/05.jpg',array('class'=>'img-fluid','alt'=>"ShopMessage")) ?>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                  <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Horizontal Timeline</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="card-text">
                    <section class="cd-horizontal-timeline">
                      <div class="timeline">
                        <div class="events-wrapper">
                          <div class="events">
                            <ol>
                              <li><a href="#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
                              <li><a href="#0" data-date="28/02/2015">28 Feb</a></li>
                              <li><a href="#0" data-date="20/04/2015">20 Mar</a></li>
                              <li><a href="#0" data-date="20/05/2015">20 May</a></li>
                              <li><a href="#0" data-date="09/07/2015">09 Jul</a></li>
                              <li><a href="#0" data-date="30/08/2015">30 Aug</a></li>
                              <li><a href="#0" data-date="15/09/2015">15 Sep</a></li>
                            </ol>
                            <span class="filling-line" aria-hidden="true"></span>
                          </div>
                        </div>
                        <ul class="cd-timeline-navigation">
                          <li><a href="#0" class="prev inactive">Prev</a></li>
                          <li><a href="#0" class="next">Next</a></li>
                        </ul>
                      </div>
                      <div class="events-content">
                        <ol>
                          <li class="selected" data-date="16/01/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">

                                <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-5.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="28/02/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">

                                   <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-6.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="20/04/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">

                                       <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-7.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="20/05/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">

                                   <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-8.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="09/07/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-9.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="30/08/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                   <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-6.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                          <li data-date="15/09/2015">
                            <blockquote class="blockquote border-0">
                              <div class="media">
                                <div class="media-left">
                                  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-7.png',array('class'=>'media-object img-xl mr-1','alt'=>"ShopMessage")) ?>
                                </div>
                                <div class="media-body">
                                  Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                </div>
                              </div>
                              <footer class="blockquote-footer text-right">Steve Jobs
                                <cite title="Source Title">Entrepreneur</cite>
                              </footer>
                            </blockquote>
                            <p class="lead mt-2">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                              fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur
                              aspernatur at.
                            </p>
                          </li>
                        </ol>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
              <div class="card-header bg-transparent border-0">
                <h2 class="error-code text-center mb-2">401</h2>
                <h3 class="text-uppercase text-center">Error 401 - Unauthorized Access.</h3>
              </div>
              <div class="card-content">
                <fieldset class="row py-2">
                  <div class="input-group col-12">
                    <input type="text" class="form-control form-control-xl input-xl border-grey border-lighten-1 "
                    placeholder="Search..." aria-describedby="button-addon2">
                    <span class="input-group-append" id="button-addon2">
                      <button class="btn btn-lg btn-secondary border-grey border-lighten-1" type="button"><i class="ft-search"></i></button>
                    </span>
                  </div>
                </fieldset>
                <div class="row py-2">
                  <div class="col-12 col-sm-6 col-md-6">
                    <a href="index.html" class="btn btn-primary btn-block"><i class="ft-home"></i> Back to Home</a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6">
                    <a href="search-website.html" class="btn btn-danger btn-block"><i class="ft-search"></i>  Advanced search</a>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="row">
                  <p class="text-muted text-center col-12 py-1">© 2019 <a href="#">Shopymsg </a>Crafted with <i class="ft-heart pink"> </i>                    by <a href="http://themeforest.net/user/pixinvent/portfolio"
                    target="_blank">Casaprojets</a></p>
                  <div class="col-12 text-center">
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                      <span class="la la-facebook"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                      <span class="la la-twitter"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                      <span class="la la-linkedin font-medium-4"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                      <span class="la la-github font-medium-4"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
