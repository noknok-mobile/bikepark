	<?require($_SERVER['DOCUMENT_ROOT'].'/header.php');?>

	<section class="b-filter">
		<div class="b-container">
			<div class="sect-gray">
				<div class="filter-head">
					<h1 class="filter-head__title">Аренда велосипедов<br> c доставкой</h1>
					<div class="filter-head__gift">
						<div class="gift">
							<div class="gift-item gift-item_1">
								<div class="gift-item__img"><img class="gift-img" src="img/gift_1.png" alt="gift_1"/></div>
								<div class="gift-item__title">Шлем</div>
								<div class="gift-item__text">Бесплатно</div>
							</div>
							<div class="gift-item gift-item_2">
								<div class="gift-item__img"><img class="gift-img" src="img/gift_2.png" alt="gift_2"/></div>
								<div class="gift-item__title">Фонарик</div>
								<div class="gift-item__text">Бесплатно</div>
							</div>
							<div class="gift-item gift-item_3">
								<div class="gift-item__img"><img class="gift-img" src="img/gift_3.png" alt="gift_3"/></div>
								<div class="gift-item__title">Замок</div>
								<div class="gift-item__text">Бесплатно</div>
							</div>
						</div>
					</div>
				</div>
				<div class="filter-parametr">
					<div class="parametrs">
						<div class="parametrs-item">
							<div class="parametrs-item__title">Тип аренды</div>
							<div class="parametrs-item__check">
								<div class="p-check_wrap">
									<input class="p-check__radio" type="radio" name="param__arend" id="param__arend1" checked value="" />
									<label class="p-check" for="param__arend1">
										<span class="p-check__text">По дням</span>
									</label>
									<input class="p-check__radio" type="radio" name="param__arend" id="param__arend2" value="" />
									<label class="p-check" for="param__arend2">
										<span class="p-check__text">2 часа</span>
									</label>
									<div class="naveden"></div>
								</div>
							</div>
						</div>
						<div class="parametrs-item parametrs-item_delivery">
							<div class="parametrs-item__title">Доставка</div>
							<div class="parametrs-item__select">
								<select name="param__delivery" class="b-select chosen-select">
									<option>По адресу</option>
									<option>Самовывоз</option>
								</select>
							</div>
						</div>
						<div class="parametrs-item parametrs-item_date" id="two-inputs">
							<div class="parametrs-item__data">
								<div class="parametrs-item__title">Дата и время начала</div>
								<div class="parametrs-item__range"><input id="date-range200" type="text" class="date-range" size="20" value="14.07.2021 22:22"></div>
							</div>
							<div class="tire">—</div>
							<div class="parametrs-item__data">
								<div class="parametrs-item__title">Дата и время конца</div>
								<div class="parametrs-item__range"><input id="date-range201" type="text" class="date-range" size="20" value="16.07.2021 19:51"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="b-ftype">
		<div class="b-container">
			<div class="ftype sect-gray sect-perehoc">
				<div class="ftype__title">Тип велосипеда</div>
				<div class="mob-hand"></div>
				<div class="fbike_scrol">
					<div class="fbike-wrap">
						<div class="ftype__fbike">
							<div class="fbike">
								<div class="fbike-item">
									<div class="fbike-item__img"><img class="fbike-img" src="img/fbike_1.png" alt="fbike_1"/></div>
									<div class="fbike-item__info">
										<div class="fbike-item__title">Алюминий</div>
										<div class="finfo">
											<div class="price">90 AED</div>
											<div class="finfo__fbut">
												<div class="fbut">
													<div class="fbut__question">
														<a class="question but-qvad"></a>
														<div class="hint">Легкие, надежные и легко управляются. Возможны вибрации из-за неровностей дороги.</div>
													</div>
													<div class="fbut__plus">
														<input type="checkbox" class="checkbox" id="plus1">
														<label class="plus but-qvad" for="plus1"></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fbike-item">
									<div class="fbike-item__img"><img class="fbike-img" src="img/fbike_2.png" alt="fbike_2"/></div>
									<div class="fbike-item__info">
										<div class="fbike-item__title">Карбон</div>
										<div class="finfo">
											<div class="price">180 AED</div>
											<div class="finfo__fbut">
												<div class="fbut">
													<div class="fbut__question">
														<a class="question but-qvad"></a>
														<div class="hint">Легкие, надежные и легко управляются. Возможны вибрации из-за неровностей дороги.</div>
													</div>
													<div class="fbut__plus">
														<input type="checkbox" class="checkbox" id="plus2">
														<label class="plus but-qvad" for="plus2"></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fbike-item">
									<div class="fbike-item__img"><img class="fbike-img" src="img/fbike_1.png" alt="fbike_1"/></div>
									<div class="fbike-item__info">
										<div class="fbike-item__title">Горный/городской</div>
										<div class="finfo">
											<div class="price">90 AED</div>
											<div class="finfo__fbut">
												<div class="fbut">
													<div class="fbut__question">
														<a class="question but-qvad"></a>
														<div class="hint">Легкие, надежные и легко управляются. Возможны вибрации из-за неровностей дороги.</div>
													</div>
													<div class="fbut__plus">
														<input type="checkbox" class="checkbox" id="plus3">
														<label class="plus but-qvad" for="plus3"></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fbike-item">
									<div class="fbike-item__img"><img class="fbike-img" src="img/fbike_1.png" alt="fbike_1"/></div>
									<div class="fbike-item__info">
										<div class="fbike-item__title">Городской эконом</div>
										<div class="finfo">
											<div class="price">45 AED</div>
											<div class="finfo__fbut">
												<div class="fbut">
													<div class="fbut__question">
														<a class="question but-qvad"></a>
														<div class="hint">Легкие, надежные и легко управляются. Возможны вибрации из-за неровностей дороги.</div>
													</div>
													<div class="fbut__plus">
														<input type="checkbox" class="checkbox" id="plus4">
														<label class="plus but-qvad" for="plus4"></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="b-submit ftype_submit">
					<input class="b-button button_fill button_big b-button_submit" type="submit" value="Найти">
				</div>
			</div>
		</div>
	</section>

	<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>