@extends('layout')

@section('content')
    
<div class="content_background d-flex justify-content-center">
    <div class="content_background-child container">
      <div class="content_logo ">
        <span class="container-fluid">
          <div class="row ">
              <div class="col-2">
                  <img class="damsen_logo mt-4" src="img/dam_sen_logo.png" alt="" />
              </div>
            <div class="col-4 content_logo-text">
              <!-- <div class="col-12">
                  ĐẦM SEN
              </div>
              <div class="col-12">
                  PARK
              </div> -->
                   ĐẦM SEN PARK
            </div>
             
          </div>  
          

          <div class="row content_main mt-4">
              <div class="content_main-infor-layout-bottom col-8">
                  <div class=" content_main-infor-root">
                      <div class="content_main-infor-child ">
                          <div class="content_main-infor-child-layout ">
                              <p class="content_main-pa">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.      
                              </p>
                              <p class="content_main-pa">
                                  Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.
                              </p>
                             
                              <div class="content_main-list ">
                                  <span class=" content_main-li">
                                      <i class="fa-solid fa-star content_main-li-icon"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                  </span >
                                  <br>
                                  <span class=" content_main-li">
                                      <i class="fa-solid fa-star content_main-li-icon"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                  </span >
                                  <br>
                                  <span class=" content_main-li">
                                      <i class="fa-solid fa-star content_main-li-icon"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                  </span >
                                  <br>
                                  <span class=" content_main-li">
                                      <i class="fa-solid fa-star content_main-li-icon"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                  </span >
                              </div>
                          </div>
                          
                      </div>
                    
                     
                  </div>
              </div>
              
              <div class="content_main-infor-layout-bottom col-4">
              <div class=" content_main-ticket-root">
                  <div class="content_main-ticket-title">
                      <div class="content_main-ticket-title-layout">
                          <p>
                              VÉ CỦA BẠN
                          </p>
                      </div>
                     
                  </div>
                  <div class="content_main-ticket-child ">
                      <div class="content_main-ticket-child-layout ">
                        <form method="POST" action="{{ route('order.create') }}">
                          @csrf
                         <div class="row mt-3">
                          <div class="col-10 p-0 packetpicker-toggle">
                              <!-- <input  class="ticket-input" type="text" value="Gói gia đình"> -->
                              <!-- <input  class="ticket-input" type="text" value="Gói gia đình"> -->
                              <select name="" id="" class="ticket-input select-packet-btn pe-4">
                                <option value="">Gói gia đình</option>
                                <option value="">Gói gia đình 2</option>
                              </select>
                            </div>
                          <div class="col-2">
                              <button class="ticket-select-button"><i class="fas fa-caret-down"></i></button>
                          </div>
                         </div>
                         <div class="row mt-3">
                          <div class="col-4 ps-0">
                              <input class="ticket-input" type="number" placeholder="Số lượng vé" name="quantity" id="quantity">
                          </div>
                          <div class="col-6 pe-0">
                              <input class="ticket-input" type="date" placeholder="Ngày sử dụng" name="date" id="date" required>
                          </div>
                          <div class="col-2">
                              <button class="ticket-calendar-button"><i class="fas fa-calendar-alt"></i></button>
                          </div>
                         </div>
                         <div class="row mt-3">
                          <div class="col-12 p-0" >
                              <input class="ticket-input" type="text" placeholder="Họ và tên" name="full_name" id="full_name" required>
                          </div>
                          
                         </div>
                         <div class="row mt-3">
                          <div class="col-12 p-0">
                              <input class="ticket-input" type="text" placeholder="Số điện thoại" name="phone" id="phone" required>
                          </div>
                          
                         </div>
                         <div class="row mt-3">
                          <div class="col-12 p-0">
                              <input class="ticket-input" type="email" placeholder="Địa chỉ email" name="email" id="email" required>
                          </div>
                         
                         </div>

                         <div class="row mt-4">
                          <div class="col-12 text-center">
                              <button  type="submit" class="book-ticket-button">
                                  Đặt vé
                              </button>
                          </div>
                         
                         </div>
                        </form>
                      </div>
                      
                  </div>
                  </div>
                 
              </div>
          </div>
          
          </span>
        </span>
      </div>
    </div>


    <div class="img_lisa img-position"> 
      <img class="img-lisa" src="{{ asset('assets/img/Lisa_Arnold_Lay_Do_F2 3.png') }}" alt="">
    </div>

    <div class="img_render img-position">
      <img class="img-render" src="{{ asset('assets/img/render fix hair 1.png') }}" alt="">
    </div>

    <div class="img_02 img-position">
      <img class="img-02" src="{{ asset('assets/img/18451 [Converted]-02 1.png') }}" alt="">
    </div>
    <div class="img_03 img-position">
      <img class="img-03" src="{{ asset('assets/img/18451 [Converted]-03 1.png') }}" alt="">
    </div>

    <div class="img_04 img-position">
      <img class="img-04" src="{{ asset('assets/img/18451 [Converted]-04 1.png') }}" alt="">
    </div>

    <div class="img_05 img-position">
      <img class="img-05" src="{{ asset('assets/img/18451 [Converted]-05 1.png') }}" alt="">
    </div>

    <div class="img_06 img-position">
      <img class="img-06" src="{{ asset('assets/img/18451 [Converted]-06 1.png') }}" alt="">
    </div>
    <div class="img_07 img-position">
      <img class="img-07" src="{{ asset('assets/img/18451 [Converted]-03 1.png') }}" alt="">
    </div>

  </div>


@endsection