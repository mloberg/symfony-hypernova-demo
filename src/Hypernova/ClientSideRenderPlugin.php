<?php

namespace App\Hypernova;

use WF\Hypernova\Job;
use WF\Hypernova\Plugins\BasePlugin;

class ClientSideRenderPlugin extends BasePlugin
{
    /**
     * {@inheritdoc}
     */
    public function shouldSendRequest($jobs)
    {
        /** @var Job $job */
        foreach ($jobs as $job) {
            if ($job->metadata['client_render'] ?? false) {
                return false;
            }
        }

        return true;
    }
}
