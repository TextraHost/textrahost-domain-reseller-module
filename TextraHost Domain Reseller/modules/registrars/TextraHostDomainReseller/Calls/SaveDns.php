<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveDns extends Call
{
    public $action = "domains/:domain/dns";
    
    public $type = parent::TYPE_POST;
}