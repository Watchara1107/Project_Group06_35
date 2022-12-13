@extends('layouts.promote')
@section('content')
@include('sweetalert::alert')
<section id="hero" class="hero">
    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
      <img src="{{ asset('template/promote/assets/img/noodle.png') }}  " class="img-fluid. max-width: 100%" alt="Responsive image">
    </div>
    </div>
    </div>
    <div class="container" data-aos="fade-up">
    </div>


    <div class="row no-gutters">
      <div class="col-12 col-sm-6 col-md-8">
        <h2 style="font-family:MN KHANAMUKROP;">
          <p>เกี่ยวกับก๋วยเตี๋ยว<span style="color:red">ต้มยำโบราณพระราม5
        </h2></span></p>
      </div>
      <div class="col-6 col-md-4"></div>
      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(template/promote/assets/img/photo1.jpg);" data-aos="fade-up" data-aos-delay="150">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h2 style="font-family:MN KHANAMUKROP;">
              เป็นสูตรสืบทอดมาจากอากงเปิดกิจการมานานกว่า20ปีโดยมีจุดเด่นเป็นเส้นก๋วยเตี๋ยวทำเอง
              และจัดด้านในด้านต้มยำอร่อยไม่ต้องปรุง
            </h2>

            <h2>
              <p>
                VIDEO REVIEW
              </p>
            </h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xCHcMbyZW9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div class="section-header">
      <h2>รีวิวจากtravel2guide</h2>
    </div>

    <div class="row gy-4">
      <div class="col-lg-5 position-relative about-img" style="background-image: url(template/promote/assets/img/photo2.jpg);" data-aos="fade-up" data-aos-delay="150">
       
      </div>
      <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
        <h4> แนะนำร้านอร่อยเจ้าดัง บนถนนพระราม 5 นนทบุรี "ก๋วยเตี๋ยว ต้มยำโบราณ พระราม 5" ร้านนี้ชื่อก็บอกอยู่แล้ว ร้านนี้เมนูเด็ด ก๋วยเตี๋ยวต้มยำโบราณ.. ทั้งน้ำ และแห้ง อร่อยแบบไม่ต้องปรุงแต่ใครจะปรุงไม่ว่ากันน่ะค่ะ...เป็นร้าน
