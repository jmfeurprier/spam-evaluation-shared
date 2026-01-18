<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

use Webmozart\Assert\Assert;

readonly class SpamEvaluationResponse
{
    public function __construct(
        private float $score,
        private SpamEvaluationOutcome $outcome,
    ) {
        Assert::greaterThanEq($score, 0.0);
        Assert::lessThanEq($score, 1.0);
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function getOutcome(): SpamEvaluationOutcome
    {
        return $this->outcome;
    }

    public function isLegit(): bool
    {
        return (SpamEvaluationOutcome::LEGIT === $this->outcome);
    }

    public function isSpam(): bool
    {
        return (SpamEvaluationOutcome::SPAM === $this->outcome);
    }
}
