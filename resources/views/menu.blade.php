<!-- resources/views/menu.blade.php -->
@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')
 
@section('content')
    <main class="content-main">
        <section class="menu-section">
            <h2>Cafe Menu</h2>
        </section>

        <!-- Container for the table -->
        <div class="table-container">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Foods</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Breakfast/Snack Staples -->
                    <tr>
                        <td rowspan="5">BREAKFAST/SNACK STAPLES</td>
                        <td>Pancakes/Crepes with toppings</td>
                        <td>₱35.00</td>
                    </tr>
                    <tr>
                        <td>Egg Sandwiches</td>
                        <td>₱25.00</td>
                    </tr>
                    <tr>
                        <td>Yummy Burgers</td>
                        <td>₱40.00</td>
                    </tr>
                    <tr>
                        <td>Ground Beef Cheesy Tacos</td>
                        <td>₱75.00</td>
                    </tr>
                    <tr>
                        <td>Small Pansit/Bihon Guisado</td>
                        <td>₱50.00</td>
                    </tr>

                    <!-- Lunch/Dinner -->
                    <tr>
                        <td rowspan="4">LUNCH/DINNER</td>
                        <td>Longganisa with steamed rice & buttered vegetables</td>
                        <td>₱60.00</td>
                    </tr>
                    <tr>
                        <td>Embutido with steamed rice & buttered vegetables</td>
                        <td>₱80.00</td>
                    </tr>
                    <tr>
                        <td>Chicken Cordon Bleu with steamed rice & buttered vegetables</td>
                        <td>₱80.00</td>
                    </tr>
                    <tr>
                        <td>Burger Steaks with steamed rice & buttered vegetables</td>
                        <td>₱70.00</td>
                    </tr>

                    <!-- Drinks/Beverages -->
                    <tr>
                        <td rowspan="5">DRINKS/BEVERAGES</td>
                        <td>Hot Coffee</td>
                        <td>₱20.00</td>
                    </tr>
                    <tr>
                        <td>Wintermelon Tea with black pearl</td>
                        <td>₱50.00</td>
                    </tr>
                    <tr>
                        <td>Cold Caramel Coffee</td>
                        <td>₱50.00</td>
                    </tr>
                    <tr>
                        <td>Fruit Smoothies</td>
                        <td>₱60.00</td>
                    </tr>
                    <tr>
                        <td>Soda Drinks</td>
                        <td>₱20.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection