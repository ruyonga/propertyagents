<?php include("header.php"); ?>

<style type="text/css">
	h2{
		margin-left: 40%;
	}
</style>
<script type="text/javascript">
	
	window.document.onkeydown = function (e)
	{
		if (!e){
			e = event;
		}
		if (e.keyCode == 27){
			lightbox_close();
		}
	}
	function lightbox_open(){
		window.scrollTo(0,0);
		document.getElementById('light').style.display='block';
		document.getElementById('fade').style.display='block'; 
	}
	function lightbox_close(){
		document.getElementById('light').style.display='none';
		document.getElementById('fade').style.display='none';
	}
</script>
<a><h2>Ntida Estate</h2></a>

<ul class="photo-grid">
	<li><a href="include/img/ntida/1.jpg">
		<figure>			
			<img src="include/img/ntida/1.jpg" height="180" width="320" alt="beautiful homes">
			<figcaption ><p>Nice Houses, $100000</p></figcaption>
		</figure>
		</a>
	</li>
	<li>
		<a href="include/img/ntida/2.jpg">
			<figure>

				<img src="include/img/ntida/2.jpg" height="180" width="320" alt="Homes with yard">
				<figcaption><p>Big homes With Green yards<br /> $2032030</p></figcaption>
			</figure>
		</a>
	</li>
	<li><a href="include/img/ntida/3.jpg">
		<figure>
			<img src="include/img/ntida/3.jpg" height="180" width="320" alt="Classic Homes">
			<figcaption><p>Private Masion<br />$903422</p></figcaption>
		</figure>
	</a>
</li>
<li>
	<a href="include/img/ntida/4.jpg">
		<figure>
			<img src="include/img/ntida/4.jpg" height="180" width="320" alt="beautiful homes">
			<figcaption><p>Water View Homes $100000</p></figcaption>
		</figure>
	</a>
</li>
<li>
	<a href="include/img/ntida/5.jpg">
		<figure>

			<img src="include/img/ntida/5.jpg" height="180" width="320" alt="Homes with yard">
			<figcaption><p>Big homes With Green yards<br /> $2032030</p></figcaption>
		</figure>
	</a>
</li>
<li><a href="include/img/ntida/6.jpg">
	<figure>
		<img src="include/img/ntida/6.jpg" height="180" width="320" alt="Classic Homes">
		<figcaption><p>Homes with Acient Look<br />$90322</p></figcaption>
	</figure>
</a>
</li>
</ul>
<?php include("include/footer.php"); ?>