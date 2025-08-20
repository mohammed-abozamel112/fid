<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
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
        .field {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #A31621;
        }
        .label {
            font-weight: bold;
            color: #A31621;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
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
            <h1>New Contact Form Submission</h1>
            <p>From FID Company Website</p>
        </div>
        
        <div class="content">
            <p>You have received a new message from the contact form on your website. Here are the details:</p>
            
            <div class="field">
                <div class="label">Name:</div>
                <div class="value">{{ $name }}</div>
            </div>
            
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">{{ $email }}</div>
            </div>
            
            <div class="field">
                <div class="label">Phone:</div>
                <div class="value">{{ $phone ?? 'Not provided' }}</div>
            </div>
            
            <div class="field">
                <div class="label">Company:</div>
                <div class="value">{{ $company ?? 'Not provided' }}</div>
            </div>
            
            <div class="field">
                <div class="label">Subject:</div>
                <div class="value">{{ $subject }}</div>
            </div>
            
            <div class="field">
                <div class="label">Message:</div>
                <div class="value" style="white-space: pre-line;">{{ $message }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>This email was sent from the contact form on FID Company website.</p>
            <p>Please respond to {{ $email }} to follow up with the sender.</p>
        </div>
    </div>
</body>
</html>
