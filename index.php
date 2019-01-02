<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WhatsApp</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name="theme-color" content="#005e54"/>
	<link rel="stylesheet" href="/whatsapp/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/whatsapp/css/style.css">
</head>
<body>
<div class="page">
    <div class="screen">
        <div class="screen-container">
            <div class="chat">
                <div class="chat-container">
                    <div class="user-bar">
                        <div class="back">
                            <i class="zmdi zmdi-arrow-left"></i>
                        </div>
                        <div class="avatar">
                            <img src="#" alt="Avatar" id="profile_photo"
                                 onClick="openPopup(this.src)">
                        </div>
                        <div class="name">
                            <span id="girl_name"></span>
                            <span class="status">çevrimiçi</span>
                        </div>
                        <div class="actions more">
                            <i class="zmdi zmdi-more-vert"></i>
                        </div>
                        <div class="actions attachment">
                            <i class="zmdi zmdi-attachment-alt"></i>
                        </div>
                        <div class="actions">
                            <a href="tel:053270927" onClick="sendGoal();" style="color:#fff;">
                                <i class="zmdi zmdi-phone"></i>
                            </a>
                        </div>
                    </div>
                    <div class="conversation">
                        <div class="conversation-container">
                        </div>
                        <form class="conversation-compose">
                            <div class="emoji">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147"
                                     y="3209">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z"
                                          fill="#7d8489"/>
                                </svg>
                            </div>
                            <input class="input-msg" name="input" placeholder="Bir mesaj yaz" autocomplete="off"
                                   autofocus>
                            <div class="photo">
                                <i class="zmdi zmdi-camera"></i>
                            </div>
                            <button class="send">
                                <div class="circle">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src='/whatsapp/js/moment.min4c56.js?121'></script>
