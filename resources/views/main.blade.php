@extends('mainIncludes.mainview')
@section('content')
<br>
<br>
<hr />
<h1 style="text-align:center" id="reservation">Available Foods</h1>

<section id="section1" class="text-center my-5">  
<div class="container" >
    <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
      adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
      nostrum quisquam eum porro a pariatur veniam.</p>
    <div class="row">
      @foreach ($orderdisplays as $orderdisplay)
      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
          <div class="card " style="width: 18rem;height:25rem">
            <img class="card-img-top" src="/storage/cover_images/{!! $orderdisplay->foodposts->Image1!!}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{!! $orderdisplay->foodposts->Title!!}</h5>
            
            <p class="card-text">${!! $orderdisplay->foodposts->Price!!}</p>
            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
          </div>
        </div> 
      @endforeach
        

        
    </div>
    <br>
    <nav aria-label="Page navigation example" style="margin-left:400px">
        <ul class="pagination pagination-lg">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#section1">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
</div>

</section>

<br>
<br>
<hr>
<div class="container" id="aboutus">

  <h1 style="text-align:center"> About Us </h1>

<!-- Section: Pricing v.2 -->


  <!-- Section: Products v.4 -->
<section class="text-center my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
    <!-- Section description -->
    <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
      adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
      nostrum quisquam eum porro a pariatur veniam.</p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <!-- Collection card -->
        <div class="card collection-card z-depth-1-half">
          <!-- Card image -->
          <div class="view zoom">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg" class="img-fluid"
              alt="">
            <div class="stripe dark">
              <a>
                <p>Red trousers
                  <i class="fa fa-angle-right"></i>
                </p>
              </a>
            </div>
          </div>
          <!-- Card image -->
        </div>
        <!-- Collection card -->
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
        <!-- Collection card -->
        <div class="card collection-card z-depth-1-half">
          <!-- Card image -->
          <div class="view zoom">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg" class="img-fluid"
              alt="">
            <div class="stripe light">
              <a>
                <p>Sweatshirt
                  <i class="fa fa-angle-right"></i>
                </p>
              </a>
            </div>
          </div>
          <!-- Card image -->
        </div>
        <!-- Collection card -->
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
        <!-- Collection card -->
        <div class="card collection-card z-depth-1-half">
          <!-- Card image -->
          <div class="view zoom">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg" class="img-fluid"
              alt="">
            <div class="stripe dark">
              <a>
                <p>Accessories
                  <i class="fa fa-angle-right"></i>
                </p>
              </a>
            </div>
          </div>
          <!-- Card image -->
        </div>
        <!-- Collection card -->
      </div>
      <!-- Grid column -->
  
      <!-- Fourth column -->
      <div class="col-lg-3 col-md-6">
        <!-- Collection card -->
        <div class="card collection-card z-depth-1-half">
          <!-- Card image -->
          <div class="view zoom">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg" class="img-fluid"
              alt="">
            <div class="stripe light">
              <a>
                <p>Sweatshirt
                  <i class="fa fa-angle-right"></i>
                </p>
              </a>
            </div>
          </div>
          <!-- Card image -->
        </div>
        <!-- Collection card -->
      </div>
      <!-- Fourth column -->
  
    </div>
    <!-- Grid row -->
  
  </section>
  <!-- Section: Products v.4 -->
  
  
  <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
      <div class="card " style="width: 18rem;">
        <img class="card-img-top" src="/storage/cover_images/mercedes.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="/storage/cover_images/mercedes.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
      </div>
      
</div>

@endsection
  