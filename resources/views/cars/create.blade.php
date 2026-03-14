<h1>Add Car</h1>

<form method="POST" action="/cars">
    @csrf

    <input type="text" name="name" placeholder="Car Name">
    <br><br>

    <input type="text" name="brand" placeholder="Brand">
    <br><br>

    <input type="text" name="model" placeholder="Model">
    <br><br>

    <input type="number" name="price_per_day" placeholder="Price Per Day">
    <br><br>

    <input type="text" name="plate_number" placeholder="Plate Number">
    <br><br>

    <button type="submit">Save Car</button>
</form>
