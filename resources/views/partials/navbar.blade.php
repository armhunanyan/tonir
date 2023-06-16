<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="/{{ Config::get('app.locale') }}/home">{{__('navbar.home')}}</a></li>
                <li><a href="/{{ Config::get('app.locale') }}/about">{{__('navbar.about')}}</a></li>
                <li><a href="/{{ Config::get('app.locale') }}/products">{{__('navbar.products')}}</a></li>
                <li><a href="/{{ Config::get('app.locale') }}/pricelist">{{__('navbar.pricelist')}}</a></li>
                <li><a href="/{{ Config::get('app.locale') }}/about_tonirs">{{__('navbar.about_tonirs')}}</a></li>
                <li><a href="/{{ Config::get('app.locale') }}/videos">{{__('navbar.videos')}}</a></li>
                <li><a href="/{{ Config::get('app.locale') }}/contacts">{{__('navbar.contacts')}}</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->