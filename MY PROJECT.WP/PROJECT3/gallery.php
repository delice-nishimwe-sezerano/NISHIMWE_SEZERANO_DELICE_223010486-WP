<?php 
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php'; 
?>

<div class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Our Gallery</h1>
    <p class="text-center text-slate-400 mb-12 text-lg">
        Click on any dish or drink to order instantly
    </p>
   
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Pasta -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/pasta.jpg" 
                 alt="Creamy Mushroom Pasta" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Creamy Mushroom Pasta</div>
                <div class="text-sm text-gray-400 mt-2">18,000 RWF</div>
            </div>
        </a>

        <!-- Pizza -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/pizza.jpg" 
                 alt="Margherita Pizza" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Margherita Pizza</div>
                <div class="text-sm text-gray-400 mt-2">19,000 RWF</div>
            </div>
        </a>

        <!-- Risotto -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/risotto.jpg" 
                 alt="Seafood Risotto" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Seafood Risotto</div>
                <div class="text-sm text-gray-400 mt-2">24,000 RWF</div>
            </div>
        </a>

        <!-- Grilled Lamb -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/grilled-lamb.jpg" 
                 alt="Herb-Marinated Lamb Chops" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Herb-Marinated Lamb Chops</div>
                <div class="text-sm text-gray-400 mt-2">28,000 RWF</div>
            </div>
        </a>

        <!-- Burgers -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/beef-burger.jpg" 
                 alt="Signature Beef Burger" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Signature Beef Burger</div>
                <div class="text-sm text-gray-400 mt-2">15,500 RWF</div>
            </div>
        </a>

        <!-- Samosas -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/samosas.webp" 
                 alt="Beef Samosas" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Beef Samosas</div>
                <div class="text-sm text-gray-400 mt-2">4,500 RWF</div>
            </div>
        </a>

        <!-- Buffet Meals -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/buffet.avif" 
                 alt="Grand Buffet" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Grand Buffet</div>
                <div class="text-sm text-gray-400 mt-2">32,000 RWF</div>
            </div>
        </a>

        <!-- BBQ Meat -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/bbq-meat.avif" 
                 alt="Mixed Grill Platter" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Mixed Grill Platter</div>
                <div class="text-sm text-gray-400 mt-2">29,000 RWF</div>
            </div>
        </a>

        <!-- Fresh Juice -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/fresh-juice.avif" 
                 alt="Tropical Fresh Juice" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Tropical Fresh Juice</div>
                <div class="text-sm text-gray-400 mt-2">6,000 RWF</div>
            </div>
        </a>

        <!-- Cocktails -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/cocktail.jpg" 
                 alt="Pink Paradise Cocktail" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium">
                <div class="text-xl">Pink Paradise</div>
                <div class="text-sm text-gray-400 mt-2">11,000 RWF</div>
            </div>
        </a>

    </div>
</div>

<?php 
include 'footer.php'; 
?>

