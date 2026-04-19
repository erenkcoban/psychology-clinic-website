<?php
function head_üstkisim($title){
    echo'
    <!DOCTYPE html>
    <html lang="en">
     <head>
      <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/tema.css">
     <title>Psikolog sayfasi</title>
    
     </head>
     <body style="background-image:url(fotolar/Background.jpg)">
     <section class="ana">';

}
function head_üstbaslik(){
 echo'
    <section class="ana">
        <header>
            <div>
                <img src="fotolar/Loqo_Hayat_clinik-1-removebg-preview.png">
                <h1  id="a1" class="slogan">Daha Mutlu Bir Yaşam </h1>
                <div class="clearfix"></div>
            </div>
          <div class="üst-menü">
            <nav>
                <ul>
                    <li><a href="#a1" class="active">Anasayfa</a></li>
                    <li><a href="#m1">Hakkımızda</a></li>
                    <li><a href="#d1">Danışmanlarımız</a></li>
                    <li><a href="#m3">servislerimiz</a></li>
                    <li><a href="#i1">İletişim</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
          </div>
        </header>';
}

function orta_kisim_çoklu($content_d,$baslik_d,$resim_d,$Tresim_d,$Tisim_d,$Trate_d,$Ttitle_d){
    echo'
    <main>
        <section>';
        for($i=0;$i<count($content_d);$i++){
            echo'
            <article class="makale">
                <img src="resimler/'.$resim_d[$i].'">
                <h1>'.$baslik_d[$i].'</h1>
               '.$content_d[$i].'
                <div class="clearfix"></div>
            </article> ';
        }
        for($i=0;$i<count($Tresim_d);$i++){
        echo'
        
        <div class="dan-img"><img src="'.$Tresim_d[$i].'" alt="danişman foto"></div>
        <div class="info">
            <div class="name">'.$Tisim_d[$i].'</div>
            <div class="rate">'.$Trate_d[$i].'</div>
            <div class="title">'.$Ttitle_d[$i].'</div>
        </div>
            <div class="clearfix"></div>
        
        ';
        }

            echo'
        </section>
    </main>';
}

function orta_kisim_tekli(){




}
function alt_kisim(){
     echo'
       <footer>
            <section>
                <div>
                    <h4 id="i1">Hayat klinik</h4>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt assumenda pari</p>
                </div>
                <div>
                    <H4>Linkler</H4>
                    <nav>
                        <ul>
                            <li><a href="#a1">Ana Sayfa</a></li>
                            <li><a href="#m1">Hakkımızda</a></li>
                            <li><a href="#d1">Danışmanlarımız</a></li>
                            <li><a href="#m3">servislerimiz</a></li>
                            <li><a href="#i1">İletişim</a></li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h4>İletişim</h4>
                    Muğla/fethiye tuzla mahhallesi<br>
                    yusuferengs48@gmail.com<br>              
                    +90 538 621 4779<br>             
                </div>
                <p class="clearfix"></p>
            </section>
        </footer>
    </section>
   </body>
 ';

}
?>