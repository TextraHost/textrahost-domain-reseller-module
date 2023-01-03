<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of GetContactDetails
 *
 * @author inbs
 */
class GetContactDetails extends Call
{
    public $action = "domains/:domain/contact";
    
    public $type = parent::TYPE_GET;
}