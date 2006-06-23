<?php
// $Id$
require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/livesearch_select.php';
require_once 'myfunction.php';
// Instantiate the HTML_QuickForm object
$form = new HTML_QuickForm('firstForm');


// Add some elements to the form
$form->addElement('header', null, 'QuickForm example');

$form->addElement('livesearch_select', 'Nome', 'Example: Live Select, <br>select a name and return an ID <br>(useful for dropdown lists)',
                 array(
                      'elementId' => 'search', //element id
                      'callback' => array('Test', 'getTestName'),//callback function to retrieve ID from selection
//                       'dbh' => $db,//optional handler for callback function
                      'style' => '',//optional class for style not set or '' ==> default
                      'divstyle' => '',//optional class for style not set or '' ==> default
                      'ulstyle' => '',//optional class for style not set or '' ==> default
                      'listyle' => '',//optional class for style not set or '' ==> default
                      'searchZeroLength' => 1, //enable the search request with 0 length keyword
                      'buffer' => 350 //set the interval single buffer send time (ms)
                      ),
                      array('size' => '50')
                  );
$form->addElement('livesearch_select', 'Nome2', 'Example2: Live Select, <br>select a name and return an ID <br>(useful for dropdown lists)',
                 array(
                      'elementId' => 'search2', //element id
                      'callback' => array('Test', 'getTestName2'),//callback function to retrieve ID from selection
//                       'dbh' => $db,//optional handler for callback function
                      ),
                  'size=30'
                  );
$form->addElement('text', 'required_field', 'errorTest', 'Some data:');
$form->addElement('submit', null, 'View', array('id'=>'submit'));
$form->addRule('required_field', 'Data required', 'required', null, 'server');
$form->addRule('Nome', 'Data required', 'required', null, 'server');
if ($form->validate()) {
  echo"<pre>";print_r($_POST);echo"</pre>";
  $form->freeze();
}
// Output the form
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Livesearch QuickForm Test</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<p style="font-size:14px;">HTML_AJAX dependent QF_Livesearch DROPDOWN<br>
In this example we can find something from database, such a Fourm Post or a word in a News Post...<br>
This type of livesearch is useful when you have a form with a dropdown list with a large number of row.<br>
With HTML_QuickForm, you can easily do the trick ;).</p>
<?php
$form->display();
?>
</body>
</html>