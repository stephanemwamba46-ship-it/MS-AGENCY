{{-- =========================================================
    MS AGENCY — NAVBAR PREMIUM
    Desktop + Mobile Drawer
========================================================= --}}
<header
    x-data="{ mobileMenu: false }"
    @keydown.escape.window="mobileMenu = false"
    class="fixed top-0 left-0 right-0 z-[9999]"
>
    {{-- =======================
         NAVBAR
    ======================== --}}
    <div class="px-3 sm:px-5 lg:px-8 pt-3 sm:pt-4">
        <nav class="fixed inset-x-0 top-0 z-[100] w-full bg-white/95 backdrop-blur-md shadow-sm">
        <nav
            class="
                max-w-[1400px] mx-auto
                h-[68px] sm:h-[76px]
                bg-white
                border border-slate-200/80
                shadow-[0_8px_35px_rgba(15,23,42,0.10)]
                rounded-[22px] sm:rounded-[26px]
                px-4 sm:px-6 lg:px-7
                flex items-center justify-between
            "
        >
        
            {{-- =======================
                 LOGO
            ======================== --}}
            <a
                href="/"
                class="flex items-center shrink-0"
                aria-label="Accueil MS Agency"
            >
                <img
                    src="{{ asset('images/logo/ms-agency-logo.jpg') }}"
                    alt="Logo MS Agency"
                    class="h-10 sm:h-12 lg:h-[52px] w-auto max-w-[155px] sm:max-w-[190px] object-contain"
                >
            </a>
            {{-- =======================
                 MENU DESKTOP
            ======================== --}}
            <div class="hidden lg:flex items-center gap-1 xl:gap-2">
                <a
                    href="/"
                    class="
                        px-3 xl:px-4 py-2 rounded-full
                        text-[14px] xl:text-[15px] font-semibold
                        text-[#2563EB]
                        bg-blue-50
                        transition-all duration-300
                    "
                >
                    Accueil
                </a>
                <a
                    href="/about"
                    class="
                        px-3 xl:px-4 py-2 rounded-full
                        text-[14px] xl:text-[15px] font-medium
                        text-slate-700
                        hover:text-[#2563EB]
                        hover:bg-blue-50
                        transition-all duration-300
                    "
                >
                    À propos
                </a>
                <a
                    href="/services"
                    class="
                        px-3 xl:px-4 py-2 rounded-full
                        text-[14px] xl:text-[15px] font-medium
                        text-slate-700
                        hover:text-[#2563EB]
                        hover:bg-blue-50
                        transition-all duration-300
                    "
                >
                    Services
                </a>
                <a
                    href="/formations"
                    class="
                        px-3 xl:px-4 py-2 rounded-full
                        text-[14px] xl:text-[15px] font-medium
                        text-slate-700
                        hover:text-[#2563EB]
                        hover:bg-blue-50
                        transition-all duration-300
                    "
                >
                    Formations
                </a>
                <a
                    href="/portfolio"
                    class="
                        px-3 xl:px-4 py-2 rounded-full
                        text-[14px] xl:text-[15px] font-medium
                        text-slate-700
                        hover:text-[#2563EB]
                        hover:bg-blue-50
                        transition-all duration-300
                    "
                >
                    Portfolio
                </a>
                <a
                    href="/contact"
                    class="
                        px-3 xl:px-4 py-2 rounded-full
                        text-[14px] xl:text-[15px] font-medium
                        text-slate-700
                        hover:text-[#2563EB]
                        hover:bg-blue-50
                        transition-all duration-300
                    "
                >
                    Contact
                </a>
            </div>
            {{-- =======================
                 CTA DESKTOP
            ======================== --}}
            <a
                    href="/contact"
                    class="
                        group
                        hidden
                        items-center
                        justify-center
                        gap-2.5
                        rounded-full
                        bg-blue-600
                        px-5
                        py-3
                        text-sm
                        font-bold
                        text-white
                        shadow-[0_8px_25px_rgba(37,99,235,0.25)]
                        transition-all
                        duration-300
                        hover:-translate-y-0.5
                        hover:bg-orange-500
                        hover:shadow-[0_12px_30px_rgba(249,115,22,0.25)]
                        md:flex
                    "
                >
                    <!-- Icône calendrier -->
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect
                            width="18"
                            height="18"
                            x="3"
                            y="4"
                            rx="2"
                        ></rect>
                        <path d="M3 10h18"></path>
                        <path d="m9 16 2 2 4-4"></path>
                    </svg>
                    <span>
                        Prendre rendez-vous
                    </span>
                </a>
            {{-- =======================
                 HAMBURGER MOBILE
            ======================== --}}
            <button
    type="button"
    @click="mobileMenu = !mobileMenu"
    class="
        lg:hidden
        w-11 h-11
        flex items-center justify-center
        rounded-full
        bg-[#2563EB]
        text-white
        shadow-md
        transition-all duration-300
        hover:bg-[#1D4ED8]
    "
    aria-label="Menu"
>
    <i
        x-show="!mobileMenu"
        x-transition
        data-lucide="menu"
        class="w-6 h-6"
    ></i>
    <i
        x-show="mobileMenu"
        x-transition
        data-lucide="x"
        class="w-6 h-6"
    ></i>
</button>
        </nav>
    </div>
    {{-- =====================================================
         OVERLAY MOBILE
    ====================================================== --}}
 <div
    x-show="mobileMenu"
    x-cloak
    x-transition:enter="transition-opacity ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @click="mobileMenu = false"
    class="
        lg:hidden
        fixed inset-0
        z-[10000]
        bg-slate-950/50
        backdrop-blur-sm
    "
></div>
{{-- =====================================================
     MENU MOBILE PREMIUM - MS AGENCY
====================================================== --}}
<aside
    x-show="mobileMenu"
    x-cloak
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="-translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="-translate-x-full opacity-0"
    class="fixed inset-y-0 left-0 z-[10001] w-[88%] max-w-[360px] bg-white shadow-2xl lg:hidden overflow-y-auto overscroll-contain"
>
        {{-- HEADER --}}
        <div class="flex items-center justify-between px-6 py-5 border-b border-slate-200">
            <a href="/" @click="mobileMenu=false">
                <img
                    src="{{ asset('images/logo/ms-agency-logo.jpg') }}"
                    class="h-12 w-auto"
                    alt="MS Agency">
            </a>
            <button
                @click="mobileMenu=false"
                class="w-11 h-11 rounded-full bg-slate-100 hover:bg-[#F97316] hover:text-white flex items-center justify-center transition">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>
        {{-- TITRE --}}
        <div class="px-6 pt-6 pb-3">
            <p class="text-xs uppercase tracking-[0.25em] text-[#F97316] font-bold">
                Navigation
            </p>
        </div>
        {{-- MENU --}}
        <nav class="px-4">
            <div class="space-y-2">
                <a href="/"
                   @click="mobileMenu=false"
                   class="flex items-center gap-4 rounded-2xl bg-blue-50 px-4 py-4 font-semibold text-[#2563EB]">
                    <i data-lucide="house" class="w-5 h-5"></i>
                    <span>Accueil</span>
                </a>
                <a href="/about"
                   @click="mobileMenu=false"
                   class="group flex items-center gap-4 rounded-2xl px-4 py-4 text-slate-700 hover:bg-blue-50 hover:text-[#2563EB] transition">
                    <i data-lucide="user-round" class="w-5 h-5"></i>
                    <span>À propos</span>
                </a>
                <a href="/services"
                   @click="mobileMenu=false"
                   class="group flex items-center gap-4 rounded-2xl px-4 py-4 text-slate-700 hover:bg-blue-50 hover:text-[#2563EB] transition">
                    <i data-lucide="briefcase-business" class="w-5 h-5"></i>
                    <span>Services</span>
                </a>
                <a href="/formations"
                   @click="mobileMenu=false"
                   class="group flex items-center gap-4 rounded-2xl px-4 py-4 text-slate-700 hover:bg-blue-50 hover:text-[#2563EB] transition">
                    <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                    <span>Formations</span>
                </a>
                <a href="/portfolio"
                   @click="mobileMenu=false"
                   class="group flex items-center gap-4 rounded-2xl px-4 py-4 text-slate-700 hover:bg-blue-50 hover:text-[#2563EB] transition">
                    <i data-lucide="images" class="w-5 h-5"></i>
                    <span>Portfolio</span>
                </a>
                <a href="/contact"
                   @click="mobileMenu=false"
                   class="group flex items-center gap-4 rounded-2xl px-4 py-4 text-slate-700 hover:bg-blue-50 hover:text-[#2563EB] transition">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    <span>Contact</span>
                </a>
                {{-- BOUTON PRINCIPAL --}}
                <div class="pt-4">
                    <a
                        href="/contact"
                        @click="mobileMenu=false"
                        class="group flex items-center justify-center gap-3 w-full rounded-2xl bg-gradient-to-r from-[#2563EB] to-[#1D4ED8] px-5 py-4 text-white font-bold shadow-lg hover:from-[#F97316] hover:to-[#EA580C] transition-all duration-300">
                        <i data-lucide="calendar-check-2" class="w-5 h-5"></i>
                        <span>Prendre rendez-vous</span>
                        <i data-lucide="arrow-right"
                           class="w-4 h-4 group-hover:translate-x-1 transition"></i>
                    </a>
                </div>
            </div>
        </nav>
{{-- =====================================================
             BAS DU MENU
        ====================================================== --}}
        <div class="mt-auto px-5 pt-6 pb-6 border-t border-slate-200 bg-slate-50">
            {{-- Coordonnées --}}
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100 text-[#2563EB]">
                        <i data-lucide="phone" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wider text-slate-400">
                            Téléphone
                        </p>
                        <p class="text-sm font-semibold text-slate-700">
                            +243 971032234
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange-100 text-[#F97316]">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wider text-slate-400">
                            Email
                        </p>
                        <p class="text-sm font-semibold text-slate-700">
                            contact@msagency.cd
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                  
                </div>
            </div>
            {{-- Réseaux sociaux --}}
            <div class="mt-7">
                <p class="mb-3 text-xs font-bold uppercase tracking-[0.2em] text-slate-400">
                    Suivez-nous
                </p>
                <div class="flex items-center gap-3">
                    <a href="#"
                       class="flex h-11 w-11 items-center justify-center rounded-xl bg-white shadow-sm transition hover:-translate-y-1 hover:bg-[#2563EB] hover:text-white">
                        <i data-lucide="share-2" class="w-5 h-5"></i>
                    </a>
                    <a href="#"
                       class="flex h-11 w-11 items-center justify-center rounded-xl bg-white shadow-sm transition hover:-translate-y-1 hover:bg-[#F97316] hover:text-white">
                        <i data-lucide="camera" class="w-5 h-5"></i>
                    </a>
                    <a href="#"
                       class="flex h-11 w-11 items-center justify-center rounded-xl bg-white shadow-sm transition hover:-translate-y-1 hover:bg-[#2563EB] hover:text-white">
                        <i data-lucide="play-square" class="w-5 h-5"></i>
                    </a>
                    <a href="#"
                       class="flex h-11 w-11 items-center justify-center rounded-xl bg-white shadow-sm transition hover:-translate-y-1 hover:bg-[#25D366] hover:text-white">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
            {{-- Copyright --}}
            <div class="mt-8 border-t border-slate-200 pt-4 text-center">
                <p class="font-bold text-slate-700">
                    MS Agency
                </p>
                <p class="mt-1 text-xs text-slate-500">
                    Solutions numériques • Marketing • Formations
                </p>
                <p class="mt-2 text-[11px] text-slate-400">
                    © {{ date('Y') }} Ms agency. Tous droits réservés.
                </p>
            </div>
        </div>
    </div>
</aside>
</header>