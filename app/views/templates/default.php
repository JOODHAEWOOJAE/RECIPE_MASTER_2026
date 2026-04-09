<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RECIPE MASTER - <?php echo $title; ?></title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body
    class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal">
    <!-- Header -->
    <div x-data="{ open: false }" class="bg-gray-800">
        <nav class="shadow-md">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <a
                            class="text-white font-bold text-xl flex items-center"
                            href="index.html">
                            <i class="fas fa-utensils text-yellow-500 mr-2"></i> RECIPE
                            MASTER
                        </a>
                    </div>
                    <div class="flex md:hidden">
                        <button
                            @click="open = !open"
                            type="button"
                            class="text-white hover:text-yellow-500 focus:outline-none focus:text-yellow-500">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    x-show="!open"
                                    class="inline-flex"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M4 6H20V8H4V6ZM4 11H20V13H4V11ZM4 16H20V18H4V16Z" />
                                <path
                                    x-show="open"
                                    class="inline-flex"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M4 6H20V8H4V6ZM4 11H20V13H4V11ZM4 16H20V18H4V16ZM6 21H18V19H6V21ZM6 3H18V1H6V3Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        <input
                            type="text"
                            placeholder="Rechercher une recette..."
                            class="p-2 rounded-md" />
                        <a
                            class="text-white hover:text-yellow-500 px-3 py-2"
                            href="recipes.html">Recettes</a>
                        <a
                            class="text-white hover:text-yellow-500 px-3 py-2"
                            href="chefs.html">Chefs</a>
                    </div>
                </div>
            </div>
            <div x-show="open" class="md:hidden bg-gray-700">
                <input
                    type="text"
                    placeholder="Rechercher une recette..."
                    class="p-2 w-full" />
                <a class="block text-white hover:text-yellow-500 px-3 py-2" href="#">Recettes</a>
                <a class="block text-white hover:text-yellow-500 px-3 py-2" href="#">Chefs</a>
            </div>
        </nav>
    </div>

    <!-- Main -->
    <!-- ... (reste du code précédent) ... -->

    <!-- Main -->
    <div class="container mx-auto flex flex-wrap pt-4 pb-12 text-gray-800">
        <!-- Filters -->
        <aside class="w-full md:w-1/4 p-3">
            <div class="bg-yellow-500 text-white rounded-lg shadow-md p-4 mb-4">
                <h2 class="font-bold text-lg mb-4">Catégories</h2>
                <ul class="list-reset text-gray-100">
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-600 px-2 block"
                            href="#">Entrées</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-600 px-2 block"
                            href="#">Plats principaux</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-600 px-2 block"
                            href="#">Desserts</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-600 px-2 block"
                            href="#">Végétarien</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-600 px-2 block"
                            href="#">Vegan</a>
                    </li>
                </ul>
            </div>
            <div class="bg-yellow-600 text-white rounded-lg shadow-md p-4">
                <h2 class="font-bold text-lg mb-4">Ingrédients</h2>
                <ul class="list-reset text-gray-200">
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-700 px-2 block"
                            href="#">Poulet</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-700 px-2 block"
                            href="#">Boeuf</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-700 px-2 block"
                            href="#">Poisson</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-700 px-2 block"
                            href="#">Légumes</a>
                    </li>
                    <li>
                        <a
                            class="hover:text-white hover:bg-yellow-700 px-2 block"
                            href="#">Fromage</a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main content -->
        <main class="w-full md:w-3/4 p-3">
            <?php echo $content; ?>
        </main>
    </div>

    <!-- ... (reste du code précédent) ... -->

    <!-- Footer -->
    <footer class="bg-gray-800 text-white shadow-md">
        <div class="container mx-auto flex py-8">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2">
                    <div class="px-8">
                        <h3 class="font-bold">A propos</h3>
                        <p class="py-4 text-sm">
                            Découvrez les meilleures recettes de nos chefs talentueux et
                            partagez vos propres créations culinaires.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-8">
                        <h3 class="font-bold">Contact</h3>
                        <ul class="list-reset items-center text-sm">
                            <li>
                                <a
                                    class="inline-block hover:text-red-600 hover:underline py-1"
                                    href="#">
                                    Email: contact@recipemaster.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>