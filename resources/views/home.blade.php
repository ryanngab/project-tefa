@extends('layouts.main')

@section('container')


<div class="card" style="width: 900px;  background-color: rgba(233, 228, 228, 0.641); height: 400px;" >
    	<div class="text1">
		       <div class="text">
			         <p id="tag">
			              <strong>SMK WIKRAMA BOGOR</strong>
	                 </p>
					    <h1>TEFA</h1>
                        Tefa adalah model pemebelajaran bagi sekolah vokasi baik itu smk wikrama maupun perguruan tinggi
                    Vokasi berbasis produksi/jasa yang mengacu pada standar dan prosedur yang berlaku di industri dan dilaksanakan dalam suasana yang terjadi di industri</p>
              </div>
       </div>
</div>
<img src="img/logo-wk.png" />
<style>

body {
 background-image: url(/img/1.jpg);
 background-repeat: no-repeat;
 background-size: cover;
 }

 .img { 
  width: 200px;;
  max-width: 200px;
  height: auto;
  float: right;
}




.text1 {
  margin: 0 64px;
  font-size: 18px;
  display: flex;
  align-items: center;
}

h1 {
  margin-top: 0;
}

#tag {
  margin-top: 0;
  margin-bottom: 24px;
  letter-spacing: 3px;
}
</style>
@endsection
