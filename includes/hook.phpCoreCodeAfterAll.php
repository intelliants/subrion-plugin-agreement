<?php
//##copyright##

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	if (isset($_POST['not_agree']))
	{
		iaUtil::go_to(IA_URL);
	}

	if (isset($_POST['agree']))
	{
		$_SESSION['agree'] = true;
	}

	if (!isset($_SESSION['agree']) || !$_SESSION['agree'])
	{
		define('IA_CURRENT_PLUGIN', 'agreement');
		define('IA_PLUGIN_TEMPLATE', IA_PLUGINS . IA_CURRENT_PLUGIN . '/templates/common/');

		$iaView->display('agreement');
	}
}