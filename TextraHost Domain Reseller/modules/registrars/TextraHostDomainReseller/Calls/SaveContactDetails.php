<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveContactDetails extends Call
{
    public $action = "domains/:domain/contact";
    
    public $type = parent::TYPE_POST;
}
