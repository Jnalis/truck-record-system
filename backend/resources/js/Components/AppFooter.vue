<script setup>
const year = new Date().getFullYear();
</script>

<template>
    <footer
        class="flex w-full shrink-0 flex-col items-center justify-center gap-1 bg-white px-4 py-3 text-center text-[0.7rem] text-slate-500 shadow-[0_-1px_0_0_rgba(0,0,0,0.06)] sm:flex-row sm:gap-4"
    >
        <span>© {{ year }} Jnet Solution. All rights reserved.</span>
        <span class="inline-flex items-center gap-1.5">
            <span class="inline-flex h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
            <span>Secure & reliable</span>
        </span>
    </footer>
</template>
