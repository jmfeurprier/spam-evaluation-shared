<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

use Webmozart\Assert\Assert;

readonly class SpamEvaluationRequest
{
    /**
     * @param non-empty-array<SpamEvaluationRequestPart> $parts
     */
    public function __construct(
        private iterable $parts,
    ) {
        Assert::notEmpty($parts);
        Assert::allIsInstanceOf($parts, SpamEvaluationRequestPart::class);
    }

    /**
     * @return non-empty-array<SpamEvaluationRequestPart>
     */
    public function getParts(): iterable
    {
        return $this->parts;
    }
}
