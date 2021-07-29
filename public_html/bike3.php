<?require($_SERVER['DOCUMENT_ROOT'].'/header.php');?>

	<section>
		<div class="b-container">
			<div class="sect-gray">
				<h1 class="other-page h1_lk">Личный кабинет</h1>
				
				<div class="lk-burger">
					<div class="burger-arrow"><b><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.99944 8L9.99944 13L14.9994 8" stroke="#297FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></b></div>
					<div class="lk-menu lk-tab3">
						<div class="lk-menu__tab"><a class="lk-menu__link" href="#">Текущие заказы</a></div>
						<div class="lk-menu__tab"><a class="lk-menu__link" href="#">Выполненные заказы</a></div>
						<div class="lk-menu__tab"><a class="lk-menu__link lk-menu_active" href="#">Личные данные</a></div>
					</div>
				</div>
				<div class="block-col">
					<div class="col4-item">
						<div class="sub-info">
							<div class="sub-info__text">Имя</div>
							<div class="sub-info__value">Александр</div>
						</div>
						<div class="sub-info">
							<div class="sub-info__text">Номер телефона</div>
							<div class="sub-info__value">999 999 999</div>
						</div>
					</div>
					<div class="col4-item mob-marg">
						<div class="sub-info">
							<div class="sub-info__text">E-mail</div>
							<div class="sub-info__value">example@gmail.com</div>
						</div>
						<div class="sub-info">
							<div class="sub-info__text">Адрес доставки</div>
							<div class="sub-info__value">г. А, ул. АБВГ, д. 1</div>
						</div>
					</div>
					<div class="col4-item col4-item_pass mob-marg">
						<div class="lk-col lk-changepass">
							<div class="sub-info sub-info_col6">
								<div class="sub-info__text">Пароль</div>
								<div class="sub-info__value">*************</div>
							</div>
							<div class="sub-info sub-info_col6 pass_hide">
							</div>
						</div>
					</div>
				</div>
				<div class="lk-leftbutton">
					<a class="b-button button_fill button_big b-button_edit">Редактировать</a>
				</div>
			</div>
		</div>
	</section>



<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>