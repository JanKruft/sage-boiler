<header class="flex justify-between banner">
    <a class="block brand" href="{{ home_url('/') }}">
        {{ $siteName }}
    </a>

    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
    @endif
    <div class="search-container-live-search" id="search-container-live-search">
        <form method="post" class="search-form-element">
            <input type="text" placeholder="{!! esc_attr_x('Type for Search &hellip;', 'placeholder', 'asktraders-theme') !!}" class="search-content" value="">
            <button type="submit" class="search-submit">
                <svg fill="none" whith="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m11 19c4.4183 0 8-3.5817 8-8 0-4.4183-3.5817-8-8-8-4.4183 0-8 3.5817-8 8 0 4.4183 3.5817 8 8 8z"
                        stroke="#555" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <path d="m21 21-4.35-4.35" stroke="#555" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"></path>
                </svg>
            </button>
        </form>
    </div>
</header>
