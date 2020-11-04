<?php 
session_start();

if (isset($_SESSION['uid']) && isset($_SESSION['email']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Action Button</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <script src="https://kit.fontawesome.com/48a5e1b8c8.js" crossorigin="anonymous"></script>
    </head>
    <!-- Header-->
    <header id="default-header">
        <div class="container">
            <div class="headbar">
                <div class="logo">
                    <a href="https://goldeninvestor.net"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <div class="actionkiri" onclick="actionToggled();">
                    <span><i class="fas fa-bars"></i></span>
                    <nav>
                        <a href="#product">Tips</a>
                        <a href="#product">Pricing</a>
                        <a href="#product">Services</a>
                        <a href="#product">Indicator</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <body>

    <!--Bagian + bulat-->
    <div class="action" onclick="actionToggle();">
        <span>+</span>
        <ul>
            <li><img src="assets/img/1.png"><a href="https://goldeninvestor.net" target="_blank">Find us on Facebook</a></li>
            <li><img src="assets/img/2.png"><a href="https://goldeninvestor.net" target="_blank">Find us on Instagram</a></li>
            <li><img src="assets/img/3.png"><a href="https://goldeninvestor.net" target="_blank">Find us on Twitter</a></li>
            <li><img src="assets/img/4.png"><a href="https://goldeninvestor.net" target="_blank">Find us on Telegram</a></li>
            <li><img src="assets/img/5.png"><a href="https://goldeninvestor.net" target="_blank">Find us on Youtube</a></li>
        </ul>
    </div>

    <!-- HEADLINE-->
    <div class="fxbox1">
    <div class="fxboxlatar"></div>
    <div class="fxboxlatar1"></div>
    <div class="fxboxheadline">
            <div class="fxbox2">
                <img src="assets/img/iphonexx.png" alt="">
                <div class="fxbox3">
                    <div class="fxbox4">
                        <h1>COBA INDIKATOR <i>GRATIS!</i></h1>
                        <h1>DAN DAPATKAN <i>SENSASINYA!</i></h1>
                    </div>
                    <div class="fxbox5" onclick="actionToggled();">
                        <h1 href="#qwpqwp"> COBA SEKARANG! ></h1>
                        <div class="fxbox5-t" id="#qwpqwp" onclick="actionToggled();" >
                            <div class="ctrfxbox5">
                                <div class="ctrfxbox5ex" onclick="actionToggled();"> Back</div>
                            <div class="qxpl1">SILAHKAN PILIH INDIKATOR YANG MAU KAMU COBA</div>
                            <div class="qxpl2">
                                <div class="plpl1">
                                    <div class="plpl2">
                                        <h2>FOREX</h2>
                                        <div class="plpl3"></div>
                                        <img src="assets/img/forex.png" class="imgss">
                                        <img src="assets/img/audusd-img.jpg" class="imgsc">
                                    </div>
                                </div>
                                <div class="plpl1">
                                    <div class="plpl2">
                                        <h2>CRYPTO</h2>
                                        <div class="plpl3"></div>
                                        <img src="assets/img/crypto.png" class="imgss">
                                        <img src="assets/img/btc-img.jpg" class="imgsc">
                                    </div>
                                </div>
                                <div class="plpl1">
                                    <div class="plpl2">
                                        <h2>OPTION</h2>
                                        <div class="plpl3"></div>
                                        <img src="assets/img/option.png" class="imgss">
                                        <img src="assets/img/option-img.jpg" class="imgsc">
                                    </div>
                                </div>
                                <div class="plpl1">
                                    <div class="plpl2">
                                        <h2>SAHAM</h2>
                                        <div class="plpl3"></div>
                                        <img src="assets/img/stocks.png" class="imgss">
                                        <img src="assets/img/audusd-img.jpg" class="imgsc">
                                    </div>
                                </div>
                            </div>
                            <div class="qxpl3">
                                <div class="fxlplp">Forex: Prediksi pergerakan harga dengan Indikator Golden Predictor "BUY" dan "SELL" untuk forex. 
                                    <br>
                                    Dapat digunakan non-stop 24 jam. Semua pair forex. dan semua Timeframe Trading.</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- PELAJARI
    <div class="headlinefxx"><h1>PELAJARI BAGAIMANA INDIKATOR BERKERJA! HANYA DALAM 60 DETIK!</h1>
    <div class="fxpelajari1"></div>
    <div class="fxpelajari2"></div>
    -->
    </body>
    <script type="text/javascript">
        function actionToggle(){
            var action = document.querySelector('.action');
            action.classList.toggle('active')
        }
        function actionToggled(){
            var action = document.querySelector('.actionkiri');
            action.classList.toggle('active')
        }
        function actionToggled(){
            var action = document.querySelector('.fxbox5');
            action.classList.toggle('active')
        }

        </script>
        <script type="text/javascript">
            var lastScrollTop=0;
            navbar = document.getElementById("default-header");
            window.addEventListener("scroll",function(){
                var scrollTop = window.pageYOffset || document .documentElement.scrollTop;
                if(scrollTop > lastScrollTop){
                    navbar.style.top="-80px";
                } else{
                    navbar.style.top="0";
                }
                lastScrollTop = scrollTop
            })
            if (typeof document.onselectstart!="undefined") {
            document.onselectstart=new Function ("return false");
            }
            else{
                document.onmousedown=new Function ("return false");
                document.onmouseup=new Function ("return true");
            }
        </script>
    </html>

    


<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>