<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class ToggleIdProtect extends Call
{
    public $action = "domains/:domain/protectid";
    
    public $type = parent::TYPE_POST;
}