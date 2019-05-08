<?php 

use \Ebumba\PageAdmin;
use \Ebumba\Model\User;
use \Ebumba\Model\Sector;


$app->get("/admin/sector", function(){

	User::verifyLogin();
   
	$sector = Sector::listALL();

	$page = new PageAdmin();

	$page->setTpl("sector",[
		'sector'=>$sector
	]);
});


$app->get("/admin/sector/create", function(){

	User::verifyLogin();
   
	$page = new PageAdmin();

	$page->setTpl("sector-create");

});
$app->post("/admin/sector/create", function(){

	User::verifyLogin();
   
	$sector = new Sector ();
	
	$sector->setData($_POST);
	
	$sector->save();

	header('Location:/admin/sector');
	exit;
});


$app->get("/admin/sector/:idsector/delete", function($idsector){

	User::verifyLogin();

	$sector = new Sector();

	$sector->get((int)$idsector);

	$sector->delete();

	header('Location: /admin/sector');
	exit;

});

$app->get("/admin/sector/:idsector", function($idsector){

	User::verifyLogin();

	$sector = new Sector();
	  
	$sector->get((int)$idsector);
	
	$page = new PageAdmin();

	$page->setTpl("sector-update", [
	  'sector'=>$sector->getValues()
	]);	
});


$app->post("/admin/sector/:idsector", function($idsector){

	User::verifyLogin();

	$sector = new Sector();

	$sector->get((int)$idsector);

	$sector->setData($_POST);

	$sector->save();	

	header('Location: /admin/sector');
	exit;

});

 ?>








