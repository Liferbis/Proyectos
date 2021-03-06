<pre>
<?php echo htmlentities(file_get_contents(__FILE__,true,null,92)) ?>
</pre>
<br/>





<?php

YsJQuery::useComponent(YsJQueryConstant::COMPONENT_JQGRID);

$grid = new YsGrid('gridId','Title');

$idGridField = new YsGridField('id', 'Inv No');
$idGridField->setWidth(60);
$idGridField->setSortType(YsGridConstants::SORT_TYPE_INT);
$idGridField->setSummaryType(YsGridConstants::SUMARY_TYPE_COUNT);
$idGridField->setSummaryTemplate("({0}) total");

$invDateGridField = new YsGridField('invdate', 'Date');
$invDateGridField->setWidth(90);
$invDateGridField->setSortType(YsGridConstants::SORT_TYPE_DATE);
$invDateGridField->setFormatter(YsGridConstants::FORMATTER_DATE);

$clientGridField = new YsGridField('name', 'Client');
$clientGridField->setWidth(100);
$clientGridField->setEditable(true);

$amountGridField = new YsGridField('amount', 'Amount');
$amountGridField->setWidth(80);
$amountGridField->setAlign(YsAlignment::$RIGHT);
$amountGridField->setSortType(YsGridConstants::SORT_TYPE_FLOAT);
$amountGridField->setFormatter(YsGridConstants::FORMATTER_NUMBER);
$amountGridField->setEditable(true);

$taxGridField = new YsGridField('tax', 'Tax');
$taxGridField->setWidth(80);
$taxGridField->setAlign(YsAlignment::$RIGHT);
$taxGridField->setSortType(YsGridConstants::SORT_TYPE_FLOAT);
$taxGridField->setEditable(true);

$totalGridField = new YsGridField('total', 'Total');
$totalGridField->setWidth(80);
$totalGridField->setAlign(YsAlignment::$RIGHT);
$totalGridField->setSortType(YsGridConstants::SORT_TYPE_FLOAT);
$totalGridField->setFormatter(YsGridConstants::FORMATTER_NUMBER);
$totalGridField->setSummaryType(YsGridConstants::SUMARY_TYPE_SUM);

$noteGridField = new YsGridField('note', 'Note');
$noteGridField->setWidth(150);
$noteGridField->setSortable(false);

$grid->addGridFields($idGridField, $invDateGridField, $clientGridField, $amountGridField, $taxGridField, $totalGridField, $noteGridField);

$recordList = new YsGridRecordList();

for($i = 1; $i <= 20 ; $i++){
  $rand = rand(1,3);
  $record = new YsGridRecord();
  $record->setAttribute('id', $i);
  $record->setAttribute('invdate', '2010-05-24');
  $record->setAttribute('name', 'test' . $rand);
  $record->setAttribute('note', 'note'. $rand);
  $record->setAttribute('amount', rand(1,100));
  $record->setAttribute('tax', rand(1,100));
  $record->setAttribute('total', rand(1,1000));
  $recordList->append($record);
}

$grid->setRecordList($recordList);

$grid->setWidth("100%");
$grid->setDataType(YsGridConstants::DATA_TYPE_LOCAL);
$grid->setRowNum($i - 1);
$grid->setRowList(array(3,5,10));
$grid->setViewRecords(true);
$grid->setSortname('name');
$grid->setGrouping(true);

$groupingView = new YsGridGroupingView();
$groupingView->setGroupField($clientGridField); // OR ->setGroupField('name');
$groupingView->setGroupCollapse(true);
$groupingView->setGroupOrder(YsAlignment::$ORDER_DESC);
$groupingView->setGroupColumnShow(false);
$groupingView->setGroupSummary(true);
$groupingView->setGroupDataSorted(true);
$groupingView->setShowSummaryOnHide(true);

$grid->setGroupingView($groupingView);

?>

<button id="btnOpenDialog">Show Demo</button>

<?php echo YsUIDialog::initWidget('dialogId','style="display:none" title="Basic dialog"') ?>
  <?php echo $grid->renderTemplate() ?>
  <button id="btnToggle">Remove group </button>
<?php echo YsUIDialog::endWidget() ?>

<?php
echo
YsJQuery::newInstance()
  ->onClick()
  ->in('#btnOpenDialog')
  ->execute(
    YsUIDialog::build('#dialogId')
      ->_modal(true)
      ->_width(670)
      ->_zIndex(100)
      ->_height('auto')
      ->_buttons(array(
        'Ok' => new YsJsFunction('alert("Hello world")'),
        'Close' =>  new YsJsFunction(YsUIDialog::close('this')))
       )
  )
?>

<?php
echo
YsJQuery::newInstance()
  ->onClick()
  ->in('#btnToggle')
  ->execute(
    $grid->invoke('groupingRemove',false)
  );
?>

<?php echo $grid->execute() ?>