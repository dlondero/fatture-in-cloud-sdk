<?php declare(strict_types=1);

namespace Fazland\FattureInCloud\Model\Document;

use Money\Money;

final class Good
{
    /**
     * Product identifier.
     *
     * @var string
     */
    public $id;

    /**
     * Product code.
     *
     * @var string
     */
    public $code;

    /**
     * Product name.
     *
     * @var string
     */
    public $name;

    /**
     * Measurement unit.
     *
     * @var string
     */
    public $mu;

    /**
     * Quantity.
     *
     * @var float
     */
    public $qty;

    /**
     * Product description.
     *
     * @var string
     */
    public $description;

    /**
     * Product category.
     *
     * @var string
     */
    public $category;

    /**
     * Net price (mandatory if document vatIncluded is false).
     *
     * @var Money
     */
    public $netPrice;

    /**
     * Gross price (mandatory if document vatIncluded is true).
     *
     * @var Money
     */
    public $grossPrice;

    /**
     * Vat rate code.
     *
     * @var int
     */
    public $vatCode;

    /**
     * Whether this product is taxable or not.
     *
     * @var bool
     */
    public $taxable;

    /**
     * Discount (percentage).
     *
     * @var float
     */
    public $discount;

    /**
     * @var bool
     */
    public $applyWithholdingAndContributions;

    /**
     * Document ordering. ASC from 0.
     *
     * @var int
     */
    public $order;

    /**
     * If a discount is present, highlight it in red.
     *
     * @var bool
     */
    public $highlightDiscount;

    /**
     * Whether this product is in the transport document.
     *
     * @var bool
     */
    public $inTransportDocument;

    /**
     * Whether to update the warehouse or not.
     * Ignored if not linked to product list or warehouse is disabled.
     *
     * @var bool
     */
    public $fromWarehouse;
}
