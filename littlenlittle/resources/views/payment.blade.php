@extends('layout')

@section('content')

<div class="content_background d-flex justify-content-center">
    <div class="content_background-child container">
      <div class="content_logo ">
        <span class="container-fluid">
  
          <h1 class="content_title my-1 text-center">Thanh toán</h1>
          <form method="POST" action="{{ route('order.store') }}">
            @csrf
          <div class="row content_main mt-4">
            
                <div class="content_main-infor-layout-bottom col-8">
                  <div class=" content_main-ticket-root">
                      <div class="content_main-ticket-title" style="left: 18%;">
                          <div class="content_main-ticket-title-layout" >
                              <p style="font-size: 15px;">
                                  VÉ CỔNG - VÉ GIA ĐÌNH
                              </p>
                          </div>
                         
                      </div>
                      <div class="content_main-ticket-child ">
                          <div class="content_main-ticket-child-layout " >
                           
                            <div class="row mt-3 ms-5">
                              <div class="col-5">
                                  <label for="" class="payment-label">Số tiền thanh toán</label>
                              </div>
                              <div class="col-2">
                                  <label for="" class="payment-label">Số lượng vé</label>
                              </div>
                              <div class="col-5">
                                  <label for="" class="payment-label">Ngày sử dụng</label>
                              </div>
                              <div class="col-5 ">
                                  <input  class="ticket-input" type="number" value="{{ session('quantity')*90.000 }}" name="amount" required>
                              </div>
                              <div class="col-2 ">
                                  <div>
                                      <input  class="ticket-input" type="text" value={{ session('quantity') }} name="quantity" required> 
                                  </div>
                                  
                              </div>
                              <div class="col-5 ">
                                  <input  class="ticket-input" type="date" value={{ session('date') }} name="date" required>
                              </div>
                             
                             </div>
                             <div class="row mt-3 ms-5">
                              <div class="col-12">
                                  <label for="" class="payment-label">Thông tin liên hệ</label>
                              </div>
                              <div class="col-7 ">
                                  <input  class="ticket-input" type="text" value={{ session('full_name') }} name="full_name" required >
                              </div>
                             
                             </div>
                             <div class="row mt-3 ms-5">
                              <div class="col-12">
                                  <label for="" class="payment-label">Số điện thoại</label>
                              </div>
                              <div class="col-4 ">
                                  <input  class="ticket-input" type="text" value={{ session('phone') }} name="phone" required>
                              </div>
                             
                             </div>
                             <div class="row mt-3 mb-5 ms-5">
                              <div class="col-12">
                                  <label for="" class="payment-label">Email</label>
                              </div>
                              <div class="col-8 mb-4">
                                  <input  class="ticket-input" type="email" value={{ session('email') }} name="email" required>
                              </div>
  
                             
                             </div>
  
                          
  
                          
  
                          </div>
                          
                      </div>
                      </div>
                     
                  </div>
              
              <div class="content_main-infor-layout-bottom col-4">
              <div class=" content_main-ticket-root">
                  <div class="content_main-ticket-title" style="left: 18%;">
                      <div class="content_main-ticket-title-layout" >
                          <p style="font-size: 15px;">
                              THÔNG TIN THANH TOÁN
                          </p>
                      </div>
                     
                  </div>
                  <div class="content_main-ticket-child ">
                      <div class="content_main-ticket-child-layout ">
                         <div class="row mt-3">
                          <div class="col-12">
                              <label for="" class="payment-label">Số thẻ</label>
                          </div>
                          <div class="col-12 ">
                              <input  class="ticket-input" type="text" name="card_number" required>
                          </div>
                         
                         </div>
                         <div class="row mt-3">
                          <div class="col-12">
                              <label for="" class="payment-label">Họ tên chủ thẻ</label>
                          </div>
                          <div class="col-12 ">
                              <input  class="ticket-input" type="text"  name="card_name" required>
                          </div>
                         
                         </div>
                         <div class="row mt-3">
                          <div class="col-12">
                              <label for="" class="payment-label">Ngày hết hạn</label>
                          </div>
                          <div class="col-10 ">
                              <input  class="ticket-input" type="date" name="expiry_date" required>
                          </div>
                          <div class="col-2">
                              <button class="ticket-calendar-button"><i class="fas fa-calendar-alt"></i></button>
                          </div>
                         
                         </div>
                         <div class="row mt-3">
                          <div class="col-12">
                              <label for="" class="payment-label">CVV/CVC</label>
                          </div>
                          <div class="col-4 ">
                              <input  class="ticket-input" type="text" name="cvv" required>
                          </div>
                         
                         </div>
                      

                         <div class="row mt-4">
                          <div class="col-12 text-center">
                              <button class="book-ticket-button" type="submit" style="padding: 5px 80px;">
                                 Thanh toán
                              </button>
                          </div>
                         
                         </div>

                      </div>
                      
                  </div>
                  </div>
                 
              </div>
            
          </div>
        </form>
          </span>
        </span>
      </div>
    </div>


    <div class="img_trini img-position"> 
      <img class="img-trini" src="{{ asset('assets/img/Trini_Arnold_Votay1 2.png') }}" alt="">
    </div>

   
  </div>

  @endsection