<x-layouts.app :title="'Cibersafe · SOC'">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <div class="text-xs text-slate-400">Sección</div>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight">SOC · Monitoreo</h1>
                <p class="mt-2 text-sm text-slate-400 max-w-prose">
                    Vista operativa para analistas y operadores. (Maqueta integrada con control de rol).
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] px-4 py-3 text-xs text-slate-300">
                Nivel requerido: <span class="text-cyan-300 font-medium">Operador+</span>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-4">
            <div class="lg:col-span-2 rounded-3xl border border-white/10 bg-white/[0.04] p-6 relative overflow-hidden">
                <div class="absolute inset-0 opacity-[0.08] bg-grid"></div>
                <div class="absolute -top-24 -right-24 h-56 w-56 rounded-full bg-cyan-400/10 blur-3xl"></div>
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold">Flujo de alertas</div>
                        <div class="text-xs text-slate-500">últimos 15 min</div>
                    </div>
                    <div class="mt-5 rounded-2xl border border-white/10 bg-black/20 p-5">
                        <div class="flex items-center gap-3 text-xs text-slate-400">
                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                            Ingesta estable
                        </div>
                        <div class="mt-4 h-32 rounded-xl bg-[linear-gradient(to_right,rgba(34,211,238,0.10),rgba(217,70,239,0.10))] relative overflow-hidden">
                            <div class="absolute inset-0 animate-scan bg-[linear-gradient(to_right,transparent,rgba(34,211,238,0.28),transparent)]"></div>
                        </div>
                        <div class="mt-4 text-xs text-slate-500">
                            Demo UI: integra luego data real (SIEM/EDR/NetFlow).
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-white/10 bg-white/[0.04] p-6">
                <div class="text-sm font-semibold">Acciones rápidas</div>
                <div class="mt-4 space-y-3">
                    <button class="w-full rounded-2xl border border-white/10 bg-white/[0.03] px-4 py-3 text-left text-sm hover:bg-white/[0.06] transition">
                        Abrir incidente
                        <div class="text-xs text-slate-500 mt-1">Crear caso y asignar.</div>
                    </button>
                    <button class="w-full rounded-2xl border border-white/10 bg-white/[0.03] px-4 py-3 text-left text-sm hover:bg-white/[0.06] transition">
                        Bloquear IoC
                        <div class="text-xs text-slate-500 mt-1">Firewall / EDR (mock).</div>
                    </button>
                    <button class="w-full rounded-2xl border border-white/10 bg-white/[0.03] px-4 py-3 text-left text-sm hover:bg-white/[0.06] transition">
                        Exportar reporte
                        <div class="text-xs text-slate-500 mt-1">PDF/CSV (mock).</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

