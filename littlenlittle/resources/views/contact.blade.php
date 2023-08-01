@extends('layout')

@section('content')

<div class="content_background d-flex justify-content-center">
    <div class="content_background-child container">
      <div class="content_logo ">
        <span class="container-fluid">
  
          <h1 class="content_title my-1 text-center">Liên Hệ</h1>

          <div class="row d-flex gx-5 justify-content-center content_main mt-4">
              <div class="content_main-infor-layout-bottom col-8">
                  <div class=" content_main-ticket-root">
          
                      <div class="content_main-ticket-child ">
                          <div class="content_main-ticket-child-layout " >
                            <form action="{{ route('contacts.store') }}" method="POST">
                                @csrf
                             <div class="row mt-3 ">
                              <div class="col-12">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. 
                              </div>
                              <div class="col-4 mt-4">
                                  <input  class="ticket-input" type="text" placeholder="Tên" name="name" id="name" required>
                              </div>
                              <div class="col-8 mt-4">
                                  <div>
                                      <input  class="ticket-input"  type="email" placeholder="Email" name="email" id="email" required > 
                                  </div>
                                  
                              </div>
                              <div class="col-4 mt-4">
                                  <input  class="ticket-input" type="text" placeholder="Số điện thoại"  name="phone" id="phone" required>
                              </div>
                              <div class="col-8 mt-4">
                                  <input  class="ticket-input" type="text" placeholder="Địa chỉ" name="address" id="address" required>
                              </div>



                              <div class="col-12 mt-4">
                                  <textarea class="ticket-area" rows="5" placeholder="Lời nhắn" name="long_des" id="long_des"></textarea>
                              </div>

                             

                              <div class="col-12 text-center mt-4">
                                  <button type="submit" class="book-ticket-button">
                                      Gửi liên hệ
                                  </button>
                              </div>
                             </div>
                            
                            </form>
                             
                             
                          
  
                          
  
                          </div>
                          
                      </div>
                      </div>
                     
                  </div>
              
              <div class="col-4 pe-0">
                  <div class="content_main-infor-layout-bottom col-12 ">

                      <div class=" content_main-ticket-root  ">
                     
                      <div class="content_main-ticket-child ">
                          <div class="content_main-contact-child-layout ">
                              <div class="row">
                                  <div class="col-3 d-flex justify-content-center">
                                      <div class="img_address">
                                          <img src="{{ asset('assets/img/adress 1.png') }}" alt="">
                                      </div>
                                  </div>
                                <div class="col-9">
                                  Địa chỉ:
                                  <br>
                                  86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh
                                </div>
                              </div>
                              
                              
                          </div>
                          
                      </div>
                      </div>
  
                  </div>

                  <div class="content_main-infor-layout-bottom col-12 mt-3">

                      <div class=" content_main-ticket-root  ">
                     
                      <div class="content_main-ticket-child ">
                          <div class="content_main-contact-child-layout ">
                              <div class="row">
                                  <div class="col-3 d-flex justify-content-center">
                                      <div class="img_address">
                                          <img src="{{ asset('assets/img/mail-inbox-app 1.png') }}" alt="">
                                      </div>
                                  </div>
                                <div class="col-9">
                                  Email:
                                  <br>
investigate@your-site.com
                                </div>
                              </div>
                              
                              
                          </div>
                      </div>
                      </div>
  
                  </div>

                  <div class="content_main-infor-layout-bottom col-12 mt-3">

                      <div class=" content_main-ticket-root  ">
                     
                      <div class="content_main-ticket-child ">
                          <div class="content_main-contact-child-layout ">
                              <div class="row">
                                  <div class="col-3 d-flex justify-content-center">
                                      <div class="img_address">
                                          <img src="{{ asset('assets/img/telephone 2.png') }}" alt="">
                                      </div>
                                  </div>
                                <div class="col-9">
                                  Điện thoại:
                                  <br>
+84 145 689 798
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


    <div class="img_alex img-position"> 
      <img class="img-alex" src="{{ asset('assets/img/Alex_AR_Lay_Do shadow 1.png') }}" alt="">
    </div>

   
  </div>

 

  @endsection