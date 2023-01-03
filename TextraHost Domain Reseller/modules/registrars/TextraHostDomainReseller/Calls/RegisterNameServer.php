<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of RegisterNameServer
 *
 * @author inbs
 */
class RegisterNameServer extends Call
{
    public $action = "domains/:domain/nameservers/register";
    
    public $type = parent::TYPE_POST;
}