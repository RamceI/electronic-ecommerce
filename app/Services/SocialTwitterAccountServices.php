<?php
namespace App\Services;
use App\Social\SocialAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;


class SocialTwitterAccountServices {

    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('twitter')
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'twitter'
            ]);
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'name' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                    'password' => md5(rand(1,10000)),
                ]);
            }
            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }

}
