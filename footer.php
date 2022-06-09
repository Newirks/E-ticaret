	<div class="container-fluid footer">
		
		<div class="container">

			<div class="row footer_card">
				

				<div class="col-md-12">
					<center>
						<img src="img/card.png" class="img-responsive">
					</center>
				</div>

			</div>

			<div class="row">

				<div class="col-md-2 col-sm-6 col-xs-6">

					<img src="img/logo.png" class="footer_logo img-responsive">

					<div class="footer_sosyal_ikon">
					<a href="#"><i class="footer_icon fa fa-facebook"></i></a>
					<a href="#"><i class="footer_icon fa fa-instagram"></i></a>
					<a href="#"><i class="footer_icon fa fa-whatsapp"></i></a>
					</div>

				</div>

				<div class="col-md-2 col-sm-6 col-xs-6">
					<h5>MOTİFTUHAFİYE</h5>
					<ul>
						<li><a href="#">Anasayfa</a></li>
						<li><a href="#">Hakkımızda</a></li>
						<li><a href="#">İletişim</a></li>
						<li><a href="#">Üye Giriş</a></li>
						<li><a href="#">Üye Ol</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-6 col-xs-6">
					<h5>ÖNEMLİ BİLGİLER</h5>
					<ul>
						<li><a href="#">Üyelik Sözleşmesi</a></li>
						<li><a href="#">Satış Sözleşmesi</a></li>
						<li><a href="#">Garanti ve İade Koşulları</a></li>
						<li><a href="#">Gizlilik ve Güvenlik</a></li>
						<li><a href="#">KVKK</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-6 col-xs-6">
					<h5>KATEGORİLER</h5>
					<ul>
						<li><a href="#">Kumaş</a></li>
						<li><a href="#">Tuhafiye</a></li>
						<li><a href="#">Poplin Kumaş</a></li>
						<li><a href="#">Müslin Bez Kumaş</a></li>
						<li><a href="#">Viskon Kumaş</a></li>
						<li><a href="#">Dijital Baskı Kumaş</a></li>
						<li><a href="#">Divitin Pazen Kumaş</a></li>
						<li><a href="#">Duck Bezi Kumaş</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12">
					<h5>İLETİŞİM</h5>
					<table>
						<tr>
							<td>Adres </td>
							<td>:</td>
							<td> 871. sokak no:70-72 Kemeraltı Konak / İzmir</td>
						</tr>
						<tr>
							<td>Telefon </td>
							<td>:</td>
							<td> 0(000) 000 00 00</td>
						</tr>
						<tr>
							<td>Fax </td>
							<td>:</td>
							<td> 0(000) 000 00 00</td>
						</tr>
						<tr>
							<td>Eposta</td>
							<td>:</td>
							<td>deneme@deneme.com</td>
						</tr>
					</table>
				</div>

			</div>

		</div>

	</div>
	<div class="container-fluid footer_alt">
		
		<div class="row">
			
			<div class="col-md-12">
				
				Bu Sitenin Tüm Hakları Saklıdır. Tasarım ve Dizayn <a href="index.php">Motiftuhafiye.com'a</a> Aittir.

			</div>

		</div>

	</div>

	<script src="js/motif_js.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
        quantityValue = parseInt($(".quantity-input").val());
 
        $(".quantity-minus").click(function () {
            if (quantityValue > 1) {
                quantityValue--;
                $(".quantity-input").attr("value", quantityValue);
            }
        });
 
        $(".quantity-plus").click(function () {
            if (quantityValue < 100) {
                quantityValue++;
                $(".quantity-input").attr("value", quantityValue);
            }
        });
    });
</script>
<script>
            $(document).ready(function(){
                var sayac=0;
                $("#kutu").html(sayac);
                
                $("#btn1").on("click",function(){
                    sayac++;
                    $("#kutu").html(sayac);
                });
                
                $("#btn2").on("click",function(){
                    sayac--;
                    $("#kutu").html(sayac);
                });
                
            });
        </script>
  </body>
</html>