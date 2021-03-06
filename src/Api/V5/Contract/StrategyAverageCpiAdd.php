<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpiAdd
{

    protected $AverageCpi = null;

    protected $WeeklySpendLimit = null;

    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpiAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpi.
     *
     * @return int
     */
    public function getAverageCpi()
    {
        return $this->AverageCpi;
    }

    /**
     * Sets AverageCpi.
     *
     * @param int $value
     * @return self
     */
    public function setAverageCpi($value)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int|null
     */
    public function getWeeklySpendLimit()
    {
        return $this->WeeklySpendLimit;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int|null $value
     * @return self
     */
    public function setWeeklySpendLimit($value = null)
    {
        $this->WeeklySpendLimit = $value;

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

