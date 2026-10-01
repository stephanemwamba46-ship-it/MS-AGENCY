{{-- =========================================================
    À PROPOS — PROFIL DU DÉVELOPPEUR
========================================================= --}}
<section
    id="about"
   class="relative overflow-hidden bg-white pt-0 pb-16 sm:pt-1 sm:pb-20 lg:pt-2 lg:pb-24"
>  {{-- Décors --}}
   <div
    class="pointer-events-none absolute -left-40 top-0 h-72 w-72 rounded-full bg-blue-100/30 blur-3xl"
></div>
    <div
        class="pointer-events-none absolute -right-40 bottom-20 h-80 w-80 rounded-full bg-orange-100/30 blur-3xl"
    ></div>
    <div class="relative mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-10">
        {{-- =================================================
             EN-TÊTE
        ================================================== --}}
        <div class="mx-auto max-w-3xl text-center">
            <span
                class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-[#2563EB]"
            >
                <i data-lucide="user-round" class="h-4 w-4"></i>
                À propos de moi
            </span>
            <h2
                class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl"
            >
                Je transforme les idées en
                <span class="text-[#2563EB]">
                    solutions digitales
                </span>
            </h2>
            <p
                class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base"
            >
                Développeur web passionné par la technologie, le design et
                la création de solutions utiles, modernes et accessibles.
            </p>
        </div>
        {{-- =================================================
             PRÉSENTATION PRINCIPALE
        ================================================== --}}
        <div
            class="mt-12 grid items-center gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:gap-16"
        >
            {{-- =========================
                 CARTE PROFIL
            ========================== --}}
            <div class="relative mx-auto w-full max-w-md">
                {{-- Halo --}}
                <div
                    class="pointer-events-none absolute inset-8 rounded-[3rem] bg-blue-100/50 blur-3xl"
                ></div>
                <div
                    class="relative overflow-hidden rounded-[2rem] border border-slate-100 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)] sm:p-7"
                >
                    {{-- Icône --}}
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-[#2563EB]"
                    >
                        <i data-lucide="code-2" class="h-7 w-7"></i>
                    </div>
                    <p
                        class="mt-6 text-xs font-bold uppercase tracking-[0.18em] text-[#F97316]"
                    >
                        Mon profil
                    </p>
                    <h3
                        class="mt-2 text-2xl font-extrabold text-slate-900 sm:text-3xl"
                    >
                        Développeur Web
                    </h3>
                    <p
                        class="mt-4 text-sm leading-7 text-slate-600"
                    >
                        Je conçois et développe des sites web, plateformes
                        et applications adaptés aux besoins réels des
                        entreprises, entrepreneurs et particuliers.
                    </p>
                    {{-- Ligne --}}
                    <div class="my-6 h-px bg-slate-100"></div>
                    {{-- Mini profil --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="rounded-2xl bg-slate-50 p-4"
                        >
                            <i
                                data-lucide="monitor"
                                class="h-5 w-5 text-[#2563EB]"
                            ></i>
                            <p
                                class="mt-3 text-sm font-bold text-slate-900"
                            >
                                Web moderne
                            </p>
                            <p
                                class="mt-1 text-xs leading-5 text-slate-500"
                            >
                                Interfaces rapides et responsives.
                            </p>
                        </div>
                        <div
                            class="rounded-2xl bg-orange-50 p-4"
                        >
                            <i
                                data-lucide="lightbulb"
                                class="h-5 w-5 text-[#F97316]"
                            ></i>
                            <p
                                class="mt-3 text-sm font-bold text-slate-900"
                            >
                                Solutions utiles
                            </p>
                            <p
                                class="mt-1 text-xs leading-5 text-slate-500"
                            >
                                Des outils pensés pour vos objectifs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =========================
                 CONTENU DROIT
            ========================== --}}
            <div>
                <span
                    class="text-xs font-bold uppercase tracking-[0.18em] text-[#F97316]"
                >
                    Ce que je fais
                </span>
                <h3
                    class="mt-3 max-w-2xl text-2xl font-extrabold leading-tight text-slate-900 sm:text-3xl lg:text-4xl"
                >
                    Du développement à la mise en ligne,
                    <span class="text-[#2563EB]">
                        je construis votre présence digitale.
                    </span>
                </h3>
                {{-- =========================
                     SERVICES
                ========================== --}}
                <div class="mt-7 grid gap-4 sm:grid-cols-2">
                    {{-- Développement --}}
                    <div
                        class="group rounded-2xl border border-slate-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-[#2563EB]"
                        >
                            <i data-lucide="code-2" class="h-5 w-5"></i>
                        </div>
                        <h4
                            class="mt-4 font-bold text-slate-900"
                        >
                            Développement Web
                        </h4>
                        <p
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Sites vitrines, plateformes web et applications
                            adaptées à votre activité.
                        </p>
                    </div>
                    {{-- Design --}}
                    <div
                        class="group rounded-2xl border border-slate-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-[#F97316]"
                        >
                            <i data-lucide="palette" class="h-5 w-5"></i>
                        </div>
                        <h4
                            class="mt-4 font-bold text-slate-900"
                        >
                            Interfaces modernes
                        </h4>
                        <p
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Des interfaces propres, intuitives et adaptées
                            aux smartphones comme aux ordinateurs.
                        </p>
                    </div>
                    {{-- Solutions --}}
                    <div
                        class="group rounded-2xl border border-slate-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-[#2563EB]"
                        >
                            <i data-lucide="layers-3" class="h-5 w-5"></i>
                        </div>
                        <h4
                            class="mt-4 font-bold text-slate-900"
                        >
                            Solutions sur mesure
                        </h4>
                        <p
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Des fonctionnalités pensées autour de vos
                            besoins et de votre fonctionnement.
                        </p>
                    </div>
                    {{-- Accompagnement --}}
                    <div
                        class="group rounded-2xl border border-slate-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-[#F97316]"
                        >
                            <i data-lucide="headphones" class="h-5 w-5"></i>
                        </div>
                        <h4
                            class="mt-4 font-bold text-slate-900"
                        >
                            Accompagnement
                        </h4>
                        <p
                            class="mt-2 text-sm leading-6 text-slate-500"
                        >
                            Un accompagnement de la conception jusqu'à la
                            mise en ligne du projet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- =================================================
             TECHNOLOGIES
        ================================================== --}}
        <div
            class="mt-14 rounded-[2rem] border border-slate-100 bg-slate-50/70 px-5 py-7 sm:px-8"
        >
            <div
                class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between"
            >
                <div>
                    <p
                        class="text-xs font-bold uppercase tracking-[0.18em] text-[#2563EB]"
                    >
                        Technologies
                    </p>
                    <h3
                        class="mt-2 text-xl font-extrabold text-slate-900"
                    >
                        Les outils avec lesquels je travaille
                    </h3>
                </div>
                <div
                    class="flex flex-wrap gap-2"
                >
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        Laravel
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        PHP
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        JavaScript
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        Tailwind CSS
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        MySQL
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        Python
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        Django
                    </span>
                    <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        Html Css
                    </span>
                </div>
            </div>
        </div>
        {{-- =================================================
             CTA
        ================================================== --}}
        <div
            class="mt-8 flex flex-col items-center justify-between gap-5 rounded-[2rem] bg-gradient-to-r from-[#2563EB] to-[#1D4ED8] px-6 py-8 text-center shadow-[0_20px_50px_rgba(37,99,235,0.18)] sm:px-8 lg:flex-row lg:text-left"
        >
            <div>
                <h3
                    class="text-xl font-extrabold text-white sm:text-2xl"
                >
                    Une idée ?
                </h3>

            </div>
            {{-- FUTURE PAGE RENDEZ-VOUS --}}
            <a
                href="/contact"
                class="group inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 font-bold text-[#2563EB] shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-[#F97316] hover:text-white sm:w-auto"
            >
                <i
                    data-lucide="calendar-check-2"
                    class="h-5 w-5"
                ></i>
                <span>
                    Construisons-la ensemble
                </span>
                <i
                    data-lucide="arrow-right"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                ></i>
            </a>
        </div>
    </div>
</section>