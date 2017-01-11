<?php
/*
  Template Name:Srbobranska Mapa
 */

get_header(); ?>
 <script src="http://maps.google.com/maps/api/js?key=AIzaSyDEZ5RlhXnEkXC3G34ZTb_lOVjVOXQuFkA&callback=initMap"
 type="text/javascript"></script>

	<div class="container">
		<div class="row">
		<div class="col-sm-offset-2 col-sm-4">
			<h2 class="text-center page-title">Poslovna mapa Srbobran</h2>		
		</div>
		</div>
		
	<section id="mapa">
   	<div class="row" id="primary">
		<main id="content" class="col-sm-8">
	
		  <select id="type" onchange="filterMarkers(this.value);">
    <option value="">Izaberite kategoriju molim</option>
    <option value="preduzetnici">Preduzetnici</option>
    <option value="udruzenja">Udruženja</option>
    <option value="privrednici">Privrednici</option>
</select>
	<div id="map-canvas" style="height: 400px; width: 100%;"></div>
	<p id="demo"></p>
	
	<script>
 
var gmarkers1 = [];
var markers1 = [];
var infowindow = new google.maps.InfoWindow({
    content: ''
});


// Our markers
markers1 = [
    //Privrednici Srbobran,

	['0', 'KOVATERM DOO ZA PROIZVODNJU, USLUGE I TRGOVINU SRBOBRAN,19 oktobra 9', 45.553176, 19.799695, 'privrednici','http://www.kler-srbobran.rs/kovaterm-doo-za-proizvodnju-usluge-i-trgovinu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['1', 'DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU PROPATROL SRBOBRAN,Žarka Zrenjanina 38', 45.551224, 19.781077, 'privrednici','http://www.kler-srbobran.rs/drustvo-sa-ogranicenom-odgovornoscu-propatrol-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['2', 'DOO DOSTAN PREDUZEĆE ZA TRGOVINU, POSREDOVANJE, USLUGE I IZDAVAČKU DELATNOST SRBOBRAN, List Ferenca 11', 45.551149, 19.794985, 'privrednici','http://www.kler-srbobran.rs/doo-dostan-preduzece-za-trgovinu-posredovanje-usluge-i-izdavacku-delatnost-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['3', 'ŠOLTIŠ PETROL DOO SRBOBRAN, 19. OKTOBRA 38-40 ', 45.553949, 19.801460, 'privrednici','http://www.kler-srbobran.rs/soltis-petrol-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['4', 'INT.LINE DOO ZA TRANSPORT I USLUGE SRBOBRAN, Petra Drapšina 63', 45.548757, 19.783323, 'privrednici','http://www.kler-srbobran.rs/int-line-doo-za-transport-i-usluge-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['5', 'DRUŠTVO ZA PROIZVODNJU DRVENE AMBALAŽE, TRGOVINU I USLUGE GOGA & DAĆA GROUP DOO SRBOBRAN, Vojvode Sinđelića 5', 45.552737, 19.781888, 'privrednici','http://www.kler-srbobran.rs/drustvo-za-proizvodnju-drvene-ambalaze-trgovinu-i-usluge-goga-daca-group-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['6', 'GERON PLUS DOO SRBOBRAN, Cara Lazara 5', 45.548022, 19.793283, 'privrednici','http://www.kler-srbobran.rs/geron-plus-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['7', 'VETERINARSKA AMBULANTA VACCA DRUŠTVO SA OGRANIČNOM ODGOVORNOŠĆU, Laze Kostića 44', 45.554802, 19.793245, 'privrednici','http://www.kler-srbobran.rs/veterinarska-ambulanta-vacca-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['8', 'BOOZE DOO SRBOBRAN  ', 45.543543, 19.792237, 'privrednici','http://www.kler-srbobran.rs/booze-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['9', 'DRUŠTVO ZA TRGOVINU I USLUGE PARKVETS-NS, SRBOBRAN', 45.544024, 19.795945, 'privrednici','http://www.kler-srbobran.rs/drustvo-za-trgovinu-i-usluge-parkvets-ns-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['10', 'PIONIR AKCIONARSKO DRUŠTVO SRBOBRAN', 45.544644, 19.789821, 'privrednici','http://www.kler-srbobran.rs/pionir-akcionarsko-drustvo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['11', 'AUTO STEFAN CENTAR PROIZVODNO USLUŽNO I PROMETNO EXPORT IMPORT DRUŠTVO SA OGRANIČNOM ODGOVORNOŠĆU, SRBOBRAN, Vuka Karad�i�a 2', 45.546428, 19.792379, 'privrednici','http://www.kler-srbobran.rs/auto-stefan-centar-proizvodno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['12', 'AGROSAVET DOO SRBOBRAN, Dobrovoljačka 88', 45.547075, 19.779229, 'privrednici','http://www.kler-srbobran.rs/agrosavet-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['13', 'SNS COMMERCE DOO ZA DRUMSKI SAOBRAĆAJ I TRGOVINU, SRBOBRAN, Popovača Venac BB', 45.555034, 19.794279, 'privrednici','http://www.kler-srbobran.rs/sns-commerce-doo-za-drumski-saobracaj-i-trgovinu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['14', 'NOVAK-TRANS TRANSPORTNO-PROMETNO DOO SRBOBRAN, List Ferenca 2', 45.550090, 19.795069, 'privrednici','http://www.kler-srbobran.rs/novak-trans-transportno-prometno-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['15', 'KURJAČKI PROIZVODNO I PROMETNO,EXPORT IMPORT DRUŠTVO SA OGRANIČNOM ODGOVORNOŠĆU SRBOBRAN, Save Kovačevića 16', 45.547169, 19.772208, 'privrednici','http://www.kler-srbobran.rs/kurjacki-proizvodno-i-prometnoexport-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['16', 'ŠVRĆA DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU ZA PROMET ROBA SRBOBRAN, Trg Republike 2', 45.543447, 19.790463, 'privrednici','http://www.kler-srbobran.rs/svrca-drustvo-sa-ogranicenom-odgovornoscu-za-promet-roba-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['17', 'OPŠTA ZEMLJORADNIČA ZADRUGA SRBOBRAN SRBOBRAN, Karađorđeva 1', 45.546447, 19.791659, 'privrednici','http://www.kler-srbobran.rs/svrca-drustvo-sa-ogranicenom-odgovornoscu-za-promet-roba-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['18', 'STS TALIJA DOO, SRBOBRAN, Doža Đerđa 2', 45.549090, 19.794997, 'privrednici','http://www.kler-srbobran.rs/sts-talija-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['19', 'DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU SANJA TRANSPORT SRBOBRAN, Trg Republike 1', 45.543371, 19.790647, 'privrednici','http://www.kler-srbobran.rs/drustvo-sa-ogranicenom-odgovornoscu-sanja-transport-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['20', 'DADA-PLUS DOO ZA PROIZVODNJU, TRGOVINU I USLUGE SRBOBRAN, Dobrovoljačka 88', 45.547042, 19.779143, 'privrednici','http://www.kler-srbobran.rs/dada-plus-doo-za-proizvodnju-trgovinu-i-usluge-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['21', 'MUDRINSKI DOO SRBOBRAN, Vojvode Sinđelića 5', 45.552755, 19.781590, 'privrednici','http://www.kler-srbobran.rs/mudrinski-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['22', 'DOO TEOZIS LTD SRBOBRAN, Karađorđeva 8', 45.546669, 19.790740, 'privrednici','http://www.kler-srbobran.rs/doo-teozis-ltd-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['23', 'PREDUZEĆE ZA PROIZVODNJU, TRGOVINU I USLUGE FRESHGRO DOO SRBOBRAN, Novosadski Put BB', 45.538490, 19.790306, 'privrednici','http://www.kler-srbobran.rs/preduzece-za-proizvodnju-trgovinu-i-usluge-freshgro-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['24', 'SINDA DOO ZA PROIZVODNJU TRGOVINU I GRAĐEVINARSTVO SRBOBRAN, Novosadski Put BB', 45.549570, 19.795090, 'privrednici','http://www.kler-srbobran.rs/sinda-doo-za-proizvodnju-trgovinu-i-gradevinarstvo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['25', 'AUTO CENTAR ŠMIT DOO SRBOBRAN, Petra Drapšina 84', 45.548963, 19.783186, 'privrednici','http://www.kler-srbobran.rs/auto-centar-smit-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['26', 'DOO TT-BELT TRAKE I TRANSPORTERI SRBOBRAN, Šumadijska 24', 45.552901, 19.785299, 'privrednici','http://www.kler-srbobran.rs/doo-tt-belt-trake-i-transporteri-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['27', 'PAROŠKI PROIZVODNO,USLUŽNO I PROMETNO EXPORT IMPORT,DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU SRBOBRAN, 19 Oktobra 60', 45.555197, 19.803035, 'privrednici','http://www.kler-srbobran.rs/paroski-proizvodnousluzno-i-prometno-export-importdrustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['28', 'PIVNIČKI I SIN DOO ZA PROIZVODNJU, TRGOVINU I USLUGE, SRBOBRAN, Sonje Marinkovic 2/1', 45.545102, 19.793899, 'privrednici','http://www.kler-srbobran.rs/pivnicki-i-sin-doo-za-proizvodnju-trgovinu-i-usluge-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['29', 'PREDUZEĆE ZA PROIZVODNJU I TRGOVINU LIVPRODUKT DOO SRBOBRAN, NovosadskiPut BB', 45.537803, 19.790365, 'privrednici','http://www.kler-srbobran.rs/preduzece-za-proizvodnju-i-trgovinu-livprodukt-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['30', 'AUTOZEYS DOO SRBOBRAN, Karađorđeva 8', 45.546574, 19.790449, 'privrednici','http://www.kler-srbobran.rs/autozeys-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['31', 'E & E ZA PROMET ROBA NA VELIKO I MALO EXPORT IMPORT DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU SRBOBRAN, Mađarska 3', 45.552681, 19.800647, 'privrednici','http://www.kler-srbobran.rs/e-e-za-promet-roba-na-veliko-i-malo-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['32', 'MAGPROMET PROIZVODNO, USLUŽNO I PROMETNO, EXPORT-IMPORT, DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU, SRBOBRAN, 7 Jula 2', 45.553618, 19.800397, 'privrednici','http://www.kler-srbobran.rs/magpromet-proizvodno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['33', 'CIGLANA DOO SRBOBRAN PREDUZEĆE ZA PROIZVODNJU OPEKE SRBOBRAN, Zeleni Venac BB', 45.555900, 19.811580, 'privrednici','http://www.kler-srbobran.rs/magpromet-proizvodno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['34', 'AKCIONARSKO DRUŠTVO VOJVODINA SRBOBRAN, Svetog Save 1', 45.543335, 19.790159, 'privrednici','http://www.kler-srbobran.rs/akcionarsko-drustvo-vojvodina-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['35', 'OPŠTA ZEMLJORADNIČKA ZADRUGA PLOD SRBOBRAN, Miloša Crnjanskog 23', 45.544856, 19.786918, 'privrednici','http://www.kler-srbobran.rs/opsta-zemljoradnicka-zadruga-plod-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['36', 'JAVNO PREDUZEĆE DIREKCIJA ZA URBANIZAM I IZGRADNJU OPŠTINE SRBOBRAN SRBOBRAN, Karađorđeva 1', 45.546496, 19.791993, 'privrednici','http://www.kler-srbobran.rs/javno-preduzece-direkcija-za-urbanizam-i-izgradnju-opstine-srbobran-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['37', 'TRGO-AUTO TRANSPORTNO, USLUŽNO I PROMETNO, EXPORT IMPORT DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU SRBOBRAN,19 Oktobra 18', 45.552821, 19.799946, 'privrednici','http://www.kler-srbobran.rs/trgo-auto-transportno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['38', 'DEMAX ZA PROIZVODNJU, PRUŽANJE USLUGA I PROMET ROBA, EXPORT IMPORT DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU, SRBOBRAN,Jovana Popovića 21', 45.548398, 19.785503, 'privrednici','http://www.kler-srbobran.rs/demax-za-proizvodnju-pruzanje-usluga-i-promet-roba-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['39', 'PREVOZNIČKA ZADRUGA PREVOZ SRBOBRAN, SRBOBRAN,List Ferenca 2', 45.550008, 19.794989, 'privrednici','http://www.kler-srbobran.rs/prevoznicka-zadruga-prevoz-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['40', 'OPŠTA ZEMLJORADNIČKA ZADRUGA ZLATNO ZRNO, SRBOBRAN,Bardova 15', 45.544718, 19.794150, 'privrednici','http://www.kler-srbobran.rs/opsta-zemljoradnicka-zadruga-zlatno-zrno-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['41', 'MICROMA DOO ZA PROIZVODNJU, PRUŽANJE USLUGA I PROMET ROBA, SRBOBRAN, Miloša Obilića 33', 45.548032, 19.791222, 'privrednici','http://www.kler-srbobran.rs/microma-doo-za-proizvodnju-pruzanje-usluga-i-promet-roba-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['42', 'VULKAN COMMERCE PROIZVODNO TRGOVINSKO USLUŽNO I TRANSPORTNO DOO SRBOBRAN, Bartok Bele 17', 45.553508, 19.790740, 'privrednici','http://www.kler-srbobran.rs/vulkan-commerce-proizvodno-trgovinsko-usluzno-i-transportno-d%D0%BE%D0%BE-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['43', 'AGRO-PREVOZ DOO ZA TRANSPORT, TRGOVINU I USLUGE SRBOBRAN, List Ferenca 2', 45.550061, 19.795025, 'privrednici','http://www.kler-srbobran.rs/agro-prevoz-doo-za-transport-trgovinu-i-usluge-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['44', 'RADIO SRBOBRAN DRUŠTVO S OGRANIČENOM ODGOVORNOŠĆU ZA INFORMISANJE SRBOBRAN, List Ferenca 2', 45.549767, 19.795002, 'privrednici','http://www.kler-srbobran.rs/radio-srbobran-drustvo-s-ogranicenom-odgovornoscu-za-informisanje-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['45', 'REMMING DOO ZA REMONT, MONTAŽU I INŽENJERING SRBOBRAN, List Ferenca 2', 45.549784, 19.795026, 'privrednici','http://www.kler-srbobran.rs/remming-doo-za-remont-montazu-i-inzenjering-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['46', '4 X 4 AUTO-CENTAR PREDUZEĆE ZA TRGOVINU I USLUGE DOO, SRBOBRAN, Trg Republike 1/30', 45.543257, 19.790665, 'privrednici','http://www.kler-srbobran.rs/4-x-4-auto-centar-preduzece-za-trgovinu-i-usluge-doo-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['47', 'AK-ŠPED PROIZVODNO, TRANSPORTNO I TRGOVINSKO, EXPORT-IMPORT DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU, SRBOBRAN, Miloša Obilića 1/30', 45.547271, 19.800416, 'privrednici','http://www.kler-srbobran.rs/ak-sped-proizvodno-transportno-i-trgovinsko-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['48', 'JAVNO KOMUNALNO PREDUZEĆE GRADITELJ, SRBOBRAN, Dositeja Obradovića 2', 45.541422, 19.790514, 'privrednici','http://www.kler-srbobran.rs/javno-komunalno-preduzece-graditelj-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['49', 'DOO JAKŠA-DJ ŠKOLA ZA OBRAZOVANJE I OBUKU VOZAČA I USLUŽNE DELATNOSTI, SRBOBRAN, Dobrovoljačka 38', 45.547607, 19.784194, 'privrednici','http://www.kler-srbobran.rs/doo-jaksa-dj-skola-za-obrazovanje-i-obuku-vozaca-i-usluzne-delatnosti-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['50', 'TEHNIKA MB DOO ZA PROIZVODNJU I TRGOVINU SRBOBRAN, Turijski Put BB', 45.538079, 19.800572, 'privrednici','http://www.kler-srbobran.rs/tehnika-mb-doo-za-proizvodnju-i-trgovinu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['51', 'DOO VULKAN GUMA-BELT ZA PROIZVODNJU, UNUTRAŠNJU I SPOLJNU TRGOVINU SRBOBRAN, Vrbaška 16', 45.549864, 19.771790, 'privrednici','http://www.kler-srbobran.rs/doo-vulkan-guma-belt-za-proizvodnju-unutrasnju-i-spoljnu-trgovinu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['52', 'POPOVIĆ  T&S ZA PROIZVODNJU, TRGOVINU NA MALO I VELIKO EKSPORT IMPORT SRBOBRAN, Smederevska 14', 45.540035, 19.779400, 'privrednici','http://www.kler-srbobran.rs/popovic-ts-za-proizvodnju-trgovinu-na-malo-i-veliko-eksport-import-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['53', 'MB PROJEKT ZA PROJEKTOVANJE, NADZOR, GRADNJU, INŽENJERING I PROMET ROBA, EXPORT IMPORT DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU SRBOBRAN, Trg Republike 1', 45.543224, 19.791028, 'privrednici','http://www.kler-srbobran.rs/mb-projekt-za-projektovanje-nadzor-gradnju-inzenjering-i-promet-roba-export-import-drustvo-sa-ogranicenom-odgovornoscu-srbobran/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	  //Preduzetnici Srbobran,
	['54', 'Računarsko programiranje MyLogic Srbobran, Marina Ognjenović PR, Petra Drapšina 132', 45.548016, 19.778405, 'preduzetnici','http://www.kler-srbobran.rs/racunarsko-programiranje-mylogic-srbobran-marina-ognjenovic-pr/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['55', 'HORVAT NORBERT PR , FRIZERSKI SALON L ARTE SRBOBRAN, Karađorđeva 11', 45.546369, 19.789721, 'preduzetnici','http://www.kler-srbobran.rs/horvat-norbert-pr-frizerski-salon-l-arte-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['56', 'MONIKA RAJDA PR TRGOVINSKA RADNJA I PREVOZ TUK SRBOBRAN, Stanoja Glavaša 17', 45.546545, 19.799852, 'preduzetnici','http://www.kler-srbobran.rs/monika-rajda-pr-trgovinska-radnja-i-prevoz-tuk-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['57', 'SZR KAMENOREZAC ROBERT KUPCO PR SRBOBRAN, Vrbaška 1', 45.549578, 19.773063, 'preduzetnici','http://www.kler-srbobran.rs/szr-kamenorezac-robert-kupco-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['58', 'STR MEKIĆ LJUBIŠA MEKIĆ PR, SRBOBRAN, Miloša Crnjanskog 1', 45.544597, 19.789990, 'preduzetnici','http://www.kler-srbobran.rs/str-mekic-ljubisa-mekic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['59', 'HUMANA APOTEKA ZDRAVLJE ARANKA ČOLIĆ PR SRBOBRAN, Svetog Save 25', 45.547688, 19.789483, 'preduzetnici','http://www.kler-srbobran.rs/humana-apoteka-zdravlje-aranka-colic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['60', 'STPR DOŽIĆ SAŠA SAŠA DOŽIĆ PR SRBOBRAN, Smederevska 22', 45.538907, 19.779248, 'preduzetnici','http://www.kler-srbobran.rs/stpr-dosic-sasa-sasa-dosic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['61', 'PROJEKTNI BIRO LINIJA ZOLTAN FAĐAŠ PR SRBOBRAN, Zmaj Jovina 16', 45.543752, 19.791517, 'preduzetnici','http://www.kler-srbobran.rs/projektni-biro-linija-zoltan-fadas-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['62', 'SUR KAFE BAR ARVAJI ARVAJI MIRJANA PR SRBOBRAN, Trg Republike 1 ', 45.543388, 19.790864, 'preduzetnici','http://www.kler-srbobran.rs/sur-kafe-bar-arvaji-arvaji-mirjana-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['63', 'SAMOSTALNA PREVOZNIČKA RADNJA VUJOVIĆ LUKA PREDUZETNIK SRBOBRAN, Sterijina 12  ', 45.547938, 19.786236, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-prevoznicka-radnja-vujovic-luka-preduzetnik-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['64', 'STR DEJANA DEJANA PUŠKIĆ PR , SRBOBRAN, Bigina 9', 45.544991, 19.800865, 'preduzetnici','http://www.kler-srbobran.rs/str-dejana-dejana-puskic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['65', 'SAMOSTALNA USLUŽNA RADNJA S-PRINT SAŠA MIKOVIĆ PR SRBOBRAN, Miloša Obilića 149', 45.546391, 19.810241, 'preduzetnici','http://www.kler-srbobran.rs/str-dejana-dejana-puskic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['66', 'SZTR TERMOGLASS BRANISLAV MUDRINSKI PR SRBOBRAN, Hajduk Veljka 16 ', 45.543419, 19.787442, 'preduzetnici','http://www.kler-srbobran.rs/sztr-termoglass-branislav-mudrinski-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['67', 'AGENCIJA TERMINAL IBOJA PANIĆ PR, SRBOBRAN, Trg republike 1', 45.543189, 19.791012, 'preduzetnici','http://www.kler-srbobran.rs/agencija-terminal-iboja-panic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['68', 'SAMOSTALNA PREVOZNIČKA RADNJA GORAN VUKOVIĆ PR SRBOBRAN, Svetog Save 2', 45.543555, 19.790586, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-prevoznicka-radnja-goran-vukovic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['69', 'SAMOSTALNA PROIZVODNA I TRGOVINSKA RADNJA ZLATNO ZRNO ZLATNE KAPI ZORAN DRAGANIĆ PR SRBOBRAN, Mađarska 2', 45.552809, 19.801794, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-proizvodna-i-trgovinska-radnja-zlatno-zrno-zlatne-kapi-zoran-draganic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['70', 'STR DADA PROMET MILORAD GRAOVAC PR SRBOBRAN, Miloša Obilića 23', 45.547773, 19.790237, 'preduzetnici','http://www.kler-srbobran.rs/str-dada-promet-milorad-graovac-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['71', 'SZR LAK KORAK DAMIR BABIĆ PR SRBOBRAN, Kajmakčalanska 3', 45.550038, 19.773325, 'preduzetnici','http://www.kler-srbobran.rs/szr-lak-korak-damir-babic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['72', 'FRIZERSKI SALON BUDA JASMINA POPOVIĆ PR SRBOBRAN, Trg Slobode 6', 45.544610, 19.791798, 'preduzetnici','http://www.kler-srbobran.rs/frizerski-salon-buda-jasmina-popovic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['73', 'DANIJEL RAFAJLOVIĆ PREDUZETNIK TRGOVINSKO KOMISIONA KROJAČKO STOLARSKA ZANATSKA RADNJA RAF SRBOBRAN, Trg Slobode 6', 45.544667, 19.791817, 'preduzetnici','http://www.kler-srbobran.rs/danijel-rafajlovic-preduzetnik-trgovinsko-komisiona-krojacko-stolarska-zanatska-radnja-raf-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['74', 'SZTR ATINA PLUS ZORAN TOMOVIĆ PR , SRBOBRAN, Novosadska 11', 45.537987, 19.790585, 'preduzetnici','http://www.kler-srbobran.rs/sztr-atina-plus-zoran-tomovic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['75', 'SAMOSTALNA ZANATSKA TRGOVINSKA RADNJA AUTOSERVIS DENIN DUŠAN DENIN PR SRBOBRAN, Devet Jugovića 19 ', 45.550745, 19.786564, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-zanatska-trgovinska-radnja-autoservis-denin-dusan-denin-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['76', 'SAMOSTALNA TRGOVINSKO KOMISIONA RADNJA SUQIN SUQIN WANG PREDUZETNIK, SRBOBRAN, Srbijanska 1', 45.543536, 19.792107, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-trgovinsko-komisiona-radnja-suqin-suqin-wang-preduzetnik-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['77', 'GRAĐEVINSKO TRANSPORTNA RADNJA TATALOVIĆ NIKOLA TATALOVIĆ PR SRBOBRAN, Cara Lazara 2', 45.546812, 19.792583, 'preduzetnici','http://www.kler-srbobran.rs/gradevinsko-transportna-radnja-tatalovic-nikola-tatalovic-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['78', 'SUR BIFE AGORA BASKET MIHAJLOVIĆ DEJAN PREDUZETNIK SRBOBRAN, Trg Republike 2/5', 45.543117, 19.790559, 'preduzetnici','http://www.kler-srbobran.rs/sur-bife-agora-basket-mihajlovic-dejan-preduzetnik-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['79', 'SZTR GOCA JOKIĆ GORDANA PREDUZETNIK SRBOBRAN, Zmaj Jovina 26', 45.546444, 19.792295, 'preduzetnici','http://www.kler-srbobran.rs/sztr-goca-jokic-gordana-preduzetnik-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['80', 'FRIZER ZA ŽENE I MUŠKARCE TANJA HAJDUKOVIĆ TATJANA PREDUZETNIK SRBOBRAN, Cara Lazara 1', 45.547036, 19.792409, 'preduzetnici','http://www.kler-srbobran.rs/frizer-za-zene-i-muskarce-tanja-hajdukovic-tatjana-preduzetnik-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['81', 'USLUŽNA RADNJA MAD STUDIO ĐURA JELOVAC PR SRBOBRAN, Žarka Zrenjanina 86 ', 45.550583, 19.777421, 'preduzetnici','http://www.kler-srbobran.rs/usluzna-radnja-mad-studio-dura-jelovac-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['82', 'MARIJA POPIĆ PR AGENCIJA ZA SEKRETARSKE USLUGE I FOTOGRAFSKA RADNJA FOTO MARI SRBOBRAN, Cara Lazara 14', 45.548489, 19.794051, 'preduzetnici','http://www.kler-srbobran.rs/marija-popic-pr-agencija-za-sekretarske-usluge-i-fotografska-radnja-foto-mari-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['83', 'SAMOSTALNA ZANATSKA RADNJA PEKARA DB BRANKOV MLADEN PR, SRBOBRAN, Karađorđeva 21', 45.546255, 19.788686, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-zanatska-radnja-pekara-db-brankov-mladen-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['84', 'SAMOSTALNA ZANATSKA RADNJA KOLAR HORVAT NANDOR PR SRBOBRAN,Šajkaška 1', 45.555994, 19.804556, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-zanatska-radnja-kolar-horvat-nandor-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['85', 'SZR METALOKOV IZRADA METALNE GALANTERIJE MILETA MUDRINSKI PR SRBOBRAN,Jovana Popovića 45', 45.551542, 19.783884, 'preduzetnici','http://www.kler-srbobran.rs/szr-metalokov-izrada-metalne-galanterije-mileta-mudrinski-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['86', 'SZR KAMEN MERMER TOT ATILA PR, SRBOBRAN,Žarka Zrenjanina 17', 45.552005, 19.786032, 'preduzetnici','http://www.kler-srbobran.rs/szr-kamen-mermer-tot-atila-pr-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['87', 'XIAOYAN WANG PREDUZETNIK, TRGOVINSKA RADNJA XIAOYAN, SRBOBRAN,Svetog Save 1', 45.543348, 19.789988, 'preduzetnici','http://www.kler-srbobran.rs/xiaoyan-wang-preduzetnik-trgovinska-radnja-xiaoyan-srbobran/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	//Udruzenja Srbobran,
	['89', 'Udruženje poljoprivrednika Srbobran - Sentomaš,Trg Slobode 5', 45.544824, 19.790512, 'udruzenja','http://www.kler-srbobran.rs/%D1%83%D0%B4%D1%80%D1%83%D0%B6%D0%B5%D1%9A%D0%B5-%D0%BF%D0%BE%D1%99%D0%BE%D0%BF%D1%80%D0%B8%D0%B2%D1%80%D0%B5%D0%B4%D0%BD%D0%B8%D0%BA%D0%B0-%D1%81%D1%80%D0%B1%D0%BE%D0%B1%D1%80%D0%B0%D0%BD-%D1%81/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['90', 'CENTAR ZA RAZVOJ RURALNOG IDENTITETA SRBOBRANA,	Salaš Beli Jaroš 428', 45.573130, 19.819236, 'udruzenja','http://www.kler-srbobran.rs/%d1%86%d0%b5%d0%bd%d1%82%d0%b0%d1%80-%d0%b7%d0%b0-%d1%80%d0%b0%d0%b7%d0%b2%d0%be%d1%98-%d1%80%d1%83%d1%80%d0%b0%d0%bb%d0%bd%d0%be%d0%b3-%d0%b8%d0%b4%d0%b5%d0%bd%d1%82%d0%b8%d1%82%d0%b5%d1%82%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['91', 'Udruženje građana "Osmeh za starost" Srbobran, Miloša Obilića 120 ', 45.546282, 19.808512, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b3%d1%80%d0%b0%d1%92%d0%b0%d0%bd%d0%b0-%d0%be%d1%81%d0%bc%d0%b5%d1%85-%d0%b7%d0%b0-%d1%81%d1%82%d0%b0%d1%80%d0%be%d1%81%d1%82-%d1%81%d1%80/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['92', 'Srbobranska inicijativa mladih, Svetog Save 19/1', 45.546877, 19.789509, 'udruzenja','http://www.kler-srbobran.rs/%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd%d1%81%d0%ba%d0%b0-%d0%b8%d0%bd%d0%b8%d1%86%d0%b8%d1%98%d0%b0%d1%82%d0%b8%d0%b2%d0%b0-%d0%bc%d0%bb%d0%b0%d0%b4%d0%b8%d1%85/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['93', 'Udruženje "BAČKI VOĆARI I VINOGRADARI" Srbobran, Trg Slobode 1', 45.544577, 19.791405, 'udruzenja','http://www.kler-srbobran.rs/%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd%d1%81%d0%ba%d0%b0-%d0%b8%d0%bd%d0%b8%d1%86%d0%b8%d1%98%d0%b0%d1%82%d0%b8%d0%b2%d0%b0-%d0%bc%d0%bb%d0%b0%d0%b4%d0%b8%d1%85/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['94', 'SRBOBRANSKA TRAKTORIJADA, Karađorđeva 1', 45.546398, 19.791653, 'udruzenja','http://www.kler-srbobran.rs/%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd%d1%81%d0%ba%d0%b0-%d0%b8%d0%bd%d0%b8%d1%86%d0%b8%d1%98%d0%b0%d1%82%d0%b8%d0%b2%d0%b0-%d0%bc%d0%bb%d0%b0%d0%b4%d0%b8%d1%85/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['95', 'DRUŠTVO ZA BORBU PROTIV ŠEĆERNE BOLESTI OPŠTINE SRBOBRAN,Trg Slobode 2', 45.544537, 19.791270, 'udruzenja','http://www.kler-srbobran.rs/%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d0%b7%d0%b0-%d0%b1%d0%be%d1%80%d0%b1%d1%83-%d0%bf%d1%80%d0%be%d1%82%d0%b8%d0%b2-%d1%88%d0%b5%d1%9b%d0%b5%d1%80%d0%bd%d0%b5-%d0%b1%d0%be%d0%bb%d0%b5%d1%81/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['96', 'Udruženje "U KORAK SA SVETOM" SRBOBRAN,Jovana Popovića 2', 45.545255, 19.786958, 'udruzenja','http://www.kler-srbobran.rs/%d1%83-%d0%ba%d0%be%d1%80%d0%b0%d0%ba-%d1%81%d0%b0-%d1%81%d0%b2%d0%b5%d1%82%d0%be%d0%bc-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['97', 'LENKA SRBOBRAN,Dobrovoljačka 24', 45.548286, 19.787024, 'udruzenja','http://www.kler-srbobran.rs/%d0%bb%d0%b5%d0%bd%d0%ba%d0%b0-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['98', 'Srpski ratni veterani Srbobran, Adi Endrea 10b', 45.550348, 19.803165, 'udruzenja','http://www.kler-srbobran.rs/%D1%81%D1%80%D0%BF%D1%81%D0%BA%D0%B8-%D1%80%D0%B0%D1%82%D0%BD%D0%B8-%D0%B2%D0%B5%D1%82%D0%B5%D1%80%D0%B0%D0%BD%D0%B8-%D1%81%D1%80%D0%B1%D0%BE%D0%B1%D1%80%D0%B0%D0%BD/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['99', 'SRBOBRANSKI CENTAR MLADIH, Devet Jugovica 6/1', 45.551226, 19.787550, 'udruzenja','http://www.kler-srbobran.rs/%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd%d1%81%d0%ba%d0%b8-%d1%86%d0%b5%d0%bd%d1%82%d0%b0%d1%80-%d0%bc%d0%bb%d0%b0%d0%b4%d0%b8%d1%85/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['100','Udruženje građana "DOBRO SRCE" opštine Srbobran, Trg prof. Milivoja Tutorova bb', 45.542855, 19.789505, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b3%d1%80%d0%b0%d1%92%d0%b0%d0%bd%d0%b0-%d0%b4%d0%be%d0%b1%d1%80%d0%be-%d1%81%d1%80%d1%86%d0%b5-%d0%be%d0%bf%d1%88%d1%82%d0%b8%d0%bd%d0%b5/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['101','Udruženje Roma "8. April", Pap Pavla 5', 45.549735, 19.800485, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d1%80%d0%be%d0%bc%d0%b0-8-%d0%b0%d0%bf%d1%80%d0%b8%d0%bb-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['102','EKOLOŠKI POKRET OPŠTINE SRBOBRAN, Save Kovačevića 16', 45.547274, 19.772235, 'udruzenja','http://www.kler-srbobran.rs/%d0%b5%d0%ba%d0%be%d0%bb%d0%be%d1%88%d0%ba%d0%b8-%d0%bf%d0%be%d0%ba%d1%80%d0%b5%d1%82-%d0%be%d0%bf%d1%88%d1%82%d0%b8%d0%bd%d0%b5-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['103','Udruženje za zaštitu i odgoj sitnih životinja "Hobi 77",Srbobran, Skopljanska 4', 45.547566, 19.807410, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%b7%d0%b0%d1%88%d1%82%d0%b8%d1%82%d1%83-%d0%b8-%d0%be%d0%b4%d0%b3%d0%be%d1%98-%d1%81%d0%b8%d1%82%d0%bd%d0%b8%d1%85-%d0%b6%d0%b8%d0%b2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['104','MAĐARSKO KULTURNO - UMETNIČKO DRUŠTVO "ARANJ JANOŠ" SRBOBRAN, Popovača Venac 30', 45.555382, 19.796906, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%b7%d0%b0%d1%88%d1%82%d0%b8%d1%82%d1%83-%d0%b8-%d0%be%d0%b4%d0%b3%d0%be%d1%98-%d1%81%d0%b8%d1%82%d0%bd%d0%b8%d1%85-%d0%b6%d0%b8%d0%b2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['105','KULTURNI CENTAR "GION NANDOR" SRBOBRAN, Popovača Venac 30', 45.555476, 19.796919, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%b7%d0%b0%d1%88%d1%82%d0%b8%d1%82%d1%83-%d0%b8-%d0%be%d0%b4%d0%b3%d0%be%d1%98-%d1%81%d0%b8%d1%82%d0%bd%d0%b8%d1%85-%d0%b6%d0%b8%d0%b2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['106','Udruženje građana Klub "NOTA I VEZ" Srbobran, Cara Lazara 6', 45.547378, 19.793267, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b3%d1%80%d0%b0%d1%92%d0%b0%d0%bd%d0%b0-%d0%ba%d0%bb%d1%83%d0%b1-%d0%bd%d0%be%d1%82%d0%b0-%d0%b8-%d0%b2%d0%b5%d0%b7%d1%81%d1%80%d0%b1%d0%be/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['107','Crveni krst Srbije - Creveni krst Vojvodine - Crveni krst Srbobrana, Svetog Save 15', 45.546087, 19.789819, 'udruzenja','http://www.kler-srbobran.rs/%d1%86%d1%80%d0%b2%d0%b5%d0%bd%d0%b8-%d0%ba%d1%80%d1%81%d1%82-%d1%81%d1%80%d0%b1%d0%b8%d1%98%d0%b5-%d1%86%d1%80%d0%b5%d0%b2%d0%b5%d0%bd%d0%b8-%d0%ba%d1%80%d1%81%d1%82-%d0%b2%d0%be%d1%98%d0%b2%d0%be/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['108','CENTAR ZA LJUDSKA PRAVA - SRBOBRAN,Zeleni Venac 7/3 ', 45.557006, 19.808202, 'udruzenja','http://www.kler-srbobran.rs/%d1%86%d0%b5%d0%bd%d1%82%d0%b0%d1%80-%d0%b7%d0%b0-%d1%99%d1%83%d0%b4%d1%81%d0%ba%d0%b0-%d0%bf%d1%80%d0%b0%d0%b2%d0%b0-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['109','Udruženje "Kancelarija za inkluziju Roma Srbobran",Svetog Save 15', 45.545867, 19.789836, 'udruzenja','http://www.kler-srbobran.rs/%d1%86%d0%b5%d0%bd%d1%82%d0%b0%d1%80-%d0%b7%d0%b0-%d1%99%d1%83%d0%b4%d1%81%d0%ba%d0%b0-%d0%bf%d1%80%d0%b0%d0%b2%d0%b0-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['110','DOBROVOLJNO VATROGASNO DRUŠTVO SRBOBRAN,Miloša Obilića 19', 45.547618, 19.789097, 'udruzenja','http://www.kler-srbobran.rs/%d0%b4%d0%be%d0%b1%d1%80%d0%be%d0%b2%d0%be%d1%99%d0%bd%d0%be-%d0%b2%d0%b0%d1%82%d1%80%d0%be%d0%b3%d0%b0%d1%81%d0%bd%d0%be-%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d1%81%d1%80%d0%b1%d0%be%d0%b1/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['111','KINOLOŠKO DRUŠTVO "SRBOBRAN", Mađarska 20', 45.552585, 19.800994, 'udruzenja','http://www.kler-srbobran.rs/%d0%ba%d0%b8%d0%bd%d0%be%d0%bb%d0%be%d1%88%d0%ba%d0%be-%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['112','AUTO MOTO KLUB "PETAR DRAPŠIN"-SRBOBRAN, Đure Jakšića 2', 45.545893, 19.789633, 'udruzenja','http://www.kler-srbobran.rs/%d0%b0%d1%83%d1%82%d0%be-%d0%bc%d0%be%d1%82%d0%be-%d0%ba%d0%bb%d1%83%d0%b1-%d0%bf%d0%b5%d1%82%d0%b0%d1%80-%d0%b4%d1%80%d0%b0%d0%bf%d1%88%d0%b8%d0%bd-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['113','Udruženje likovnih umetnika "ART" Srbobran, Zmaj Jovina 11', 45.544019, 19.791509, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%bb%d0%b8%d0%ba%d0%be%d0%b2%d0%bd%d0%b8%d1%85-%d1%83%d0%bc%d0%b5%d1%82%d0%bd%d0%b8%d0%ba%d0%b0-%d0%b0%d1%80%d1%82-%d1%81%d1%80%d0%b1%d0%be%d0%b1/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['114','Klub za negovanje tradicije i običaja svih naroda i narodnosti Vojvodine, 19 Oktobra 68', 45.556097, 19.804244, 'udruzenja','http://www.kler-srbobran.rs/%d0%ba%d0%bb%d1%83%d0%b1-%d0%b7%d0%b0-%d0%bd%d0%b5%d0%b3%d0%be%d0%b2%d0%b0%d1%9a%d0%b5-%d1%82%d1%80%d0%b0%d0%b4%d0%b8%d1%86%d0%b8%d1%98%d0%b5-%d0%b8-%d0%be%d0%b1%d0%b8%d1%87%d0%b0%d1%98%d0%b0-%d1%81/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['115','Udruženje hranitelja "Lepši snovi", opštine Srbobran, Hajduk Veljka 85', 45.545958, 19.780035, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d1%85%d1%80%d0%b0%d0%bd%d0%b8%d1%82%d0%b5%d1%99%d0%b0-%d0%bb%d0%b5%d0%bf%d1%88%d0%b8-%d1%81%d0%bd%d0%be%d0%b2%d0%b8-%d0%be%d0%bf%d1%88%d1%82/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['116','SAVEZ UDRUŽENJA BORACA NARODNOOSLOBODILAČKOG RATA OPŠTINE SRBOBRAN, Trg Republike 4', 45.543093, 19.790836, 'udruzenja','http://www.kler-srbobran.rs/%d1%81%d0%b0%d0%b2%d0%b5%d0%b7-%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b0-%d0%b1%d0%be%d1%80%d0%b0%d1%86%d0%b0-%d0%bd%d0%b0%d1%80%d0%be%d0%b4%d0%bd%d0%be%d0%be%d1%81%d0%bb%d0%be%d0%b1%d0%be/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['117','Lovačko udruženje "Fazan Srbobran", Karađorđeva 5', 45.546714, 19.790730, 'udruzenja','http://www.kler-srbobran.rs/%d1%81%d0%b0%d0%b2%d0%b5%d0%b7-%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b0-%d0%b1%d0%be%d1%80%d0%b0%d1%86%d0%b0-%d0%bd%d0%b0%d1%80%d0%be%d0%b4%d0%bd%d0%be%d0%be%d1%81%d0%bb%d0%be%d0%b1%d0%be/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['118','UDRUŽENJE RATNIH VOJNIH INVALIDA OPŠTINE SRBOBRAN, Branka Radičevića 53', 45.560728, 19.799978, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d1%80%d0%b0%d1%82%d0%bd%d0%b8%d1%85-%d0%b2%d0%be%d1%98%d0%bd%d0%b8%d1%85-%d0%b8%d0%bd%d0%b2%d0%b0%d0%bb%d0%b8%d0%b4%d0%b0-%d0%be%d0%bf%d1%88%d1%82/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['119','Opštinsko udruženje penzionera Srbobran, Miloša Obilića 22', 45.547363, 19.789461, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d1%80%d0%b0%d1%82%d0%bd%d0%b8%d1%85-%d0%b2%d0%be%d1%98%d0%bd%d0%b8%d1%85-%d0%b8%d0%bd%d0%b2%d0%b0%d0%bb%d0%b8%d0%b4%d0%b0-%d0%be%d0%bf%d1%88%d1%82/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['120','Udruženje građana "Rom" Srbobran, Niška 25', 45.551740, 19.775766, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b3%d1%80%d0%b0%d1%92%d0%b0%d0%bd%d0%b0-%d1%80%d0%be%d0%bc-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['121','Udruženje za pomoć mentalno nedovoljno razvijenim osobama "Biser" opštine Srbobran, Hajduk Veljka 85',45.546001, 19.779987, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%bf%d0%be%d0%bc%d0%be%d1%9b-%d0%bc%d0%b5%d0%bd%d1%82%d0%b0%d0%bb%d0%bd%d0%be-%d0%bd%d0%b5%d0%b4%d0%be%d0%b2%d0%be%d1%99%d0%bd%d0%be/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['122','Internet klub opštine Srbobran - FreeNet, Trg Slobode 2',45.544530, 19.791267, 'udruzenja','http://www.kler-srbobran.rs/%d0%b8%d0%bd%d1%82%d0%b5%d1%80%d0%bd%d0%b5%d1%82-%d0%ba%d0%bb%d1%83%d0%b1-%d0%be%d0%bf%d1%88%d1%82%d0%b8%d0%bd%d0%b5-%d1%81%d1%80%d0%b1%d0%be%d0%b1%d1%80%d0%b0%d0%bd-freenet/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	
	 
	];   
	
 
/**
 * Function to init map
 */

function initialize() {
    var center = new google.maps.LatLng(45.543486, 19.791712);
    var mapOptions = {
        zoom: 14,
        center: center,
        mapTypeId: google.maps.MapTypeId.MAP,
		mapTypeControl:false
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    for (i = 0; i < markers1.length; i++) {
        addMarker(markers1[i]);
    }

}

/**
 * Function to add marker to map
 */

function addMarker(marker) {
    var category = marker[4];
	 
    var title = marker[1];
    var pos = new google.maps.LatLng(marker[2], marker[3]);
    var content = marker[1];
	//var image=marker[5];
	 var url=marker[5];
	 var icon=marker[6];
	console.log("Ovo je url "+url);
    marker1 = new google.maps.Marker({
        title: title,
        position: pos,
        category: category,
        map: map,
        animation: google.maps.Animation.DROP,
		url:url,
		icon:icon
    });

    gmarkers1.push(marker1);

    // Marker click listener
    google.maps.event.addListener(marker1, 'click', (function (marker1, url) {
        return function () {
            console.log('Gmarker 1 gets pushed');
            infowindow.setContent(
			'<p class="kocka"><a href="'+this.url+'">'+ content+'</a></p>'
			);
		 
            infowindow.open(map, marker1);
            map.panTo(this.getPosition());
             map.setZoom(20);
        }
		
    })(marker1, content));
}

/**
 * Function to filter markers by category
 */

filterMarkers = function (category) {
    for (i = 0; i < markers1.length; i++) {
        marker = gmarkers1[i];
        // If is same category or category not picked
        if (marker.category == category || category.length === 0) {
            marker.setVisible(true);
         map.setZoom(14);
        }
        // Categories don't match
        else {
            marker.setVisible(false);
        }
    }
}

// Init map
initialize();
 
</script>
<blockquote class="blockquote">
		  <p class="col-sm-12">
			Sa padajućeg menija izaberite <em>privrednike,</em><em>preduzetnike,</em>
			ili <em>udruženja</em>. Klikom na  marker odabrana lokacija
			se zumira a klikom na naslov zumiranog markera bićete prebačeni na stranicu
			sa detaljnim podacima firme iz APR-a.</br>
			<ul style="list-style-type: none;">
			<li>
			<strong style="color:black;">Privrednici</strong>&nbsp&nbsp&nbsp&nbsp
			<img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png"/>
			</li>
			<li>
			<strong style="color:black;">Preduzetnici</strong>&nbsp
			<img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png"/>
			</li>
			<li>
			<strong style="color:black;">Udruženja</strong>&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"/>
			</li>
			</ul>	
		  </p>
		</blockquote>

		</main>
		<!--SIDEBAR-->
		<aside class="col-sm-4 sidebar-style">
		<?php get_sidebar();?>
		</aside>
	</div><!-- #primary -->
	</section><!-- #mapa -->
	</div> <!-- .container -->
	
<?php
 
get_footer();
