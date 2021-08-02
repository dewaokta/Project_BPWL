<?php include('koneksi.php'); ?> 
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Real State Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
      <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="image/logo111.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="properties.php">House Design</a></li>
								<li class="nav-item"><a class="nav-link" href="agents.php">Team</a></li>
								<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
								<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
							
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
		
		


<div id ="view-menu1">

<form action="" method="post">
</form>

<center><br><Br><table class="table-view">
<th><center>Nama</th>
<th><center>Email</th>
<th><center>Subject</th>
<th><center>Message</th>
<th><center>Opsi</th>
</tr>


<style>
	  #outtable{
	  	padding: 200px;
	  	border:1px solid #e3e3e3;
	  	width:6000px;
	  	border-radius: 5px;
		
	  }
 
	  .short{
	  	width: 5000px;
		
	  }
 
	  .normal{
	  	width: 1500px;
		
	  }
      table{
      	border-collapse: collapse;
      	font-family: arial;
      	color:#5E5B5C;
		
      }
 
      thead th{
      	text-align: left;
      	padding: 100px;
		
      }
 
      tbody td{
      	border-top: 1px solid #e3e3e3;
      	padding: 65px;
		heigth : 20px;
      }
 
      tbody tr:nth-child(even){
      	background: #FFE4E1;
      }
 
      tbody tr:hover{
      	background: #87CEFA;
		
      }
	
</style>
<?php 

$input_cari = @$_POST['input_cari']; 
$cari = @$_POST['cari'];

// jika tombol cari di klik
if($cari) {

// jika kotak pencarian tidak sama dengan kosong
if($input_cari != "") {
// query mysql untuk mencari berdasarkan idjenisbiaya. .
$sql = mysql_query("select * from komentar where email like '%$input_cari%'") or die (mysql_error());   
} else {
$sql = mysql_query("select * from komentar") or die (mysql_error());
}
} else {
$sql = mysql_query("select * from komentar") or die (mysql_error());
}

// mengecek data
$cek = mysql_num_rows($sql);
// jika data kurang dari 1
if($cek < 1) {
?>

<?php
} else {

// mengulangi data agar tidak hanya 1 yang tampil
while($data = mysql_fetch_array($sql)) {

?>
<tr>
<td align="center"><?php echo $data['nama']; ?></td>
<td align="center"><?php echo $data['email']; ?></td>
<td align="center"><?php echo $data['subject']; ?></td>
<td align="center"><?php echo $data['message']; ?></td>

<!--Hanya pemanis tampilan-->
<td align="center">

<a href="delete.php?id=<?php echo $data['email']; ?>"onclick="return confirm('Anda yakin akan menghapus?')" 
style="text-decoration:none" class="button3">Delete</a>
</td>
  </tr>
 <?php 
}
}
?>

</table>
<p>
<br><p class="button"><a href="index.php">Kembali
<p class="button"><a href="PDF/pdf/index.php">Download PDF
<p class="button"><a href="index2.php"><center>Lihat Statistik
</p></p>
</p></p>
</div>

</body>
</html>