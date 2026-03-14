<form method="POST" action="/cars/{{ $car->id }}">
    @csrf
    @method('PUT') <!-- ✅ tells Laravel this is a PUT request -->

    <input type="text" name="name" value="{{ $car->name }}">
    <input type="text" name="brand" value="{{ $car->brand }}">
    <input type="text" name="model" value="{{ $car->model }}">
    <input type="number" name="price_per_day" value="{{ $car->price_per_day }}">
    <input type="text" name="plate_number" value="{{ $car->plate_number }}">
    <input type="text" name="status" value="{{ $car->status }}">

    <button type="submit">Update Car</button>
</form>
