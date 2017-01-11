<?php
/*
  Template Name:Nadaljska Mapa
 */

get_header(); ?>
 <script src="http://maps.google.com/maps/api/js?key=AIzaSyDEZ5RlhXnEkXC3G34ZTb_lOVjVOXQuFkA&callback=initMap"
 type="text/javascript"></script>

	<div class="container">
		<div class="row">
		<div class="col-sm-offset-2 col-sm-4">
			<h2 class="text-center page-title">Poslovna mapa Nadalj</h2>
			
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
    //Privrednici Nadalj,

	['0', 'PREDUZEĆE ZA PROIZVODNJU, TRGOVINU I USLUGE PANNON PIG DOO NADALJ,Svetog Save 19 Nadalj', 45.507956, 19.921700, 'privrednici','http://www.kler-srbobran.rs/preduzece-za-proizvodnju-trgovinu-i-usluge-pannon-pig-doo-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['1', 'OPŠTA ZEMLJORADNIČKA ZADRUGA NADALJ NADALJ,Svetog Save 31 Nadalj', 45.505760, 19.922419, 'privrednici','http://www.kler-srbobran.rs/opsta-zemljoradnicka-zadruga-nadalj-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['2', 'AGRO GRUJIĆ DOO NADALJ,Petra Drapšina 13 ', 45.505760, 19.922419, 'privrednici','http://www.kler-srbobran.rs/grmec-kondic-proizvodno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['3', 'GRMEČ-KONDIĆ DOO NADALJ,Braće Jockov bb', 45.503636, 19.924251, 'privrednici','http://www.kler-srbobran.rs/grmec-kondic-proizvodno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['4', 'ZEMLJORADNIČKA ZADRUGA DEBELJAČKI NADALJ,Zemljoradnička 3b', 45.510914, 19.929854, 'privrednici','http://www.kler-srbobran.rs/zemljoradnicka-zadruga-debeljacki-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['5', 'DOO AGRO JOCA NADALJ,Zemljoradnička 3b', 45.511087, 19.929746, 'privrednici','http://www.kler-srbobran.rs/grmec-kondic-proizvodno-usluzno-i-prometno-export-import-drustvo-sa-ogranicenom-odgovornoscu-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['6', 'DAVUNA INVEST DOO NADALJ, Petra Drapšina 72', 45.506396, 19.918773, 'privrednici','http://www.kler-srbobran.rs/davuna-invest-doo-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['7', 'AGROMAUS DOO, NADALJ, Braće Pantić 46',45.504806, 19.924259, 'privrednici','http://www.kler-srbobran.rs/davuna-invest-doo-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['8', 'ПРЕРАДОВ ШПЕД ДОО, NADALJ, Salaš 79', 45.506748, 19.921925, 'privrednici','http://www.kler-srbobran.rs/%d0%bf%d1%80%d0%b5%d1%80%d0%b0%d0%b4%d0%be%d0%b2-%d1%88%d0%bf%d0%b5%d0%b4-%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d1%81%d0%b0-%d0%be%d0%b3%d1%80%d0%b0%d0%bd%d0%b8%d1%87%d0%b5%d0%bd%d0%be%d0%bc/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['9', 'NB-SOJA-GOLD DOO NADALJ, NADALJ, Svetog Save 19', 45.510211, 19.921511, 'privrednici','http://www.kler-srbobran.rs/nb-soja-gold-doo-nadalj/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	

 //Preduzetnici Nadalj
	['10', 'BRANISLAV JOVANOVIĆ PR MAGRIQOS KOD RAŠE NADALJ,Svetog Save 36', 45.508001, 19.921751, 'preduzetnici','http://www.kler-srbobran.rs/branislav-jovanovic-pr-ugostiteljska-radnja-magriqos-kod-rase-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['11', 'ANKA ILIJIN PR RADNJA ZA GRAĐEVINSKE RADOVE ID GRADNJA NADALJ, Zemljoradnička 24',45.511302, 19.923797, 'preduzetnici','http://www.kler-srbobran.rs/branislav-jovanovic-pr-ugostiteljska-radnja-magriqos-kod-rase-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['12', 'VITOMIR ŠUĆOV PREDUZETNIK GRAĐEVINSKA RADNJA IMGE NADALJ, Braće Pantić 13',45.505423, 19.929166, 'preduzetnici','http://www.kler-srbobran.rs/%d0%b2%d0%b8%d1%82%d0%be%d0%bc%d0%b8%d1%80-%d1%88%d1%83%d1%9b%d0%be%d0%b2-%d0%bf%d1%80%d0%b5%d0%b4%d1%83%d0%b7%d0%b5%d1%82%d0%bd%d0%b8%d0%ba-%d0%b3%d1%80%d0%b0%d1%92%d0%b5%d0%b2%d0%b8%d0%bd%d1%81/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['13', 'SVETLANA MAKARIĆ PR AGENCIJA ZA KNJIGOVODSTVENE POSLOVE NADALJ, Petra Drapšina 70',45.506921, 19.924712, 'preduzetnici','http://www.kler-srbobran.rs/%d1%81%d0%b2%d0%b5%d1%82%d0%bb%d0%b0%d0%bd%d0%b0-%d0%bc%d0%b0%d0%ba%d0%b0%d1%80%d0%b8%d1%9b-%d0%bf%d1%80-%d0%b0%d0%b3%d0%b5%d0%bd%d1%86%d0%b8%d1%98%d0%b0-%d0%b7%d0%b0-%d0%ba%d1%9a%d0%b8%d0%b3%d0%be/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['14', 'GORDANA PRERADOV PR UGOSTITELJSKA I AUTOPREVOZNIČKA RADNJA MELBURN-MKN NADALJ, Svetog Save 41',45.510884, 19.929843, 'preduzetnici','http://www.kler-srbobran.rs/%d1%81%d0%b2%d0%b5%d1%82%d0%bb%d0%b0%d0%bd%d0%b0-%d0%bc%d0%b0%d0%ba%d0%b0%d1%80%d0%b8%d1%9b-%d0%bf%d1%80-%d0%b0%d0%b3%d0%b5%d0%bd%d1%86%d0%b8%d1%98%d0%b0-%d0%b7%d0%b0-%d0%ba%d1%9a%d0%b8%d0%b3%d0%be/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['15', 'SVETLANA ĐORĐIN PR UGOSTITELJSKA RADNJA DANA D&Đ NADALJ, Svetog Save 43',45.511441, 19.930250, 'preduzetnici','http://www.kler-srbobran.rs/%d1%81%d0%b2%d0%b5%d1%82%d0%bb%d0%b0%d0%bd%d0%b0-%d1%92%d0%be%d1%80%d1%92%d0%b8%d0%bd-%d0%bf%d1%80-%d1%83%d0%b3%d0%be%d1%81%d1%82%d0%b8%d1%82%d0%b5%d1%99%d1%81%d0%ba%d0%b0-%d1%80%d0%b0%d0%b4%d1%9a/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['16', 'STRAHINJA JOKIĆ PR UGOSTITELJSKA RADNJA VELIKA KAFANA NADALJ, Svetog Save 31',45.505265, 19.922005, 'preduzetnici','http://www.kler-srbobran.rs/strahinja-jokic-pr-ugostiteljska-radnja-velika-kafana-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['17', 'NEBOJŠA NEDELJKOVIĆ PR AGENCIJA ZA KONSALTING CONSULTING-FEED NADALJ, Svetog Save 39',45.506159, 19.921715, 'preduzetnici','http://www.kler-srbobran.rs/nebojsa-nedeljkovic-pr-agencija-za-konsalting-consulting-feed-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['18', 'DRAGANA GRUJIĆ PR KNJIGOVODSTVENA AGENCIJA ANĐELA DG NADALJ, Branka Radičevića 6/V ',45.511716, 19.924886, 'preduzetnici','http://www.kler-srbobran.rs/dragana-grujic-pr-knjigovodstvena-agencija-andela-dg-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['19', 'ALEKSANDRA STAMENKOVIĆ PR TRGOVINSKA RADNJA PODRUM PIĆA OSMANAC MS TIM NADALJ,Braće Mazić 4A',45.511306, 19.913701, 'preduzetnici','http://www.kler-srbobran.rs/aleksandra-stamenkovic-pr-trgovinska-radnja-podrum-pica-osmanac-ms-tim-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['20', 'DUNJA VOJNOVIĆ PR TRGOVINSKA RADNJA HAD 021 NADALJ, Braće Jockov 9',45.511142, 19.930242, 'preduzetnici','http://www.kler-srbobran.rs/%d0%b4%d1%83%d1%9a%d0%b0-%d0%b2%d0%be%d1%98%d0%bd%d0%be%d0%b2%d0%b8%d1%9b-%d0%bf%d1%80-%d1%82%d1%80%d0%b3%d0%be%d0%b2%d0%b8%d0%bd%d1%81%d0%ba%d0%b0-%d1%80%d0%b0%d0%b4%d1%9a%d0%b0-%d1%85%d0%b0%d0%b4-02/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['21', 'NEBOJŠA RAKIĆ PR ZANATSKA RADNJA ĐERAM KOP NN NADALJ, Braće Jockov 6',45.503034, 19.916647, 'preduzetnici','http://www.kler-srbobran.rs/nebojsa-rakic-pr-zanatska-radnja-deram-kop-nn-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['22', 'ALEKSANDAR ŠUĆOV PR ZIDARSKA RADNJA ACA GRAD PLUS NADALJ, Braće Jockov 6',45.503034, 19.916647, 'preduzetnici','http://www.kler-srbobran.rs/nebojsa-rakic-pr-zanatska-radnja-deram-kop-nn-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['23', 'SAŠA ŠUĆOV PR ZANATSKA RADNJA SLAJ WOOD NADALJ,Braće Mazić 25/1',45.507503, 19.914161, 'preduzetnici','http://www.kler-srbobran.rs/sasa-sucov-pr-zanatska-radnja-slaj-wood-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['24', 'PREDRAG KONDIĆ PR PEKARA KONDIĆ,Braće Jockov 135 ',45.504013, 19.930643, 'preduzetnici','http://www.kler-srbobran.rs/predrag-kondic-pr-samostalna-zanatska-radnja-pekara-kondic-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['25', 'STANISLAV SEKERUŠ PR SAMOSTALNA ZANATSKA RADNJA PINOKIO NADALJ, Branka Radičevića 8a',45.512104, 19.924801, 'preduzetnici','http://www.kler-srbobran.rs/stanislav-sekerus-pr-samostalna-zanatska-radnja-pinokio-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['26', 'DARKO LAZIĆ PR, SAMOSTALNA UGOSTITELJSKA RADNJA CHILL OUT CAFFE NADALJ, Svetog Save 31',45.508596, 19.921658, 'preduzetnici','http://www.kler-srbobran.rs/darko-lazic-pr-samostalna-ugostiteljska-radnja-chill-out-caffe-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['27', 'RADOMIR VIDAKOVIĆ PREDUZETNIK, SAMOSTALNA ZANATSKA RADNJA AGRO GRADNJA NADALJ, Partizanska 45',45.509301, 19.932882, 'preduzetnici','http://www.kler-srbobran.rs/radomir-vidakovic-preduzetnik-samostalna-zanatska-radnja-agro-gradnja-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['28', 'GORAN MARKOVIĆ PREDUZETNIK, AUTOPREVOZNIK, NADALJ, Braće Jockov 101',45.504570, 19.932660, 'preduzetnici','http://www.kler-srbobran.rs/goran-markovic-preduzetnik-autoprevoznik-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['29', 'TOMISLAV PRERADOV PR, ZANATSKA TRGOVINSKO PREVOZNIČKA RADNJA PRERADOV ŠPED NADALJ, Salaš 79',45.505364, 19.922209, 'preduzetnici','http://www.kler-srbobran.rs/goran-markovic-preduzetnik-autoprevoznik-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['30', 'SIMA SAVIN PR, AUTOPREVOZNIK SAVIN NADALJ, Braće Pantić 1',45.510839, 19.930118, 'preduzetnici','http://www.kler-srbobran.rs/sima-savin-pr-autoprevoznik-savin-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['31', 'VITOMIR MILJEVIĆ PR, PROIZVODNJA METALNE KONSTRUKCIJE METAL-MONT NADALJ, Petra Drapšina 10',45.510876, 19.929839, 'preduzetnici','http://www.kler-srbobran.rs/vitomir-miljevic-pr-proizvodnja-metalne-konstrukcije-metal-mont-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['32', 'NOVAK MARTINOVIĆ PR GRAĐEVINSKI RADOVI PERFECT NADALJ, Braće Mazić 33',45.505700, 19.914558, 'preduzetnici','http://www.kler-srbobran.rs/novak-martinovic-pr-gradevinski-radovi-perfect-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['33', 'SZR MARCONI JASMINA MARKOVIĆ PR NADALJ, Braće Jockov 121',45.503181, 19.917916, 'preduzetnici','http://www.kler-srbobran.rs/szr-marconi-jasmina-markovic-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['34', 'SZR GRADEX SLAVOLJUB ČOLIĆ PR, NADALJ, Petra Drapšina 54',45.506659, 19.922777, 'preduzetnici','http://www.kler-srbobran.rs/szr-gradex-slavoljub-colic-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['35', 'SZR BRAĆA DRAGAN NOJIĆ PR NADALJ, Braće Jockov 131',45.503189, 19.915577, 'preduzetnici','http://www.kler-srbobran.rs/szr-braca-dragan-nojic-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['36', 'SZR IZRADA I UGRADNJA ALU I PVC STOLARIJE AL-KNEŽEVIĆ KNEŽEVIĆ DRAGUTIN PREDUZETNIK NADALJ, Zemljoradnička 16A',45.511515, 19.928648, 'preduzetnici','http://www.kler-srbobran.rs/szr-izrada-i-ugradnja-alu-i-pvc-stolarije-al-knezevic-knezevic-dragutin-preduzetnik-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['37', 'ĐURĐINKA NAUMOV PREDUZETNIK RADNJA ZA PROIZVODNJU GAŠENOG KREČA I GRAĐEVINSKE RADOVE BANIS NADALJ, Petra Drapšina 72',45.506437, 19.919228, 'preduzetnici','http://www.kler-srbobran.rs/durdinka-naumov-preduzetnik-radnja-za-proizvodnju-gasenog-kreca-i-gradevinske-radove-banis-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['38', 'SAMOSTALNA TRGOVINSKA RADNJA AGROPLAN JELENA RAJIĆ PREDUZETNIK NADALJ, Dr Lazara Rakića 32/1',45.509177, 19.926792, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-trgovinska-radnja-agroplan-jelena-rajic-preduzetnik-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['39', 'AUTOPREVOZ POŠTIĆ POŠTIĆ PERO PR NADALJ, Petra Drapšina 80',45.506323, 19.919232, 'preduzetnici','http://www.kler-srbobran.rs/autoprevoz-postic-postic-pero-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['40', 'SZR VODOMONT STEPANOVIĆ PETAR PR NADALJ, Partizanska 21',45.508084, 19.933140, 'preduzetnici','http://www.kler-srbobran.rs/szr-vodomont-stepanovic-petar-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['41', 'AUTOPREVOZNIK PURAĆ COMPANY DUŠAN PURAĆ PR NADALJ, Partizanska 21',45.508084, 19.933140, 'preduzetnici','http://www.kler-srbobran.rs/autoprevoznik-purac-company-dusan-purac-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['42', 'SUR LIPOV HLAD SLAĐANA POLUGA PR NADALJ, Dr Lazara Rakića bb',45.510766, 19.932650, 'preduzetnici','http://www.kler-srbobran.rs/sur-lipov-hlad-sladana-poluga-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['43', 'SZR ZOLIKA ZOTAN POŽONJI PR NADALJ, Partizanska 3 ',45.508932, 19.925144, 'preduzetnici','http://www.kler-srbobran.rs/sur-lipov-hlad-sladana-poluga-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['44', 'SAMOSTALNA ZANATSKA RADNJA VIRAG ILIJA VIRAG PR, NADALJ, Braće Mazić 34',45.508932, 19.925144, 'preduzetnici','http://www.kler-srbobran.rs/sur-lipov-hlad-sladana-poluga-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['45', 'SZR DEKOR BORIVOJE RIBIČIĆ PR, NADALJ, Omladinska 18',45.507932, 19.925748, 'preduzetnici','http://www.kler-srbobran.rs/szr-dekor-borivoje-ribicic-pr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['46', 'STR MICA OLGA KRSTIĆ PREDUZETNIK, NADALJ, Dr. Lazara Rakića 12',45.508969, 19.924052, 'preduzetnici','http://www.kler-srbobran.rs/str-mica-olga-krstic-preduzetnik-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['47', 'AUTOPREVOZNIK ĆURČIĆ IVAN ĆURČIĆ PR NADALJ,  Svetog Save 53',45.505289, 19.922121, 'preduzetnici','http://www.kler-srbobran.rs/autoprevoznik-curcic-ivan-curcic-pr-nadalj-2/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['48', 'ZORICA MILINOVIĆ PREDUZETNIK TRGOVINSKA RADNJA ZORA NADALJ,  Svetog Save 46',45.506364, 19.921929, 'preduzetnici','http://www.kler-srbobran.rs/zorica-milinovic-preduzetnik-trgovinska-radnja-zora-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['49', 'TAXI DELTA JOVICA POPOV PR DR. NADALJ, DR.Lazara Rakića 43 NS 153-057',45.509544, 19.928131, 'preduzetnici','http://www.kler-srbobran.rs/taxi-delta-jovica-popov-pr-dr-nadalj/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
 

	//Udruzenja Nadalj, 

	['50', 'Lovačko udruženje "Nadalj", Dr Lazara Rakića 23', 45.509111, 19.923539, 'udruzenja','http://www.kler-srbobran.rs/%d0%bb%d0%be%d0%b2%d0%b0%d1%87%d0%ba%d0%be-%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%bd%d0%b0%d0%b4%d0%b0%d1%99/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['51', 'Udruženje za zaštitu prava životinja "BAK" Srbobran, Nadalj Braće Pantić 68', 45.504891, 19.923401, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%b7%d0%b0%d1%88%d1%82%d0%b8%d1%82%d1%83-%d0%bf%d1%80%d0%b0%d0%b2%d0%b0-%d0%b6%d0%b8%d0%b2%d0%be%d1%82%d0%b8%d1%9a%d0%b0-%d0%b1%d0%b0-2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['52', 'UDRUŽENJE "SVETLOST" NADALJ, Svetog Save 33', 45.504806, 19.925707, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%bd%d0%b0%d1%88%d0%b5-%d1%81%d0%b5%d0%bb%d0%be-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['53', 'Udruženje "Vredne Bačvanke" Nadalj, Branka Radičevića 3', 45.508207, 19.925881, 'udruzenja','http://www.kler-srbobran.rs/%d0%ba%d0%b8%d0%bd%d0%be%d0%bb%d0%be%d1%88%d0%ba%d0%be-%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	 
	 
	];   
	
 
 
/**
 * Function to init map
 */

function initialize() {
    var center = new google.maps.LatLng(45.508009, 19.922828);
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
