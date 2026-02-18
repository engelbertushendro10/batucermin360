<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket - {{ $tiket->kode_tiket }}</title>
    <style>
        body { font-family: 'Arial', sans-serif; background: #f4f4f4; padding: 20px; }
        .ticket { background: #fff; width: 400px; margin: 0 auto; border: 2px solid #333; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .header { text-align: center; border-bottom: 2px dashed #ccc; padding-bottom: 15px; }
        .content { margin-top: 20px; }
        .label { font-weight: bold; color: #666; font-size: 12px; }
        .value { font-size: 18px; margin-bottom: 10px; font-weight: bold; }
        .qr { text-align: center; margin-top: 20px; }
        .footer { margin-top: 30px; text-align: center; font-size: 10px; color: #999; }
        @media print {
            body { background: #fff; padding: 0; }
            .ticket { box-shadow: none; border: 1px solid #000; }
            button { display: none; }
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="header">
            <h2>BATU CERMIN</h2>
            <p>E-Ticket Masuk</p>
        </div>
        <div class="content">
            <div class="label">KODE TIKET</div>
            <div class="value">{{ $tiket->kode_tiket }}</div>
            
            <div class="label">EVENT/ACARA</div>
            <div class="value">{{ $tiket->pesanan->acara->judul }}</div>
            
            <div class="label">NAMA PEMBELI</div>
            <div class="value">{{ $tiket->pesanan->nama_pembeli }}</div>
            
            <div class="label">TANGGAL</div>
            <div class="value">{{ \Carbon\Carbon::parse($tiket->pesanan->acara->tanggal_acara)->format('d F Y') }}</div>
        </div>
        <div class="qr">
            <!-- Simple QR Placeholder or actual QR logic -->
            <p style="border: 1px solid #000; padding: 10px; display: inline-block;">
                {{ $tiket->kode_tiket }}
            </p>
        </div>
        <div class="footer">
            Harap tunjukkan tiket ini kepada petugas di pintu masuk.
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <button onclick="window.print()" style="padding: 10px 20px; cursor: pointer;">Cetak Tiket</button>
    </div>
</body>
</html>
