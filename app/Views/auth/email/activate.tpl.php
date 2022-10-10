<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Email Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Merriweather';
                font-style: normal;
                font-weight: 400;
                src: local('Merriweather'), local('Merriweather'), url(http://fonts.gstatic.com/s/merriweather/v8/ZvcMqxEwPfh2qDWBPxn6nmB7wJ9CoPCp9n30ZBThZ1I.woff) format('woff');
            }

            @font-face {
                font-family: 'Merriweather Bold';
                font-style: normal;
                font-weight: 700;
                src: local('Merriweather Bold'), local('Merriweather-Bold'), url(http://fonts.gstatic.com/s/merriweather/v8/ZvcMqxEwPfh2qDWBPxn6nhAPw1J91axKNXP_-QX9CC8.woff) format('woff');
            }
        }

        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        table {
            border-collapse: collapse !important;
        }

        a {
            color: #CC7953;
        }

        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }
    </style>

</head>

<body style="background-color: #D2C7BA;">
    <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
        A preheader is the short summary text that follows the subject line when an email is viewed in the inbox.
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" bgcolor="#D2C7BA">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 36px 24px;">
                            <a href="https://sendgrid.com" target="_blank" style="display: inline-block;">
                                <img src="<?= base_url('assets/img/cropped-logo-kominfo.png') ?>" alt="Logo" border="0" width="48" style="display: block; width: 48px; max-width: 48px; min-width: 48px;">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D2C7BA">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Merriweather Bold', serif; border-top: 5px solid #69BCB1;">
                            <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;"><?php echo sprintf(lang('IonAuth.emailActivate_heading'), $identity); ?></h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D2C7BA">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Merriweather', serif; font-size: 16px; line-height: 24px;">
                            <p style="margin: 0;">Tap the button below to confirm your email address. If you didn't create an account with <a href="https://diskominfo.bolmutkab.go.id">Diskominfo Bolmut</a>, you can safely delete this email.</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" bgcolor="#ffffff">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" bgcolor="#CC7953" style="border-radius: 6px;">
                                                    <?= sprintf(
                                                        //lang('IonAuth.emailActivate_subheading'),
                                                        anchor('auth/activate/' . $id . '/' . $activation, lang('IonAuth.emailActivate_link'),'style="display: inline-block; padding: 16px 36px; font-family: \'Source Sans Pro\', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;"')
                                                    ); ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Merriweather', serif; font-size: 16px; line-height: 24px;">
                            <p style="margin: 0;">If that doesn't work, copy and paste the following link in your browser:</p>
                            <p style="margin: 0;"><a href="<?= site_url('auth/activate/' . $id . '/' . $activation) ?>" target="_blank"><?= site_url('auth/activate/' . $id . '/' . $activation) ?></a></p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Merriweather', serif; font-size: 16px; line-height: 24px; border-bottom: 5px solid #69BCB1">
                            <p style="margin: 0;">Cheers,<br> Dinas Komuniasi Informatika Dan Persandian Kabupaten Bolaang Mongondow Utara</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D2C7BA" style="padding: 24px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="center" bgcolor="#D2C7BA" style="padding: 12px 24px; font-family: 'Merriweather', serif; font-size: 14px; line-height: 20px; color: #666;">
                            <p style="margin: 0;">You received this email because we received a request for confirmation for your account. If you didn't request confirmation you can safely delete this email.</p>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td align="center" bgcolor="#D2C7BA" style="padding: 12px 24px; font-family: 'Merriweather', serif; font-size: 14px; line-height: 20px; color: #666;">
                            <p style="margin: 0;">To stop receiving these emails, you can <a href="https://sendgrid.com" target="_blank">unsubscribe</a> at any time.</p>
                            <p style="margin: 0;">Merriweather 1234 S. Broadway St. City, State 12345</p>
                        </td>
                    </tr> -->
                </table>
            </td>
        </tr>
    </table>
</body>
</html>