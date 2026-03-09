<x-layouts.app :title="'Cibersafe · Administración'">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <div class="text-xs text-slate-400">Sección</div>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight">Administración</h1>
                <p class="mt-2 text-sm text-slate-400 max-w-prose">
                    Gestión de accesos y parámetros operativos. Restringido a administradores.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] px-4 py-3 text-xs text-slate-300">
                Nivel requerido: <span class="text-emerald-300 font-medium">Admin+</span>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-4">
            <div class="lg:col-span-2 rounded-3xl border border-white/10 bg-white/[0.04] p-6 relative overflow-hidden">
                <div class="absolute -top-24 -right-24 h-56 w-56 rounded-full bg-emerald-400/10 blur-3xl"></div>
                <div class="absolute inset-0 opacity-[0.08] bg-grid"></div>
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold">Políticas de acceso (demo)</div>
                        <div class="text-xs text-slate-500">aplicadas</div>
                    </div>

                    <div class="mt-5 grid sm:grid-cols-2 gap-4">
                        <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                            <div class="text-xs text-slate-400">Anti-fuerza bruta</div>
                            <div class="mt-2 text-lg font-semibold">Activo</div>
                            <div class="mt-2 text-xs text-slate-500">5 intentos · ventana 60s</div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-black/20 p-5">
                            <div class="text-xs text-slate-400">Sesiones</div>
                            <div class="mt-2 text-lg font-semibold">Base de datos</div>
                            <div class="mt-2 text-xs text-slate-500">Auditoría disponible</div>
                        </div>
                    </div>

                    <div class="mt-5 rounded-2xl border border-white/10 bg-black/20 p-5">
                        <div class="text-xs text-slate-400">Siguiente paso sugerido</div>
                        <div class="mt-2 text-sm">
                            Módulo de gestión de usuarios (alta/baja/roles) y bitácora de acciones.
                        </div>
                        <div class="mt-2 text-xs text-slate-500">
                            (Quedó listo el middleware `role` para proteger endpoints.)
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-white/10 bg-white/[0.04] p-6">
                <div class="text-sm font-semibold">Accesos</div>
                <div class="mt-4 space-y-3">
                    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-xs text-slate-400">Rol actual</div>
                        <div class="mt-2 text-sm font-medium text-slate-200">
                            {{ auth()->user()->role?->label() ?? (string) auth()->user()->role }}
                        </div>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-xs text-slate-400">Aviso</div>
                        <div class="mt-2 text-xs text-slate-500">
                            Esta sección no se mostrará ni será accesible para roles inferiores.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

