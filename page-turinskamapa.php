<?php
/*
  Template Name:Turinska Mapa
 */

get_header(); ?>
 <script src="http://maps.google.com/maps/api/js?key=AIzaSyDEZ5RlhXnEkXC3G34ZTb_lOVjVOXQuFkA&callback=initMap"
 type="text/javascript"></script>

	<div class="container">
		<div class="row">
		<div class="col-sm-offset-2 col-sm-4">
			<h2 class="text-center page-title">Poslovna mapa Turija</h2>
			
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
    //Privrednici Turija,

	['0', 'DE-VAS PROJECT DOO TURIJA,Save Kovačevića 36 Turija', 45.532936, 19.857433, 'privrednici','http://www.kler-srbobran.rs/de-vas-project-doo-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['1', 'METAL MG EKO DOO TURIJA,Sedmog Jula 48', 45.534449, 19.856435, 'privrednici','http://www.kler-srbobran.rs/metal-mg-eko-doo-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['2', 'JOSOLARIJUS D.O.O. TURIJA, Jovana Popovića 52', 45.535326, 19.865036, 'privrednici','http://www.kler-srbobran.rs/josolarijus-d-o-o-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['3', 'IKIĆ METAL COLOR DOO ZA OTKUP SEKUNDARNIH SIROVINA TURIJA,Železnička 28 ', 45.536107, 19.847608, 'privrednici','http://www.kler-srbobran.rs/ikic-metal-color-doo-za-otkup-sekundarnih-sirovina-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['4', 'DOO NOVAKOVIĆ BRAZDA ZA TRGOVINU USLUGE I PROIZVODNJU TURIJA, Miladina Jocića 41/a', 45.533209, 19.860129, 'privrednici','http://www.kler-srbobran.rs/doo-novakovic-brazda-za-trgovinu-usluge-i-proizvodnju-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['5', 'AGRO IMPERIJA DOO TURIJA, Vojvođanska 1/a ', 45.542062, 19.859969, 'privrednici','http://www.kler-srbobran.rs/doo-novakovic-brazda-za-trgovinu-usluge-i-proizvodnju-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['6', 'TURINKA MLAKA DOO ZA POLJOPRIVREDU, TRGOVINU I USLUGE TURIJA, Nikole Tesle 10', 45.535151, 19.859421, 'privrednici','http://www.kler-srbobran.rs/turinka-mlaka-doo-za-poljoprivredu-trgovinu-i-usluge-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['7', 'DŽONJA AGRAR DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆU ZA POLJOPRIVREDU I USLUGE TURIJA, Jovana Popovića 45', 45.535379, 19.865517, 'privrednici','http://www.kler-srbobran.rs/dzonja-agrar-drustvo-sa-ogranicenom-odgovornoscu-za-poljoprivredu-i-usluge-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['8', 'OPŠTA ZEMLJORADNIČKA ZADRUGA TREND TURIJA, 22 Oktobra 2', 45.540566, 19.858868, 'privrednici',' http://www.kler-srbobran.rs/opsta-zemljoradnicka-zadruga-trend-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
    ['9', 'AGRO SILOS MDM DRUŠTVO SA OGRANIČENOM ODGOVORNOŠĆ ZA SKLADIŠTENJE, PROIZVODNJU I TRGOVINU NA VELIKO I MALO, TURIJA,Nikole Tesle 16', 45.535151, 19.859411, 'privrednici','http://www.kler-srbobran.rs/agro-silos-mdm-drustvo-sa-ogranicenom-odgovornoscu-za-skladistenje-proizvodnju-i-trgovinu-na-veliko-i-malo-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['10','TURINKA DOO ZA POLJOPRIVREDU TRGOVINU I USLUGE TURIJA,Nikole Tesle 10', 45.535949, 19.859863, 'privrednici','http://www.kler-srbobran.rs/turinka-doo-za-poljoprivredu-trgovinu-i-usluge-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['11','OPŠTA ZEMLJORADNIČA ZADRUGA TERA NOVA, TURIJA,7 Jula 1', 45.538430, 19.848428, 'privrednici','http://www.kler-srbobran.rs/opsta-zemljoradnicka-zadruga-tera-nova-turija/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	['12','METAL-X DOO ZA PROIZVODNJU, TRGOVINU I USLUGE TURIJA, TURIJA, Braće Medurić', 45.534545, 19.853786, 'privrednici','http://www.kler-srbobran.rs/metal-x-doo-za-proizvodnju-trgovinu-i-usluge-turija-2/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
    ['13','OPŠTA ZEMLJORADNIČA ZADRUGA TURIJA TURIJA, Svetog Save 39', 45.537809, 19.856654, 'privrednici','http://www.kler-srbobran.rs/opsta-zemljoradnicka-zadruga-turija-turija-2/','http://maps.google.com/mapfiles/ms/icons/blue-dot.png'],
	 

 //Preduzetnici Srbobran, 
	['14', 'SZR DANE BRANKICA VASIĆ PR TURIJA, Vuka Karadžića 14 ', 45.535991, 19.860610, 'preduzetnici','http://www.kler-srbobran.rs/szr-dane-brankica-vasic-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['15', 'SZR DUŠKO MILOVAC PR TURIJA, Žarka Zrenjanina 5', 45.540399, 19.847670, 'preduzetnici','http://www.kler-srbobran.rs/szr-dusko-milovac-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['16', 'STR STOJANKA I RISTO STOJANKA UBIPARIPOVIĆ PR TURIJA,Vojske Jugoslavije 23', 45.537634, 19.864322, 'preduzetnici','http://www.kler-srbobran.rs/str-stojanka-i-risto-stojanka-ubiparipovic-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['17', 'SAMOSTALNA ZANATSKO GRAĐEVINSKO TRGOVINSKO USLUŽNA RADNJA MILAN CRVENI PR TURIJA,7. jula 39', 45.533976, 19.858273, 'preduzetnici','http://www.kler-srbobran.rs/samostalna-zanatsko-gradevinsko-trgovinsko-usluzna-radnja-milan-crveni-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['18', 'SZR DAVIDOV V STEVAN DAVIDOV PR, TURIJA,Vojvode Živojina Mišića 42', 45.538397, 19.843729, 'preduzetnici','http://www.kler-srbobran.rs/szr-davidov-v-stevan-davidov-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['19', 'GRAĐEVINSKA RADNJA VUJIĆ GRADNJA MOMČILO VUJIĆ PR, TURIJA, 7. jula 7',45.538109, 19.849477, 'preduzetnici','http://www.kler-srbobran.rs/gradevinska-radnja-vujic-gradnja-momcilo-vujic-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['20', 'SZTR PARADIZO KOPONJA SLAĐANA PR, TURIJA, Jovana Popovića 55',45.535439, 19.865686, 'preduzetnici','http://www.kler-srbobran.rs/sztr-paradizo-koponja-sladana-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['21', 'PREDRAG NIKOLIĆ PR, AGENCIJA ZA GRAFIČKI DIZAJN NINJA BOY CREATIONS, TURIJA, Svetozara Markovića 46',45.539036, 19.854795, 'preduzetnici','http://www.kler-srbobran.rs/predrag-nikolic-pr-agencija-za-graficki-dizajn-ninja-boy-creations-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['22', 'STR KOMISION I MENJAČNICA JOVANKA JOVANKA SIRIŠKI PR TURIJA, Svetog Save 39',45.538316, 19.857320, 'preduzetnici','http://www.kler-srbobran.rs/str-komision-i-menjacnica-jovanka-jovanka-siriski-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['23', 'SLOBODAN GROZDANIĆ PREDUZETNIK, STR MASLINA TURIJA, Svetog Save 11/V',45.537126, 19.855815, 'preduzetnici','http://www.kler-srbobran.rs/slobodan-grozdanic-preduzetnik-str-maslina-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['24', 'SUR BIFE KOD VLADE KRAMERA DRAPŠIN SOFIJA PREDUZETNIK, TURIJA, Svetog Save 50 ',45.534898, 19.854126, 'preduzetnici','http://www.kler-srbobran.rs/sur-bife-kod-vlade-kramera-drapsin-sofija-preduzetnik-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['25', 'SZR TURINAC GAJINOVIĆ MILOŠ PREDUZETNIK TURIJA, Miladina Jocića 36',45.534231, 19.857211, 'preduzetnici','http://www.kler-srbobran.rs/szr-turinac-gajinovic-milos-preduzetnik-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['26', 'SZR FRIGO-DRAGAN DEJANOVIĆ DRAGAN PREDUZETNIK TURIJA, Đure Vujina 26',45.537559, 19.864282, 'preduzetnici','http://www.kler-srbobran.rs/szr-frigo-dragan-dejanovic-dragan-preduzetnik-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['27', 'STR A I M TATJANA CRNOJAČKI PR TURIJA, Svetog Save 47',45.537113, 19.855828, 'preduzetnici','http://www.kler-srbobran.rs/str-a-i-m-tatjana-crnojacki-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['28', 'SZR KAMENOREZAC STOJAN NOVAKOV PR TURIJA, Đure Vujina 53',45.537544, 19.864346, 'preduzetnici','http://www.kler-srbobran.rs/szr-kamenorezac-stojan-novakov-pr-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['29', 'SUR BIFE KOD ČOVEKA LENKICA BELJANSKI PREDUZETNIK, TURIJA, Svetozara Markovića 17',45.542831, 19.858687, 'preduzetnici','http://www.kler-srbobran.rs/sur-bife-kod-coveka-lenkica-beljanski-preduzetnik-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['30', 'SZR S & D DUŠICA VASIĆ PREDUZETNIK, TURIJA,Save Kovačevića 36',45.532713, 19.857881, 'preduzetnici','http://www.kler-srbobran.rs/szr-s-d-dusica-vasic-preduzetnik-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	['31', 'TAKSI RADNJA JOLE TAXI JOSIP KOVAĆ PR TURIJA,Vojske Jugoslavije 51 NS 216-37',45.537537, 19.864357, 'preduzetnici','http://www.kler-srbobran.rs/szr-s-d-dusica-vasic-preduzetnik-turija/','http://maps.google.com/mapfiles/ms/icons/red-dot.png'],
	 
	//Udruzenja Turija, 
	['32', 'Udruženje "ZAVIRITE U SALAŠE" TURIJA,Salaš 138', 45.497582, 19.785243, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0%d0%b2%d0%b8%d1%80%d0%b8%d1%82%d0%b5-%d1%83-%d1%81%d0%b0%d0%bb%d0%b0%d1%88%d0%b5-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['33', 'Udruženje "ZA NAŠE SELO" TURIJA, 22 Oktobra 2', 45.540489, 19.858809, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%bd%d0%b0%d1%88%d0%b5-%d1%81%d0%b5%d0%bb%d0%be-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['34', 'KINOLOŠKO DRUŠTVO "TURIJA", Svetog Save 33', 45.538479, 19.857534, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b7%d0%b0-%d0%bd%d0%b0%d1%88%d0%b5-%d1%81%d0%b5%d0%bb%d0%be-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['35', 'Ekološko društvo "TURIJA", 22 Oktobra 2', 45.540765, 19.858361, 'udruzenja','http://www.kler-srbobran.rs/%d0%ba%d0%b8%d0%bd%d0%be%d0%bb%d0%be%d1%88%d0%ba%d0%be-%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['36', 'Udruženje igrača preferansa - Preferans klub "Turija", Turija,Vidovdanska 39/a',45.539679, 19.856118, 'udruzenja','http://www.kler-srbobran.rs/%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d0%b8%d0%b3%d1%80%d0%b0%d1%87%d0%b0-%d0%bf%d1%80%d0%b5%d1%84%d0%b5%d1%80%d0%b0%d0%bd%d1%81%d0%b0-%d0%bf%d1%80%d0%b5%d1%84%d0%b5%d1%80%d0%b0%d0%bd-2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['37', 'Lovačko udruženje "Turija", Svetog Save 30',45.537444, 19.855833, 'udruzenja','http://www.kler-srbobran.rs/%d0%bb%d0%be%d0%b2%d0%b0%d1%87%d0%ba%d0%be-%d1%83%d0%b4%d1%80%d1%83%d0%b6%d0%b5%d1%9a%d0%b5-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0-2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
	['38', 'Kulturno umetničko društvo "Turija", Svetog Save 39',45.537999, 19.856626, 'udruzenja','http://www.kler-srbobran.rs/%d0%ba%d1%83%d0%bb%d1%82%d1%83%d1%80%d0%bd%d0%be-%d1%83%d0%bc%d0%b5%d1%82%d0%bd%d0%b8%d1%87%d0%ba%d0%be-%d0%b4%d1%80%d1%83%d1%88%d1%82%d0%b2%d0%be-%d1%82%d1%83%d1%80%d0%b8%d1%98%d0%b0-2/','http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'],
 
	 
	];   
	
 
//45.548016, 19.778405 45.540489, 19.858809
/**
 * Function to init map
 */

function initialize() {
    var center = new google.maps.LatLng(45.538159, 19.855645);
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
