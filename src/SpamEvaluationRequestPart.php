<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

readonly class SpamEvaluationRequestPart
{
    public function __construct(
        private SpamEvaluationSubmittedContentType $type,
        private string $content,
        private string $language,
    ) {
    }

    public function getType(): SpamEvaluationSubmittedContentType
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
