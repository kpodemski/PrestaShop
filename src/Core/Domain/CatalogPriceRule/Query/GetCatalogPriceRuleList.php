<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query;

use PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId;

class GetCatalogPriceRuleList
{
    /**
     * @var LanguageId
     */
    private $langId;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @var int|null
     */
    private $offset;

    public function __construct(int $langId, ?int $limit = null, ?int $offset = null)
    {
        $this->langId = new LanguageId($langId);
        $this->limit = $limit;
        $this->offset = $offset;
    }

    /**
     * @return LanguageId
     */
    public function getLangId(): LanguageId
    {
        return $this->langId;
    }

    /**
     * @param int|null $limit
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $offset
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }
}
