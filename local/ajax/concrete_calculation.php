<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
CModule::IncludeModule("iblock");

if(!empty($_REQUEST['sectionId'])){
    $sectionId = $_REQUEST['sectionId'];
}
if(!empty($_REQUEST['count'])){
    $count = $_REQUEST['count'];
}


$arSelect = Array("ID", "NAME", "CODE", "IBLOCK_SECTION_ID", "PROPERTY_CUBIC_METER");
$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>$sectionId);
$res = CIBlockElement::GetList(Array("SORT"=>"asc"), $arFilter, false, Array("nPageSize"=>10000), $arSelect);

while($ob = $res->GetNextElement()) {
    $arFields['ITEMS'][] = $ob->GetFields();

}
?>

<ul>
    <?foreach($arFields['ITEMS'] as $key => $item):?>
        <li><span class="name"><?=$item['NAME']?></span> <span class="value"><?=$item['PROPERTY_CUBIC_METER_VALUE'] * $count?> кг/м²</span></li>
    <?endforeach?>
</ul>
