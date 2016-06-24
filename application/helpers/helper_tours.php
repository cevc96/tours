<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('_simpleEncrypt')) {
    /**
     * Desencripta usando mcrypt_encrypt
     * @author dfloresgonz
     * @since 22.03.2016
     * @param $toDecrypt variable que sera desencriptada
     * @return variable encriptada
     */
    function _simple_encrypt($toEncrypt) {
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, $toEncrypt, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
    }
}

if(!function_exists('_simpleDecrypt')) {
    /**
     * Desencripta usando mcrypt_decrypt
     * @author dfloresgonz
     * @since 22.03.2016
     * @param $toDecrypt variable que sera desencriptada
     * @return variable desencriptada
     */
    function _simple_decrypt($toDecrypt) {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, base64_decode($toDecrypt), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
    }
}