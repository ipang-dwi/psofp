<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="https://www.firstplato.com/favicon.ico">
  <title>Price Simulation and Order App - Firstplato - www.firstplato.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" id="content">
  <br>
  <h2 class="text-primary"><center>Price Simulation and Order App</center></h2>
  <p>Silahkan melakukan order atau simulasi perhitungan harga untuk product atau service yang Anda perlukan, dengan mengisi form berikut ini. </p>
 <form>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" aria-describedby="nameHelp" placeholder="Nama Anda" required />
    <small id="nameHelp" class="form-text text-muted">Diperlukan untuk invoice dan privasi data Anda akan kami jaga.</small>
  </div>
  <div class="form-group">
    <label for="usaha">Perusahaan</label>
    <input type="text" class="form-control" id="usaha" aria-describedby="workHelp" placeholder="Nama Perusahaan / Instansi / Trademark Anda" required />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Anda" required />
  </div>
  <div class="form-group">
    <label for="domain">Nama Domain</label>
    <input type="text" class="form-control" id="domain" aria-describedby="domainHelp" placeholder="www.contoh.com" required />
    <small id="domainHelp" class="form-text text-muted">Nama domain yang ingin diregister. Pastikan cek domain masih available di <a href="https://who.is" target="blank">who.is</a>, untuk TLD. Dan pada <a href="https://pandi.id/en/whois/" target="blank">PANDI</a>, bila domain berekstensi .ID (Indonesia).</small>
  </div>
  <div class="form-group">
    <label for="ext">Extension Domain</label>
    <select class="form-control" id="ext" onchange="myFunction()">
	   <option value=0>- Pilih Extension Domain -</option>
      <option value=168001>.COM - Rp. 168.001 / Tahun</option>
      <option value=168002>.NET - Rp. 168.002 / Tahun</option>
      <option value=168003>.ORG - Rp. 168.003 / Tahun</option>
	  <option value=168004>.ME - Rp. 168.004 / Tahun</option>
      <option value=168005>.TECH - Rp. 168.005 / Tahun</option>
      <option value=275000>.ID - Rp. 275.000 / Tahun</option>
      <option value=160000>.CO.ID - Rp. 160.000 / Tahun</option>
      <option value=90001>.AC.ID - Rp. 90.001 / Tahun</option>
	  <option value=90002>.OR.ID - Rp. 90.002 / Tahun</option>
      <option value=90003>.WEB.ID - Rp. 90.003 / Tahun</option>
      <option value=90004>.SCH.ID - Rp. 90.004 / Tahun</option>
    </select>
  </div>
   <div class="form-group">
    <label for="hosting">Hosting</label>
    <select class="form-control" id="hosting" onchange="myFunction()">
	   <option value=0>- Pilih Hosting -</option>
      <option value=600000>Shared Hosting 1GB SSD - Rp. 600.000 / Tahun</option>
      <option value=1100000>Shared Hosting 5GB SSD - Rp. 1.100.000 / Tahun</option>
      <option value=2000000>VPS 1 CPU 2GB RAM 20GB SSD  - Rp. 2.000.000 / Tahun</option>
	  <option value=3500000>VPS 1 CPU 4GB RAM 55GB SSD - Rp. 3.500.000 / Tahun</option>
    </select>
  </div>
   <div class="form-group">
    <label for="webdev">Web Dev</label>
    <select class="form-control" id="webdev" onchange="myFunction()">
      <option value=0>- Tanpa Web Dev -</option>
      <option value=3500000>Lite Enterprise Web Dev - Rp. 3.500.000</option>
      <option value=6000000>Medium Enterprise Web Dev - Rp. 6.000.000</option>
	  <option value=10000000>Big Enterprise Web Dev - Rp. 10.000.000</option>
    </select>
	<small id="webemHelp" class="form-text text-muted">Lihat detail perbandingan <a href="#" data-toggle="modal" data-target="#myModal2">Fitur Web Dev</a>.</small>
  </div>
   <div class="form-group">
    <label for="webmod">Custom Web Module</label>
    <select class="form-control" id="webmod" onchange="myFunction()">
      <option value=0>- Tanpa Custom Web Module -</option>
	  <option value=350000>Micro Custom Web Module - Rp. 350.000</option>
      <option value=1000000>Lite Custom Web Module - Rp. 1.000.000</option>
      <option value=3000000>Medium Custom Web Module - Rp. 3.000.000</option>
	  <option value=5000000>Big Custom Web Module - Rp. 5.000.000</option>
    </select>
  </div>
  <div class="form-group">
    <label for="webem">Custom Enterprise Email</label>
    <select class="form-control" id="webem" onchange="myFunction()">
      <option value=0>- Tanpa Custom Enterprise Email -</option>
	  <option value=500000>1-10 akun - Rp. 500.000</option>
      <option value=1000000>11-50 - Rp. 1.000.000</option>
      <option value=2000000>51-100 - Rp. 2.000.000</option>
	  <option value=4000000>>100 - Rp. 4.000.000</option>
    </select>
	<small id="webemHelp" class="form-text text-muted">Sekarang tiap akun akan mendapat unlimited mailbox size, dengan custom enterprise email. Kelebihan <a href="#" data-toggle="modal" data-target="#myModal">Custom Enterprise Email</a>.</small>
  </div>
    <div class="form-group">
    <label for="fb">Pembuatan Akun Sosmed</label>
    <select class="form-control" id="fb" onchange="myFunction()">
      <option value=0>- Tanpa Akun Sosmed -</option>
	  <option value=35000>FB FansPage / Grup - Rp. 35.000</option>
	  <option value=70000>FB + Twitter - Rp. 70.000</option>
	  <option value=100000>FB + Twitter + Instagram - Rp. 100.000</option>
	  <option value=130000>FB + Twitter + Instagram + Youtube - Rp. 130.000</option>
    </select>
  </div>
      <div class="form-group">
    <label for="like">Jasa Like / Follower untuk Sosmed</label>
    <select class="form-control" id="like" onchange="myFunction()">
      <option value=0>- Tanpa Jasa Like / Follower untuk Sosmed -</option>
	  <option value=500000>@ 1000 Like / Follower untuk FB - Rp. 500.000</option>
	  <option value=1000000>@ 1000 Like / Follower untuk FB + Twitter - Rp. 1.000.000</option>
	  <option value=1400000>@ 1000 Like / Follower untuk FB + Twitter + IG - Rp. 1.400.000</option>
	  <option value=1800000>@ 1000 Like / Follower untuk FB + Twitter + IG + Youtube Rp. 1.800.000</option>
    </select>
	<small id="webemHelp" class="form-text text-muted">Natural Like atau Follower, bukan akun mati atau bot.</small>
  </div>
  <p align="center"><b id="demo" class="text-primary"></b></p>
  <button type="submit" class="btn btn-primary"  onclick="myFunctionp()">Cetak Invoice</button>
