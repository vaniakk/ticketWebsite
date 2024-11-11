<script src="https://cdn.jsdelivr.net/npm/tailwindcss-cdn@3.4.1/tailwindcss.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>

<div class="flex justify-center items-center min-h-screen flex-col p-3 md:p-0 lg:p-0 -mt-10 -mb-10 dark:bg-gray-800">

  <div class="text-left mb-6" style="max-width: 1050px; width: 100%;">
    <h2 class="text-2xl font-bold dark:text-white">Ide liburan yang wajib dicatat! 🗺️📌</h2>
    <p class="dark:text-gray-300">Inspirasi liburan serta rekomendasi tiket, penginapan, transportasi, dan info lain untukmu.</p>
  </div>

  <div x-data="swipeCards()" x-init="
        let isDown = false;
        let startX;
        let scrollLeft;
        $el.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - $el.offsetLeft;
        scrollLeft = $el.scrollLeft;
        });
        $el.addEventListener('mouseleave', () => {
        isDown = false;
        });
        $el.addEventListener('mouseup', () => {
        isDown = false;
        });
        $el.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - $el.offsetLeft;
        const walk = (x - startX) * 1;
        $el.scrollLeft = scrollLeft - walk;
        });
        " class="overflow-x-scroll scrollbar-hide mb-4" style="overflow-y: hidden; max-width: 1050px; width: 100%;">
    <div class="flex snap-x snap-mandatory gap-2">
      <template x-for="card in cards" :key="card.id">
        <div class="flex-none w-64 h-50 snap-center">
          <div class="bg-white border-1 border border-gray-200 rounded-lg overflow-hidden mb-4 h-full">
            <img :src="card.image" alt="" class="w-full h-full object-contain">
          </div>
        </div>
      </template>
    </div>
  </div>
</div>

<script>
	function swipeCards() {
			  return {
			    cards: [
			      {
			        id: 1,
			        image: `images/singapore.webp`
			      },
			      {
			        id: 2,
			        image: `images/malaysia.webp`
			      },
			      {
			        id: 3,
			        image: `images/sydney.webp`
			      },
			      {
			        id: 4,
			        image: `images/vietnam.webp`
			      },
			      {
			        id: 5,
			        image: `images/newzealand.webp`
			      },
			      {
			        id: 6,
			        image: `images/filipina.webp`
			      },
			      {
			        id: 7,
			        image: `images/thailand.webp`
			      },
			      {
			        id: 8,
			        image: `images/jepang.webp`
			      }
			    ]
			  };
			}
</script>

