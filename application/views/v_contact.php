<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Contact</li>
			</ol>
		</div>
	</div>
</div>

<div class="map">
	<iframe
		src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-12.131247, -76.979156&amp;output=embed">
	</iframe>
</div>

<section id="contact-page">
	<div class="container">
		<div class="center">
			<h2>Drop Your Message</h2>
			<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="row contact-wrap">
			<div class="status alert alert-success" style="display: none"></div>
			<form id="main-contact-form" class="contact-form" name="contact-form"
				method="post" action="sendemail.php">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="form-group">
						<label>Nombre *</label> <input type="text" name="name"
							class="form-control" required="required">
					</div>
					<div class="form-group">
						<label>Email *</label> <input type="email" name="email"
							class="form-control" required="required">
					</div>
					<div class="form-group">
						<label>Tel&eacute;fono</label> <input type="number"
							class="form-control">
					</div>
					<div class="form-group">
						<label>Company Name</label> <input type="text"
							class="form-control">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<label>Asunto *</label> <input type="text" name="subject"
							class="form-control" required="required">
					</div>
					<div class="form-group">
						<label>Mensaje *</label>
						<textarea name="message" id="message" required="required"
							class="form-control" rows="8"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
					</div>
				</div>
			</form>
		</div>
		<!--/.row-->
	</div>
	<!--/.container-->
</section>
<!--/#contact-page-->