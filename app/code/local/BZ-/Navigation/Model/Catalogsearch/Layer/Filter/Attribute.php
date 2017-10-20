<?php
/**
 * Class Attribute
 *
 * @author bzhang@netstarter.com.au
 */
class BZ_Navigation_Model_Catalogsearch_Layer_Filter_Attribute extends BZ_Navigation_Model_Catalog_Layer_Filter_Attribute
{
    /**
     * Check whether specified attribute can be used in LN
     *
     * @param Mage_Catalog_Model_Resource_Eav_Attribute  $attribute
     * @return bool
     */
    protected function _getIsFilterableAttribute($attribute)
    {
        return $attribute->getIsFilterableInSearch();
    }

}