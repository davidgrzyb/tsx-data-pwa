<template>
    <div class="flex bg-white shadow-md p-4 min-h-32">
        <div v-if="!searching">
            <div v-if="ticker" class="flex flex-wrap overflow-hidden">
                <div class="w-1/3 text-gray-700 overflow-hidden">
                    Name:
                </div>
                <div class="w-2/3 font-semibold text-center overflow-hidden">
                    {{ name }}
                </div>
                <div class="w-1/3 text-gray-700 overflow-hidden">
                    Ticker:
                </div>
                <div class="w-2/3 font-semibold text-center overflow-hidden">
                    {{ ticker }}
                </div>
                <div class="w-1/3 text-gray-700 overflow-hidden">
                    Price:
                </div>
                <div class="w-2/3 font-semibold text-center overflow-hidden">
                    {{ price }}
                </div>
                <div class="w-1/3 text-gray-700 overflow-hidden">
                    Change:
                </div>
                <div :class="this.isGreen ? 'text-green-500' : 'text-red-500'" class="w-2/3 font-semibold text-center overflow-hidden">
                    {{ change }}
                </div>
            </div>
            <p v-if="!ticker && !error" class="mx-auto my-auto">
                Search to view latest TMX data..
            </p>
            <p v-if="error" class="mx-auto my-auto">{{ error }}</p>
        </div>
        <div v-if="searching" class="lds-dual-ring mx-auto my-auto"></div>
    </div>
</template>

<script>
    export default {
        computed: {
            isGreen: function () {
                return parseFloat(this.change.split(' ')[0]) > 0;
            }
        },
        props: {
            ticker: String,
            name: String,
            price: String,
            change: String,
            error: String,
            searching: Boolean,
        },
    }
</script>

<style>
    .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
    }
    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #000;
        border-color: #000 transparent #000 transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }
    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>