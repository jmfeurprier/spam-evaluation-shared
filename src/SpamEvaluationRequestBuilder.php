<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

use Jmf\SpamEvaluation\Shared\Exception\SpamEvaluationException;

class SpamEvaluationRequestBuilder
{
    /**
     * @var SpamEvaluationRequestPart[]
     */
    private array $parts = [];

    public function addPart(
        SpamEvaluationSubmittedContentType $type,
        string $content,
        string $language,
    ): self {
        $this->parts[] = new SpamEvaluationRequestPart($type, $content, $language);

        return $this;
    }

    /**
     * @throws SpamEvaluationException
     */
    public function build(): SpamEvaluationRequest
    {
        if ([] === $this->parts) {
            throw new SpamEvaluationException('Need at least one Request Part.');
        }

        return new SpamEvaluationRequest($this->parts);
    }
}
