<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

use Webmozart\Assert\Assert;

readonly class SpamEvaluationRequest
{
    /**
     * @param SpamEvaluationRequestPart[] $parts
     */
    public function __construct(
        private iterable $parts,
    ) {
        Assert::allIsInstanceOf($parts, SpamEvaluationRequestPart::class);
    }

    /**
     * @return SpamEvaluationRequestPart[]
     */
    public function getParts(): iterable
    {
        return $this->parts;
    }
}
