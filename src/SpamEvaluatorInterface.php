<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

use Jmf\SpamEvaluation\Shared\Exception\SpamEvaluationException;

interface SpamEvaluatorInterface
{
    /**
     * @throws SpamEvaluationException
     */
    public function evaluate(SpamEvaluationRequest $request): SpamEvaluationResponse;
}
