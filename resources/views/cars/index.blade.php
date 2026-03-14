<h1>Cars List</h1>

<a href="/cars/create">Add New Car</a>
<br><br>

@foreach($cars as $car)
<p>
Name: {{ $car->name }} |
Brand: {{ $car->brand }} |
Model: {{ $car->model }} |
Price: {{ $car->price_per_day }} |
Plate: {{ $car->plate_number }} |
Status: {{ $car->status }}

<!-- Edit button -->
<a href="/cars/{{ $car->id }}/edit">Edit</a>

<!-- Delete form -->
<form method="POST" action="/cars/{{ $car->id }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
</p>
@endforeach
