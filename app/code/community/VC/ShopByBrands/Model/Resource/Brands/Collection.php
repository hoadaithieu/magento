<?php
class VC_ShopByBrands_Model_Resource_Brands_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    /**
     * Define resource model
     *
     */
    protected function _construct()
    {
        $this->_init('vc_shopbybrands/brands', 'id');
    }

    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     *
     * @return Varien_Db_Select
     */
    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(Zend_Db_Select::GROUP);
        return $countSelect;
    }
	
	public function setGroup($key) {
		$this->getSelect()->group($key);
		return $this;
	}
	
	public function sortOrder($key, $dir = 'ASC') {
		$this->getSelect()->order($key .' ' .$dir);
		return $this;
	}
}
