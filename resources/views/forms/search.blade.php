<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
    <label>
        <span class="sr-only">
            {{ _x('Search for:', 'label', 'asktraders-theme') }}
        </span>

        <input type="search" class="" placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'asktraders-theme') !!}"
            value="{{ get_search_query() }}" name="s">
    </label>

    <input type="submit" class=""
        value="{{ esc_attr_x('Search', 'submit button', 'asktraders-theme') }}">
</form>
