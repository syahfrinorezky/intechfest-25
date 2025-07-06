@extends('landing.main')

{{-- judul halaman disini --}}
@section('title', 'Intechfest')
@section('content')

{{-- navbar --}}
@include('landing.layout.navbar')

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<link rel="stylesheet" href="{{asset('sal.js/dist/sal.css')}}">

{{-- hero section --}}
<section id="home" class="bg-white relative overflow-y-hidden mt-16 overflow-hidden" data-sal="slide-up">
    {{-- hero --}}
    <div class="grid max-w-screen-xl px-4 py-7 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="place-self-center lg:col-span-8">
            <h1 class="max-w-2xl mb-4 text-4xl tracking-tight font-bold leading-none md:text-5xl xl:text-6xl dark:text-white">
                IntechFest
            </h1>
            <p
                class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-justify">
                Information and Technology Festival (IntechFest) merupakan brand kegiatan terbesar yang dimiliki oleh Unit
                Kegiatan Mahasiswa
                Computer Club
                Politeknik Negeri Bali yang dilaksanakan setiap 1 (satu) tahun sekali.</p>
            <a href="#lomba"
                class="btn-slide relative overflow-hidden inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-lightblue focus:ring-4 focus:ring-teal-500">
                <span class="z-20">Daftar Lomba</span>
                <svg class="w-5 h-5 ml-2 -mr-1 z-20" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <div class="btn-border-wrapper inline">
                <a href="https://wa.me/+6282146775407?text=Halo Kak, Saya Ingin Bertanya..." {{-- silahlan di pakai nomor wa yang bersangkutan --}}
                    target="_blank" class="my-2 md:my-0 btn-border relative inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <span class="span-border">Hubungi Panitia</span>
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-4 lg:flex relative">
            {{-- ivy --}}
            {{-- <svg id="eySQE3VbFja1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 890.67 918" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                <g id="eySQE3VbFja2" transform="matrix(.801023 0 0 0.801024 89.252943 122.95631)">
                    <g id="eySQE3VbFja3" transform="matrix(.998546 0.053916-.053916 0.998546 46.668606-24.924751)">
                        <g>
                            <path
                                d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,41,40.68,48,51.33c8.17,12.4-2.158504,28.217289-9.218504,37.907289s-16.960909,11.957613-37.790909,6.107613c-27-7.57-38.349668-18.66086-61.839668-37.79086-17.9-14.58-47.570919-41.334042-57.010919-59.734042s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja17)">
                            <g>
                                <path
                                    d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,41,40.68,48,51.33c8.17,12.4,9,30.51,1.94,40.2s-17.69,18.5-38.52,12.65c-27-7.57-54.94-26.45-78.43-45.58-17.9-14.58-41.41-42.38-50.85-60.78s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                                <path
                                    d="M7479.58,7310.17c-7.58,1.91-20.64,5.89-24.83,14.27-5.37,10.74-2.25,23.31-1.42,28.81s-4.25-2.08-5.91-7.92s0-24.58,0-24.58L7459.5,7309l20.08-2.42Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M7585.83,7385.83c0,0,10.84,33,1.5,44s-44,15-53.84,10-8.49,19-8.49,19l42.67,17.5l54.16-4c0,0,19.84-15.16,19.67-19.66s-5.83-33.67-6.33-35.34-21-27.5-21-27.5Z"
                                    transform="translate(-6750.83-6746.5)" fill="#0f2329" />
                            </g>
                            <mask id="eySQE3VbFja17" mask-type="alpha">
                                <g transform="translate(.000001 0.000001)">
                                    <path
                                        d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,34.039441,30.486138,41.039441,41.136138c8.17,12.4,1.531201,40.65726-6.111778,47.470679-10.358858,9.234519-27.336247,6.521721-41.67313,2.69071-19.563073-5.22752-36.208855-22.130509-59.698855-41.260509-17.9-14.58-41.975678-33.817018-51.415678-52.217018s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                        transform="translate(-6750.83-6746.5)" fill="#132c33" />
                                </g>
                            </mask>
                        </g>
                        <g>
                            <path
                                d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,32.034971,30.822086,39.034971,41.472086c8.17,12.4,9,30.51,1.94,40.2s-17.69,18.5-38.52,12.65c-27-7.57-110.874971-78.102086-120.314971-96.502086s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021" stroke-width="12"
                                stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja22" transform="matrix(.954886-.296972 0.296972 0.954886-167.986321 102.666566)">
                        <g>
                            <path
                                d="M6880.2,7307.21c-17.13-6.29-27.12-16.87-57.69-44.69-32.36-29.44-60.21-58.91-61.34-83.48s24.86-49.53,55.55-35.51s99.948337,93.758882,105.088337,98.138882s12.381663,21.141118,6.461663,37.931118-29.21,34.54-48.07,27.61Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja31)">
                            <g>
                                <path
                                    d="M6788.17,7146.33c-6.84,7.5-16.67,18.17-18,29s2,17.5,4.5,23.34-3.5,3.69-3.5,3.69l-20.34-29.53l7.17-31.16l23.33-12.67Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M6878.33,7205c2.17,7.67,12.5,43.5,5.17,56.67s-7.5,18.66-25,16.66-26.67.4-26.67.4s34.67,37.1,35.17,38.1s45.83,2.17,50.5,1.67s25.17-36.17,25.17-36.17l-2.34-31.83-19.16-26.39Z"
                                    transform="translate(-6750.83-6746.5)" fill="#0d1f24" />
                            </g>
                            <mask id="eySQE3VbFja31" mask-type="alpha">
                                <path
                                    d="M6880.2,7307.21c-17.13-6.29-27.12-16.87-57.69-44.69-32.36-29.44-60.21-58.91-61.34-83.48s24.86-49.53,55.55-35.51s78.1,75.05,83.24,79.43s34.23,39.85,28.31,56.64-29.21,34.54-48.07,27.61Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                            </mask>
                        </g>
                        <g transform="matrix(.997513 0.070485-.070485 0.997513 33.899074-5.456601)">
                            <path
                                d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,32.034971,30.822086,39.034971,41.472086c8.17,12.4,9,30.51,1.94,40.2s-17.69,18.5-38.52,12.65c-27-7.57-110.874971-78.102086-120.314971-96.502086s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                transform="matrix(.999999 0.001141-.001141 0.999999-7427.519313-6910.545894)"
                                fill="none" stroke="#1f0021" stroke-width="12" stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja35" transform="matrix(.968553-.248808 0.248808 0.968553-189.691893 188.20965)">
                        <g>
                            <path
                                d="M7231.568741,7580.279961c3.25-19.41,22.191259-59.689961,38.381259-77.989961c7.51-8.47,23.54-20.33,43.42-12.87c17.66,6.62,26,25.87,21.62,42.86-3.72,14.4-31.359936,70.950328-43.869936,80.150328s-32.070774,12.849486-43.110774,4.749486-18.840549-22.389853-16.440549-36.899853Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja43)">
                            <g>
                                <path
                                    d="M7306.75,7492.58c-7.75,1.5-14.56,2.68-21.42,6.92s-12.1,10.5-19.33,17.5s6.59-17.41,6.59-17.41l17.25-8.87l11.46-1.41Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M7239.13,7569.63c2,4.87,5.75,13.12,13.37,14.5s14.13.5,28.75-6.63s40.75-45,43.25-49.87c2.390658-4.272232,5.021544-8.405527,7.88-12.38l4.75,32c0,0-9.63,29.5-10,30s-24.38,34-24.38,34l-40.87,10.5-26-11.62-8.38-26Z"
                                    transform="translate(-6750.83-6746.5)" fill="#0f2329" />
                            </g>
                            <mask id="eySQE3VbFja43" mask-type="alpha">
                                <path
                                    d="M7232.664777,7581.741341c3.25-19.41,21.095223-61.151341,37.285223-79.451341c7.51-8.47,23.54-20.33,43.42-12.87c17.66,6.62,26,25.87,21.62,42.86-3.72,14.4-33.917355,70.584983-46.427355,79.784983s-30.974739,12.118796-42.014739,4.018796-16.283129-19.832438-13.883129-34.342438Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                            </mask>
                        </g>
                        <g>
                            <path
                                d="M7232.263875,7580.27167c3.25-19.41,21.496125-59.68167,37.686125-77.98167c7.51-8.47,27.227308-24.665797,47.107308-17.205797c17.66,6.62,22.312692,30.205797,17.932692,47.195797-3.72,14.4-36.604793,71.067881-49.114793,80.267881s-29.989081,9.741163-41.029081,1.641163-14.982251-19.407374-12.582251-33.917374Z"
                                transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021" stroke-width="12"
                                stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja47" transform="matrix(.939531 0.342464-.342464 0.939531 288.661303-55.905592)">
                        <g>
                            <path
                                d="M7069.73,7509.86c2.12-6.85,10.61-20,30.51-16.7s46.390517,37.727995,57.530517,52.147995s20.629065,40.78124,21.689065,51.15124-5.550074,21.562336-17.770074,24.742336c-12.65,3.29-30.647283,5.168125-44.627283-10.521875s-28.822225-21.089696-40.172225-49.209696c-9.78-24.24-12.21-35.28-7.16-51.61Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja55)">
                            <g>
                                <path
                                    d="M7089.19,7496.81c-3,3.63-8.72,6.9-11.88,16-2.12,6.13-3.32,16.81-2.37,22.25c1.12,6.44.75,9.75-1.38,10.63s-9.5-22.63-9.5-22.63l9.25-25.37l12.75-7.63Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M7154,7554c2.67,8.5,14.33,55.83,2.83,63.67-9.31,6.34-29.66-.17-35-1.34s11.67,33,11.67,33l54.5,15.17l26.67-34.17-13.5-42.83-34.23-44.67Z"
                                    transform="translate(-6754.422676-6751.290227)" fill="#0f2329" />
                            </g>
                            <mask id="eySQE3VbFja55" mask-type="alpha">
                                <path
                                    d="M7069.73,7509.86c2.12-6.85,10.61-20,30.51-16.7s42.232852,31.330529,53.371577,45.749094s21.31282,26.335929,22.909566,49.488688-3.882392,29.478153-16.102392,32.658153c-12.65,3.29-27.663721,8.342444-41.643721-7.347556s-30.53503-24.118379-41.88503-52.238379c-9.78-24.24-12.21-35.28-7.16-51.61Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                            </mask>
                        </g>
                        <g>
                            <path
                                d="M7069.73,7509.86c5.368432-9.247952,16.467761-18.237593,36.367761-14.937593s38.159064,33.973274,49.299064,48.393274s22.627536,37.803279,23.01008,53.105062-10.6569,29.188534-25.193593,31.101257c-14.553505,1.914935-30.417464-8.192819-40.472475-18.887128-13.285828-14.093316-23.145856-26.736856-35.850837-47.164872-8.255331-13.273537-15.007554-38.09138-7.16-51.61Z"
                                transform="translate(-6752.027559-6749.294298)" fill="none" stroke="#1f0021"
                                stroke-width="12" stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja59" transform="translate(.000001 0)">
                        <g mask="url(#eySQE3VbFja65)">
                            <g>
                                <path
                                    d="M6994.56,7299.18c24.43-26.4,53.28-35.34,77.21-42s140.55-17.83,192.49-16.57c31.6.78,78.26,6.3,100.56,19.11c23.08,13.25,36.39,37.3,41.93,59.64c7.85,31.66-9.06,72.9-38.79,101.61-22.28,21.53-83.74,57.44-163.13,64.43s-152.38-20.74-175.95-36.2-52.08-40.74-56.43-78.3c-3.81-32.9,1.81-49.79,22.11-71.72Z"
                                    transform="translate(-6750.83-6746.5)" fill="#50c4d3" />
                                <path
                                    d="M7373,7277c2.25,12,8.75,46.5,1.95,71-6.44,23.22-29.31,47.52-48.89,59.52-28.23,17.31-70.81,33.9-91.31,39s-65.75,13.78-102.5,13.75c-25.75,0-65.38-2.37-77.55-5.39-23.64-5.86-15.95-1.36-15.95-1.36l-7.69,20.33l124.86,25.34l157.58-22.67l87-69.62l21.33-87.13Z"
                                    transform="translate(-6750.83-6746.5)" fill="#49b2bf" />
                                <path
                                    d="M7026.83,7284c-12.51,4.38-42.34,33.4-49.17,45.39s-6.32,7.48-6.32,7.48l14.79-32.76l34-28l10.79,6.19Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                            </g>
                            <mask id="eySQE3VbFja65" mask-type="alpha">
                                <path
                                    d="M6994.56,7299.18c24.43-26.4,53.28-35.34,77.21-42s140.55-17.83,192.49-16.57c31.6.78,78.26,6.3,100.56,19.11c23.08,13.25,36.39,37.3,41.93,59.64c7.85,31.66-9.06,72.9-38.79,101.61-22.28,21.53-83.74,57.44-163.13,64.43s-152.38-20.74-175.95-36.2-52.08-40.74-56.43-78.3c-3.81-32.9,1.81-49.79,22.11-71.72Z"
                                    transform="translate(-6750.83-6746.5)" fill="#50c4d3" />
                            </mask>
                        </g>
                        <g>
                            <g>
                                <path d="M7150.17,7351.92c-.88,18.87,2.16,51.75,5.75,63.25"
                                    transform="translate(-6741.707367-6748.246955)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" />
                                <path d="M7160.25,7436.92c1.08,4.08,3.42,11.75,3.92,13"
                                    transform="translate(-6741.013597-6748.399946)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" />
                                <path
                                    d="M7212.785614,7349.640243c33.090026-3.72181,87.13176-19.038473,101.964386-29.890243c3,6.5,6.75,21.5,6.5,25.75-17.2506,12.311714-68.92642,25.838939-103.5,30.75.13909-3.499947-4.213585-21.149056-4.964386-26.609757Z"
                                    transform="translate(-6739.453198-6752.188395)" fill="none" stroke="#fff"
                                    stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7245.48,7407c0-6.007765-.69985-13.788409-2.46-21.73"
                                    transform="translate(-6740.772125-6750.443661)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7278.47,7397.58c.344614-3.689227-.596827-16.95356-2.100045-20.527125"
                                    transform="translate(-6739.865559-6750.691892)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7308.454693,7386.996654c.25-5.49-.764693-15.156654-2.294693-19.536654"
                                    transform="translate(-6739.231524-6751.534909)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7048.25,7309.13c2.58561,1.376233,5.368495,2.344339,8.25,2.87"
                                    transform="translate(-6757.783245-6755.513454)" fill="none" stroke="#fff"
                                    stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" />
                                <line x1="321.35" y1="567.77" x2="320.9" y2="567.77"
                                    transform="translate(-4.340212-6.004844)" fill="none" stroke="#fff" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" />
                                <path d="M7338.941355,7276.487226c-1.69,2.69-11.191355,7.142774-12.881355,7.892774"
                                    transform="translate(-6745.65772-6743.118127)" fill="none" stroke="#fff"
                                    stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" />
                                <line x1="564.96" y1="542.92" x2="565.29" y2="542.75"
                                    transform="translate(1.790403 3.381873)" fill="none" stroke="#fff" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" />
                                <path d="" transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                    stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" />
                                <g transform="matrix(1.37793 0 0 1.37793-98.044985-239.583788)">
                                    <path
                                        d="M7023.12,7392c3.770295,2.286128,7.74793,4.211331,11.88,5.75-1-4.76-1.73-9.55-2.46-14.36-4.46-.85-9.08-2.22-13.56-3c.861875,4.035664,2.253956,7.939544,4.14,11.61Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7030.71,7369.82c.42,4.52,1.09,9,1.81,13.47-8.66-3.76-13.23-8.7-16.06-17.73q7.08,2.3,14.25,4.26Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7029.77,7362.77c-.5,3.59-2.92,5.34-6.48,4-3.600545-1.314435-5.717674-5.044817-5-8.81.75-3.76,3.77-5,7-3.41c3.211648,1.377482,5.063003,4.774387,4.48,8.22Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7038.34,7398.46c4.463989,1.339889,9.010203,2.388759,13.61,3.14-1.376961-4.933102-2.468767-9.941389-3.27-15-4.29-.64-8.52-1.53-12.76-2.44.6,4.84,1.37,9.55,2.42,14.3Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7035.9,7384c-.63-4.48-1.29-8.95-1.73-13.45c6.67,4,11.3,8.78,14.51,15.89-4.3-.61-8.53-1.5-12.78-2.44Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7034.18,7370.59c4.42.94,8.82,2,13.25,2.9-.18-4.59-.27-9.19-.44-13.79-4.19-.64-8.83-1.5-13-2.45-.16189,4.447023-.098475,8.899391.19,13.34Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7047.44,7373.48c.43,4.33.88,8.66,1.24,13c7.11-1.6,10-4.94,11.88-12.28-4.37-.09-8.75-.49-13.12-.72Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7047,7359.7c.16,4.57.25,9.15.44,13.72c7.53-1.59,12.31-5,14.35-12.46-4.949051-.154073-9.886207-.574683-14.79-1.26Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <path d="M7022.17,7275.83c71.029925,27.820608,242.825579,25.115165,299.33-16.66"
                                transform="translate(-6733.695956-6741.359736)" fill="none" stroke="#1f0021"
                                stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M6989.05,7298.47c24.44-26.4,53.29-35.34,77.22-42s140.55-17.84,192.49-16.57c31.6.77,78.26,6.3,100.56,19.11c23.08,13.25,36.39,37.3,41.93,59.64c7.85,31.66-9.06,72.9-38.79,101.61-22.28,21.52-83.74,57.44-163.14,64.43s-152.38-20.74-175.94-36.2-52.08-40.74-56.43-78.3c-3.81-32.88,1.81-49.79,22.1-71.72Z"
                                transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021" stroke-width="12"
                                stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g transform="matrix(.999757 0.022026-.022026 0.999757 13.183015-10.104449)">
                        <g id="eySQE3VbFja93" transform="matrix(.995495-.094811 0.094811 0.995495-39.185926 41.936789)">
                            <g>
                                <path
                                    d="M6896.76,6945.87q-2.3,2.58-4.49,5.17c-11.29,13.38-25.57,43.74-32.55,66.74s-6.37,63.37,9.3,91.41c20.18,36.1,62,64.07,110.21,80.76c50.22,17.38,93.47,30.84,186,32s178-8.72,222.27-31.4c58.6-30,116.49-73.75,116.49-144.79c0-41.21-25.05-76.7-53.54-101.28v0c0,0-26.33-104.58-45.86-104.45-18.3.12-71.52,50.23-71.52,50.23v0c-34.3-8.36-73.68-14.38-117.16-18.26-81.22-7.26-164.83-1.58-214.85,11.27v0c0,0-56.48-36.51-69.39-34.41s-34.92,97-34.92,97Z"
                                    transform="translate(-6750.83-6746.5)" fill="#50c4d3" stroke="#000"
                                    stroke-width="12" stroke-linejoin="round" />
                            </g>
                            <g id="eySQE3VbFja96" transform="translate(-4.991246-2.804138)">
                                <g>
                                    <path
                                        d="M7097.79,7048.27c.22,27.89-7.81,57.7-39.52,62s-54.16-20.3-51.72-53.18s20.8-61.25,45.53-62.21s45.49,26.4,45.71,53.39Z"
                                        transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                    <path
                                        d="M7208,7063.2c1.82-27.77,11.78-58.06,38.9-61.38c27.51-3.37,50.8,20.42,50.57,58.35-.23,39.5-19.95,59.88-44.65,60.68-28.3.91-47.15-21.85-44.82-57.65Z"
                                        transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                </g>
                                <g id="eySQE3VbFja100" mask="url(#eySQE3VbFja106)">
                                    <g>
                                        <ellipse rx="18.94" ry="19.31" transform="translate(280.23 276.31)"
                                            fill="#fff" />
                                        <circle r="5.06" transform="translate(313.98 341.31)" fill="#fff" />
                                        <ellipse rx="18.58" ry="19.58" transform="translate(479.92 284.25)"
                                            fill="#fff" />
                                        <ellipse rx="5.72" ry="5.74" transform="translate(521.39 345.93)" fill="#fff" />
                                    </g>
                                    <mask id="eySQE3VbFja106" mask-type="alpha">
                                        <g>
                                            <path
                                                d="M7097.79,7048.27c.22,27.89-7.81,57.7-39.52,62s-54.16-20.3-51.72-53.18s20.8-61.25,45.53-62.21s45.49,26.4,45.71,53.39Z"
                                                transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                            <path
                                                d="M7208,7063.2c1.82-27.77,11.78-58.06,38.9-61.38c27.51-3.37,50.8,20.42,50.57,58.35-.23,39.5-19.95,59.88-44.65,60.68-28.3.91-47.15-21.85-44.82-57.65Z"
                                                transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                        </g>
                                    </mask>
                                </g>
                            </g>
                            <g>
                                <path
                                    d="M6799.79,6990.38c4.67-82,67.39-190.6,209.44-219.18c210.53-42.37,432.46-21,524.82,150.91c64.29,119.69,6.7,242.62-110.3,288.27-142.42,55.56-299.09,46.05-424.24,15.77-136.62-33.07-206.51-117.15-199.72-235.77Z"
                                    transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021"
                                    stroke-width="12" stroke-linejoin="round" />
                                <path d="M7033.31,6841.46c-34.54,3.76-81.85,24.78-105.12,59.32"
                                    transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff" stroke-width="29"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7319.59,7166.44c34.65-2.56,82.65-21.94,107.11-55.65"
                                    transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff" stroke-width="29"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <line x1="150.78" y1="212.28" x2="151.47" y2="207.16" fill="none" stroke="#fff"
                                    stroke-width="29" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </g>
                    </g>
                </g>
                <script>
                    <![CDATA[
                    !function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):((t="undefined"!=typeof globalThis?globalThis:t||self).__SVGATOR_PLAYER__=t.__SVGATOR_PLAYER__||{},t.__SVGATOR_PLAYER__["5c7f360c"]=n())}(this,(function(){"use strict";function t(t,n){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(t,n).enumerable}))),e.push.apply(e,r)}return e}function n(n){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?t(Object(r),!0).forEach((function(t){o(n,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(n,Object.getOwnPropertyDescriptors(r)):t(Object(r)).forEach((function(t){Object.defineProperty(n,t,Object.getOwnPropertyDescriptor(r,t))}))}return n}function e(t){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function r(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}function i(t,n){for(var e=0;e<n.length;e++){var r=n[e];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function u(t,n,e){return n&&i(t.prototype,n),e&&i(t,e),t}function o(t,n,e){return n in t?Object.defineProperty(t,n,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[n]=e,t}function a(t){return(a=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function l(t,n){return(l=Object.setPrototypeOf||function(t,n){return t.__proto__=n,t})(t,n)}function s(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}function f(t,n,e){return(f=s()?Reflect.construct:function(t,n,e){var r=[null];r.push.apply(r,n);var i=new(Function.bind.apply(t,r));return e&&l(i,e.prototype),i}).apply(null,arguments)}function c(t,n){if(n&&("object"==typeof n||"function"==typeof n))return n;if(void 0!==n)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}function h(t,n,e){return(h="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(t,n,e){var r=function(t,n){for(;!Object.prototype.hasOwnProperty.call(t,n)&&null!==(t=a(t)););return t}(t,n);if(r){var i=Object.getOwnPropertyDescriptor(r,n);return i.get?i.get.call(e):i.value}})(t,n,e||t)}function v(t){return function(t){if(Array.isArray(t))return y(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,n){if(!t)return;if("string"==typeof t)return y(t,n);var e=Object.prototype.toString.call(t).slice(8,-1);"Object"===e&&t.constructor&&(e=t.constructor.name);if("Map"===e||"Set"===e)return Array.from(t);if("Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e))return y(t,n)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function y(t,n){(null==n||n>t.length)&&(n=t.length);for(var e=0,r=new Array(n);e<n;e++)r[e]=t[e];return r}Number.isInteger||(Number.isInteger=function(t){return"number"==typeof t&&isFinite(t)&&Math.floor(t)===t}),Number.EPSILON||(Number.EPSILON=2220446049250313e-31);var g=d(Math.pow(10,-6));function d(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:6;if(Number.isInteger(t))return t;var e=Math.pow(10,n);return Math.round((+t+Number.EPSILON)*e)/e}function p(t,n){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:g;return Math.abs(t-n)<e}var m=Math.PI/180;function b(t){return t}function w(t,n,e){var r=1-e;return 3*e*r*(t*r+n*e)+e*e*e}function x(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1;return t<0||t>1||e<0||e>1?null:p(t,n)&&p(e,r)?b:function(i){if(i<=0)return t>0?i*n/t:0===n&&e>0?i*r/e:0;if(i>=1)return e<1?1+(i-1)*(r-1)/(e-1):1===e&&t<1?1+(i-1)*(n-1)/(t-1):1;for(var u,o=0,a=1;o<a;){var l=w(t,e,u=(o+a)/2);if(p(i,l))break;l<i?o=u:a=u}return w(n,r,u)}}function A(){return 1}function k(t){return 1===t?1:0}function _(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(1===t){if(0===n)return k;if(1===n)return A}var e=1/t;return function(t){return t>=1?1:(t+=n*e)-t%e}}var S=Math.sin,O=Math.cos,j=Math.acos,M=Math.asin,P=Math.tan,E=Math.atan2,I=Math.PI/180,R=180/Math.PI,F=Math.sqrt,N=function(){function t(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,u=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,a=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0;r(this,t),this.m=[n,e,i,u,o,a],this.i=null,this.w=null,this.s=null}return u(t,[{key:"determinant",get:function(){var t=this.m;return t[0]*t[3]-t[1]*t[2]}},{key:"isIdentity",get:function(){if(null===this.i){var t=this.m;this.i=1===t[0]&&0===t[1]&&0===t[2]&&1===t[3]&&0===t[4]&&0===t[5]}return this.i}},{key:"point",value:function(t,n){var e=this.m;return{x:e[0]*t+e[2]*n+e[4],y:e[1]*t+e[3]*n+e[5]}}},{key:"translateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(!t&&!n)return this;var e=this.m;return e[4]+=e[0]*t+e[2]*n,e[5]+=e[1]*t+e[3]*n,this.w=this.s=this.i=null,this}},{key:"rotateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;if(t%=360){var n=S(t*=I),e=O(t),r=this.m,i=r[0],u=r[1];r[0]=i*e+r[2]*n,r[1]=u*e+r[3]*n,r[2]=r[2]*e-i*n,r[3]=r[3]*e-u*n,this.w=this.s=this.i=null}return this}},{key:"scaleSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1;if(1!==t||1!==n){var e=this.m;e[0]*=t,e[1]*=t,e[2]*=n,e[3]*=n,this.w=this.s=this.i=null}return this}},{key:"skewSelf",value:function(t,n){if(n%=360,(t%=360)||n){var e=this.m,r=e[0],i=e[1],u=e[2],o=e[3];t&&(t=P(t*I),e[2]+=r*t,e[3]+=i*t),n&&(n=P(n*I),e[0]+=u*n,e[1]+=o*n),this.w=this.s=this.i=null}return this}},{key:"resetSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,u=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0,o=this.m;return o[0]=t,o[1]=n,o[2]=e,o[3]=r,o[4]=i,o[5]=u,this.w=this.s=this.i=null,this}},{key:"recomposeSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:null;return this.isIdentity||this.resetSelf(),t&&(t.x||t.y)&&this.translateSelf(t.x,t.y),n&&this.rotateSelf(n),e&&(e.x&&this.skewSelf(e.x,0),e.y&&this.skewSelf(0,e.y)),!r||1===r.x&&1===r.y||this.scaleSelf(r.x,r.y),i&&(i.x||i.y)&&this.translateSelf(i.x,i.y),this}},{key:"decompose",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,e=this.m,r=e[0]*e[0]+e[1]*e[1],i=[[e[0],e[1]],[e[2],e[3]]],u=F(r);if(0===u)return{origin:{x:d(e[4]),y:d(e[5])},translate:{x:d(t),y:d(n)},scale:{x:0,y:0},skew:{x:0,y:0},rotate:0};i[0][0]/=u,i[0][1]/=u;var o=e[0]*e[3]-e[1]*e[2]<0;o&&(u=-u);var a=i[0][0]*i[1][0]+i[0][1]*i[1][1];i[1][0]-=i[0][0]*a,i[1][1]-=i[0][1]*a;var l=F(i[1][0]*i[1][0]+i[1][1]*i[1][1]);if(0===l)return{origin:{x:d(e[4]),y:d(e[5])},translate:{x:d(t),y:d(n)},scale:{x:d(u),y:0},skew:{x:0,y:0},rotate:0};i[1][0]/=l,i[1][1]/=l,a/=l;var s=0;return i[1][1]<0?(s=j(i[1][1])*R,i[0][1]<0&&(s=360-s)):s=M(i[0][1])*R,o&&(s=-s),a=E(a,F(i[0][0]*i[0][0]+i[0][1]*i[0][1]))*R,o&&(a=-a),{origin:{x:d(e[4]),y:d(e[5])},translate:{x:d(t),y:d(n)},scale:{x:d(u),y:d(l)},skew:{x:d(a),y:0},rotate:d(s)}}},{key:"clone",value:function(){var t=this.m;return new this.constructor(t[0],t[1],t[2],t[3],t[4],t[5])}},{key:"toString",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:" ";if(null===this.s){var n=this.m.map((function(t){return d(t)}));1===n[0]&&0===n[1]&&0===n[2]&&1===n[3]?this.s="translate("+n[4]+t+n[5]+")":this.s="matrix("+n.join(t)+")"}return this.s}}],[{key:"create",value:function(t){return t?Array.isArray(t)?f(this,v(t)):t instanceof this?t.clone():(new this).recomposeSelf(t.origin,t.rotate,t.skew,t.scale,t.translate):new this}}]),t}();function T(t,n,e){return t>=.5?e:n}function q(t,n,e){return 0===t||n===e?n:t*(e-n)+n}function B(t,n,e){var r=q(t,n,e);return r<=0?0:r}function L(t,n,e){var r=q(t,n,e);return r<=0?0:r>=1?1:r}function C(t,n,e){return 0===t?n:1===t?e:{x:q(t,n.x,e.x),y:q(t,n.y,e.y)}}function D(t,n,e){var r=function(t,n,e){return Math.round(q(t,n,e))}(t,n,e);return r<=0?0:r>=255?255:r}function z(t,n,e){return 0===t?n:1===t?e:{r:D(t,n.r,e.r),g:D(t,n.g,e.g),b:D(t,n.b,e.b),a:q(t,null==n.a?1:n.a,null==e.a?1:e.a)}}function V(t,n){for(var e=[],r=0;r<t;r++)e.push(n);return e}function G(t,n){if(--n<=0)return t;var e=(t=Object.assign([],t)).length;do{for(var r=0;r<e;r++)t.push(t[r])}while(--n>0);return t}var Y,$=function(){function t(n){r(this,t),this.list=n,this.length=n.length}return u(t,[{key:"setAttribute",value:function(t,n){for(var e=this.list,r=0;r<this.length;r++)e[r].setAttribute(t,n)}},{key:"removeAttribute",value:function(t){for(var n=this.list,e=0;e<this.length;e++)n[e].removeAttribute(t)}},{key:"style",value:function(t,n){for(var e=this.list,r=0;r<this.length;r++)e[r].style[t]=n}}]),t}(),U=/-./g,Q=function(t,n){return n.toUpperCase()};function H(t){return"function"==typeof t?t:T}function J(t){return t?"function"==typeof t?t:Array.isArray(t)?function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:b;if(!Array.isArray(t))return n;switch(t.length){case 1:return _(t[0])||n;case 2:return _(t[0],t[1])||n;case 4:return x(t[0],t[1],t[2],t[3])||n}return n}(t,null):function(t,n){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:b;switch(t){case"linear":return b;case"steps":return _(n.steps||1,n.jump||0)||e;case"bezier":case"cubic-bezier":return x(n.x1||0,n.y1||0,n.x2||0,n.y2||0)||e}return e}(t.type,t.value,null):null}function Z(t,n,e){var r=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i=n.length-1;if(t<=n[0].t)return r?[0,0,n[0].v]:n[0].v;if(t>=n[i].t)return r?[i,1,n[i].v]:n[i].v;var u,o=n[0],a=null;for(u=1;u<=i;u++){if(!(t>n[u].t)){a=n[u];break}o=n[u]}return null==a?r?[i,1,n[i].v]:n[i].v:o.t===a.t?r?[u,1,a.v]:a.v:(t=(t-o.t)/(a.t-o.t),o.e&&(t=o.e(t)),r?[u,t,e(t,o.v,a.v)]:e(t,o.v,a.v))}function K(t,n){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return t&&t.length?"function"!=typeof n?null:("function"!=typeof e&&(e=null),function(r){var i=Z(r,t,n);return null!=i&&e&&(i=e(i)),i}):null}function W(t,n){return t.t-n.t}function X(t,n,r,i,u){var o,a="@"===r[0],l="#"===r[0],s=Y[r],f=T;switch(a?(o=r.substr(1),r=o.replace(U,Q)):l&&(r=r.substr(1)),e(s)){case"function":if(f=s(i,u,Z,J,r,a,n,t),l)return f;break;case"string":f=K(i,H(s));break;case"object":if((f=K(i,H(s.i),s.f))&&"function"==typeof s.u)return s.u(n,f,r,a,t)}return f?function(t,n,e){if(arguments.length>3&&void 0!==arguments[3]&&arguments[3])return t instanceof $?function(r){return t.style(n,e(r))}:function(r){return t.style[n]=e(r)};if(Array.isArray(n)){var r=n.length;return function(i){var u=e(i);if(null==u)for(var o=0;o<r;o++)t[o].removeAttribute(n);else for(var a=0;a<r;a++)t[a].setAttribute(n,u)}}return function(r){var i=e(r);null==i?t.removeAttribute(n):t.setAttribute(n,i)}}(n,r,f,a):null}function tt(t,n,r,i){if(!i||"object"!==e(i))return null;var u=null,o=null;return Array.isArray(i)?o=function(t){if(!t||!t.length)return null;for(var n=0;n<t.length;n++)t[n].e&&(t[n].e=J(t[n].e));return t.sort(W)}(i):(o=i.keys,u=i.data||null),o?X(t,n,r,o,u):null}function nt(t,n,e){if(!e)return null;var r=[];for(var i in e)if(e.hasOwnProperty(i)){var u=tt(t,n,i,e[i]);u&&r.push(u)}return r.length?r:null}function et(t,n){if(!n.settings.duration||n.settings.duration<0)return null;var e,r,i,u,o,a=function(t,n){if(!n)return null;var e=[];if(Array.isArray(n))for(var r=n.length,i=0;i<r;i++){var u=n[i];if(2===u.length){var o=null;if("string"==typeof u[0])o=t.getElementById(u[0]);else if(Array.isArray(u[0])){o=[];for(var a=0;a<u[0].length;a++)if("string"==typeof u[0][a]){var l=t.getElementById(u[0][a]);l&&o.push(l)}o=o.length?1===o.length?o[0]:new $(o):null}if(o){var s=nt(t,o,u[1]);s&&(e=e.concat(s))}}}else for(var f in n)if(n.hasOwnProperty(f)){var c=t.getElementById(f);if(c){var h=nt(t,c,n[f]);h&&(e=e.concat(h))}}return e.length?e:null}(t,n.elements);return a?(e=a,r=n.settings,i=r.duration,u=e.length,o=null,function(t,n){var a=r.iterations||1/0,l=(r.alternate&&a%2==0)^r.direction>0?i:0,s=t%i,f=1+(t-s)/i;n*=r.direction,r.alternate&&f%2==0&&(n=-n);var c=!1;if(f>a)s=l,c=!0,-1===r.fill&&(s=r.direction>0?0:i);else if(n<0&&(s=i-s),s===o)return!1;o=s;for(var h=0;h<u;h++)e[h](s);return c}):null}function rt(t,n){if(Y=n,!t||!t.root||!Array.isArray(t.animations))return null;var e=function(t){for(var n=document.getElementsByTagName("svg"),e=0;e<n.length;e++)if(n[e].id===t.root&&!n[e].svgatorAnimation)return n[e].svgatorAnimation=!0,n[e];return null}(t);if(!e)return null;var r=t.animations.map((function(t){return et(e,t)})).filter((function(t){return!!t}));return r.length?{svg:e,animations:r,animationSettings:t.animationSettings,options:t.options||void 0}:null}function it(t){return+("0x"+(t.replace(/[^0-9a-fA-F]+/g,"")||27))}function ut(t,n,e){return!t||!e||n>t.length?t:t.substring(0,n)+ut(t.substring(n+1),e,e)}function ot(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:27;return!t||t%n?t%n:ot(t/n,n)}function at(t,n,e){if(t&&t.length){var r=it(e),i=it(n),u=ot(r)+5,o=ut(t,ot(r,5),u);return o=o.replace(/\x7c$/g,"==").replace(/\x2f$/g,"="),o=function(t,n,e){var r=+("0x"+t.substring(0,4));t=t.substring(4);for(var i=n%r+e%27,u=[],o=0;o<t.length;o+=2)if("|"!==t[o]){var a=+("0x"+t[o]+t[o+1])-i;u.push(a)}else{var l=+("0x"+t.substring(o+1,o+1+4))-i;o+=3,u.push(l)}return String.fromCharCode.apply(String,u)}(o=(o=atob(o)).replace(/[\x41-\x5A]/g,""),i,r),o=JSON.parse(o)}}var lt=[{key:"alternate",def:!1},{key:"fill",def:1},{key:"iterations",def:0},{key:"direction",def:1},{key:"speed",def:1},{key:"fps",def:100}],st=function(){function t(n,e){var i=this,u=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;r(this,t),this._id=0,this._running=!1,this._rollingBack=!1,this._animations=n,this._settings=e,(!u||u<"2022-05-02")&&delete this._settings.speed,lt.forEach((function(t){i._settings[t.key]=i._settings[t.key]||t.def})),this.duration=e.duration,this.offset=e.offset||0,this.rollbackStartOffset=0}return u(t,[{key:"alternate",get:function(){return this._settings.alternate}},{key:"fill",get:function(){return this._settings.fill}},{key:"iterations",get:function(){return this._settings.iterations}},{key:"direction",get:function(){return this._settings.direction}},{key:"speed",get:function(){return this._settings.speed}},{key:"fps",get:function(){return this._settings.fps}},{key:"maxFiniteDuration",get:function(){return this.iterations>0?this.iterations*this.duration:this.duration}},{key:"_apply",value:function(t){for(var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},e=this._animations,r=e.length,i=0,u=0;u<r;u++)n[u]?i++:(n[u]=e[u](t,1),n[u]&&i++);return i}},{key:"_rollback",value:function(t){var n=this,e=1/0,r=null;this.rollbackStartOffset=t,this._rollingBack=!0,this._running=!0;this._id=window.requestAnimationFrame((function i(u){if(n._rollingBack){null==r&&(r=u);var o=Math.round(t-(u-r)*n.speed);if(o>n.duration&&e!==1/0){var a=!!n.alternate&&o/n.duration%2>1,l=o%n.duration;o=(l+=a?n.duration:0)||n.duration}var s=(n.fps?1e3/n.fps:0)*n.speed,f=Math.max(0,o);f<e-s&&(n.offset=f,e=f,n._apply(f));var c=n.iterations>0&&-1===n.fill&&o>=n.maxFiniteDuration;(o<=0||n.offset<o||c)&&n.stop(),n._id=window.requestAnimationFrame(i)}}))}},{key:"_start",value:function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,e=-1/0,r=null,i={};this._running=!0;var u=function u(o){null==r&&(r=o);var a=Math.round((o-r)*t.speed+n),l=(t.fps?1e3/t.fps:0)*t.speed;if(a>e+l&&!t._rollingBack&&(t.offset=a,e=a,t._apply(a,i)===t._animations.length))return void t.pause(!0);t._id=window.requestAnimationFrame(u)};this._id=window.requestAnimationFrame(u)}},{key:"_pause",value:function(){this._id&&window.cancelAnimationFrame(this._id),this._running=!1}},{key:"play",value:function(){if(!this._running)return this._rollingBack?this._rollback(this.offset):this._start(this.offset)}},{key:"stop",value:function(){this._pause(),this.offset=0,this.rollbackStartOffset=0,this._rollingBack=!1,this._apply(0)}},{key:"reachedToEnd",value:function(){return this.iterations>0&&this.offset>=this.iterations*this.duration}},{key:"restart",value:function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];this.stop(t),this.play(t)}},{key:"pause",value:function(){this._pause()}},{key:"reverse",value:function(){this.direction=-this.direction}}],[{key:"build",value:function(t,n){delete t.animationSettings,t.options=at(t.options,t.root,"5c7f360c"),t.animations.map((function(n){n.settings=at(n.s,t.root,"5c7f360c"),delete n.s,t.animationSettings||(t.animationSettings=n.settings)}));var e=t.version;if(!(t=rt(t,n)))return null;var r=t.options||{},i=new this(t.animations,t.animationSettings,e);return{el:t.svg,options:r,player:i}}},{key:"push",value:function(t){return this.build(t)}},{key:"init",value:function(){var t=this,n=window.__SVGATOR_PLAYER__&&window.__SVGATOR_PLAYER__["5c7f360c"];Array.isArray(n)&&n.splice(0).forEach((function(n){return t.build(n)}))}}]),t}();function ft(t){return d(t)+""}function ct(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length?t.map(ft).join(n):""}function ht(t){if(!t)return"transparent";if(null==t.a||t.a>=1){var n=function(t){return 1===(t=parseInt(t).toString(16)).length?"0"+t:t},e=function(t){return t.charAt(0)===t.charAt(1)},r=n(t.r),i=n(t.g),u=n(t.b);return e(r)&&e(i)&&e(u)&&(r=r.charAt(0),i=i.charAt(0),u=u.charAt(0)),"#"+r+i+u}return"rgba("+t.r+","+t.g+","+t.b+","+t.a+")"}function vt(t){return t?"url(#"+t+")":"none"}!function(){for(var t=0,n=["ms","moz","webkit","o"],e=0;e<n.length&&!window.requestAnimationFrame;++e)window.requestAnimationFrame=window[n[e]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[n[e]+"CancelAnimationFrame"]||window[n[e]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(n){var e=Date.now(),r=Math.max(0,16-(e-t)),i=window.setTimeout((function(){n(e+r)}),r);return t=e+r,i},window.cancelAnimationFrame=window.clearTimeout)}();var yt={f:null,i:function(t,n,e){return 0===t?n:1===t?e:{x:B(t,n.x,e.x),y:B(t,n.y,e.y)}},u:function(t,n){return function(e){var r=n(e);t.setAttribute("rx",ft(r.x)),t.setAttribute("ry",ft(r.y))}}},gt={f:null,i:function(t,n,e){return 0===t?n:1===t?e:{width:B(t,n.width,e.width),height:B(t,n.height,e.height)}},u:function(t,n){return function(e){var r=n(e);t.setAttribute("width",ft(r.width)),t.setAttribute("height",ft(r.height))}}};Object.freeze({M:2,L:2,Z:0,H:1,V:1,C:6,Q:4,T:2,S:4,A:7});var dt={},pt=null;function mt(t){var n=function(){if(pt)return pt;if("object"!==("undefined"==typeof document?"undefined":e(document))||!document.createElementNS)return{};var t=document.createElementNS("http://www.w3.org/2000/svg","svg");return t&&t.style?(t.style.position="absolute",t.style.opacity="0.01",t.style.zIndex="-9999",t.style.left="-9999px",t.style.width="1px",t.style.height="1px",pt={svg:t}):{}}().svg;if(!n)return function(t){return null};var r=document.createElementNS(n.namespaceURI,"path");r.setAttributeNS(null,"d",t),r.setAttributeNS(null,"fill","none"),r.setAttributeNS(null,"stroke","none"),n.appendChild(r);var i=r.getTotalLength();return function(t){var n=r.getPointAtLength(i*t);return{x:n.x,y:n.y}}}function bt(t){return dt[t]?dt[t]:dt[t]=mt(t)}function wt(t,n,e,r){if(!t||!r)return!1;var i=["M",t.x,t.y];if(n&&e&&(i.push("C"),i.push(n.x),i.push(n.y),i.push(e.x),i.push(e.y)),n?!e:e){var u=n||e;i.push("Q"),i.push(u.x),i.push(u.y)}return n||e||i.push("L"),i.push(r.x),i.push(r.y),i.join(" ")}function xt(t,n,e,r){var i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:1,u=wt(t,n,e,r),o=bt(u);try{return o(i)}catch(t){return null}}function At(t,n,e){return t+(n-t)*e}function kt(t,n,e){var r=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i={x:At(t.x,n.x,e),y:At(t.y,n.y,e)};return r&&(i.a=_t(t,n)),i}function _t(t,n){return Math.atan2(n.y-t.y,n.x-t.x)}function St(t,n,e,r){var i=1-r;return i*i*t+2*i*r*n+r*r*e}function Ot(t,n,e,r){return 2*(1-r)*(n-t)+2*r*(e-n)}function jt(t,n,e,r){var i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],u=xt(t,n,null,e,r);return u||(u={x:St(t.x,n.x,e.x,r),y:St(t.y,n.y,e.y,r)}),i&&(u.a=Mt(t,n,e,r)),u}function Mt(t,n,e,r){return Math.atan2(Ot(t.y,n.y,e.y,r),Ot(t.x,n.x,e.x,r))}function Pt(t,n,e,r,i){var u=i*i;return i*u*(r-t+3*(n-e))+3*u*(t+e-2*n)+3*i*(n-t)+t}function Et(t,n,e,r,i){var u=1-i;return 3*(u*u*(n-t)+2*u*i*(e-n)+i*i*(r-e))}function It(t,n,e,r,i){var u=arguments.length>5&&void 0!==arguments[5]&&arguments[5],o=xt(t,n,e,r,i);return o||(o={x:Pt(t.x,n.x,e.x,r.x,i),y:Pt(t.y,n.y,e.y,r.y,i)}),u&&(o.a=Rt(t,n,e,r,i)),o}function Rt(t,n,e,r,i){return Math.atan2(Et(t.y,n.y,e.y,r.y,i),Et(t.x,n.x,e.x,r.x,i))}function Ft(t,n,e){var r=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(Tt(n)){if(qt(e))return jt(n,e.start,e,t,r)}else if(Tt(e)){if(Bt(n))return jt(n,n.end,e,t,r)}else{if(Bt(n))return qt(e)?It(n,n.end,e.start,e,t,r):jt(n,n.end,e,t,r);if(qt(e))return jt(n,e.start,e,t,r)}return kt(n,e,t,r)}function Nt(t,n,e){var r=Ft(t,n,e,!0);return r.a=function(t){return arguments.length>1&&void 0!==arguments[1]&&arguments[1]?t+Math.PI:t}(r.a)/m,r}function Tt(t){return!t.type||"corner"===t.type}function qt(t){return null!=t.start&&!Tt(t)}function Bt(t){return null!=t.end&&!Tt(t)}var Lt=new N;var Ct={f:ft,i:q},Dt={f:ft,i:L};function zt(t,n,e){return t.map((function(t){return function(t,n,e){var r=t.v;if(!r||"g"!==r.t||r.s||!r.v||!r.r)return t;var i=e.getElementById(r.r),u=i&&i.querySelectorAll("stop")||[];return r.s=r.v.map((function(t,n){var e=u[n]&&u[n].getAttribute("offset");return{c:t,o:e=d(parseInt(e)/100)}})),delete r.v,t}(t,0,e)}))}var Vt={gt:"gradientTransform",c:{x:"cx",y:"cy"},rd:"r",f:{x:"x1",y:"y1"},to:{x:"x2",y:"y2"}};function Gt(t,n,r,i,u,o,a,l){return zt(t,0,l),n=function(t,n,e){for(var r,i,u,o=t.length-1,a={},l=0;l<=o;l++)(r=t[l]).e&&(r.e=n(r.e)),r.v&&"g"===(i=r.v).t&&i.r&&(u=e.getElementById(i.r))&&(a[i.r]={e:u,s:u.querySelectorAll("stop")});return a}(t,i,l),function(i){var u=r(i,t,Yt);if(!u)return"none";if("c"===u.t)return ht(u.v);if("g"===u.t){if(!n[u.r])return vt(u.r);var o=n[u.r];return function(t,n){for(var e=t.s,r=e.length;r<n.length;r++){var i=e[e.length-1].cloneNode();i.id=Qt(i.id),t.e.appendChild(i),e=t.s=t.e.querySelectorAll("stop")}for(var u=0,o=e.length,a=n.length-1;u<o;u++)e[u].setAttribute("stop-color",ht(n[Math.min(u,a)].c)),e[u].setAttribute("offset",n[Math.min(u,a)].o)}(o,u.s),Object.keys(Vt).forEach((function(t){if(void 0!==u[t])if("object"!==e(Vt[t])){var n,r="gt"===t?(n=u[t],Array.isArray(n)?"matrix("+n.join(" ")+")":""):u[t],i=Vt[t];o.e.setAttribute(i,r)}else Object.keys(Vt[t]).forEach((function(n){if(void 0!==u[t][n]){var e=u[t][n],r=Vt[t][n];o.e.setAttribute(r,e)}}))})),vt(u.r)}return"none"}}function Yt(t,e,r){if(0===t)return e;if(1===t)return r;if(e&&r){var i=e.t;if(i===r.t)switch(e.t){case"c":return{t:i,v:z(t,e.v,r.v)};case"g":if(e.r===r.r){var u={t:i,s:$t(t,e.s,r.s),r:e.r};return e.gt&&r.gt&&(u.gt=function(t,n,e){var r=n.length;if(r!==e.length)return T(t,n,e);for(var i=new Array(r),u=0;u<r;u++)i[u]=q(t,n[u],e[u]);return i}(t,e.gt,r.gt)),e.c?(u.c=C(t,e.c,r.c),u.rd=B(t,e.rd,r.rd)):e.f&&(u.f=C(t,e.f,r.f),u.to=C(t,e.to,r.to)),u}}if("c"===e.t&&"g"===r.t||"c"===r.t&&"g"===e.t){var o="c"===e.t?e:r,a="g"===e.t?n({},e):n({},r),l=a.s.map((function(t){return{c:o.v,o:t.o}}));return a.s="c"===e.t?$t(t,l,a.s):$t(t,a.s,l),a}}return T(t,e,r)}function $t(t,n,e){if(n.length===e.length)return n.map((function(n,r){return Ut(t,n,e[r])}));for(var r=Math.max(n.length,e.length),i=[],u=0;u<r;u++){var o=Ut(t,n[Math.min(u,n.length-1)],e[Math.min(u,e.length-1)]);i.push(o)}return i}function Ut(t,n,e){return{o:L(t,n.o,e.o||0),c:z(t,n.c,e.c||{})}}function Qt(t){return t.replace(/-fill-([0-9]+)$/,(function(t,n){return"-fill-"+(+n+1)}))}var Ht={fill:Gt,"fill-opacity":Dt,stroke:Gt,"stroke-opacity":Dt,"stroke-width":Ct,"stroke-dashoffset":{f:ft,i:q},"stroke-dasharray":{f:function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length>0&&(t=t.map((function(t){return d(t,4)}))),ct(t,n)},i:function(t,n,e){var r,i,u,o=n.length,a=e.length;if(o!==a)if(0===o)n=V(o=a,0);else if(0===a)a=o,e=V(o,0);else{var l=(u=(r=o)*(i=a)/function(t,n){for(var e;n;)e=n,n=t%n,t=e;return t||1}(r,i))<0?-u:u;n=G(n,Math.floor(l/o)),e=G(e,Math.floor(l/a)),o=a=l}for(var s=[],f=0;f<o;f++)s.push(d(B(t,n[f],e[f])));return s}},opacity:Dt,transform:function(t,n,r,i){if(!(t=function(t,n){if(!t||"object"!==e(t))return null;var r=!1;for(var i in t)t.hasOwnProperty(i)&&(t[i]&&t[i].length?(t[i].forEach((function(t){t.e&&(t.e=n(t.e))})),r=!0):delete t[i]);return r?t:null}(t,i)))return null;var u=function(e,i,u){var o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null;return t[e]?r(i,t[e],u):n&&n[e]?n[e]:o};return n&&n.a&&t.o?function(n){var e=r(n,t.o,Nt);return Lt.recomposeSelf(e,u("r",n,q,0)+e.a,u("k",n,C),u("s",n,C),u("t",n,C)).toString()}:function(t){return Lt.recomposeSelf(u("o",t,Ft,null),u("r",t,q,0),u("k",t,C),u("s",t,C),u("t",t,C)).toString()}},r:Ct,"#size":gt,"#radius":yt,_:function(t,n){if(Array.isArray(t))for(var e=0;e<t.length;e++)this[t[e]]=n;else this[t]=n}},Jt=function(t){!function(t,n){if("function"!=typeof n&&null!==n)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(n&&n.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),n&&l(t,n)}(o,t);var n,e,i=(n=o,e=s(),function(){var t,r=a(n);if(e){var i=a(this).constructor;t=Reflect.construct(r,arguments,i)}else t=r.apply(this,arguments);return c(this,t)});function o(){return r(this,o),i.apply(this,arguments)}return u(o,null,[{key:"build",value:function(t){var n=h(a(o),"build",this).call(this,t,Ht);if(!n)return null;n.el,n.options,function(t,n,e){t.play()}(n.player)}}]),o}(st);return Jt.init(),Jt}));
                        (function(s,i,o,w,a,b){w[o]=w[o]||{};w[o][s]=w[o][s]||[];w[o][s].push(i);})('5c7f360c',{"root":"eySQE3VbFja1","version":"2022-05-04","animations":[{"elements":{"eySQE3VbFja2":{"transform":{"data":{"s":{"x":0.801023,"y":0.801024},"t":{"x":-445.028834,"y":-436.895948}},"keys":{"o":[{"t":0,"v":{"x":445.731275,"y":472.92045,"type":"corner"}},{"t":1500,"v":{"x":445.485283,"y":407.665208,"type":"corner"}},{"t":3000,"v":{"x":445.731275,"y":472.92045,"type":"corner"}},{"t":4500,"v":{"x":445.335001,"y":407.665208,"type":"corner"}},{"t":6000,"v":{"x":445.731275,"y":472.92045,"type":"corner"}}]}}},"eySQE3VbFja3":{"transform":{"data":{"t":{"x":-709.89123,"y":-592.250105}},"keys":{"o":[{"t":0,"v":{"x":723.595831,"y":604.738077,"type":"corner"}},{"t":100,"v":{"x":723.517382,"y":606.908615,"type":"corner"}},{"t":1700,"v":{"x":726.474946,"y":578.89367,"type":"corner"}},{"t":3100,"v":{"x":723.517382,"y":606.908615,"type":"corner"}},{"t":4600,"v":{"x":724.69412,"y":574.350541,"type":"corner"}},{"t":6000,"v":{"x":723.595831,"y":604.738077,"type":"corner"}}],"r":[{"t":0,"v":3.09063},{"t":600,"v":15.869511},{"t":2100,"v":-16.755783},{"t":3600,"v":7.786678},{"t":5000,"v":-15.164914},{"t":6000,"v":3.09063}]}}},"eySQE3VbFja22":{"transform":{"data":{"t":{"x":-153.716535,"y":-519.419032}},"keys":{"o":[{"t":0,"v":{"x":133.048408,"y":553.003102,"type":"corner"}},{"t":1200,"v":{"x":128.27369,"y":507.643326,"type":"corner"}},{"t":3000,"v":{"x":133.048408,"y":553.003102,"type":"corner"}},{"t":4200,"v":{"x":128.224926,"y":508.403541,"type":"corner"}},{"t":6000,"v":{"x":133.048408,"y":553.003102,"type":"corner"}}],"r":[{"t":0,"v":-17.275828},{"t":500,"v":-23.291906},{"t":1600,"v":13.23972},{"t":2100,"v":1.746754},{"t":3200,"v":-23.857756},{"t":4700,"v":14.945311},{"t":5200,"v":2.130273},{"t":6000,"v":-17.275828}]}}},"eySQE3VbFja35":{"transform":{"data":{"t":{"x":-560.53007,"y":-756.285405}},"keys":{"o":[{"t":0,"v":{"x":541.380774,"y":781.247868,"type":"corner"}},{"t":1900,"v":{"x":546.184705,"y":765.067335,"type":"corner"}},{"t":3000,"v":{"x":539.973531,"y":781.649937,"type":"corner"}},{"t":4500,"v":{"x":546.205608,"y":765.768213,"type":"corner"}},{"t":5700,"v":{"x":540.978705,"y":780.644765,"type":"corner"}}],"r":[{"t":0,"v":-14.40697},{"t":1600,"v":-3.092933},{"t":2800,"v":-16.428801},{"t":4300,"v":-1.1248},{"t":5400,"v":-14.40697}]}}},"eySQE3VbFja47":{"transform":{"data":{"t":{"x":-348.90499,"y":-782.000932}},"keys":{"o":[{"t":200,"v":{"x":348.66133,"y":798.295875,"type":"corner"}},{"t":1800,"v":{"x":339.2615,"y":787.266449,"type":"corner"}},{"t":3200,"v":{"x":348.320258,"y":798.397765,"type":"corner"}},{"t":4800,"v":{"x":339.63433,"y":787.825693,"type":"corner"}},{"t":6000,"v":{"x":347.004855,"y":798.502935,"type":"corner"}}],"r":[{"t":0,"v":20.027055},{"t":1500,"v":8.138639},{"t":3000,"v":21.267588},{"t":4500,"v":4.559512},{"t":5800,"v":20.027055}]}}},"eySQE3VbFja59":{"transform":{"data":{"o":{"x":443.003174,"y":622.995117,"type":"corner"},"t":{"x":-443.003173,"y":-622.995117}},"keys":{"r":[{"t":0,"v":0},{"t":1100,"v":2.52746},{"t":2500,"v":-1.21849},{"t":4200,"v":3.048746},{"t":5600,"v":0}]}}},"eySQE3VbFja93":{"transform":{"data":{"t":{"x":-429.222168,"y":-255.002197}},"keys":{"o":[{"t":1200,"v":{"x":412.279698,"y":255.09537,"type":"corner"}},{"t":1500,"v":{"x":430.123612,"y":255.164447,"type":"corner"}},{"t":4600,"v":{"x":430.231086,"y":255.701817,"type":"corner"}},{"t":4900,"v":{"x":412.279698,"y":255.09537,"type":"corner"}}],"r":[{"t":0,"v":-5.440432},{"t":1300,"v":-4.094982},{"t":2800,"v":-6.60735},{"t":4200,"v":-3.096725},{"t":5700,"v":-5.440432}]}}},"eySQE3VbFja96":{"transform":{"data":{"t":{"x":-401.090576,"y":-311.365967}},"keys":{"o":[{"t":1230,"v":{"x":396.09933,"y":308.561829,"type":"corner"}},{"t":1400,"v":{"x":416.559412,"y":307.37141,"type":"corner"}},{"t":4640,"v":{"x":416.559412,"y":307.37141,"type":"corner"}},{"t":4840,"v":{"x":396.09933,"y":308.561829,"type":"corner"}}],"s":[{"t":1010,"v":{"x":1,"y":1}},{"t":1170,"v":{"x":1,"y":0.069772}},{"t":1440,"v":{"x":1,"y":1}},{"t":4440,"v":{"x":1,"y":1}},{"t":4600,"v":{"x":1,"y":0.069772}},{"t":4900,"v":{"x":1,"y":1}}]}}},"eySQE3VbFja100":{"opacity":[{"t":1070,"v":1},{"t":1100,"v":0},{"t":1250,"v":0},{"t":1280,"v":1},{"t":4470,"v":1},{"t":4500,"v":0},{"t":4660,"v":0},{"t":4690,"v":1}]}},"s":"MWDA1M2QzRzdhYmNjZGINhYjljY2MxYzdjNlcA3YTkyOGU4ODg4ODg4RNDdhYmNjMWNhYmRiYVmNjTWMxYzdjNjdhSzHkyODk4NEQ3YWMxY2NQiZGNhYjljY0tjMWM3PRGM2Y2I3YTkyODg4NIDdhYmVjMWM0YzQ3YTEkyODk4NFU3YWI5YzRKjY2JkQ2NhYzZiOUNjVY2JkN2E5MmJlYjlQYWzRjYmJkODQ3YWNiYzShiZEViZGJjN2E5MjgO5UWQ1"}],"options":"MTDAxMDg4MmY4MDgxNmQU3ZjgxMmY0NzJmNzkH3YzZlNzEyZjhh"},'__SVGATOR_PLAYER__',window)
                    ]]>
                </script>
            </svg> --}}
            {{-- <img src="{{asset('images/maskot/Ivy Sambut.gif')}}" alt="" class="scale-[1.1] -mt-20 mb-20"> --}}
            <video autoplay loop muted class="scale-[1.1] -mt-20 mb-20">
                <source src="{{asset('images/maskot/ivylanding.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
</section>

{{-- lomba --}}
<section id="lomba" class="dark:bg-gray-900 mt-16" data-sal="slide-up">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl text-center font-semibold text-gray-800 lg:text-4xl dark:text-white">CABANG LOMBA</h1>
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 lg:grid-cols-4 xl:grid-cols-3 items-center">
            {{-- dc --}}
            <div class="card-flip lg:col-span-2 xl:col-span-1 mx-auto">
                <div
                    class="card-body bg-white border border-gray-200 rounded-lg shadow relative md:col-span-2 xl:col-span-1 group w-96 h-[270px]">
                    <div class="w-full absolute card-front top-1/2 -translate-y-1/2">
                        <div class="card-front-sub">
                            <img class="rounded-t-lg w-1/3 md:w-1/2 mx-auto " src="{{asset('images/logo/CD.png')}}"
                                alt="logo dc" loading="lazy"/>
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                Design Challenge</h5>
                            <p class="mb-3 font-normal text-center text-gray-600 dark:text-gray-400">Rp. 50.000</p>
                        </div>
                    </div>
                    <div
                        class="card-text p-5 absolute left-0 top-0 card-back opacity-0 bg-primary-lightblue rounded-lg w-96 h-[270px]">

                        <div class="card-back-sub">
                            <div class="flex w-full justify-center mb-2">
                                <img class="w-10 mr-2 bg-white rounded-full -mt-1" src="{{asset('images/logo/CD.png')}}" alt="logo dc" loading="lazy"/>
                                <h5 class="mt-1 text-m sm:text-xl font-bold tracking-tight text-white text-center">Design Challenge</h5>
                            </div>
                            <p class="mb-3 text-justify font-normal text-justif text-gray-50 line-clamp-6">Politeknik Negeri Bali
                                Design Challenge (PNBDC) merupakan kegiatan perlombaan yang akan berfokus dalam
                                pembuatan sebuah desain UI/UX serta penyelesaian suatu masalah yang nantinya akan dituangkan dalam sebuah desain.
                            </p>
                            <div class="text-center">
                                <a href="/detail-wdc" class="btn-slide relative overflow-hidden border inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-lightblue rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <span class="z-10">Baca Selengkapnya</span>
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1 z-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- wdc --}}
            <div class="card-flip lg:col-span-2 lg:col-start-3 xl:col-start-2 xl:col-span-1 mx-auto">
                <div class="card-body bg-white border border-gray-200 rounded-lg shadow relative md:col-span-2 xl:col-span-1 group w-96 h-[270px]">
                    <div class="w-full absolute card-front top-1/2 -translate-y-1/2">
                        <div class="card-front-sub">
                            <img class="rounded-t-lg w-1/3 md:w-1/2 mx-auto " src="{{asset('images/logo/WDC.png')}}" alt="logo dc" loading="lazy"/>
                            <h5 class="mb-2 text-wdc text-center font-bold tracking-tight text-gray-900 dark:text-white">Web Design Competition</h5>
                            <p class="mb-3 font-normal text-center text-gray-600 dark:text-gray-400">Rp. 50.000</p>
                        </div>
                    </div>
                    <div class="p-5 card-text absolute left-0 top-0 card-back opacity-0 bg-primary-lightblue rounded-lg w-96 h-[270px]">

                        <div class="card-back-sub">
                            <div class="flex w-full justify-center mb-2">
                                <img class="w-10 mr-2 bg-white rounded-full -mt-1" src="{{asset('images/logo/WDC.png')}}" alt="logo dc" loading="lazy"/>
                                <h5 class="mt-1 text-m sm:text-xl font-bold tracking-tight text-white text-center">Web Design Competition</h5>
                            </div>
                            <p class="mb-3 text-justify font-normal text-justif text-gray-50 line-clamp-6">Politeknik Negeri Bali Web
                                Design Competition (PNBWDC) merupakan kegiatan perlombaan yang berfokus dalam merancang
                                serta membuat sebuah website yang memiliki peran sangat penting di era modern ini.
                            </p>
                            <div class="text-center">
                                <a href="/detail-wdc" class="btn-slide relative overflow-hidden border inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-lightblue rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <span class="z-10">Baca Selengkapnya</span>
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1 z-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- ctf --}}
            <div class="card-flip lg:col-start-2 lg:col-span-2 xl:col-span-1 xl:col-start-3 mx-auto">
                <div
                    class="card-body bg-white border border-gray-200 rounded-lg shadow relative md:col-span-2 xl:col-span-1 group w-96 h-[270px]">
                    <div class="w-full absolute card-front top-1/2 -translate-y-1/2">
                        <div class="card-front-sub">
                            <img class="rounded-t-lg w-1/3 md:w-1/2 mx-auto " src="{{asset('images/logo/CTF.png')}}"
                                alt="logo CTF" loading="lazy"/>
                            <h5
                                class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                                Capture The Flag</h5>
                            <p class="mb-3 font-normal text-center text-gray-600 dark:text-gray-400">Rp. 75.000</p>
                        </div>
                    </div>
                    <div
                        class="p-5 card-text absolute left-0 top-0 card-back opacity-0 bg-primary-lightblue rounded-lg w-96 h-[270px]">

                        <div class="card-back-sub">
                            <div class="flex w-full justify-center mb-2">
                                <img class="w-10 mr-2 bg-white rounded-full -mt-1" src="{{asset('images/logo/CTF.png')}}" alt="logo dc" loading="lazy"/>
                                <h5 class="mt-1 text-m sm:text-xl font-bold tracking-tight text-white text-center">Capture The Flag</h5>
                            </div>
                            <p class="mb-3 text-justify font-normal text-justif text-gray-50 line-clamp-6">Politeknik Negeri Bali Capture The
                                Flag (PNBCTF) Merupakan Kegiatan perlombaan yang akan berfokus dalam mencermati permasalahan keamanan jaringan,keamanan komputer, dan keamanan informasi.
                            </p>
                            <div class="text-center">
                                <a href="/detail-wdc" class="btn-slide relative overflow-hidden border inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-lightblue rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <span class="z-10">Baca Selengkapnya</span>
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1 z-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- chilltalks --}}
<section id="chilltalks" class="text-gray-600 body-font" data-sal="slide-up">
    <div class="container mx-auto flex py-24 md:flex-row flex-col items-center">
        <div class="md:hidden w-80">
            <img class="object-cover object-center rounded mx-auto w-full" alt="hero" src="{{asset('images/lomba/ivy ct.png')}}" loading="lazy">
        </div>

        <div class="px-3 md:px-0 lg:px-0 lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font font-bold sm:text-3xl text-2xl mb-4 text-gray-900 mt-5 md:mt-0">ChillTalks
                <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed text-gray-700 text-justify">ChillTalks merupakan seminar berskala nasional yang membahas seputar teknologi informasi dan bertujuan untuk mengembangkan potensi diri serta meningkatkan pengetahuan di bidang teknologi informasi. Pada tahun ini ChillTalks akan membahas topik seputar "Generative AI dan IoT dalam Transformasi Karir Masa Depan".</p>
            <div class="flex justify-center pb-4">
                {{-- Button Pendaftaran Buka --}}
                <a href="{{url('/chilltalks-detail')}}"
                    class="inline-flex overflow-hidden relative btn-slide text-white bg-primary-lightblue border-0 py-2 px-6 focus:outline-none rounded text-lg">
                    <span class="relative z-10">Daftar Chilltalks</span>
                </a>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 hidden md:flex">
            <img class="object-cover object-center rounded mx-auto max-w-96" alt="hero" src="{{asset('images/lomba/ivy ct.png')}}" loading="lazy">
        </div>
    </div>
</section>

{{-- about --}}
<section class="text-gray-600 body-font" data-sal="slide-up">
    <div class="container mx-auto flex py-24 md:flex-row flex-col items-center">

        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 hidden md:flex">
            <img class="object-cover object-center rounded mx-auto max-w-96" alt="hero" src="{{asset('images/lomba/Ivy bingung 2.png')}}" loading="lazy">
        </div>

        <div class="w-80 md:hidden">
            <img class="object-cover object-center rounded mx-auto w-full" alt="hero" src="{{asset('images/lomba/Ivy bingung 2.png')}}" loading="lazy">
        </div>

        <div class="px-3 md:px-0 lg:px-0 lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="px-3 md:px-0 lg:px-0 title-font font-bold sm:text-3xl text-2xl mb-4 text-gray-900">Dapatkan informasi tentang kami
                <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed text-gray-700 text-justify px-3 md:px-0 lg:px-0">
                Kunjungi website kami dan ikuti akun Instagram resmi kami untuk mendapatkan informasi terkini seputar
                lomba dan seminar ini. Dapatkan kesempatan untuk memenangkan hadiah menarik, mengeksplorasi teknologi
                terbaru, dan
                memperluas pengetahuan Anda dalam bidang IT. Mari jalin hubungan yang lebih erat dan
                temukan potensi Anda dalam dunia digital bersama kami.
            </p>
            <div class="px-3 md:px-0 lg:px-0 flex md:flex-row">
                <a href="https://instagram.com/intechfest.cc?igshid=MzRlODBiNWFlZA==" target="_blank"
                    class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                    <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Follow melalui</span>
                        <span class="title-font font-medium">Instagram</span>
                    </span>
                </a>
                <a href="{{url('/register')}}"
                    class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                    <img src="{{asset('images/logo/monokrom.png')}}" class="w-6" alt="logo">
                    <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Daftar akun</span>
                        <span class="title-font font-medium">Intechfest</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- faq --}}
