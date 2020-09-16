 <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-7 col-md-6">
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/grow-people-fly.png" alt="">
            </div>
            <div class="mx-auto text-center contact-font">
              <strong>Kliktu sp.z o.o.</strong><br>
              ul. Lubelska 12, 31-482<br>
              <a href="tel:+48121234556" class="text-dark">12 123 45 56</a><br>              
              <a href="mailto:kontakt@kliktu.pl" class="text-dark">kontakt@kliktu.pl</a><br>
            </div>
          </div>

          <div class="col-lg-5 col-md-6">
            <div class="" data-aos="fade-left" data-aos-delay="100">
              <h4 class="contact-font">Chcę w Kliktu oferować swoje produkty, <strong>jesteś&nbsp;Ekspertem</strong>. Napisz do nas, zadzwoń lub&nbsp;zostaw wiadomość - oddzwonimy.</h4>
              <!-- Formularz kontaktowy -->
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-12">
                    <label for="name">Imię&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="" data-rule="minlen:4" data-msg="Wpisz co najmniej 4 znaki" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-12">
                    <label for="name">Nazwisko&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="" data-rule="minlen:4" data-msg="Wpisz co najmniej 4 znaki" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label for="name">E-mail&nbsp;<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="" data-rule="email" data-msg="Wpisz poprawny adres email" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-12">
                    <label for="name">Nr telefonu, na który możemy się skontaktować</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="minlen:4" data-msg="Wpisz co najmniej 8 znaków" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label for="name">Nazwa Firmy</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  </div>
                  <div class="form-group col-12">
                    <label for="name">Wiadomość&nbsp;<span class="text-danger">*</span></label>
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
                    <div class="validate"></div>
                    <div class="w-100 text-right text-danger field-required">
                      * pola wymagane
                    </div>
                        <input id="c1" type="checkbox" class="mt-5 mr-1">Kliktu lorem ipsum lorem ipsum lorem ipsum
                    <div class="validate"></div>
                    <div class="w-100 text-right">
                       <button type="submit" class="btn bckg-orange btn-sm text-right text-white text-uppercase btn-form-send mt-5" title="Wyślij">Wyślij</button>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>