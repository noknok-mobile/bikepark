<?require($_SERVER['DOCUMENT_ROOT'].'/header.php');?>

	<section>
		<div class="b-container">
			<div class="sect-gray sect-done">
				<h1 class="other-page other-page_order">Ваш заказ успешно оформлен</h1>
				<div class="order-info">
					<div class="sub-info order-info__item">
						<div class="sub-info__text">Тип аренды</div>
						<div class="sub-info__value">По дням</div>
					</div>
					<div class="sub-info order-info__item order-info_order1">
						<div class="sub-info__text">Дата и время начала</div>
						<div class="sub-info__value">24.07.211 12:00</div>
					</div>
					<div class="sub-info order-info__item order-info_order2">
						<div class="sub-info__text">Дата и время конца</div>
						<div class="sub-info__value">25.07.21 12:00</div>
					</div>
					<div class="sub-info order-info__item">
						<div class="sub-info__text">Доставка</div>
						<div class="sub-info__value">По адресу</div>
					</div>
					<div class="sub-info order-info__item order-info_order3">
						<div class="sub-info__text">Метод оплаты</div>
						<div class="sub-info__value">Онлайн</div>
					</div>
				</div>
				<div class="order-table order-table_done">
					<div class="order-items order-line_title">
						<div class="order-imgname">
							<div class="sub-text order-item order-item_img"></div>
							<div class="sub-text order-item order-item_namecheck">Название велосипедов</div>
						</div>
						<div class="sub-text order-item order-item_price text-right">Стоимость</div>
					</div>
					<div class="order-items">
						<div class="order-imgname">
							<div class="order-item order-item_img">
								<div class="table-img"><img src="/img/demo_order.jpg" alt="demo_order"></div>
							</div>
							<div class="order-item order-item_namecheck">Городской велосипед бренда фирмы Schwinn модель Traveler 20”</div>
						</div>
						<div class="order-item order-item_price order-item_stoimost text-right"><div class="price price_order">180 AED</div></div>
					</div>
					<div class="order-items">
						<div class="order-imgname">
							<div class="order-item order-item_img">
								<div class="table-img"><img src="/img/demo_order.jpg" alt="demo_order"></div>
							</div>
							<div class="order-item order-item_namecheck">Городской велосипед бренда фирмы Schwinn модель Traveler 20”</div>
						</div>
						<div class="order-item order-item_price order-item_stoimost text-right"><div class="price price_order">180 AED</div></div>
					</div>
				</div>
				<div class="order-total">
					<div class="order-ship">
						<div class="order-ship__line">
							<div class="sub-text">Доставка</div>
							<div class="order-ship__value text-right"><div class="price price_ship">0 AED</div></div>
						</div>
						<div class="order-ship__line">
							<div class="sub-text">Итого</div>
							<div class="order-ship__value text-right"><div class="price">360 AED</div></div>
						</div>
					</div>
					<div class="order-total__back"></div>
				</div>
				<div class="order-link center">
					<a class="b-button button_fill button_big b-button_order">В личный кабинет</a>
					<a class="b-button button_space button_big b-button_order">Назад на главную</a>
				</div>
			</div>
		</div>
	</section>



<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>