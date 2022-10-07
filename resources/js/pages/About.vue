<template class="mt-10">
    <div class="flex flex-col w-full items-center justify-center py-6 mt-20" style="background-color:#f4f6ff;">
        <div class="">
            <span class="text-sm"><router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / A propos de nous</span></span>
        </div>
        <div class="mt-3">
            <h1 class="text-3xl font-bold text-gray-900">ISP MBANZA-NGUNGU</h1>
        </div>
    </div>

    <!-- Presentation ISP -->
    <div class="flex px-64 mt-10 mb-10 gap-8">
        <div class="basis-1/3">
            <img src="img/etu2.jpg" class="border rounded h-64" alt="" srcset="">
            <h5 class="font-medium text-sm text-center mt-2">Directeur Général</h5>
            <p class="text-center text-sm">Professeur en Chimie</p>
        </div>
        <div class="basis-1/3">
            <h4 class="text-gray-900 font-medium mb-4">Présentation</h4>
            <p class="text-gray-700 text-justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias necessitatibus quas possimus consequatur quo laudantium 
                aperiam facere hic at quasi dicta voluptatum magni rem, atque eveniet voluptatibus accusamus alias rerum.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias necessitatibus quas possimus consequatur quo
                laudantium
                aperiam facere hic at quasi dicta voluptatum magni rem, atque eveniet voluptatibus accusamus alias rerum.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias necessitatibus quas possimus consequatur quo
                laudantium
                aperiam facere hic at quasi dicta voluptatum magni rem, atque eveniet voluptatibus accusamus alias rerum.
            </p>
        </div>
        <div class="basis-1/3">
            <h4 class="text-gray-900 font-medium mb-4">Historique</h4>
            <p class="text-gray-700 text-justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias necessitatibus quas possimus consequatur quo
                laudantium
                aperiam facere hic at quasi dicta voluptatum magni rem, atque eveniet voluptatibus accusamus alias rerum.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias necessitatibus quas possimus consequatur quo
                laudantium
                aperiam facere hic at quasi dicta voluptatum magni rem, atque eveniet voluptatibus accusamus alias rerum.
            </p>
        </div>
    </div>

    <!-- Garantie du succes -->
    <div class="flex px-64 gap-6 py-10 mt-10" style="background-color:#f8fafc">
        <div class="basis-1/2">
            <h4 class="text-sm mb-5 font-semibold" style="color:#fbc766;">Garantie du succès</h4>
            <h4 class="font-bold text-2xl text-gray-900">Pourquoi étudier chez nous ?</h4>
            <p class="text-gray-500 text-justify mt-4 text-md">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero facilis animi</p>
            <div class="text-gray-500 mt-5">
                <p><span class="text-blue-600 font-bold">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><span class="text-blue-600 font-bold">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><span class="text-blue-600 font-bold">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><span class="text-blue-600 font-bold">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="flex basis-1/2 items-center justify-center">
            <img src="img/deux.jpg" alt="" class="w-full h-64 rounded"/>
        </div>
    </div>

    <!-- Notre pedagogie -->
    <!-- <hr class="bg-gray-900"/> -->
    <div class="flex flex-col px-64 py-12 items-center justify-center" style="background-image: url('img/blob1.svg');background-repeat: no-repeat;background-position-x: 300px;">
        <div class="">
            <h4 class="font-semibold text-sm" style="color:#fbc766">L'Education est une Puissance</h4>
        </div>
        <div class="mt-4 font-bold text-2xl text-gray-900">
            <h2>Une Pédagogie adaptée pour votre réussite professionnelle</h2>
        </div>
        <div class="">
            <p class="text-gray-700">Passez dès maintenant à l'action en vous inscrivant en toute simplicité et sans vous déplacer.</p>
        </div>
        <div class="mt-8">
            <router-link to="/Inscription" class="p-3 rounded bg-blue-700 text-center text-white font-medium">Inscription</router-link>
        </div>
    </div>
    <!-- <hr class="bg-gray-900"> -->
    <!-- Le corps academique -->
    <div class="flex flex-col px-64 py-14 items-center justify-center bg-gray-50">
        <div class="">
            <h4 class="text-sm mb-5 font-semibold" style="color:#fbc766;">Le Corps Académique</h4>
        </div>
        <div class="">
            <h4 class="font-bold text-2xl text-gray-900">Le Comité de Gestion</h4>
        </div>

        <!-- Le trio -->
        <div class="flex gap-4 mt-3">
            <div class="basis-1/3 mt-6">
                <div class="rounded border">
                    <img src="img/etu2.jpg" alt="" srcset="" class="h-60"/>
                </div>
                <h5 class="font-medium text-sm text-center mt-2">Secrétaire Général Académique</h5>
                <p class="text-center text-sm">Professeur en Chimie</p>
            </div>
            <div class="basis-1/3 mt-6">
                <div class="rounded border">
                    <img src="img/etu2.jpg" alt="" srcset="" class="h-60"/>
                </div>
                <h5 class="font-medium text-sm text-center mt-2">Directeur Général</h5>
                <p class="text-center text-sm">Professeur en Chimie</p>
            </div>
            <div class="basis-1/3 mt-6">
                <div class="rounded border">
                    <img src="img/etu2.jpg" alt="" srcset="" class="h-60"/>
                </div>
                <h5 class="font-medium text-sm text-center mt-2">Secrétaire Général Administratif</h5>
                <p class="text-center text-sm">Professeur en Chimie</p>
            </div>
        </div>
    </div>

</template>