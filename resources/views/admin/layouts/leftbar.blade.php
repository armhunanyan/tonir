<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/admin')}}" class="logo logo-large"><img src="/assets/images/logo.png" class="img-fluid" alt="logo"></a>
            <a href="{{url('/admin')}}" class="logo logo-small"><img src="/assets/images/logo.png" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{url('/admin')}}">
                        <i class="sl-icon-chart"></i> <span>Թոնիրներ</span>
                        {{-- <img src="assets/images/svg-icon/widgets.svg" class="img-fluid" alt="widgets"> --}}
                    </a>
                </li> 
                <li>
                    <a href="{{url('/admin/product/create')}}">
                        <i class="sl-icon-plus"></i> <span>Ավելացնել թոնիր</span>
                    </a>
                </li> 
                                          
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>