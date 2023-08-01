@extends('layout')

@section('content')

<div class="content_background d-flex justify-content-center">
    <div class="content_background-child container">
      <div class="content_logo ">
        <span class="container-fluid">
            <h1 class="content_title my-4 text-center">{{ $event->name }}</h1>
          

          <div class="row content_main mt-4">
              <div class="content_main-infor-layout-bottom col-12">
                  <div class=" content_main-infor-root">
                      <div class="content_main-infor-child ">
                          <div class="content_main-infor-child-layout ">
                           
                           <div class="row">
                            <div class="col-4">
                                <div class="d-flex align-items-center justify-content-center " > 
                                    <img src="{{ asset('assets/img/Frame 47.png') }}" class="event-detail_card-img img-fluid" alt="">
                                  </div> 
                                  <div class="event_card-body mt-3">
                                    <p class="event_card-body-calendar"><i class="fas fa-calendar-alt me-1"></i> 30/05/2021 -01/06/2021</p>
                                    <p class="event_card-body-address mb-0">{{ $event->address }}</p>
                                   
                
                                     <h3 class="event_card-body-price">{{ $event->price }} VNĐ</h3>
                            </div>
                        </div>

                            <div class="col-8">
                               <div class="row">
                                <div class="col">
                                  {{ $event->long_des }}
                                </div>
                      
                                <div class="col">
                                    <img class="img-fluid mb-5" src="{{ asset('assets/img/Frame 48.png') }}" alt="">
                                    {{ $event->des }}
                                </div>
                                <div class="col">
                                  {{ $event->des }}
                                    <img class="img-fluid mt-5" src="{{ asset('assets/img/Frame 48.png') }}" alt="">
                                    
                                </div>
                               </div>
                                    

                            </div>
                           </div>
              
                          </div>
                          
                      </div>
                    
                     
                  </div>
              </div>
              
             
          </div>
          
          </span>
        </span>
      </div>
    </div>


    <div class="img_frame-1 img-position"> 
        <img class="img-frame-1" src="{{ asset('assets/img/Frame.png') }}" alt="">
      </div>

      <div class="img_frame-2 img-position"> 
        <img class="img-frame-2" src="{{ asset('assets/img/Frame 1.png') }}" alt="">
      </div>

  </div>

  @endsection