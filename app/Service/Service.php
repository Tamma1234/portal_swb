<?php

namespace App\Service;

class Service
{
    /**
     * Get send mail service.
     *
     * @return SendMailService
     */
    public static function getSendMail()
    {
        return app(SendMailService::class);
    }

}
