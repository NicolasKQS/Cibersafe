@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ $title ?? config('app.name', 'Cibersafe') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <div class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -inset-40 opacity-35 blur-3xl bg-[radial-gradient(circle_at_20%_10%,theme(colors.cyan.400),transparent_40%),radial-gradient(circle_at_80%_20%,theme(colors.fuchsia.500),transparent_35%),radial-gradient(circle_at_40%_80%,theme(colors.emerald.400),transparent_42%)] animate-aurora"></div>
            <div class="absolute inset-0 opacity-[0.10] bg-grid"></div>
            <div class="absolute inset-0 opacity-[0.12] bg-noise"></div>
            <div class="absolute -top-24 left-0 right-0 h-24 bg-[radial-gradient(ellipse_at_center,theme(colors.cyan.400)/15%,transparent_65%)]"></div>
        </div>

        <div class="relative">
            @auth
                <header class="sticky top-0 z-40 border-b border-white/10 bg-slate-950/55 backdrop-blur supports-[backdrop-filter]:bg-slate-950/45">
                    <div class="mx-auto max-w-6xl px-4">
                        <div class="flex items-center justify-between py-3">
                            <a href="{{ route('dashboard') }}" class="group inline-flex items-center gap-3">
                                <span class="h-9 w-9 grid place-items-center rounded-xl bg-white/5 border border-white/10 shadow-[0_0_0_1px_rgba(255,255,255,0.02)] group-hover:shadow-[0_0_0_1px_rgba(34,211,238,0.35)] transition">
                                    <svg viewBox="0 0 24 24" class="h-5 w-5 text-cyan-300">
                                        <path fill="currentColor" d="M12 2l8 4v6c0 5-3.4 9.8-8 10-4.6-.2-8-5-8-10V6l8-4zm0 2.2L6 7.1V12c0 3.9 2.5 7.9 6 8 3.5-.1 6-4.1 6-8V7.1l-6-2.9z"/>
                                        <path fill="currentColor" d="M11 7h2v6h-2zM11 15h2v2h-2z" opacity=".9"/>
                                    </svg>
                                </span>
                                <div class="leading-tight">
                                    <div class="text-sm font-semibold tracking-wide">Cibersafe</div>
                                    <div class="text-[11px] text-slate-400">Agetic · Bolivia</div>
                                </div>
                            </a>

                            <nav class="hidden md:flex items-center gap-1 text-sm">
                                <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/10 transition">Panel</a>

                                @php($role = (string) (auth()->user()->role?->value ?? auth()->user()->role))

                                @if (in_array($role, ['super_admin', 'admin', 'analyst', 'operator'], true))
                                    <a href="{{ route('soc') }}" class="px-3 py-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/10 transition">SOC</a>
                                @endif

                                @if (in_array($role, ['super_admin', 'admin', 'analyst'], true))
                                    <a href="{{ route('intel') }}" class="px-3 py-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/10 transition">Inteligencia</a>
                                @endif

                                @if (in_array($role, ['super_admin', 'admin'], true))
                                    <a href="{{ route('admin') }}" class="px-3 py-2 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/10 transition">Administración</a>
                                @endif
                            </nav>

                            <div class="flex items-center gap-3">
                                <div class="hidden sm:block text-right">
                                    <div class="text-sm font-medium">{{ auth()->user()->name }}</div>
                                    <div class="text-[11px] text-slate-400">{{ auth()->user()->role?->label() ?? (string) auth()->user()->role }}</div>
                                </div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="inline-flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-white/5 border border-white/10 hover:border-cyan-400/40 hover:bg-white/10 transition">
                                        <span class="hidden sm:inline">Salir</span>
                                        <svg viewBox="0 0 24 24" class="h-4 w-4 text-slate-300">
                                            <path fill="currentColor" d="M10 17v-2h4v-6h-4V7l-5 5 5 5zm9 4H12v-2h7V5h-7V3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
            @endauth

            <main class="mx-auto max-w-6xl px-4 py-10">
                {{ $slot }}
            </main>

            <footer class="mx-auto max-w-6xl px-4 pb-10 text-xs text-slate-500">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 border-t border-white/10 pt-6">
                    <div>© {{ date('Y') }} Agetic · Cibersafe</div>
                    <div class="text-slate-600">Uso interno. Registro y monitoreo sujetos a auditoría.</div>
                </div>
            </footer>
        </div>
    </body>
</html>

