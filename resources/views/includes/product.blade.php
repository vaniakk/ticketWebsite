<style>
    .nav-link {
        color: gray;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid transparent;
    }

    
    .nav-link.active {
        color: #4F46E5;
        border-bottom: 2px solid #4F46E5;
    }

</style>


<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 dark:bg-gray-800">
    <div class="border-b flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 uppercase">
            <div class="flex space-x-4 justify-between">
                <a href="/product_hotel" class="nav-link font-semibold inline-block">Hotel</a>
                <a href="/product_villa" class="nav-link font-semibold inline-block">Villa</a>
                <a href="/product_pesawat" class="nav-link font-semibold inline-block">Pesawat</a>
            </div>
        </div>
    </div>

</div>

<script>
    const links = document.querySelectorAll('.nav-link');

    const currentUrl = window.location.href;

    links.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });
</script>