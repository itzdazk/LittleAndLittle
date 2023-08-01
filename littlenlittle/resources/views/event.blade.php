@extends('layout')

@section('content')

<div class="content_background d-flex justify-content-center">
    <div class="content_background-child container">
      <div class="content_logo">
        <span class="container-fluid ">

          <h1 class="content_title my-4 text-center">Sự kiện nổi bật</h1>

          <div class="row mt-5 gx-3">
        

              <div class="col-auto d-flex justify-content-center align-items-center">
                <button class="ticket-select-button"><i class="fa-solid fa-caret-left"></i></button>
              </div>

              @foreach ($events as $event)
              <div class="col border-1 rounded-4" >
                <div class="event_card">
                  <div class="d-flex align-items-center justify-content-center " > 
                    <img src="{{ asset('assets/img/Rectangle 1.png') }}" class="event_card-img img-fluid" alt="">
                  </div> 
                  <div class="event_card-body bg-white ">
                    <h4 class="event_card-body-title">{{ $event->name }}</h4>
                    <p class="event_card-body-address">{{ $event->address }}</p>
                    <p class="event_card-body-calendar"><i class="fas fa-calendar-alt me-1"></i> {{ date('d/m/Y', strtotime($event->date_start))  }}-{{date('d/m/Y', strtotime($event->date_end))  }}</p>

                     <h3 class="event_card-body-price">{{ $event->price }} VNĐ</h3>
                     <a class="event_card-body-button text-white text-decoration-none " href="/sukien/{{ $event->id }}">Xem chi tiết</a>
                  </div>
                </div>
               
              </div>
              @endforeach
              <div class="col-auto d-flex justify-content-center align-items-center">
                <button class="ticket-select-button"><i class="fa-solid fa-caret-right"></i></button>
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