<?php
  include_once('template/header.php')
?>

<main class="main full" role="main">
    <section class="login_section full">
        <div class="container ">
            <div class="row">
                <!-- page title-->
                <div class="col-md-12 page_title">
                    <h2>Dynamex-ə xoş gəlmişsiniz</h2>
                    <p class="left_middle">Why I say old chap that is spiffing off his nut arse pear shaped plastered
                    Jeffrey bodge barney some dodgy.!!</p>
                </div>
                <!-- page title end-->
                <div class="col-md-12 login_container registration_container">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="login_left">
                                <h3 class="full">Qeydiyyat formu</h3>
                                <div class="registration_form_type full">
                                    <a href="#" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                        <path id="prefix__account-outline" d="M11 4a3.5 3.5 0 1 1-3.5 3.5A3.5 3.5 0 0 1 11 4m0 1.75a1.75 1.75 0 1 0 1.75 1.75A1.75 1.75 0 0 0 11 5.75m0 6.125c2.336 0 7 1.164 7 3.5V18H4v-2.625c0-2.336 4.664-3.5 7-3.5m0 1.662c-2.6 0-5.337 1.278-5.337 1.838v.962h10.674v-.962c0-.56-2.737-1.838-5.337-1.838z" transform="translate(-4 -4)" style="fill:#94949f"/>
                                    </svg>
                                    Fiziki şəxs
                                    </a>
                                    <a href="#" class="active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.6" viewBox="0 0 14 12.6">
                                        <path id="prefix__domain" d="M13.2 11.4h-1.4v1.4h1.4m0-4.2h-1.4V10h1.4m1.4 4.2H9v-1.4h1.4v-1.4H9V10h1.4V8.6H9V7.2h5.6m-7-1.4H6.2V4.4h1.4m0 4.2H6.2V7.2h1.4m0 4.2H6.2V10h1.4m0 4.2H6.2v-1.4h1.4m-2.8-7H3.4V4.4h1.4m0 4.2H3.4V7.2h1.4m0 4.2H3.4V10h1.4m0 4.2H3.4v-1.4h1.4m4.2-7V3H2v12.6h14V5.8z" transform="translate(-2 -3)" style="fill:#94949f"/>
                                    </svg>
                                    Hüquqi şəxs
                                    </a>
                                </div>
                                <form action="" class="full">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control floating-input" placeholder="Şirkətin  adı">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control floating-input" placeholder="Şirkətin VÖEN-i">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-error">
                                                <input type="email" class="form-control floating-input" placeholder="Email">
                                                <span class="error_message">Bu mail artıq istifadə olunub</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tel_select_cont">
                                                <input type="tel" class="form-control floating-input" placeholder="Telefon">
                                                <select class="chosen-select input_type weight_select tel_select">
                                                    <option value="0">12</option>
                                                    <option value="1">55</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group full_select">
                                                <select class="chosen-select ">
                                                    <option value="0">Şəhər</option>
                                                    <option value="1">Baku</option>
                                                    <option value="1">Ganja</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control floating-input" placeholder="Ünvan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group inp-success">
                                                <input type="password" class="form-control floating-input" placeholder="Şifrə" value="password">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <input type="password" class="form-control floating-input" placeholder="Təkrar şifrə">
                                            </div>
                                        </div>
                                        <div class="agree_rules form-group col-md-12">
                                            <label>
                                                <input type="checkbox">
                                                <p><a href="#">İstifadəçi şərtləri</a> ilə razıyam</p>
                                            </label>
                                        </div>
                                        <div class="login_submit col-md-6">
                                            <button type="submit">Qeydiyyatdan keç</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="login_right_img reg_right_img full">
                                <img src="assets/images/f_reg_img.svg" alt="">
                            </div>
                            <div class="have_account full">
                                <p>Hesabınız var?<a href="#">Daxil olun</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
  include_once('template/footer.php')
?>