<?php
namespace ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\TextraHostDomainReseller\Core\Call;

/**
 * Description of SaveNameServers
 *
 * @author inbs
 */
class SaveNameServers extends Call
{
    public $action = "domains/:domain/nameservers";

    public $type = parent::TYPE_POST;
}