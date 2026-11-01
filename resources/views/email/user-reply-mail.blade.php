<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Hello {{ $booking->name }} 👋</h2>

    <p>We recieved Your booking enquiry.We will shortly touch with you.</p>

    <p><strong>Email:</strong> {{ $booking->email }}</p>
    <p><strong>Registration Number:</strong> {{ $booking->car_reg }}</p>
    <p><strong>Enquiry on:</strong> {{ $booking->booking_date }}</p>
  
    <p>We’re happy to have you with us 🚀</p>

    <br>
    <p>Regards,<br>car repair Team</p>
</body>
</html>
