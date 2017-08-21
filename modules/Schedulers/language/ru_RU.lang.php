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

$mod_strings = array(
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Выполнять настроенные процессы',
    'LBL_OOTB_REPORTS' => 'Создавать отчёты по расписанию',
    'LBL_OOTB_IE' => 'Проверять входящие письма',
    'LBL_OOTB_BOUNCE' => 'Запускать ночью проверку почтовых ящиков для возвращаемых писем',
    'LBL_OOTB_CAMPAIGN' => 'Запускать ночью массовую рассылку писем',
    'LBL_OOTB_PRUNE' => 'Очищать базу данных первого числа каждого месяца',
    'LBL_OOTB_TRACKER' => 'Очищать таблицы трекера',
    'LBL_OOTB_SUGARFEEDS' => 'Очищать ленту событий',
    'LBL_OOTB_LUCENE_INDEX' => 'Индексировать неиндексированные документы',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Оптимизировать индекс полнотекстового поиска',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Отправлять напоминания о мероприятиях по E-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Очищать очередь заданий',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Удалять неиспользуемые файлы из системы',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Периодичность:',
    'LBL_LIST_LIST_ORDER' => 'Задания:',
    'LBL_LIST_NAME' => 'Задания:',
    'LBL_LIST_RANGE' => 'Порядок:',
    'LBL_LIST_REMOVE' => 'Удаление:',
    'LBL_LIST_STATUS' => 'Статус:',
    'LBL_LIST_TITLE' => 'Список заданий',
    'LBL_LIST_EXECUTE_TIME' => 'Будет запущено в:',
// human readable:
    'LBL_SUN' => 'Воскресенье',
    'LBL_MON' => 'Понедельник',
    'LBL_TUE' => 'Вторник',
    'LBL_WED' => 'Среда',
    'LBL_THU' => 'Четверг',
    'LBL_FRI' => 'Пятница',
    'LBL_SAT' => 'Суббота',
    'LBL_ALL' => 'Каждый день',
    'LBL_EVERY_DAY' => 'Каждый день',
    'LBL_AT_THE' => 'В ',
    'LBL_EVERY' => 'Каждые ',
    'LBL_FROM' => 'с ',
    'LBL_ON_THE' => 'Раз в ',
    'LBL_RANGE' => ' до ',
    'LBL_AT' => 'в ',
    'LBL_IN' => 'В ',
    'LBL_AND' => 'и',
    'LBL_MINUTES' => ' минут(ы) ',
    'LBL_HOUR' => ' час.',
    'LBL_HOUR_SING' => ' час',
    'LBL_MONTH' => ' месяц',
    'LBL_OFTEN' => 'Постоянно',
    'LBL_MIN_MARK' => ' минуту',


// crontabs
    'LBL_MINS' => 'минуты',
    'LBL_HOURS' => 'часы',
    'LBL_DAY_OF_MONTH' => 'число',
    'LBL_MONTHS' => 'месяц',
    'LBL_DAY_OF_WEEK' => 'день недели',
    'LBL_CRONTAB_EXAMPLES' => 'Значения представлены в стандартной crontab-нотации',
// Labels
    'LBL_ALWAYS' => 'Всегда',
    'LBL_CATCH_UP' => 'Выполнить, если пропущено',
    'LBL_CATCH_UP_WARNING' => 'Снимите флажок, если выполнение задачи может занять продолжительное время.',
    'LBL_DATE_TIME_END' => 'Дата и время окончания',
    'LBL_DATE_TIME_START' => 'Дата и время начала',
    'LBL_INTERVAL' => 'Периодичность',
    'LBL_JOB' => 'Задание:',
    'LBL_JOB_URL' => 'URL задания',
    'LBL_LAST_RUN' => 'Последний запуск',
    'LBL_MODULE_NAME' => 'Задания SuiteCRM',
    'LBL_MODULE_TITLE' => 'Планировщик',
    'LBL_NAME' => 'Название задания:',
    'LBL_NEVER' => 'Никогда',
    'LBL_NEW_FORM_TITLE' => 'Новое задание',
    'LBL_PERENNIAL' => 'Бессрочно',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск задания',
    'LBL_SCHEDULER' => 'задание:',
    'LBL_STATUS' => 'Статус:',
    'LBL_TIME_FROM' => 'Задание активно с',
    'LBL_TIME_TO' => 'Задание активно до',
    'LBL_WARN_CURL_TITLE' => 'cURL предупреждение:',
    'LBL_WARN_CURL' => 'Предупреждение:',
    'LBL_WARN_NO_CURL' => 'Эта система не имеет cURL-библиотеку, доступную/откомпилированную в PHP-модуле (--with-curl=/path/to/curl_library).  Пожалуйста, свяжитесь с Вашим администратором, чтобы решить этот вопрос.  Без cURL-функциональности, планировщик не может выполнить необходимые действия.',
    'LBL_BASIC_OPTIONS' => 'Основные параметры',
    'LBL_ADV_OPTIONS' => 'Дополнительные параметры',
    'LBL_TOGGLE_ADV' => 'Показать дополнительные параметры',
    'LBL_TOGGLE_BASIC' => 'Показать основные параметры',
// Links
    'LNK_LIST_SCHEDULER' => 'Список заданий',
    'LNK_NEW_SCHEDULER' => 'Создать задание',
    'LNK_LIST_SCHEDULED' => 'Запланированные задания',
// Messages
    'ERR_CRON_SYNTAX' => 'Неверный cron-синтакс',
    'NTC_LIST_ORDER' => 'Установка последовательности, в которой задания появятся в списке',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Настройка планировщика Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Настройка сrontab',
    'LBL_CRON_LINUX_DESC1' => 'Для запуска планировщика SuiteCRM откройте файл crontab при помощи команды: ',
    'LBL_CRON_LINUX_DESC2' => '... и добавьте в него следующую строку: ',
    'LBL_CRON_LINUX_DESC3' => 'Изменения в файл crontab необходимо вносить только после завершения установки системы.',
    'LBL_CRON_WINDOWS_DESC' => 'Для запуска планировщика SuiteCRM создайте пакетный файл и ежеминутно выполняйте его при помощи планировщика Windows. Пакетный файл должен содержать следующие команды: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Журнал заданий',
    'LBL_EXECUTE_TIME' => 'Время выполнения',

//jobstrings
    'LBL_SCHEDULER_TIMES' => 'Расписание планировщика',
);

global $sugar_config;
?>
