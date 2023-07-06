<div class="fixed parent z-[60] h-screen w-screen" x-data="{loader: true}"
    x-init="setTimeout(() => loader = false, 4000)" x-show="loader"
    x-transition:enter="transition origin-top ease-out duration-1000"
    x-transition:enter-start="transform -translate-y-full opacity-0"
    x-transition:enter-end="transform translate-y-0 opacity-100"
    x-transition:leave="transition origin-top ease-out duration-900" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" role="loader">
    <div class="w-full h-full bg-slate-100 -z-10 overflow-hidden overflow-y-hidden" x-data="{loaderbg: true}"
        x-init="setTimeout(() => loaderbg = false, 3000)" x-show="loaderbg"
        x-transition:enter="transition origin-top ease-out duration-1000"
        x-transition:enter-start="transform -translate-y-full opacity-0"
        x-transition:enter-end="transform translate-y-0 opacity-100"
        x-transition:leave="transition origin-top ease-out duration-1000" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" role="gatau"></div>
    <div class="loader py-2 px-3 bg-transparent absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-12">
        <p>lagi cari </p>
        <div class="words">
            <span class="word text-cyan-700">kerjaan buat kamu</span>
            <span class="word text-cyan-700">tempat kerja terbaik</span>
            <span class="word text-cyan-700">kerja yang cocok</span>
            <span class="word text-cyan-700">kerjaan buat kamu</span>
            <span class="word text-cyan-700">tempat kerja terbaik</span>
            <span class="word text-cyan-700">kerja yang cocok</span>
            <span class="word text-cyan-700">kerjaan buat kamu</span>
            <span class="word text-cyan-700">tempat kerja terbaik</span>
            <span class="word text-cyan-700">kerja yang cocok</span>
            <span class="word text-cyan-700">kerjaan buat kamu</span>
            <span class="word text-cyan-700">tempat kerja terbaik</span>
            <span class="word text-cyan-700">kerja yang cocok</span>
        </div>
    </div>
</div>