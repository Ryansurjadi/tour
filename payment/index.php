<!DOCTYPE html>
<!-- By Designscrazed.com , just a structure for easy usage. -->

<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <title>
        Sample Page by Designscrazed.com
    </title>

    <link rel="stylesheet" type="text/css" href="style.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="headline">

                        <h6></h6>

                        <h1 style="font-size: 250%;">
                        	- PAYMENT GATEWAY -
                            <h6></h6>
                        </h1>
                        <h2>PERGI PERGI</h2>

                    </div>

<!--  Start here -->

<body>
<div id="wrap">
	<div id="accordian">
		<div class="step" id="step1">
			<div class="number">
				<span>1</span>
			</div>
			<div class="title">
				<h1>Contact Information</h1>
			</div>

		</div>
		<div class="content" id="email">
			<form class="go-right" style="padding-left:30px;">
        <div>
          <input type="text" name="nama" value="" id="email-address" placeholder="Name" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter a valid Name."/><label for="text">Name</label>
        </div>
            <br>
  			<div>
          <input type="email" name="email" value="" id="email-address" placeholder="Email Address" data-trigger="change" data-validation-minlength="1" data-type="email" data-required="true" data-error-message="Enter a valid email address."/><label for="email">Email Address</label>
        </div>
            <br>
        <div>
          <input type="text" name="telephone" value="" id="email-address" placeholder="Mobile Number" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter a valid phone number."/><label for="text">Mobile Number</label>
        </div>

			</form>
		</div>

		<div class="step" id="step2">
			<div class="number">
				<span>2</span>
			</div>
			<div class="title">
				<h1>Traveler Information</h1>
			</div>
		</div>
		<div class="content" id="address">
			<form class="go-right" style="padding-left:30px;">
				<div>
				<label for="nama">Full Name</label>
				<input type="name" name="nama_tiket" value="" id="last_name" placeholder="Name as on ID card" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Name"/><label for="last_name">Name</label>
				</div>
<br>
        <div>

				<input type="text" name="no_ktp" value="" id="telephone" placeholder="ID number" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Identity Number"/><label for="telephone">ID</label>
				</div>
<br>
    		<div>
				<input type="text" name="adress1" value="" id="address" placeholder="Address1" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="false"/><label for="Company">Address1</label>
				</div>

				<div>
				<input type="text" name="address2" value="" id="address" placeholder="Address2" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Address"/><label for="Address">Address2</label>
				</div>
<br>
    		<div>
				      <input type="text" name="city" value="" id="city" placeholder="City" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your City"/><label for="city">City</label>
				</div>
<br>
				<div>
				      <input type="text" name="zip" value="" id="zip" placeholder="Zipcode" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Zip Code"/><label for="zip">Zip Code</label>
				</div>