</form>
<br>
<div class="text-center text-primary"><small><a href="https://github.com/ipang-dwi/psofp" target="blank">PSOFP v0.1.a</a> - crafted with &#9829;  by <a href="https://www.firstplato.com" target="blank">www.firstplato.com</a> &copy <?php echo @date('Y')?></small></div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Custom Enterprise Email</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-justify">
        Kelebihan Custom Enterprise Email yang kami tawarkan :
		<br>1. Mempergunakan teknologi Cloud dan Multi Server dari provider handal.
		<br>2. Server Email dan Hosting terpisah. Jadi bila sewaktu-waktu Web down atau tidak bisa diakses karena suatu masalah, maka Email masih bisa diakses.
		<br>3. Green Flag, diamankan dengan SSL 2048 bit, Antivirus, Anti Spam dan Two-Factor Authentication.
		<br>4. Unlimited Mailbox size untuk semua akun yang diregister.
		<br>5. Hingga 1000 akun email yang bisa diregister per domain.
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fitur Web Dev</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
	  
      <!-- Modal body -->
      <div class="modal-body text-justify">
			Fitur-fitur Web Dev adalah sebagai berikut :
			<br>1. Adaptive, Cross Platform
			<br>2. Modern, Elegant and Light Weight Design
			<br>3. User Friendly
			<br>4. CMS and SEO ready
			<br>5. Secure with new Google Recaptcha v2
			<br>6. Unlimited post, gallery, video, and page
			<br>7. Built in Social Media plugin
			<br>8. Unlimited minor revision <small class="badge badge-primary">medium</small> <small class="badge badge-success">big</small>
			<br>9. Periodically Backup <small class="badge badge-primary">medium</small> <small class="badge badge-success">big</small>
			<br>10. Garansi 1 tahun <small class="badge badge-danger">lite</small> <small class="badge badge-primary">medium</small> atau 2 tahun <small class="badge badge-success">big</small>
			<br>11. Free Green Verified SSL
			<br>12. Premium <small class="badge badge-primary">medium</small> <small class="badge badge-success">big</small> or Full Custom Theme <small class="badge badge-success">big</small>
			<br>13. Submit Web ke Google, agar terindeks. Dan submit Google My Business. 
			<br>14. Google Place Review <small class="badge badge-primary">medium</small> <small class="badge badge-success">big</small>
			<br>15. Submit Web pada Web Direktori lokal <small class="badge badge-primary">medium</small> <small class="badge badge-success">big</small> dan luar negeri <small class="badge badge-success">big</small>
			
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div><!-- Modal2 -->
</div>
<br>
<script>
function myFunction() {
    var ext = Number(document.getElementById("ext").value);
    var hosting = Number(document.getElementById("hosting").value);
	var webdev = Number(document.getElementById("webdev").value);
    var webmod = Number(document.getElementById("webmod").value);
	var webem = Number(document.getElementById("webem").value);
    var fb = Number(document.getElementById("fb").value);
	var like = Number(document.getElementById("like").value);
    var z = ext+hosting+webdev+webmod+webem+fb+like;
    
	const formatter = new Intl.NumberFormat('id-ID', {
	  style: 'currency',
	  currency: 'IDR',
	  minimumFractionDigits: 2
	})

	formatter.format(z); // "$1,000.00"
	
    document.getElementById("demo").innerHTML = "Total Invoice Anda adalah "+formatter.format(z);
}
</script>
	<script>
	function myFunctionp() {
		window.print();
	}
	</script>
</body>
</html>
