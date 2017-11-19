@extends('layouts.TopBar')

@section('content')
    <div class="container">
        <div class="row">
            @include('pemilik.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li> 
                <li data-target="#myCarousel" data-slide-to="2"></li> 
                <li data-target="#myCarousel" data-slide-to="3"></li> 
              </ol>
             <!-- IWrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="image\rumah\rumah1.jpg" alt="gambar1" />
                  <div class="carousel-caption">
                    <h1>Properti</h1>
                  </div>
                </div>
                <div class="item">
                  <img src="image\rumah\rumah2.jpg" alt="gambar2" />
                  <div class="carousel-caption">
                    <h1>KProperti</h1>
                  </div>
                </div>
                <div class="item">
                  <img src="image\rumah\rumah3.jpg" alt="gambar3" />
                  <div class="carousel-caption">
                    <h1>Properti</h1>
                  </div>
                </div>

              <!-- Left and Right Control -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-arrow-right" aria-hidden="true">
                  <span class="sr-only">Previous</span>
                </i>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-arrow-left" aria-hidden="true">
                  <span class="sr-only">Next</span>
                </i>
              </a>
            </div>
          </div>           
                </div>
            </div>
        </div>
    </div>
@endsection

