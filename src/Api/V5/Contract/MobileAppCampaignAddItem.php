<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignAddItem
{

    protected $BiddingStrategy = null;

    protected $Settings = null;

    /**
     * Creates a new instance of MobileAppCampaignAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     *
     * @return MobileAppCampaignStrategyAdd
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param MobileAppCampaignStrategyAdd $value
     * @return self
     */
    public function setBiddingStrategy(MobileAppCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return MobileAppCampaignSetting[]|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * Sets Settings.
     *
     * @param MobileAppCampaignSetting[]|null $value
     * @return self
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }


}

