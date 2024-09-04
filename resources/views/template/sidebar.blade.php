<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="/dashboard">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/imas.png" alt="" style="width: 130px">
						  {{-- <h3><b>Iman</b> Sport</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="/dashboard">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		  
        <li class="header nav-small-cap">Data Master</li>
        <li class="treeview">
            <a href="#">
              <i data-feather="server"></i>
              <span>Merek</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/merek"><i class="ti-more"></i>Data Merek</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i data-feather="server"></i>
              <span>Kategori</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/kategori"><i class="ti-more"></i>Kelola Kategori</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i data-feather="server"></i>
              <span>Produk</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/produk-add"><i class="ti-more"></i>Tambah Produk</a></li>
              <li><a href="/produk"><i class="ti-more"></i>Kelola Produk</a></li>
            </ul>
        </li>		  
        
        <li class="treeview">
          <a href="#">
            <i data-feather="server"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/slider"><i class="ti-more"></i>Kelola Slider</a></li>
          </ul>
      </li>
		  
		<li class="header nav-small-cap">Kelola Pesanan</li>		  
		  
		<li class="treeview">
            <a href="#">
              <i data-feather="server"></i>
              <span>Pesanan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li> --}}
              <li><a href="/pesanan"><i class="ti-more"></i>Pesanan Masuk</a></li>
            </ul>
          </li>	
        

        <li class="header nav-small-cap">Pengaturan</li>		  
		  
		<li class="treeview">
            <a href="#">
              <i data-feather="server"></i>
              <span>Tables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
              <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
            </ul>
        </li>

      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="/logout" class="btn" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
  