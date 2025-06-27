@vite('resources/js/app.js')
<script src="https://kit.fontawesome.com/7eaa0f0932.js" crossorigin="anonymous"></script>

{{-- handle loading --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form'); // ganti dengan selektor form yang sesuai
        const overlay = document.getElementById('overlay');

        form.addEventListener('submit', function(event) {
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
        });
    });
</script>