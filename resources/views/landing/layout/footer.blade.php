<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl border-t-[1px] pt-10">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 w-60">
                <a href="/" class="flex-col items-center">
                    <div class="flex items-center">
                        <img src="{{asset('images/logo/logo.png')}}" class="h-8 mr-3" alt="Flowbite Logo" loading="lazy"/>
                        <span class="self-center text-2xl whitespace-nowrap dark:text-white"><span class="font-semibold">Intech</span>Fest</span>
                    </div>
                    <p class="mt-3">Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364</p>
                </a>
            </div>
            <div>
                <h2 class="md:mb-6 mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Program</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="{{url('/detail-wdc')}}" class="hover:underline ">Web Design
                            Competition</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{url('/detail-dc')}}" class="hover:underline">Design Challenge</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{url('/detail-ctf')}}" class="hover:underline">Capture The Flag</a>
                    </li>
                    <!-- Hapus class pas udah open regist ct -->
                    <li>
                        <a href="{{ url('/chilltalks-detail') }}"
                        class="hover:underline text-gray-400 pointer-events-none cursor-not-allowed">
                            ChillTalks
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-5 md:mt-0">
                <h2 class="md:mb-6 mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-5">
                        <i class="fa-regular fa-envelope mr-1"></i><a href="mailto:intechfestpnb@gmail.com"
                            class="hover:underline"> intechfestcc@gmail.com</a>
                    </li>
                    <li class="mb-5">
                        <i class="fa-solid fa-phone mr-1"></i><a href="https://wa.me/+6282146775407" target="_blank"
                            class="hover:underline">+62 821-4677-5407 (Mita)</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone mr-1"></i><a href="https://wa.me/+6281558964200" target="_blank"
                            class="hover:underline">+62 815-5896-4200 (Tugus)</a>
                    </li>
                </ul>
            </div>
            <div class="mt-5 md:mt-0">
                <h2 class="md:mb-6 mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Section</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="{{url('/#home')}}" class="hover:underline ">Home</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{url('/#lomba')}}" class="hover:underline">Lomba</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{url('/#chilltalks')}}" class="hover:underline">ChillTalks</a>
                    </li>
                    <li>
                        <a href="{{url('/#faq')}}" class="hover:underline">FAQ</a>
                    </li>
                </ul>
            </div>

        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="/"
                    class="hover:underline">IntechFest</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a target="_blank" href="https://instagram.com/intechfest.cc?igshid=MzRlODBiNWFlZA==" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-brands fa-instagram text-xl hover:text-pink-600"></i>
                </a>
                <a target="_blank" href="https://www.youtube.com/@ukmcomputerclub" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-brands fa-youtube text-xl hover:text-red-600"></i>
                </a>
                <a target="_blank" href="mailto:intechfestcc@gmail.com" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-regular fa-envelope text-xl"></i>
                </a>
                <a target="_blank" href="https://wa.me/+6282146775407" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-brands fa-whatsapp text-xl hover:text-green-400"></i>
                </a>
            </div>
        </div>
    </div>
</footer>