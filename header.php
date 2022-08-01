<header class="w-full shadow-lg">
        <div class="w-full max-w-screen-xl relative m-auto p-4 flex flex-row items-between">
            <section class="flex flex-row items-center justify-start w-1/2">
                <div class="logo">
                    <a href="http://www.devastador.com">
                    <!-- <a href="index.php"> -->
                        <img src="./img/logotipo.png" alt="Logo devastador" style="width: 260px;">
                    </a>
                </div>
            </section>
            <section class="hidden md:flex flex-row items-center justify-end w-1/2">
                <div class="menu">
                    <nav>
                        <a href="" class="ml-4 hover:border-b-2 border-b-gray-700">Productos</a>
                        <a href="" class="ml-4 hover:border-b-2 border-b-gray-700">Comprar</a>
                        <a href="contacto.php" class="ml-4 hover:border-b-2 border-b-gray-700">Contacto</a>
                    </nav>
                </div>
                <div class="buscar ml-4">
                    <button><p class="icono-solid"></p></button>
                </div>
                <div class="sesion">
                    <a href="" class="ml-4 hover:border-b-2 border-b-gray-700">Iniciar Sesión</a>
                    <a href="" class="ml-4 p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Registrarse</a>
                </div>
            </section>
            <section class="md:hidden flex flex-row items-center justify-end w-1/2">
                <label for="btnMenu" class="icono-solid"></label>
                <input type="checkbox" id="btnMenu" class="hidden">
                <div class="contenedorMenu transition-all shadow-lg bg-gray-200 h-screen fixed z-20 right-0 top-0">
                    <div class="contMenu p-8">
                        <div class="menu-responsive-cerrar mb-4 text-right">
                            <label for="btnMenu" class="icono-solid">X</label>
                        </div>
                        <div class="menu-responsive mb-4 border-b-2 border-b-gray-400">
                            <nav class="flex flex-col mb-2">
                                <a href="" class="hover:border-b-2 mb-4 border-b-gray-700">Productos</a>
                                <a href="" class="hover:border-b-2 mb-4 border-b-gray-700">Comprar</a>
                                <a href="contacto.php" class="hover:border-b-2 mb-4 border-b-gray-700">Contacto</a>
                            </nav>
                        </div>
                        <div class="sesion flex flex-col">
                            <a href="" class="mb-4 hover:border-b-2 border-b-gray-700">Iniciar Sesión</a>
                            <a href="" class="mb-4 p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Registrarse</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </header>