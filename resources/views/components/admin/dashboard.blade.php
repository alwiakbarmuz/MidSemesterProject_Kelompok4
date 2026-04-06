<div class="rounded-[30px] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/20"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0">
    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Halaman</p>
            <h1 class="mt-2 text-2xl font-semibold text-white">Dashboard</h1>
            <p class="mt-2 max-w-2xl text-sm text-slate-400">Halo Administrator!, lihat
                ringkasan dan kelola
                sistem Anda di sini.</p>
        </div>
    </div>
</div>

<div class="mt-8 rounded-[30px] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/20">
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

        <x-admin.summary-card
            title="Pengguna Aktif"
            value="1.248"
            accent="emerald"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m3-4a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 100-8 4 4 0 000 8z" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

        <x-admin.summary-card
            title="Pendapatan Bulanan"
            value="Rp 420 jt"
            accent="blue"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10v2m0 12v2m9-10a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

        <x-admin.summary-card
            title="Tugas Aktif"
            value="84"
            accent="amber"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h5l5 5v9a2 2 0 01-2 2z" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

        <x-admin.summary-card
            title="Peringatan Sistem"
            value="12"
            accent="rose"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

    </div>
</div>