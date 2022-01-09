<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dynamicrule', language 'zh_tw_wp', version '3.11'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = '啟用';
$string['activerules'] = '啟用規則';
$string['addcondition'] = '新增條件';
$string['addconditions'] = '為此規則新增條件';
$string['addoutcome'] = '新增動作';
$string['addoutcomes'] = '為此規則新增動作';
$string['after'] = '或之後';
$string['archive'] = '歸檔';
$string['archived'] = '已歸檔';
$string['archivedrules'] = '歸檔規則';
$string['archiverule'] = '歸檔規則 \'{$a}\\';
$string['availableplaceholders'] = '有效的佔位符';
$string['before'] = '之前';
$string['body'] = '主文';
$string['broken'] = '中斷';
$string['cachedef_eventsubscriptions'] = '這將儲存規則條件的事件訂閱列表。';
$string['cannotenablerule'] = '無法啟用規則 \'{$a}\' ，除非它具有條件和動作，不會中斷且不會歸檔';
$string['cohort'] = '群組';
$string['conditioncohortmember'] = '用戶是群組的成員';
$string['conditioncohortmemberdescription'] = '屬於群組 \'{$a}\\ 成員的用戶';
$string['conditioncohortnotmember'] = '用戶不是群組的成員';
$string['conditioncohortnotmemberdescription'] = '不屬於 \'{$a}\\ 群組成員的用戶';
$string['conditioncoursecompleted'] = '課程完成';
$string['conditioncoursecompleteddescription'] = '完成課程 \'{$a}\\ 的用戶';
$string['conditioncoursenotcompleted'] = '課程未完成';
$string['conditioncoursenotcompleteddescription'] = '未完成課程 \'{$a}\\ 的用戶';
$string['conditionisbroken'] = '此條件組態已中斷。';
$string['conditionnotsaved'] = '條件未保存。';
$string['conditions'] = '條件';
$string['conditionuserenrolled'] = '已選課用戶';
$string['conditionuserenrolleddescription'] = '在 \'{$a->course}\\ 課程中已選課用戶';
$string['conditionuserlastlogin'] = '用戶上次登錄';
$string['conditionuserlastlogindescriptionbefore'] = '在 {$a} 以前登錄的用戶';
$string['conditionuserlastlogindescriptionever'] = '至少登錄一次的用戶';
$string['conditionuserlastlogindescriptioninlast'] = '在 {$a} 以前，最後登錄的用戶';
$string['conditionuserlastlogindescriptionnever'] = '從未登錄的用戶';
$string['conditionusernotenrolled'] = '未選課的用戶';
$string['conditionusernotenrolleddescription'] = '未在 \'{$a->course}\\ 課程中選課用戶';
$string['conditionusernotenrolleddescriptionwithenrol'] = '未在 \'{$a->course}\\ 課程中使用 \'{$a->enrol}\\ 選課模組的用戶';
$string['conditionuserprofilefield'] = '用戶個人資料欄位';
$string['conditionuserprofilefielddescription'] = '用戶個人資料欄位 \'{$a->fieldname}\' 的值為 \'{$a->fieldvalue}\\ 的用戶';
$string['confirmarchiverule'] = '您確定要將規則 \'{$a}\' 歸檔嗎？歸檔的動態規則仍可用於當前和未來的報告。';
$string['confirmdeletecondition'] = '您確定要刪除條件 \'{$a}\' 以及所有相關資料嗎？此操作無法撤銷。';
$string['confirmdeleteoutcome'] = '您確定要刪除動作 \'{$a}\' 以及所有相關資料嗎？此操作無法撤消。';
$string['confirmdeleterule'] = '您確定要刪除規則 \'{$a}\' 以及所有相關資料嗎？此操作無法撤消。';
$string['confirmdisableruleforedit'] = '此規則將自動停用以進行編輯。';
$string['confirmduplicaterule'] = '您確定要複製規則 \'{$a}\' 嗎？';
$string['confirmenablerule'] = '您確定要啟用此規則嗎？啟用它會影響 {$a} 用戶。';
$string['countmatchingusers'] = '{$a} 總匹配';
$string['courseinternalid'] = '在網址中使用內部課程ID';
$string['courseurl'] = '課程網址';
$string['date'] = '日期';
$string['datetypeever'] = '自從';
$string['datetypeinlast'] = '最後';
$string['datetypenever'] = '從不';
$string['datetypenone'] = '未定義';
$string['datetypepast'] = '以外';
$string['deletecondition'] = '刪除條件';
$string['deleteoutcome'] = '刪除動作';
$string['deleterule'] = '刪除規則 \'{$a}\\';
$string['details'] = '細節';
$string['disablerule'] = '停用規則 \'{$a}\\';
$string['duplicate'] = '複製';
$string['dynamicrule:manage'] = '管理動態規則';
$string['editactions'] = '編修規則 \'{$a}\\ 的動作';
$string['editcondition'] = '編修條件';
$string['editdetails'] = '編修規則 \'{$a}\\ 的細節';
$string['editdetailsbutton'] = '編修細節';
$string['editoutcome'] = '編修動作';
$string['editrule'] = '編修規則 \'{$a}\\';
$string['editrulename'] = '編修規則 \'{$a}\\ 的名稱';
$string['enable'] = '啟用';
$string['enablehelp'] = '啟用規則';
$string['enablehelp_help'] = '規則要求至少啟用一個條件和一個操作。';
$string['enablehelpmodal'] = '啟用規則';
$string['enablehelpmodal_help'] = '規則要求至少啟用一個操作。';
$string['enablerule'] = '啟用規則 \'{$a}\\';
$string['errorinvalidbody'] = '無效的通知主文';
$string['errorinvalidcohort'] = '無效的群組';
$string['errorinvalidcourse'] = '無效的課程';
$string['errorinvalidoperator'] = '無效的運算符。只允許在之前和之後。';
$string['errorinvalidsubject'] = '無效的通知主題';
$string['errorinvaliduserlastlogin'] = '無效的上次登錄日期';
$string['errorinvaliduserlastlogintype'] = '無效的上次登入類型';
$string['errorinvaliduserprofilefield'] = '無效的個人資料欄位';
$string['field'] = '欄位';
$string['general'] = '一般';
$string['lastlogin'] = '用戶上次登錄的時間是';
$string['lastlogin_help'] = '您可以選擇相對於當前日期的日期或從未登錄的用戶。';
$string['managebadges'] = '管理獎章';
$string['managecompetencies'] = '管理核心能力';
$string['managerules'] = '管理規則';
$string['match'] = '匹配';
$string['matchedtime'] = '匹配時間';
$string['matchlimitinvalid'] = '規則至少需要觸發一次。';
$string['messageprovider:notificationoutcome'] = '動態規則工具的通知動作';
$string['newnameforrule'] = '規則 \'{$a}\\ 的新名稱';
$string['newrule'] = '新規則';
$string['noruleconditions'] = '這個規則沒有條件';
$string['noruleoutcomes'] = '這個規則沒有動作';
$string['operator'] = '條件';
$string['operatorafter'] = '之後';
$string['operatorbefore'] = '之前';
$string['outcomebadge'] = '頒授獎章';
$string['outcomebadgedescription'] = '頒授獎章 \'{$a}\' 給用戶';
$string['outcomecompetency'] = '頒授核心能力';
$string['outcomecompetencydescription'] = '頒授核心能力 \'{$a}\' 給用戶';
$string['outcomeisbroken'] = '此動作組態已中斷。';
$string['outcomenotification'] = '通知';
$string['outcomenotificationdescription'] = '發送通知 \'{$a}\' 給用戶';
$string['outcomenotsaved'] = '動作未保存。';
$string['outcomes'] = '動作';
$string['placeholdersdesc'] = '佔位符';
$string['placeholdersdesc_help'] = '佔位符允許您新增動態內容，例如{{userfullname}}佔位符將在發送給用戶的通知中替換為用戶全名。';
$string['pluginname'] = '動態規則';
$string['privacy:metadata:tool_dynamicrule_match'] = '用戶與特定規則條件匹配的資訊。由於匹配用戶受規則中定義的動作所影響。';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = '指示用戶何時與規則條件匹配的時間戳。';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = '規則的ID。';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = '時間戳顯示於當動作應用後，用戶不再符合規則條件之時。';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = '已與規則條件匹配的用戶ID。';
$string['reg_wpdynamicrules'] = '動態規則 ({$a}) 的數量';
$string['reportmatchingusers'] = '與動態規則匹配的用戶報告';
$string['reportrulematches'] = '匹配且與動態規則不匹配的用戶報告';
$string['reportruleslist'] = '規則列表的系統報告';
$string['rolemanager'] = '動態規則管理器';
$string['rolemanagerdescription'] = '允許在當前租戶中創建和管理動態規則';
$string['ruledisabled'] = '此規則已禁用。';
$string['ruleisbroken'] = '這個規則被中斷了。至少有一個條件或動作被中斷。';
$string['rulematchfreq'] = '匹配頻率';
$string['rulematchfreq_help'] = '預設情況下，在滿足條件時將規則動作應用於用戶。如果啟用了匹配頻率，則規則應用程序將被限制為每個期望期間或之前所選擇的次數。';
$string['rulematchfreqdesc0'] = '無法觸發超過';
$string['rulematchfreqdesc1'] = '次數';
$string['rulematchfreqenable'] = '啟用匹配頻率限制';
$string['rulename'] = '名稱';
$string['rulenotfound'] = '沒有找到規則。';
$string['select'] = '選擇';
$string['selectbadge'] = '選擇獎章';
$string['selectbadge_help'] = '選擇要頒發的獎章';
$string['selectcompetency'] = '選擇核心能力';
$string['selectcompetency_help'] = '選擇要頒發的核心能力';
$string['subject'] = '主旨';
$string['taskprocessrules'] = '流程規則';
$string['timeadded'] = '在此日期和時間或之後新增到群組中';
$string['timecompleted'] = '在完成日期和時間或之後';
$string['timeenrolled'] = '在選課開始日期和時間或之後';
$string['toomanybadgestoshow'] = '太多獎章以至於無法顯示';
$string['unarchiverule'] = '取消歸檔規則 \'{$a}\\';
$string['unmatchedtime'] = '不匹配的時間';
$string['userplaceholders'] = '用戶佔位符';
$string['value'] = '值';
$string['viewmatchingusers'] = '查看匹配的用戶';
$string['viewreport'] = '查看 \'{$a}\\ 的報告';
