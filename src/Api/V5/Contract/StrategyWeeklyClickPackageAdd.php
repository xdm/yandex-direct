<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyWeeklyClickPackageAdd
{

    protected $ClicksPerWeek = null;

    protected $AverageCpc = null;

    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyWeeklyClickPackageAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ClicksPerWeek.
     *
     * @return int
     */
    public function getClicksPerWeek()
    {
        return $this->ClicksPerWeek;
    }

    /**
     * Sets ClicksPerWeek.
     *
     * @param int $value
     * @return self
     */
    public function setClicksPerWeek($value)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return int|null
     */
    public function getAverageCpc()
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @param int|null $value
     * @return self
     */
    public function setAverageCpc($value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     *
     * @return int|null
     */
    public function getBidCeiling()
    {
        return $this->BidCeiling;
    }

    /**
     * Sets BidCeiling.
     *
     * @param int|null $value
     * @return self
     */
    public function setBidCeiling($value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }


}

