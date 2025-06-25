<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmation</title>
</head>
<body>
    <h2>Hello {{ $name }},</h2>
    <p>Your appointment is confirmed for:</p>
    <p><strong>{{ \Carbon\Carbon::parse($appointment_time)->format('F j, Y \a\t g:i A') }}</strong></p>
    <p>We look forward to connecting with you.</p>
    <br>
    <p>Best regards,</p>
    <p><strong>Bridgely.ai Team</strong></p>
</body>
</html>
