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
        <h1 class="my-4">Edit Reservation</h1>
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $reservation->name }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $reservation->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $reservation->email }}" required>
            </div>
            <div class="mb-3">
                <label for="room_number" class="form-label">Room Number</label>
                <input type="text" class="form-control" id="room_number" name="room_number" value="{{ $reservation->room_number }}" required>
            </div>
            <div class="mb-3">
                <label for="rental_date" class="form-label">Rental Date</label>
                <input type="date" class="form-control" id="rental_date" name="rental_date" value="{{ $reservation->rental_date }}" required>
            </div>
            <div class="mb-3">
                <label for="rental_duration" class="form-label">Rental Duration (Years)</label>
                <input type="number" class="form-control" id="rental_duration" name="rental_duration" value="{{ $reservation->rental_duration }}" min="1" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
