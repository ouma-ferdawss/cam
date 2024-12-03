<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participate Event</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full page background */
        body {
            background: url('assets/img/zone.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        /* Form card */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.9); /* Translucent white background */
            width: 100%;
            max-width: 500px;
        }

        /* Header style */
        .card-header {
            background-color: #00773d;
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 1.5rem;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        /* Form label and fields */
        .form-label {
            color: #404e4f;
            font-weight: 500;
        }

        .form-control {
            border: 1px solid #404e4f;
            border-radius: 30px;
        }

        .form-control:focus {
            border-color: #00773d;
            box-shadow: 0 0 8px rgba(0, 119, 61, 0.5);
        }

        /* Submit button */
        .btn-custom {
            background-color: #e40521;
            color: white;
            border-radius: 30px;
            border: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #e4052363;
            box-shadow: 0px 6px 12px rgba(54, 45, 39, 0.3);
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">Participate in the Event</div>
        <div class="card-body p-4">
            <!-- Display Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('participate.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your first name" required>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your last name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" required>
                </div>

                <button type="submit" class="btn btn-custom w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

