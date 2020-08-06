<?php
/**
 * NetworkFeeMode
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BTCPay Greenfield API
 *
 * A full API to use your BTCPay Server
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * NetworkFeeMode Class Doc Comment
 *
 * @category Class
 * @description Check whether network fee should be added to the invoice if on-chain payment is used. ([More information](https://docs.btcpayserver.org/FAQ/FAQ-Stores/#add-network-fee-to-invoice-vary-with-mining-fees))
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworkFeeMode
{
    /**
     * Possible values of this enum
     */
    const MULTIPLE_PAYMENTS_ONLY = 'MultiplePaymentsOnly';
const ALWAYS = 'Always';
const NEVER = 'Never';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MULTIPLE_PAYMENTS_ONLY,
self::ALWAYS,
self::NEVER,        ];
    }
}