<?php include('head.php'); ?>
<body class="text-museo">
    <?php include('header.php'); ?>

    <main class="w-full">
        <!-- Call to action -->
        <section class="w-full max-w-screen-xl m-auto callToAction relative flex flex-row justify-between">
            <div class="col texto w-11/12 md:w-5/12 px-6 py-6 flex flex-col justify-center z-10">
                <h1 class="text-4xl font-bold mb-8 md:mb-5">Plan Básico</h1>
                <h2 class="text-xl mb-5">Antivirus Devastador <sup class="text-xs">TM</sup></h2>
                <p class="text-md mb-5">Nuestro software antivirus en su plan básico cubre las necesidades suficientes para usuarios comúnes que desean protección en sus equipos.</p>
                <div>
                    <a href="" class="p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Comprar Ahora</a>
                </div>
            </div>
            <div class="col hidden md:block relative right-0 w-10/12 md:w-7/12 z-0">
                <img src="./img/laptop1.png" alt="Mujer con laptop" style="width: 800px;">
            </div>
        </section>

        <!-- Que incluye -->
        <section class="w-full lime-grad py-20">
            <div class="w-full max-w-screen-xl m-auto flex flex-col md:flex-row">
                <div class="w-full p-4 text-center flex flex-col md:flex-row items-center justify-center">
                    <div class="w-12/12 md:w-6/12 flex flex-col items-center">
                        <img src="./img/basi.png" alt="Logotipo antivirus devastador" style="width: 280px;">
                    </div>
                    <div class="w-12/12 md:w-6/12 text-white text-center flex flex-col justify-center">
                        <h2 class="text-4xl font-semibold mb-4 text-center">¿Qué incluye?</h2>
                        <ul>
                            <li class="py-2 text-white">Protección contra malware y ransomware</li>
                            <li class="py-2 text-white">Alto Rendimiento</li>
                            <li class="py-2 text-white">Contraseñas protegidas</li>
                        </ul>
                        <p class="py-2 border-t-2 border-t-lime-700">Compatible con:</p>
                        <div class="text-4xl flex flex-row justify-center">
                            <p class="icono-brands mr-2"></p>
                            <p class="icono-brands"></p>               
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Opiniones -->
        <section class="w-full py-20">
            <h2 class="text-4xl font-semibold mb-4 text-center">Lo que opinan los usuarios de Devastador <sup class="text-lg">TM</sup></h2>
            <div class="w-full max-w-screen-xl m-auto flex flex-col md:flex-row">
                <div class="w-12/12 md:w-4/12 p-4 text-center flex flex-col justify-center">
                    <div class="shadow-lg p-2">
                        <div class="infoTestimonio">
                            <p class="text-md text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eaque fugit esse, ipsa eum iste explicabo delectus ipsum quaerat minus eligendi quas laudantium corrupti? Quos labore possimus pariatur in, non quas aliquid eius fugiat libero sit cumque sunt obcaecati quis!</p>
                        </div>
                        <div class="nombreTestimonio my-6">
                            <p class="text-sm text-lime-800 font-bold">Mario Hugo - 2019</p>
                        </div>
                    </div>
                </div>

                <div class="w-12/12 md:w-4/12 p-4 text-center flex flex-col justify-center">
                    <div class="shadow-lg p-2">
                        <div class="infoTestimonio">
                            <p class="text-md text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eaque fugit esse, ipsa eum iste explicabo delectus ipsum quaerat minus eligendi quas laudantium corrupti? Quos labore possimus pariatur in, non quas aliquid eius fugiat libero sit cumque sunt obcaecati quis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, reprehenderit.</p>
                        </div>
                        <div class="nombreTestimonio my-6">
                            <p class="text-sm text-lime-800 font-bold">Ximena Gómez - 2020</p>
                        </div>
                    </div>
                </div>

                <div class="w-12/12 md:w-4/12 p-4 text-center flex flex-col justify-center">
                    <div class="shadow-lg p-2">
                        <div class="infoTestimonio">
                            <p class="text-md text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eaque fugit esse, ipsa eum iste explicabo delectus ipsum quaerat minus eligendi quas laudantium corrupti? Quos labore possimus pariatur in, non quas aliquid eius fugiat libero sit cumque sunt obcaecati quis!</p>
                        </div>
                        <div class="nombreTestimonio my-6">
                            <p class="text-sm text-lime-800 font-bold">María Fernanda - 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vectores Dispositivos -->
        <section class="w-full max-w-screen-xl m-auto overflow-hidden flex flex-col md:flex-row justify-between">
            <div class="col texto w-12/12 md:w-5/12 px-6 flex flex-col justify-center">
                <h2 class="text-4xl font-bold mb-5">Protección completa para todos tus dispositivos</h1>
                <h2 class="text-xl mb-5">Devastador Móvil <sup class="text-xs">TM</sup></h2>
                <p class="text-md mb-5">Todos nuestros planes incluyen protección para tus dispositivos móviles y de escritorio.</p>
                <div>
                    <a href="" class="p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Ver todos los planes</a>
                </div>
            </div>
            <div class="col img mt-6 mx-auto w-11/12 md:w-7/12">
                <img src="./img/devices.png" alt="Mujer con laptop" style="width: 100%;">
            </div>
        </section>


        <!-- Tipos de planes -->
        <section class="w-full py-20">
            <h2 class="text-4xl font-semibold mb-20 text-center">Otros Planes</h2>
            <div class="w-full max-w-screen-xl m-auto flex flex-col md:flex-row">
                <div class="w-12/12 md:w-4/12 p-4 text-center flex flex-col justify-center">
                    <div class="mb-8">
                        <img src="./img/basi.png" style="width: 200px; margin: auto;">
                    </div>
                    <div class="infoPlan">
                        <h2 class="text-xl font-semibold mb-5">Plan Básico</h2>
                        <p class="text-md">Protección garantizada para usuarios comúnes</p>
                    </div>
                    <div class="precio py-4">
                        <p class="text-sm text-gray-400">MXN</p>
                        <p class="text-2xl font-bold text-lime-800">$499 <span class="text-sm">/ Año</span></p>
                    </div>
                    <div class="btnComprar">
                        <a href="plan-basico.php" class="p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Comprar Ahora</a>
                    </div>
                    <div class="caracteristicas my-6">
                        <ul>
                            <li class="py-2 border-b-2 border-gray-300 text-gray-600">Protección contra malware y ransomware</li>
                            <li class="py-2 border-b-2 border-gray-300 text-gray-600">Alto Rendimiento</li>
                            <li class="py-2 text-gray-600">Contraseñas protegidas</li>
                        </ul>
                    </div>
                </div>

                <div class="marginMinus w-12/12 md:w-4/12 p-4 text-center flex flex-col justify-center rounded-lg bg-gray-200 shadow-lg">
                    <div class="mb-8">
                        <img src="./img/avan.png" style="width: 200px; margin: auto;">
                    </div>
                    <div class="infoPlan">
                        <h2 class="text-xl font-semibold mb-5">Plan Avanzado</h2>
                        <p class="text-md">Protección avanzada para usuario exigentes</p>
                    </div>
                    <div class="precio py-4">
                        <p class="text-sm text-gray-400">MXN</p>
                        <p class="text-2xl font-bold text-lime-800">$799 <span class="text-sm">/ Año</span></p>
                    </div>
                    <div class="btnComprar">
                        <a href="plan-avanzado.php" class="p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Comprar Ahora</a>
                    </div>
                    <div class="caracteristicas my-6">
                        <ul>
                            <li class="py-2 border-b-2 border-gray-300 text-gray-600">Compras Online protegidas</li>
                            <li class="py-2 border-b-2 border-gray-300 text-gray-600">Bloqueo de anuncios</li>
                            <li class="py-2 text-gray-600">VPN</li>
                        </ul>
                    </div>
                </div>

                <div class="w-12/12 md:w-4/12 p-4 text-center flex flex-col justify-center">
                    <div class="mb-8">
                        <img src="./img/prof.png" style="width: 200px; margin: auto;">
                    </div>
                    <div class="infoPlan">
                        <h2 class="text-xl font-semibold mb-5">Plan Profesional</h2>
                        <p class="text-md">Protección pensada para profesionales y empresas</p>
                    </div>
                    <div class="precio py-4">
                        <p class="text-sm text-gray-400">MXN</p>
                        <p class="text-2xl font-bold text-lime-800">$1,099 <span class="text-sm">/ Año</span></p>
                    </div>
                    <div class="btnComprar">
                        <a href="plan-profesional.php" class="p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Comprar Ahora</a>
                    </div>
                    <div class="caracteristicas my-6">
                        <ul>
                            <li class="py-2 border-b-2 border-gray-300 text-gray-600">Navegación privada</li>
                            <li class="py-2 border-b-2 border-gray-300 text-gray-600">Protección de archivos</li>
                            <li class="py-2 text-gray-600">Bloqueo de contenido</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <?php include('chatbot.php'); ?>
    </main>

    <?php include('footer.php'); ?>

</body>
</html>