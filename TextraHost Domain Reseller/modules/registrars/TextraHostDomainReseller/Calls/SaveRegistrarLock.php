<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveRegistrarLock extends Call
{
    public $action = "domains/:domain/lock";
    
    public $type = parent::TYPE_POST;
}