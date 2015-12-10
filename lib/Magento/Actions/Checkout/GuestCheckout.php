<?php

namespace Magium\Magento\Actions\Checkout;

use Magium\Magento\Actions\Checkout\Steps\BillingAddress;
use Magium\Magento\Actions\Checkout\Steps\PaymentMethod;
use Magium\Magento\Actions\Checkout\Steps\PlaceOrder;
use Magium\Magento\Actions\Checkout\Steps\ReviewOrder;
use Magium\Magento\Actions\Checkout\Steps\SelectGuestCheckout;
use Magium\Magento\Actions\Checkout\Steps\ShippingAddress;
use Magium\Magento\Actions\Checkout\Steps\ShippingMethod;
use Magium\Magento\Extractors\Checkout\CartSummary;
use Magium\Magento\Extractors\Checkout\OrderId;
use Magium\Magento\Navigators\Checkout\CheckoutNavigator;
use Magium\Magento\Navigators\Checkout\CheckoutStartNavigator;
use Magium\Magento\Themes\OnePageCheckout\AbstractThemeConfiguration;
use Magium\Magento\Themes\OnePageCheckout\ThemeConfiguration as OnePageCheckoutTheme;

class GuestCheckout extends AbstractCheckout
{

    public function __construct(
        CheckoutStartNavigator  $navigator,
        AbstractThemeConfiguration    $theme,
        SelectGuestCheckout     $selectGuestCheckout,
        BillingAddress          $billingAddress,
        ShippingAddress         $shippingAddress,
        ShippingMethod          $shippingMethod,
        PaymentMethod           $paymentMethod,
        CartSummary             $cartSummary,
        PlaceOrder              $placeOrder,
        OrderId                 $orderIdExtractor
    )
    {
        $this->addStep($navigator);
        $this->addStep($selectGuestCheckout);
        $this->addStep($billingAddress);
        $this->addStep($shippingAddress);
        $this->addStep($shippingMethod);
        $this->addStep($paymentMethod);
        $this->addStep($cartSummary);
        $this->addStep($placeOrder);
        $this->addStep($orderIdExtractor);

    }

}