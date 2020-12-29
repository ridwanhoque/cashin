
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Dashtreme Admin</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li class="active">
       <a class="active" href="index.html">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>

     <li>
       <a href="{{ url('deposits') }}">
         <i class="zmdi zmdi-invert-colors"></i> <span>Deposit</span>
       </a>
     </li>

     <li>
       <a href="{{ url('withdraws') }}">
         <i class="zmdi zmdi-format-list-bulleted"></i> <span>Withdraw</span>
       </a>
     </li>

     <li>
       <a href="{{ url('accounts') }}">
         <i class="zmdi zmdi-grid"></i> <span>Account</span>
       </a>
     </li>

     <li>
       <a href="{{ url('exchanges') }}">
         <i class="zmdi zmdi-face"></i> <span>Exchange</span>
       </a>
     </li>

   </ul>
  
  </div>