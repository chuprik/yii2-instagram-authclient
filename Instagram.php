<?php

namespace kotchuprik\authclient;

use yii\authclient\OAuth2;

class Instagram extends OAuth2
{
    /**
     * @inheritdoc
     */
    public $authUrl = 'https://api.instagram.com/oauth/authorize';

    /**
     * @inheritdoc
     */
    public $tokenUrl = 'https://api.instagram.com/oauth/access_token';

    /**
     * @inheritdoc
     */
    public $apiBaseUrl = 'https://graph.instagram.com';

    /**
     * The list of permissions to request in the login.
     * At the moment only basic is supported
     *
     * @var string
     */
    public $scope = 'user_profile';

    /**
     * A comma separated list of fields
     * @see https://developers.facebook.com/docs/instagram-basic-display-api/reference/user
     *
     * @var string|null
     */
    public $fields;

    /**
     * @inheritdoc
     */
    protected function initUserAttributes()
    {
        $fields = '';
        if (!empty($this->fields)) {
            $fields = sprintf('?fields=%s', $this->fields);
        }
        return $this->api(sprintf('me%s', $fields), 'GET');
    }

    /**
     * @inheritdoc
     */
    protected function apiInternal($accessToken, $url, $method, array $params, array $headers)
    {
        return $this->sendRequest($method, $url . '?access_token=' . $accessToken->getToken(), $params, $headers);
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'instagram';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Instagram';
    }
}
