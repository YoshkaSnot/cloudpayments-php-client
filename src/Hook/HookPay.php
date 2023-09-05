<?php

namespace Excent\Cloudpayments\Hook;

/**
 * Class HookPay.
 *
 * @link https://developers.cloudpayments.ru/#pay
 */
class HookPay extends BaseHook
{
    // Required

    public ?int $transactionId = null;
    public ?float $amount = null;
    public ?string $currency = null;
    public ?string $dateTime = null;
    public ?string $cardFirstSix = null;
    public ?string $cardLastFour = null;
    public ?string $cardType = null;
    public ?string $cardExpDate = null;
    public ?int $testMode = null;
    public ?string $status = null;
    public ?string $operationType = null;
    public ?string $gatewayName = null;

    // Not required

    public ?string $invoiceId = null;
    public ?string $accountId = null;
    public ?string $subscriptionId = null;
    public ?string $name = null;
    public ?string $email = null;
    public ?string $ipAddress = null;
    public ?string $ipCountry = null;
    public ?string $ipCity = null;
    public ?string $ipRegion = null;
    public ?string $ipDistrict = null;
    public ?string $issuer = null;
    public ?string $issuerBankCountry = null;
    public ?string $description = null;
    public ?string $data = null;
    public ?string $token = null;
    public ?float $totalFee = null;
    public ?string $cardProduct = null;
    public ?string $paymentMethod = null;
    public ?int $fallBackScenarioDeclinedTransactionId = null;
}
