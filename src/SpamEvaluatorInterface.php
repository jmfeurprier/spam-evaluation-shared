<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

interface SpamEvaluatorInterface
{
    public function evaluate(SpamEvaluationRequest $request): SpamEvaluationResponse;
}
