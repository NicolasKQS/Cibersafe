<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Cibersafe · Acceso</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased overflow-x-hidden">
        <div class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -inset-40 opacity-40 blur-3xl bg-[radial-gradient(circle_at_18%_18%,theme(colors.cyan.400),transparent_40%),radial-gradient(circle_at_86%_16%,theme(colors.fuchsia.500),transparent_35%),radial-gradient(circle_at_44%_86%,theme(colors.emerald.400),transparent_42%)] animate-aurora"></div>
            <div class="absolute inset-0 opacity-[0.12] bg-grid"></div>
            <div class="absolute inset-0 opacity-[0.14] bg-noise"></div>
            <div class="absolute left-1/2 top-0 -translate-x-1/2 h-[70vh] w-[80vw] rounded-[999px] bg-[radial-gradient(closest-side,theme(colors.cyan.400)/12%,transparent)] blur-2xl"></div>
            <div class="absolute inset-x-0 top-0 h-56 bg-[linear-gradient(to_bottom,rgba(2,6,23,0.92),transparent)]"></div>
        </div>

        <div class="relative mx-auto max-w-6xl px-4 py-10 md:py-16">
            <div class="flex items-center justify-between gap-6">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 group">
                    <span class="h-10 w-10 grid place-items-center rounded-xl bg-white/5 border border-white/10 group-hover:shadow-[0_0_0_1px_rgba(34,211,238,0.35)] transition">
                        <svg viewBox="0 0 24 24" class="h-5 w-5 text-cyan-300">
                            <path fill="currentColor" d="M12 2l8 4v6c0 5-3.4 9.8-8 10-4.6-.2-8-5-8-10V6l8-4zm0 2.2L6 7.1V12c0 3.9 2.5 7.9 6 8 3.5-.1 6-4.1 6-8V7.1l-6-2.9z"/>
                            <path fill="currentColor" d="M11 7h2v6h-2zM11 15h2v2h-2z" opacity=".9"/>
                        </svg>
                    </span>
                    <div class="leading-tight">
                        <div class="text-sm font-semibold tracking-wide">Cibersafe</div>
                        <div class="text-[11px] text-slate-400">Control nacional de ataques · Agetic · Bolivia</div>
                    </div>
                </a>

                <div class="hidden md:flex items-center gap-2 text-xs text-slate-400">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-3 py-1.5">
                        <span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_0_4px_rgba(16,185,129,0.12)]"></span>
                        Sesión cifrada · Auditoría habilitada
                    </span>
                </div>
            </div>

            <div class="mt-10 grid md:grid-cols-2 gap-8 items-stretch">
                <section class="rounded-3xl border border-white/10 bg-white/[0.04] p-7 md:p-10 shadow-[0_0_0_1px_rgba(255,255,255,0.03),0_20px_60px_-30px_rgba(0,0,0,0.9)] relative overflow-hidden">
                    <div class="absolute -top-24 -right-24 h-56 w-56 rounded-full bg-cyan-400/10 blur-2xl"></div>
                    <div class="absolute -bottom-24 -left-24 h-56 w-56 rounded-full bg-fuchsia-500/10 blur-2xl"></div>
                    <div class="absolute inset-0 opacity-[0.08] bg-grid"></div>
                    <div class="relative">
                        <h1 class="text-2xl md:text-3xl font-semibold tracking-tight">Acceso al Centro Nacional</h1>
                        <p class="mt-2 text-sm text-slate-300/90 max-w-prose">
                            Inicia sesión para monitoreo, correlación y respuesta coordinada. El acceso está segmentado por nivel de rol.
                        </p>

                        <div class="mt-7 grid grid-cols-2 gap-3 text-xs">
                            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4 hover:bg-white/[0.06] transition">
                                <div class="text-slate-300 font-medium">Detección</div>
                                <div class="mt-1 text-slate-400">Telemetría + reglas</div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4 hover:bg-white/[0.06] transition">
                                <div class="text-slate-300 font-medium">Contención</div>
                                <div class="mt-1 text-slate-400">Playbooks</div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4 hover:bg-white/[0.06] transition">
                                <div class="text-slate-300 font-medium">Inteligencia</div>
                                <div class="mt-1 text-slate-400">IoCs + TTPs</div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4 hover:bg-white/[0.06] transition">
                                <div class="text-slate-300 font-medium">Auditoría</div>
                                <div class="mt-1 text-slate-400">Trazabilidad</div>
                            </div>
                        </div>

                        <div class="mt-8 rounded-2xl border border-white/10 bg-black/20 p-4 text-xs text-slate-300/90">
                            <div class="flex items-start gap-3">
                                <svg viewBox="0 0 24 24" class="h-5 w-5 text-cyan-300 mt-0.5">
                                    <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7v4.8l-1.4 2.8A1 1 0 0 0 4.5 18h15a1 1 0 0 0 .9-1.4L19 13.8V9a7 7 0 0 0-7-7zm0 20a2.5 2.5 0 0 0 2.45-2h-4.9A2.5 2.5 0 0 0 12 22z"/>
                                </svg>
                                <div>
                                    <div class="font-medium text-slate-200">Aviso</div>
                                    <div class="mt-1 text-slate-400">
                                        Todos los accesos y acciones se registran. Múltiples intentos fallidos activan control anti-fuerza bruta.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="rounded-3xl border border-white/10 bg-white/[0.04] p-7 md:p-10 shadow-[0_0_0_1px_rgba(255,255,255,0.03),0_20px_60px_-30px_rgba(0,0,0,0.9)]">
                    <h2 class="text-lg font-semibold">Iniciar sesión</h2>
                    <p class="mt-1 text-sm text-slate-400">Credenciales institucionales.</p>

                    @if ($errors->any())
                        <div class="mt-5 rounded-2xl border border-rose-400/20 bg-rose-500/10 px-4 py-3 text-sm text-rose-200">
                            <div class="font-medium">No se pudo iniciar sesión</div>
                            <ul class="mt-1 list-disc pl-5 text-rose-200/90">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.store') }}" class="mt-6 space-y-4" data-login-form>
                        @csrf
                        <div>
                            <label for="email" class="text-xs font-medium text-slate-300">Correo</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required
                                value="{{ old('email') }}"
                                class="mt-1 w-full rounded-2xl border border-white/10 bg-black/20 px-4 py-3 text-sm placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-400/40 focus:border-cyan-400/30 transition"
                                placeholder="usuario@agetic.gob.bo"
                            />
                        </div>

                        <div>
                            <label for="password" class="text-xs font-medium text-slate-300">Contraseña</label>
                            <div class="mt-1 relative">
                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                    required
                                    class="w-full rounded-2xl border border-white/10 bg-black/20 px-4 py-3 pr-12 text-sm placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-400/40 focus:border-cyan-400/30 transition"
                                    placeholder="••••••••••••"
                                />
                                <button
                                    type="button"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-xs text-slate-300 hover:bg-white/10 transition"
                                    data-toggle-password
                                    aria-label="Mostrar u ocultar contraseña"
                                >
                                    Ver
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <label class="inline-flex items-center gap-2 text-sm text-slate-300 select-none">
                                <input type="checkbox" name="remember" value="1" class="h-4 w-4 rounded border-white/20 bg-black/30 text-cyan-400 focus:ring-cyan-400/40" />
                                Recordarme
                            </label>

                            <div class="text-xs text-slate-500">
                                Recomendado: MFA institucional
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="group w-full rounded-2xl bg-gradient-to-r from-cyan-400/90 to-fuchsia-500/90 px-4 py-3 text-sm font-semibold text-slate-950 shadow-[0_10px_30px_-15px_rgba(34,211,238,0.6)] hover:shadow-[0_12px_36px_-16px_rgba(217,70,239,0.55)] transition"
                            data-login-submit
                        >
                            <span class="inline-flex items-center justify-center gap-2">
                                Acceder
                                <span class="inline-block h-2 w-2 rounded-full bg-slate-950/20 group-hover:bg-slate-950/35 transition"></span>
                            </span>
                        </button>

                        <div class="pt-4 text-xs text-slate-500">
                            Si no tienes acceso, solicita alta por administración SOC.
                        </div>
                    </form>
                </section>
            </div>

            <div class="mt-10 text-center text-xs text-slate-600">
                © {{ date('Y') }} Agetic · Cibersafe
            </div>
        </div>
    </body>
</html>

