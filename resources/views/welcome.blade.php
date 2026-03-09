<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cibersafe · Agetic</title>

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

        <div class="relative mx-auto max-w-6xl px-4 py-14">
            <header class="flex items-center justify-between gap-6">
                <div class="inline-flex items-center gap-3">
                    <span class="h-10 w-10 grid place-items-center rounded-xl bg-white/5 border border-white/10">
                        <svg viewBox="0 0 24 24" class="h-5 w-5 text-cyan-300">
                            <path fill="currentColor" d="M12 2l8 4v6c0 5-3.4 9.8-8 10-4.6-.2-8-5-8-10V6l8-4zm0 2.2L6 7.1V12c0 3.9 2.5 7.9 6 8 3.5-.1 6-4.1 6-8V7.1l-6-2.9z"/>
                            <path fill="currentColor" d="M11 7h2v6h-2zM11 15h2v2h-2z" opacity=".9"/>
                        </svg>
                    </span>
                    <div class="leading-tight">
                        <div class="text-sm font-semibold tracking-wide">Cibersafe</div>
                        <div class="text-[11px] text-slate-400">Agetic · Bolivia</div>
                    </div>
                </div>

                <div>
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 text-sm bg-white/5 border border-white/10 hover:bg-white/10 transition">
                            Ir al panel
                            <span class="text-slate-400">→</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 text-sm bg-gradient-to-r from-cyan-400/90 to-fuchsia-500/90 text-slate-950 font-semibold hover:opacity-95 transition">
                            Iniciar sesión
                            <span class="text-slate-950/60">→</span>
                        </a>
                    @endauth
                </div>
            </header>

            <main class="mt-12 grid lg:grid-cols-12 gap-6 items-start">
                <section class="lg:col-span-7 rounded-3xl border border-white/10 bg-white/[0.04] p-8 md:p-10 shadow-[0_0_0_1px_rgba(255,255,255,0.03),0_30px_80px_-40px_rgba(0,0,0,0.9)] relative overflow-hidden">
                    <div class="absolute -top-24 -right-24 h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl"></div>
                    <div class="absolute -bottom-24 -left-24 h-64 w-64 rounded-full bg-fuchsia-500/10 blur-3xl"></div>
                    <div class="absolute inset-0 opacity-[0.08] bg-grid"></div>
                    <div class="relative">
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-300">
                            <span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_0_4px_rgba(16,185,129,0.10)]"></span>
                            Plataforma operativa
                        </div>

                        <h1 class="mt-5 text-3xl md:text-4xl font-semibold tracking-tight">
                            Control nacional de ataques, coordinación y respuesta
                        </h1>
                        <p class="mt-4 text-sm text-slate-300/90 max-w-prose">
                            Visualización táctica para monitoreo (SOC), inteligencia e indicadores. Acceso por niveles para proteger información sensible.
                        </p>

                        <div class="mt-7 grid sm:grid-cols-2 gap-4 text-xs">
                            <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                                <div class="text-slate-300 font-medium">Acceso por roles</div>
                                <div class="mt-1 text-slate-500">Viewer · Operator · Analyst · Admin · Super Admin</div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                                <div class="text-slate-300 font-medium">Sesiones</div>
                                <div class="mt-1 text-slate-500">Persistidas en BD · CSRF · Regeneración</div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                                <div class="text-slate-300 font-medium">Anti-fuerza bruta</div>
                                <div class="mt-1 text-slate-500">Rate limit en login</div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                                <div class="text-slate-300 font-medium">Auditoría</div>
                                <div class="mt-1 text-slate-500">Lista para extender a bitácora</div>
                            </div>
                        </div>
                    </div>
                </section>

                <aside class="lg:col-span-5 rounded-3xl border border-white/10 bg-white/[0.04] p-8 md:p-10">
                    <h2 class="text-lg font-semibold">Estado rápido</h2>
                    <p class="mt-2 text-sm text-slate-400">
                        Demo UI. Conecta telemetría real (SIEM/EDR/NetFlow) en siguientes iteraciones.
                    </p>

                    <div class="mt-6 rounded-2xl border border-white/10 bg-black/20 p-5">
                        <div class="flex items-center justify-between">
                            <div class="text-xs text-slate-400">Secciones protegidas</div>
                            <div class="text-xs text-slate-500">por rol</div>
                        </div>
                        <div class="mt-4 space-y-3 text-sm">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-200">SOC</div>
                                <div class="text-xs text-cyan-300">Operador+</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-slate-200">Inteligencia</div>
                                <div class="text-xs text-fuchsia-300">Analista+</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-slate-200">Administración</div>
                                <div class="text-xs text-emerald-300">Admin+</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-xs text-slate-500">
                        Uso interno. Actividades sujetas a monitoreo.
                    </div>
                </aside>
            </main>
        </div>
    </body>
</html>