อร่อยนั่งทานสบายๆ ราคาไม่แพง และภายในร้านยังมีบริการ กระเพาะปลาและข้าวผัดปูเผื่อลูกค้าต้องการทานอย่างอื่นเพิ่ม อร่อยทุกรายการให้ลูกค้าได้เลือกทานทางร้านเปิดบริกาารแนะนำร้านอร่อยเจ้าดัง บนถนนพระราม 5 นนทบุรี "ก๋วยเตี๋ยว ต้มยำโบราณ พระราม 5" ร้านนี้ชื่อก็บอกอยู่แล้ว ร้านนี้เมนูเด็ด ก๋วยเตี๋ยวต้มยำโบราณ.. ทั้งน้ำ และแห้ง อร่อยแบบไม่ต้องปรุงแต่ใครจะปรุงไม่ว่ากันน่ะค่ะ...เป็นร้าน
</h4>




        </div>
      </div>
    </div>

    </div>
    <div class="container" data-aos="fade-up">
    <div class="section-header">
          <p>เมนู <span>แนะนำ</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4></h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

          <div class="tab-header text-center">
              <p>เมนูขายดี</p>
              <h3></h3>
            </div>

            <div class="row gy-5">

            @foreach($product as $item)
              <div class="col-lg-4 menu-item">
                <img src="{{ asset('admin/upload/product/'.$item->image)}}" class="menu-img img-fluid" alt=""></a>
                <h4>{{ $item->name }}</h4>
                <p class="ingredients">
                {{ $item->description }}
                </p>
                <p class="price">
                {{ $item->price }}
                </p>
                
              </div><!-- Menu Item -->
              @endforeach

            </div>
          </div>
          <div class="section-header">
          <h2 style="font-family:MN KHANAMUKROP;">อร่อย!</h2><h3>ด้วยน้ำซุปสูตรเฉพาะและเส้นก๋วยเตี๋ยวทำเอง”</h3>
          <h2 style="font-family:MN KHANAMUKROP;">อร่อย!</h2><h3>โดยไม่ต้องปรุง</h3>
          
        </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h1>เกี่ยวกับ</h1>
          <p>ก๋วยเตี๋ยวต้มยำ<span>โบราณพระราม5</span></p>
        </div>

        <div class="row no-gutters">
  <div class="col-10 col-sm-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <h2 style="font-family:MN KHANAMUKROP">ก๋วยเตี๋ยวต้มยำเส้นทำเองอร่อยได้โดยไม่ ต้องปรุงโดยสูตรถูกสืบทอดมานานกว่า20ปี น้ำซุปถูกเคี้ยวเข้มข้นจากกระดูกหมู</h2>
            <div class="col-6 col-md-4"></div>
          </div>
          </div>
        </div>
      </div>
     <img src="{{ asset('template/promote/assets/img/font.png') }}" class="img-fluid" alt="Responsive image">
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

  

    <!-- ======= Menu Section ======= -->
    <!-- Menu Item -->

            <!-- End Lunch Menu Content -->

          
    <!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>ผู้พัฒนาเว็ปไซต๋</h2>
          <p>developer<span> website</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        นักพัฒนา Front End คือ นักพัฒนาโปรแกรมในส่วนด้านหน้าที่มองเห็นได้ทันทีของหน้าเว็บไซต์ หรือ ที่หลายคนเรียกติดปากกันว่า หน้าบ้าน นั่นเอง 
                        โดยผู้ใช้งานสามารถมองเห็น และโต้ตอบร่วมกันภายในเว็บเบราว์เซอร์ได้
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Pipat Thienthong</h3>
                      <h4>Front End &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('template/promote/assets/img/testimonials/jeng.jpg') }}" class="img-fluid testimonial-img" alt="">

                    
                  </div>
                </div>
              </div>
            </div>

            
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-1 justify-content-center">
                  <div class="col-lg-3">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        นักพัฒนา Back End คือ นักพัฒนาโปรแกรมในส่วนของหลังบ้าน หรือการทำงานเบื้องหลังของส่วนต่าง ๆ ในเว็บไซต์ที่ผู้ใช้งานไม่สามารถโต้ตอบได้โดยตรง
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Natthawat Klayju</h3>
                      <h4>Back End</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('template/promote/assets/img/testimonials/poon.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tester หรือ Software tester หรือ Quality Assurance Engineer หรือ Quality Engineer (หลายชื่อจริงๆ แล้วแต่บริษัทจะเรียกชื่อ) คือ คนที่มีหน้าที่ตรวจสอบคุณภาพของ software ที่ถูกผลิตขึ้นมาโดย programmer 
                        โดยใช้วิธีการ test ต่างๆ เพื่อให้มั่นใจว่า software ที่จะไปถึงมือลูกค้า มีคุณภาพและปราศจากข้อผิดพลาดหรือผิดพลาดน้อยที่สุด ข้อผิดพลาดเรารู้จักกันว่า bug
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Tanagrit Singkhorn</h3>
                      <h4>Tester</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('template/promote/assets/img/testimonials/boss.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tester หรือ Software tester หรือ Quality Assurance Engineer หรือ Quality Engineer (หลายชื่อจริงๆ แล้วแต่บริษัทจะเรียกชื่อ) คือ คนที่มีหน้าที่ตรวจสอบคุณภาพของ software ที่ถูกผลิตขึ้นมาโดย programmer 
                        โดยใช้วิธีการ test ต่างๆ เพื่อให้มั่นใจว่า software ที่จะไปถึงมือลูกค้า มีคุณภาพและปราศจากข้อผิดพลาดหรือผิดพลาดน้อยที่สุด ข้อผิดพลาดเรารู้จักกันว่า bug
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Supagon Pattummee</h3>
                      <h4>Tester</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('template/promote/assets/img/testimonials/title.jpg') }}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->









    <!-- ======= Gallery Section ======= -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>เวลาทำการ <span>& สถานที่ตั้ง</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.5976471539675!2d100.48677587267545!3d13.826590491989197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29baab0ddb6cf%3A0xd64324b513eac86c!2z4LmA4LiV4Li14LmL4Lii4Lin4LiV4LmJ4Lih4Lii4Liz4LmC4Lia4Lij4Liy4LiT!5e0!3m2!1sth!2sth!4v1659164446758!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>ที่อยู่</h3>
                <p>88/8, ถนนนครอินทร์, บางไผ่, นนทบุรี, จ.นนทบุรี, 11000, ประเทศไทย นนทบุรี</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>เดลิเวอรี</h3>
                <img src="{{ asset('template/promote/assets/img/grab.png') }}" class="img-fluid testimonial-img" alt="">
                <img src="{{ asset('template/promote/assets/img/lineman.') }}png" class="img-fluid testimonial-img" alt="">
                <img src="{{ asset('template/promote/assets/img/foodpanda.png') }}" class="img-fluid testimonial-img" alt="">
                <img src="{{ asset('template/promote/assets/img/shopee.png') }}" class="img-fluid testimonial-img" alt="">
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>เบอร์ติดต่อ</h3>
                <p>082-443-2050</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>เวลาทำการ</h3>
                <div><strong> ทุกวัน</strong> 08:00 - 02:30
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="{{ route('contact.insert') }}" method="post" role="form" class="php-email-form p-3 p-md-4">
          @csrf
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main>
@stop