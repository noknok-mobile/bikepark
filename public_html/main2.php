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
								<div class="parametrs-item__range"><input id="date-range200" type="text" class="date-range" size="20" value="14.07.2021 19:51"></div>
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
				<div class="fbike_scrol">
					<div class="mob-hand"></div>
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
	
	<section class="b-result">
		<div class="b-container">
			<div class="result sect-gray sect-perehoc">
				<div class="result-parametr">
					<div class="parametrs">
						<div class="parametrs-item">
							<div class="parametrs-item__title">Бренд</div>
							<div class="parametrs-item__select">
								<select name="param__brand" class="b-select chosen-select">
									<option>Все</option>
									<option>Бренд</option>
								</select>
							</div>
						</div>
						<div class="parametrs-item">
							<div class="parametrs-item__title">Размер рамы</div>
							<div class="parametrs-item__select">
								<select name="param__rama" class="b-select chosen-select">
									<option>Все</option>
									<option>Рама</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			
				<div class="result-rbike">
					<div class="rbike">
						<div class="rbike-wrap">
							<div class="rbike-item">
								<div class="rbike-item__head">
									<div class="rbike-item__rama">20”</div>
									<div class="rbike-item__brand">SCHWINN</div>
								</div>
								<div class="rbike-item__img"><img class="rbike-img" src="img/rbike_1.png" alt="rbike_1"/></div>
								<div class="rbike-item__descr">Городской велосипед Schwinn Traveler 20”</div>
								<div class="price">90 AED/день</div>
								<a class="rbike-item__link b-button button_space" href="#">выбрать</a>
							</div>
						</div>
						<div class="rbike-wrap rbike-wrap_disable">
							<div class="rbike-item rbike-item_busy">
								<div class="rbike-item__head">
									<div class="rbike-item__rama">20”</div>
									<div class="rbike-item__brand">SCHWINN</div>
								</div>
								<div class="rbike-item__img"><img class="rbike-img" src="img/rbike_1.png" alt="rbike_1"/></div>
								<div class="rbike-item__descr">Городской велосипед Schwinn Traveler 20”</div>
								<div class="price">90 AED/день</div>
								<div class="rbike-busy">
									<a class="rbike-busy__date" href="#popup-freedate" name="modal">Посмотреть свободные даты</a>
									<a class="rbike-busy__link b-button button_gray" href="#">занят</a>
								</div>
							</div>
						</div>
						<div class="rbike-wrap">
							<div class="rbike-item">
								<div class="rbike-item__head">
									<div class="rbike-item__rama">20”</div>
									<div class="rbike-item__brand">SCHWINN</div>
								</div>
								<div class="rbike-item__img"><img class="rbike-img" src="img/rbike_1.png" alt="rbike_1"/></div>
								<div class="rbike-item__descr">Городской велосипед Schwinn Traveler 20”</div>
								<div class="price">180 AED/день</div>
								<a class="rbike-item__link b-button button_fill button_take" href="#"><span class="take-yes">выбрано</span><span class="take-no">Отменить выбор</span></a>
							</div>
						</div>
						<div class="rbike-wrap">
							<div class="rbike-item">
								<div class="rbike-item__head">
									<div class="rbike-item__rama">20”</div>
									<div class="rbike-item__brand">SCHWINN</div>
								</div>
								<div class="rbike-item__img"><img class="rbike-img" src="img/rbike_1.png" alt="rbike_1"/></div>
								<div class="rbike-item__descr">Городской велосипед Schwinn Traveler 20”</div>
								<div class="price">90 AED/день</div>
								<a class="rbike-item__link b-button button_fill button_take" href="#"><span class="take-yes">выбрано</span><span class="take-no">Отменить выбор</span></a>
							</div>
						</div>
						<div class="rbike-wrap">
							<div class="rbike-item">
								<div class="rbike-item__head">
									<div class="rbike-item__rama">20”</div>
									<div class="rbike-item__brand">SCHWINN</div>
								</div>
								<div class="rbike-item__img"><img class="rbike-img" src="img/rbike_1.png" alt="rbike_1"/></div>
								<div class="rbike-item__descr">Городской велосипед Schwinn Traveler 20”</div>
								<div class="price">90 AED/день</div>
								<a class="rbike-item__link b-button button_fill button_take" href="#"><span class="take-yes">выбрано</span><span class="take-no">Отменить выбор</span></a>
							</div>
						</div>
						<div class="rbike-wrap">
							<div class="rbike-item">
								<div class="rbike-item__head">
									<div class="rbike-item__rama">20”</div>
									<div class="rbike-item__brand">SCHWINN</div>
								</div>
								<div class="rbike-item__img"><img class="rbike-img" src="img/rbike_1.png" alt="rbike_1"/></div>
								<div class="rbike-item__descr">Городской велосипед Schwinn Traveler 20”</div>
								<div class="price">90 AED/день</div>
								<a class="rbike-item__link b-button button_fill button_take" href="#"><span class="take-yes">выбрано</span><span class="take-no">Отменить выбор</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="b-submit b-submit_result">
					<input class="b-button b-button_submit button_fill button_big" type="submit" value="Далее">
				</div>
			</div>
		</div>
	</section>
	
	<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>