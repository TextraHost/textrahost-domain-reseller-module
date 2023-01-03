<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class ReleaseDomain extends Call
{
    public $action = "domains/:domain/release";
    
    public $type = parent::TYPE_POST;
}