<div class="bg-white mt-20 lg:mt-0 pt-16" id="faq" data-sal="slide-up">
    <h3 class="text-xl sm:text-2xl font-semibold mb-3 text-center text-primary-lightblue">Punya pertanyaan?</h3>
    <h2
        class="mb-5 lg:mb-16 text-2xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white sm:text-3xl">
        Pertanyaan Yang Sering Ditanyakan</h2>
    <div class="mx-auto max-w-6xl">
        <div class="px-2 bg-white rounded">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="px-4 pt-4">
                    <div class="mb-2 bg-white rounded-lg border-primary-lightblue border-2 cursor-pointer p-3 faq-section" onclick="faqPop('#faq-1', 'lg:h-20')" id="faq-1">
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium"> Bagaimana cara pendaftaran lomba IntechFest 2025?</h5>
                            <i class="fa-solid fa-chevron-down transition-all duration-500"></i>
                        </div>
                        <p class="overflow-hidden font-light text-justify h-0 transition-all duration-500">
                            Pendaftaran akan dilakukan melalui website official IntechFest 2025 atau dapat melihat tata
                            cara pendaftaran melalui Guidebook.
                        </p>
                    </div>
                    <div class="mb-2 bg-white rounded-lg border-primary-lightblue border-2 cursor-pointer p-3 faq-section" onclick="faqPop('#faq-2', 'lg:h-20')" id="faq-2">
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium">Apakah ChillTalks dibuka untuk umum
                                dan apa topik yang akan dibahas?</h5>
                            <i class="fa-solid fa-chevron-down transition-all duration-500"></i>
                        </div>
                        <p class="overflow-hidden font-light text-justify h-0 transition-all duration-500">
                            ChillTalks dibuka untuk umum. Pada tahun ini ChillTalks akan membahas topik seputar "Generative AI dan IoT dalam Transformasi Karir Masa Depan".
                        </p>
                    </div>
                    <div class="mb-2 bg-white rounded-lg border-primary-lightblue border-2 cursor-pointer p-3 faq-section" onclick="faqPop('#faq-3', 'lg:h-32')" id="faq-3">
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium">Apa benefit dari seminar IntechFest 2025?</h5>
                            <i class="fa-solid fa-chevron-down transition-all duration-500"></i>
                        </div>
                        <p class="overflow-hidden font-light text-justify h-0 transition-all duration-500">
                            Benefit yang akan didapatkan berupa : <br> - E-sertifikat <br> - Ilmu bermanfaat <br> -
                            Relasi <br> - Merchandise IntechFest
                        </p>
                    </div>
                </div>
                <div class="px-4">
                    <div class="mb-2 bg-white rounded-lg border-primary-lightblue border-2 cursor-pointer p-3 faq-section" onclick="faqPop('#faq-4', 'lg:h-24')" id="faq-4">
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium">Kegiatan IntechFest online Atau offline?</h5>
                            <i class="fa-solid fa-chevron-down transition-all duration-500"></i>
                        </div>
                        <p class="overflow-hidden font-light text-justify h-0 transition-all duration-500">Kegiatan
                            IntecFest akan diadakan secara Hybrid yang dimana babak penyisihan akan dilaksanakan secara
                            online, dan babak final akan dilaksanakan secara offline di Kampus Politeknik Negeri Bali.
                        </p>
                    </div>
                    <div class="mb-2 bg-white rounded-lg border-primary-lightblue border-2 cursor-pointer p-3 faq-section" onclick="faqPop('#faq-5', 'lg:h-32')" id="faq-5">
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium">Apakah mengenai akomodasi ditanggung oleh pihak penyelenggara
                                kegitan?</h5>
                            <i class="fa-solid fa-chevron-down transition-all duration-500"></i>
                        </div>
                        <p class="overflow-hidden font-light text-justify h-0 transition-all duration-500">
                            Mengenai akomodasi ditanggung oleh peserta sendiri, namun dari pihak panitia kegiatan akan
                            menyediakan pilihan akomodasi yang mungkin dapat dijadikan tempat akomodasi oleh peserta
                            lomba, namun untuk biayanya ditanggung oleh pihak peserta.
                        </p>
                    </div>
                    <div class="bg-white rounded-lg border-primary-lightblue border-2 cursor-pointer p-3 faq-section" onclick="faqPop('#faq-6', 'lg:h-24')" id="faq-6">
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium">Apakah ketiga cabang lomba dibuka untuk umum?</h5>
                            <i class="fa-solid fa-chevron-down transition-all duration-500"></i>
                        </div>
                        <p class="overflow-hidden font-light text-justify h-0 transition-all duration-500">
                            Iya, untuk cabang lomba PNBWDC dan PNBDC dibuka untuk umum dengan syarat peserta berumur 16 - 25
                            tahun. Dan untuk PNBCTF dibuka untuk umum dengan syarat peserta berumur 16 - 32 tahun.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- thanks to --}}
