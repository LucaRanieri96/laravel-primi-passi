<header>
    <nav>
        <h1>NAVIGATION</h1>

        <ul>
            <li><a href="/" {{-- serve per mettere una classe dinamica usando il nome della current route --}}
                    class="{{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }}">Home</a></li>
            <li><a href="about"
                    class="{{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }}">About</a></li>
            <li><a href="contacts"
                    class="{{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }}">Contacts</a>
            </li>
        </ul>
    </nav>
</header>