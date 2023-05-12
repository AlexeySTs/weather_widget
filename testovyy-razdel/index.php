<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тестовый раздел");
?><?$APPLICATION->IncludeComponent(
	"mcart:weather.widget",
	"",
	Array(
		"HLBLOCK_ID" => "1"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>