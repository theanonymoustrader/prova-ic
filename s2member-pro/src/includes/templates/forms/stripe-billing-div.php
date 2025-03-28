<?php
// @codingStandardsIgnoreFile
if(!defined('WPINC')) // MUST have WordPress.
	exit("Do not access this file directly.");
?>

	<div id="s2member-pro-stripe-form-billing-method-section" class="s2member-pro-stripe-form-section s2member-pro-stripe-form-billing-method-section">
		<div id="s2member-pro-stripe-form-billing-method-section-title" class="s2member-pro-stripe-form-section-title s2member-pro-stripe-form-billing-method-section-title">
			<?php
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if($actual_link == "https://iclassical-academy.com/registration-lifetime-stripe/")
			{
						//echo _x("Checkout - To pay with Paypal, click <a href='javascript:salva_dati_per_pp();'>here.</a>", "s2member-front", "s2member");
                                               echo _x("Checkout.", "s2member-front", "s2member");
			}
			else{
					echo _x("Insert your new card", "s2member-front", "s2member");
			}
			?>
		</div>
		<label for="s2member-pro-stripe-form-card-element" id="s2member-pro-stripe-form-card-element-label" class="s2member-pro-stripe-form-card-element-label">
			<?php echo _x("Credit or debit card accepted", "s2member-front", "s2member"); ?>
		</label>
		<div id="s2member-pro-stripe-form-card-element" style='color:white;'>
			<!-- A Stripe Element will be inserted here. -->
		</div>

		<!-- Used to display Element errors. -->
		<div id="s2member-pro-stripe-form-card-errors" role="alert"></div>

		<!-- Update with IDs -->
		<input type="hidden" id="s2member-pro-stripe-form-pm-id" name="stripe_pm_id" value="" />
		<input type="hidden" id="s2member-pro-stripe-form-pi-id" name="stripe_pi_id" value="" />
		<input type="hidden" id="s2member-pro-stripe-form-seti-id" name="stripe_seti_id" value="" />
		<input type="hidden" id="s2member-pro-stripe-form-sub-id" name="stripe_sub_id" value="%%sub_id%%" />
		<input type="hidden" id="s2member-pro-stripe-form-pi-secret" name="stripe_pi_secret" value="%%pi_secret%%" />
		<input type="hidden" id="s2member-pro-stripe-form-seti-secret" name="stripe_seti_secret" value="%%seti_secret%%" />

		<div id="s2member-pro-stripe-checkout-form-source-token-summary" class="s2member-pro-stripe-form-source-token-summary s2member-pro-stripe-checkout-form-source-token-summary">
				<!--%%source_token_summary%%-->
		</div>
		<div style="clear:both;"></div>
	</div>

	<style>
		#s2member-pro-stripe-form-card-element {border: 1px solid #b6b6b3; border-radius: 4px; padding: 10px 13px; color:white;}
		#s2member-pro-stripe-form-card-errors {color: #ffffff;}
		.s2member-pro-stripe-form-disabled {opacity: .5;}
	</style>
<script>
	function salva_dati_per_pp()
	{
		// invio dati alla pagina form di paypal
		  console.log("running paypayl");
			var nome = document.getElementById("s2member-pro-stripe-checkout-first-name").value;
			var cognome = document.getElementById("s2member-pro-stripe-checkout-last-name").value;
			var password = document.getElementById("s2member-pro-stripe-checkout-password1").value;

			var e2 = document.getElementById("s2member-pro-stripe-checkout-options");
			var piano_scelto = e2.options[e2.selectedIndex].value;

			var email = document.getElementById("s2member-pro-stripe-checkout-email").value;
			var username = document.getElementById("s2member-pro-stripe-checkout-username").value;
			var musical_background = document.getElementById("s2member-pro-stripe-checkout-custom-reg-field-maingoals").value;
			var strumento_scelto;
			var promo_code = document.getElementById("s2member-pro-stripe-checkout-coupon").value;
			var radios = document.getElementsByName('s2member_pro_stripe_checkout[custom_fields][instrument]');

			for (var i = 0, length = radios.length; i < length; i++) {
					if (radios[i].checked) {
							// do whatever you want with the checked radio
							//alert(radios[i].value);
							strumento_scelto = radios[i].value;

							// only one radio can be logically checked, don't check the rest
							break;

				}
			}

			localStorage.setItem("first_name", nome);
			localStorage.setItem("second_name", cognome);
					localStorage.setItem("password", password);
			localStorage.setItem("email", email);
			localStorage.setItem("username", username);
			localStorage.setItem("piano_scelto", piano_scelto);

				localStorage.setItem("musical_background", musical_background);

			localStorage.setItem("strumento", strumento_scelto);
			localStorage.setItem("coupon", promo_code);

			var dominio = "<?php echo $_SERVER['HTTP_HOST']; ?>";
			window.location.assign("https://iclassical-academy.com/join-us-paypal/");


	}
</script>
		