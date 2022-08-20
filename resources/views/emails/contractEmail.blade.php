<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LabFoto') }}</title>
    <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
    <!--<![endif]-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        th.column {
            padding: 0
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit
        }

        @media (max-width:660px) {
            .icons-inner {
                text-align: center;
            }

            .icons-inner td {
                margin: 0 auto;
            }

            .row-content {
                width: 100% !important;
            }

            .stack .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body style="background-color: #ffffff; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
    <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1"
                        role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        class="row-content stack" role="presentation"
                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3f0eb;"
                                        width="640">
                                        <tbody>
                                            <tr>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top;"
                                                    width="25%">
                                                    <div class="spacer_block" style="height:0px;line-height:0px;">
                                                    </div>
                                                </th>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top;"
                                                    width="50%">
                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                        class="heading_block" role="presentation"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                        width="100%">
                                                        <tr>
                                                            <td
                                                                style="padding-left:20px;padding-right:20px;text-align:center;width:100%;padding-bottom:30px;">
                                                                <h1
                                                                    style="margin: 0; color: #363636; direction: ltr; font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace; font-size: 20px; font-weight: normal; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 30px; margin-bottom: 0;">
                                                                    Olá <b>{{ $emailData['client'] }}</b>, clique no
                                                                    botão abaixo para assinar o contrato.</h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top;"
                                                    width="25%">
                                                    <div class="spacer_block" style="height:0px;line-height:0px;">
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2"
                        role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        class="row-content stack" role="presentation"
                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3f0eb; background-position: center top;"
                                        width="640">
                                        <tbody>
                                            <tr>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px;"
                                                    width="100%">
                                                    <div class="spacer_block" style="height:0px;line-height:0px;">
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3"
                        role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        class="row-content stack" role="presentation"
                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3f0eb; background-image: url('{{ asset('image/top-bg-email.png') }}'); background-position: top center; background-repeat: no-repeat;"
                                        width="640">
                                        <tbody>
                                            <tr>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px;"
                                                    width="100%">
                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                        class="image_block" role="presentation"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                        width="100%">
                                                        <tr>
                                                            <td
                                                                style="width:100%;padding-right:0px;padding-left:0px;padding-bottom:40px;">
                                                                <div align="center" style="line-height:10px">
                                                                    <img alt="Frigoletto's Fotos"
                                                                        src="{{ asset('image/illustration.png') }}"
                                                                        style="display: block; height: auto; border: 0; width: 472px; max-width: 100%;"
                                                                        title="Frigoletto's Fotos" width="472" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4"
                        role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        class="row-content stack" role="presentation"
                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3f0eb;"
                                        width="640">
                                        <tbody>
                                            <tr>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
                                                    width="100%">
                                                    <table border="0" cellpadding="10" cellspacing="0"
                                                        class="button_block" role="presentation"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                        width="100%">
                                                        <tr>
                                                            <td>
                                                                <div align="center">
                                                                    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" style="height:42px;width:193px;v-text-anchor:middle;" arcsize="10%" stroke="false" fillcolor="#3AAEE0"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Courier, monospace; font-size:16px"><![endif]-->
                                                                    <a
                                                                        href="{{ config('services.front.url') . '/sign_contract/' . $emailData['contract_link'] }}">
                                                                        <div
                                                                            style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#696969;border-radius:4px;width:auto;border-top:1px solid #696969;border-right:1px solid #696969;border-bottom:1px solid #696969;border-left:1px solid #696969;padding-top:5px;padding-bottom:5px;font-family:Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace;text-align:center;mso-border-alt:none;word-break:keep-all;">
                                                                            <span
                                                                                style="padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;letter-spacing:normal;"><span
                                                                                    style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;">Assinar
                                                                                    Contrato</span></span>
                                                                        </div>
                                                                    </a>
                                                                    <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5"
                        role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        class="row-content stack" role="presentation"
                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3f0eb; background-position: center top;"
                                        width="640">
                                        <tbody>
                                            <tr>
                                                <th class="column"
                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px;"
                                                    width="100%">
                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                        class="image_block" role="presentation"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                        width="100%">
                                                        <tr>
                                                            <td style="width:100%;padding-right:0px;padding-left:0px;">
                                                                <div align="center" style="line-height:10px"><img
                                                                        alt="Frigoletto's Fotos"
                                                                        src="{{ asset('image/logo.png') }}"
                                                                        style="display: block; height: auto; border: 0; width: 112px; max-width: 100%;"
                                                                        title="Frigoletto's Fotos" width="112" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border="0" cellpadding="10" cellspacing="0"
                                                        class="social_block" role="presentation"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                        width="100%">
                                                        <tr>
                                                            <td>
                                                                <table align="center" border="0" cellpadding="0"
                                                                    cellspacing="0" class="social-table"
                                                                    role="presentation"
                                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                                    width="144px">
                                                                    <tr>
                                                                        <td style="padding:0 2px 0 2px;"><a
                                                                                href="https://www.facebook.com/frigolettofotos/"
                                                                                target="_blank"><img alt="Facebook"
                                                                                    height="35"
                                                                                    src="{{ asset('image/facebook.png') }}"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="Facebook"
                                                                                    width="35" /></a></td>
                                                                        <td style="padding:0 2px 0 2px;"><a
                                                                                href="https://www.frigolettosfotos.com.br/"
                                                                                target="_blank"><img
                                                                                    alt="Frigoletto's Fotos"
                                                                                    height="35"
                                                                                    src="{{ asset('image/website.png') }}"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="Frigoletto's Fotos"
                                                                                    width="35" /></a></td>
                                                                        <td style="padding:0 2px 0 2px;"><a
                                                                                href="https://wa.me/message/HJ77L6J46ZJEK1"
                                                                                target="_blank"><img alt="WhatsApp"
                                                                                    height="35"
                                                                                    src="{{ asset('image/whatsapp.png') }}"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="WhatsApp"
                                                                                    width="35" /></a></td>
                                                                        <td style="padding:0 2px 0 2px;"><a
                                                                                href="https://www.instagram.com/frigolettosfotos/"
                                                                                target="_blank"><img alt="Instagram"
                                                                                    height="35"
                                                                                    src="{{ asset('image/instagram.png') }}"
                                                                                    style="display: block; height: auto; border: 0;"
                                                                                    title="Instagram"
                                                                                    width="35" /></a></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row row-6" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table align="center" border="0" cellpadding="0"
                                                            cellspacing="0" class="row-content stack"
                                                            role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                            width="640">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="column"
                                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;"
                                                                        width="100%">
                                                                        <table border="0" cellpadding="0"
                                                                            cellspacing="0" class="icons_block"
                                                                            role="presentation"
                                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                                            width="100%">
                                                                            <tr>
                                                                                <td
                                                                                    style="color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:5px;padding-top:5px;text-align:center;">
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
