<?php

namespace Love\WeChatPayV3\Service;

use Love\WeChatPayV3\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property Certificate\Client $certificate
 * @property Notify\Client $notify
 * @property Apply4Sub\SubMerchant\Client $subMerchant
 * @property Merchant\Media\Client $media
 * @property CombineTransaction\Client $combineTransaction
 * @property Ecommerce\Applyment\Client $applyment
 * @property Ecommerce\Bill\Client $ecommerceBill
 * @property Ecommerce\ProfitSharing\Order\Client $ecommerceProfitSharingOrder
 * @property Ecommerce\ProfitSharing\ReturnOrder\Client $ecommerceProfitSharingReturnOrder
 * @property Ecommerce\ProfitSharing\FinishOrder\Client $ecommerceProfitSharingFinishOrder
 * @property Ecommerce\ProfitSharing\Receiver\Client $ecommerceProfitSharingReceiver
 * @property Ecommerce\Subsidy\Client $subsidy
 * @property Ecommerce\Refund\Client $refund
 * @property Ecommerce\Fund\Withdraw\Client $withdraw
 * @property Ecommerce\Fund\Balance\Client $balance
 * @property Ecommerce\Fund\EndDayBalance\Client $endDayBalance
 * @property Bill\Client $bill
 * @property Pay\Transaction\Client $transaction
 * @property Pay\Partner\Transaction\Client $partnerTransaction
 * @property GoldPlan\Merchants\Client $goldPlanMerchant
 * @property Capital\Capitallhh\Area\Client $area
 * @property Capital\Capitallhh\Bank\Client $bank
 * @property Applyment4sub\Applyment\Client $subApplyment
 * @property Transfer\Batches\Client $transfer
 * @property ProfitSharing\Order\Client $profitSharingOrder
 * @property ProfitSharing\Receiver\Client $profitSharingReceiver
 * @property ProfitSharing\Transaction\Client $profitSharingTransaction
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Certificate\ServiceProvider::class,
        Notify\ServiceProvider::class,
        Apply4Sub\SubMerchant\ServiceProvider::class,
        Merchant\Media\ServiceProvider::class,
        CombineTransaction\ServiceProvider::class,
        Ecommerce\Applyment\ServiceProvider::class,
        Ecommerce\Bill\ServiceProvider::class,
        Ecommerce\ProfitSharing\Order\ServiceProvider::class,
        Ecommerce\ProfitSharing\ReturnOrder\ServiceProvider::class,
        Ecommerce\ProfitSharing\FinishOrder\ServiceProvider::class,
        Ecommerce\ProfitSharing\Receiver\ServiceProvider::class,
        Ecommerce\Subsidy\ServiceProvider::class,
        Ecommerce\Refund\ServiceProvider::class,
        Ecommerce\Fund\Withdraw\ServiceProvider::class,
        Ecommerce\Fund\Balance\ServiceProvider::class,
        Ecommerce\Fund\EndDayBalance\ServiceProvider::class,
        Bill\ServiceProvider::class,
        Pay\Transaction\ServiceProvider::class,
        Pay\Partner\Transaction\ServiceProvider::class,
        GoldPlan\Merchants\ServiceProvider::class,
        Capital\Capitallhh\Area\ServiceProvider::class,
        Capital\Capitallhh\Bank\ServiceProvider::class,
        Applyment4sub\Applyment\ServiceProvider::class,
        Transfer\Batches\ServiceProvider::class,
        ProfitSharing\Order\ServiceProvider::class,
        ProfitSharing\Receiver\ServiceProvider::class,
        ProfitSharing\Transaction\ServiceProvider::class,
    ];
}
