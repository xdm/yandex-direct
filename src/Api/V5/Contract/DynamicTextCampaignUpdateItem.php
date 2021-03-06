<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignUpdateItem extends DynamicTextCampaignBase
{

    protected $BiddingStrategy = null;

    protected $Settings = null;

    /**
     * Creates a new instance of DynamicTextCampaignUpdateItem.
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
     * @return DynamicTextCampaignStrategy|null
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param DynamicTextCampaignStrategy|null $value
     * @return self
     */
    public function setBiddingStrategy(DynamicTextCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return DynamicTextCampaignSetting[]|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * Sets Settings.
     *
     * @param DynamicTextCampaignSetting[]|null $value
     * @return self
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }


}

