<footer class="content-info">
    <div class="container">
        @php(dynamic_sidebar('sidebar-footer'))
    </div>
</footer>
<footer class="bg-gray-700 text-white uppercase py-8">
    <div class="container flex">
        <nav>
            <span>1</span>
            <span>2</span>
            <span>3</span>
        </nav>
        <span class="block">© <?php echo date('Y'); ?> {{ $siteName }}</span>
    </div>
</footer>
