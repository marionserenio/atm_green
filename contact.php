<?php $page = ''; ?>
  <?php 
//include header.php
include_once('includes/header.php');
?>

<div id="content" class="container">
		<h2>Contact us</h2>
		<div class="divider"></div>
		
		<div class="row">
			<div id="contact-us" class="span16">
				<div class="row" id="services">
					<div class="span7">
					<h4>To reach our main Departments</h4>
					<h5>Call us</h5><br>
					<ul>
						<li>Sales phone: 1-877-901-0023</li>
						<li>Tech support phone: 1-866-837-0777</li>
						<li>Fax: 1-866-383-1663</li>
					</ul>
					<h5>Email</h5> <br>
					<ul>
						<li>General Informations: info@instacashatm.com</li>
						<li>Sales: sales@instacashatm.com</li>
						<li>Marketing:marketing@instacashatm.com</li>
						<li>Accounting: accounting@instacashatm.com</li>
						<li>Processing: paul@instacashatm.com</li>
						<li>Support: support@instacashatm.com</li>
					</ul>	
					<h5>Ontario</h5> <br>
					<ul>
						<li><span>Mark Convery</span><br>
							Phone: 1-866-837-0777 <br>
							Fax: 1-866-383-1663 <br>
							e-mail: mark@insta-payment.com
						</li>
							<br>
						<li><span>Tina Cuffaro</span><br>
							Phone: 1-866-837-0777<br>
							Fax: 1-866-383-1663<br>
							e-mail: tina@instacashatm.com
						</li>
							<br>
						<li><span>Irwin Wexelman</span><br>
							Phone: 1-866-837-0777<br>
							Fax: 1-866-383-1663<br>
							e-mail: irwin@instacashatm.com
						</li>
					</ul>	
					<h5>British Columbia & Alberta</h5> <br>
					<ul>
						<li><span>Melanie Moukas</span><br>
						Phone: 1-866-837-0777 <br>
						Fax: 1-866-383-1663	 <br>
						e-mail: info@instacashatm.com
						</li> <br>

						<li><span>Irwin Wexelman</span><br>
						Phone: 1-866-837-0777 <br>
						Fax: 1-866-383-1663	 <br>
						e-mail: irwin@instacashatm.com
						</li>


					</ul>
						
					<h5>Quebec</h5><br>
					<ul>
						<li><span>Irwin Wexelman</span><br>
						Phone: 1-866-837-0777 <br>
						Fax: 1-866-383-1663	 <br>
						e-mail: irwin@instacashatm.com
						</li><br>

						<li><span>Jean Gratton</span><br>
						Phone: 1-866-837-0777 <br>
						Fax: 1-866-383-1663	 <br>
						e-mail: jean@insta-payment.com
						</li> <br>

						<li><span>Melanie Moukas</span><br>
						Phone: 1-866-837-0777 <br>
						Fax: 1-866-383-1663	 <br>
						e-mail: sales@instacashatm.com
						</li> <br>

						<li><span>Normand Rivard</span><br>
						Phone: 1-866-837-0777 <br>
						Fax: 1-866-383-1663	 <br>
						e-mail: normand@insta-payment.com
						</li> <br>
					</ul>
					</div>	
					<div id="contact-form" class="span4">
					<h4>Contact us</h4>
						<form name="contactform" method="post" action="contact_script.php">
				            <input name="name" placeholder="name" required="required" class="contact_txtbox span5" maxlength="30" size="30">
				            <input name="email" placeholder="email" required="required" class="contact_txtbox span5" maxlength="30" size="30">
				            <input name="pnumber" placeholder="phone number" required="required" class="contact_txtbox span5" maxlength="30" size="30">
				            <textarea name="message" placeholder="message"  required="required" class="contact_txt span5"></textarea>
				            <input type="submit" value="submit" class="btn primary contact_button">
				        </form>
				        	<br>
				       <h5>New York</h5><br>
				       <ul>
				       		<li><span>Melanie Moukas</span><br>
							Phone: 1-866-837-0777 <br>
							Fax: 1-866-383-1663	 <br>
							e-mail:  info@instacashatm.com
							</li> <br>
				       </ul>
				       
				       <h5>Florida</h5><br>
				       <ul>
				       		<li><span>Tina</span><br>
							Phone: 1-866-837-0777 <br>
							Fax: 1-866-383-1663	 <br>
							e-mail:  tina@instacashatm.com
							</li> <br>

							<li><span>Karla M. Acuna</span><br>
							Phone: 1-866-837-0777 <br>
							Fax: 1-866-383-1663	 <br>
							e-mail:   karla.acuna@instacashatm.com
							</li> <br>

							<li><span>Alejandro Muñiz</span><br>
							Phone: 1-866-837-0777 <br>
							Fax: 1-866-383-1663	 <br>
							e-mail:  alejandro.muniz@instacashatm.com
							</li> <br>
				       </ul>	 	
				       	
				       <h5>California</h5><br>
				       <ul>
				       		<li><span>Irwin Wexelman</span><br>
							Phone: 1-866-837-0777 <br>
							Fax: 1-866-383-1663	 <br>
							e-mail:  irwin@instacashatm.com
							</li> <br>
				       </ul>

					</div>
				</div>	
			</div>		
		</div>	
</div>	

<?php 
//include footer.php
include_once('includes/footer.php');
?>