<!-- start sidebar -->
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{url('/peserta')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg {{ Request::is('peserta') ? 'bg-gray-100' : 'bg-white' }} group hover:bg-gray-100">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ Request::is('peserta') ? 'bg-primary-lightblue' : 'bg-primary-blue' }} group-hover:bg-primary-lightblue">
                        <i class="fa-solid fa-house text-base text-white group:text-slate-800"></i>
                    </div>
                    <span class="ml-3 group:text-slate-800">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('/profil-peserta')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg {{ Request::is('profil-peserta') ? 'bg-gray-100' : 'bg-white' }} group hover:bg-gray-100">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ Request::is('profil-peserta') ? 'bg-primary-lightblue' : 'bg-primary-blue' }} group-hover:bg-primary-lightblue">
                        <i class="fa-solid fa-user text-base text-white"></i>                
                    </div>
                    <span class="ml-3">Profil</span>
                </a>
            </li>
            <li>
                <a href="{{url('/lomba-peserta')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg {{ Request::is('lomba-peserta') ? 'bg-gray-100' : 'bg-white' }} group hover:bg-gray-100">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ Request::is('lomba-peserta') ? 'bg-primary-lightblue' : 'bg-primary-blue' }} group-hover:bg-primary-lightblue">
                        <i class="fa-solid fa-flag-checkered text-base text-white"></i>      
                    </div>
                    <span class="ml-3">Lomba</span>
                </a>
            </li>
            <li>
                <!-- sudah buka pendaftaran -->
                <a href="{{url('/chilltalks-peserta')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg {{ Request::is('chilltalks-peserta') ? 'bg-gray-100' : 'bg-white' }} group hover:bg-gray-100">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ Request::is('chilltalks-peserta') ? 'bg-primary-lightblue' : 'bg-primary-blue' }} group-hover:bg-primary-lightblue">
                        <i class="fa-solid fa-microphone-lines text-base text-white"></i>            
                    </div>
                    <span class="ml-3">ChillTalks</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- end sidebar -->