<footer class="site-footer py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="footer-brand d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-airplane-fill"></i>
                    {{ config('app.name', 'Travzy') }}
                </div>
                <p class="mb-0">Discover your next adventure with curated trips and travel inspiration.</p>
            </div>

            <div class="col-md-4">
                <h6 class="text-white mb-3">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6 class="text-white mb-3">Connect</h6>
                <div class="d-flex gap-3">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x fs-5"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom text-center">
            &copy; {{ date('Y') }} {{ config('app.name', 'Travzy') }}. All rights reserved.
        </div>
    </div>
</footer>
