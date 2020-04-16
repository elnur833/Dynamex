<?php
  include_once('template/header.php')
?>

<main class="main full" role="main">
    <section class="login_section full">
        <div class="container ">
            <div class="row">
                <!-- page title-->
                <div class="col-md-12 page_title">
                    <h2>Sonuncu mərhələ</h2>
                    <p class="left_middle">Why I say old chap that is spiffing off his nut arse pear shaped plastered
                    Jeffrey bodge barney some dodgy.!!</p>
                </div>
                <!-- page title end-->
                <div class="col-md-12 login_container registration_container">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="login_left">
                                <h3 class="full">Qeydiyyat formunu doldurun</h3>
                                <div class="registration_form_type full">
                                    <a href="#" class="active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                        <path id="prefix__account-outline" d="M11 4a3.5 3.5 0 1 1-3.5 3.5A3.5 3.5 0 0 1 11 4m0 1.75a1.75 1.75 0 1 0 1.75 1.75A1.75 1.75 0 0 0 11 5.75m0 6.125c2.336 0 7 1.164 7 3.5V18H4v-2.625c0-2.336 4.664-3.5 7-3.5m0 1.662c-2.6 0-5.337 1.278-5.337 1.838v.962h10.674v-.962c0-.56-2.737-1.838-5.337-1.838z" transform="translate(-4 -4)" style="fill:#94949f"/>
                                    </svg>
                                    Fiziki şəxs
                                    </a>
                                </div>
                                <form action="" class="full">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control floating-input calendar datepicker" placeholder="Doğum tarixi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group full_select">
                                                <select class="chosen-select ">
                                                    <option value="0">Vətəndaşlıq</option>
                                                    <option value="1">Azerbaycan</option>
                                                    <option value="1">Xarici</option>
                                                </select>

                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group tel_select_cont pop_select">
                                                <input type="text" class="form-control floating-input" placeholder="ŞV-nin nömrəsi">
                                                <select class="chosen-select input_type weight_select tel_select">
                                                    <option value="0">AZE</option>
                                                    <option value="1">FR</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control floating-input" placeholder="FİN kod">
                                                <button type="button" class="show_fin">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                        <path id="prefix__help-circle-outline" d="M10.1 16.4h1.8v-1.8h-1.8v1.8M11 2a9 9 0 1 0 9 9 9 9 0 0 0-9-9m0 16.2a7.2 7.2 0 1 1 7.2-7.2 7.21 7.21 0 0 1-7.2 7.2m0-12.6a3.6 3.6 0 0 0-3.6 3.6h1.8a1.8 1.8 0 0 1 3.6 0c0 1.8-2.7 1.575-2.7 4.5h1.8c0-2.025 2.7-2.25 2.7-4.5A3.6 3.6 0 0 0 11 5.6z" transform="translate(-2 -2)" style="fill:#cecee2"/>
                                                    </svg>
                                                </button>
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
                                       
                                        <div class="agree_rules form-group col-md-12">
                                            <label>
                                                <input type="checkbox">
                                                <p><a href="#">İstifadəçi şərtləri</a> ilə razıyam</p>
                                            </label>
                                        </div>
                                        <div class="login_submit col-md-6">
                                            <button type="submit">Tamamla</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="login_right_img reg_right_img comp_reg_img full">
                                <img src="assets/images/cr_img.svg" alt="">
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

