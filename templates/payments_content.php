<div class="payment">
	<div class="payment_box">

		<h2>Välj ett betalsätt</h2>

		<form>
			<div class="radio_div">
				<input type="radio" name="payment" value="" class="radio"/>
				<p class="big_text">Faktura</p>
				<p class="medium_text">Klubbkortsnummer:</p>
				<input type="text" name="clubnr" placeholder="xxxx-xxxx-xxxx-5434" size="25" class="input_text" />
			</div>
			<div class="radio_div">
				<input type="radio" name="payment" value="" class="radio"/>
				<p class="big_text">Betala i kassan</p>
				<p class="medium_text">Inget klubbkort behövs <br/>
				Betala kontant eller med kort
				</p>
			</div>
		</form>
	</div>


	<div class="information_box">

		<h2>Din information</h2>

		<form>
			<div class="info">
				Name: <input type="text" name="name" placeholder="Epsilon" class="input_text" />
				Address:<input type="text" name="address" placeholder="epsilonvägen 13" class="input_text" />
				Postnummer: <input type="text" name="postnr" placeholder="133 77 Stockholm" class="input_text" />
			</div>
			<div class="info">
				Email:<input type="text" name="email" placeholder="epsilon@gmail.com" class="input_text" />
				Upprepa email:<input type="text" name="email2" placeholder="073 133 777" class="input_text" />
				Telefonnr:<input type="text" name="tel" placeholder="073 133 777" class="input_text" />
				
			</div>
		</form>
		<p>Bekräfta ditt köp</p>
		<a href="<?php echo get_page_link(42); ?>"><i class="fa fa-chevron-right fa-2x"></i></a>

	</div>
	
</div>