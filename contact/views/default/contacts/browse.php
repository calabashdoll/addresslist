<h1>Your Contacts</h1>
<div id="browsecontacts">
<?php
	foreach($view['contacts'] as $contact){
		echo view::show('contacts/small',array('contact'=>$contact));
	}
	echo '<div>';
	if(!isset($contact)){
		echo view::show('index/welcome');
	}