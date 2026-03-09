<x-layouts.app :title="'Cibersafe · Panel'">
    <div class="flex flex-col gap-8">
        <section class="rounded-3xl border border-white/10 bg-white/[0.04] p-7 md:p-10 shadow-[0_0_0_1px_rgba(255,255,255,0.03),0_30px_80px_-40px_rgba(0,0,0,0.9)] overflow-hidden relative">
            <div class="absolute -top-28 -right-28 h-72 w-72 rounded-full bg-cyan-400/10 blur-3xl"></div>
            <div class="absolute -bottom-28 -left-28 h-72 w-72 rounded-full bg-fuchsia-500/10 blur-3xl"></div>
            <div class="absolute inset-0 opacity-[0.09] bg-grid"></div>

            <div class="relative">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-slate-300">
                            <span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_0_4px_rgba(16,185,129,0.10)]"></span>
                            Operación en vivo
                        </div>
                        <h1 class="mt-4 text-2xl md:text-3xl font-semibold tracking-tight">Panel Nacional de Ciberseguridad</h1>
                        <p class="mt-2 text-sm text-slate-300/90 max-w-prose">
                            Resumen táctico de amenazas, incidentes y telemetría. Acceso segmentado por rol.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-black/20 px-4 py-3 text-xs text-slate-300/90">
                        <div class="text-slate-200 font-medium">Sesión</div>
                        <div class="mt-1 text-slate-400">
                            {{ auth()->user()->email }} · {{ auth()->user()->role?->label() ?? (string) auth()->user()->role }}
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-5 hover:bg-white/[0.06] transition">
                        <div class="text-xs text-slate-400">Alertas (24h)</div>
                        <div class="mt-2 text-2xl font-semibold tracking-tight">128</div>
                        <div class="mt-2 h-1.5 rounded-full bg-white/5 overflow-hidden">
                            <div class="h-full w-[62%] bg-gradient-to-r from-cyan-400/70 to-fuchsia-500/70"></div>
                        </div>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-5 hover:bg-white/[0.06] transition">
                        <div class="text-xs text-slate-400">Incidentes abiertos</div>
                        <div class="mt-2 text-2xl font-semibold tracking-tight">7</div>
                        <div class="mt-2 text-xs text-slate-500">En contención / análisis</div>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-5 hover:bg-white/[0.06] transition">
                        <div class="text-xs text-slate-400">TTPs detectadas</div>
                        <div class="mt-2 text-2xl font-semibold tracking-tight">19</div>
                        <div class="mt-2 text-xs text-slate-500">MITRE-like (demo)</div>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-5 hover:bg-white/[0.06] transition">
                        <div class="text-xs text-slate-400">Cobertura sensores</div>
                        <div class="mt-2 text-2xl font-semibold tracking-tight">92%</div>
                        <div class="mt-2 text-xs text-slate-500">Fuentes activas</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid md:grid-cols-3 gap-4">
            <a href="{{ route('soc') }}" class="group rounded-3xl border border-white/10 bg-white/[0.04] p-6 hover:bg-white/[0.06] transition relative overflow-hidden">
                <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-cyan-400/10 blur-2xl"></div>
                <div class="relative">
                    <div class="text-sm font-semibold">SOC · Monitoreo</div>
                    <div class="mt-1 text-xs text-slate-400">Correlación, alertas y telemetría.</div>
                    <div class="mt-4 inline-flex items-center gap-2 text-xs text-cyan-300">
                        Acceder <span class="transition group-hover:translate-x-1">→</span>
                    </div>
                </div>
            </a>
            <a href="{{ route('intel') }}" class="group rounded-3xl border border-white/10 bg-white/[0.04] p-6 hover:bg-white/[0.06] transition relative overflow-hidden">
                <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-fuchsia-500/10 blur-2xl"></div>
                <div class="relative">
                    <div class="text-sm font-semibold">Inteligencia</div>
                    <div class="mt-1 text-xs text-slate-400">IoCs, campañas, tendencias.</div>
                    <div class="mt-4 inline-flex items-center gap-2 text-xs text-fuchsia-300">
                        Acceder <span class="transition group-hover:translate-x-1">→</span>
                    </div>
                </div>
            </a>
            <a href="{{ route('admin') }}" class="group rounded-3xl border border-white/10 bg-white/[0.04] p-6 hover:bg-white/[0.06] transition relative overflow-hidden">
                <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-emerald-400/10 blur-2xl"></div>
                <div class="relative">
                    <div class="text-sm font-semibold">Administración</div>
                    <div class="mt-1 text-xs text-slate-400">Roles, accesos, auditoría.</div>
                    <div class="mt-4 inline-flex items-center gap-2 text-xs text-emerald-300">
                        Acceder <span class="transition group-hover:translate-x-1">→</span>
                    </div>
                </div>
            </a>
        </section>
    </div>
</x-layouts.app>

