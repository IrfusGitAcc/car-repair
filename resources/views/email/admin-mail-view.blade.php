<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Booking MOT Received</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f4f4f4; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="20" cellspacing="0" style="background:#ffffff; border-radius:8px;">
                    
                    <tr>
                        <td align="center" style="background:#000000; color:#ffffff; border-radius:8px 8px 0 0;">
                            <h2 style="margin:0;">New Booking Enquiry</h2>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Hello Admin,</p>

                            <p>You have received a new Booking MOT enquiry from the website. Details are below:</p>

                            <hr>

                            <p><strong>Name:</strong> {{ $booking->name }}</p>
                            <p><strong>Email:</strong> {{ $booking->email }}</p>
                            <p><strong>Phone:</strong> {{ $booking->phone ?? 'N/A' }}</p>
                            <p><strong>Postcode:</strong> {{ $booking->postcode }}</p>
                            <p><strong>Booking date:</strong> {{ $booking->booking_date }}</p>
                            <p><strong>Message:</strong></p>
                            <p style="background:#f9f9f9; padding:10px; border-radius:5px;">
                                {{ $booking->message ?? 'No message provided.' }}
                            </p>

                            <hr>

                            <p><strong>enquiry submitted at:</strong> {{ $booking->created_at->format('d M Y, h:i A') }}</p>

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