<!-- HEADER -->
<header>

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="/" class="logo">
                            <img src="/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-5">
                    <div class="header-search">
                        <form action="/search/index.php" class="search">
                            <input id="title-search-input" type="text" name="q" value="" placeholder="{{__('header.search')}}..." maxlength="50" autocomplete="off">
                            <button type="submit">
                                {{__('header.search')}}...
                                <svg class="svg-search-icon">
                                    <path d="M17.707 16.293l-4.25-4.25A7.456 7.456 0 0 0 15 7.5 7.5 7.5 0 1 0 7.5 15c1.71 0 3.282-.58 4.543-1.543l4.25 4.25 1.414-1.414zM2 7.5a5.5 5.5 0 0 1 11 0 5.5 5.5 0 0 1-11 0z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-4 clearfix">

                    <div class="flags">
                        <a href="{{ LaravelLocalization::getLocalizedURL('am') }}"><img src="/img/flags/hy.png" alt="Հայերեն" /></a>
                        <a href="{{ LaravelLocalization::getLocalizedURL('ru') }}"><img src="/img/flags/ru.png" alt="Русский язык" /></a>
                        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><img src="/img/flags/us.png" alt="English" /></a>
                    </div>
                    <div class="header-ctn">

                        <span class="phone">+374-98-200-240</span>
                        
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->