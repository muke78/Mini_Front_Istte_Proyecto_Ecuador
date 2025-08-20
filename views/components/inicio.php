<!-- Navbar -->
<nav class="bg-istte-blue text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 sm:w-10 sm:h-10 bg-istte-green rounded-full flex items-center justify-center">
                    <span class="font-bold text-sm sm:text-xl">IS</span>
                </div>
                <span class="font-bold text-lg sm:text-xl">ISTTE Fandom</span>
            </div>

            <div class="hidden lg:flex space-x-6">
                <a href="#inicio" class="hover:text-istte-green transition duration-300">Inicio</a>
                <a href="#carreras" class="hover:text-istte-green transition duration-300">Carreras</a>
                <a href="#noticias" class="hover:text-istte-green transition duration-300">Noticias</a>
                <a href="#galeria" class="hover:text-istte-green transition duration-300">Recursos</a>
                <a href="#foro" class="hover:text-istte-green transition duration-300">Foro</a>
                <button id="logoutBtn" class="bg-white text-black px-4 rounded hover:bg-istte-green hover:text-white transition duration-300">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Cerrar Sesión
                </button>
            </div>

            <div class="lg:hidden">
                <button id="menu-toggle"
                    class="focus:outline-none focus:ring-2 focus:ring-istte-green rounded-md p-1">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden overflow-hidden transition-all duration-300 mobile-menu-closed">
            <div class="px-4 py-3 space-y-3 border-t border-blue-800 mt-3">
                <a href="#inicio" class="block hover:text-istte-green transition duration-300 py-2">Inicio</a>
                <a href="#carreras" class="block hover:text-istte-green transition duration-300 py-2">Carreras</a>
                <a href="#noticias" class="block hover:text-istte-green transition duration-300 py-2">Noticias</a>
                <a href="#galeria" class="block hover:text-istte-green transition duration-300 py-2">Recursos</a>
                <a href="#foro" class="block hover:text-istte-green transition duration-300 py-2">Foro</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="inicio" class="hero-pattern text-white min-h-screen flex items-center">
    <div class="container mx-auto px-4 py-12 sm:py-20 md:py-32">
        <div class="flex flex-col items-center text-center max-w-5xl mx-auto">
            <h1 class="hero-text text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
                Instituto Superior Tecnológico ISTTE
            </h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-10 max-w-4xl leading-relaxed">
                La comunidad fandom dedicada a compartir experiencias, conocimientos y pasión por nuestra
                institución. En el Instituto Superior Tecnológico ISTTE, fomentamos un espacio donde estudiantes,
                egresados y docentes pueden conectarse para compartir sus vivencias, intercambiar saberes y celebrar
                juntos la identidad y valores que nos caracterizan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto sm:space-x-4">
                <a href="#acerca"
                    class="bg-istte-green hover:bg-green-600 text-white font-bold py-3 px-6 sm:px-8 rounded-full transition duration-300 shadow-lg text-center">
                    Conoce más
                </a>
                <a href="#foro"
                    class="bg-white hover:bg-gray-100 text-istte-blue font-bold py-3 px-6 sm:px-8 rounded-full transition duration-300 shadow-lg text-center">
                    Únete al foro
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white py-8 sm:py-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 text-center">
            <div class="p-4 sm:p-6">
                <div class="text-istte-green text-2xl sm:text-3xl lg:text-4xl font-bold mb-2">25+</div>
                <div class="text-gray-600 text-sm sm:text-base">Años de experiencia</div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="text-istte-green text-2xl sm:text-3xl lg:text-4xl font-bold mb-2">3000+</div>
                <div class="text-gray-600 text-sm sm:text-base">Estudiantes</div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="text-istte-green text-2xl sm:text-3xl lg:text-4xl font-bold mb-2">14</div>
                <div class="text-gray-600 text-sm sm:text-base">Carreras técnicas</div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="text-istte-green text-2xl sm:text-3xl lg:text-4xl font-bold mb-2">95%</div>
                <div class="text-gray-600 text-sm sm:text-base">Tasa de empleo</div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="acerca" class="py-12 sm:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-istte-blue mb-2">Acerca de ISTTE</h2>
            <div class="w-20 h-1 bg-istte-green mx-auto"></div>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <svg class="w-full h-auto max-w-md mx-auto" viewBox="0 0 500 400"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="50" y="50" width="400" height="300" rx="20" fill="#0a2e5c" />
                        <rect x="70" y="70" width="360" height="260" rx="10" fill="#ffffff" />
                        <rect x="100" y="100" width="300" height="40" rx="5" fill="#1a9f53" />
                        <rect x="100" y="160" width="300" height="20" rx="5" fill="#e5e7eb" />
                        <rect x="100" y="190" width="300" height="20" rx="5" fill="#e5e7eb" />
                        <rect x="100" y="220" width="200" height="20" rx="5" fill="#e5e7eb" />
                        <rect x="100" y="260" width="120" height="40" rx="5" fill="#1a9f53" />
                    </svg>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <h3 class="text-xl sm:text-2xl font-semibold text-istte-blue mb-4">Nuestra Historia</h3>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    El Instituto Superior Tecnológico ISTTE fue fundado con la misión de formar profesionales
                    técnicos de excelencia, capaces de responder a las demandas del mercado laboral actual y
                    contribuir al desarrollo sostenible de nuestra sociedad.
                </p>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Desde nuestros inicios, nos hemos destacado por ofrecer una educación de calidad, con un enfoque
                    práctico y orientado a la inserción laboral inmediata de nuestros egresados.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-istte-green text-2xl sm:text-3xl mb-2">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="font-semibold mb-1">Educación de Calidad</h4>
                        <p class="text-sm text-gray-600">Programas académicos actualizados y relevantes</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-istte-green text-2xl sm:text-3xl mb-2">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="font-semibold mb-1">Comunidad Vibrante</h4>
                        <p class="text-sm text-gray-600">Ambiente de aprendizaje colaborativo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carreras Section -->
