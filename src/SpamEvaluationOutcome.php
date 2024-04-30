<?php

namespace Jmf\SpamEvaluation\Shared;

enum SpamEvaluationOutcome: string
{
    case LEGIT      = 'legit';
    case SPAM       = 'spam';
    case SUSPICIOUS = 'suspicious';
}
