<div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between px-2">
    <div>
        <nav class="flex mb-2" aria-label="Breadcrumb">
            <span class="text-[20px] uppercase tracking-widest text-amber-500 font-bold">Konfigurasi</span>
        </nav>
        <h1 class="text-3xl font-bold tracking-tight text-white">Pengaturan Sistem</h1>
        <p class="mt-1 text-sm text-slate-400">Kelola preferensi akun dan keamanan <span class="text-slate-200 font-medium">Admin</span> di sini.</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button class="flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-medium text-white shadow-lg shadow-emerald-900/20 transition-all hover:bg-emerald-500">
            Simpan Perubahan
        </button>
    </div>
</div>

<div class="mt-8 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
    <x-admin.stat-card title="Tema" value="Gelap" description="Tema panel aktif" accent="emerald" />
    <x-admin.stat-card title="Notifikasi" value="On" description="Notifikasi email" accent="sky" />
    <x-admin.stat-card title="Security" value="Tinggi" description="Pengaturan aman" accent="amber" />
    <x-admin.stat-card title="Backup" value="Mingguan" description="Jadwal cadangan" accent="rose" />
</div>

<div class="mt-10 grid gap-6 lg:grid-cols-3">
        <div class="rounded-[30px] border border-slate-800 bg-slate-900/50 backdrop-blur-md p-8 shadow-2xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="p-2 rounded-lg bg-emerald-500/10 border border-emerald-500/20">
                    <svg xmlns="http://www.w3.org/2000/center" class="h-5 w-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>
                <h2 class="text-xl font-bold text-white">Profil Pengguna</h2>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label class="text-[11px] uppercase tracking-wider text-slate-500 font-bold ml-1">Nama Lengkap</label>
                    <input type="text" readonly value="Admin" class="w-full rounded-2xl border border-slate-800 bg-slate-950/50 px-5 py-3 text-slate-200 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-[11px] uppercase tracking-wider text-slate-500 font-bold ml-1">Alamat Email</label>
                    <input type="email" readonly value="admin@yahoo.com" class="w-full rounded-2xl border border-slate-800 bg-slate-950/50 px-5 py-3 text-slate-200 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 transition-all">
                </div>
            </div>
        </div>

        <div class="rounded-[30px] border border-slate-800 bg-slate-900/50 backdrop-blur-md p-8 shadow-2xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="p-2 rounded-lg bg-amber-500/10 border border-amber-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                </div>
                <h2 class="text-xl font-bold text-white">Keamanan</h2>
            </div>

            <div class="space-y-4">
                <div class="group flex items-center justify-between p-5 bg-slate-950/40 rounded-2xl border border-slate-800/60 hover:border-amber-500/30 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex h-10 w-10 items-center justify-center rounded-xl bg-slate-800 text-slate-400 group-hover:text-amber-500 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" /></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-200">Ubah Kata Sandi</p>
                            <p class="text-xs text-slate-500 italic">Terakhir diubah 3 bulan lalu</p>
                        </div>
                    </div>
                    <button class="px-5 py-2 rounded-xl bg-slate-800 text-sm font-medium text-white hover:bg-slate-700 border border-slate-700 transition-all">Atur</button>
                </div>

                <div class="group flex items-center justify-between p-5 bg-slate-950/40 rounded-2xl border border-slate-800/60 hover:border-sky-500/30 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="hidden sm:flex h-10 w-10 items-center justify-center rounded-xl bg-slate-800 text-slate-400 group-hover:text-sky-500 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-200">Autentikasi Dua Faktor</p>
                            <p class="text-xs text-emerald-500 font-medium">Direkomendasikan</p>
                        </div>
                    </div>
                    <button class="px-5 py-2 rounded-xl bg-sky-600/10 text-sm font-medium text-sky-500 hover:bg-sky-600/20 border border-sky-600/20 transition-all">Aktifkan</button>
                </div>
            </div>
        </div>
    

    <div class="rounded-[30px] border border-slate-800 bg-slate-900/50 backdrop-blur-md p-8 shadow-2xl h-fit">
        <div class="flex items-center gap-3 mb-8">
            <div class="p-2 rounded-lg bg-sky-500/10 border border-sky-500/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
            </div>
            <h2 class="text-xl font-bold text-white">Notifikasi</h2>
        </div>

        <div class="space-y-3">
            <label class="group flex items-start p-4 bg-slate-950/30 rounded-2xl border border-slate-800 cursor-pointer hover:bg-slate-800/40 transition-all">
                <div class="mt-1">
                    <input type="checkbox" checked class="w-4 h-4 rounded border-slate-700 bg-slate-800 text-emerald-500 focus:ring-offset-slate-900 focus:ring-emerald-500">
                </div>
                <div class="ml-4">
                    <span class="block text-sm font-medium text-slate-200">Aktivitas Penting</span>
                    <span class="text-[11px] text-slate-500">Kirim email untuk login baru</span>
                </div>
            </label>

            <label class="group flex items-start p-4 bg-slate-950/30 rounded-2xl border border-slate-800 cursor-pointer hover:bg-slate-800/40 transition-all">
                <div class="mt-1">
                    <input type="checkbox" class="w-4 h-4 rounded border-slate-700 bg-slate-800 text-emerald-500 focus:ring-offset-slate-900 focus:ring-emerald-500">
                </div>
                <div class="ml-4">
                    <span class="block text-sm font-medium text-slate-200">Ringkasan Laporan</span>
                    <span class="text-[11px] text-slate-500">Laporan harian setiap pukul 08.00</span>
                </div>
            </label>

            <label class="group flex items-start p-4 bg-slate-950/30 rounded-2xl border border-slate-800 cursor-pointer hover:bg-slate-800/40 transition-all">
                <div class="mt-1">
                    <input type="checkbox" checked class="w-4 h-4 rounded border-slate-700 bg-slate-800 text-emerald-500 focus:ring-offset-slate-900 focus:ring-emerald-500">
                </div>
                <div class="ml-4">
                    <span class="block text-sm font-medium text-slate-200">Pengguna Baru</span>
                    <span class="text-[11px] text-slate-500">Notifikasi pendaftaran user baru</span>
                </div>
            </label>
        </div>

        <div class="mt-8 pt-6 border-t border-slate-800/60">
            <p class="text-[10px] text-slate-500 leading-relaxed italic">Pengaturan notifikasi push browser dapat dikelola melalui pengaturan browser masing-masing.</p>
        </div>
    </div>
</div>