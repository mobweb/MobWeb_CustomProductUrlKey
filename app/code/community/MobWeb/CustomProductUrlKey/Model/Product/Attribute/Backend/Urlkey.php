<?php

class MobWeb_CustomProductUrlKey_Model_Product_Attribute_Backend_Urlkey extends Mage_Catalog_Model_Product_Attribute_Backend_Urlkey
{
    public function beforeSave($object)
    {
        $attributeName = $this->getAttribute()->getName();

        // Check if the URL key is already set. If it is, don't modify it, we don't want to change any existing
        // URL keys
        $urlKey = $object->getData($attributeName);
        if ($urlKey === false) {
            return $this;
        }

        if ($urlKey == '') {

            // Example: Get the product's short description and clean it up a bit. Magento's internal
            // functions take care of making sure the URL key is valid and human-readable
            // before saving it
            //$urlKey = trim(strip_tags(nl2br($object->getData('short_description'))));
        }

        // Default fallback, if no valid URL key has been generated above
        if ($urlKey == '') {
            $urlKey = $object->getName();
        }

        $object->setData($attributeName, $object->formatUrlKey($urlKey));

        return $this;
    }
}