@extends('emails.layouts.app')

<!--Page title -->
@section('title', 'Verify Email Address')

@section('content')
    <!-- MAIN CONTENT -->

    <div class="u-row-container" style="padding: 0px;background-color: transparent">
        <div class="u-row"
            style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                <div class="u-col u-col-100"
                    style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                    <div style="background-color: #ffffff;height: 100%;width: 100% !important;">

                        <div
                            style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">


                            <table id="u_content_heading_1" style="font-family:'Raleway',sans-serif;" role="presentation"
                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td class="v-container-padding-padding"
                                            style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 5px;font-family:'Raleway',sans-serif;"
                                            align="left">

                                            <h2
                                                style="margin: 0px;line-height: 140%; text-align: center; word-wrap: break-word; font-family: 'Playfair Display',serif; font-size: 26px; font-weight: 400;">
                                                <strong>Hello!  </strong>
                                            </h2>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table id="u_content_text_2" style="font-family:'Raleway',sans-serif;" role="presentation"
                                cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td class="v-container-padding-padding"
                                            style="overflow-wrap:break-word;word-break:break-word;padding:5px 50px 10px;font-family:'Raleway',sans-serif;"
                                            align="left">

                                            <div
                                                style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                <p style="line-height: 140%;">Click the button below to
                                                    verify your email address.</p>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table style="font-family:'Raleway',sans-serif;" role="presentation" cellpadding="0"
                                cellspacing="0" width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td class="v-container-padding-padding"
                                            style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 0px;font-family:'Raleway',sans-serif;"
                                            align="left">


                                            <div align="center">

                                                <a href="{{ $verifyUrl }}" target="_blank" class="v-button"
                                                    style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color:#2c7be5; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                                    <span class="v-padding"
                                                        style="display:block;padding:10px 20px;line-height:120%;"><span
                                                            style="line-height: 16.8px;">Confirm Your
                                                            Email</span></span>
                                                </a>

                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- / .main-content -->

@endsection
