<?php 
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php'; 
?>

<div class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Our Menu</h1>
    <p class="text-center text-slate-400 mb-12 text-lg">Delicious Rwandan and International Favorites</p>
   
    <table class="w-full border-collapse bg-white/5 backdrop-blur-md rounded-3xl overflow-hidden menu-table">
        <thead>
            <tr class="bg-slate-800 text-amber-400">
                <th class="px-8 py-6 text-left">Category</th>
                <th class="px-8 py-6 text-left">Item</th>
                <th class="px-8 py-6 text-left">Description</th>
                <th class="px-8 py-6 text-right">Price (RWF)</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700">

            <!-- Pasta -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">PASTA</td>
                <td class="px-8 py-6">Creamy Mushroom Pasta</td>
                <td class="px-8 py-6">Fresh pasta tossed in creamy garlic mushroom sauce</td>
                <td class="px-8 py-6 text-right font-semibold">18,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">PASTA</td>
                <td class="px-8 py-6">Spicy Tomato Penne</td>
                <td class="px-8 py-6">Penne pasta with roasted tomato, basil, and chili flakes</td>
                <td class="px-8 py-6 text-right font-semibold">16,500</td>
            </tr>

            <!-- Pizza -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">PIZZA</td>
                <td class="px-8 py-6">Margherita Pizza</td>
                <td class="px-8 py-6">Classic tomato, mozzarella, and fresh basil</td>
                <td class="px-8 py-6 text-right font-semibold">19,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">PIZZA</td>
                <td class="px-8 py-6">BBQ Chicken Pizza</td>
                <td class="px-8 py-6">Smoky chicken, red onions, cheese, and barbecue glaze</td>
                <td class="px-8 py-6 text-right font-semibold">21,000</td>
            </tr>

            <!-- Risotto -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">RISOTTO</td>
                <td class="px-8 py-6">Seafood Risotto</td>
                <td class="px-8 py-6">Creamy Arborio rice with prawns, mussels, and parmesan</td>
                <td class="px-8 py-6 text-right font-semibold">24,000</td>
            </tr>

            <!-- Grilled Lamb -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">GRILLED LAMB</td>
                <td class="px-8 py-6">Herb-Marinated Lamb Chops</td>
                <td class="px-8 py-6">Juicy lamb chops with rosemary, garlic, and lemon</td>
                <td class="px-8 py-6 text-right font-semibold">28,000</td>
            </tr>

            <!-- Burgers -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">BURGERS</td>
                <td class="px-8 py-6">Signature Beef Burger</td>
                <td class="px-8 py-6">Grilled beef patty, cheddar, lettuce, tomato, and house sauce</td>
                <td class="px-8 py-6 text-right font-semibold">15,500</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">BURGERS</td>
                <td class="px-8 py-6">Chicken Burger</td>
                <td class="px-8 py-6">Crispy chicken fillet, slaw, pickles, and spicy mayo</td>
                <td class="px-8 py-6 text-right font-semibold">14,000</td>
            </tr>

            <!-- Samosas -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">SAMOSAS</td>
                <td class="px-8 py-6">Beef Samosas</td>
                <td class="px-8 py-6">Crispy pastry filled with spiced beef and vegetables</td>
                <td class="px-8 py-6 text-right font-semibold">4,500</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">SAMOSAS</td>
                <td class="px-8 py-6">Vegetable Samosas</td>
                <td class="px-8 py-6">Crispy samosas stuffed with potato, peas, and aromatic spices</td>
                <td class="px-8 py-6 text-right font-semibold">4,000</td>
            </tr>

            <!-- Buffet Meals -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">BUFFET MEALS</td>
                <td class="px-8 py-6">Grand Buffet</td>
                <td class="px-8 py-6">Unlimited selection of hot dishes, salads, desserts, and drinks</td>
                <td class="px-8 py-6 text-right font-semibold">32,000</td>
            </tr>

            <!-- BBQ Meat -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">BBQ MEAT</td>
                <td class="px-8 py-6">Mixed Grill Platter</td>
                <td class="px-8 py-6">Assorted barbecue meats with sides and house sauce</td>
                <td class="px-8 py-6 text-right font-semibold">29,000</td>
            </tr>

            <!-- Fresh Juice -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">FRESH JUICE</td>
                <td class="px-8 py-6">Tropical Fresh Juice</td>
                <td class="px-8 py-6">Freshly squeezed pineapple, mango, and passion fruit juice</td>
                <td class="px-8 py-6 text-right font-semibold">6,000</td>
            </tr>

            <!-- Cocktails -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">COCKTAILS</td>
                <td class="px-8 py-6">Sunset Cocktail</td>
                <td class="px-8 py-6">Vodka, orange, cranberry, and a splash of lime</td>
                <td class="px-8 py-6 text-right font-semibold">10,500</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">COCKTAILS</td>
                <td class="px-8 py-6">Pink Paradise</td>
                <td class="px-8 py-6">Rum, strawberry, lemon, and sparkling water</td>
                <td class="px-8 py-6 text-right font-semibold">11,000</td>
            </tr>

        </tbody>
    </table>
</div>

<?php 
include 'footer.php'; 
?>