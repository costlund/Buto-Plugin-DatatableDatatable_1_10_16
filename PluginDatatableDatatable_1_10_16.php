<?php
/**
 * <p>Add sort, paging and search methods to a html table via Javascript.
<p>
https://datatables.net/
</p>
<p>
Just set id to any table and use widgets "include" and "run" to make use of Dynatable.
</p>
<p>Go to https://datatables.net/plug-ins/i18n/ for downloading i18n files.</p>
 * 
$(document).ready(function(){ $('#myTable').DataTable(); }); 
 */
class PluginDatatableDatatable_1_10_16{
  /**
  <p>
   * Include Datatable in head or before table. Set style to datatables or bootstrap.
  </p>
  */
  public static function widget_include($data){
    $style = strtolower(wfArray::get($data, 'data/style'));
    if(!$style){
      $style = 'datatables';
    }
    $element = array();
    if($style == 'datatables'){
      $element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/datatable/datatable_1_10_16/css/jquery.dataTables.min.css', 'rel' => 'stylesheet'));
      $element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/datatable/datatable_1_10_16/js/jquery.dataTables.min.js', 'type' => 'text/javascript'));
    }elseif($style == 'bootstrap'){
      $element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/datatable/datatable_1_10_16/css/dataTables.bootstrap.min.css', 'rel' => 'stylesheet'));
      $element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/datatable/datatable_1_10_16/js/jquery.dataTables.min.js', 'type' => 'text/javascript'));
      $element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/datatable/datatable_1_10_16/js/dataTables.bootstrap.min.js', 'type' => 'text/javascript'));
    }
    wfDocument::renderElement($element);
  }
  /**
  <p>
   * Run Datatable command on a table by it´s id. The "include" widget has to be embeded before this widget.
  </p>
  */
  public static function widget_run($data){
    $id = wfArray::get($data, 'data/id');
    $json = wfArray::get($data, 'data/json');
    if($json){
      $json = json_encode($json);
    }else{
      $json = array();
    }
    $element = array();
    $element[] = wfDocument::createHtmlElement('script', "var datatable_$id; $(document).ready(function(){ datatable_$id = $('#$id').DataTable($json); });");
    wfDocument::renderElement($element);
  }
}
