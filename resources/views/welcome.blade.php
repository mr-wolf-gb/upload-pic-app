<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg"/>
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                            fill="currentColor"/>
                    </svg>
                </div>
            </header>

            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                    <div
                        class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                            <svg width="64px" height="64px" viewBox="-10.08 -10.08 44.16 44.16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12ZM12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11.8107L14.4697 13.5303C14.7626 13.8232 15.2374 13.8232 15.5303 13.5303C15.8232 13.2374 15.8232 12.7626 15.5303 12.4697L12.5303 9.46967C12.3897 9.32902 12.1989 9.25 12 9.25C11.8011 9.25 11.6103 9.32902 11.4697 9.46967L8.46967 12.4697C8.17678 12.7626 8.17678 13.2374 8.46967 13.5303C8.76256 13.8232 9.23744 13.8232 9.53033 13.5303L11.25 11.8107V17C11.25 17.4142 11.5858 17.75 12 17.75ZM8 7.75C7.58579 7.75 7.25 7.41421 7.25 7C7.25 6.58579 7.58579 6.25 8 6.25H16C16.4142 6.25 16.75 6.58579 16.75 7C16.75 7.41421 16.4142 7.75 16 7.75H8Z"
                                          fill="#ffffff"></path>
                                </g>
                            </svg>
                        </div>

                        <div class="pt-3 sm:pt-5 w-full">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Upload zip file</h2>

                            <div class="flex items-center justify-center mt-4">
                                <form class="my-4 px-9 max-w-lg mx-auto flex flex-col items-center justify-center" action="{{route('upload')}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="w-full">
                                        <input
                                            class="block w-full text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_help" name="file" id="file" type="file">
                                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_help">Support zip file only</div>
                                    </div>

                                    <div class="w-full mt-4">
                                        <button type="submit"
                                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                            Upload File
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div
                        class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                            <svg width="64px" height="64px" viewBox="-61.5 -61.5 2173.00 2173.00" data-name="Layer 3" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
                                 fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <defs>
                                        <style>.cls-1 {
                                                fill: #ffffff;
                                            }

                                            .cls-2 {
                                                fill: #000000;
                                            }</style>
                                    </defs>
                                    <title></title>
                                    <path class="cls-1"
                                          d="M1380.4,1601.1H669.6c-113.4,0-205.7-92.3-205.7-205.7V654.6c0-113.4,92.3-205.7,205.7-205.7h710.8c113.4,0,205.7,92.3,205.7,205.7v740.8C1586.1,1508.8,1493.8,1601.1,1380.4,1601.1Z"></path>
                                    <path class="cls-2" d="M800.7,847H692.9a45,45,0,0,1,0-90H800.7a45,45,0,0,1,0,90Z"></path>
                                    <path class="cls-2" d="M1357.1,847H977.2a45,45,0,0,1,0-90h379.9a45,45,0,0,1,0,90Z"></path>
                                    <path class="cls-2" d="M800.7,1070H692.9a45,45,0,0,1,0-90H800.7a45,45,0,0,1,0,90Z"></path>
                                    <path class="cls-2" d="M1357.1,1070H977.2a45,45,0,0,1,0-90h379.9a45,45,0,0,1,0,90Z"></path>
                                    <path class="cls-2" d="M800.7,1293H692.9a45,45,0,0,1,0-90H800.7a45,45,0,0,1,0,90Z"></path>
                                    <path class="cls-2" d="M1357.1,1293H977.2a45,45,0,1,1,0-90h379.9a45,45,0,0,1,0,90Z"></path>
                                </g>
                            </svg>
                        </div>

                        <div class="pt-3 sm:pt-5 w-full">
                            <h2 class="text-xl font-semibold text-black dark:text-white mb-4">Media Store</h2>

                            <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                @foreach(\App\Models\StoreMedia::all() as $item)
                                    <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                        <a href="?q={{$item->name}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>

                @if(isset($selected))
                    <div class="mt-8 grid gap-6 lg:grid-cols-1 lg:gap-8">
                        <div
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                            <div class="pt-3 sm:pt-5 w-full">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Selected : {{$selected->name}}</h2>

                                <div class="flex items-center justify-center mt-4">
                                    <div class="grid grid-rows-2 grid-flow-col gap-4 items-center justify-center">
                                        @foreach($selected->getMedia()->take(10) as $item)
                                            <div>
                                                <a href="{{route('get-file', ['collection' => $selected->name, 'name' => $item->name])}}" target="_blank"
                                                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->file_name}}</h5>
                                                    <p class="font-normal text-gray-700 dark:text-gray-400">{{$item->mime_type}}</p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) - Mr.WOLF
            </footer>
        </div>
    </div>
</div>
</body>
</html>
