<?php

declare(strict_types=1);

namespace Jmf\SpamEvaluation\Shared;

enum SpamEvaluationOutcome: string
{
    case LEGIT      = 'legit';
    case SPAM       = 'spam';
    case SUSPICIOUS = 'suspicious';
}