<section id="carreras" class="py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-istte-blue mb-2">Nuestras Carreras</h2>
            <div class="w-20 h-1 bg-istte-green mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">
                Descubre nuestra amplia oferta académica diseñada para prepararte para los desafíos del mundo
                laboral actual
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Carrera 1 -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-32 sm:h-40 bg-istte-blue flex items-center justify-center">
                    <i class="fas fa-laptop-code text-3xl sm:text-5xl text-white"></i>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-istte-blue mb-2">Desarrollo de Software</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">
                        Forma parte de la revolución digital creando soluciones innovadoras en el campo del
                        desarrollo de software.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm bg-istte-green text-white py-1 px-3 rounded-full">3
                            años</span>
                        <a href="#" class="text-istte-blue hover:text-istte-green transition text-sm sm:text-base">
                            Ver más <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carrera 2 -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-32 sm:h-40 bg-istte-blue flex items-center justify-center">
                    <i class="fas fa-network-wired text-3xl sm:text-5xl text-white"></i>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-istte-blue mb-2">Redes y Telecomunicaciones</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">
                        Especialízate en el diseño, implementación y mantenimiento de infraestructuras de redes
                        modernas.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm bg-istte-green text-white py-1 px-3 rounded-full">3
                            años</span>
                        <a href="#" class="text-istte-blue hover:text-istte-green transition text-sm sm:text-base">
                            Ver más <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carrera 3 -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-32 sm:h-40 bg-istte-blue flex items-center justify-center">
                    <i class="fas fa-chart-line text-3xl sm:text-5xl text-white"></i>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-istte-blue mb-2">Administración de Empresas</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">
                        Adquiere las habilidades necesarias para gestionar eficientemente organizaciones en diversos
                        sectores.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm bg-istte-green text-white py-1 px-3 rounded-full">3
                            años</span>
                        <a href="#" class="text-istte-blue hover:text-istte-green transition text-sm sm:text-base">
                            Ver más <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carrera 4 -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-32 sm:h-40 bg-istte-blue flex items-center justify-center">
                    <i class="fas fa-wrench text-3xl sm:text-5xl text-white"></i>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-istte-blue mb-2">Mecánica Automotriz</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">
                        Combina conocimientos de mecánica, electrónica e informática para mantener y reparar
                        vehículos modernos.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm bg-istte-green text-white py-1 px-3 rounded-full">3
                            años</span>
                        <a href="#" class="text-istte-blue hover:text-istte-green transition text-sm sm:text-base">
                            Ver más <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carrera 5 -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-32 sm:h-40 bg-istte-blue flex items-center justify-center">
                    <i class="fas fa-heart text-3xl sm:text-5xl text-white"></i>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-istte-blue mb-2">Enfermería Veterinaria</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">
                        Usa técnicas y procedimientos para la atención hospitalaria y suministro de fármacos y
                        terapias en animales, siempre bajo supervisión veterinaria.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm bg-istte-green text-white py-1 px-3 rounded-full">3
                            años</span>
                        <a href="#" class="text-istte-blue hover:text-istte-green transition text-sm sm:text-base">
                            Ver más <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carrera 6 -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="h-32 sm:h-40 bg-istte-blue flex items-center justify-center">
                    <i class="fas fa-utensils text-3xl sm:text-5xl text-white"></i>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-istte-blue mb-2">Gastronomía</h3>
                    <p class="text-gray-600 mb-4 text-sm sm:text-base">
                        Prepárate para una carrera donde encontrarás herramientas para desenvolverte laboralmente en
                        diversos ámbitos culinarios.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm bg-istte-green text-white py-1 px-3 rounded-full">3
                            años</span>
                        <a href="#" class="text-istte-blue hover:text-istte-green transition text-sm sm:text-base">
                            Ver más <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-8 sm:mt-10">
            <a href="#"
                class="inline-block bg-istte-blue hover:bg-blue-900 text-white font-bold py-3 px-6 sm:px-8 rounded-full transition duration-300 shadow-lg">
                Ver todas las carreras
            </a>
        </div>
    </div>