<script src='/whatsapp/js/jquery-2.2.4.min.js'></script>
<script>
    // Keywordlerin bulunduğu array tanımlanır.
    // Array window değişken tipinde tanımlanır ki heryerde kullanılabilsin.
    window.keywords = [
        ["selam", "merhaba", "mrb","a.s.","as","a.s","slm","selamın aleyküm"],
        ["naber", "nbr", "nasılsın", "napıyosun", "nası gidiyo", "nasıl gidiyor"],
        ["hangi takımlısın", "takım", "hangi takımı tutuyosun", "beşiktaş", "fenerbahçe", "fener","cimbombom","gs","fb","galatasaray","gassaray"],
        ["beyaz", "siyah", "sari", "kirmizi", "tribün", "tribun", "maç"],
        ["öylesine", "şetmiştim", "şeetmiştim", "buyuracak"],
	// 5       
	    ["test","deneme","1 2 3", "ses deneme" , "ses kontrol"],
        ["çalışıyorsun","calismiyor","çalışmıyor","calisiyorsun","ne iş yapıyorsun","ne is yapiyorsun","işle mesgulsun","isle meşgulsun"],
        ["güvenemiyorum","güven duymuyorum","güvenmem"],
        ["başka bi tane","başka gönder","farklı gönder"],
        ["şehir","sehir","oturuyorsun","oturuyosun","semt","neresinden","nerdensin","neredesin","neredensin","nerdesin","mahalle","köy","adres","adresiniz"],
    // 10
		["nerelisin","nerelisiniz","arapmısın","arap mısın","arap misin","arapmisin"],
        ['hızlısın',"hızlı yazdın","hızlı mısın"],
        ['kaçlısın',"kaç doğumlusun","kaclisin","kac dogumlusun","yaşındasın","yasindasin"],
        ['burcusun',"burç","terazi","oğlak","akrep","balık","başak","yay","kova","ikizler"],
        ["evli misiniz","evli mi","evlendin","evlimisin","evlimisiniz","kiz arkadasin","kız arkadaşın"],
	// 15
		["tanıdın","tanımadın","tanimadin","tanidin"],
        ['demicek',"demeyecek","demıcak"],
        ['tamam',"peki","oldu o zaman"],
        ["web sitesi yaptırmak","websitesi yaptirmak","yaptırmak","yapıyormusun","yapiyormusun","yapıyor musun","websitesi yapıyor","websitesi yapiyor"],
        ["kaça yapıyorsun","kaca yapiyorsun","ne kadara","kaça mal","fiyat"],
	// 20        
		['domaltıp890', 'domaltip890', 'domalıp890'],
        ['sakso890', 'sakso890', 'oral890'],
        ['merve890'],
        ['kaç tl890', 'tl890', 'kac tl890'],
        ['aşkım890', 'askim890'],
	// 25        
		['sanvero8908'],
        ['neler neler890', 'ne zaman890', 'kim890'],
        ['ayak890'],
        ['facebook890', 'face890'],
        ['sanver', 'seks', 'seks', 'sanver'],
        ['arayacağım890', 'arayacagım890', 'ararım890', 'ararim890', 'aricam890'],
        ['karim890', 'karım890'],
        ['siktir git890'],
        ['konuşsana890', 'konus890', 'konuş890', 'konussana890', 'konuşsana90'],
        ['amını göster890', 'amini goster890', 'amını goster890', 'amını göster890', 'am fotosu890', 'amfotosu90', 'am fotosu890', 'amının fotosu890', 'aminin fotosu890'],
        ['adın ne890', 'adin ne890', 'ismin ne890'],
        ['hey', 'hop',"alo","aloo","heey"],
        ["gerçek misin","gerçek mi","gercek misin","gercek mi","gercekten","gerçekten","sen misin","fake","feyk","sahte"],
        ['memnun oldum']
    ];

    function checkKeyword(keyword) {
        //console.log(keyword);
        for (i = 0; i < window.keywords.length; i++) {
            for (j = 0; j < window.keywords[i].length; j++) {
                if (keyword.toLowerCase().indexOf(window.keywords[i][j]) > -1) {
                    //console.log(i);
                    return i;
                }
            }
        }

        return false;
    }

    var form = document.querySelector('.conversation-compose');
    var conversation = document.querySelector('.conversation-container');

    window.girl_id = Math.floor(Math.random() * 1) + 1;
    window.recievedCount = 0;
    window.lastcheck = 0;
    window.imageCheck = 1;
    window.keywordPhoneNum = 0;
    window.keywordMsgCheck = 0;
    window.keywordMsgCheck1 = 0;
    window.keywordMsgCheck2 = 0;
    window.keywordMsgCheck3 = 0;
    window.keywordMsgCheck4 = 0;
    window.keywordMsgCheck5 = 0;
    window.keywordMsgCheck6 = 0;
    window.keywordMsgCheck7 = 0;
    window.keywordMsgCheck8 = 0;
    window.keywordMsgCheck9 = 0;
    window.keywordMsgCheck10 = 0;
    window.keywordMsgCheck11 = 0;
    window.keywordMsgCheck12 = 0;
    window.keywordMsgCheck13 = 0;
    window.keywordMsgCheck14 = 0;
    window.keywordMsgCheck15 = 0;
    window.keywordMsgCheck16 = 0;
    window.keywordMsgCheck17 = 0;
    window.keywordMsgCheck18 = 0;
    window.keywordMsgCheck19 = 0;
    window.keywordMsgCheck20 = 0;
    window.keywordMsgCheck21 = 0;
    window.keywordMsgCheck22 = 0;
    window.keywordMsgCheck23 = 0;
    window.keywordMsgCheck24 = 0;
    window.keywordMsgCheck25 = 0;
    window.keywordMsgCheck26 = 0;
    window.keywordMsgCheck27 = 0;
    window.keywordMsgCheck28 = 0;
    window.keywordMsgCheck29 = 0;
    window.keywordMsgCheck30 = 0;
    window.keywordMsgCheck31 = 0;
    window.keywordMsgCheck32 = 0;
    window.keywordMsgCheck33 = 0;
    window.keywordMsgCheck34 = 0;
    window.keywordMsgCheck35 = 0;
    window.keywordMsgCheck36 = 0;
    window.keywordMsgCheck37 = 0;
    window.keywordMsgCheck38 = 0;
    window.keywordMsgCheck39 = 0;

    var photos = {
        1: {1: 'img/pp.jpg', 2: 'img/pp.jpg', 3: 'img/pp.jpg'},
		
    }

    var profiles = {
        1: {name: 'Sanver', profile_photo: 'img/pp.jpg'},

    }   

    document.title = profiles[girl_id]["name"] + " - Çevrimiçi";
    $("#girl_name").html(profiles[girl_id]["name"]);
    $("#profile_photo").attr("src",profiles[girl_id]["profile_photo"]);
    // console.log(profiles[girl_id]["name"]); 

    setTimeout(function () {
        sendRecievedMessage('Selam?');
    }, 1000)
    /*
     window.msg1 = setTimeout(function(){
     sendRecievedMessage('Orda mısın?');
     },10500); */

    form.addEventListener('submit', newMessage);

    function newMessage(e) {
        var input = e.target.input;

        switch (window.recievedCount) {
            default:
                window.lastcheck = 1;
                break;
        }

        if (input.value) {
            clearTimeout(window.msg1);
            var message = buildMessage(input.value);
            conversation.appendChild(message);
            animateMessage(message);
            logText(input.value);
            var msgText = input.value;
            var check_number = checkKeyword(msgText);

            if (window.lastcheck === 1 && window.keywordPhoneNum === 0 && $.isNumeric(msgText) && msgText.length >= 9 && msgText.length <= 12) {
                setTimeout(function () {
                    sendRecievedMessage('Bana numaranı verme, sen beni ara.');
                    window.keywordPhoneNum++;
                }, 1000);
                var check_number = false;
            }

				
            if (check_number !== false && window.lastcheck === 1) {
                switch (check_number) {
					
                    case 0:
                        if (window.keywordMsgCheck1 <= 0) {
                            window.keywordMsgCheck1++;
                            setTimeout(function () {
                                sendRecievedMessage('Buyrun');
                            }, 100);
                        }
                        break;
                    case 1:
                        if (window.keywordMsgCheck2 <= 0) {
                            window.keywordMsgCheck2++;
                            setTimeout(function () {
                                sendRecievedMessage('İyiyim teşekkürler, tanıyamadım?');
                            }, 3500);
                        }
                        break;
                    case 2:
                        if (window.keywordMsgCheck3 <= 0) {
                            window.keywordMsgCheck3++;
                            setTimeout(function () {
                                sendRecievedMessage('Siyah!');
                            }, 1500);
                        }
                        break;
                    case 3:
                        if (window.keywordMsgCheck4 <= 0) {
                            window.keywordMsgCheck4++;
                            setTimeout(function () {
                                sendRecievedMessage('En büyük Beşiktaş!');
                            }, 3500);
                        }
                        break;
                    case 4:
                        if (window.keywordMsgCheck5 <= 0) {
                            window.keywordMsgCheck5++;
                            setTimeout(function () {
                                sendRecievedMessage('he tamam o zaman...');
                            }, 2000);
                        }
                        break;
                    case 5:
                        if (window.keywordMsgCheck6 <= 0) {
                            window.keywordMsgCheck6++;
                            setTimeout(function () {
                                sendRecievedMessage('neyin testi!? neyin denemesi!? gayet gerçeğim!');
                            }, 1500);
                        }
                        break;
                    case 6:
                        if (window.keywordMsgCheck7 <= 0) {
                            window.keywordMsgCheck7++;
                            setTimeout(function () {
                                sendRecievedMessage('şu hayatta çalışmak çok zor! kendi işimi yapıyorum, internet üzerine.');
                            }, 3500);
                        }
                        break;
                    case 7:
                        if (window.keywordMsgCheck8 <= 0) {
                            window.keywordMsgCheck8++;
                            setTimeout(function () {
                                sendRecievedMessage('ona bakarsan, ben de sana güvenmiyorum!');
                            }, 1500);
                        }
                        break;
                    case 8:
                        if (window.keywordMsgCheck9 <= 0) {
                            window.keywordMsgCheck9++;
                            setTimeout(function () {
                                sendRecievedMessage('başka yok');
                            }, 2500);
                        }
                        break;
                    case 9:
                        if (window.keywordMsgCheck10 <= 0) {
                            window.keywordMsgCheck10++;
                            setTimeout(function () {
                                sendRecievedMessage('Austin, Texas da oturuyorum. bazen kalkıyorum ihihihihihi olmadı mı?');
                            }, 3500);
                        }
                        break;
                    case 10:
                        if (window.keywordMsgCheck11 <= 0) {
                            window.keywordMsgCheck11++;
                            setTimeout(function () {
                                sendRecievedMessage('Baba tarafım Manastır göçmeni, komple oralılar. Annemin annesinin annesi İstanbullu, o taraftan Bizansa dayanıyoruz. Annemin babası Pers. Sanırım ben de Ona çekmişim. Bu esmerlik oradan geliyor.');
                            }, 3500);
                        }
                        break;
                    case 11:
                        if (window.keywordMsgCheck12 <= 0) {
                            window.keywordMsgCheck12++;
                            setTimeout(function () {
                                sendRecievedMessage('çok hızlıyımdır!');
                            }, 3500);
                        }
                        break;
                    case 12:
                        if (window.keywordMsgCheck13 <= 0) {
                            window.keywordMsgCheck13++;
                            setTimeout(function () {
                                sendRecievedMessage('81 Ekim doğumluyum.');
                            }, 3500);
                        }
                        break;
                    case 13:
                        if (window.keywordMsgCheck14 <= 0) {
                            window.keywordMsgCheck14++;
                            setTimeout(function () {
                                sendRecievedMessage('Terazi burcuyum ama yükselenim Akrep sanırım.');
                            }, 3500);
                        }
                        break;
                    case 14:
                        if (window.keywordMsgCheck15 <= 0) {
                            window.keywordMsgCheck15++;
                            setTimeout(function () {
                                sendRecievedMessage('Evliyim, dünya güzeli bir eşim var. Çocuk henüz yok. Ama olacak!');
                            }, 3500);
                        }
                        break;
                    case 15:
                        if (window.keywordMsgCheck16 <= 0) {
                            window.keywordMsgCheck16++;
                            setTimeout(function () {
                                sendRecievedMessage('Tanıdım tanıdım.');
                            }, 3500);
                        }
                        break;
                    case 16:
                        if (window.keywordMsgCheck17 <= 0) {
                            window.keywordMsgCheck17++;
                            setTimeout(function () {
                                sendRecievedMessage('Sen sor, ben söyleyeyim');
                            }, 3500);
                        }
                        break;
                    case 17:
                        if (window.keywordMsgCheck18 <= 0) {
                            window.keywordMsgCheck18++;
                            setTimeout(function () {
                                sendRecievedMessage('peki...');
                            }, 3500);
                        }
                        break;
                    case 18:
                        if (window.keywordMsgCheck19 <= 0) {
                            window.keywordMsgCheck19++;
                            setTimeout(function () {
                                sendRecievedMessage('Bu konuda <a target="_blank" href="https://ziptasarim.com">ziptasarim.com</a> üzerinden sana yardım edebilirim.');
                            }, 3500);
                        }
                        break;
                    case 19:
                        if (window.keywordMsgCheck20 <= 0) {
                            window.keywordMsgCheck20++;
                            setTimeout(function () {
                                sendRecievedMessage('Bunları konuşuruz, bana detayları anlatan eposta gönder: <a href="mailto:sanvergozen@gmail.com">sanvergozen@gmail.com</a>');
                            }, 3500);
                        }
                        break;
                    case 20:
                        if (window.keywordMsgCheck21 <= 0) {
                            window.keywordMsgCheck21++;
                            setTimeout(function () {
                                sendRecievedMessage('Domaltabilecek misin? Hadi bekliyorum. Ama ara artık sıkıldım. İşim var benim de..');
                            }, 3500);
                        }
                        break;
                    case 21:
                        if (window.keywordMsgCheck22 <= 0) {
                            window.keywordMsgCheck22++;
                            setTimeout(function () {
                                sendRecievedMessage('Demek sakso seviyorsun. Benim de en sevdiğim hatta Merve diye bir arkadaşım var sana beraber sakso çekeriz. Ara artık aşkım. <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 22:
                        if (window.keywordMsgCheck23 <= 0) {
                            window.keywordMsgCheck23++;
                            setTimeout(function () {
                                sendRecievedMessage('Merve benim yatak arkadaşım beraber üçlü yapıyoruz. Ama parası olup sikebileceklere ;)');
                            }, 3500);
                        }
                        break;
                    case 23:
                        if (window.keywordMsgCheck24 <= 0) {
                            window.keywordMsgCheck24++;
                            setTimeout(function () {
                                sendRecievedMessage('Dakikası 4 tl artık ne kadar sürerse aşkım hadi ben hazırlanıyorum ara');
                            }, 3500);
                        }
                        break;
                    case 24:
                        if (window.keywordMsgCheck25 <= 0) {
                            window.keywordMsgCheck25++;
                            setTimeout(function () {
                                sendRecievedMessage('Senin askim diyen ağzını yerim ben bebeğim. Hadi ara bekliyorum bi tanem.. <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 25:
                        if (window.keywordMsgCheck26 <= 0) {
                            window.keywordMsgCheck26++;
                            setTimeout(function () {
                                sendRecievedMessage('Ara beni beraber çekelim aşkım sanveroyu <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 26:
                        if (window.keywordMsgCheck27 <= 0) {
                            window.keywordMsgCheck27++;
                            setTimeout(function () {
                                sendRecievedMessage('Neresinden olduğu bana kalsın hayatım. Öyle hemen olmaz bi ara tanışalım. <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 27:
                        if (window.keywordMsgCheck28 <= 0) {
                            window.keywordMsgCheck28++;
                            setTimeout(function () {
                                sendRecievedMessage('Ayak yalamayı da seviyorsan doğru yerdesin aşkım. Aramanı bekliyorum. <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 28:
                        if (window.keywordMsgCheck29 <= 0) {
                            window.keywordMsgCheck29++;
                            setTimeout(function () {
                                sendRecievedMessage('Facebook adresim: <a target="_blank" href="https://facebook.com/sanver">https://facebook.com/sanver</a>');
                            }, 3500);
                        }
                        break;
                    case 29:
                        if (window.keywordMsgCheck30 <= 0) {
                            window.keywordMsgCheck30++;
                            setTimeout(function () {
                                sendRecievedMessage('Seks’in her türlüsünü severim önden arkadan grup hepsini ama en çok telefonda boşaltmayı seviyorum arasana aşkım <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 30:
                        if (window.keywordMsgCheck31 <= 0) {
                            window.keywordMsgCheck31++;
                            setTimeout(function () {
                                sendRecievedMessage('Tamam aşkım sulandım seni bekliyorum. Hadi ara hemen <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 31:
                        if (window.keywordMsgCheck32 <= 0) {
                            window.keywordMsgCheck32++;
                            setTimeout(function () {
                                sendRecievedMessage('Aşkım istersen karınla da grup konuşma yaparız istersen sen ona çaktırmadan ara <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 32:
                        if (window.keywordMsgCheck33 <= 0) {
                            window.keywordMsgCheck33++;
                            setTimeout(function () {
                                sendRecievedMessage('Sik aşkım gideyim. Hadi gel kaldıralım küçük pipini');
                            }, 3500);
                        }
                        break;
                    case 33:
                        if (window.keywordMsgCheck34 <= 0) {
                            window.keywordMsgCheck34++;
                            setTimeout(function () {
                                sendRecievedMessage('Ne konuşayım aşkım sen konuş işte. Ara konuşalım sevişelim bir an önce, sonra belki buluşuruz :) İşim var hadi ara <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 34:
                        if (window.keywordMsgCheck35 <= 0) {
                            window.keywordMsgCheck35++;
                            setTimeout(function () {
                                sendRecievedMessage('Hemen am görmek istiyorsun, Aşkım sen önce bi ara ikna et, ben sana neler göstereceğim! Yerinde duramayacaksın... <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 35:
                        if (window.keywordMsgCheck36 <= 0) {
                            window.keywordMsgCheck36++;
                            setTimeout(function () {
                                sendRecievedMessage('Adım '+profiles[girl_id]["name"]+' senin adın ne? <a href="tel:003535157318" onClick="sendGoal();">003535157318</a>');
                            }, 3500);
                        }
                        break;
                    case 36:
                        if (window.keywordMsgCheck37 <= 0) {
                            window.keywordMsgCheck37++;
                            setTimeout(function () {
                                sendRecievedMessage('Evet, buradayım...');
                            }, 3500);
                        }
                        break;
                    case 37:
                        if (window.keywordMsgCheck38 <= 0) {
                            window.keywordMsgCheck38++;
                            setTimeout(function () {
                                sendRecievedMessage('Bunu bir bilgisayarın yapabileceğini düşünüyor musun? Dipdiri karşındayım işte!');
                            }, 3500);
                        }
                        break;
                    case 38:
                        if (window.keywordMsgCheck39 <= 0) {
                            window.keywordMsgCheck39++;
                            setTimeout(function () {
                                sendRecievedMessage('Ben de memnun oldum ihihihihi');
                            }, 3500);
                        }
                        break;

                }
				
            }

			/*else if (check_number !== true && window.lastcheck === 1) {
							setTimeout(function () {
                                sendRecievedMessage('anlamadım?');
                            }, 2500);
            }*/

            if (window.imageCheck <= Object.keys(photos[girl_id]).length && (msgText.toLowerCase().indexOf('resim') > -1 || msgText.toLowerCase().indexOf('foto') > -1 || msgText.toLowerCase().indexOf('resm') > -1 || msgText.toLowerCase().indexOf('rsm') > -1 || msgText.toLowerCase().indexOf('fotoğraf') > -1 || msgText.toLowerCase().indexOf('fotograf') > -1)) {
                //console.log(window.imageCheck);
                sendRecievedMessage('1 sn hemen göndereyim');
                setTimeout(function () {
                    sendRecievedMessage('<img src="' + photos[girl_id][window.imageCheck] + '" style="max-width:200px;cursor:pointer;" onClick="openPopup(\'' + photos[girl_id][window.imageCheck] + '\')" />', 1);
                    window.imageCheck++;
                }, 3500);
            } else if (window.lastcheck === 0) {
                sendRecievedMessage(rMessage);
            }
        }

        input.value = '';
        conversation.scrollTop = conversation.scrollHeight;

        e.preventDefault();
    }

    function buildMessage(text) {
        var element = document.createElement('div');

        element.classList.add('message', 'sent');

        element.innerHTML = text +
            '<span class="metadata">' +
            '<span class="time">' + moment().format('h:mm') + '</span>' +
            '<span class="tick tick-animation">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck" x="2047" y="2061"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#92a58c"/></svg>' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg>' +
            '</span>' +
            '</span>';

        return element;
    }

    function sendRecievedMessage(text, img) {
        //if(window.lastcheck == 1) { return; }
        var status = document.querySelector('.status');

        setTimeout(function () {
            status.innerHTML = 'yazıyor...';
        }, 500);

        setTimeout(function () {
            var recievedmessage = buildRecievedMessage(text, img);
            conversation.appendChild(recievedmessage);
            animateMessage(recievedmessage);
            status.innerHTML = 'çevrimiçi';
            conversation.scrollTop = conversation.scrollHeight;
        }, 2000);
    }

    function buildRecievedMessage(text, img) {
        var element = document.createElement('div');

        element.classList.add('message', 'received');

        if (img == 0) {
            element.innerHTML = text +
                '<span class="metadata">' +
                '<span class="time">' + moment().format('h:mm') + '</span>' +
                '<!--<span class="tick tick-animation">' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck" x="2047" y="2061"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#92a58c"/></svg>' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg>' +
                '</span>-->' +
                '</span>';
        } else {
            element.innerHTML = text +
                '<span class="metadata">' +
                '<span class="time">' + moment().format('h:mm') + '</span>' +
                '<!--<span class="tick tick-animation">' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck" x="2047" y="2061"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#92a58c"/></svg>' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg>' +
                '</span>-->' +
                '</span>';
        }
        return element;
    }

    function animateMessage(message) {
        setTimeout(function () {
            if ($('.tick').length && $('.tick-animation').length) {
                var tick = message.querySelector('.tick');
                tick.classList.remove('tick-animation');
            }
        }, 500);
    }

    function sendGoal() {
        // $.post('send_goal.php',
        //     {
        //         aff_id: 160,
        //         channel_id: 1091,
        //         service_id: 12,
        //         landing_id: 9988,
        //         operator: "OFF",
        //         number: "003535157318",
        //         os: "WINDOWS",
        //         browser: "CHROME",
        //         referer: "NONE",
        //         user_agent: "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36",
        //         ip_address: 2968557726,
        //         device_type: "OTHER",
        //         goal_type: "POPUP"
        //     }
        // );
    }

    function logText(text) {
        //$.post('log_text.php', {mesaj: text});
    }

    function openPopup(image) {
        $('.overlay img').attr('src', image);
        $('.overlay').fadeToggle();
    }

    function closePopup() {
        $('.overlay').fadeToggle();
    }
</script>
<script>
		
	// Assign a variable for the application being used
	var nVer = navigator.appVersion;
	// Assign a variable for the device being used
	var nAgt = navigator.userAgent;
	var nameOffset,verOffset,ix;
 
 
	// First check to see if the platform is an iPhone or iPod
	if(navigator.platform == 'iPhone' || navigator.platform == 'iPod'){
		// In Safari, the true version is after "Safari" 
		if ((verOffset=nAgt.indexOf('Safari'))!=-1) {
		  // Set a variable to use later
		  var mobileSafari = 'Safari';
		}
	}
 
	// If is mobile Safari set window height +60
	if (mobileSafari == 'Safari') { 
		// Height + 60px
		
		if($( window ).width() > 320){
		$('.conversation').css('height','80vh');
		$('.conversation .conversation-container').css('height',"69vh");
		}else {
		// alert('ufak');
		$('.conversation').css('height','80vh');
		$('.conversation .conversation-container').css('height',"65vh");
		}
		
		// alert($('.conversation .conversation-container').height());
	};


 
</script>
<div class="overlay">
    <span class="back-arrow"></span>
    <a href="#" onClick="closePopup();">
        <img src="#">
    </a>
</div>
</body>
</html>
