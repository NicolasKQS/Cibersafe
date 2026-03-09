<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Acceso denegado · Cibersafe</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <div class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -inset-40 opacity-35 blur-3xl bg-[radial-gradient(circle_at_20%_10%,theme(colors.cyan.400),transparent_40%),radial-gradient(circle_at_80%_20%,theme(colors.fuchsia.500),transparent_35%),radial-gradient(circle_at_40%_80%,theme(colors.emerald.400),transparent_42%)] animate-aurora"></div>
            <div class="absolute inset-0 opacity-[0.10] bg-grid"></div>
            <div class="absolute inset-0 opacity-[0.12] bg-noise"></div>
        </div>

        <div class="relative mx-auto max-w-3xl px-4 py-20">
            <div class="rounded-3xl border border-white/10 bg-white/[0.04] p-8 md:p-10 shadow-[0_0_0_1px_rgba(255,255,255,0.03),0_30px_80px_-40px_rgba(0,0,0,0.9)] overflow-hidden relative">
                <div class="absolute -top-24 -right-24 h-64 w-64 rounded-full bg-rose-500/10 blur-3xl"></div>
                <div class="absolute inset-0 opacity-[0.08] bg-grid"></div>

                <div class="relative">
                    <div class="text-xs text-slate-400">Error</div>
                    <h1 class="mt-2 text-3xl font-semibold tracking-tight">403 · Acceso denegado</h1>
                    <p class="mt-3 text-sm text-slate-300/90">
                        Tu sesión es válida, pero tu rol no tiene permisos para esta sección.
                    </p>

                    <div class="mt-7 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm bg-white/5 border border-white/10 hover:bg-white/10 transition">
                            Volver al panel
                            <span class="text-slate-400">→</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm bg-rose-500/10 border border-rose-400/20 hover:bg-rose-500/15 transition">
                                Cerrar sesión
                            </button>
                        </form>
                    </div>

                    <div class="mt-8 text-xs text-slate-500">
                        Si crees que es un error, solicita permisos a Administración.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

