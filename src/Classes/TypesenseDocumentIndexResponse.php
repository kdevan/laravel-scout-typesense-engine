<?php

namespace Devloops\LaravelTypesense\Classes;

/**
 * Class TypesenseDocumentIndexResponse.
 *
 * @date 02/10/2021
 *
 * @author Abdullah Al-Faqeir <abdullah@devloops.net>
 */
class TypesenseDocumentIndexResponse
{
    public function __construct(private bool $success, private ?string $error = null, private ?array $document = null)
    {
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @return array|null
     */
    public function getDocument(): ?array
    {
        return $this->document;
    }
}
