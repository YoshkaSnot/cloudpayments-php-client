<?php

namespace Excent\Cloudpayments\Request;

use Excent\Cloudpayments\BaseRequest;

/**
 * Class TokenPayment
 *
 * @package Excent\Cloudpayments\CardPayment
 * @see     https://developers.cloudpayments.ru/#oplata-po-tokenu-rekarring
 */
class TokenPayment extends BaseRequest
{
    /**
     * @var int|float
     */
    public $amount;
    public string $currency;
    public string $accountId;
    public string $token;
    public ?string $invoiceId;
    public ?string $description;
    public ?string $ipAddress;
    public ?string $email;
    public ?string $jsonData;

    /**
     * TokenPayment constructor.
     *
     * @param          $amount
     * @param  string  $currency
     * @param  string  $accountId
     * @param  string  $token
     */
    public function __construct($amount, string $currency, string $accountId, string $token)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->accountId = $accountId;
        $this->token = $token;
    }
}
