<pre>
<?php echo htmlentities(file_get_contents(__FILE__,true,null,92)) ?>
</pre>
<br/>





<?php YsJQuery::usePlugin(YsJQueryConstant::PLUGIN_JQEDITOR); ?>

<button id="btnOpenDialog">Show Demo</button>
<?php echo YsUIDialog::initWidget('dialogId','style="display:none" title="Basic dialog"') ?>
  <?php echo YsJQEditor::initWidget('editor') ?>
    <table>
      <tr>
        <td>Editor content</td>
      </tr>
    </table>
  <?php echo YsJQEditor::endWidget() ?>
<?php echo YsUIDialog::endWidget() ?>

<?php
echo
YsJQuery::newInstance()
  ->onClick()
  ->in("#btnOpenDialog")
  ->execute(
    YsUIDialog::build('#dialogId')
      ->_modal(true)
      ->_width(600)
      ->_height('auto')
      ->_buttons(array(
        'Ok' => new YsJsFunction('alert("Hello world")'),
        'Close' =>  new YsJsFunction(YsUIDialog::close('this')))
       ),
    YsJQEditor::build()->in('#editor')
  )
?>