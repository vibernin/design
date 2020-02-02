<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<div id="calculator">
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"section.list",
		Array(
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"CACHE_TIME" => "",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "Y",
			"FILTER_NAME" => "sectionsFilter",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "concrete",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array("",""),
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array("",""),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "2",
			"VIEW_MODE" => "LINE"
		)
	);?>
    <div class="count">
        <div class="text">Укажите нужный вам объем м²</div>
        <input id="count">
    </div>
    <div class="btn">
	    <input type="submit" id="submit" value="Посчитать">
    </div>
</div>
<div id="error"></div>
<div id="result"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>