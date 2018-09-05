<?php namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KE - Kenya.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class TerritoryKe extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KE';
    }

    public function firstDay()
    {
        return 0;
    }
}
