<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class SaveEmailForwarding extends Call
{
    public $action = "domains/:domain/email";
    
    public $type = parent::TYPE_POST;
}