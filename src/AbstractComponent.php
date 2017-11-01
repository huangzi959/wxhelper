<?php

namespace Loytor\Wxhelper;

abstract class AbstractComponent extends AbstractBase
{
    private $component_appid;
    private $component_access_token;

    protected $request_url;

    public function __construct(string $component_appid, string $component_access_token)
    {
        $this->component_appid = $component_appid;
        $this->component_access_token = $component_access_token;
    }

    public function getComponentId()
    {
        return $this->component_appid;
    }

    public function getComponentAccessToken()
    {
        return $this->component_access_token;
    }

    public function getRequestUrl()
    {
        return $this->request_url . "?component_access_token={$this->getComponentAccessToken()}";
    }
}