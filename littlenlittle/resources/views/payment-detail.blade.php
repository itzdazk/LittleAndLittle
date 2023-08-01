@extends('layout')

@section('content')

<div class="content_background d-flex justify-content-center">
    <div class="content_background-child container">
      <div class="content_logo ">
        <span class="container-fluid">
  
          <h1 class="content_title my-1 text-center">Thanh toán thành công</h1>

          <div class="row content_main mt-4">
              <div class="content_main-infor-layout-bottom col-12">
                  <div class=" content_main-ticket-root">
                      
                      <div class="content_main-ticket-child ">
                          <div class="content_main-ticket-child-layout " >
                     
                              <div class="row mt-5 ">
        

                                  <div class="col-auto d-flex justify-content-center align-items-center">
                                    <button class="ticket-select-button"><i class="fa-solid fa-caret-left"></i></button>
                                  </div>
                  
                                  @foreach ($orderDetails as $orderDetail)
                                  <div class="col border-1 rounded-4 px-2" >
                                      <div class="event_card">
                                        <div class="d-flex align-items-center justify-content-center bg-white" > 
                                          <img src="{{ asset('assets/img/qr_code.png') }}"  class="mt-4  img-fluid" alt="">
                                        </div> 
                                        <div class="event_card-body bg-white ">
                                          <h4 class="qr-card-title text-center mt-4">{{ $orderDetail->nameid }}</h4>
                                           <h6 class="qr-card-des text-center">VÉ CỔNG</h6>
                                           <h5 class="qr-card-sep text-center">---</h5>
                                           <p class="qr-card-date text-center"> Ngày sử dụng: {{ $orderDetail->date }}
                                        </p>
                                          <h5 class="qr-card-icon text-center text-primary"><i class="fa-sharp fa-solid fa-circle-check"></i></h5>
                                        </div>
                                      </div>
                                     
                                    </div>
                                    @endforeach
                                  <div class="col-auto d-flex justify-content-center align-items-center">
                                    <button class="ticket-select-button"><i class="fa-solid fa-caret-right"></i></button>
                                  </div>
                              
                                 
                              </div>
                              

                              <div class="row d-flex justify-content-between mt-3">
                                  <div class="col-3 text-center">
                                    Số lượng vé: {{ $count }}
                                  </div>
                                  <div class="col-3">Trang 1/{{ $page }}</div>
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


    <div class="img_alvin img-position"> 
      <img class="img-alvin" src="{{ asset('assets/img/Alvin_Arnold_Votay1 1.png ') }}" alt="">
    </div>

   
  </div>

  @endsection