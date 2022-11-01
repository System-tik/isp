<template>
    <div class="">
        <div class="flex flex-col items-center justify-center w-full py-6 mt-20" style="background-color:#f4f6ff;">
            <div class="">
                    <span class="text-sm"><router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / Frais</span></span>
            </div>
            <div class="mt-3">
                    <h1 class="text-3xl font-bold text-gray-900">ISP MBANZA-NGUNGU</h1>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name : 'Recherche',
    props : ['type']
}
</script>