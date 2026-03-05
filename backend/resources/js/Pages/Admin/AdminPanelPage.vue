<script setup>
defineProps({
    title: { type: String, required: true },
});
</script>

<template>
    <div class="space-y-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-lg font-semibold text-slate-900">
                {{ title }}
            </h2>
            <button
                type="button"
                class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-500"
            >
                <span class="text-lg leading-none">+</span>
                Add new
            </button>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm text-slate-500">
                This panel is for managing <strong class="text-slate-700">{{ title }}</strong>. You can add listing, filters, and forms here later.
            </p>
        </div>
    </div>
</template>
