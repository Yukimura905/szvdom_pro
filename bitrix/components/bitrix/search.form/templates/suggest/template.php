<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div class="search-form">
<form action="<?=$arResult["FORM_ACTION"]?>">
<input name="s" type="submit" value="<?//=GetMessage("BSF_T_SEARCH_BUTTON");?>" />&nbsp;
	<?$APPLICATION->IncludeComponent(
		"bitrix:search.suggest.input",
		"",
		array(
			"NAME" => "q",
			"VALUE" => "",
			"INPUT_SIZE" => 15,
			"DROPDOWN_SIZE" => 10,
		),
		$component, array("HIDE_ICONS" => "Y")
	);?>
</form>
</div>