@extends('admin.template')

@section('content')
<div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
    <h1>Contact</h1>   
 		<div class="page-section contact-page">
			<div class="contact-warp">
				<div class="row">
					<div class="col-xl-6 p-0">
						<div class="contact-text">
							<span>Say hello</span>
							<h3>Get in touch</h3>
							<form class="contact-form">
								<input type="text" placeholder="Your name">
								<input type="text" placeholder="Your email">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Message"></textarea>
								<button class="site-btn">
									<a href="whatsapp">Send message</a>
								</button>
							</form>
							<div class="contac-info">
								<p>Bekaseh</p>
								<p>+6282125780113</p>
								<p>Fauzi.aaf@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop