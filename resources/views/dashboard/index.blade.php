@extends('../layout/master')

@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/css/ol.css" type="text/css">
    <style>
        .map {
            height: 525px;
            width: 100%;
        }
        .ol-popup {
            position: absolute;
            background-color: white;
            -webkit-filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.2));
            filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.2));
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #cccccc;
            bottom: 12px;
            left: -50px;
            min-width: 280px;
        }
    
        .ol-popup:after,
        .ol-popup:before {
            top: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }
    
        .ol-popup:after {
            border-top-color: white;
            border-width: 10px;
            left: 48px;
            margin-left: -10px;
        }
    
        .ol-popup:before {
            border-top-color: #cccccc;
            border-width: 11px;
            left: 48px;
            margin-left: -11px;
        }
    
        .ol-popup-closer {
            text-decoration: none;
            position: absolute;
            top: 2px;
            right: 8px;
        }
    
        .ol-popup-closer:after {
                content: "✖";
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/build/ol.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL,Object.assign"></script>
    <link rel="stylesheet" href="{{ asset('assets/ol-ext.css') }}" />
	<script type="text/javascript" src="{{ asset('assets/ol-ext.js') }}"></script>
@section('content-wrapper')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
    </div>
@endsection

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Peta
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                    <div id="map" class="map"></div>
                                    <div id="popup" class="ol-popup">
                                        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                                        <div id="popup-content"></div>
                                    </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var vectorLayer = new ol.layer.Vector({
            title:'Perusahaan',
            source: new ol.source.Vector({
                
                format: new ol.format.GeoJSON(),
                url: 'http://localhost:8000/api/daftar-industri'
            }),

            style: new ol.style.Style({
                image: new ol.style.Icon(({
                anchor: [0.5, 46],
                anchorXUnits: 'fraticon',
                anchorYUnits: 'pixels',
                src: '{{ asset("assets/openlayer/icon/location.png")}}'
                }))
            })
        });
        var vectorLayer2 = new ol.layer.Vector({
            title:'Peta Kecamatan',
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: '{{ asset("assets/openlayer/data/Pekanbaru.json")}}'
            })
        });
        var map = new ol.Map({
            target: 'map',
            layers: [
            new ol.layer.Tile({
                title:'Peta Pekanbaru',
                source: new ol.source.OSM()
            }),
            vectorLayer2,
            vectorLayer
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([101.447777, 0.507068]),
                zoom: 12
            })
        });
        map.addControl(new ol.control.LayerSwitcher());
        
        var container = document.getElementById('popup');
        content_element = document.getElementById('popup-content');
        closer = document.getElementById('popup-closer');

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };

        var overlay = new ol.Overlay({
            element: container,
            autoPan: true,
            offset: [0, -10]
        });

        map.addOverlay(overlay);

        var fullscreen = new ol.control.FullScreen();
        map.addControl(fullscreen);

        map.on('click', function(evt) {
            var feature = map.forEachFeatureAtPixel(evt.pixel,
                function(feature, layer) {
                return feature
                })
            if (feature) {
                var geometry = feature.getGeometry();
                var coord = geometry.getCoordinates();

                var content = '<img src="' + feature.get('Foto') + '" width="200" height="200"><hr>';
                content += '<h4 align="center">' + feature.get('Nama') + '</h3><hr>';
                content += '<h5 align="justify">' + feature.get('Alamat') + '</h4><hr>';
                content += '<h6><b>Lat : </b>' + feature.get('X') + ' | <b>Long : </b>'+feature.get('Y') +'</h6><hr>';


                content_element.innerHTML = content;
                overlay.setPosition(coord);

                console.info(feature.getProperties());
            }
        });
        var positions = 
		[	
			{ name:"PT. Riau Beton Mandiri", pos:ol.proj.transform([101.398477, 0.5070680], 'EPSG:4326', 'EPSG:4326'), zoom:20 },
			{ name:"Coatheshire", pos:ol.proj.transform([101.398216, 0.561892], 'EPSG:4326', 'EPSG:3857'), zoom:11 },
			{ name:"PT. Aspindo Kedaton Motor", pos:ol.proj.transform([101.412064,0.535135], 'EPSG:4326', 'EPSG:3857'), zoom:13 },
			{ name:"PT. Aneka Karya Tangguh", pos:ol.proj.transform([101.40361,0.534147], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"Nissan Datsun SM. Amin", pos:ol.proj.transform([101.394425,0.502133], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"Indah Kargo", pos:ol.proj.transform([101.394099,0.493766], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Rapi Pekanbaru", pos:ol.proj.transform([101.394547,0.490471], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
            
            { name:"PT. ALS", pos:ol.proj.transform([101.394467, 0.490337], 'EPSG:4326', 'EPSG:4326'), zoom:20 },
			{ name:"PT. Sujati Sinar Sempurna", pos:ol.proj.transform([101.3970337,0.5694548], 'EPSG:4326', 'EPSG:3857'), zoom:11 },
			{ name:"PT. Lutvindo Wijaya Perkasa", pos:ol.proj.transform([101.3958073,0.4887057], 'EPSG:4326', 'EPSG:3857'), zoom:13 },
			{ name:"PT. PSS", pos:ol.proj.transform([101.3958073,0.4887057], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT Gunung Mas Raya", pos:ol.proj.transform([101.3979373,0.4879153], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Green Planet Indonesia", pos:ol.proj.transform([101.4281202,0.5671843], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Sumberdaya Sewatama", pos:ol.proj.transform([101.4316392,0.5351895], 'EPSG:4326', 'EPSG:3857'), zoom:12 },

            { name:"Contromatic Prima Mandiri. PT", pos:ol.proj.transform([101.432519, 0.536584], 'EPSG:4326', 'EPSG:4326'), zoom:20 },
			{ name:"PT. Salim Ivomas Pratama", pos:ol.proj.transform([101.418082,0.534583], 'EPSG:4326', 'EPSG:3857'), zoom:11 },
			{ name:"PT. Mitra Motor Semesta", pos:ol.proj.transform([101.4379266,0.5601714], 'EPSG:4326', 'EPSG:3857'), zoom:13 },
			{ name:"Bina Dinamika Raga. PT", pos:ol.proj.transform([101.4521685,0.5217545], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Nindya Karya (Persero)", pos:ol.proj.transform([101.4230781,0.5820452], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"Contromatic Prima Mandiri. PT", pos:ol.proj.transform([101.432519,0.536584], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT Astajaya Nirwighnata", pos:ol.proj.transform([101.4221549,0.5349535], 'EPSG:4326', 'EPSG:3857'), zoom:12 },

            { name:"PT. Konsul Perdana", pos:ol.proj.transform([101.4552809, 0.5359817], 'EPSG:4326', 'EPSG:4326'), zoom:20 },
			{ name:"PT. Cakra Karimun Sejahtera", pos:ol.proj.transform([101.4684693,0.5330234], 'EPSG:4326', 'EPSG:3857'), zoom:11 },
			{ name:"PT Pelangi Mandiri Wisata", pos:ol.proj.transform([101.454039,0.5356974], 'EPSG:4326', 'EPSG:3857'), zoom:13 },
			{ name:"PT.  Indo Truck Utama", pos:ol.proj.transform([101.4315353,0.5632702], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT . Cahaya Hati Wisata Religi", pos:ol.proj.transform([101.4567722,0.5025262], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Salim Ivomas Pratama", pos:ol.proj.transform([101.3979373,0.4879153], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT.Servitama Internusa", pos:ol.proj.transform([101.4221549,0.5349535], 'EPSG:4326', 'EPSG:3857'), zoom:12 },

            { name:"PO.Handoyo Pekanbaru Riau", pos:ol.proj.transform([101.3962504, 0.4970435], 'EPSG:4326', 'EPSG:4326'), zoom:20 },
			{ name:"PT. VERBERT ALUMINDO PROFIL", pos:ol.proj.transform([101.4104106,0.5362814], 'EPSG:4326', 'EPSG:3857'), zoom:11 },
			{ name:"Kimia Unggul Riau Tirta", pos:ol.proj.transform([101.4204123,0.476111], 'EPSG:4326', 'EPSG:3857'), zoom:13 },
			{ name:"PT. Riau Abdi Sentosa", pos:ol.proj.transform([101.4104106,0.5362814], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"Kitani PT", pos:ol.proj.transform([101.3941474,0.4762824], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Rawlindo Power Solusi", pos:ol.proj.transform([101.4124414,0.5358568], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"Halim Tirta Lestari PT", pos:ol.proj.transform([101.4908087,0.4954568], 'EPSG:4326', 'EPSG:3857'), zoom:12 },

            { name:"PT CSBS", pos:ol.proj.transform([101.4694101,0.5052894], 'EPSG:4326', 'EPSG:4326'), zoom:20 },
			{ name:"Diamond Cold Storage. PT", pos:ol.proj.transform([101.4880621,0.4955856], 'EPSG:4326', 'EPSG:3857'), zoom:11 },
			{ name:"Global Dimensi Mandiri. PT", pos:ol.proj.transform([101.496098,0.4804424], 'EPSG:4326', 'EPSG:3857'), zoom:13 },
			{ name:"PT.Sari Bumi Raya", pos:ol.proj.transform([101.4981204,0.5003544], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"Puri Green Resources. PT", pos:ol.proj.transform([101.474061,0.4744237], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Rawlindo Power Solusi", pos:ol.proj.transform([101.4124414,0.5358568], 'EPSG:4326', 'EPSG:3857'), zoom:12 },
			{ name:"PT. Salim Ivomas Pratama", pos:ol.proj.transform([101.4124414,0.5358568], 'EPSG:4326', 'EPSG:3857'), zoom:12 }
		]

	// The search control
	var search = new ol.control.Search(
		{	//target: $(".options").get(0),
			// Title to use in the list
			getTitle: function(f) { return f.name; },
			// Search result
			autocomplete: function (s, cback)
			{	var result = [];
				// New search RegExp
				var	rex = new RegExp(s.replace("*","")||"\.*", "i");
				for (var i=0; i<positions.length; i++)
				{	
					if (rex.test(positions[i].name)) result.push (positions[i]);
				}
				/* Return result directly... */
				return result;
				/* ...or use the callback function
				cback(result);
				return false;
				*/
			}
		});
	map.addControl (search);

	// Center when click on the reference index
	search.on('select', function(e)
		{	map.getView().animate({
				center: e.search.pos,
				zoom: 20,
				easing: ol.easing.easeOut
			})
		});

    </script>
@endsection