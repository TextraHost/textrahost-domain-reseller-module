<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of DeleteNameServer
 *
 * @author inbs
 */
class DeleteNameServer extends Call
{
    public $action = "domains/:domain/nameservers/delete";
    
    public $type = parent::TYPE_POST;
}