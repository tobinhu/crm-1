<?php

namespace OroCRM\Bundle\ContactUsBundle\Migrations\Schemas\v1_1;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\InstallerBundle\Migrations\Migration;

class OroCRMContactUsBundle implements Migration
{
    /**
     * @inheritdoc
     */
    public function up(Schema $schema)
    {
        return [
            "ALTER TABLE orocrm_contactus_contact_reason RENAME TO orocrm_contactus_contact_reas;",
            "ALTER TABLE orocrm_contactus_request_emails RENAME TO orocrm_contactus_req_emails;",
        ];
    }
}
