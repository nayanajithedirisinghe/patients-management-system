<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical History</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('images/hospital-hallway.jpg') no-repeat center center fixed;
            background-size: cover; /* Ensures the image covers the entire screen */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navigation Bar */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 68, 204, 0.8);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Form Container */
        .container {
            max-width: 400px;
            width: 90%;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin: auto;
            margin-top: 100px; /* Space from navigation bar */
            margin-bottom: 100px; /* Space from footer */
            align-self: flex-end; /* Align the form to the right */
        }

        h1 {
            text-align: center;
            font-size: 1.8em;
            color:  #381f1d; /* Bold red title */
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
            box-sizing: border-box;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        button {
            background: #0044cc;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background: #0033aa;
        }

        .form-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9em;
        }

        .form-footer a {
            color: #0044cc;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
@include('layouts.navbar')
 

    <!-- Form Container -->
    <div class="container">
        <h1>Medical History</h1>
        <form action="" method="POST" onsubmit="return validateForm()">
            @csrf

            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="patient_name" placeholder="Enter patient name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter age" required>

            <label for="medical_conditions">Medical Conditions:</label>
            <textarea id="medical_conditions" name="medical_conditions" placeholder="List any chronic illnesses or conditions" required></textarea>

            <label for="allergies">Allergies:</label>
            <textarea id="allergies" name="allergies" placeholder="List known allergies"></textarea>

            <label for="medications">Current Medications:</label>
            <textarea id="medications" name="medications" placeholder="List current medications"></textarea>

            <button type="submit">Submit</button>
        </form>

        <div class="form-footer">
            <p>Need assistance? <a href="#">Contact Support</a></p>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer>
        &copy; 2024 Medical Records Inc. | All rights reserved.
    </footer> -->

    <script>
        function validateForm() {
            const name = document.getElementById('name').value;
            const age = document.getElementById('age').value;
            const medicalConditions = document.getElementById('medical_conditions').value;

            if (!name || !age || !medicalConditions) {
                alert('Please fill all required fields.');
                return false;
            }

            alert('Medical history submitted successfully!');
            return true;
        }
    </script>

    @include('layouts.footer')
</body>
</html>
