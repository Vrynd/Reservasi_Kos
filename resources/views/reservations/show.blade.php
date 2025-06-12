<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Reservation Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $reservation->name }}</h5>
                <p class="card-text"><strong>Phone:</strong> {{ $reservation->phone }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $reservation->email }}</p>
                <p class="card-text"><strong>Room Number:</strong> {{ $reservation->room_number }}</p>
                <p class="card-text"><strong>Rental Date:</strong> {{ $reservation->rental_date }}</p>
                <p class="card-text"><strong>Rental Duration:</strong> {{ $reservation->rental_duration }} year(s)</p>
                <a href="{{ route('reservations.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
