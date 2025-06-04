<?php

namespace TexasToast33\LinearSocialite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LinearExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('linear', Provider::class);
    }
}