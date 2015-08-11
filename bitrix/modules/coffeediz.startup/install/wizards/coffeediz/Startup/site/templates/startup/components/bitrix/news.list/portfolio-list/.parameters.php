<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arTemplateParameters = array(
    "SLIDER_ABOUT_TITLE" => Array(
        "NAME" => GetMessage("SLIDER_ABOUT_TITLE"),
        "PARENT" => "BASE",
        "TYPE" => "STRING",
        "DEFAULT" => GetMessage("SLIDER_ABOUT_TITLE_DEFAULT"),
    ),
    "PADDING_TOP" => Array(
        "NAME" => GetMessage("PADDING_TOP"),
        "PARENT" => "BASE",
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "N",
    ),
    "VIEW_JSFILTER" => Array(
        "NAME" => GetMessage("VIEW_JSFILTER"),
        "PARENT" => "BASE",
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "Y",
    ),
    "BACKGROUND_IMAGE" => Array(
        "NAME" => GetMessage("BACKGROUND_IMAGE"),
        "PARENT" => "BASE",
        "TYPE" => "STRING",
        "DEFAULT" => "/local/templates/startup/components/bitrix/news.list/about-preson-slider/img/bg-1.jpg",
    ),

);
?>