<?php
/*
* Empresa		: BlackPrince S.A. 2009
* Aplicaci�n	: Sistemas de Citas
* An�lisis		: R&R
* Desarrollo	: Randiel J. Melgarejo
* Fecha			: Viernes, 07 de agosto 2009 
**
**
**
*/
include ('formPanel.php');

$js .= "
	var fit = {
		id: 'fit-panel',
		border: false,
		autoHeight : true,
		columnWidth: .6, 	
		layout: 'fit',
		items: [ formPanel ]
	};
";
?>