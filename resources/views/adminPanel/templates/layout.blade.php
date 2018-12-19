@include('adminPanel.templates.inc.header')

                <div class="container">
                <div class="row">
                <div class="col-md col-md-offset-1">
            @yield('content')
        </div>
    </div>
</div>
        <!--container-->
        @include('adminPanel.templates.inc.footer')