<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our licensing model, this program can be used
 * under the terms of the GNU Affero General Public License, version 3.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission can be found at and in the LICENSE file you have received
 * along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore, any rights, title and interest in
 * our trademarks remain entirely with the shopware AG.
 */

namespace Shopware\Bundle\StoreFrontBundle\Gateway;

use Shopware\Bundle\StoreFrontBundle\Struct\BaseProduct;
use Shopware\Bundle\StoreFrontBundle\Struct\Product\Download;
use Shopware\Bundle\StoreFrontBundle\Struct\ShopContextInterface;

interface DownloadGatewayInterface
{
    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see DownloadGatewayInterface::get()
     *
     * @param BaseProduct[] $products
     *
     * @return array<string, array<Download>> indexed by the product number, each array element contains a \Shopware\Bundle\StoreFrontBundle\Struct\Product\Download array
     */
    public function getList($products, ShopContextInterface $context);

    /**
     * The \Shopware\Bundle\StoreFrontBundle\Struct\Product\Download requires the following data:
     * - Download base data
     * - Core attribute of the download
     *
     * @return array<Download>|null
     */
    public function get(BaseProduct $product, ShopContextInterface $context);
}
