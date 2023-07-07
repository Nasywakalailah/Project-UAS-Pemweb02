@extends('template/main')

@section('content3')
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&display=swap" rel="stylesheet">
<style>
   body{
        background-color: #F9F9F9;
        font-family: 'Abhaya Libre', Arial;
    }

	h3{
		text-align: center;
		font-size: 50px;
	}

	p{
		text-align: justify;
		font-size: 20px;
	}

	footer{
		height: 100px;
  		width: 1500px;
		padding: 50px;
		margin: 50px;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<br>
			<h3 class="text-center">
				About Star Fashion
			</h3>
			<div class="row">
				<div class="col-md-12">
					<br>
					<img alt="Bootstrap Image Preview" width="1100px"  src="/img/about.jpg"/>
					<br>
					<br>
					<br>
					<p>
						Star Fashion hadir untuk memberikan yang terbaik dalam tren fashion. Kami membawa top brand lokal dan internasional terkemuka supaya Anda selalu memiliki pakaian yang sempurna dimanapun dan kapanpun. Dapatkan inspirasi fashion seperti floral, denim, stripes, monokrom, dan banyak lagi. Kami menyediakan koleksi terlengkap seperti atasan, celana wanita, dress, outerwear, jumpsuit, hingga pakaian olahraga agar Anda selalu menjaga kesehatan. Star Fashion juga menyediakan fashion busana muslim wanita seperti Kaftan, Gamis, tunik muslim, Dress Muslim, Outerwear, Hijab dan banyak lagi dari para desainer dan brand lokal.
					</p>
					<p>
						Jam Operasional :
					</p>
					<table class="table table-bordered">
						<thead>
							<tr>
							<th scope="col">No</th>
							<th scope="col">Hari</th>
							<th scope="col">Jam</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Senin - Selasa</td>
							<td>08:00 - 20:00 Wib</td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Rabu - Jumat</td>
							<td>08:00 - 21:00 Wib</td>
							</tr>
							<tr>
							<th scope="row">3</th>
							<td>Sabtu - Minggu</td>
							<td>07:00 - 22:00 Wib</td>
							</tr>
						</tbody>
						</table>
</div>
@endsection