<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAuth Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/3.2.3/purify.min.js"></script>
    <style>
        body {
            font-family: monospace, monospace;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5em;
            margin: 0 0 10px;
        }

        p {
            font-size: 1.2em;
            margin: 0;
        }

        .token {
            margin-top: 20px;
            padding: 10px 15px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            word-break: break-all;
        }

        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>Your input will appear below if available:</p><br>
        <div id="input-container" class="input"></div>
    </div>

    <script src="https://sandbox.com/?param=value&auth_token=494daa91-2ed4-4132-9e06-b4a5d696750e"></script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const input = urlParams.get('input');

        if (input) {
            const sanitizedInput = DOMPurify.sanitize(input);
            const inputContainer = document.getElementById('input-container');
            inputContainer.innerHTML = sanitizedInput;
        } else {
            const inputContainer = document.getElementById('input-container');
            inputContainer.innerHTML = 'No input available';
        }
    </script>
</body>

</html>