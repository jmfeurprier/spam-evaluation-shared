<?php

namespace Jmf\SpamEvaluation\Shared;

readonly class SpamEvaluationResponse
{
    public function __construct(
        private float $score,
        private SpamEvaluationOutcome $outcome,
    ) {
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function getOutcome(): SpamEvaluationOutcome
    {
        return $this->outcome;
    }
}
