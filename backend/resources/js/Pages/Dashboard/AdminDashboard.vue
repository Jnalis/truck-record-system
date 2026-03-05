<script setup>
defineProps({
    userName: { type: String, required: true },
});
</script>

<template>
    <div class="space-y-6">
        <!-- KPI cards -->
        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[0.7rem] font-medium text-slate-500">MRR</p>
                        <p class="mt-1 text-2xl font-semibold text-slate-900">$48.2K</p>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-[0.7rem] font-medium text-emerald-600"
                    >
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        +12.4%
                    </span>
                </div>
                <p class="mt-1 text-[0.7rem] text-slate-500">vs last month</p>
            </div>

            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[0.7rem] font-medium text-slate-500">Active Users</p>
                        <p class="mt-1 text-2xl font-semibold text-slate-900">12,847</p>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-[0.7rem] font-medium text-emerald-600"
                    >
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        +8.2%
                    </span>
                </div>
                <p class="mt-1 text-[0.7rem] text-slate-500">vs last month</p>
            </div>

            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[0.7rem] font-medium text-slate-500">Deployments</p>
                        <p class="mt-1 text-2xl font-semibold text-slate-900">342</p>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-[0.7rem] font-medium text-emerald-600"
                    >
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        +24.1%
                    </span>
                </div>
                <p class="mt-1 text-[0.7rem] text-slate-500">vs last month</p>
            </div>

            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[0.7rem] font-medium text-slate-500">Uptime</p>
                        <p class="mt-1 text-2xl font-semibold text-slate-900">99.98%</p>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-[0.7rem] font-medium text-emerald-600"
                    >
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        +0.02%
                    </span>
                </div>
                <p class="mt-1 text-[0.7rem] text-slate-500">vs last month</p>
            </div>
        </div>

        <!-- Lower grid -->
        <div class="grid gap-4 lg:grid-cols-3">
            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm lg:col-span-2"
            >
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[0.7rem] font-medium text-slate-500">Revenue Growth</p>
                        <p class="mt-1 text-sm text-slate-500">Monthly recurring revenue trend</p>
                    </div>
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-2.5 py-1 text-[0.7rem] text-slate-600"
                    >
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Stable
                    </span>
                </div>
                <div
                    class="mt-4 h-40 rounded-lg border border-dashed border-slate-200 bg-slate-50"
                >
                    <div
                        class="flex h-full items-center justify-center text-[0.7rem] text-slate-500"
                    >
                        Chart placeholder – plug in your metrics here.
                    </div>
                </div>
            </div>

            <div
                class="space-y-4 rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[0.7rem] font-medium text-slate-500">Sprint 24</p>
                        <p class="mt-1 text-sm text-slate-700">5 days remaining</p>
                    </div>
                    <button
                        type="button"
                        class="rounded-full border border-slate-200 px-3 py-1 text-[0.7rem] text-slate-600 hover:bg-slate-50"
                    >
                        View board
                    </button>
                </div>
                <dl class="space-y-2 text-[0.75rem] text-slate-600">
                    <div class="flex items-center justify-between">
                        <dt class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                            Completed
                        </dt>
                        <dd class="font-medium text-slate-900">14</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                            In Progress
                        </dt>
                        <dd class="font-medium text-slate-900">5</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-slate-400"></span>
                            To Do
                        </dt>
                        <dd class="font-medium text-slate-900">2</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</template>
