<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            background: url('images/hospital-hallway.jpg') no-repeat center center fixed;
            font-family: Arial, sans-serif;
            /* background: linear-gradient(135deg, #8ecae6, #219ebc); */
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid #542e2c;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.9); /* Light background with opacity */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #613835;
        }

        label {
            font-weight: bold;
            color: #613835;
        }

        input, select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        button {
            background: #0044cc;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        button:hover {
            background: #0033aa;
        }

        .footer {
            background-color: #0044cc;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Navbar Background with blur effect */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 68, 204, 0.7);
            backdrop-filter: blur(15px);
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
    </style>
</head>
<body>

    @include('layouts.navbar')

    <div class="container">
        <h1>Book an Appointment</h1>
        <form action="" method="POST" onsubmit="return validateForm()">
            @csrf

            <label for="patient_name">Patient Name:</label>
            <input type="text" id="patient_name" name="patient_name" placeholder="Enter patient name" required>

            <label for="doctor">Select Doctor:</label>
            <select id="doctor" name="doctor" required>
                <option value="">Select Doctor</option>
                <option value="Dr. John Doe">Dr. John Doe</option>
                <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                <option value="Dr. Alice Brown">Dr. Alice Brown</option>
                <option value="Dr. Bob White">Dr. Bob White</option>
            </select>

            <label for="appointment_date">Select Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>

            <label for="appointment_time">Select Appointment Time:</label>
            <input type="time" id="appointment_time" name="appointment_time" required>

            <button type="submit">Book Appointment</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const patientName = document.getElementById('patient_name').value;
            const doctor = document.getElementById('doctor').value;
            const appointmentDate = document.getElementById('appointment_date').value;
            const appointmentTime = document.getElementById('appointment_time').value;

            if (!patientName || !doctor || !appointmentDate || !appointmentTime) {
                alert('Please fill all required fields.');
                return false;
            }

            alert('Appointment booked successfully!');
            return true;
        }
    </script>

    @include('layouts.footer')

</body>
</html>
