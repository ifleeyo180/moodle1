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
 * Strings for component 'tool_analytics', language 'zh_tw_wp', version '3.11'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '精確度';
$string['actionexecutedgroupedusefulness'] = '分組動作';
$string['actions'] = '動作';
$string['actionsexecutedbyusers'] = '用戶執行的動作';
$string['allpredictions'] = '所有預測';
$string['alltimesplittingmethods'] = '所有分析區間';
$string['analysingsitedata'] = '分析網站';
$string['analysis'] = '分析';
$string['analyticmodels'] = '分析模組';
$string['bettercli'] = '評估模組和生成預測可能涉及繁重的過程。建議從命令行運行這些操作。';
$string['cantguessenddate'] = '無法猜測結束日期';
$string['cantguessstartdate'] = '無法猜測開始日期';
$string['classdoesnotexist'] = '類型 {$a} 不存在';
$string['clearmodelpredictions'] = '您確定要清除所有預測 "{$a}" 嗎？';
$string['clearpredictions'] = '清除預測';
$string['clienablemodel'] = '您可以透過 ID 選擇分析區間來啟用模型。備註：您稍後也可以使用網頁界面來啟用它（選擇「無」退出）。';
$string['clievaluationandpredictions'] = '重複排程任務啟用的模組並獲得預測。透過網頁界面的評估模組已禁用。透過禁用<a href="{$a}">\'onlycli\'</a>分析設置，您可以允許使用網頁界面手動執行這些程序。';
$string['clievaluationandpredictionsnoadmin'] = '重複排程任務啟用的模組並獲得預測。透過網頁界面的評估模組已禁用。它可以由網站系統管理員啟用。';
$string['component'] = '元件';
$string['componentcore'] = '核心';
$string['componentselect'] = '選擇元件 \'{$a}\' 提供的所有模組';
$string['componentselectnone'] = '全部取消選擇';
$string['createmodel'] = '建立模組';
$string['currenttimesplitting'] = '當前分析區間';
$string['delete'] = '刪除';
$string['deletemodelconfirmation'] = '您確定要刪除 "{$a}" 嗎？這個動作將無法復原。';
$string['disabled'] = '禁用';
$string['editmodel'] = '編修模組 "{$a}"';
$string['edittrainedwarning'] = '該模型已經過訓練。請注意，更改其指標或其分析區間將刪除其先前的預測，並開始生成新的預測。';
$string['enabled'] = '已啟用';
$string['errorcantenablenotimesplitting'] = '您需要在啟用模組之前選擇一個分析區間';
$string['errornoenabledandtrainedmodels'] = '沒有已啟用且已訓練的模組可供預測。';
$string['errornoenabledmodels'] = '沒有已啟用的模組可訓練';
$string['errornoexport'] = '只能匯出已訓練的模組';
$string['errornostaticevaluated'] = '基於假設的模組無法評估。根據它們的定義，它們始終是100％正確的。';
$string['errornostaticlog'] = '由於沒有效能日誌，因此無法評估基於假設的模組。';
$string['erroronlycli'] = '僅允許透過命令行執行';
$string['errortrainingdataexport'] = '模組訓練資料無法匯出';
$string['evaluate'] = '評估';
$string['evaluatemodel'] = '評估模組';
$string['evaluationinbatches'] = '計算網站內容並分批存儲。評估過程可以隨時停止。下次運行時，它將從停止點開始繼續運行。';
$string['evaluationmode'] = '評估模組';
$string['evaluationmode_help'] = '"有兩組評估模組：

* 訓練後的模組 - 網站數據用作測試資料，以評估訓練後模組的準確性。
* 組態 - 為了訓練和測試模組配置的準確性，網站數據分為訓練和測試資料。

