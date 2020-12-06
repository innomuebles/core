<?php
namespace InnoMuebles\Core\Plugin\Magento\Framework\Config;
# 2020-12-07
# «The XML in file "vendor/magento/module-inventory-catalog/etc/communication.xml" is invalid:
# Element 'topic', attribute 'is_synchronous': The attribute 'is_synchronous' is not allowed.»:
# https://github.com/innomuebles/m2/issues/1
final class ValidationStateInterface {
	/**
	 * 2020-12-07
	 * @see \Magento\Framework\App\Arguments\ValidationState::isValidationRequired()
	 * @see \Magento\Framework\Config\ValidationStateInterface::isValidationRequired()
	 * @return false
	 */
	function afterIsValidationRequired() {return false;}
}