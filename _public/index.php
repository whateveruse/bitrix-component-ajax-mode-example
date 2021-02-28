<?
/** @bxnolanginspection */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("SHOW_TITLE", "N");
$APPLICATION->SetPageProperty("SHOW_MAIN_SLIDER", "Y");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("SHOW_FOOTER_CALLOUT", "ne-nashli-podkhodyashchego-varianta");
$APPLICATION->SetTitle("���� ��������� ������������ - ��������� ������������");
$APPLICATION->SetPageProperty("description", "���� ��������� ������������ ��������� ������������. ������� ������� � ������, ������ ������������ ������������, ������ � ��������� �������. ����������� ������������� ������.");
$APPLICATION->SetPageProperty("keywords", "���� ��������� ������������ ��������� ������������");
?>
<?$APPLICATION->IncludeComponent(
	"citrus:realty.favourites",
	"block",
	array(
		"PATH" => "/predlozhenija/izbrannoe/",
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"citrus.core:include",
	".default",
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "quick-sale",
		"PAGE_SECTION" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"h" => ".h1",
		"PADDING" => "Y",
		"TITLE" => "������� ��������",
		"DESCRIPTION" => "�������� ��� �������� � ������� ������� ������",
		"WIDGET_REL" => ["filter", "quick-sale"],
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"citrus.core:include",
	".default",
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "service",
		"TITLE" => "���� ������",
		"DESCRIPTION" => "��������� �������� � �������!",
		"EDIT_TEMPLATE" => "clear.php",
		"PAGE_SECTION" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"h" => ".h1",
		"WIDGET_REL" => "services",
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"citrus.core:include",
	".default",
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "block_company_about",
		"AREA_FILE_RECURSIVE" => "Y",
		"h" => "h1",
		"PAGE_SECTION" => "Y",
		"WIDGET_REL" => "seo-block",
		"COMPONENT_TEMPLATE" => ".default",
		"PADDING" => "Y",
		"BG_COLOR" => "N",
		"BOTTOM_SUBSTRATE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"citrus.core:include",
	".default",
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "who-we",
		"AREA_FILE_RECURSIVE" => "Y",
		"TITLE" => "��� ��?",
		"DESCRIPTION" => "11 ��� �������� ������ �� ����� �������������!",
		"PAGE_SECTION" => "Y",
		"WIDGET_REL" => "who-we",
		"h" => ".h1",
		"PADDING" => "Y",
		"BG_COLOR" => "GRAY",
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"citrus.core:include",
	".default",
	array(
		"AREA_FILE_SHOW" => "component",
		"_COMPONENT" => "citrus.arealty:callout",
		"_COMPONENT_TEMPLATE" => ".default",
		"PAGE_SECTION" => "N",
		"WIDGET_REL" => "callout",
		"IBLOCK_ID" => "callout",
		"ID" => "nuzhna-individualnaya-konsultatsiya",
		"COMPONENT_TEMPLATE" => "callout",
		"IBLOCK_TYPE" => "info",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"citrus.core:include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "new-offers",
		"EDIT_TEMPLATE" => "page_inc.php",
		"EDIT_MODE" => "php",
		"TITLE" => '����� �������',
		"DESCRIPTION" => "����������� � ������������ ����� ��� ������ ����� �� ����� �� �����������!",
		"PAGE_SECTION" => "Y",
		"WIDGET_REL" => "new-offers",
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>