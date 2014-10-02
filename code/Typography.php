<?php
/**
 * Typography test page for SilverStripe
 * =====================================
 *
 * A SilerStripe extension to add a typography test page to your website
 *
 * Once installed, run a flush=1 and access /typo/ on your website
 * eg: www.exmaple.com/typo/
 *
 * License: MIT-style license http://opensource.org/licenses/MIT
 * Authors: Techno Joy development team (www.technojoy.co.nz)
 * Inspired by https://github.com/sunnysideup/silverstripe-typography
 */
class Typo extends Page_Controller {

	public function init() {
		parent::init();
		Requirements::javascript(
			basename(dirname(dirname(__FILE__))) . "/javascript/typo.js"
		);
		$this->Title = 'Typography test page';
		$this->ExtraMeta = '<meta name="robots" content="noindex, nofollow" />';
	}

	function TypoForm() {
		$array[] = "green";
		$array[] = "yellow";
		$array[] = "blue";
		$array[] = "pink";
		$array[] = "orange";
		$form = new Form(
			$controller = $this,
			$name = "TestForm",
			$fields = new FieldList(
				new HeaderField($name = "HeaderField1", $title = "HeaderField Level 1", 1),
				new LiteralField($name = "LiteralField", "<p>NOTE: All fields up to EmailField are required and should be marked as such</p>"),
				new TextField($name = "TextField1", $title = "Text Field Example 1"),
				new TextField($name = "TextField2", $title = "Text Field Example 2"),
				new TextField($name = "TextField3", $title = "Text Field Example 3"),
				new TextField($name = "TextField4", $title = ""),
				new HeaderField($name = "HeaderField2b", $title = "Field with right title", 2),
				$textAreaField = new TextareaField($name = "TextareaField", $title = "Textarea Field"),
				new EmailField("EmailField", "Email address"),
				new HeaderField($name = "HeaderField2c", $title = "HeaderField Level 2", 2),
				new DropdownField($name = "DropdownField",$title = "Dropdown Field", array( 0 => "-- please select --", 1 => "test AAAA", 2 => "test BBBB")),
				new OptionsetField($name = "OptionSF",$title = "Optionset Field", $array),
				new CheckboxSetField($name = "CheckboxSF",$title = "Checkbox Set Field", $array),
				new CountryDropdownField($name = "CountryDropdownField",$title = "Countries"),
				new CurrencyField($name = "CurrencyField",$title = "Bling bling", "$123.45"),
				new HeaderField($name = "HeaderField3", $title = "Other Fields", 3),
				new NumericField($name = "NumericField", $title = "Numeric Field "),
				new DateField($name = "DateField", $title = "Date Field"),
				new DateField($name = "DateTimeField", $title = "Date and Time Field"),
				new CheckboxField($name = "CheckboxField", $title = "Checkbox Field")
			),
			$actions = new FieldList(
				new FormAction("submit", "Submit Button")
			),
			$requiredFields = new RequiredFields(
				"TextField1","TextField2", "TextField3","ErrorField1","ErrorField2", "EmailField", "TextField3", "RightTitleField", "CheckboxField", "CheckboxSetField"
			)
		);
		$textAreaField->setColumns(45);
		$form->setMessage("warning message", "warning");
		return $form;
	}

	function TestForm($data) {
		$this->redirectBack();
	}

}
