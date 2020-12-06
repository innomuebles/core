<?php
namespace InnoMuebles\Core\Preference\Magento\Framework\App\Arguments;
use Magento\Framework\App\Arguments\ValidationState as _P;
# 2020-12-07
# 1) «The XML in file "vendor/magento/module-inventory-catalog/etc/communication.xml" is invalid:
# Element 'topic', attribute 'is_synchronous': The attribute 'is_synchronous' is not allowed.»:
# https://github.com/innomuebles/m2/issues/1
# 2) A plugin does not work here.
class ValidationState extends _P {
	/**
	 * 2020-12-07
	 * @override
	 * @see \Magento\Framework\App\Arguments\ValidationState::isValidationRequired()
	 * @used-by \Magento\Framework\Config\Dom::_initDom()
	 * @used-by \Magento\Framework\Config\Dom::validate()
	 * @return false
	 */
	function isValidationRequired() {return false;}
}