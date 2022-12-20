@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	   crossorigin=""/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css">
    #map{
	  		height: 160px;
	  		width: 226px;
	  	}
      h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
</style>

<div class="dashboard-app container-fluid">
  <div class="row mx-0">
    <div class="col-sm-8 col-md-8">
          <h1>Welcome</h1>
          <div class="elemen-dashboard text-center justify-content-center">
            <div class="dashboard-logo mb-4 mt-3">
              <img src="{{ asset('/assets/images/dashboard-logo.png') }}" alt="homepage" class="mt-3 mb-2" width="300" />
            </div>
            <div class="dashboard-text">
              <p>Aplikasi yang dibuat merupakan website untuk memberikan informasi mengenai suhu, cuaca, dan bencana alam. Website ini mengkhususkan dan memberi batasan informasi tersebut hanya untuk prakiraan cuaca dan gempa terkini di Indonesia.</p>
            </div>
          </div>
      </div>
      
      <div class="col-6 col-md-4 mt-3 text-center">
        <div class="card shadow-sm mb-2" style="width: 18rem; height: 15rem;">
          <div class="card-body">
            <p class="card-text">Map Snippet</p>
            <div id="map"></div>
          </div>       
        </div>    
        <div class="card shadow-sm" style="width: 18rem; height: 15rem;">
          <div class="card-body">
            <p class="card-text">Date & Time</p>
            <div id="Clock" onload="showTime()"></div>
            <div id="Date"></div>

            <script>
              function showTime() {
                var date = new Date();
                var h = date.getHours();
                var m = date.getMinutes();
                var session = "AM";
          
                if (h == 0) {
                  h = 12;
          
                }
          
                if (h > 12) {
                  h = h - 12;
                  session = "PM";
                }
          
                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
          
                var time = h + ":" + m + " " + session;
          
                document.getElementById("Clock").innerText = time;
          
                setTimeout(showTime, 1000);
          
              }
          
              showTime();

                var d = new Date();
                var tahun = d.getFullYear();
                var bulan = d.getMonth();
                var tanggal = d.getDate();
                var hari = d.getDay();
                var jam = d.getHours();
                var menit = d.getMinutes();
                var detik = d.getSeconds();
                switch(hari) {
                case 0: hari = "Sunday"; break;
                case 1: hari = "Monday"; break;
                case 2: hari = "Tuesday"; break;
                case 3: hari = "Wednesday"; break;
                case 4: hari = "Thursday"; break;
                case 5: hari = "Friday"; break;
                case 6: hari = "Saturday"; break;
                }
                switch(bulan) {
                case 0: bulan = "January"; break;
                case 1: bulan = "February"; break;
                case 2: bulan = "March"; break;
                case 3: bulan = "April"; break;
                case 4: bulan = "May"; break;
                case 5: bulan = "June"; break;
                case 6: bulan = "July"; break;
                case 7: bulan = "August"; break;
                case 8: bulan = "September"; break;
                case 9: bulan = "October"; break;
                case 10: bulan = "November"; break;
                case 11: bulan = "December"; break;
                }
                var tampilTanggal = hari + ", " + tanggal + " " + bulan + " " + tahun;
              
                document.getElementById("Date").innerHTML = tampilTanggal;
            </script>
              
            </div>
            </div>
          </div>
        </div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script type="text/javascript" src="/js/mapdashboard.js"></script>
@endsection