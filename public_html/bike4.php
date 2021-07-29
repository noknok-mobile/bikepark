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
							<div class="form-line"><input type="text" class="input" value="Александр" /></div>
						</div>
						<div class="sub-info">
							<div class="sub-info__text">Номер телефона</div>
							<div class="form-line"><input type="text" class="input" value="999 999 999" /></div>
						</div>
					</div>
					<div class="col4-item mob-marg">
						<div class="sub-info">
							<div class="sub-info__text">E-mail</div>
							<div class="form-line"><input type="text" class="input" value="example@gmail.com" /></div>
						</div>
						<div class="sub-info">
							<div class="sub-info__text">Адрес доставки</div>
							<div class="form-line"><input type="text" class="input" value="г. А, ул. АБВГ, д. 1" /></div>
						</div>
					</div>
					<div class="col4-item col4-item_pass">
						<h2 class="pass-mob">Изменение пароля</h2>
						<div class="lk-col mob-marg lk-changepass">
							<div class="sub-info sub-info_col6">
								<div class="sub-info__text">Пароль</div>
								<div class="form-line form-line_pass"><input type="password" class="input" value="123456" /><a class="password-control" href="#"></a></div>
							</div>
							<div class="sub-info sub-info_col6">
								<div class="sub-info__text">Старый пароль</div>
								<div class="form-line form-line_pass"><input type="password" class="input" value="123456" /><a class="password-control" href="#"></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="lk-leftbutton">
					<input type="submit" class="b-button button_fill button_big b-button_submit b-button_save" value="Сохранить" />
				</div>
			</div>
		</div>
	</section>



<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>