</section>

<!-- Noticias Section -->
<!-- Noticias Section -->
<section id="noticias" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-istte-blue mb-2">Últimas Noticias</h2>
            <div class="w-20 h-1 bg-istte-green mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Mantente al día con las últimas novedades y eventos de
                nuestra comunidad</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Noticia 1 -->
            <div
                class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 news-card">
                <div class="h-48 bg-istte-blue relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-30" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="absolute bottom-0 left-0 bg-istte-green text-white py-1 px-4">
                        <span>15 Mayo, 2023</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-istte-blue mb-2">I</h3>
                    <p class="text-gray-600 mb-4">El ISTTE </p>
                    <a href="#" class="text-istte-blue hover:text-istte-green transition">Leer más <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Noticia 2 -->
            <div
                class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 news-card">
                <div class="h-48 bg-istte-blue relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-30" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="absolute bottom-0 left-0 bg-istte-green text-white py-1 px-4">
                        <span>2 Mayo, 2023</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-istte-blue mb-2">Feria de empleo 2025: Conectando talento</h3>
                    <p class="text-gray-600 mb-4">Más de 50 empresas participarán en nuestra feria anual de empleo
                        para reclutar a nuestros estudiantes y egresados.</p>
                    <a href="#" class="text-istte-blue hover:text-istte-green transition">Leer más <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Noticia 3 -->
            <div
                class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 news-card">
                <div class="h-48 bg-istte-blue relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-30" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z">
                            </path>
                        </svg>
                    </div>
                    <div class="absolute bottom-0 left-0 bg-istte-green text-white py-1 px-4">
                        <span>20 julio, 2025</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-istte-blue mb-2">estrategia</h3>
                    <p class="text-gray-600 mb-4"> El instituto está implementando nuevas estrategias para
                        fortalecer su presencia en la comunidad, incluyendo la participación en eventos como el
                        Ciclo Paseo de Quito.</p>
                    <a href="#" class="text-istte-blue hover:text-istte-green transition">Leer más <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="#"
                class="inline-block bg-istte-blue hover:bg-blue-900 text-white font-bold py-3 px-8 rounded-full transition duration-300 shadow-lg">Ver
                todas las noticias</a>
        </div>
    </div>
</section>

<!-- Galería Section -->
<section id="galeria" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-istte-blue mb-2">Galería.jpg</h2>
            <div class="w-20 h-1 bg-istte-green mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Explora momentos destacados de nuestra comunidad educativa
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Gallery Item 1 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-blue">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Graduación 2027</h4>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-green">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Talleres 2025</h4>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-blue">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Feria de proyectos</h4>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-green">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Visita empresarial</h4>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-blue">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Informacion detallada</h4>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-green">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Actividades deportivas</h4>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-blue">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Talleres prácticos</h4>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-istte-green">
                <div class="h-48 md:h-64 flex items-center justify-center p-4">
                    <svg class="w-full h-full text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-3 bg-white">
                    <h4 class="font-medium text-istte-blue">Eventos culturales</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Foro Section -->
