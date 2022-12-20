@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	   crossorigin=""/>

     <style type="text/css">
      #map{
	  		height: 500px;
	  		width: 100%
	  	}
      </style>
  

<div class="weather container-fluid">
<body>
  <div class="row mb-3">
	<header>
    <div class="col-md-6">
      <h1>Weather Forecast</h1>
      <p>Tanggal : <span class="tanggal"></span></p>
    </div>
    <div class="col d-grid d-md-flex justify-content-md-end">
      <div class="select" style="position: absolute;
	  		right: 20px;
	  		top: 1rem;">
			  <select name="select-tanggal" style="color: black;
        background-color: #fff;
        border-color: #fff;
        border-radius: 10px;
        font-size: 1rem;
	  		padding: .5rem;"></select>
		  </div>
    </div>
	</header>
	<div id="map"></div>
    </div>
</body>  
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script type="text/javascript" src="/js/mapprakiraan.js"></script>
</script>
@endsection