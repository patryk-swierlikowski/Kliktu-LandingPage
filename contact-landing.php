
    <!-- ======= Kontakt ======= -->

    <section>
      <div class="container" data-aos="fade-up">
      
                  <div class="form">

              <h4 class="text-center font-weight-bold">Chcę z Wami porozmawiać</h4>
              <hr>
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-sm-12 col-md-6">
                    <label for="name">Imię&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-sm-12 col-md-6">
                    <label for="name">Nazwisko&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-12 col-md-6">
                    <label for="name">E-mail&nbsp;<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-sm-12 col-md-6">
                    <label for="name">Nr telefonu, na który możemy się skontaktować</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-12 col-md-6">
                    <label for="name">Wiadomość&nbsp;<span class="text-danger">*</span></label>
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
                    <div class="validate"></div>
                    <div class="w-100 text-right text-danger field-required">
                      * pola wymagane
                    </div>
                  </div>
                  <div class="form-group col-sm-12 col-md-6">
                    <label for="name">Nazwa Firmy</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <input id="c1" type="checkbox" class="mt-5 mr-1">Kliktu lorem ipsum lorem ipsum lorem ipsum
                    <div class="validate"></div>
                    <div class="w-100 text-right">
                       <button type="submit" class="btn bckg-orange btn-sm text-right text-white text-uppercase btn-form-send mt-5" title="Wyślij">Wyślij</button>
                    </div>
                  </div>
                </div>

              </form>

              <div class="w-100 col-12 text-center my-4">
                <img src="assets/svg/phone.svg" class="contact-icon-svg" alt="" />
                <a href="tel:+48121234567" class="contact-data font-weight-bold">
                  12 123 45 67
                </a>
                <img src="assets/svg/mail.svg" class="contact-icon-svg" alt="" />
                <a href="mailto:kontakt@kliktu.pl" class="contact-data font-weight-bold">
                  kontakt@kliktu.pl
                </a>
              </div>

            </div>

          </div>

    </section>