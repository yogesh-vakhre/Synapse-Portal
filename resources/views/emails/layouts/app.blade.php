<!DOCTYPE HTML
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet"
        type="text/css">
    <!-- Custom Email  CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.email.css') }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Synapse') }}
        @hasSection('title')
            - @yield('title')
        @endif
    </title>

    <!-- Theme Specefic page wise load css JS -->
    @stack('head-js-css')

</head>

<body class="clean-body u_body"
    style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ecf0f1;color: #000000">

    <table id="u_body"
        style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ecf0f1;width:100%"
        cellpadding="0" cellspacing="0">
        <tbody>
            <tr style="vertical-align: top">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">

                    <!-- Header Js and css load -->
                    @include('emails.layouts.header')

                    @yield('content')

                    <!-- Footer Js and css load -->
                    @include('emails.layouts.footer')



                </td>
            </tr>
        </tbody>
    </table>

    <!-- Theme Specefic page wise load css JS -->
    @stack('footer-js-css')
</body>

</html>
