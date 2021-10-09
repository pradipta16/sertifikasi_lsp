@extends('layouts.master')

@section('content')

    <div class="container" style="padding-top: 100px">
        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script>
            // fungsi initialize untuk mempersiapkan peta
            function initialize() {
                var propertiPeta = {
                    center: new google.maps.LatLng(-7.7797348, 110.392491),
                    zoom: 9,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };


                var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
            }

            // event jendela di-load  
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


        <body>
            <div>
                <h3><b>Lokasi Kantor LSP Teknologi Digital</b></h3>
                <p>Jl. Demangan Baru No.8, Demangan Baru, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                    Yogyakarta 55281</p>
            </div>

            <!-- Elemen yang akan menjadi kontainer peta -->
            <div id="googleMap" style="height:500px;"></div>

        </body>
    </div>


@endsection
