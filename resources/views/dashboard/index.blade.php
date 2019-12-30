@extends('../layout/master')

@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/css/ol.css" type="text/css">
    <style>
        .map {
            height: 400px;
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
@section('content-wrapper')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-9 connectedSortable">
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
                                <h4>My Map</h2>
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
        var map = new ol.Map({
            target: 'map',
            layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            }),
            vectorLayer
            ],
            view: new ol.View({
            center: ol.proj.fromLonLat([101.447777, 0.507068]),
            zoom: 12
            })
        });

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

                var content = '<h3>' + feature.get('Nama') + '</h3>';
                content += feature.get('Foto2');


                content_element.innerHTML = content;
                overlay.setPosition(coord);

                console.info(feature.getProperties());
            }
        });
    </script>
@endsection