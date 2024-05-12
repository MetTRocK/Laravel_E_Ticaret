<footer class="site-footer border-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Linkler</h3>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="#">Online Satış</a></li>
                <li><a href="#">Ek Bilgiler</a></li>
                <li><a href="#">Sepet</a></li>
                <li><a href="#">Ürünler</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="#">Satış Sonrası</a></li>
                <li><a href="#">Teslimat</a></li>
                <li><a href="#">Website development</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="#">Satış Noktaları</a></li>
                <li><a href="#">Donanım</a></li>
                <li><a href="#">Yazılım</a></li>
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

          <div class="block-7">
            <form action="#" method="post">
              <label for="email_subscribe" class="footer-heading">Güncellemeleri Kaçırma</label>
              <div class="form-group">
                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="E-Posta">
                <input type="submit" class="btn btn-sm btn-primary" value="İlet">
              </div>
            </form>
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
