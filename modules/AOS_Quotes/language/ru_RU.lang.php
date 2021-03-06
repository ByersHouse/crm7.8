<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array (
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания:',
    'LBL_DATE_MODIFIED' => 'Дата изменения:',
    'LBL_MODIFIED' => 'Изменено:',
    'LBL_MODIFIED_ID' => 'Изменено(ID)',
    'LBL_MODIFIED_NAME' => 'Изменено (Имя)',
    'LBL_CREATED' => 'Создано:',
    'LBL_CREATED_ID' => 'Создано(ID)',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалён',
    'LBL_NAME' => 'Предложение',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Вы действительно хотите удалить контрагента из проекта?',
    'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением.',
    'LBL_ACCOUNT_NAME' => 'Название',
    'LBL_ACCOUNT' => 'Контрагент:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_ADDRESS_INFORMATION' => 'Адресная информация',
    'LBL_ANNUAL_REVENUE' => 'Годовой доход:',
    'LBL_ANY_ADDRESS' => 'Любой адрес:',
    'LBL_ANY_EMAIL' => 'Любой E-mail:',
    'LBL_ANY_PHONE' => 'Любой тел.:',
    'LBL_RATING' => 'Рейтинг',
    'LBL_ASSIGNED_USER' => 'Ответственный(ая)',
    'LBL_BILLING_ADDRESS_CITY' => 'расчётный адрес - город:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'расчётный адрес - страна:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'расчётный адрес - индекс:',
    'LBL_BILLING_ADDRESS_STATE' => 'расчётный адрес - область:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Адрес получателя - улица 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Адрес получателя - улица 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Адрес получателя - улица 4',
    'LBL_BILLING_ADDRESS_STREET' => 'расчётный адрес - улица:',
    'LBL_BILLING_ADDRESS' => 'Расчётный адрес:',
    'LBL_ACCOUNT_INFORMATION' => 'Основная информация',
    'LBL_CITY' => 'Город:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_COUNTRY' => 'Страна:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_DESCRIPTION_INFORMATION' => 'Описание',
    'LBL_DUPLICATE' => 'Возможно дублирующий контрагент',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Сотрудники:',
    'LBL_FAX' => 'Факс:',
    'LBL_INDUSTRY' => 'Отрасль:',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CITY' => 'Город',
    'LBL_LIST_EMAIL_ADDRESS' => 'Адрес E-mail',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_STATE' => 'Область',
    'LBL_LIST_WEBSITE' => 'Сайт',
    'LBL_MEMBER_OF' => 'Состоит в:',
    'LBL_MEMBER_ORG_FORM_TITLE' => 'Членские организации',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Членские организации',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Другой E-mail:',
    'LBL_OTHER_PHONE' => 'Другой тел.:',
    'LBL_OWNERSHIP' => 'Собственность:',
    'LBL_PARENT_ACCOUNT_ID' => 'Родительский контрагент(ID)',
    'LBL_PHONE_ALT' => 'Другой тел.:',
    'LBL_PHONE_FAX' => 'Тел. (факс):',
    'LBL_PHONE_OFFICE' => 'Тел. (раб.):',
    'LBL_PHONE' => 'Тел.:',
    'LBL_POSTAL_CODE' => 'Индекс:',
    'LBL_PUSH_BILLING' => 'Push Billing',
    'LBL_PUSH_SHIPPING' => 'Push Shipping',
    'LBL_SAVE_ACCOUNT' => 'Сохранение контрагента',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Отгрузочный адрес - город:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Отгрузочный адрес - страна:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Отгрузочный адрес - индекс:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Отгрузочный адрес - область:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Адрес отправителя - улица 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Адрес отправителя - улица 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Адрес отправителя - улица 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Отгрузочный адрес - улица:',
    'LBL_SHIPPING_ADDRESS' => 'Отгрузочный адрес:',
    'LBL_STATE' => 'Область или регион:', //For address fields
    'LBL_TEAMS_LINK' => 'Команда',
    'LBL_TICKER_SYMBOL' => 'Биржевой код:',
    'LBL_TYPE' => 'Тип:',
    'LBL_USERS_ASSIGNED_LINK' => 'Ответственные пользователи',
    'LBL_USERS_CREATED_LINK' => 'Создано пользователями',
    'LBL_USERS_MODIFIED_LINK' => 'Измененные пользователи',
    'LBL_VIEW_FORM_TITLE' => 'Обзор контрагента',
    'LBL_WEBSITE' => 'Сайт:',
    'LNK_ACCOUNT_LIST' => 'Контрагенты',
    'LNK_NEW_ACCOUNT' => 'Создать контрагента',
    'MSG_DUPLICATE' => 'Создаваемый вами контрагент возможно дублирует уже имеющуюся запись. Похожие контрагенты показаны ниже. Нажмите кнопку "Сохранить"  для продолжения создания нового контрагента или кнопку "Отказаться" для возврата в модуль.',
    'MSG_SHOW_DUPLICATES' => 'Создаваемый вами контрагент возможно дублирует уже имеющуюся запись. Похожие контрагенты показаны ниже. Нажмите кнопку "Сохранить"  для продолжения создания нового контрагента или кнопку "Отказаться" для возврата в модуль.',
    'NTC_COPY_BILLING_ADDRESS' => 'Копировать расчётный адрес в отгрузочный',
    'NTC_COPY_BILLING_ADDRESS2' => 'Копировать в отгрузочный адрес',
    'NTC_COPY_SHIPPING_ADDRESS' => 'Копировать отгрузочный адрес в расчётный',
    'NTC_COPY_SHIPPING_ADDRESS2' => 'Копировать в расчётный адрес',
    'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
    'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
    'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Вы действительно хотите удалить эту запись из членских организаций?',
    'LBL_LIST_FORM_TITLE' => 'Список предложений',
    'LBL_MODULE_NAME' => 'Предложения',
    'LBL_MODULE_TITLE' => 'Предложения',
    'LBL_HOMEPAGE_TITLE' => 'Мои предложения',
    'LNK_NEW_RECORD' => 'Создать предложение',
    'LNK_LIST' => 'Предложения',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск предложений',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_AOS_QUOTES_SUBPANEL_TITLE' => 'Предложения',
    'LBL_NEW_FORM_TITLE' => 'Новое предложение',
    'LBL_TERMS_C' => 'Условия',
    'LBL_APPROVAL_ISSUE' => 'Детали утверждения',
    'LBL_APPROVAL_STATUS' => 'Статус утверждения',
    'LBL_BILLING_ACCOUNT' => 'Контрагент',
    'LBL_BILLING_CONTACT' => 'Контакт',
    'LBL_EXPIRATION' => 'Действительно до',
    'LBL_QUOTE_NUMBER' => 'Номер предложения',
    'LBL_OPPORTUNITY' => 'Сделка',
    'LBL_SHIPPING_ACCOUNT' => 'Отгружается контрагенту',
    'LBL_TEMPLATE_DDOWN_C' => 'Шаблон предложения',
    'LBL_SHIPPING_CONTACT' => 'Отгружается контакту',
    'LBL_STAGE' => 'Стадия предложения',
    'LBL_TERM' => 'Условия оплаты',
    'LBL_SUBTOTAL_AMOUNT' => 'Итого со скидкой',
    'LBL_DISCOUNT_AMOUNT' => 'Скидка',
    'LBL_TAX_AMOUNT' => 'Всего НДС',
    'LBL_SHIPPING_AMOUNT' => 'Доставка',
    'LBL_TOTAL_AMT' => 'Итого без скидки',
    'VALUE' => 'Название',
    'LBL_EMAIL_ADDRESSES' => 'Адреса E-mail',
    'LBL_LINE_ITEMS' => 'Позиции',
    'LBL_GRAND_TOTAL' => 'ВСЕГО К ОПЛАТЕ',
    'LBL_INVOICE_STATUS' => 'Статус предложения',
    'LBL_PRODUCT_QUANITY' => 'Количество',
    'LBL_PRODUCT_NAME' => 'Товар',
	'LBL_PRODUCT_NUMBER' => '№', // PR 3296
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_NOTE' => 'Заметка',
    'LBL_PRODUCT_DESCRIPTION' => 'Описание',
    'LBL_LIST_PRICE' => 'Цена по прайсу',
    'LBL_DISCOUNT_AMT' => 'Скидка',
    'LBL_DISCOUNT_TYPE' => 'Тип скидки',
    'LBL_UNIT_PRICE' => 'Цена за единицу',
    'LBL_TOTAL_PRICE' => 'Итого без НДС',
    'LBL_VAT' => 'НДС (%)', //VAT
    'LBL_VAT_AMT' => 'НДС', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Добавить товар',
    'LBL_SERVICE_NAME' => 'Услуга',
    'LBL_SERVICE_NUMBER' => '№', // PR 3296
    'LBL_SERVICE_LIST_PRICE' => 'Стоимость по прайсу',
    'LBL_SERVICE_PRICE' => 'Конечная стоимость',
    'LBL_SERVICE_DISCOUNT' => 'Скидка',
    'LBL_ADD_SERVICE_LINE' => 'Добавить услугу ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Удалить',
    'LBL_CONVERT_TO_INVOICE' => 'Преобразовать в счёт',
    'LBL_PRINT_AS_PDF' => 'Сохранить в PDF',
    'LBL_EMAIL_QUOTE' => 'Отправить по почте',
    'LBL_CREATE_CONTRACT' => 'Создать договор',
    'LBL_LIST_NUM' => '№',
    'LBL_PDF_NAME' => 'Предложение',
    'LBL_EMAIL_NAME' => 'Предложение:',
    'LBL_QUOTE_DATE' => 'Дата Создания',
    'LBL_NO_TEMPLATE' => 'ОШИБКА\nШаблоны предложений не обнаружены.\nЕсли необходимый шаблон предложения отсутствует - откройте модуль PDF-шаблонов и создайте необходимый шаблон.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Итого с учётом скидки и НДС',//pre shipping
    'LBL_EMAIL_PDF' => 'Отправить по почте в виде PDF',
    'LBL_ADD_GROUP' => 'Добавить группу',
    'LBL_DELETE_GROUP' => 'Удалить группу',
    'LBL_GROUP_NAME' => 'Группа',
    'LBL_GROUP_DESCRIPTION' => 'Описание группы', // PR 3296
    'LBL_GROUP_TOTAL' => 'ИТОГО С НДС',
    'LBL_SHIPPING_TAX' => 'НДС доставки (%)',
    'LBL_SHIPPING_TAX_AMT' => 'НДС доставки',
    'LBL_IMPORT_LINE_ITEMS' => 'Импорт позиций',
    'LBL_CREATE_OPPORTUNITY' => 'Создать сделку',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Итого со скидкой (основная валюта)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Скидка (основная валюта)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Всего НДС (основная валюта)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Доставка (основная валюта)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Итого без скидки (основная валюта)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'НДС доставки (основная валюта)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'НДС доставки (основная валюта)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'ВСЕГО К ОПЛАТЕ (основная валюта)',
    'LBL_QUOTE_TO' => 'Получатель',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Итого с учётом скидки и НДС (основная валюта)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Предложения : Договоры',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Предложения : Счета',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Группа позиций',
    'LBL_AOS_PRODUCT_QUOTES' => 'Предложение-Товары',
    'LBL_AOS_QUOTES_PROJECT' => 'Предложения-Проекты',
);
?>
