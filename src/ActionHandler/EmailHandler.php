<?php

namespace CommonGateway\HackathonPluginBundle\ActionHandler;

use CommonGateway\CoreBundle\ActionHandler\ActionHandlerInterface;

class EmailHandler implements ActionHandlerInterface
{
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://vng.opencatalogi.nl/schemas/zrc.zaakBesluit.schema.json',
            '$schema'     => 'https://docs.commongateway.nl/schemas/ActionHandler.schema.json',
            'title'       => 'Post ZaakBesluit Action',
            'description' => 'This handler sets the zaak to the besluit body',
            'required'    => [],
            'properties'  => [],
        ];
    }

    public function run(array $data, array $configuration): array
    {
        // TODO: Implement run() method.
        return [];
    }
}
