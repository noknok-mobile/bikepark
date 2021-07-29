	<footer class="footer">
		<div class="b-container">
			<div class="footer-top">
				<div class="arend">
					<div class="arend__title">Аренда велосипедов</div>
					<ul class="arend-menu">
						<li class="arend-menu__li"><a class="arend-menu__link" href="#">Алюминий</a></li>
						<li class="arend-menu__li"><a class="arend-menu__link" href="#">Карбон</a></li>
						<li class="arend-menu__li"><a class="arend-menu__link" href="#">Горные/городские</a></li>
						<li class="arend-menu__li"><a class="arend-menu__link" href="#">Городские эконом</a></li>
					</ul>
				</div>
				<div class="footer-menu">
					<div class="b-menu b-menu_fmenu">
						<a class="b-link b-link_fmenu f-link" href="#">Правила</a>
						<a class="b-link b-link_fmenu f-link" href="#">Отзывы</a>
						<a class="b-link b-link_fmenu f-link" href="#">Контакты</a>
						<a class="b-link b-link_fmenu f-link" href="#">Обратная связь</a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom__copir">&copy; BikePark, 2021</div>
				<a class="footer-bottom__privacy f-link" href="#">Политика конфиденциальности</a>
				<div class="footer-socials">
					<div class="socials">
						<a class="socials__link" href="#"><img class="socials__img" src="img/facebook.svg" alt="facebook"></a>
						<a class="socials__link" href="#"><img class="socials__img" src="img/instagram.svg" alt="instagram"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
		<!------------------Всплывающее Обратная связь---------------!-->
		<div id="popup-callback" class="popup-window">
			<a href="#" class="popup-close"/><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.6377 1.54594L1.54585 20.6378M1.54585 1.54594L20.6377 20.6378" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg></a>
			<div class="popup-content">
				<div class="popup-title">Есть вопросы? Оставьте номер, и мы всё обсудим</div>
				<form class="form cont-form">
					<div class="form-line"><input type="text" class="input" placeholder="Имя*" /></div>
					<div class="form-line"><input type="text" class="input masc-phone" placeholder="Номер телефона*" /></div>
					<div class="form-line">
						<input type="checkbox" class="checkbox" checked id="accept3">
						<label class="label-check label-check_accept" for="accept3">
							<span class="accept32"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="32" height="32" rx="10" fill="currentcolor"/><path d="M12 16L14.9995 19L19.9995 14" stroke-width="2" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
							Согласие на обработку персональных данных
						</label>
					</div>
					<div class="form-line"><input type="submit" class="b-button button_fill button_big b-button_submit b-button_form" value="Отправить" /></div>
				</form>
			</div>
		</div>
		
		<!------------------Всплывающее Свободные даты---------------!-->
		<div id="popup-freedate" class="popup-window">
			<a href="#" class="popup-close"/><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.6377 1.54594L1.54585 20.6378M1.54585 1.54594L20.6377 20.6378" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg></a>
			<div class="popup-content">
				<div class="popup-title">Свободные даты для бронирования</div>
				<p class="freedate-sub">Городской велосипед Schwinn Traveler 20” </p>
				<div id="two-inputs_inline">
					<div style="display: none"><input id="date-range100" class="date-range" size="20" value=""><input id="date-range101" class="date-range" size="20" value=""></div>
					<div id="date-range-container"></div>
				</div>
				<div class="popup-attention">При изменении дат выбранные велосипеды сбрасываются.</div>
				<div class="form-line center"><a class="b-button button_fill button_big button_accept">Применить</a></div>
			</div>
		</div>
		
		<!------------------Всплывающее отмена заказа---------------!-->
		<div id="popup-cancel" class="popup-window">
			<a href="#" class="popup-close"/><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.6377 1.54594L1.54585 20.6378M1.54585 1.54594L20.6377 20.6378" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg></a>
			<div class="popup-content">
				<div class="popup-title popup-title_full">Вы уверены, что хотите отменить заказ? Это действие нельзя будет отменить.</div>
				<div class="b-button_zakaz"><a class="b-button button_fill button_big">Отменить заказ</a></div>
				<div class="b-button_zakaz"><a class="b-button button_space button_big">Оставить все как есть</a></div>
			</div>
		</div>
		<!------------------Всплывающее Заказ отменен.---------------!-->
		<div id="popup-canceled" class="popup-window">
			<a href="#" class="popup-close"/><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.6377 1.54594L1.54585 20.6378M1.54585 1.54594L20.6377 20.6378" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg></a>
			<div class="popup-content">
				<div class="popup-title popup-title_full center">Заказ отменен.</div>
				<div class="button-canceled">
					<div class="button-canceled_zakaz"><a class="b-button button_fill button_big">Назад в ЛК</a></div>
					<div class="button-canceled_zakaz"><a class="b-button button_space button_big">На главную страницу</a></div>
				</div>
			</div>
		</div>
		
		<!------------------Всплывающее Авторизация/Регистрация---------------!-->
		<div id="popup-lk" class="popup-window">
			<a href="#" class="popup-close"/><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M20.6377 1.54594L1.54585 20.6378M1.54585 1.54594L20.6377 20.6378" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg></a>
			<div class="popup-content">
				<div class="pop-login">
					<a class="pop-login__link pop-login_active" href="#avtoriz">Вход</a>
					<a class="pop-login__link" href="#registr">Регистрация</a>
				</div>
				<div id="avtoriz" class="login-tab" style="display: block;">
					<form>
						<div class="sub-info">
							<div class="sub-info__text">Номер телефона</div>
							<div class="form-line"><input type="text" class="input masc-phone" placeholder="Введите номер телефона" /></div>
						</div>
						<div class="sub-info">
							<div class="sub-info__text">Пароль</div>
							<div class="form-line form-line_pass"><input type="password" class="input" placeholder="Введите пароль" /><a class="password-control" href="#"></a></div>
						</div>
						<input type="submit" class="b-button button_fill button_big b-button_submit b-button_avtoriz" value="Войти" />
						<div class="center"><a class="lost-pass" href="#">Забыли пароль?</a></div>
					</form>
				</div>
				<div id="registr" class="login-tab">
					<form>
						<div class="sub-info">
							<div class="sub-info__text">Имя*</div>
							<div class="form-line"><input type="text" class="input" placeholder="Введите имя" /></div>
						</div>
						<div class="sub-info">
							<div class="sub-info__text">Номер телефона*</div>
							<div class="form-line"><input type="text" class="input masc-phone" placeholder="Введите номер телефона" /></div>
						</div>
						<div class="sub-info sub-info_lk">
							<div class="sub-info__text">E-mail</div>
							<div class="form-line"><input type="text" class="input" placeholder="Введите E-mail" /></div>
						</div>
						<div class="sub-info sub-info_lk">
							<div class="sub-info__text">Пароль</div>
							<div class="form-line form-line_pass"><input type="password" class="input" placeholder="Введите пароль" /><a class="password-control" href="#"></a></div>
						</div>
						<div class="form-line form-line_lk">
							<input type="checkbox" class="checkbox" id="accept2">
							<label class="label-check label-check_accept" for="accept2">
								<span class="accept32"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="32" height="32" rx="10" fill="currentcolor"/><path d="M12 16L14.9995 19L19.9995 14" stroke-width="2" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
								Согласие на обработку персональных данных
							</label>
						</div>
						<input type="submit" class="b-button button_fill button_big b-button_submit b-button_registr" value="Войти" />
						<div class="center">Уже авторизованы? <a class="lost-pass" href="#">Войти</a></div>
					</form>
				</div>
			</div>
		</div>

	
	
	<div class="popup-mask"></div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/slick.min.js"></script>

<script src="js/jquery-ui-1.8.23.custom.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.kinetic.min.js"></script>
<script src="js/jquery.smoothdivscroll-1.3-min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.daterangepicker.min.js"></script>

<script src="js/jquery.inputmask.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>