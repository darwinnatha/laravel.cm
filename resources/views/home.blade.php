@extends('layouts.large')

@section('body')

    <x-container class="max-w-7xl mx-auto px-4">
        <div class="relative py-10 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:self-center">
                <a href="{{ route('discussions.index') }}" class="inline-flex items-center text-white bg-green-700 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base font-sans">
                    <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-flag-green rounded-full">Discussions</span>
                    <span class="ml-4 text-sm">Nouvelle section disponible sur le site</span>
                    <x-heroicon-s-chevron-right class="ml-2 w-5 h-5 text-white" />
                </a>
                <h1 class="mt-4 text-4xl tracking-tight font-medium text-skin-primary sm:mt-5 sm:leading-none lg:mt-8 lg:text-5xl">
                    Laravel Cameroun
                </h1>
                <p class="mt-3 text-base text-skin-base sm:mt-5 sm:text-xl lg:text-lg xl:text-xl font-sans">
                    Bienvenue sur le site de la communauté des développeurs PHP et Laravel du Cameroun, le plus gros rassemblement de développeurs au Cameroun.
                </p>
                <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                    <div class="mt-3 sm:flex">
                        @auth
                            <x-button :link="route('forum.new')" class="w-full sm:w-auto">
                                Lancer un thread
                            </x-button>
                        @else
                            <x-button :link="route('login')" class="w-full sm:w-auto">
                                Rejoindre la communauté
                            </x-button>
                        @endauth
                        <x-default-button :link="route('forum.index')" class="mt-3 w-full sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
                            Visiter le Forum
                        </x-default-button>
                    </div>
                </div>
            </div>
            <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                <img src="{{ asset('/images/illustration.svg') }}" alt="Illustration" />
            </div>
        </div>

        <div class="divide-y divide-skin-base">
            <div class="py-8 lg:py-10 xl:pb-14">
                <p class="text-center text-lg font-medium text-skin-base tracking-wider leading-6 font-sans">
                    Nous travaillons avec d’autres communautés et grandes startups
                </p>
                <div class="mt-5 space-y-5 lg:flex lg:items-center lg:justify-around lg:space-y-0 lg:mt-6">
                    <a href="https://twitter.com/DarkCodeCompany" class="flex items-center justify-center">
                        <svg class="h-8 text-skin-inverted" fill="currentColor" viewBox="0 0 210 27" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.356 26.187H0V.767h11.356c1.758 0 3.425.317 4.957.994A13.88 13.88 0 0 1 20.37 4.47c1.172 1.129 2.073 2.483 2.749 4.063.676 1.536.991 3.206.991 4.922 0 1.76-.315 3.386-.991 4.966-.676 1.535-1.577 2.89-2.749 4.064a13.881 13.881 0 0 1-4.056 2.709c-1.532.677-3.2.993-4.957.993Zm-.81-19.189H6.67v13.049h3.875a7.03 7.03 0 0 0 2.569-.497c.81-.316 1.487-.813 2.073-1.4.586-.586 1.036-1.264 1.397-2.076.315-.813.495-1.626.495-2.529s-.18-1.76-.495-2.528c-.36-.813-.811-1.49-1.397-2.077s-1.262-1.039-2.073-1.4c-.766-.361-1.623-.542-2.569-.542ZM38.936.993h-5.994L23.57 26.097h7.165L35.96 9.933l5.183 16.164h7.165L38.936.993ZM67.1 26.187l-4.415-7.856h-4.282l.046 7.856h-6.985V.767h12.708c.63 0 1.216.136 1.847.362.631.226 1.262.542 1.848.903a8.974 8.974 0 0 1 1.622 1.31c.496.496.947.992 1.262 1.49.45.631.766 1.354.992 2.211.225.858.36 1.626.36 2.393a7.308 7.308 0 0 1-.901 3.522c-.586 1.084-1.397 1.987-2.434 2.754l5.949 10.475H67.1Zm-4.956-19.73h-3.966v5.463h3.966c.405 0 .766-.09 1.126-.226.36-.136.676-.316.902-.587.27-.27.45-.542.63-.858a2.733 2.733 0 0 0 0-2.167 2.358 2.358 0 0 0-.63-.858 2.817 2.817 0 0 0-.902-.587c-.36-.09-.72-.18-1.126-.18Zm26.678 6.366 10.05 13.41h-8.248l-6.94-8.534v8.533h-6.94V.812h6.94v8.534l6.94-8.533h8.563l-10.365 12.01ZM121.989 27c-1.892 0-3.605-.361-5.227-1.084-1.623-.722-3.02-1.67-4.236-2.934-1.217-1.22-2.163-2.664-2.839-4.29a13.346 13.346 0 0 1-1.037-5.192c0-1.851.361-3.567 1.037-5.192a13.944 13.944 0 0 1 2.839-4.29 13.95 13.95 0 0 1 4.236-2.934C118.384.36 120.142 0 121.989 0c1.713 0 3.335.316 4.912.948a14.5 14.5 0 0 1 4.326 2.71L126 8.307c-1.262-.903-2.614-1.355-3.966-1.355a6.23 6.23 0 0 0-2.568.542c-.766.361-1.442.813-2.028 1.445-.586.632-.992 1.31-1.352 2.122-.316.813-.496 1.625-.496 2.483 0 .903.18 1.761.496 2.529a5.91 5.91 0 0 0 1.352 2.076c.586.587 1.217 1.084 2.028 1.445a5.888 5.888 0 0 0 2.523.542c1.037 0 2.028-.226 2.929-.722a7.853 7.853 0 0 0 2.389-2.032l5.408 4.38c-1.352 1.67-2.93 2.934-4.777 3.837a13.092 13.092 0 0 1-5.949 1.4Zm23.975 0a13.56 13.56 0 0 1-5.273-1.038c-1.622-.678-3.064-1.671-4.281-2.845-1.217-1.219-2.163-2.619-2.884-4.29-.721-1.625-1.082-3.386-1.082-5.237 0-1.85.361-3.612 1.082-5.237.721-1.626 1.667-3.07 2.884-4.29 1.217-1.219 2.659-2.167 4.281-2.89 1.622-.721 3.38-1.083 5.273-1.083 1.847 0 3.605.362 5.227 1.084 1.667.722 3.064 1.67 4.281 2.89 1.217 1.219 2.163 2.618 2.884 4.289.721 1.625 1.082 3.386 1.082 5.237s-.361 3.612-1.082 5.238c-.721 1.625-1.667 3.07-2.884 4.289a13.163 13.163 0 0 1-4.281 2.845A13.499 13.499 0 0 1 145.964 27Zm0-20.408c-.947 0-1.848.18-2.659.587a6.556 6.556 0 0 0-2.118 1.535c-.586.632-1.037 1.355-1.397 2.212-.316.858-.496 1.716-.496 2.664 0 .903.18 1.806.496 2.664.315.858.811 1.58 1.397 2.212.586.633 1.307 1.13 2.118 1.536a6.54 6.54 0 0 0 2.659.587c.946 0 1.847-.181 2.658-.587a6.555 6.555 0 0 0 2.118-1.535c.586-.633 1.037-1.355 1.397-2.213.316-.858.496-1.716.496-2.664 0-.948-.18-1.806-.496-2.664-.315-.857-.811-1.58-1.397-2.212-.586-.632-1.307-1.129-2.118-1.535-.811-.406-1.667-.587-2.658-.587Zm28.12 19.595h-11.357V.767h11.357c1.757 0 3.425.317 4.957.994a13.888 13.888 0 0 1 4.056 2.709c1.171 1.129 2.073 2.483 2.748 4.063.676 1.536.992 3.206.992 4.922 0 1.76-.316 3.386-.992 4.966-.675 1.535-1.577 2.89-2.748 4.064a13.889 13.889 0 0 1-4.056 2.709c-1.532.677-3.2.993-4.957.993Zm-.766-19.189h-3.876v13.049h3.876c.901 0 1.757-.18 2.568-.497.811-.316 1.487-.813 2.073-1.4.586-.586 1.037-1.264 1.397-2.076.361-.813.496-1.626.496-2.529s-.18-1.76-.496-2.528c-.315-.813-.811-1.49-1.397-2.077s-1.262-1.039-2.073-1.4a6.242 6.242 0 0 0-2.568-.542ZM189.811.993v5.915H210V.993h-20.189Zm0 9.392v6.275h19.153v-6.275h-19.153Zm0 9.797v5.915H210v-5.915h-20.189Z"/>
                        </svg>
                    </a>
                    <a href="https://laravelshopper.io" class="flex items-center justify-center">
                        <img class="h-12 logo-white" src="{{ asset('/images/sponsors/shopper-logo.svg') }}" alt="Laravel Shopper">
                        <img class="h-12 logo-dark" src="{{ asset('/images/sponsors/shopper-logo-light.svg') }}" alt="Laravel Shopper">
                    </a>
                    <a href="https://gdg.community.dev/gdg-douala" class="flex items-center justify-center">
                        <svg class="h-8 text-skin-inverted" fill="currentColor" viewBox="0 0 254 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.893 27.518a5.031 5.031 0 0 1-1.333 1.455 5.29 5.29 0 0 1-1.815.857 5.424 5.424 0 0 1-2.02.127 5.352 5.352 0 0 1-1.917-.62L2.593 19.287a5.122 5.122 0 0 1-1.521-1.274 4.868 4.868 0 0 1-.895-1.734 4.739 4.739 0 0 1-.133-1.928c.09-.645.31-1.267.65-1.83a5.03 5.03 0 0 1 1.335-1.454 5.285 5.285 0 0 1 1.815-.855 5.422 5.422 0 0 1 2.02-.126 5.354 5.354 0 0 1 1.916.621l18.216 10.044c.59.326 1.107.759 1.521 1.274a4.87 4.87 0 0 1 .895 1.734c.176.628.221 1.284.132 1.928a4.803 4.803 0 0 1-.65 1.83Z" fill="#2278BD"/>
                            <path d="M37.023 2.476A5.168 5.168 0 0 1 40.172.17a5.4 5.4 0 0 1 3.934.493L62.32 10.706c.6.32 1.128.751 1.552 1.268.425.516.738 1.108.92 1.742.183.633.233 1.294.145 1.946a4.804 4.804 0 0 1-.652 1.848 5.034 5.034 0 0 1-1.35 1.465 5.293 5.293 0 0 1-1.837.853 5.422 5.422 0 0 1-2.039.11 5.349 5.349 0 0 1-1.926-.65L38.917 9.243c-1.19-.657-2.059-1.74-2.414-3.009a4.76 4.76 0 0 1 .52-3.758Z" fill="#30A043"/>
                            <path d="m25.996 9.243-9.163 5.052-8.416-4.64a6.698 6.698 0 0 0-2.489-.786L20.808.662a5.403 5.403 0 0 1 3.919-.467 5.162 5.162 0 0 1 3.127 2.302 4.76 4.76 0 0 1 .524 3.739 4.986 4.986 0 0 1-2.382 3.007Z" fill="#E43628"/>
                            <path d="M38.917 20.753 48.08 15.7l8.416 4.641a6.697 6.697 0 0 0 2.488.786l-14.88 8.21a5.4 5.4 0 0 1-3.935.495c-1.329-.34-2.462-1.17-3.15-2.308a4.76 4.76 0 0 1-.518-3.76c.356-1.268 1.225-2.35 2.416-3.007v-.004Z" fill="#F9BD00"/>
                            <path d="M154.078 3.221h7.147c2.414 0 4.522.478 6.324 1.433a10.1 10.1 0 0 1 4.151 3.98c.965 1.697 1.449 3.648 1.449 5.851.001 2.203-.482 4.154-1.449 5.852a10.09 10.09 0 0 1-4.151 3.979c-1.8.955-3.908 1.432-6.324 1.431h-7.147V3.221Zm7.147 19.979c2.789 0 4.996-.766 6.62-2.297 1.625-1.532 2.438-3.671 2.438-6.418 0-2.748-.812-4.887-2.438-6.418-1.625-1.53-3.832-2.296-6.62-2.297h-4.351V23.2h4.351Zm18.675 1.966a7.748 7.748 0 0 1-2.98-2.989 8.474 8.474 0 0 1-1.071-4.232 8.485 8.485 0 0 1 1.071-4.231 7.763 7.763 0 0 1 2.98-2.99 8.59 8.59 0 0 1 4.316-1.084 8.678 8.678 0 0 1 4.334 1.085 7.729 7.729 0 0 1 2.998 2.989 8.484 8.484 0 0 1 1.069 4.231 8.474 8.474 0 0 1-1.069 4.232 7.709 7.709 0 0 1-2.998 2.989 8.68 8.68 0 0 1-4.332 1.086 8.589 8.589 0 0 1-4.318-1.086Zm7.083-2.062a5.425 5.425 0 0 0 2.057-2.06c.515-.89.774-1.923.775-3.099a6.093 6.093 0 0 0-.775-3.098 5.43 5.43 0 0 0-2.057-2.06 5.555 5.555 0 0 0-2.767-.725c-.964 0-1.909.25-2.735.724a5.442 5.442 0 0 0-2.057 2.06c-.515.893-.773 1.926-.773 3.1 0 1.173.258 2.206.773 3.098a5.43 5.43 0 0 0 2.057 2.06 5.48 5.48 0 0 0 2.735.725 5.539 5.539 0 0 0 2.767-.725Zm10.722 1.48c-1.043-1.113-1.565-2.654-1.565-4.626v-9.815h2.799v9.37c0 2.873 1.351 4.31 4.052 4.31a4.22 4.22 0 0 0 2.421-.724 4.83 4.83 0 0 0 1.651-1.884 5.478 5.478 0 0 0 .576-2.453v-8.62h2.765v15.605h-2.634V23.42h-.137c-.484.796-1.215 1.467-2.194 2.013a6.355 6.355 0 0 1-3.146.818c-2.015 0-3.545-.556-4.588-1.667Zm19.401.991a5.38 5.38 0 0 1-2.241-1.888 4.805 4.805 0 0 1-.806-2.721c0-1.66.653-2.949 1.96-3.87 1.306-.92 2.98-1.38 5.023-1.38.921-.011 1.841.094 2.734.313a9.46 9.46 0 0 1 1.943.692v-.817a3.53 3.53 0 0 0-.609-2.03 4.036 4.036 0 0 0-1.63-1.383 5.066 5.066 0 0 0-2.208-.489c-1.866 0-3.293.724-4.281 2.171l-2.34-1.478a6.861 6.861 0 0 1 2.696-2.253 8.684 8.684 0 0 1 3.788-.801c2.24 0 4.008.576 5.303 1.73 1.294 1.153 1.942 2.705 1.944 4.656v9.72h-2.669v-2.295h-.137a6.48 6.48 0 0 1-2.14 1.997 6.019 6.019 0 0 1-3.13.803 7.432 7.432 0 0 1-3.2-.677Zm5.944-2.343a5.42 5.42 0 0 0 1.928-1.793 4.408 4.408 0 0 0 .741-2.455c-1.231-.756-2.648-1.134-4.251-1.133-1.383 0-2.487.3-3.312.897-.824.598-1.236 1.359-1.234 2.28-.007.402.089.8.278 1.159.189.359.466.669.808.903a4.162 4.162 0 0 0 2.537.802 5.07 5.07 0 0 0 2.505-.66Zm9.816-20.011h2.8V25.75h-2.8V3.22Zm9.47 22.354a5.376 5.376 0 0 1-2.239-1.888 4.79 4.79 0 0 1-.808-2.721c0-1.66.654-2.949 1.961-3.87 1.307-.92 2.982-1.38 5.023-1.381a10.98 10.98 0 0 1 2.734.314 9.47 9.47 0 0 1 1.944.692v-.817a3.522 3.522 0 0 0-.611-2.03 4.024 4.024 0 0 0-1.63-1.383 5.056 5.056 0 0 0-2.206-.49c-1.866 0-3.294.725-4.283 2.173l-2.338-1.48a6.865 6.865 0 0 1 2.696-2.252 8.693 8.693 0 0 1 3.789-.802c2.239 0 4.006.577 5.303 1.73 1.296 1.154 1.944 2.706 1.944 4.657v9.72h-2.668v-2.295h-.138a6.485 6.485 0 0 1-2.142 1.997 6.011 6.011 0 0 1-3.129.803 7.44 7.44 0 0 1-3.202-.677Zm5.946-2.343a5.42 5.42 0 0 0 1.927-1.793 4.4 4.4 0 0 0 .742-2.455c-1.231-.756-2.648-1.134-4.251-1.133-1.384 0-2.487.3-3.311.897-.823.598-1.235 1.359-1.234 2.28-.006.403.089.8.278 1.16.19.358.467.668.81.902a4.154 4.154 0 0 0 2.535.802c.882 0 1.747-.229 2.504-.66ZM85.156 24.931a11.35 11.35 0 0 1-4.297-4.109 10.904 10.904 0 0 1-1.59-5.775 10.904 10.904 0 0 1 1.59-5.776 11.446 11.446 0 0 1 4.318-4.115 12.122 12.122 0 0 1 5.898-1.478 13.07 13.07 0 0 1 4.727.851 9.517 9.517 0 0 1 3.644 2.41l-1.94 1.85a7.019 7.019 0 0 0-2.77-1.964 9.564 9.564 0 0 0-3.628-.683 9.433 9.433 0 0 0-4.503 1.109 8.673 8.673 0 0 0-3.342 3.13c-.84 1.352-1.262 2.909-1.262 4.67 0 1.763.42 3.318 1.258 4.667a8.638 8.638 0 0 0 3.357 3.13 9.464 9.464 0 0 0 4.488 1.11c1.528 0 2.808-.228 3.84-.684a8.582 8.582 0 0 0 2.657-1.809 6.612 6.612 0 0 0 1.337-2.052c.351-.85.566-1.747.637-2.659H91.14v-2.402h10.948c.102.522.155 1.05.16 1.581a11.681 11.681 0 0 1-.67 3.906 8.549 8.549 0 0 1-2.132 3.33c-2.103 2.168-4.89 3.252-8.365 3.251a12.067 12.067 0 0 1-5.926-1.489ZM105.588 4.17h6.87c2.334 0 4.37.46 6.11 1.382a9.76 9.76 0 0 1 4.01 3.846c.934 1.641 1.401 3.526 1.401 5.654s-.467 4.012-1.401 5.654a9.756 9.756 0 0 1-4.01 3.845c-1.74.92-3.776 1.38-6.11 1.38h-6.87V4.168Zm6.87 19.302c2.695 0 4.833-.74 6.413-2.219 1.581-1.479 2.371-3.546 2.371-6.201s-.79-4.722-2.371-6.202c-1.58-1.48-3.718-2.22-6.413-2.218h-4.201v16.84h4.201Zm19.637 1.459a11.35 11.35 0 0 1-4.293-4.108 10.896 10.896 0 0 1-1.59-5.776 10.887 10.887 0 0 1 1.59-5.771 11.45 11.45 0 0 1 4.318-4.114 12.119 12.119 0 0 1 5.898-1.479c1.619-.01 3.224.28 4.727.852a9.513 9.513 0 0 1 3.638 2.404l-1.94 1.855a7.016 7.016 0 0 0-2.77-1.965 9.564 9.564 0 0 0-3.627-.683 9.433 9.433 0 0 0-4.503 1.11 8.668 8.668 0 0 0-3.342 3.13c-.839 1.348-1.259 2.904-1.258 4.666.001 1.762.42 3.317 1.258 4.666a8.636 8.636 0 0 0 3.361 3.13 9.463 9.463 0 0 0 4.488 1.11c1.528 0 2.807-.228 3.84-.684a8.582 8.582 0 0 0 2.642-1.808 6.62 6.62 0 0 0 1.337-2.053c.351-.85.566-1.747.636-2.658h-8.433v-2.402h10.948c.101.521.155 1.05.159 1.58a11.655 11.655 0 0 1-.669 3.906 8.561 8.561 0 0 1-2.132 3.33c-2.103 2.168-4.891 3.252-8.365 3.251a12.064 12.064 0 0 1-5.918-1.489Z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="py-12 lg:py-20">
                <x-section-header title="Articles Populaires" content="Découvrez les articles les plus appréciés et partagés par les membres de la communauté" />
                <div class="mt-8 grid gap-6 max-w-xl mx-auto lg:grid-rows-2 lg:grid-flow-col lg:grid-cols-2 lg:mt-10 lg:gap-x-8 lg:max-w-none">
                    @foreach($latestArticles as $article)
                        @if($loop->first)
                            <div class="lg:row-span-2">
                                <x-articles.card :article="$article" />
                            </div>
                        @else
                            <div class="lg:col-span-2">
                                <x-articles.summary :article="$article" />
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            @if($latestThreads->isNotEmpty())
                <div class="py-12 lg:py-20">
                    <x-section-header title="On apprend aussi en aidant les autres" content="En rejoignant la communauté, vous pouvez consulter les dernières questions non résolues et apporter votre pierre à l’édifice." />
                    <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12 lg:mt-12">
                        @foreach($latestThreads as $thread)
                            <div>
                                <div class="flex items-center font-sans text-skin-base">
                                    <a href="{{ route('profile', $thread->author->username) }}" class="inline-flex items-center hover:underline">
                                        <img class="inline-block rounded-full h-6 w-6 mr-1.5" src="{{ $thread->author->profile_photo_url }}" alt="Avatar de {{ $thread->author->username }}">
                                        <span class="font-sans">{{ '@' . $thread->author->username }}</span>
                                    </a>
                                    <span class="inline-flex mx-1.5 space-x-1.5">
                                        <span>a posé</span>
                                        <time class="sr-only" datetime="{{ $thread->created_at }}" title="{{ $thread->last_posted_at->format('j M, Y \à H:i') }}">{{ $thread->last_posted_at->format('j M, Y \à H:i') }}</time>
                                        <time-ago time="{{ $thread->created_at->getTimestamp() }}"/>
                                    </span>
                                </div>
                                <a href="{{ route('forum.show', $thread) }}" class="mt-3 block">
                                    <p class="text-xl font-medium text-skin-inverted font-sans">
                                        {{ $thread->subject() }}
                                    </p>
                                    <p class="mt-3 text-base text-skin-base font-normal">
                                        {!! $thread->excerpt() !!}
                                    </p>
                                </a>
                                <div class="mt-3">
                                    <a href="{{ route('forum.show', $thread) }}" class="text-base font-medium text-green-600 hover:text-green-500 hover:underline font-normal">
                                        Afficher la question
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </x-container>

    <div class="relative bg-black">
        <div class="h-80 w-full absolute bottom-0 xl:inset-0 xl:h-full">
            <div class="h-full w-full xl:grid xl:grid-cols-2">
                <div class="h-full xl:relative xl:col-start-2">
                    <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="{{ asset('/images/developer.png') }}" alt="Developer working on laptop">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto px-4 lg:max-w-7xl xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
            <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
                <h2 class="text-sm font-semibold text-green-300 tracking-wide uppercase font-sans">A propos</h2>
                <p class="mt-3 text-3xl font-extrabold text-white font-sans">Nous construisons une communauté Open Source d'apprenants et d'enseignants</p>
                <p class="mt-5 text-lg text-gray-300 font-sans">
                    <span class="text-skin-primary italic">"</span>Tout le monde enseigne, tout le monde apprend<span class="text-skin-primary italic">"</span>.
                    Tel est l'esprit qui est derrière la communauté. Une communauté qui se veut grandissante et qui donne la possibilité à tout le monde de partager ses connaissances et d'apprendre.
                </p>
                <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
                    <p>
                        <span class="block text-2xl font-bold text-white">600+</span>
                        <span class="mt-1 block text-base text-gray-300 font-sans">
                            <span class="font-medium text-white">Membres</span> qui ont rejoins les différents groupes de la communauté
                        </span>
                    </p>

                    <p>
                        <span class="block text-2xl font-bold text-white">50K+</span>
                        <span class="mt-1 block text-base text-gray-300 font-sans">
                            <span class="font-medium text-white">Développeurs PHP & Laravel</span> dans l’ensemble du territoire national.
                        </span>
                    </p>

                    <p>
                        <span class="block text-2xl font-bold text-white">9%</span>
                        <span class="mt-1 block text-base text-gray-300 font-sans">
                            <span class="font-medium text-white">Taux de participation aux événements</span> car la communauté est encore très jeune.
                        </span>
                    </p>

                    <p>
                        <span class="block text-2xl font-bold text-white">10K+</span>
                        <span class="mt-1 block text-base text-gray-300 font-sans">
                            <span class="font-medium text-white">stars</span> sur les projets réalisés par les développeurs Camerounais sur Github.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

@stop
