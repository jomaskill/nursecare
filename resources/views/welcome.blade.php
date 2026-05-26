<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="NurseCare Intervenções de Enfermagem — Atendimento domiciliar humanizado, profissional e seguro." />
    <title>NurseCare — Intervenções de Enfermagem</title>

    <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Nunito:wght@400;500;600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @php
        $whatsapp = config('nursecare.whatsapp');
        $whatsappUrl = "https://wa.me/{$whatsapp}?text=" . urlencode('Olá! Gostaria de agendar um atendimento.');
    @endphp
</head>
<body class="bg-white antialiased" style="font-family: var(--font-sans)">

    {{-- ═══════════════════════════════════════════════════════════ --}}
    {{-- NAVBAR                                                       --}}
    {{-- ═══════════════════════════════════════════════════════════ --}}
    <header id="navbar" class="hidden lg:block fixed top-0 left-0 right-0 z-50 transition-all duration-300" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(12px);">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between sm:h-20">
                <a href="#" class="flex items-center gap-2">
                    <img src="/logo-no-bg.png" alt="NurseCare" class="h-10 w-auto sm:h-12 object-contain" />
                </a>
                <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 rounded-full px-4 py-2 text-sm font-semibold text-white transition-all duration-200 hover:scale-105 active:scale-95 sm:px-5 sm:py-2.5"
                   style="background: var(--color-teal); font-family: var(--font-display)">
                    <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span class="hidden sm:inline">Agendar Atendimento</span>
                    <span class="sm:hidden">WhatsApp</span>
                </a>
            </div>
        </div>
        <div class="h-px" style="background: linear-gradient(to right, transparent, var(--color-teal-muted), transparent)"></div>
    </header>

    <main>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- HERO                                                         --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="hero-section relative min-h-screen flex items-center overflow-hidden lg:pt-20">
            <div class="absolute inset-0 bg-white"></div>

            <div class="relative mx-auto max-w-6xl px-4 pt-2 pb-10 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center gap-2 text-center">

                    {{-- Text content --}}
                    <div class="w-full max-w-2xl">
{{--                        <div class="inline-flex items-center gap-2 rounded-full border px-4 py-1.5 text-xs font-semibold uppercase tracking-widest mb-6 animate-fade-in"--}}
{{--                             style="border-color: rgba(0,181,164,0.4); color: var(--color-teal); background: rgba(0,181,164,0.08); font-family: var(--font-display)">--}}
{{--                            <span class="h-1.5 w-1.5 rounded-full animate-pulse" style="background: var(--color-teal)"></span>--}}
{{--                            Intervenções de Enfermagem--}}
{{--                        </div>--}}

                        <h1 class="animate-fade-up text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl"
                            style="font-family: var(--font-display); animation-delay: 0.1s; color: var(--color-navy)">
                            Cuidado Profissional<br/>
                            <span style="color: var(--color-teal)">no Conforto</span><br/>
                            da Sua Casa
                        </h1>

                        <p class="hero-desc mt-6 text-base leading-relaxed sm:text-lg animate-fade-up"
                           style="animation-delay: 0.25s; max-width: 520px; color: var(--color-gray-600)">
                            A Nurse Care Intervenções proporciona assistência de enfermagem humanizada, levando conforto e atendimento profissional diretamente à sua residência.
                        </p>

                        <div class="mt-8 flex flex-col sm:flex-row items-center gap-4 animate-fade-up justify-center"
                             style="animation-delay: 0.4s">
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                               class="pulse-ring w-full sm:w-auto inline-flex items-center justify-center gap-3 rounded-full px-8 py-4 text-base font-bold text-white shadow-xl transition-all duration-200 hover:scale-105 active:scale-95"
                               style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark)); font-family: var(--font-display)">
                                <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Falar pelo WhatsApp
                            </a>

                            <a href="#servicos" class="inline-flex items-center gap-2 text-sm font-semibold transition-all hover:gap-3"
                               style="color: var(--color-teal); font-family: var(--font-display)">
                                Ver serviços
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                        </div>

                        {{-- Trust badges --}}
                        <div class="mt-10 flex flex-wrap justify-center gap-6 animate-fade-up" style="animation-delay: 0.55s">
                            @foreach(['Atendimento Humanizado', 'Profissionais Qualificados', 'Domiciliar'] as $badge)
                            <div class="hero-badge flex items-center gap-2 text-xs font-medium" style="color: var(--color-gray-600); font-family: var(--font-display)">
                                <svg class="h-4 w-4 shrink-0" style="color: var(--color-teal)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $badge }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Logo --}}
                    <div class="order-first w-full animate-fade-in" style="animation-delay: 0.3s">
                        <img src="/logo.jpg" alt="NurseCare" class="w-full max-w-sm lg:max-w-md mx-auto object-contain" />
                    </div>

                </div>
            </div>

        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- APRESENTAÇÃO                                                  --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-10 sm:py-24 overflow-hidden">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center gap-10 lg:flex-row lg:gap-16">

                    {{-- Photo --}}
                    <div class="reveal shrink-0">
                        <div class="relative">
                            <div class="absolute -inset-4 rounded-[2.5rem] opacity-15 blur-2xl" style="background: var(--color-teal)"></div>
                            <div class="absolute -bottom-3 -right-3 h-full w-full rounded-3xl" style="background: var(--color-teal-light); border: 2px solid var(--color-teal-muted)"></div>
                            <img src="/hero.png" alt="Enfermeira NurseCare"
                                 class="relative w-72 sm:w-80 lg:w-96 rounded-3xl shadow-xl object-cover"
                                 style="border: 3px solid var(--color-teal-muted)" />
                        </div>
                    </div>

                    {{-- Text --}}
                    <div class="reveal reveal-delay-2 flex-1 text-center lg:text-left">
                        <p class="flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest mb-4 lg:justify-start justify-center"
                           style="color: var(--color-teal); font-family: var(--font-display)">
                            ★ Cuidado que vai até você
                        </p>
                        <h2 class="text-3xl font-bold sm:text-4xl" style="font-family: var(--font-display); color: var(--color-navy)">
                            Enfermagem Profissional<br/>no Conforto do Seu Lar
                        </h2>
                        <p class="mt-5 text-base sm:text-lg leading-relaxed" style="color: var(--color-gray-600)">
                            Nossa equipe de enfermeiras qualificadas realiza procedimentos com toda segurança, técnica e acolhimento — sem que você precise sair de casa.
                        </p>
                        <ul class="mt-6 space-y-3">
                            @foreach(['Procedimentos realizados por profissionais registrados no COREN', 'Atendimento agendado pelo WhatsApp de forma rápida e simples', 'Cuidado humanizado e individualizado para cada paciente'] as $item)
                            <li class="flex items-start gap-3 text-sm lg:justify-start justify-center" style="color: var(--color-gray-600)">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full" style="background: var(--color-teal-light)">
                                    <svg class="h-3 w-3" style="color: var(--color-teal-dark)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                           class="mt-8 inline-flex items-center gap-2 rounded-full px-6 py-3 text-sm font-bold text-white shadow-md transition-all duration-200 hover:scale-105 active:scale-95"
                           style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark)); font-family: var(--font-display)">
                            <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Agendar pelo WhatsApp
                        </a>
                    </div>

                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- SOBRE                                                        --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-10 sm:py-24">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center reveal">
                    <p class="flex items-center justify-center gap-1.5 text-xs font-semibold uppercase tracking-widest mb-4"
                       style="color: var(--color-teal); font-family: var(--font-display)">
                        ★ Quem somos
                    </p>
                    <h2 class="text-3xl font-bold sm:text-4xl" style="font-family: var(--font-display); color: var(--color-navy)">
                        Enfermagem com Propósito
                    </h2>
                    <p class="mt-5 text-base sm:text-lg leading-relaxed" style="color: var(--color-gray-600)">
                        A Nurse Care Intervenções oferece serviços de enfermagem com foco em atendimento humanizado, segurança do paciente e acompanhamento profissional, levando conforto e cuidado até você.
                    </p>
                </div>

                <div class="mt-14 grid gap-6 sm:grid-cols-3">
                    @foreach([
                        ['Humanizado', 'Cada paciente é tratado com empatia, respeito e atenção individualizada.', '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'],
                        ['Seguro', 'Seguimos rigorosos protocolos de biossegurança e ética profissional.', '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>'],
                        ['Domiciliar', 'Atendimento completo no conforto e privacidade da sua própria casa.', '<path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
                    ] as $i => $item)
                    <div class="reveal reveal-delay-{{ $i + 1 }} rounded-2xl p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-sm"
                         style="background: #F8FAFC; border: 1px solid var(--color-gray-100)">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-xl"
                             style="background: var(--color-gray-100)">
                            <svg class="h-6 w-6" style="color: var(--color-teal)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                {!! $item[2] !!}
                            </svg>
                        </div>
                        <h3 class="text-base font-bold mb-2" style="font-family: var(--font-display); color: var(--color-navy)">{{ $item[0] }}</h3>
                        <p class="text-sm leading-relaxed" style="color: var(--color-gray-600)">{{ $item[1] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- SERVIÇOS                                                     --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section id="servicos" class="py-10 sm:py-24" style="background: var(--color-gray-50)">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-center reveal">
                    <p class="flex items-center justify-center gap-1.5 text-xs font-semibold uppercase tracking-widest mb-4"
                       style="color: var(--color-teal); font-family: var(--font-display)">
                        ★ O que fazemos
                    </p>
                    <h2 class="text-3xl font-bold sm:text-4xl" style="font-family: var(--font-display); color: var(--color-navy)">
                        Nossos Serviços
                    </h2>
                    <p class="mt-3 text-base" style="color: var(--color-gray-600)">
                        Procedimentos realizados com segurança, técnica e cuidado.
                    </p>
                </div>

                <div class="reveal mt-12 relative">
                    {{-- Scroll arrows (mobile only) --}}
                    <button id="proc-left"
                            class="sm:hidden absolute left-1 top-1/2 -translate-y-1/2 z-10 flex h-9 w-9 items-center justify-center rounded-full shadow-lg opacity-0 pointer-events-none transition-opacity duration-200"
                            style="background: var(--color-teal)"
                            onclick="scrollProc(-1)" aria-label="Anterior">
                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button id="proc-right"
                            class="sm:hidden absolute right-1 top-1/2 -translate-y-1/2 z-10 flex h-9 w-9 items-center justify-center rounded-full shadow-lg transition-opacity duration-200"
                            style="background: var(--color-teal)"
                            onclick="scrollProc(1)" aria-label="Próximo">
                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <div id="proc-scroll" class="overflow-x-auto rounded-2xl -mx-2 sm:mx-0" style="scrollbar-width: none">
                        <div class="min-w-[720px] sm:min-w-0">
                            <img src="/procedures.png" alt="Procedimentos NurseCare"
                                 class="w-full h-auto block rounded-2xl shadow-md" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- DIFERENCIAIS                                                  --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-10 sm:py-24" style="background: white">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-center reveal">
                    <p class="flex items-center justify-center gap-1.5 text-xs font-semibold uppercase tracking-widest mb-4"
                       style="color: var(--color-teal); font-family: var(--font-display)">
                        ★ Por que nos escolher
                    </p>
                    <h2 class="text-3xl font-bold sm:text-4xl" style="font-family: var(--font-display); color: var(--color-navy)">
                        O Que Oferecemos
                    </h2>
                </div>

                <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @php
                    $diferenciais = [
                        ['Atendimento Humanizado', 'Tratamos cada paciente com empatia e cuidado individual.', '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'],
                        ['Profissionais Qualificados', 'Equipe habilitada, treinada e com experiência clínica.', '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>'],
                        ['Atendimento Domiciliar', 'Vamos até você — sem deslocamento, sem filas.', '<path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
                        ['Segurança e Ética', 'Seguimos protocolos rigorosos e normas do COREN.', '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>'],
                        ['Agilidade', 'Agendamento rápido para quando você mais precisa.', '<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>'],
                        ['Acompanhamento Individual', 'Monitoramos a evolução de cada paciente de perto.', '<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>'],
                        ['Conforto em Casa', 'Recupere-se no ambiente mais acolhedor: o seu lar.', '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'],
                    ];
                    @endphp

                    @foreach($diferenciais as $i => $d)
                    <div class="reveal reveal-delay-{{ min($i + 1, 7) }} group flex flex-col gap-3 rounded-2xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-sm"
                         style="background: #F8FAFC; border: 1px solid #E8EFF5">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl"
                             style="background: var(--color-gray-100); color: var(--color-teal)">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                {!! $d[2] !!}
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold mb-1" style="font-family: var(--font-display); color: var(--color-navy)">{{ $d[0] }}</h3>
                            <p class="text-xs leading-relaxed" style="color: var(--color-gray-600)">{{ $d[1] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- MEDICAÇÕES                                                   --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section id="medicacoes" class="py-10 sm:py-24 relative overflow-hidden"
                 style="background: var(--color-gray-50)">

            {{-- Very soft teal blobs --}}
            <div class="absolute pointer-events-none"
                 style="top: -200px; right: -200px; width: 700px; height: 700px; background: radial-gradient(circle, rgba(0,181,164,0.06) 0%, transparent 55%)"></div>
            <div class="absolute pointer-events-none"
                 style="bottom: -150px; left: -150px; width: 550px; height: 550px; background: radial-gradient(circle, rgba(26,58,107,0.04) 0%, transparent 60%)"></div>

            {{-- Decorative botanical ring --}}
            <div class="absolute pointer-events-none hidden lg:block"
                 style="right: -60px; top: 50%; transform: translateY(-50%); width: 480px; height: 480px; border-radius: 50%; border: 80px solid rgba(0,181,164,0.05)"></div>

            <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-12 lg:flex-row lg:gap-20 lg:items-start">

                    {{-- Left: editorial panel --}}
                    <div class="reveal lg:w-80 shrink-0 lg:sticky lg:top-28">
                        <p class="flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest mb-5"
                           style="color: var(--color-teal); font-family: var(--font-display)">
                            ★ Tratamentos disponíveis
                        </p>
                        <h2 class="text-3xl font-bold sm:text-4xl leading-tight"
                            style="font-family: var(--font-display); color: var(--color-navy)">
                            Medicações<br/>que <span style="color: var(--color-teal)">Aplicamos</span>
                        </h2>
                        <p class="mt-5 text-sm leading-relaxed" style="color: var(--color-gray-600)">
                            As opções abaixo são <strong class="font-semibold" style="color: var(--color-navy)">apenas uma pequena amostra</strong> das medicações que nossa equipe administra com segurança e técnica profissional.
                        </p>
                        <p class="mt-3 text-sm leading-relaxed" style="color: var(--color-gray-600)">
                            Não encontrou o que procura? Entre em contato — atendemos muitas outras prescrições médicas.
                        </p>

                        <div class="mt-7 flex items-start gap-3 rounded-2xl p-4"
                             style="background: var(--color-teal-light); border: 1px solid var(--color-teal-muted)">
                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full mt-0.5"
                                 style="background: var(--color-teal-muted)">
                                <svg class="h-4 w-4" style="color: var(--color-teal-dark)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16M4 12h16"/>
                                </svg>
                            </div>
                            <p class="text-xs leading-relaxed" style="color: var(--color-teal-dark); font-family: var(--font-display)">
                                Nossa lista é <strong class="font-bold">muito mais ampla.</strong> Consulte-nos para verificar se atendemos a sua necessidade específica.
                            </p>
                        </div>
                    </div>

                    {{-- Right: medication cards --}}
                    <div class="flex-1">

                        @php
                        $medicacoes = [
                            [
                                'nome'      => 'Ferro',
                                'categoria' => 'Suplementação',
                                'descricao' => 'Repõe energia e combate a anemia por deficiência de ferro.',
                                'icon'      => '<rect x="3" y="10" width="18" height="4" rx="2" stroke="currentColor" stroke-width="1.8" fill="none"/><path d="M12 10v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>',
                                'cor'       => '#E03E3E',
                            ],
                            [
                                'nome'      => 'Vitamina C & D',
                                'categoria' => 'Imunidade',
                                'descricao' => 'Imunidade fortalecida e saúde óssea protegida naturalmente.',
                                'icon'      => '<circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8" fill="none"/><path stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M12 2v2M12 20v2M3 12h2M19 12h2M5.64 5.64l1.42 1.42M16.94 16.94l1.42 1.42M5.64 18.36l1.42-1.42M16.94 7.06l1.42-1.42"/>',
                                'cor'       => '#B45309',
                            ],
                            [
                                'nome'      => 'Insulina',
                                'categoria' => 'Diabetes',
                                'descricao' => 'Controle preciso da glicemia com segurança e técnica profissional.',
                                'icon'      => '<circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8" fill="none"/><path d="M9 12h6M12 9v6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
                                'cor'       => '#1D4ED8',
                            ],
                            [
                                'nome'      => 'Mounjaro',
                                'categoria' => 'Emagrecimento',
                                'descricao' => 'Dupla ação: controle glicêmico e redução de peso corporal.',
                                'icon'      => '<path d="M22 12l-8.5 8.5-5-5L2 21M22 12h-7M22 12v7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>',
                                'cor'       => '#047857',
                            ],
                            [
                                'nome'      => 'Antibióticos',
                                'categoria' => 'Em Geral',
                                'descricao' => 'Administração de antibióticos injetáveis com técnica asséptica e segurança clínica.',
                                'icon'      => '<path d="M9 3h6v6h6v6h-6v6H9v-6H3V9h6V3z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>',
                                'cor'       => '#6D28D9',
                            ],
                            [
                                'nome'      => 'Anticoncepcionais',
                                'categoria' => 'Saúde Feminina',
                                'descricao' => 'Aplicação discreta e profissional no conforto do seu lar.',
                                'icon'      => '<path d="M12 3L3 8v5c0 4.5 3.5 8.7 9 11 5.5-2.3 9-6.5 9-11V8L12 3z" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"/>',
                                'cor'       => '#BE185D',
                            ],
                            [
                                'nome'      => 'Soroterapia',
                                'categoria' => 'Hidratação',
                                'descricao' => 'Vitaminas e hidratação direto na corrente sanguínea.',
                                'icon'      => '<path d="M12 2C9 7 5 11 5 15a7 7 0 0 0 14 0c0-4-3.5-7.5-7-13z" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"/>',
                                'cor'       => '#0E7490',
                            ],
                        ];
                        @endphp

                        <div class="grid gap-3 sm:grid-cols-2">
                            @foreach($medicacoes as $i => $med)
                            <div class="reveal reveal-delay-{{ min($i + 1, 6) }} group relative flex items-start gap-4 rounded-2xl bg-white p-5 transition-all duration-300 hover:-translate-y-1 cursor-default {{ $loop->last && count($medicacoes) % 2 !== 0 ? 'sm:col-span-2 sm:max-w-[calc(50%-0.375rem)]' : '' }}"
                                 style="box-shadow: 0 2px 12px rgba(0,0,0,0.05), 0 1px 3px rgba(0,0,0,0.04); border: 1px solid rgba(0,181,164,0.1)">

                                {{-- Hover teal glow (on white cards, very subtle) --}}
                                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"
                                     style="background: radial-gradient(ellipse at 15% 40%, {{ $med['cor'] }}0d, transparent 60%)"></div>

                                {{-- Icon --}}
                                <div class="relative flex h-10 w-10 shrink-0 items-center justify-center rounded-xl transition-transform duration-300 group-hover:scale-110"
                                     style="background: {{ $med['cor'] }}14; color: {{ $med['cor'] }}">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                                        {!! $med['icon'] !!}
                                    </svg>
                                </div>

                                {{-- Text --}}
                                <div class="relative flex-1 min-w-0">
                                    <div class="flex flex-wrap items-center gap-x-2 gap-y-1 mb-1.5">
                                        <span class="text-sm font-bold leading-tight"
                                              style="font-family: var(--font-display); color: var(--color-navy)">{{ $med['nome'] }}</span>
                                        <span class="text-xs font-semibold rounded-full px-2 py-0.5"
                                              style="background: {{ $med['cor'] }}14; color: {{ $med['cor'] }}; font-family: var(--font-display)">
                                            {{ $med['categoria'] }}
                                        </span>
                                    </div>
                                    <p class="text-xs leading-relaxed" style="color: var(--color-gray-600)">
                                        {{ $med['descricao'] }}
                                    </p>
                                </div>
                            </div>
                            @endforeach

                            {{-- "And many more" footer card — solid teal strip --}}
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                               class="reveal reveal-delay-6 group sm:col-span-2 flex items-center justify-center gap-4 rounded-2xl p-5 transition-all duration-200 hover:opacity-90"
                               style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark))">
                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-transform duration-300 group-hover:scale-110"
                                     style="background: rgba(255,255,255,0.15)">
                                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16M4 12h16"/>
                                    </svg>
                                </div>
                                <div class="text-center">
                                    <p class="text-sm font-bold text-white" style="font-family: var(--font-display)">
                                        E muitas outras medicações disponíveis
                                    </p>
                                    <p class="text-xs mt-0.5" style="color: rgba(255,255,255,0.72)">
                                        Consulte nossa equipe pelo WhatsApp para verificar sua prescrição
                                    </p>
                                </div>
                                <svg class="h-5 w-5 shrink-0 text-white transition-transform duration-300 group-hover:translate-x-1"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- COMO FUNCIONA                                                --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-10 sm:py-24" style="background: white">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
                <div class="reveal mb-10">
                    <p class="flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest mb-4"
                       style="color: var(--color-teal); font-family: var(--font-display)">
                        ★ Simples assim
                    </p>
                    <h2 class="text-3xl font-bold sm:text-4xl" style="font-family: var(--font-display); color: var(--color-navy)">
                        Como Funciona
                    </h2>
                </div>

                @php
                $steps = [
                    ['Entre em Contato', 'Mande uma mensagem pelo WhatsApp. Estamos disponíveis para tirar dúvidas e agendar o seu atendimento de forma rápida e sem complicação.'],
                    ['Envie a Prescrição', 'Encaminhe a prescrição médica ou descreva a sua necessidade. Avaliaremos e confirmaremos o procedimento mais indicado para você.'],
                    ['Agendamos', 'Confirmamos data e horário no momento mais conveniente para você, no conforto da sua casa ou local preferido.'],
                    ['Atendimento', 'Nossa enfermeira realiza o procedimento com segurança, técnica e todo o cuidado que você merece.'],
                ];
                @endphp

                <div id="steps-accordion" class="reveal reveal-delay-1 border-t" style="border-color: var(--color-gray-100)">
                    @foreach($steps as $i => $step)
                    <div class="step-item border-b" style="border-color: var(--color-gray-100)">
                        <button
                            class="step-btn flex w-full items-center gap-5 py-5 sm:py-6 text-left"
                            onclick="toggleStep(this)">
                            <span class="text-sm font-bold tabular-nums shrink-0"
                                  style="color: var(--color-gray-100); font-family: var(--font-display); min-width: 2rem">
                                0{{ $i + 1 }}
                            </span>
                            <span class="step-title flex-1 text-base font-bold transition-colors duration-200"
                                  style="font-family: var(--font-display); color: var(--color-navy)">
                                {{ $step[0] }}
                            </span>
                            <svg class="step-arrow h-5 w-5 shrink-0 transition-transform duration-300"
                                 style="color: var(--color-teal)"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="step-body overflow-hidden transition-all duration-300" style="max-height: 0">
                            <p class="pb-5 text-sm leading-relaxed" style="color: var(--color-gray-600); padding-left: 3.25rem">
                                {{ $step[1] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- CTA FINAL                                                    --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-10 sm:py-24" style="background: white">
            <div class="mx-auto max-w-2xl px-4 text-center sm:px-6">
                <div class="reveal rounded-3xl p-10 sm:p-14"
                     style="background: linear-gradient(135deg, var(--color-teal-light), var(--color-navy-light)); border: 1px solid var(--color-teal-muted)">
                    <div class="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-2xl shadow-md"
                         style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark))">
                        <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-extrabold sm:text-3xl" style="font-family: var(--font-display); color: var(--color-navy)">
                        Pronto para agendar?
                    </h2>
                    <p class="mt-3 text-base" style="color: var(--color-gray-600)">
                        Entre em contato agora pelo WhatsApp. Atendimento rápido e humanizado.
                    </p>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                       class="pulse-ring mt-8 inline-flex items-center gap-3 rounded-full px-10 py-4 text-base font-bold text-white shadow-xl transition-all duration-200 hover:scale-105 active:scale-95"
                       style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark)); font-family: var(--font-display)">
                        <svg class="h-5 w-5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Falar no WhatsApp Agora
                    </a>
                </div>
            </div>
        </section>

    </main>

    {{-- ═══════════════════════════════════════════════════════════ --}}
    {{-- FOOTER                                                       --}}
    {{-- ═══════════════════════════════════════════════════════════ --}}
    <footer class="py-10" style="background: var(--color-navy-dark)">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center gap-6 text-center sm:flex-row sm:justify-between sm:text-left">
                <div class="flex items-center gap-3">
                    <img src="/logo.jpg" alt="NurseCare" class="h-10 w-auto rounded-lg object-contain" />
                    <div>
                        <p class="text-sm font-bold text-white" style="font-family: var(--font-display)">NurseCare</p>
                        <p class="text-xs" style="color: rgba(255,255,255,0.45)">Intervenções de Enfermagem</p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-1 sm:items-end">
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                       class="text-sm font-medium transition-colors hover:opacity-80"
                       style="color: var(--color-teal); font-family: var(--font-display)">
                        +55 (38) 99864-5256
                    </a>
                    <p class="text-xs" style="color: rgba(255,255,255,0.3)">
                        &copy; {{ date('Y') }} NurseCare. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- ═══════════════════════════════════════════════════════════ --}}
    {{-- FLOATING WHATSAPP BUTTON                                     --}}
    {{-- ═══════════════════════════════════════════════════════════ --}}
    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
       id="floating-wa"
       class="fixed bottom-5 right-5 z-50 flex h-14 w-14 items-center justify-center rounded-full shadow-2xl transition-all duration-300 hover:scale-110 active:scale-95 sm:h-16 sm:w-16 opacity-0 pointer-events-none"
       style="background: #25D366"
       aria-label="Falar no WhatsApp">
        <svg class="h-7 w-7 text-white sm:h-8 sm:w-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        <span class="absolute inset-0 rounded-full animate-ping opacity-30" style="background: #25D366"></span>
    </a>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) { e.target.classList.add('visible'); }
            });
        }, { threshold: 0.12 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.style.boxShadow = window.scrollY > 20
                ? '0 2px 20px rgba(26,58,107,0.12)'
                : 'none';
        }, { passive: true });

        const floatingWa = document.getElementById('floating-wa');
        const heroCta = document.querySelector('.pulse-ring');
        if (floatingWa && heroCta) {
            const ctaObserver = new IntersectionObserver((entries) => {
                const visible = entries[0].isIntersecting;
                floatingWa.style.opacity = visible ? '0' : '1';
                floatingWa.style.pointerEvents = visible ? 'none' : 'auto';
            }, { threshold: 0.5 });
            ctaObserver.observe(heroCta);
        }

        function toggleStep(btn) {
            const item = btn.closest('.step-item');
            const body = item.querySelector('.step-body');
            const arrow = btn.querySelector('.step-arrow');
            const title = btn.querySelector('.step-title');
            const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';

            document.querySelectorAll('.step-body').forEach(b => b.style.maxHeight = '0px');
            document.querySelectorAll('.step-arrow').forEach(a => a.style.transform = '');
            document.querySelectorAll('.step-title').forEach(t => t.style.color = 'var(--color-navy)');

            if (!isOpen) {
                body.style.maxHeight = body.scrollHeight + 'px';
                arrow.style.transform = 'rotate(180deg)';
                title.style.color = 'var(--color-teal)';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const first = document.querySelector('.step-btn');
            if (first) toggleStep(first);

            const scroll = document.getElementById('proc-scroll');
            const btnLeft = document.getElementById('proc-left');
            const btnRight = document.getElementById('proc-right');

            function updateProcArrows() {
                if (!scroll || !btnLeft || !btnRight) return;
                const atStart = scroll.scrollLeft <= 2;
                const atEnd = scroll.scrollLeft + scroll.clientWidth >= scroll.scrollWidth - 2;
                btnLeft.style.opacity = atStart ? '0' : '1';
                btnLeft.style.pointerEvents = atStart ? 'none' : 'auto';
                btnRight.style.opacity = atEnd ? '0' : '1';
                btnRight.style.pointerEvents = atEnd ? 'none' : 'auto';
            }

            if (scroll) {
                scroll.addEventListener('scroll', updateProcArrows, { passive: true });
                updateProcArrows();
            }
        });

        function scrollProc(dir) {
            const scroll = document.getElementById('proc-scroll');
            if (scroll) scroll.scrollBy({ left: dir * 220, behavior: 'smooth' });
        }
    </script>

</body>
</html>
