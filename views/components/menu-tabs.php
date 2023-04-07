<div class="h-screen py-10" style="width: 260px;">
    <div class="h-full overflow-y-auto overflow-x-hidden bg-gray-50 shadow-md">
        <ul class="space-y-0 font-sans">
            <li class="<?= Menu::checkCategory($_GET['i'], 1) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=1" class="<?= Menu::checkCategory($_GET['i'], 1) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Best Sellers</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 2) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=2" class="<?= Menu::checkCategory($_GET['i'], 2) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">New Products</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 3) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=3" class="<?= Menu::checkCategory($_GET['i'], 3) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Family Meals</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 4) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=4" class="<?= Menu::checkCategory($_GET['i'], 4) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Breakfast</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 5) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=5" class="<?= Menu::checkCategory($_GET['i'], 5) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Chickenjoy</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 6) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=6" class="<?= Menu::checkCategory($_GET['i'], 6) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Burgers</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 7) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=7" class="<?= Menu::checkCategory($_GET['i'], 7) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Jolly Spaghetti</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="<?= Menu::checkCategory($_GET['i'], 8) ? "border-l-4 border-red-400" : "" ?>">
                <a href="?i=8" class="<?= Menu::checkCategory($_GET['i'], 8) ? "text-red-500" : " " ?> flex items-center p-5 text-xl  font-bold hover:bg-gray-100 hover:text-red-500">
                    <span class="flex-1 ml-3 whitespace-nowrap">Burger Steak</span>
                    <span class="inline-flex items-center justify-center px-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>