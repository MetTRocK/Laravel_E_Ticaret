<footer class="site-footer border-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">

            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                <li><a href="{{route('urunler')}}">Ürünler</a></li>
                <li><a href="{{route('iletisim')}}">İletişim</a></li>
              </ul>
            </div>


          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <h3 class="footer-heading mb-4"></h3>
          <a href="#" class="block-6">

            <h3 class="font-weight-light  mb-0"></h3>
            <p></p>
          </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">İletişim Bilgileri</h3>
            <ul class="list-unstyled">
              <li class="address">{{$ulas->adres ?? ('Değer Bulunamadı')}}</li>
              <li class="phone">{{$ulas->telefon ?? ('Değer Bulunamadı')}}</li>
              <li class="email">{{$ulas->posta ?? ('Değer Bulunamadı')}}</li>
            </ul>
          </div>


        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://gurberkgurturk.com.tr" target="_blank" class="text-primary">GG</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>
