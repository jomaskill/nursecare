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
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(12px);">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between sm:h-20">
                <a href="#" class="flex items-center gap-2">
                    <img src="/logo.jpg" alt="NurseCare" class="h-10 w-auto sm:h-12 object-contain" />
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
        <section class="relative min-h-screen flex items-center overflow-hidden pt-20">
            {{-- Background gradient --}}
            <div class="absolute inset-0" style="background: linear-gradient(135deg, var(--color-navy-dark) 0%, var(--color-navy) 50%, #1a4f7a 100%)"></div>

            {{-- Decorative circles --}}
            <div class="absolute top-0 right-0 h-96 w-96 rounded-full opacity-10 -translate-y-1/2 translate-x-1/2"
                 style="background: radial-gradient(circle, var(--color-teal), transparent)"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full opacity-10 translate-y-1/2 -translate-x-1/2"
                 style="background: radial-gradient(circle, var(--color-teal), transparent)"></div>

            {{-- Subtle grid pattern --}}
            <div class="absolute inset-0 opacity-5"
                 style="background-image: radial-gradient(circle, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 32px 32px;"></div>

            <div class="relative mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8 sm:py-32">
                <div class="flex flex-col items-center gap-10 text-center lg:flex-row lg:text-left lg:gap-16">

                    {{-- Text content --}}
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-2 rounded-full border px-4 py-1.5 text-xs font-semibold uppercase tracking-widest mb-6 animate-fade-in"
                             style="border-color: rgba(0,181,164,0.4); color: var(--color-teal-muted); background: rgba(0,181,164,0.08); font-family: var(--font-display)">
                            <span class="h-1.5 w-1.5 rounded-full animate-pulse" style="background: var(--color-teal)"></span>
                            Intervenções de Enfermagem
                        </div>

                        <h1 class="animate-fade-up text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl"
                            style="font-family: var(--font-display); animation-delay: 0.1s">
                            Cuidado Profissional<br/>
                            <span style="color: var(--color-teal)">no Conforto</span><br/>
                            da Sua Casa
                        </h1>

                        <p class="mt-6 text-base leading-relaxed sm:text-lg animate-fade-up"
                           style="color: rgba(255,255,255,0.75); animation-delay: 0.25s; max-width: 520px">
                            A Nurse Care Intervenções proporciona assistência de enfermagem humanizada, levando conforto e atendimento profissional diretamente à sua residência.
                        </p>

                        <div class="mt-8 flex flex-col sm:flex-row items-center gap-4 animate-fade-up lg:justify-start justify-center"
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
                               style="color: rgba(255,255,255,0.7); font-family: var(--font-display)">
                                Ver serviços
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                        </div>

                        {{-- Trust badges --}}
                        <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-6 animate-fade-up" style="animation-delay: 0.55s">
                            @foreach(['Atendimento Humanizado', 'Profissionais Qualificados', 'Domiciliar'] as $badge)
                            <div class="flex items-center gap-2 text-xs font-medium" style="color: rgba(255,255,255,0.6); font-family: var(--font-display)">
                                <svg class="h-4 w-4 shrink-0" style="color: var(--color-teal)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $badge }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Logo card --}}
                    <div class="hidden lg:flex flex-col items-center animate-fade-in" style="animation-delay: 0.3s">
                        <div class="relative">
                            <div class="absolute inset-0 rounded-3xl blur-2xl opacity-30" style="background: var(--color-teal)"></div>
                            <div class="relative rounded-3xl p-8 shadow-2xl" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12); backdrop-filter: blur(20px)">
                                <img src="/logo.jpg" alt="NurseCare" class="w-64 object-contain rounded-2xl" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Wave bottom --}}
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M0 60L1440 60L1440 20C1200 60 960 0 720 20C480 40 240 0 0 20L0 60Z" fill="white"/>
                </svg>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- SOBRE                                                        --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-16 sm:py-24">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center reveal">
                    <span class="inline-block rounded-full px-4 py-1 text-xs font-semibold uppercase tracking-widest mb-4"
                          style="background: var(--color-teal-light); color: var(--color-teal-dark); font-family: var(--font-display)">
                        Quem somos
                    </span>
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
                    <div class="reveal reveal-delay-{{ $i + 1 }} rounded-2xl p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                         style="background: var(--color-teal-light); border: 1px solid var(--color-teal-muted)">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-2xl"
                             style="background: var(--color-teal)">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
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
        <section id="servicos" class="py-16 sm:py-24" style="background: var(--color-gray-50)">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-center reveal">
                    <span class="inline-block rounded-full px-4 py-1 text-xs font-semibold uppercase tracking-widest mb-4"
                          style="background: var(--color-navy-light); color: var(--color-navy); font-family: var(--font-display)">
                        O que fazemos
                    </span>
                    <h2 class="text-3xl font-bold sm:text-4xl" style="font-family: var(--font-display); color: var(--color-navy)">
                        Nossos Serviços
                    </h2>
                    <p class="mt-3 text-base" style="color: var(--color-gray-600)">
                        Procedimentos realizados com segurança, técnica e cuidado.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-2">

                    {{-- Serviço 1: Administração de Medicamentos --}}
                    <div class="reveal reveal-delay-1 rounded-3xl overflow-hidden shadow-sm border transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                         style="border-color: var(--color-teal-muted); background: white">
                        <div class="p-1.5" style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark))">
                            <div class="flex items-center gap-3 px-5 py-3">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/20">
                                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-white" style="font-family: var(--font-display)">
                                    Administração de Medicamentos
                                </h3>
                            </div>
                        </div>

                        <div class="p-6 sm:p-8">
                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-wider mb-3" style="color: var(--color-teal-dark); font-family: var(--font-display)">
                                        Vias Administradas
                                    </p>
                                    <ul class="space-y-2">
                                        @foreach(['Intramuscular (IM)', 'Intravenosa (EV)', 'Subcutânea (SC)', 'Oral'] as $via)
                                        <li class="flex items-center gap-2 text-sm" style="color: var(--color-gray-800)">
                                            <span class="h-1.5 w-1.5 shrink-0 rounded-full" style="background: var(--color-teal)"></span>
                                            {{ $via }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div>
                                    <p class="text-xs font-bold uppercase tracking-wider mb-3" style="color: var(--color-teal-dark); font-family: var(--font-display)">
                                        Exemplos
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach(['Antibióticos', 'Anticoncepcionais', 'Insulinas', 'Analgésicos', 'Vitaminas', 'Prescrições'] as $med)
                                        <span class="rounded-full px-3 py-1 text-xs font-medium"
                                              style="background: var(--color-teal-light); color: var(--color-teal-dark); border: 1px solid var(--color-teal-muted)">
                                            {{ $med }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Serviço 2: Monitoramento de Sinais Vitais --}}
                    <div class="reveal reveal-delay-2 rounded-3xl overflow-hidden shadow-sm border transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                         style="border-color: rgba(26,58,107,0.15); background: white">
                        <div class="p-1.5" style="background: linear-gradient(135deg, var(--color-navy), var(--color-navy-dark))">
                            <div class="flex items-center gap-3 px-5 py-3">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/20">
                                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-white" style="font-family: var(--font-display)">
                                    Monitoramento de Sinais Vitais
                                </h3>
                            </div>
                        </div>

                        <div class="p-6 sm:p-8">
                            <p class="text-sm mb-5" style="color: var(--color-gray-600)">
                                Acompanhamento dos dados para controle e prevenção.
                            </p>
                            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
                                @foreach([
                                    ['Pressão Arterial', '<path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>'],
                                    ['Freq. Cardíaca', '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'],
                                    ['Saturação', '<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>'],
                                    ['Temperatura', '<path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l-2 2M9 19l2 2m-2-2h4m-4-13h4m0 0l2-2m-2 2V19m0-13a2 2 0 110 4 2 2 0 010-4z"/>'],
                                    ['Glicemia Cap.', '<path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>'],
                                ] as $sinal)
                                <div class="flex flex-col items-center gap-2 rounded-2xl p-4 text-center"
                                     style="background: var(--color-navy-light)">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-xl"
                                         style="background: var(--color-navy)">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            {!! $sinal[1] !!}
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold leading-tight" style="color: var(--color-navy); font-family: var(--font-display)">
                                        {{ $sinal[0] }}
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- DIFERENCIAIS                                                  --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-16 sm:py-24" style="background: white">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-center reveal">
                    <span class="inline-block rounded-full px-4 py-1 text-xs font-semibold uppercase tracking-widest mb-4"
                          style="background: var(--color-teal-light); color: var(--color-teal-dark); font-family: var(--font-display)">
                        Por que nos escolher
                    </span>
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
                    <div class="reveal reveal-delay-{{ min($i + 1, 7) }} group flex flex-col gap-3 rounded-2xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
                         style="background: var(--color-gray-50); border: 1px solid var(--color-gray-100)">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl transition-colors duration-200"
                             style="background: var(--color-teal-light); color: var(--color-teal)">
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
        {{-- COMO FUNCIONA                                                --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-16 sm:py-24" style="background: linear-gradient(135deg, var(--color-navy-dark) 0%, var(--color-navy) 100%)">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-center reveal">
                    <span class="inline-block rounded-full px-4 py-1 text-xs font-semibold uppercase tracking-widest mb-4"
                          style="background: rgba(0,181,164,0.15); color: var(--color-teal-muted); font-family: var(--font-display)">
                        Simples assim
                    </span>
                    <h2 class="text-3xl font-bold text-white sm:text-4xl" style="font-family: var(--font-display)">
                        Como Funciona
                    </h2>
                    <p class="mt-3 text-sm" style="color: rgba(255,255,255,0.6)">
                        Processo rápido, fácil e pensado para o seu conforto.
                    </p>
                </div>

                <div class="mt-14 relative">
                    {{-- Connector line (desktop) --}}
                    <div class="absolute top-10 left-16 right-16 h-px hidden lg:block"
                         style="background: linear-gradient(to right, var(--color-teal), rgba(0,181,164,0.2))"></div>

                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach([
                            ['Entre em Contato', 'Mande uma mensagem pelo WhatsApp a qualquer momento.'],
                            ['Envie a Prescrição', 'Encaminhe a prescrição médica ou descreva sua necessidade.'],
                            ['Agendamos', 'Confirmamos o horário mais conveniente para você.'],
                            ['Atendimento', 'Realizamos o procedimento com segurança no seu domicílio.'],
                        ] as $i => $step)
                        <div class="reveal reveal-delay-{{ $i + 1 }} flex flex-col items-center text-center">
                            <div class="relative mb-5 flex h-20 w-20 items-center justify-center rounded-2xl shadow-lg"
                                 style="background: linear-gradient(135deg, var(--color-teal), var(--color-teal-dark))">
                                <span class="text-2xl font-extrabold text-white" style="font-family: var(--font-display)">{{ $i + 1 }}</span>
                                <div class="absolute -top-2 -right-2 h-5 w-5 rounded-full border-2 border-white"
                                     style="background: var(--color-teal)"></div>
                            </div>
                            <h3 class="text-base font-bold text-white mb-2" style="font-family: var(--font-display)">{{ $step[0] }}</h3>
                            <p class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.65)">{{ $step[1] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════════════════════════ --}}
        {{-- CTA FINAL                                                    --}}
        {{-- ═══════════════════════════════════════════════════════════ --}}
        <section class="py-16 sm:py-24" style="background: white">
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
       class="fixed bottom-5 right-5 z-50 flex h-14 w-14 items-center justify-center rounded-full shadow-2xl transition-all duration-300 hover:scale-110 active:scale-95 sm:h-16 sm:w-16"
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
    </script>

</body>
</html>
