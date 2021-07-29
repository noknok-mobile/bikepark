<?require($_SERVER['DOCUMENT_ROOT'].'/header.php');?>

	<section>
		<div class="b-container">
			<div class="sect-gray">
				<h1 class="other-page">Продление аренды</h1>
				<div class="filter-parametr filter_prodlen">
					<div class="parametrs parametr_prodlen">
						<div class="parametrs-item_100">
							<div class="parametrs-item parametrs-item_date ">
								<div class="parametrs-item__data">
									<div class="parametrs-item__title">Дата и время начала</div>
									<div class="parametrs-item__range"><input id="date-range200" readonly disabled class="date-range" size="20" value="14.07.2021 19:51"></div>
								</div>
								<div class="tire">—</div>
								<div class="parametrs-item__data">
									<div class="parametrs-item__title">Дата и время конца</div>
									<div class="parametrs-item__range"><input id="inputssingle" class="date-range" size="20" value="16.07.2021 19:51"></div>
								</div>
							</div>
						</div>
						<div class="parametrs-item parametrs-item_100">
							<div class="sub-info__text">Форма оплаты</div>
							<div class="form-line form-line_radio">
								<div class="form-radio form-radio_margbot form-radio_checkout">
									<input type="radio" checked="" name="radio" class="radio" id="radio1">
									<label class="label-radio label-radio_checkout" for="radio1">
										<span class="radiokrug"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15.5" stroke="#DDE3EB"></circle><circle cx="15.9999" cy="15.9997" r="10.6667" fill="currentcolor"></circle></svg></span>
										Онлайн
									</label>
								</div>
								<div class="form-radio form-radio_checkout">
									<input type="radio" name="radio" class="radio" id="radio2">
									<label class="label-radio label-radio_checkout" for="radio2">
										<span class="radiokrug"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15.5" stroke="#DDE3EB"></circle><circle cx="15.9999" cy="15.9997" r="10.6667" fill="currentcolor"></circle></svg></span>
										На месте
										<div class="radio-question">
											<a class="question but-qvad" href="#" tabindex="0"></a>
											<div class="hint hint_radio">Легкие, надежные и легко управляются. Возможны вибрации из-за неровностей дороги.</div>
										</div>
									</label>
								</div>
							</div>
						</div>
						<div class="parametrs-item parametrs-item_50">
							<div class="parametrs-item__title">Сумма доплаты</div>
							<div class="price">0 AED</div>
						</div>
						<div class="parametrs-item parametrs-item_50">
						</div>
						<div class="parametrs-item parametrs-item_50 prodlen-link">
							<a class="b-button button_gray button_big b-button_prodlen">Продлить</a>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>



<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>