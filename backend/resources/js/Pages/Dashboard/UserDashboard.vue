<script setup>
defineProps({
    userName: { type: String, required: true },
});
</script>

<template>
    <div class="space-y-6">
        <div
            class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm"
        >
            <p class="text-[0.7rem] font-medium uppercase tracking-[0.18em] text-indigo-600">
                Welcome
            </p>
            <h2 class="mt-2 text-xl font-semibold text-slate-900">
                Hello, {{ userName }}.
            </h2>
            <p class="mt-2 text-sm text-slate-600">
                This is your dashboard. You're logged in as a user. Content and features here can be adjusted later based on your category and role.
            </p>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <p class="text-[0.7rem] font-medium text-slate-500">Quick actions</p>
                <p class="mt-2 text-sm text-slate-600">
                    Your most used actions will appear here once we configure your role and permissions.
                </p>
            </div>
            <div
                class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm"
            >
                <p class="text-[0.7rem] font-medium text-slate-500">Recent activity</p>
                <p class="mt-2 text-sm text-slate-600">
                    Activity and notifications will show here.
                </p>
            </div>
        </div>
    </div>
</template>
