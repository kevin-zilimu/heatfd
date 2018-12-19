@include('mainIncludes.header')
        
<div class="hero flex-center">
        <div class="hero-message">
            <h1 class="hero-title">Welcome to  Heat Food Ordering System</h1>
            <h1 class="hero-sub-title">
                <button type="button" class="btn btn-outline-dark btn-lg">
                    <a style="color:white;text-decoration:none" href="#reservation">Order Food
                </a></button> 
                <button style="margin-left:80px" type="button" class="btn btn-outline-dark btn-lg">
                <a style="color:white;text-decoration:none" href="#aboutus">About Us
                    </a></button>
            </h1>
        </div>
</div>
                
            @yield('content')
    
@include('mainIncludes.footer')