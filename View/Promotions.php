<?php
session_start();
	if(!isset($_SESSION["user-login"])){
		include_once('Header.php');
	}
	else{
		include_once("HeaderIn.php");
	}
?>
<body class="bg-body">
	<br><br><br>
	<div class="container">
		<div class = "row">
			<div class="container">
				<img src="../Asset/Gallery/voucher1.png" style="width:50%">
				<div class ="col-sm-6" style="text-align:justify; float:right;">
					<h1>Potongan 20% untuk Setiap Pembelian Bebek Panggang</h1>
					<p>Dengan menambahkan kode voucher MK001 bisa mendapatkan discount 20% untuk pembelian Bebek Panggang di Lay Restaurant</p>
					<p>Syarat & Ketentuan : 
					<br>	- Berlaku sampai tanggal 26 Maret 2021
					<br>	- Tidak berlaku kelipatan
					<br>	- Hanya bisa ditukarkan sebanyak satu kali melalui pemesanan secara online
					<br>	- Berlaku untuk semua jenis pembayaran
					<br>	- Voucher tidak dapat digabung dengan kode voucher yang lainnya</p>
				</div>
			</div>
			<hr style="border-color: #781313">
			<div class="container">
				<img src="../Asset/Gallery/voucher4.png" style="width:50%; float:right;">
				<div class ="col-sm-6" style="text-align:justify;">
					<h1>Beli Babi Panggang Gratis Hakau</h1>
					<p>Hanya dengan membeli menu Babi Panggang di Lay Restaurant, langsung bisa bawa pulang Hakau secara gratis dengan menggunakan kode voucher MK002</p>
					<p>Syarat & Ketentuan : 
					<br>	- Berlaku sampai tanggal 31 Maret 2021
					<br>	- Tidak berlaku kelipatan
					<br>	- Hanya bisa ditukarkan sebanyak satu kali melalui pemesanan secara online
					<br>	- Berlaku untuk semua jenis pembayaran
					<br>	- Voucher tidak dapat digabung dengan kode voucher yang lainnya</p>
				</div>
			</div>
			<hr style="border-color: #781313">
			<div class="container">
				<img src="../Asset/Gallery/voucher3.png" style="width:50%">
				<div class ="col-sm-6" style="text-align:justify; float:right;">
					<h1>Potongan 30% untuk Semua Jenis Minuman</h1>
					<p>Dengan memasukkan kode voucher MK003, dapatkan potongan sebesar 30% untuk semua jenis minuman</p>
					<p>Syarat & Ketentuan : 
					<br>	- Berlaku sampai tanggal 15 April 2021
					<br>	- Minimal pemesanan Rp 250.000 melalui pemesanan secara online
					<br>	- Hanya bisa ditukarkan sebanyak satu kali untuk satu minuman harga tertinggi
					<br>	- Berlaku untuk semua jenis pembayaran
					<br>	- Voucher tidak dapat digabung dengan kode voucher yang lainnya</p>
				</div>
			</div>
			<br>
		</div>
	</div>
</body>