<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #A31621;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 30px -30px;
        }
        .content {
            margin-bottom: 20px;
        }
        .highlight {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #A31621;
            margin: 15px 0;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Contacting Us</h1>
            <p>FID Company</p>
        </div>
        
        <div class="content">
            <p>Dear {{ $name }},</p>
            
            <p>Thank you for reaching out to us through our website. We have received your message and appreciate you taking the time to contact us.</p>
            
            <div class="highlight">
                <p><strong>We have received your inquiry regarding:</strong> {{ $subject }}</p>
            </div>
            
            <p>Our team will review your message and get back to you within <strong>24 hours</strong> during business days. We understand your time is valuable and we're committed to providing you with a prompt and helpful response.</p>
            
            <p>In the meantime, if you have any urgent questions, please don't hesitate to contact us directly at <strong>contact@fidcompany.com</strong> or call us at <strong>+1 (555) 123-4567</strong>.</p>
            
            <p>We look forward to speaking with you soon!</p>
            
            <p>Best regards,<br>
            The FID Company Team</p>
        </div>
        
        <div class="footer">
            <p>This is an automated confirmation email. Please do not reply to this message.</p>
            <p>FID Company | contact@fidcompany.com | www.fidcompany.com</p>
        </div>
    </div>
</body>
</html>
