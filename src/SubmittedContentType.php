<?php

namespace Jmf\SpamEvaluation\Shared;

enum SubmittedContentType: string
{
    case EMAIL   = 'email';
    case MESSAGE = 'message';
    case OTHER   = 'other';
    case SUBJECT = 'subject';
    case URL     = 'url';
}
