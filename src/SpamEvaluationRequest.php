<?php

namespace Jmf\SpamEvaluation\Shared;

readonly class SpamEvaluationRequest
{
    public function __construct(
        private SubmittedContentType $type,
        private string $content,
        private string $language,
    ) {
    }

    public function getType(): SubmittedContentType
    {
        return $this->type;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}
