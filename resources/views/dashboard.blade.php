@extends('layout/web')

@section('title','Dashboard')

@section('content')
<div class="main-panel">
     <div class="content-wrapper">
          <div class="content-wrapper">
               <div class="row">
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">1.500</h3>
                             <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-success ">
                             <span class="mdi mdi-arrow-top-right icon-item"></span>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Product</h6>
                     </div>
                   </div>
                 </div>
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">500</h3>
                             <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-success">
                             <span class="mdi mdi-arrow-top-right icon-item"></span>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">New Users</h6>
                     </div>
                   </div>
                 </div>
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">728</h3>
                             <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-danger">
                             <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Sales</h6>
                     </div>
                   </div>
                 </div>
                 <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-9">
                           <div class="d-flex align-items-center align-self-start">
                             <h3 class="mb-0">5.450</h3>
                             <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                           </div>
                         </div>
                         <div class="col-3">
                           <div class="icon icon-box-success ">
                             <span class="mdi mdi-arrow-top-right icon-item"></span>
                           </div>
                         </div>
                       </div>
                       <h6 class="text-muted font-weight-normal">Total Orders</h6>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <h4 class="card-title">Transaction History</h4>
                       <canvas id="transaction-history" class="transaction-chart"></canvas>
                       <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                         <div class="text-md-center text-xl-left">
                           <h6 class="mb-1">Transfer to Paypal</h6>
                           <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                         </div>
                         <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                           <h6 class="font-weight-bold mb-0">Rp.12.000.000</h6>
                         </div>
                       </div>
                       <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                         <div class="text-md-center text-xl-left">
                           <h6 class="mb-1">Tranfer to Bank</h6>
                           <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                         </div>
                         <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                           <h6 class="font-weight-bold mb-0">Rp.5.000.000</h6>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-8 grid-margin stretch-card">
                   <div class="card">
                     <div class="card-body">
                       <div class="d-flex flex-row justify-content-between">
                         <h4 class="card-title mb-1">New Orders</h4>
                       </div>
                       <div class="row">
                         <div class="col-12">
                           <div class="preview-list">
                             <div class="preview-item border-bottom">
                               <div class="preview-thumbnail">
                                 <div class="preview-icon bg-primary">
                                   <i class="mdi mdi-file-document"></i>
                                 </div>
                               </div>
                               <div class="preview-item-content d-sm-flex flex-grow">
                                 <div class="flex-grow">
                                   <h6 class="preview-subject">PLATSA</h6>
                                   <p class="text-muted mb-0">Chest of 3 drawers, white/Skatval light beige, 80x57x73 cm</p>
                                 </div>
                                 <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                   <p class="text-muted">15 minutes ago</p>
                                 </div>
                               </div>
                             </div>
                             <div class="preview-item border-bottom">
                               <div class="preview-thumbnail">
                                 <div class="preview-icon bg-primary">
                                   <i class="mdi mdi-file-document"></i>
                                 </div>
                               </div>
                               <div class="preview-item-content d-sm-flex flex-grow">
                                 <div class="flex-grow">
                                   <h6 class="preview-subject">VATNESTRÖM</h6>
                                   <p class="text-muted mb-0">Pocket sprung mattress, added/natural density, 180x200 cm</p>
                                 </div>
                                 <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                   <p class="text-muted">1 hour ago</p>
                                 </div>
                               </div>
                             </div>
                             <div class="preview-item border-bottom">
                               <div class="preview-thumbnail">
                                 <div class="preview-icon bg-primary">
                                   <i class="mdi mdi-file-document"></i>
                                 </div>
                               </div>
                               <div class="preview-item-content d-sm-flex flex-grow">
                                 <div class="flex-grow">
                                   <h6 class="preview-subject">LANDSKRONA </h6>
                                   <p class="text-muted mb-0">2-seat sofa, gunnared dark gray/wood</p>
                                 </div>
                                 <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                   <p class="text-muted">35 minutes ago</p>
                                 </div>
                               </div>
                             </div>
                             <div class="preview-item border-bottom">
                               <div class="preview-thumbnail">
                                 <div class="preview-icon bg-primary">
                                   <i class="mdi mdi-file-document"></i>
                                 </div>
                               </div>
                               <div class="preview-item-content d-sm-flex flex-grow">
                                 <div class="flex-grow">
                                   <h6 class="preview-subject">BOASJÖ</h6>
                                   <p class="text-muted mb-0">Bathroom accessories, set of 4, white</p>
                                 </div>
                                 <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                   <p class="text-muted">55 minutes ago</p>
                                 </div>
                               </div>
                             </div>
                             <div class="preview-item">
                               <div class="preview-thumbnail">
                                 <div class="preview-icon bg-primary">
                                   <i class="mdi mdi-file-document"></i>
                                 </div>
                               </div>
                               <div class="preview-item-content d-sm-flex flex-grow">
                                 <div class="flex-grow">
                                   <h6 class="preview-subject">ENHET</h6>
                                   <p class="text-muted mb-0">Mirror cabinet with 1 door, white, 40x17x75 cm</p>
                                 </div>
                                 <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                   <p class="text-muted">50 minutes ago</p>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Visitors by Countries</h4>
                          <div class="row">
                            <div class="col-md-5">
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <i class="flag-icon flag-icon-us"></i>
                                      </td>
                                      <td>USA</td>
                                      <td class="text-right"> 1500 </td>
                                      <td class="text-right font-weight-medium"> 56.35% </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <i class="flag-icon flag-icon-de"></i>
                                      </td>
                                      <td>Germany</td>
                                      <td class="text-right"> 800 </td>
                                      <td class="text-right font-weight-medium"> 33.25% </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <i class="flag-icon flag-icon-au"></i>
                                      </td>
                                      <td>Australia</td>
                                      <td class="text-right"> 760 </td>
                                      <td class="text-right font-weight-medium"> 15.45% </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <i class="flag-icon flag-icon-gb"></i>
                                      </td>
                                      <td>United Kingdom</td>
                                      <td class="text-right"> 450 </td>
                                      <td class="text-right font-weight-medium"> 25.00% </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <i class="flag-icon flag-icon-ro"></i>
                                      </td>
                                      <td>Romania</td>
                                      <td class="text-right"> 620 </td>
                                      <td class="text-right font-weight-medium"> 10.25% </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <i class="flag-icon flag-icon-br"></i>
                                      </td>
                                      <td>Brazil</td>
                                      <td class="text-right"> 230 </td>
                                      <td class="text-right font-weight-medium"> 75.00% </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="col-md-7">
                              <div id="audience-map" class="vector-map"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

     <!-- container-scroller -->
     <script src="{{ asset('template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="{{ asset('template/assets/vendors/chart.js/Chart.min.js') }}"></script>
     <script src="{{ asset('template/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
     <script src="{{ asset('template/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
     <script src="{{ asset('template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
     <script src="{{ asset('template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('template/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="{{ asset('template/assets/js/off-canvas.js') }}"></script>
     <script src="{{ asset('template/assets/js/hoverable-collapse.js') }}"></script>
     <script src="{{ asset('template/assets/js/misc.js') }}"></script>
     <script src="{{ asset('template/assets/js/settings.js') }}"></script>
     <script src="{{ asset('template/assets/js/todolist.js') }}"></script>
     <!-- endinject -->
     <!-- Custom js for this page -->
     <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
     <!-- End custom js for this page -->
@endsection