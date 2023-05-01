@php
$id = Auth::user()->id;
$vendorId = App\Models\User::find($id);
@endphp
         
         <!--sidebar wrapper -->
         <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
               <div>
               <img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
               </div>
               <div>
                  <h4 class="logo-text">Vendor</h4>
               </div>
               <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
               </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
               <li>
                  <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class='bx bx-home-circle'></i>
                     </div>
                     <div class="menu-title">Dashboard</div>
                  </a>
                  <ul>
                     <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                     </li>
                     <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                     </li>
                     
                  </ul>
               </li>
               @if($vendorId->status === 'active')
               <li>
                  <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class="bx bx-category"></i>
                     </div>
                     <div class="menu-title">Product Manage</div>
                  </a>
                  <ul>
                     <li> <a href="{{ route('vendor.all.product')}}"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                     </li>
                     <li> <a href="{{ route('vendor.add.product')}}"><i class="bx bx-right-arrow-alt"></i>Add product</a>
                     </li>
                     
                  </ul>
               </li>

               <li>
                  <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class="bx bx-category"></i>
                     </div>
                     <div class="menu-title">All Product</div>
                  </a>
                  <ul>
                     <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                     </li>
                     <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Add product</a>
                     </li>
                     
                  </ul>
               </li>

               <li>
                  <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class="bx bx-category"></i>
                     </div>
                     <div class="menu-title">All order</div>
                  </a>
                  <ul>
                     <li> <a href="{{ route('vendor.order')}}"><i class="bx bx-right-arrow-alt"></i>Pending order</a>
                     </li>
                     
                     
                  </ul>
               </li>

               <li>
                  <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class="lni lni-indent-increase"></i>
                     </div>
                     <div class="menu-title"> Review Manage </div>
                  </a>
                  <ul>
                     <li> <a href="{{ route('vendor.all.review') }}"><i class="bx bx-right-arrow-alt"></i>All Review</a>
                     </li>

                     
                     
                  </ul>
				   </li>

               @else

               @endif

               <li class="menu-label">UI Elements</li>
               
               <li>
                  <a href="https://themeforest.net/user/codervent" target="_blank">
                     <div class="parent-icon"><i class="bx bx-support"></i>
                     </div>
                     <div class="menu-title">Support</div>
                  </a>
               </li>
            </ul>
            <!--end navigation-->
         </div>
         <!--end sidebar wrapper -->