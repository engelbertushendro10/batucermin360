<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan - {{ $pesanan->kode_pesanan }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @if($snapToken)
    @if(config('services.midtrans.is_production'))
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.client_key') }}"></script>
    @else
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.client_key') }}"></script>
    @endif
    @endif

    <style>

        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @media print {
            .no-print { display: none !important; }
            .print-only { display: block !important; }
            body { background: white !important; }
            .ticket-card { border: 2px dashed #e2e8f0 !important; box-shadow: none !important; }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-slate-900 min-h-screen text-slate-800 dark:text-slate-100">

    <div class="max-w-2xl mx-auto px-4 py-12">
        <!-- Back to Home -->
        <div class="no-print mb-8">
            <a href="/" class="inline-flex items-center gap-2 text-slate-500 hover:text-primary transition-colors font-semibold">
                <span class="material-icons">arrow_back</span>
                Kembali ke Beranda
            </a>
        </div>

        <!-- Success Header -->
        <div class="text-center mb-10 no-print">
            <div class="w-20 h-20 bg-emerald-100 dark:bg-emerald-500/10 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 animate-bounce">
                <span class="material-icons text-4xl">check_circle</span>
            </div>
            <h1 class="text-3xl font-black mb-2">Pemesanan Berhasil!</h1>
            <p class="text-slate-500 dark:text-slate-400">Terima kasih telah melakukan pemesanan tiket di Batu Cermin.</p>
        </div>

        <!-- Ticket Card -->
        <div class="ticket-card bg-white dark:bg-slate-800 rounded-[2.5rem] shadow-2xl shadow-slate-200 dark:shadow-none border border-slate-100 dark:border-slate-700 overflow-hidden">
            <!-- Ticket Header -->
            <div class="p-8 bg-slate-900 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Kode Pesanan</p>
                            <h2 class="text-2xl font-black">{{ $pesanan->kode_pesanan }}</h2>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Status</p>
                            <span class="px-3 py-1 bg-emerald-500 text-[10px] font-black uppercase rounded-full">
                                {{ $pesanan->status_pembayaran == 'booking' ? 'MENUNGGU PEMBAYARAN' : 'BERHASIL' }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Acara / Kunjungan</p>
                        <h3 class="text-xl font-bold">{{ $pesanan->acara->judul }}</h3>
                    </div>
                </div>
                <!-- Abstract Circle Decor -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
            </div>

            <!-- Ticket Body -->
            <div class="p-8 space-y-8">
                <!-- Info Grid -->
                <div class="grid grid-cols-2 gap-6 pb-8 border-b border-dashed border-slate-200 dark:border-slate-700">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Nama Pembeli</p>
                        <p class="font-bold">{{ $pesanan->nama_pembeli }}</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">WhatsApp / HP</p>
                        <p class="font-bold">{{ $pesanan->no_hp_pembeli }}</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Jumlah Tiket</p>
                        <p class="font-bold">{{ $pesanan->jumlah_tiket }} Tiket</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Kategori</p>
                        <p class="font-bold capitalize">{{ $pesanan->jenis_tamu }}</p>
                    </div>
                </div>

                <!-- Payment Details -->
                <div class="flex justify-between items-end">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Metode Pembayaran</p>
                        <div class="flex items-center gap-2">
                            <span class="material-icons text-slate-400 text-sm">{{ $pesanan->metode_pembayaran == 'online' ? 'payments' : 'store' }}</span>
                            <p class="font-bold">{{ $pesanan->metode_pembayaran == 'online' ? 'Bayar Online' : 'Bayar di Tempat' }}</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Total Bayar</p>
                        <p class="text-3xl font-black text-slate-900 dark:text-white">Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</p>
                    </div>
                </div>

                @if($pesanan->metode_pembayaran == 'lokasi')
                <div class="p-4 bg-amber-50 dark:bg-amber-900/10 border border-amber-200 dark:border-amber-900/30 rounded-2xl flex gap-3">
                    <span class="material-icons text-amber-500">info</span>
                    <div>
                        <p class="text-xs font-bold text-amber-800 dark:text-amber-500 mb-1">Informasi Pembayaran</p>
                        <p class="text-xs text-amber-700 dark:text-amber-400">Silahkan tunjukkan tiket ini kepada petugas di lokasi untuk melakukan pembayaran dan mendapatkan akses masuk.</p>
                    </div>
                </div>
                @endif
            </div>

            <!-- QR Section Placeholder (Future Proof) -->
            <div class="bg-slate-50 dark:bg-slate-900/50 p-6 text-center border-t border-slate-100 dark:border-slate-700">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Verifikasi Petugas</p>
                <div class="w-32 h-32 bg-white dark:bg-white rounded-2xl mx-auto flex items-center justify-center border border-slate-200 p-2 shadow-sm">
                    {{-- QR Code can be generated here, for now use a placeholder --}}
                    <div class="text-slate-300">
                         <span class="material-icons text-5xl">qr_code_2</span>
                    </div>
                </div>
                <p class="mt-3 text-[10px] text-slate-400 font-medium">SCAN UNTUK VALIDASI</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="grid grid-cols-1 gap-4 mt-8 no-print">
            @if($snapToken)
            <button id="pay-button" class="flex items-center justify-center gap-2 py-4 bg-primary text-white rounded-2xl font-black hover:bg-primary/90 transition-all shadow-xl shadow-primary/20">
                <span class="material-icons">payments</span>
                BAYAR SEKARANG
            </button>
            @endif
            <div class="grid grid-cols-2 gap-4">
                <button onclick="window.print()" class="flex items-center justify-center gap-2 py-4 bg-slate-900 text-white rounded-2xl font-black hover:bg-slate-800 transition-all shadow-xl shadow-slate-200 dark:shadow-none">
                    <span class="material-icons text-sm">print</span>
                    CETAK TIKET
                </button>
                <a href="/" class="flex items-center justify-center gap-2 py-4 bg-white dark:bg-slate-800 text-slate-900 dark:text-white border border-slate-200 dark:border-slate-700 rounded-2xl font-black hover:bg-slate-50 dark:hover:bg-slate-700 transition-all shadow-xl shadow-slate-100 dark:shadow-none">
                    PESAN LAGI
                </a>
            </div>
        </div>

        @if($snapToken)
        <script type="text/javascript">
            const payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function () {
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function (result) {
                        window.location.reload();
                    },
                    onPending: function (result) {
                        window.location.reload();
                    },
                    onError: function (result) {
                        alert("Pembayaran gagal!");
                    },
                    onClose: function () {
                        // User closed the popup without finishing the payment
                    }
                });
            });
        </script>
        @endif

        
        <p class="text-center text-[10px] text-slate-400 mt-10 font-bold uppercase tracking-[0.2em] no-print">
            Powered by Batucermin 360 &copy; {{ date('Y') }}
        </p>
    </div>

</body>
</html>
