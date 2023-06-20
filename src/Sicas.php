<?php

namespace Sicas;

class Sicas
{
    const WSDL = "http://www.sicasonline.com/SICASOnline/WS_SICASOnline.asmx?WSDL";

    private $client;
    private $password;
    private $user;
    protected $catalog      = "";
    protected $data         = [];

    /**
     * @param string $user
     * @param string $password
     */
    public function __construct(string $user, string $password)
    {
        $this->initWebServices($user, $password);
    }


    /**
     * Get Sicas Web Services Functionsx
     * 
     *
     * @return object
     */
    public function getFunctions()
    {
        return !$this->isCredentialsEmpty() ? $this->client->__getFunctions() : [];
    }

     /**
     * Validate if the credentials are emptys
     *
     * @return boolean
     */
    private function isCredentialsEmpty()
    {
        return empty($this->user) && empty($this->password);
    }

     /**
     * Initialize SOAP Client
     *
     * @return void
     */
    protected function initSoapClient()
    {
        $this->client = new \SoapClient(self::WSDL, array('trace' => 1));
    }

    /**
     * Initialize SICAS Web Services
     *
     * @param string $user
     * @param string $password
     * @return void
     */
    protected function initWebServices(string $user, string $password)
    {
        $this->user     = $user;
        $this->password = $password;

        $this->initSoapClient();
    }
}