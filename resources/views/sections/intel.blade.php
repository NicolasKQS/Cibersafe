<x-layouts.app :title="'Cibersafe · Inteligencia'">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <div class="text-xs text-slate-400">Sección</div>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight">Inteligencia</h1>
                <p class="mt-2 text-sm text-slate-400 max-w-prose">
                    Indicadores, campañas y tendencias. Acceso para analistas y administradores.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] px-4 py-3 text-xs text-slate-300">
                Nivel requerido: <span class="text-fuchsia-300 font-medium">Analista+</span>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-4">
            <div class="lg:col-span-2 rounded-3xl border border-white/10 bg-white/[0.04] p-6 relative overflow-hidden">
                <div class="absolute -top-24 -left-24 h-56 w-56 rounded-full bg-fuchsia-500/10 blur-3xl"></div>
                <div class="absolute inset-0 opacity-[0.08] bg-grid"></div>
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold">Tendencias (demo)</div>
                        <div class="text-xs text-slate-500">últimos 7 días</div>
                    </div>

                    <div class="mt-5 grid sm:grid-cols-2 gap-4">
                        <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                            <div class="text-xs text-slate-400">Campañas</div>
                            <div class="mt-2 text-xl font-semibold">3</div>
                            <div class="mt-3 text-xs text-slate-500">Phishing + cred stuffing</div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                            <div class="text-xs text-slate-400">IoCs nuevos</div>
                            <div class="mt-2 text-xl font-semibold">57</div>
                            <div class="mt-3 text-xs text-slate-500">Hashes, dominios, IPs</div>
                        </div>
                    </div>

                    <div class="mt-5 rounded-2xl border border-white/10 bg-black/20 p-5">
                        <div class="text-xs text-slate-400">Lista rápida</div>
                        <div class="mt-3 divide-y divide-white/5">
                            <div class="py-3 flex items-center justify-between">
                                <div class="text-sm">Dominio sospechoso</div>
                                <div class="text-xs text-slate-500">alto</div>
                            </div>
                            <div class="py-3 flex items-center justify-between">
                                <div class="text-sm">IP origen recurrente</div>
                                <div class="text-xs text-slate-500">medio</div>
                            </div>
                            <div class="py-3 flex items-center justify-between">
                                <div class="text-sm">Hash malware</div>
                                <div class="text-xs text-slate-500">alto</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-white/10 bg-white/[0.04] p-6">
                <div class="text-sm font-semibold">Integraciones</div>
                <div class="mt-4 space-y-3 text-xs text-slate-400">
                    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="font-medium text-slate-300">Feeds</div>
                        <div class="mt-1">MISP / OTX / CERT (pendiente)</div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="font-medium text-slate-300">Correlación</div>
                        <div class="mt-1">SIEM / reglas (pendiente)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

