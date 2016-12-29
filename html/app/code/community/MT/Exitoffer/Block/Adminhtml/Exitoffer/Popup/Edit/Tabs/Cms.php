<?php

class MT_Exitoffer_Block_Adminhtml_Exitoffer_Popup_Edit_Tabs_Cms
    extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('general', array('legend' => Mage::helper('exitoffer')->__('Static block settings')));

        $fieldset->addField('static_block_id', 'select', array(
            'label' => Mage::helper('exitoffer')->__('Static Block'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'popup[static_block_id]',
            'values' => Mage::getModel('exitoffer/adminhtml_system_config_cms')->toOptionArray()
        ));

        $currentObj = Mage::registry('exitoffer_popup_data');
        if ($currentObj && $currentObj->getId()) {
            $form->setValues($currentObj->getData());
        }

        return parent::_prepareForm();
    }
}