<section id="foro" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-istte-blue mb-2">Foro de la Comunidad</h2>
            <div class="w-20 h-1 bg-istte-green mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Participa en nuestro foro y conecta con otros miembros de la
                comunidad ISTTE</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Tabs -->
            <div class="flex border-b">
                <button class="tab-button tab-active py-4 px-6 font-medium focus:outline-none"
                    data-tab="recientes">Temas Recientes</button>
                <button class="tab-button py-4 px-6 font-medium focus:outline-none" data-tab="populares">Más
                    Populares</button>
                <button class="tab-button py-4 px-6 font-medium focus:outline-none" data-tab="sin-respuesta">Sin
                    Respuesta</button>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
                <!-- Recientes Tab -->
                <div id="recientes" class="tab-content">
                    <div class="space-y-4">
                        <!-- Topic 1 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">¿Cómo prepararse para la feria de empleo?</a></h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green">Mishell Rivera</span> - hace 2 días</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-istte-blue text-white rounded-full w-8 h-8 flex items-center justify-center">
                                        12</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                            <div class="mt-2 text-gray-700">
                                <p>Hola a todos, quisiera saber cómo puedo prepararme mejor para la próxima feria de
                                    empleo. ¿Algún consejo?</p>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <span class="text-xs bg-gray-200 text-gray-700 py-1 px-2 rounded-full">Empleo</span>
                                <span
                                    class="text-xs bg-gray-200 text-gray-700 py-1 px-2 rounded-full">Consejos</span>
                            </div>
                        </div>

                        <!-- Topic 2 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">Recursos para aprender programación web</a></h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green">CarlosD</span> - hace 3 días</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-istte-blue text-white rounded-full w-8 h-8 flex items-center justify-center">
                                        8</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                            <div class="mt-2 text-gray-700">
                                <p>Estoy buscando recursos gratuitos para mejorar mis habilidades en desarrollo web.
                                    ¿Alguien tiene recomendaciones?</p>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <span
                                    class="text-xs bg-gray-200 text-gray-700 py-1 px-2 rounded-full">Programación</span>
                                <span
                                    class="text-xs bg-gray-200 text-gray-700 py-1 px-2 rounded-full">Recursos</span>
                            </div>
                        </div>

                        <!-- Topic 3 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">Taller de estudio para el proyecto grupo de paginas web</a>
                                    </h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green"> Ing.Irving Lopez</span> - hace 4 días</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-istte-blue text-white rounded-full w-8 h-8 flex items-center justify-center">
                                        5</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                            <div class="mt-2 text-gray-700">
                                <p>Estoy formando un grupo de estudio para prepararnos para el desarrollo de
                                    aplicaciones web ¿Quién se apunta?</p>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <span class="text-xs bg-gray-200 text-gray-700 py-1 px-2 rounded-full">Redes</span>
                                <span
                                    class="text-xs bg-gray-200 text-gray-700 py-1 px-2 rounded-full">Certificaciones</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <a href="#"
                            class="inline-block bg-istte-green hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full transition duration-300">Ver
                            más temas</a>
                    </div>
                </div>

                <!-- Populares Tab (hidden by default) -->
                <div id="populares" class="tab-content hidden">
                    <div class="space-y-4">
                        <!-- Popular Topic 1 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">Guía completa para encontrar prácticas profesionales</a></h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green">RobertoM</span> - hace 2 semanas</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-istte-blue text-white rounded-full w-8 h-8 flex items-center justify-center">
                                        45</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                        </div>

                        <!-- Popular Topic 2 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">¿Vale la pena especializarse en inteligencia artificial?</a>
                                    </h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green">Jessica Pincay</span> - hace 1 mes</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-istte-blue text-white rounded-full w-8 h-8 flex items-center justify-center">
                                        38</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sin Respuesta Tab (hidden by default) -->
                <div id="sin-respuesta" class="tab-content hidden">
                    <div class="space-y-4">
                        <!-- Unanswered Topic 1 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">Problema con proyecto de Aplicaciones web</a></h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green">Anthony Leines</span> - hace 1 día</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-gray-300 text-gray-700 rounded-full w-8 h-8 flex items-center justify-center">
                                        0</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                        </div>

                        <!-- Unanswered Topic 2 -->
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-istte-blue hover:text-istte-green transition"><a
                                            href="#">Recomendaciones de libros para gestión de proyectos</a></h3>
                                    <p class="text-sm text-gray-600 mt-1">Iniciado por <span
                                            class="text-istte-green">Gustavo Idrobo</span> - hace 2 días</p>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="bg-gray-300 text-gray-700 rounded-full w-8 h-8 flex items-center justify-center">
                                        0</div>
                                    <span class="text-xs text-gray-500">respuestas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6">
                <h3 class="text-xl font-bold text-istte-blue mb-4">Crear nuevo tema</h3>
                <form>
                    <div class="mb-4">
                        <label for="topic-title" class="block text-gray-700 font-medium mb-2">Título</label>
                        <input type="text" id="topic-title"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green"
                            placeholder="Escribe un título para tu tema">
                    </div>
                    <div class="mb-4">
                        <label for="topic-content" class="block text-gray-700 font-medium mb-2">Contenido</label>
                        <textarea id="topic-content" rows="4"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green"
                            placeholder="Escribe el contenido de tu tema"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="topic-tags" class="block text-gray-700 font-medium mb-2">Etiquetas</label>
                        <input type="text" id="topic-tags"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green"
                            placeholder="Añade etiquetas separadas por comas">
                    </div>
                    <button type="submit"
                        class="bg-istte-green hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full transition duration-300">Publicar
                        tema</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-istte-blue text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <div class="w-10 h-10 bg-istte-green rounded-full flex items-center justify-center">
                        <span class="font-bold text-xl">IS</span>
                    </div>
                    <span class="font-bold text-xl">ISTTE Fandom</span>
                </div>
                <p class="text-gray-300 mb-4">La comunidad fandom dedicada a compartir experiencias, conocimientos y
                    pasión por nuestra institución.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-istte-green transition"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white hover:text-istte-green transition"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-istte-green transition"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white hover:text-istte-green transition"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-6">Enlaces Rápidos</h3>
                <ul class="space-y-3">
                    <li><a href="#inicio" class="text-gray-300 hover:text-istte-green transition">Inicio</a></li>
                    <li><a href="#acerca" class="text-gray-300 hover:text-istte-green transition">Acerca de</a></li>
                    <li><a href="#carreras" class="text-gray-300 hover:text-istte-green transition">Carreras</a>
                    </li>
                    <li><a href="#noticias" class="text-gray-300 hover:text-istte-green transition">Noticias</a></
                            <li><a href="#foro" class="text-gray-300 hover:text-istte-green transition">Foro</a>
                    </li>

                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-6">Contacto</h3>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt mt-1"></i>
                        <span>Av. Principal #123, Ciudad</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-phone mt-1"></i>
                        <span>+123 456 7890</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-envelope mt-1"></i>
                        <span>info@istte.edu</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-6">Boletín Informativo</h3>
                <p class="text-gray-300 mb-4">Suscríbete para recibir las últimas noticias y actualizaciones.</p>
                <form>
                    <div class="flex">
                        <input type="email" placeholder="Tu correo electrónico"
                            class="px-4 py-2 w-full rounded-l-lg focus:outline-none text-gray-800">
                        <button type="submit"
                            class="bg-istte-green hover:bg-green-600 text-white px-4 py-2 rounded-r-lg transition duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-400">
            <p>&copy; 2025 ISTTE Fandom. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>


<script>
    document.getElementById('logoutBtn').addEventListener('click', function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Deseas cerrar tu sesión?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, cerrar sesión',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Mostrar indicador de carga
                Swal.fire({
                    title: 'Cerrando sesión...',
                    text: 'Por favor espera',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // Realizar logout
                fetch('logout.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then(() => {
                        // Limpiar historial y redirigir
                        window.location.replace('index.php');
                    })
                    .catch(() => {
                        // En caso de error, forzar redirección
                        window.location.replace('index.php');
                    });
            }
        });
    });

    // Prevenir navegación hacia atrás con teclado
    document.addEventListener('keydown', function(e) {
        // Alt + Flecha izquierda o Backspace
        if ((e.altKey && e.keyCode === 37) || e.keyCode === 8) {
            if (e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
                e.preventDefault();
            }
        }
    });
</script>