當已將訓練模型匯入到網站點中並且尚未使用網站數據對其進行訓練時，訓練模組才可使用。';
$string['evaluationmodecolconfiguration'] = '組態';
$string['evaluationmodecoltrainedmodel'] = '已訓練的模組';
$string['evaluationmodeconfiguration'] = '評估模組配置';
$string['evaluationmodeinfo'] = '該模組已匯入網站。您可以評估模組的效能，也可以使用網站數據評估模組配置的效能。';
$string['evaluationmodetrainedmodel'] = '評估已訓練的模組';
$string['executescheduledanalysis'] = '執行已排程的分析';
$string['export'] = '匯出';
$string['exportincludeweights'] = '包含已訓練模組的權重';
$string['exportmodel'] = '匯出組態';
$string['exporttrainingdata'] = '匯出訓練資料';
$string['extrainfo'] = '資訊';
$string['generalerror'] = '評估錯誤。狀態碼 {$a}';
$string['getpredictions'] = '取得預測';
$string['goodmodel'] = '這是用於獲取預測的良好模組。啟用它以開始獲取預測。';
$string['ignoreversionmismatches'] = '忽略版本不匹配';
$string['ignoreversionmismatchescheckbox'] = '忽略此網站版本和原始網站版本之間的差異。';
$string['importedsuccessfully'] = '該模組已成功匯入。';
$string['importmodel'] = '匯入模組';
$string['indicators'] = '指標';
$string['indicators_help'] = '您認為的這些指標將導致對目標的準確預測。';
$string['indicatorsnum'] = '指標數量：{$a}';
$string['info'] = '資訊';
$string['insights'] = '分析報告';
$string['invalidanalysables'] = '無效的網站元件';
$string['invalidanalysablesinfo'] = '本頁列出了此預測模組無法使用的可分析元件。列出的元件既不能用於訓練預測模組，也不能用於對其進行預測。';
$string['invalidanalysablestable'] = '無效的網站可分析元件列表';
$string['invalidcurrenttimesplitting'] = '當前分析區間對此模組的目標無效。請選擇其他區間。';
$string['invalidindicatorsremoved'] = '已新增了模組。已自動刪除不適用於所選目標的指標。';
$string['invalidprediction'] = '取得預測無效';
$string['invalidtimesplitting'] = '選擇的分析區間對所選目標無效。';
$string['invalidtimesplittinginmodels'] = '某些模組使用的分析區間無效。請為以下模組選擇其他區間：{$a}';
$string['invalidtraining'] = '無效的訓練模組';
$string['loginfo'] = '紀錄額外資訊';
$string['missingmoodleversion'] = '匯入的檔案未定義版本號';
$string['modelid'] = '模組 ID';
$string['modelinvalidanalysables'] = '模組 "{$a}" 的無效可分析元件';
$string['modelname'] = '模組名稱';
$string['modelresults'] = '結果 {$a}';
$string['modeltimesplitting'] = '分析區間';
$string['newmodel'] = '新模組';
$string['nextpage'] = '下一頁';
$string['noactionsfound'] = '用戶尚未對產生的分析報告執行任何動作。';
$string['nodatatoevaluate'] = '沒有資料可供評估模組';
$string['nodatatopredict'] = '沒有新的元件可以預測。';
$string['nodatatotrain'] = '沒有新的資料可用於訓練。';
$string['noinvalidanalysables'] = '此網站不包含任何無效的可分析元件。';
$string['notdefined'] = '尚未定義';
$string['pluginname'] = '分析模組';
$string['predictionprocessfinished'] = '預測過程已完成';
$string['predictionresults'] = '預測結果';
$string['predictmodels'] = '預測模組';
$string['predictorresultsin'] = '預測器在目錄 {$a} 中記錄的資訊';
$string['previouspage'] = '上一頁';
$string['privacy:metadata'] = '分析外掛模組不儲存任何個人資料。';
$string['restoredefault'] = '還原預設模組';
$string['restoredefaultempty'] = '請選擇要還原的模組。';
$string['restoredefaultinfo'] = '自安裝以來，這些預設模組已遺失或已更改。您可以還原選定的預設模組。';
$string['restoredefaultnone'] = '系統核心和已安裝外掛所提供的預設模組均已建立。找不到新模組；沒有什麼可還原的。';
$string['restoredefaultsome'] = '成功重新建立了 {$ a-> count} 個新模組。';
$string['restoredefaultsubmit'] = '還原所選的';
$string['sameenddate'] = '當前結束日期良好';
$string['samestartdate'] = '當前開始日期良好';
$string['scheduledanalysisresults'] = '使用 {$a->name} 分析區間的結果';
$string['scheduledanalysisresultscli'] = '使用 {$a->name} (id: {$a->id}) 分析區間的結果';
$string['selecttimesplittingforevaluation'] = '選擇要用於評估模組配置的分析區間。';
$string['target'] = '目標';
$string['target_help'] = '模組將預測的目標。';
$string['timesplittingnotdefined'] = '沒有定義分析區間。';
$string['timesplittingnotdefined_help'] = '啟用模組之前，您需要選擇一個分析區間。';
$string['trainandpredictmodel'] = '訓練模型和計算預測';
$string['trainingprocessfinished'] = '訓練過程完成';
$string['trainingresults'] = '訓練結果';
$string['trainmodels'] = '訓練模型';
$string['versionnotsame'] = '匯入的檔案版本 ({$a->importedversion}) 與目前版本 ({$a->version})  不同';
$string['viewlog'] = '評估日誌';
$string['weeksenddateautomaticallyset'] = '依據開始日期和區段數自動設置結束日期';
$string['weeksenddatedefault'] = '結束日期由課程開始日期自動計算得出。';
