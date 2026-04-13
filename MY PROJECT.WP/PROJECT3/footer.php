<footer class="bg-gray-900 border-t border-gray-800 py-12 mt-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-pink-500 rounded-2xl flex items-center justify-center text-slate-900 text-3xl">G</div>
                    <span class="text-2xl font-bold">GRAND HORIZON HOTEL</span>
                </div>
                <p class="text-gray-400 text-sm">Kigali's most luxurious destination. Where every stay feels like home.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">QUICK LINKS</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="index.php" class="hover:text-pink-400">Home</a></li>
                    <li><a href="about.php" class="hover:text-pink-400">About Us</a></li>
                    <li><a href="menu.php" class="hover:text-pink-400">Menu</a></li>
                    <li><a href="gallery.php" class="hover:text-pink-400">Gallery</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">CONTACT</h4>
                <p class="text-gray-400 text-sm">KG 123 Ave, Kigali, Rwanda<br>+250 788 123 456<br>info@grandhorizonhotel.rw</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">FOLLOW US</h4>
                <div class="flex gap-4 text-2xl">
                    <i class="fa-brands fa-instagram hover:text-pink-400 cursor-pointer"></i>
                    <i class="fa-brands fa-facebook hover:text-pink-400 cursor-pointer"></i>
                    <i class="fa-brands fa-twitter hover:text-pink-400 cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-xs text-gray-500 mt-12 border-t border-gray-800 pt-6">
            © 2026 GRAND HORIZON HOTEL Kigali •
        </div>
    </div>
</footer>

<script>
    // Mobile menu toggle
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        const icon = document.getElementById('hamburger');
        menu.classList.toggle('hidden');
        if (menu.classList.contains('hidden')) {
            icon.classList = 'fa-solid fa-bars';
        } else {
            icon.classList = 'fa-solid fa-xmark';
        }
    }
    
    // Tailwind script already loaded in header
    console.log('%c✅ GRAND HORIZON HOTEL website loaded successfully!', 'color:#ec4899; font-size:13px; font-weight:bold');
</script>
</body>
</html>