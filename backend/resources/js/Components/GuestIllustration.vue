<script setup>
// Trucks & containers illustration for login/register left panel
</script>

<template>
    <div class="relative h-full w-full overflow-hidden">
        <!-- Soft gradient sky -->
        <div
            class="absolute inset-0 bg-gradient-to-b from-slate-900/80 via-slate-950 to-slate-950"
            aria-hidden="true"
        />

        <!-- Subtle grid (dock / yard lines) -->
        <div
            class="absolute inset-0 opacity-[0.06]"
            aria-hidden="true"
            style="
                background-image:
                    linear-gradient(to right, white 1px, transparent 1px),
                    linear-gradient(to bottom, white 1px, transparent 1px);
                background-size: 48px 48px;
            }
        "
        />

        <!-- Glow orbs for depth -->
        <div
            class="absolute -left-20 -top-20 h-64 w-64 rounded-full bg-amber-500/10 blur-3xl"
            aria-hidden="true"
        />
        <div
            class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-indigo-500/10 blur-3xl"
            aria-hidden="true"
        />

        <!-- Ground / horizon line -->
        <div
            class="absolute bottom-[28%] left-0 right-0 h-px bg-gradient-to-r from-transparent via-slate-600/40 to-transparent"
            aria-hidden="true"
        />

        <!-- ========== SHIPPING CONTAINERS ========== -->
        <!-- Container 1 - front left (amber) -->
        <div
            class="absolute bottom-[30%] left-[8%] w-[22%] max-w-[140px] transition-transform duration-700 hover:scale-105"
            aria-hidden="true"
        >
            <svg
                viewBox="0 0 120 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-full drop-shadow-xl"
            >
                <!-- main box -->
                <path
                    d="M8 20 L8 72 L112 72 L112 20 Z"
                    fill="#B45309"
                    stroke="#92400E"
                    stroke-width="1.5"
                />
                <!-- corrugated lines -->
                <line x1="8" y1="28" x2="112" y2="28" stroke="#92400E" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="36" x2="112" y2="36" stroke="#92400E" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="44" x2="112" y2="44" stroke="#92400E" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="52" x2="112" y2="52" stroke="#92400E" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="60" x2="112" y2="60" stroke="#92400E" stroke-width="0.8" opacity="0.8" />
                <!-- door split -->
                <line x1="60" y1="20" x2="60" y2="72" stroke="#78350F" stroke-width="1.2" />
                <!-- highlight -->
                <path
                    d="M10 22 L30 22 L30 24 L10 24 Z"
                    fill="white"
                    opacity="0.15"
                />
            </svg>
        </div>

        <!-- Container 2 - stacked behind (rust/orange) -->
        <div
            class="absolute bottom-[30%] left-[22%] w-[18%] max-w-[110px] opacity-90 transition-transform duration-700 hover:scale-105"
            aria-hidden="true"
        >
            <svg
                viewBox="0 0 120 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-full drop-shadow-lg"
            >
                <path
                    d="M8 20 L8 72 L112 72 L112 20 Z"
                    fill="#C2410C"
                    stroke="#9A3412"
                    stroke-width="1.5"
                />
                <line x1="8" y1="28" x2="112" y2="28" stroke="#9A3412" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="36" x2="112" y2="36" stroke="#9A3412" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="44" x2="112" y2="44" stroke="#9A3412" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="52" x2="112" y2="52" stroke="#9A3412" stroke-width="0.8" opacity="0.8" />
                <line x1="8" y1="60" x2="112" y2="60" stroke="#9A3412" stroke-width="0.8" opacity="0.8" />
                <line x1="60" y1="20" x2="60" y2="72" stroke="#7C2D12" stroke-width="1.2" />
            </svg>
        </div>

        <!-- Container 3 - steel blue (right side) -->
        <div
            class="absolute bottom-[30%] right-[12%] w-[20%] max-w-[120px] transition-transform duration-700 hover:scale-105"
            aria-hidden="true"
        >
            <svg
                viewBox="0 0 120 80"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-full drop-shadow-xl"
            >
                <path
                    d="M8 20 L8 72 L112 72 L112 20 Z"
                    fill="#334155"
                    stroke="#1E293B"
                    stroke-width="1.5"
                />
                <line x1="8" y1="28" x2="112" y2="28" stroke="#475569" stroke-width="0.8" opacity="0.9" />
                <line x1="8" y1="36" x2="112" y2="36" stroke="#475569" stroke-width="0.8" opacity="0.9" />
                <line x1="8" y1="44" x2="112" y2="44" stroke="#475569" stroke-width="0.8" opacity="0.9" />
                <line x1="8" y1="52" x2="112" y2="52" stroke="#475569" stroke-width="0.8" opacity="0.9" />
                <line x1="8" y1="60" x2="112" y2="60" stroke="#475569" stroke-width="0.8" opacity="0.9" />
                <line x1="60" y1="20" x2="60" y2="72" stroke="#1E293B" stroke-width="1.2" />
                <path
                    d="M12 24 L28 24 L28 26 L12 26 Z"
                    fill="white"
                    opacity="0.12"
                />
            </svg>
        </div>

        <!-- ========== TRUCKS ========== -->
        <!-- Truck 1 - main (carrying container) -->
        <div
            class="absolute bottom-[28%] left-[38%] w-[36%] max-w-[220px] transition-transform duration-700 hover:scale-105"
            aria-hidden="true"
        >
            <svg
                viewBox="0 0 200 70"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-full drop-shadow-2xl"
            >
                <!-- Trailer (container on chassis) -->
                <path
                    d="M75 42 L75 58 L195 58 L195 42 Z"
                    fill="#1E293B"
                    stroke="#334155"
                    stroke-width="1.2"
                />
                <path
                    d="M78 45 L78 55 L192 55 L192 45 Z"
                    fill="#0F172A"
                    stroke="#334155"
                    stroke-width="0.8"
                />
                <!-- Container on trailer (smaller representation) -->
                <rect
                    x="82"
                    y="38"
                    width="88"
                    height="22"
                    rx="1"
                    fill="#B45309"
                    stroke="#92400E"
                    stroke-width="1"
                />
                <line x1="82" y1="43" x2="170" y2="43" stroke="#92400E" stroke-width="0.6" opacity="0.8" />
                <line x1="82" y1="48" x2="170" y2="48" stroke="#92400E" stroke-width="0.6" opacity="0.8" />
                <line x1="82" y1="53" x2="170" y2="53" stroke="#92400E" stroke-width="0.6" opacity="0.8" />

                <!-- Cab -->
                <path
                    d="M20 35 L20 58 L72 58 L72 48 L58 35 Z"
                    fill="#4F46E5"
                    stroke="#4338CA"
                    stroke-width="1.2"
                />
                <path
                    d="M24 38 L24 55 L68 55 L68 48 L54 38 Z"
                    fill="#6366F1"
                    stroke="#4338CA"
                    stroke-width="0.8"
                />
                <!-- Windshield -->
                <path
                    d="M28 40 L42 40 L42 50 L28 50 Z"
                    fill="#818CF8"
                    opacity="0.5"
                />
                <!-- Wheels -->
                <circle cx="35" cy="58" r="6" fill="#0F172A" stroke="#475569" stroke-width="1" />
                <circle cx="35" cy="58" r="3" fill="#334155" />
                <circle cx="65" cy="58" r="6" fill="#0F172A" stroke="#475569" stroke-width="1" />
                <circle cx="65" cy="58" r="3" fill="#334155" />
                <circle cx="120" cy="58" r="6" fill="#0F172A" stroke="#475569" stroke-width="1" />
                <circle cx="120" cy="58" r="3" fill="#334155" />
                <circle cx="185" cy="58" r="6" fill="#0F172A" stroke="#475569" stroke-width="1" />
                <circle cx="185" cy="58" r="3" fill="#334155" />
            </svg>
        </div>

        <!-- Truck 2 - smaller, in background (right) -->
        <div
            class="absolute bottom-[30%] right-[6%] w-[22%] max-w-[100px] opacity-80 transition-transform duration-700 hover:scale-105"
            aria-hidden="true"
        >
            <svg
                viewBox="0 0 140 55"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-full drop-shadow-lg"
            >
                <!-- Cab -->
                <path
                    d="M12 28 L12 50 L50 50 L50 38 L38 28 Z"
                    fill="#4338CA"
                    stroke="#3730A3"
                    stroke-width="1"
                />
                <path
                    d="M18 32 L28 32 L28 45 L18 45 Z"
                    fill="#6366F1"
                    opacity="0.6"
                />
                <circle cx="28" cy="50" r="5" fill="#0F172A" stroke="#475569" stroke-width="0.8" />
                <circle cx="48" cy="50" r="5" fill="#0F172A" stroke="#475569" stroke-width="0.8" />
                <!-- Trailer -->
                <path
                    d="M52 35 L52 50 L128 50 L128 35 Z"
                    fill="#1E293B"
                    stroke="#334155"
                    stroke-width="1"
                />
                <circle cx="75" cy="50" r="5" fill="#0F172A" stroke="#475569" stroke-width="0.8" />
                <circle cx="125" cy="50" r="5" fill="#0F172A" stroke="#475569" stroke-width="0.8" />
            </svg>
        </div>

        <!-- Optional: small crane or dock icon (abstract) -->
        <div
            class="absolute bottom-[52%] right-[20%] opacity-20"
            aria-hidden="true"
        >
            <svg
                width="40"
                height="40"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="text-slate-400"
            >
                <path d="M6 18V9a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v9" />
                <path d="M6 18H4a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h2" />
                <path d="M18 18h2a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2h-2" />
                <path d="M12 6v12" />
            </svg>
        </div>
    </div>
</template>
