<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("� ���");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"team-preson-slider", 
	array(
		"COMPONENT_TEMPLATE" => "about-preson-slider",
		"IBLOCK_TYPE" => "startup",
		"IBLOCK_ID" => "STARTUP_PERSONS",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "FACEBOOK_LINK",
			2 => "GOOGLEPLUS_LINK",
			3 => "TWITTER_LINK",
			4 => "YOUTUBE_LINK",
			5 => "VK_LINK",
			6 => "ODNOKLASSNII_LINK",
			7 => "",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "team",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SLIDER_ABOUT_TITLE" => "<span>����</span> �������",
		"PADDING_TOP" => "Y",
        "TITLE_TYPE" => "h1",
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>