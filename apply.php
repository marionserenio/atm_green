<?php $page = "apply"; ?>
<?php 
//include header.php
include_once('includes/header.php');
?>

<div id="content_products" class="container">
		<h2>Apply</h2>
		<div class="divider"></div>


		<div class="span8" id="Apply">
			
			<form>
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_PRODUCT'] ?>:</label>
					<div class="span4">
						<select>
							<option disabled="disabled">--Select--</option>
							<option>ATM's</option>
							<option>Cash Drawers</option>
							<option>Touch Terminals</option>
							<option>eCommerce Software</option>
							<option>Prepaid Mastercard</option>
							<option>P.O.S.</option>
						</select>
					</div>	
				</div>	
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_COMPANY_NAME'] ?></label>
				<input class="span4 apply">
				</div>
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_DHA_NAME'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_MAILING_ADDRESS'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_CITY'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_STATE'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_ZIP'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_BUSINESS_PHONE'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_FAX'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_COMPANY_WEBSITE'] ?>:</label>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_PROVIDER_QUESTION'] ?></label>
					<div class="span4 row">
						<div class="span1">
							
							<input type="radio" name="Yes" value="Yes" class="radio" /> <br><?php echo $lang['APPLY_PROVIDER_QUESTION_YES'] ?>
						</div>
						<div class="span1">
							<input type="radio" name="No" value="No" class="radio" /> <br><?php echo $lang['APPLY_PROVIDER_QUESTION_NO'] ?>
						</div>
					</div>	
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_PROVIDER_QUESTION_BOOL'] ?></label><br>
				<input class="span4 apply">
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_CONTACT_NAME'] ?>:</label>
				<input class="span4 apply">
				</div>		

				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_CONTACT_PHONE'] ?>:</label>
				<input class="span4 apply">
				</div>	

				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_CONTACT_EMAIL'] ?>:	</label>
				<input class="span4 apply">
				</div>	

				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_BEST_TIME_TO_CALL'] ?>:</label>
					<div class="span4 row">
						<div class="span1">	
							<input type="radio" name="Yes" value="Yes" class="radio" /> <br><?php echo $lang['APPLY_BEST_MORNING'] ?>
						</div>
						<div class="span1">
							<input type="radio" name="No" value="No" class="radio" /> <br><?php echo $lang['APPLY_BEST_AFTERNOON'] ?>	
						</div>

							<div class="span1">
							<input type="radio" name="No" value="No" class="radio" /> <br><?php echo $lang['APPLY_BEST_EVENING'] ?>
						</div>
					</div>	
				</div>	
				
				<div class="row">
				<label class="span3"><?php echo $lang['APPLY_QUESTIONS'] ?></label>
				<textarea class="span4 apply"></textarea>
				</div>
				
				
					   <div  class="row" id="recaptcha_widget">
					 		

					 		<div class="span6">
					 			<div class="span3" id="recaptcha_image"></div>
					 			<div class="recaptcha_only_if_incorrect_sol" style="color:red"><?php echo $lang['CAPTCHA_ERROR'] ?></div>
							    <span class="recaptcha_only_if_image"><?php echo $lang['CAPTCHA_ENTER_WORDS'] ?>:</span>
							    <span class="recaptcha_only_if_audio"><?php echo $lang['CAPTCHA_ENTER_AUDIO'] ?>:</span>
					 		</div>
							   
							 <div class="span4">
					 			<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

					 			<div>
					 				<a href="javascript:Recaptcha.reload()"><?php echo $lang['CAPTCHA_GET_ANOTHER_WORD'] ?>:</a>
					 			</div>

							  	<div class="recaptcha_only_if_image">
							  	 	<a href="javascript:Recaptcha.switch_type('audio')"><?php echo $lang['CAPTCHA_GET_AUDIO'] ?></a>
							  	 </div>

							    <div class="recaptcha_only_if_audio">
							    	<a href="javascript:Recaptcha.switch_type('image')"><?php echo $lang['CAPTCHA_GET_IMAGE'] ?></a>
							    </div>

							   <div>
							 	    <a href="javascript:Recaptcha.showhelp()"><?php echo $lang['CAPTCHA_HELP'] ?></a>
							   </div>
					 		</div>  

							   

							   

							 </div>

							 <script type="text/javascript"
							    src="http://www.google.com/recaptcha/api/challenge?k=6Lfzf8wSAAAAAMAOrVDKpHhcvCf4GkqQp3DNWydB">
							 </script>
							 <noscript>
							   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Lfzf8wSAAAAAMAOrVDKpHhcvCf4GkqQp3DNWydB"
							        height="300" width="500" frameborder="0"></iframe><br>
							   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
							   </textarea>
							   <input type="hidden" name="recaptcha_response_field"
							        value="manual_challenge">
							 </noscript>
		
				<input type="submit" class="btn danger" value="<?php echo $lang['APPLY_SUBMIT'] ?>">	
			</form>
					
		</div>
</div>	

<?php 
//include footer.php
include_once('includes/footer.php');
?>