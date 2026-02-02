<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use App\Models\DosenTetap;
use App\Models\Alumni;
use App\Models\Mitra;
use App\Models\RisetPengabdian;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    /**
     * Menambahkan interval update otomatis setiap 15 detik agar data tetap segar 
     * di dashboard tanpa perlu refresh halaman secara manual.
     */
    protected static ?string $pollingInterval = '15s';

    protected function getStats(): array
    {
        return [
            // Statistik Artikel dengan grafik tren sederhana
            Stat::make('Total Artikel', Artikel::count())
                ->description('Artikel & Berita yang dipublikasikan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success'),

            // Statistik Dosen Tetap
            Stat::make('Total Dosen', DosenTetap::count())
                ->description('Dosen tetap program studi')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('info'),

            // Statistik Mitra Kerjasama (Baru)
            Stat::make('Total Mitra', Mitra::count())
                ->description('Instansi mitra kerjasama')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('gray'),

            // Statistik Riset & Pengabdian (Baru)
            Stat::make('Riset & Pengabdian', RisetPengabdian::count())
                ->description('Total kegiatan tridharma')
                ->descriptionIcon('heroicon-m-book-open')
                ->color('primary'),
        ];
    }
}