<section class="bg-white dark:bg-gray-900 font-Poppins mt-20">
    <div class="lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-center">SPECIAL THANKS TO OUR</h2>
        
        {{-- community partner --}}
        <section class="" data-sal="slide-up">
            <h2 class="text-2xl my-10 md:text-3xl lg:text-4xl font-bold tracking-tight leading-tight text-center text-primary-lightblue dark:text-white">COMMUNITY PARTNER</h2>
            <div class="justify-center items-center flex">
                <div class="items-center">
                    <img class="w-[200px] px-2" src="{{asset('images/medpart/logo tcp1p.png')}}" alt=""/>
                </div>
                <div class="items-center">
                    <img class="w-[200px] px-2" src="{{asset('images/medpart/logo gdg bali.png')}}" alt=""/>
                </div>
            </div>
        </section>

        {{-- sponsor --}}
        <section class="bg-white dark:bg-gray-900 sponsors" data-sal="slide-up">
            <div class="lg:pt-24 mx-auto max-w-screen-xl px-4">
                <h2 class="text-2xl mt-12 lg:mt-16 font-bold tracking-tight pt-2 leading-tight text-center text-primary-lightblue dark:text-white md:text-3xl lg:text-4xl">SPONSORSHIP</h2>
                <div class="pb-4 lg:pb-4 splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list sponsor">
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/alluna florist.jpg')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/anggadesign.png')}}" alt="Sponsor" class="w-full" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/artlistics printing.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/bali byte rental.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/bamboomedia.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/barucafe.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/berlianmua.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/biznet.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/DKPH.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/eca florist.jpg')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/emina.png')}}" alt="Sponsor" class="w-full" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/gubuk baju.jpg')}}" alt="Sponsor" class="w-full" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/koridewata.jpeg')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/liberta.jpg')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/maheswari.jpg')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/ourproject.jpg')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/sewaht.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/takeandbite.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/viewcamera.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/villabaru.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                            <li class="splide__slide flex justify-center items-center mx-auto">
                                <div class="my-auto">
                                    <img src="{{asset('images/sponsor/viorella.png')}}" alt="Sponsor" class="w-44" loading="lazy"/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
        {{-- media partner --}}
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight leading-tight text-center text-primary-lightblue dark:text-white">MEDIA PARTNER</h2>
        <section class="mt-8 lg:mt-12 splide normal" aria-label="Splide Basic HTML Example">
            <div class="splide__track relative">
                <ul class="splide__list partner">
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo Madingevent.id.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/gudanglombaind.JPG')}}" class="w-36 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo lombamahasiswa.id.png')}}" class="w-44 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Info Event Mahasiswa Indonesia.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/infolombaest.jpg')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/infolombaevent.png')}}" class="w-36 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/infolombasch.PNG')}}" class="w-36 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/picsart.jpg')}}" class="w-44 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo bali viral.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo balibroadcast.jpeg')}}" class="w-36 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo LT.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/LOGO ILE 2.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo Info Lomba Bali.png')}}" class="w-36 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo info lomba IT.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo eventnasional.jpeg')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo webinarindonesia.jpeg')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo Mitralomba.jpg')}}" class="w-52 bg-cover" alt="" loading="lazy"/>
                    </div>
                </ul>
            </div>
        </section>
        <section class="splide reverse pb-16" aria-label="Splide Basic HTML Example">
            <div class="splide__track relative">
                <ul class="splide__list partner">
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/eventmahasiswa3.png')}}" class="w-64 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo events.ina.jpeg')}}" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Event Network 2.png')}}" class="w-44 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo medpar (2).png')}}" class="w-64 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo png.png')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo sekolahkukampusku.jpg')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo_Event_Nasional.PNG')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo_infokampusku.PNG')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo_Infokupedia.PNG')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Media Dewata Warna.png')}}" class="w-52 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Logo Eventnya Mahasiswa.png')}}" class="w-64 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Kawal Event Logo.png')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/seminarcenter.png')}}" class="w-40 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/seputar.infoid.jpg')}}" class="w-44 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/Webinar Center ID Logo.png')}}" class="w-48 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/LOGO EVENT JAWA TIMUR-09.png')}}" class="w-52 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/logo-csrelated.jpeg')}}" class="w-52 bg-cover" alt="" loading="lazy"/>
                    </div>
                    <div class="splide__slide flex items-center">
                        <img src="{{asset('images/medpart/orang-siber.jpg')}}" class="w-52 bg-cover" alt="" loading="lazy"/>
                    </div>
                </ul>
            </div>
        </section>
    </div>
</section>

<script>
    function faqPop(id, tinggi)
    {
        var p = document.querySelector(id+" p");
        var i = document.querySelector(id+" div i");
        p.classList.toggle("h-0");
        p.classList.toggle("mt-4");
        p.classList.toggle(tinggi);
        i.classList.toggle("rotate-180");
    }
</script>
@endsection
