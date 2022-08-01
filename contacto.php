<?php include('head.php'); ?>
<body class="text-museo">
    <?php include('header.php'); ?>

    <main class="w-full">
        <!-- Call to action -->
        <section class="w-full max-w-screen-xl mx-auto my-8 relative flex flex-col md:flex-row justify-between">
            <div class="col texto w-12/12 md:w-5/12 px-6 py-6 flex flex-col justify-center z-10">
                <h1 class="text-4xl font-bold mb-8 md:mb-5">Contacto</h1>
                <h2 class="text-xl mb-5">Antivirus Devastador <sup class="text-xs">TM</sup></h2>
                <p class="text-md mb-5">Con gusto resolvemos tus dudas más especificas, solo escríbenos a través del formulario de contácto y nos comunicaremos contigo en cuanto nos sea posible.</p>
                <p class="text-md mb-5">También considera revisar nuestra sección de preguntas frecuentes:</p>
                <div>
                    <a href="help.php" class="p-2 bg-lime-600 hover:bg-lime-800 transition-colors text-white rounded-lg">Ir a FAQ's</a>
                </div>
            </div>
            <div class="col bg-lime-600 rounded-lg shadow-lg w-12/12 md:w-7/12">
                <div class="p-4 w-full">
                    <form action="" class="w-12/12 flex flex-row flex-wrap">
                        <div class="pb-4 md:pb-0 md:pr-4 w-full md:w-6/12">
                            <input class="w-full p-2 rounded-lg " type="text" placeholder="Nombre:" name="nombreContacto" id="nombreContacto">
                        </div>
                        <div class="w-full md:w-6/12">
                            <input class="w-full p-2 rounded-lg " type="text" placeholder="Correo:" name="correoContacto" id="correoContacto">
                        </div>
                        <div class="py-4 w-full">
                            <textarea class="w-full p-2 rounded-lg h-52 max-h-52 min-h-52" name="mensajeContacto" id="mensajeContacto" placeholder="Mensaje:"></textarea>
                        </div>
                        <div class="w-full">
                            <input class="p-2 rounded-lg  hover:bg-white bg-lime-800 hover:text-lime-800 text-white transition-colors cursor-pointer" type="button" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php include('chatbot.php'); ?>
    </main>

    <?php include('footer.php'); ?>

</body>
</html>