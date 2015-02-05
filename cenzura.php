<?php
$cuvinte_vulgare = array('fut','muie','pula','coaie','sugi','cur','pizda','fuck','suck','dracu','cur','pola','sperma','Fut','Muie','Pula','Coaie','Sugi','Cur','Pizda','Fuck','Suck','Dracu','Cur','Pola','Sperma');
$cenzura = '***';
$text= strtolower($_POST['text_introdus']);
$new_text=str_replace($cuvinte_vulgare,$cenzura,$text);


if(isset($_POST['text_introdus']) &&! empty ($_POST['text_introdus']))
	
{

echo 'Textul cenzurat este:<br>';
echo ucfirst($new_text);

}
 
