<?php

namespace Jmf\SpamEvaluation\Shared;

interface SpamEvaluatorInterface
{
    public function evaluate(SpamEvaluationRequest $request): SpamEvaluationResponse;
}
