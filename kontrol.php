<?php 
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $error="";
    $success="";



	if ( filter_var($uname, FILTER_VALIDATE_EMAIL) ){ 
		if(isset($_POST['submit'])){
			if($uname=="b1812100001@sakarya.edu.tr"){
				if($pass=="b1812100001"){
					$error="";
					$success="Hoşgeldiniz";
					header("Location: basarili.html");
				}else{
					$error="Hatalı Şifre";
					$success="";
				}
			}else{
				$error="Hatalı Kullanıcı Adı";
				$success="";
			}
		}
		} else {
				$error="Mail Adresini Giriniz";
				$success="";
	}
	

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link herf="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awsome/4.7.0/css/font-awsome.min.css">
    <title>Web Teknolojileri Proje Ödevi</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Şov-->
    <script src="message.js"></script>
  </head>
  <body>
    <!---Header--->
    <div class="container">
        <header class="header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-4 pt-1">
                <a class="link-secondary" href="#">
                  <img src="images/saülogo.png" alt="Sakarya Üniversitesi" title="Sakarya Üniversitesi" height="50px" width="50px" class="img-circle">
                </a>
              </div>
              <div class="col-4 text-center">
                <a class="header-logo text-dark" href="#">Web Teknolojileri</a>
              </div>
              <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="giris.html">Üye Girişi</a>
              </div>
            </div>
          </header>
      
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="index2.html">Anasayfa</a>
            <a class="p-2 link-secondary" href="hakkimda.html">Hakkımda</a>
            <a class="p-2 link-secondary" href="ozgecmis.html">Özgeçmiş</a>
            <a class="p-2 link-secondary" href="sehrim.html">Şehrim</a>
            <a class="p-2 link-secondary" href="mirasimiz.html">Mirasımız</a>
            <a class="p-2 link-secondary" href="ilgialani.html">İlgi Alanlarım</a>
            <a class="p-2 link-secondary" href="iletisim.html">İletişim</a>
          </nav>
        </div>
      </div>

    <main class="container">
      <img src="images/saülogo.png" height="300px" width="300px" alt="Saü">
	  <p class="error"><?php echo $error; ?></p>
      <p class="success"><?php echo $success; ?></p>
      <form action="kontrol.php" method="post">
        <div class="form-input">
          <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
          <input type="text" name="uname" value="" placeholder="Kullanıcı Adı Giriniz" required><br />
          <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>
          <input type="password" name="pass" value="" placeholder="Şifre Giriniz" required><br />
          <input type="submit" name="submit" value="Giriş"><br />
          <a href="index2.html">Şifremi Unuttum</a>
        </div>
      </form>
      </main>
                  
      <div class="footer">
        <div class="row">
            <div class="col-md-12">
                <strong>Copyright &copy; Sakarya Üniversitesi</strong>
              </div>
        </div>
      </div>
  </body>
</html>