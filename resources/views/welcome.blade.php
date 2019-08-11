<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>

    
    </head>
    <body>
    <!-- Styles -->

<style>
    .flex-center a{
        text-decoration: none;
        color: #ffff;
    }
</style>
  
</head>
<body style="margin: 0;">

    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div style="position: fixed; border: 2px solid #fff; border-radius: 7px; padding: 5px; background-color: #000; top: 10px; right: 10px;z-index: 99;" class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Visiter le site</a>
                    @else
                        <a href="{{ route('login') }}"> Se connecter</a>
                        <a href="{{ route('register') }}"><span style="color: #8fcf51; font-weight: bold;">|</span> S'enregistrer</a>
                    @endauth
                </div>
            @endif

            
      
    
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
        <li><img src="data1/images/slide75.jpg" alt="slide75" title="slide75" id="wows1_0"/></li>
        <li><img src="data1/images/slide82.jpg" alt="slide82" title="slide82" id="wows1_1"/></li>
        <li><img src="data1/images/slide83.jpg" alt="slide83" title="slide83" id="wows1_2"/></li>
        <li><img src="data1/images/slide31.jpg" alt="slide31" title="slide31" id="wows1_3"/></li>
        <li><img src="data1/images/slide24.jpg" alt="slide24" title="slide24" id="wows1_4"/></li>
        <li><img src="data1/images/slide44.jpg" alt="slide44" title="slide44" id="wows1_5"/></li>
        <li><img src="data1/images/slide104.jpg" alt="slide104" title="slide104" id="wows1_6"/></li>
        <li><img src="data1/images/slide102.jpg" alt="slide102" title="slide102" id="wows1_7"/></li>
        <li><img src="data1/images/slide97.jpg" alt="slide97" title="slide97" id="wows1_8"/></li>
        <li><img src="data1/images/slide98.jpg" alt="slide98" title="slide98" id="wows1_9"/></li>
        <li><img src="data1/images/slide88.jpg" alt="slide88" title="slide88" id="wows1_10"/></li>
        <li><img src="data1/images/slide87.jpg" alt="slide87" title="slide87" id="wows1_11"/></li>
        <li><img src="data1/images/slide86.jpg" alt="slide86" title="slide86" id="wows1_12"/></li>
        <li><img src="data1/images/slide84.jpg" alt="slide84" title="slide84" id="wows1_13"/></li>
        <li><img src="data1/images/slide81.jpg" alt="slide81" title="slide81" id="wows1_14"/></li>
        <li><img src="data1/images/slide80.jpg" alt="slide80" title="slide80" id="wows1_15"/></li>
        <li><img src="data1/images/slide79.jpg" alt="slide79" title="slide79" id="wows1_16"/></li>
        <li><img src="data1/images/slide78.jpg" alt="slide78" title="slide78" id="wows1_17"/></li>
        <li><img src="data1/images/slide77.jpg" alt="slide77" title="slide77" id="wows1_18"/></li>
        <li><img src="data1/images/slide76.jpg" alt="slide76" title="slide76" id="wows1_19"/></li>
        <li><img src="data1/images/slide74.jpg" alt="slide74" title="slide74" id="wows1_20"/></li>
        <li><img src="data1/images/slide73.jpg" alt="slide73" title="slide73" id="wows1_21"/></li>
        <li><img src="data1/images/slide72.jpg" alt="slide72" title="slide72" id="wows1_22"/></li>
        <li><img src="data1/images/slide71.jpg" alt="slide71" title="slide71" id="wows1_23"/></li>
        <li><img src="data1/images/slide70.jpg" alt="slide70" title="slide70" id="wows1_24"/></li>
        <li><img src="data1/images/slide69.jpg" alt="slide69" title="slide69" id="wows1_25"/></li>
        <li><img src="data1/images/slide68.jpg" alt="slide68" title="slide68" id="wows1_26"/></li>
        <li><img src="data1/images/slide67.jpg" alt="slide67" title="slide67" id="wows1_27"/></li>
        <li><img src="data1/images/slide66.jpg" alt="slide66" title="slide66" id="wows1_28"/></li>
        <li><img src="data1/images/slide65.jpg" alt="slide65" title="slide65" id="wows1_29"/></li>
        <li><img src="data1/images/slide64.jpg" alt="slide64" title="slide64" id="wows1_30"/></li>
        <li><img src="data1/images/slide63.jpg" alt="slide63" title="slide63" id="wows1_31"/></li>
        <li><img src="data1/images/slide62.jpg" alt="slide62" title="slide62" id="wows1_32"/></li>
        <li><img src="data1/images/slide61.jpg" alt="slide61" title="slide61" id="wows1_33"/></li>
        <li><img src="data1/images/slide60.jpg" alt="slide60" title="slide60" id="wows1_34"/></li>
        <li><img src="data1/images/slide59.jpg" alt="slide59" title="slide59" id="wows1_35"/></li>
        <li><img src="data1/images/slide58.jpg" alt="slide58" title="slide58" id="wows1_36"/></li>
        <li><img src="data1/images/slide57.jpg" alt="slide57" title="slide57" id="wows1_37"/></li>
        <li><img src="data1/images/slide56.jpg" alt="slide56" title="slide56" id="wows1_38"/></li>
        <li><img src="data1/images/slide55.jpg" alt="slide55" title="slide55" id="wows1_39"/></li>
        <li><img src="data1/images/slide54.jpg" alt="slide54" title="slide54" id="wows1_40"/></li>
        <li><img src="data1/images/slide53.jpg" alt="slide53" title="slide53" id="wows1_41"/></li>
        <li><img src="data1/images/slide52.jpg" alt="slide52" title="slide52" id="wows1_42"/></li>
        <li><img src="data1/images/slide51.jpg" alt="slide51" title="slide51" id="wows1_43"/></li>
        <li><img src="data1/images/slide50.jpg" alt="slide50" title="slide50" id="wows1_44"/></li>
        <li><img src="data1/images/slide49.jpg" alt="slide49" title="slide49" id="wows1_45"/></li>
        <li><img src="data1/images/slide48.jpg" alt="slide48" title="slide48" id="wows1_46"/></li>
        <li><img src="data1/images/slide46.jpg" alt="slide46" title="slide46" id="wows1_47"/></li>
        <li><img src="data1/images/slide47.jpg" alt="slide47" title="slide47" id="wows1_48"/></li>
        <li><img src="data1/images/slide45.jpg" alt="slide45" title="slide45" id="wows1_49"/></li>
        <li><img src="data1/images/slide43.jpg" alt="slide43" title="slide43" id="wows1_50"/></li>
        <li><img src="data1/images/slide42.jpg" alt="slide42" title="slide42" id="wows1_51"/></li>
        <li><img src="data1/images/slide40.jpg" alt="slide40" title="slide40" id="wows1_52"/></li>
        <li><img src="data1/images/slide38.jpg" alt="slide38" title="slide38" id="wows1_53"/></li>
        <li><img src="data1/images/slide37.jpg" alt="slide37" title="slide37" id="wows1_54"/></li>
        <li><img src="data1/images/slide36.jpg" alt="slide36" title="slide36" id="wows1_55"/></li>
        <li><img src="data1/images/slide35.jpg" alt="slide35" title="slide35" id="wows1_56"/></li>
        <li><img src="data1/images/slide34.jpg" alt="slide34" title="slide34" id="wows1_57"/></li>
        <li><img src="data1/images/slide39.jpg" alt="slide39" title="slide39" id="wows1_58"/></li>
        <li><img src="data1/images/slide33.jpg" alt="slide33" title="slide33" id="wows1_59"/></li>
        <li><img src="data1/images/slide15.jpg" alt="slide15" title="slide15" id="wows1_60"/></li>
        <li><img src="data1/images/slide30.jpg" alt="slide30" title="slide30" id="wows1_61"/></li>
        <li><img src="data1/images/slide32.jpg" alt="slide32" title="slide32" id="wows1_62"/></li>
        <li><img src="data1/images/slide28.jpg" alt="slide28" title="slide28" id="wows1_63"/></li>
        <li><img src="data1/images/slide27.jpg" alt="slide27" title="slide27" id="wows1_64"/></li>
        <li><img src="data1/images/slide25.jpg" alt="slide25" title="slide25" id="wows1_65"/></li>
        <li><img src="data1/images/slide23.jpg" alt="slide23" title="slide23" id="wows1_66"/></li>
        <li><img src="data1/images/slide12.jpg" alt="slide12" title="slide12" id="wows1_67"/></li>
        <li><img src="data1/images/slide18.jpg" alt="slide18" title="slide18" id="wows1_68"/></li>
        <li><img src="data1/images/slide26.jpg" alt="slide26" title="slide26" id="wows1_69"/></li>
        <li><img src="data1/images/slide22.jpg" alt="slide22" title="slide22" id="wows1_70"/></li>
        <li><img src="data1/images/slide21.jpg" alt="slide21" title="slide21" id="wows1_71"/></li>
        <li><img src="data1/images/slide20.jpg" alt="slide20" title="slide20" id="wows1_72"/></li>
        <li><img src="data1/images/slide19.jpg" alt="slide19" title="slide19" id="wows1_73"/></li>
        <li><img src="data1/images/slide17.jpg" alt="slide17" title="slide17" id="wows1_74"/></li>
        <li><img src="data1/images/slide16.jpg" alt="slide16" title="slide16" id="wows1_75"/></li>
        <li><img src="data1/images/slide14.jpg" alt="slide14" title="slide14" id="wows1_76"/></li>
        <li><img src="data1/images/slide13.jpg" alt="slide13" title="slide13" id="wows1_77"/></li>
        <li><img src="data1/images/slide11.jpg" alt="slide11" title="slide11" id="wows1_78"/></li>
        <li><img src="data1/images/slide10.jpg" alt="slide10" title="slide10" id="wows1_79"/></li>
        <li><img src="data1/images/slide29.jpg" alt="slide29" title="slide29" id="wows1_80"/></li>
        <li><img src="data1/images/slide41.jpg" alt="slide41" title="slide41" id="wows1_81"/></li>
        <li><img src="data1/images/slide4.jpg" alt="slide4" title="slide4" id="wows1_82"/></li>
        <li><img src="data1/images/slide9.jpg" alt="slide9" title="slide9" id="wows1_83"/></li>
        <li><img src="data1/images/slide8.jpg" alt="slide8" title="slide8" id="wows1_84"/></li>
        <li><img src="data1/images/slide7.jpg" alt="slide7" title="slide7" id="wows1_85"/></li>
        <li><img src="data1/images/slide6.jpg" alt="slide6" title="slide6" id="wows1_86"/></li>
        <li><img src="data1/images/slide5.jpg" alt="slide5" title="slide5" id="wows1_87"/></li>
        <li><img src="data1/images/slide3.jpg" alt="slide3" title="slide3" id="wows1_88"/></li>
        <li><a href="http://wowslider.net"><img src="data1/images/slide2.jpg" alt="bootstrap carousel" title="slide2" id="wows1_89"/></a></li>
        <li><img src="data1/images/slide1.jpg" alt="slide1" title="slide1" id="wows1_90"/></li>
    </ul></div>
  
    </div>  
    
    
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
  </div>
</body>
</html>