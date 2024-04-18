<?php

if (!function_exists('secure_email_format')) {
    /**
     * Returns a secure 2fa email
     *
     * @param string $email
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function secure_email_format($email = "")
    {
        if (empty($email)) {
            return false;
        }
        return substr($email, 0, 5) . '******' . substr($email,  -3);
    }
}

if (!function_exists('get_google_2fa_barcode')) {
    /**
     * Returns a google 2fa barcode
     *
     * @param string $email
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function get_google_2fa_barcode($value = "",$secret="")
    {
        if (empty($value) || empty($secret)) {
            return false;
        }
        $google2fa = app('pragmarx.google2fa');
        //$twoFa = new Google2FA();
        return $google2fa->getQRCodeInline(
            config('app.name'),
            $value,
            $secret
        );
    }
}
