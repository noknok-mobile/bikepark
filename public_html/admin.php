<?php require($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<section>
    <div class="b-container">
        <div class="sect-gray">
            <h1 class="other-page">Управление заказами</h1>
            <div class="filter-parametr">
                <div class="parametrs parametrs_multiline">

                    <div class="parametrs-item parametrs-item_date" id="two-inputs">
                        <div class="parametrs-item__data">
                            <div class="parametrs-item__title">Дата и время начала</div>
                            <div class="parametrs-item__range"><input id="date-range200" type="text" class="date-range" size="20" value="14.07.2021 22:22"></div>
                        </div>
                        <div class="parametrs-item__data">
                            <div class="parametrs-item__title">Дата и время конца</div>
                            <div class="parametrs-item__range"><input id="date-range201" type="text" class="date-range" size="20" value="16.07.2021 19:51"></div>
                        </div>
                    </div>
                    <div class="parametrs-item">
                        <div class="parametrs-item__title">Фактическая дата возврата</div>
                        <div class="parametrs-item__select">
                            <select name="param__delivery" class="b-select chosen-select">
                                <option>По адресу</option>
                                <option>Самовывоз</option>
                            </select>
                        </div>
                    </div>
                    <div class="parametrs-item">
                        <div class="parametrs-item__title">Статус заказа</div>
                        <div class="parametrs-item__select">
                            <select name="param__delivery" class="b-select chosen-select">
                                <option value="obrabot">Обрабатывается</option>
                                <option value="vrabote">В работе</option>
                                <option value="obrabot">Выполнен</option>
                                <option value="dostavl">Доставлен</option>
                                <option value="zavershen">Завершен</option>
                            </select>
                        </div>
                    </div>
                    <div class="parametrs-item">
                        <div class="parametrs-item__title">Тип аренды</div>
                        <div class="parametrs-item__select">
                            <select name="param__delivery" class="b-select chosen-select">
                                <option>По адресу</option>
                                <option>Самовывоз</option>
                            </select>
                        </div>
                    </div>
                    <div class="parametrs-item">
                        <div class="parametrs-item__title">Тип доставки</div>
                        <div class="parametrs-item__select">
                            <select name="param__delivery" class="b-select chosen-select">
                                <option>По адресу</option>
                                <option>Самовывоз</option>
                            </select>
                        </div>
                    </div>
                    <div class="parametrs-item">
                        <div class="parametrs-item__title">Тип оплаты</div>
                        <div class="parametrs-item__select">
                            <select name="param__delivery" class="b-select chosen-select">
                                <option>По адресу</option>
                                <option>Самовывоз</option>
                            </select>
                        </div>
                    </div>
                    <div class="parametrs-item">
                        <div class="parametrs-item__title">Статус оплаты</div>
                        <div class="parametrs-item__select">
                            <select name="param__delivery" class="b-select chosen-select">
                                <option>По адресу</option>
                                <option>Самовывоз</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="filter-parametr__footer">
                    <button class="b-button button_fill button_big b-button_action">Найти</button>
                    <button class="b-button button_space button_big b-button_action">Сбросить фильтр</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="b-ftype">
    <div class="b-container">
        <div class="sect-gray sect-perehoc">
            <div class="lk-slide">
                <div class="lk-slide_wrap">
                    <div class="lk-line lk-line_head lk-line_title lk-line_mobhide">
                        <div class="lk-item lk-item_400">Номер заказа</div>
                        <div class="lk-item lk-item_200">Фактическая дата возврата </div>
                        <div class="lk-item lk-item_200">Стоимость</div>
                        <div class="lk-item lk-item_200 lk-item_oplat">Оплата</div>
                        <div class="lk-item lk-item_200 lk-item_status">Статус</div>
                    </div>
                    <div class="lk-table">
                        <div class="accord-item accord-item_active">
                            <div class="accord-item__title">
                                <div class="lk-item lk-item_400 lk-item_auto lk-item_toggle">
                                    <span class="mob-linetitle">Номер заказа: </span> 
                                    Заказ № 123423
                                </div>
                                <div class="lk-item lk-item_200 lk-item_auto">
                                    <span class="mob-linetitle">Фактическая дата возврата: </span> 
                                    24.07.2021 
                                </div>
                                <div class="lk-item lk-item_200 lk-item_auto lk-item_price">
                                    <span class="mob-linetitle">Стоимость: </span> 
                                    630 AED
                                </div>
                                <div class="lk-item lk-item_200 lk-item_auto lk-item_oplat">
                                    <span class="mob-linetitle">Оплата: </span>
                                    <div class="lk-item__select js-status-select" data-status="unpaid">
                                        <select name="param__delivery" class="chosen-select">
                                            <option value="unpaid">Не оплачен</option>
                                            <option value="paid">Оплачен</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="lk-item lk-item_200 lk-item_auto lk-item_status">
                                    <span class="mob-linetitle">Статус: </span>
                                    <div class="lk-item__select js-status-select" data-status="pending">
                                        <select name="param__delivery" class="chosen-select">
                                            <option value="processing">В обработке</option>
                                            <option value="pending">В работе</option>
                                            <option value="shipped">Доставлен</option>
                                            <option value="complete">Завершен</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="accord-item__content" style="display: block;">
                                <div class="accord-item__products">
                                    <div class="lk-line lk-line_title">
                                        <div class="lk-item lk-item_600">Велосипеды</div>
                                        <div class="lk-item lk-item_200">Цена</div>
                                        <div class="lk-item lk-item_200 lk-item_dney">Кол-во дней</div>
                                        <div class="lk-item lk-item_200 lk-item_itog">Сумма</div>
                                    </div>
                                    <div class="lk-line lk-line_text">
                                        <div class="lk-item lk-item_600">Городской велосипед Schwinn Traveler 20” </div>
                                        <div class="lk-item lk-item_200 lk-item_cena">90</div>
                                        <div class="lk-item lk-item_200 lk-item_dney">2</div>
                                        <div class="lk-item lk-item_200 lk-item_itog">180 AED</div>
                                    </div>
                                    <div class="lk-line lk-line_text">
                                        <div class="lk-item lk-item_600">Городской велосипед Schwinn Traveler 20” </div>
                                        <div class="lk-item lk-item_200 lk-item_cena">90</div>
                                        <div class="lk-item lk-item_200 lk-item_dney">2</div>
                                        <div class="lk-item lk-item_200 lk-item_itog">45 AED</div>
                                    </div>
                                    <div class="lk-line lk-line_text">
                                        <div class="lk-item lk-item_600">Городской велосипед Schwinn Traveler 20” </div>
                                        <div class="lk-item lk-item_200 lk-item_cena">90</div>
                                        <div class="lk-item lk-item_200 lk-item_dney">2</div>
                                        <div class="lk-item lk-item_200 lk-item_itog">90 AED</div>
                                    </div>
                                </div>
                                <div class="accord-item__ship">
                                    <div class="lk-line lk-line_itog">
                                        <div class="lk-item lk-item_600"></div>
                                        <div class="lk-item lk-item_200"></div>
                                        <div class="lk-item lk-item_200 lk-item_info">Доставка</div>
                                        <div class="lk-item lk-item_200 lk-item_status">0 AED</div>
                                    </div>
                                    <div class="lk-line lk-line_itog">
                                        <div class="lk-item lk-item_600"></div>
                                        <div class="lk-item lk-item_200"></div>
                                        <div class="lk-item lk-item_200 lk-item_info">Итого</div>
                                        <div class="lk-item lk-item_200 lk-item_status item-bold">300 AED</div>
                                    </div>
                                </div>
                                <div class="accord-item__action">
                                    <div class="accord-action">
                                        <div class="lk-line lk-line_title">
                                            <div class="lk-item lk-item_600">Информация об аренде</div>
                                        </div>
                                        <div class="accord-action_item">Тип аренды: 2 часа</div>
                                        <div class="accord-action_item">Период аренды: 18.03.21 14:00 – 04.04.21 14:00 </div>
                                        <div class="accord-action_item">Тип оплаты: На месте</div>
                                        <div class="accord-action_item">Тип доставки: Самовывоз</div>
                                    </div>
                                    <div class="accord-action">
                                        <div class="lk-line lk-line_title">
                                            <div class="lk-item lk-item_600">Контакты пользователя</div>
                                        </div>
                                        <div class="accord-action_item">Иван К. </div>
                                        <div class="accord-action_item">8 999 999 99 99 </div>
                                        <div class="accord-action_item">example@gmail.com</div>
                                        <div class="accord-action_item">Адрес доставки</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>