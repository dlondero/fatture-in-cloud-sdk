<?php

declare(strict_types=1);

namespace Fazland\FattureInCloud\Model\Document;

use Fazland\FattureInCloud\Client\ClientInterface;

class ProformaList extends AbstractList
{
    protected function createDocument(ClientInterface $client, array $data): Document
    {
        $obj = new Proforma();
        $obj->fromArray($data);

        (\Closure::bind(function () use ($client): void {
            $this->client = $client;
        }, $obj, Document::class))();

        return $obj;
    }

    protected function getType(): string
    {
        return Document::PROFORMA;
    }
}