<br>
				<div>
			        <input type="text" name="negara" value="" id="city" placeholder="Country" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Country"/><label for="country">Country</label>
				</div>
			</form>
		</div>


		<div class="step" id="step3">
			<div class="number">
				<span>3</span>
			</div>
			<div class="title">
				<h1>Payment Information</h1>
			</div>
			
		</div>
		<div class="content" id="payment">
			<div class="left credit_card">
			<form class="go-right" style="padding-left:30px;">
				<div>
				<input type="text" name="card_number" value="" id="card_number" placeholder="Card Number" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/><label for="card_number">Card Number</label>
				</div>
				<div>
				  <div class="expiry">
				      <div class="month_select">
				        <select name="exp_month" value="" id="exp_month" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
							<option value = "1">01 (Jan)</option>
                   			<option value = "2">02 (Feb)</option>
                   			<option value = "3">03 (Mar)</option>
                   			<option value = "4">04 (Apr)</option>
                   			<option value = "5">05 (May)</option>
                   			<option value = "6">06 (Jun)</option>
                   			<option value = "7">07 (Jul)</option>
                   			<option value = "8">08 (Aug)</option>
                   			<option value = "9">09 (Sep)</option>
                   			<option value = "10">10 (Oct)</option>
                   			<option value = "11">11 (Nov)</option>
                   			<option value = "12">12 (Dec)</option>
                        </select>
                      </div>
                      <span class="divider">-</span>
                      <div class="year_select">
				        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
							<option value = "1">2018 </option>
                   			<option value = "2">2019</option>
                   			<option value = "3">2020 </option>
                   			<option value = "4">2021 </option>
                   			<option value = "5">2022 </option>
                   			<option value = "6">2023 </option>
                   			<option value = "7">2024 </option>
                        </select>
            	      </div>
            	    </div>
                 <label class="exp_date" for="Exp_Date">Exp Date</label>
            	  </div>
            	<div class="sec_num">
              <div>
				        <input type="text" name="ccv" value="" id="ccv" placeholder="Cvv" data-trigger="change" data-validation-minlength="3" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code"/>
                <label for="ccv">Security Code</label>
				      </div>
				      </div>
			      </form>
			</div>
			<div class="right">
				<div class="accepted">
					<span><img src="img/Z5HVIOt.png"></span>
					<span><img src="img/Le0Vvgx.png"></span>
					<span><img src="img/D2eQTim.png"></span>
					<span><img src="img/Pu4e7AT.png"></span>
					<span><img src="img/ewMjaHv.png"></span>
					<span><img src="img/3LmmFFV.png"></span>
				</div>
				<div class="secured">
					<img class="lock" src="img/lock.png">
					<p class="security info">What, well you mean like a date? Doc? Am I to understand you're still hanging around with Doctor Emmett Brown, McFly? Tardy slip for you, Miss Parker. And one for you McFly I believe that makes four in a row. Now let me give you a nickle's worth of advice, young man. This so called Doctor Brown is dangerous, he's a real nuttcase.</p>
				</div>
			</div>

 		</div>
 		<div class="step" id="step5">
			<div class="number">
				<span>5</span>
			</div>
			<div class="title">
				<h1>Review Order</h1>
			</div>
		</div>
		<div class="content" id="final_products">
			<div class="left" id="ordered">
				<div class="products">
					<div class="product_image">
						<img src="img/ticket.jpg"/>
					</div>
					<div class="product_details">
						<span class="product_name" style="margin-left:30px; padding-left:50px;">  Flight Ticket</span>
						<span class="quantity" style="margin-left:30%; padding-left:70%;">1</span>
						<span class="price"><?php ?></span>
					</div>
				</div>
				<div class="totals">
					<span class="subtitle">Subtotal <span id="sub_price">$45.00</span></span>
					<span class="subtitle">Tax <span id="sub_tax">$2.00</span></span>
					<span class="subtitle">Shipping <span id="sub_ship">$4.00</span></span>
				</div>
				<div class="final">
					<span class="title">Total <span id="calculated_total">$51.00</span></span>
				</div>
			</div>
			<div class="right" id="reviewed">
				<div class="billing">
					<span class="title">Contact Information</span>
					<div class="address_reviewed">
						<span class="name">John Smith</span>
						<span class="address">123 Main Street</span>
						<span class="location">Everytown, USA, 12345</span>
						<span class="phone">(123)867-5309</span>
					</div>
				</div>
				<div class="shipping">
					<span class="title">Ticket Information:</span>
					<div class="address_reviewed">
						<span class="name">John Smith</span>
						<span class="address">123 Main Street</span>
						<span class="location">Everytown, USA, 12345</span>
						<span class="phone">(123)867-5309</span>
					</div>
				</div>
				<div class="payment">
					<span class="title">Payment:</span>
					<div class="payment_reviewed">
						<span class="method">Visa</span>
						<span class="number_hidden">xxxx-xxxx-xxxx-1111</span>
					</div>
				</div>
				<div id="complete">
				<a class="big_button" id="complete" href="#">Complete Order</a>
				<span class="sub">By selecting this button you agree to the purchase and subsequent payment for this order.</span>
			</div>


</div>

</body>

</body>
</html>
