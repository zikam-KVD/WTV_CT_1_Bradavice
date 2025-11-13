<footer>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <span>995 - 2025</span>
        </div>

        <div>
            @guest
                <a href="{{ route('login') }}">Správa Bradavic</a>
                <a href="{{ route('register') }}">Přístupnost</a>
            @endguest

            @auth
                Odhlásit se
            @endauth
            
            <a href="#">Podmínky</a>
        </div>
    </div>
</footer>
