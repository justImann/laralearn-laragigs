@props(['now'])

@php
$currentDateTime = date('Y-m-d H:i:s');
$createdAt = $now;

// Menghitung selisih waktu antara sekarang dan 'created_at'
$timeDiff = strtotime($currentDateTime) - strtotime($createdAt);

// Mengubah selisih waktu menjadi format jam, menit, dan detik
$years = floor($timeDiff / (365 * 24 * 60 * 60));
$months = floor(($timeDiff % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
$days = floor(($timeDiff % (30 * 24 * 60 * 60)) / (24 * 60 * 60));
$hours = floor($timeDiff / 3600);
$minutes = floor(($timeDiff % 3600) / 60);
$seconds = $timeDiff % 60;

$f_hours = date('H:i:s', strtotime($createdAt));
$f_days = date('d', strtotime($createdAt));
$f_months = date('m', strtotime($createdAt));
$f_years = date('Y', strtotime($createdAt));
@endphp

<p class="text-xs font-medium">
    @if ($days > 0)
        {{ $days }} hari
    @elseif ($hours < 1 && $minutes < 5)
    Baru saja
    @elseif ($hours < 1)
        {{ $minutes }} menit yang lalu
    @else
        {{ $hours }} jam yang lalu
    @endif
</p>
