<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of CheckAvailability
 *
 * @author inbs
 */
class CheckAvailability extends Call
{
    public $action = "domains/lookup";
    
    public $type = parent::TYPE_POST;
}