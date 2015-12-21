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
 * Author: Techno Joy development team (www.technojoy.co.nz)
 * Inspired by https://github.com/sunnysideup/silverstripe-typography
 */
class Typo extends Page_Controller
{

    public function init()
    {
        parent::init();
        Requirements::javascript(
            basename(dirname(dirname(__FILE__))) . '/javascript/typo.js'
        );
        $this->Title = 'Typography test page';
        $this->ExtraMeta .= '<meta name="robots" content="noindex, nofollow" />';
    }

    function TypoForm()
    {
        $array= array('green', 'yellow', 'blue', 'pink', 'orange');
        $form = new Form(
            $this,
            'TestForm',
            $fields = FieldList::create(
                HeaderField::create('HeaderField1', 'HeaderField Level 1', 1),
                LiteralField::create('LiteralField', '<p>All fields up to EmailField are required and should be marked as such</p>'),
                TextField::create('TextField1', 'Text Field Example 1'),
                TextField::create('TextField2', 'Text Field Example 2'),
                TextField::create('TextField3', 'Text Field Example 3'),
                TextField::create('TextField4', ''),
                HeaderField::create('HeaderField2b', 'Field with right title', 2),
                $textAreaField = new TextareaField('TextareaField', 'Textarea Field'),
                EmailField::create('EmailField', 'Email address'),
                HeaderField::create('HeaderField2c', 'HeaderField Level 2', 2),
                DropdownField::create('DropdownField', 'Dropdown Field', array( 0 => '-- please select --', 1 => 'test AAAA', 2 => 'test BBBB')),
                OptionsetField::create('OptionSF', 'Optionset Field', $array),
                CheckboxSetField::create('CheckboxSF', 'Checkbox Set Field', $array),
                CountryDropdownField::create('CountryDropdownField', 'Countries'),
                CurrencyField::create('CurrencyField', 'Bling bling', '$123.45'),
                HeaderField::create('HeaderField3', 'Other Fields', 3),
                NumericField::create('NumericField', 'Numeric Field '),
                DateField::create('DateField', 'Date Field'),
                DateField::create('DateTimeField', 'Date and Time Field'),
                CheckboxField::create('CheckboxField', 'Checkbox Field')
            ),
            $actions = FieldList::create(
                FormAction::create('submit', 'Submit Button')
            ),
            $requiredFields = RequiredFields::create(
                'TextField1',
                'TextField2',
                'TextField3',
                'ErrorField1',
                'ErrorField2',
                'EmailField',
                'TextField3',
                'RightTitleField',
                'CheckboxField',
                'CheckboxSetField'
            )
        );
        $textAreaField->setColumns(45);
        $form->setMessage('warning message', 'warning');
        return $form;
    }

    function TestForm($data)
    {
        $this->redirectBack();
    }
}
