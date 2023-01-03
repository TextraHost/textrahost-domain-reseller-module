<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of GetEppCode
 *
 * @author inbs
 */
class GetEppCode extends Call
{
    public $action = "domains/:domain/eppcode";
    
    public $type = parent::TYPE_GET;
}