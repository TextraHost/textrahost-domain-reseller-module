<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of RequestDelete
 *
 * @author inbs
 */
class RequestDelete extends Call
{
    public $action = "domains/:domain/delete";
    
    public $type = parent::TYPE_POST;
}