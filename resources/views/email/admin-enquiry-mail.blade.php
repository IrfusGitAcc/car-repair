<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New enquiry MOT Received</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f4f4f4; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="20" cellspacing="0" style="background:#ffffff; border-radius:8px;">
                    
                    <tr>
                        <td align="center" style="background:#000000; color:#ffffff; border-radius:8px 8px 0 0;">
                            <h2 style="margin:0;">New Service Enquiry</h2>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Hello Admin,</p>

                            <p>You have received a new Service Enquiry from the website. Details are below:</p>

                            <hr>

                            <p><strong>Name:</strong> {{ $enquiry->make }}</p>
                            <p><strong>Email:</strong> {{ $enquiry->year }}</p>
                            <p><strong>Phone:</strong> {{ $enquiry->model  }}</p>
                            <p><strong>Postcode:</strong> {{ $enquiry->submodel ?? 'N/A' }}</p>
                            <p><strong>enquiry date:</strong> {{ $enquiry->mileage }}</p>
                            <p><strong>Service needed:</strong></p>
                            <p style="background:#f9f9f9; padding:10px; border-radius:5px;">
                                {{ $enquiry->service  }}
                            </p>

                            <hr>

                            <p><strong>enquiry submitted at:</strong> {{ $enquiry->created_at->format('d M Y, h:i A') }}</p>

                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="background:#f4f4f4; font-size:12px; color:#666; border-radius:0 0 8px 8px;">
                            © {{ date('Y') }} Car Repair. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>