<body class="min-h-screen flex items-center justify-center p-4">
    <!-- Background decorative elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-32 h-32 bg-istte-green rounded-full opacity-10 blur-xl"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-blue-400 rounded-full opacity-10 blur-xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white rounded-full opacity-5 blur-2xl"></div>
    </div>

    <div class="w-full max-w-md relative z-10">
        <!-- Logo y Header -->
        <div class="text-center mb-8 fade-in">
            <div class="inline-flex items-center justify-center bg-istte-green rounded-full mb-4 floating-icon">
                <img src="views/img/logo.jpg" alt="">
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">ISTTE</h1>
            <p class="text-white/80 text-sm">Instituto Superior Tecnológico</p>
        </div>

        <!-- Tabs de navegación -->
        <div class="glass-effect rounded-t-lg p-1 mb-0">
            <div class="flex rounded-lg">
                <button id="loginTab" class="tab-active flex-1 py-2 px-4 rounded-lg text-sm font-medium transition-all duration-300">
                    Iniciar Sesión
                </button>
                <button id="registerTab" class="tab-inactive flex-1 py-2 px-4 rounded-lg text-sm font-medium transition-all duration-300">
                    Registrarse
                </button>
            </div>
        </div>

        <!-- Formulario de Login -->
        <div id="loginForm" class="glass-effect rounded-b-lg rounded-t-none shadow-2xl p-8 fade-in">
            <form id="loginFormElement" class="space-y-6" method="POST">
                <!-- Email -->
                <div class="input-group">
                    <label for="email" class="block text-white text-sm font-medium mb-2">Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="tu@email.com"
                            required
                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green" />
                    </div>
                </div>

                <!-- Contraseña -->
                <div class="input-group">
                    <label for="password" class="block text-white text-sm font-medium mb-2">Contraseña</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Tu contraseña"
                            required
                            class="input-field w-full pl-10 pr-12 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green" />
                        <button type="button" id="togglePassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white/60 hover:text-white">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Botón de Login -->
                <button type="submit" class="btn-primary w-full py-3 rounded-lg font-semibold text-white">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Ingresar
                </button>
                <?php
                $login = new ControllerUser();
                $login->ctrLoginToUsers();
                ?>
            </form>
        </div>

        <!-- Formulario de Registro -->
        <div id="registerForm" class="glass-effect rounded-b-lg rounded-t-none shadow-2xl p-8 hidden">
            <form id="registerFormElement" class="space-y-4" method="POST">
                <!-- Nombre Completo -->
                <div class="input-group">
                    <label for="fullName" class="block text-white text-sm font-medium mb-2">Nombre Completo</label>
                    <div class="relative">
                        <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                        <input
                            type="text"
                            id="fullName"
                            name="fullName"
                            placeholder="Tu nombre completo"

                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green" />
                    </div>
                </div>

                <!-- Email -->
                <div class="input-group">
                    <label for="regEmail" class="block text-white text-sm font-medium mb-2">Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                        <input
                            type="email"
                            id="regEmail"
                            name="regEmail"
                            placeholder="tu@email.com"

                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green" />
                    </div>
                </div>

                <!-- Contraseña -->
                <div class="input-group">
                    <label for="regPassword" class="block text-white text-sm font-medium mb-2">Contraseña</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                        <input
                            type="password"
                            id="regPassword"
                            name="regPassword"
                            placeholder="Mínimo 6 caracteres"
                            minlength="6"
                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green" />
                        <button type="button" id="toggleConfirmPasswordField" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white/60 hover:text-white">
                            <i class="fas fa-eye" id="eyeIconRegister"></i>
                        </button>
                    </div>
                    <div class="mt-1">
                        <div class="flex space-x-1">
                            <div class="h-1 w-full bg-white/20 rounded" id="strength1"></div>
                            <div class="h-1 w-full bg-white/20 rounded" id="strength2"></div>
                            <div class="h-1 w-full bg-white/20 rounded" id="strength3"></div>
                        </div>
                        <p class="text-xs text-white/60 mt-1" id="strengthText">Fortaleza de contraseña</p>
                    </div>
                </div>

                <!-- Confirmar Contraseña -->
                <div class="input-group">
                    <label for="confirmPassword" class="block text-white text-sm font-medium mb-2">Confirmar Contraseña</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            placeholder="Confirma tu contraseña"
                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-istte-green" />
                        <button type="button" id="toggleConfirmRegisterPassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white/60 hover:text-white">
                            <i class="fas fa-eye" id="eyeIconConfirmPassword"></i>
                        </button>
                    </div>
                </div>

                <!-- Botón de Registro -->
                <button type="submit" class="btn-primary w-full py-3 rounded-lg font-semibold text-white" id="registerBtn">
                    <i class="fas fa-user-plus mr-2"></i>
                    <span id="btnText">Crear Cuenta</span>
                </button>
                <?php
                $register = new ControllerUser();
                $register->ctrRegisterUser();
                ?>
            </form>
        </div>
    </div>
    <script>
        // Tab functionality
        const loginTab = document.getElementById('loginTab');
        const registerTab = document.getElementById('registerTab');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        function switchTab(activeTab, inactiveTab, showForm, hideForm) {
            activeTab.className = 'tab-active flex-1 py-2 px-4 rounded-lg text-sm font-medium transition-all duration-300';
            inactiveTab.className = 'tab-inactive flex-1 py-2 px-4 rounded-lg text-sm font-medium transition-all duration-300';

            hideForm.classList.add('hidden');
            showForm.classList.remove('hidden');
            showForm.classList.add('fade-in');
        }

        loginTab.addEventListener('click', () => {
            switchTab(loginTab, registerTab, loginForm, registerForm);
        });

        registerTab.addEventListener('click', () => {
            switchTab(registerTab, loginTab, registerForm, loginForm);
        });

        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        const toggleConfirmPassword = document.getElementById('toggleConfirmPasswordField');
        const confirmPasswordField = document.getElementById('regPassword');
        const confirmEyeIcon = document.getElementById('eyeIconRegister');

        const toggleConfirmRegisterPassword = document.getElementById('toggleConfirmRegisterPassword');
        const confirmPasswordRegisterField = document.getElementById('confirmPassword');
        const confirmRegisterEyeIcon = document.getElementById('eyeIconConfirmPassword');

        togglePassword.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            eyeIcon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        });

        toggleConfirmPassword.addEventListener('click', () => {
            const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordField.setAttribute('type', type);
            confirmEyeIcon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        });

         toggleConfirmRegisterPassword.addEventListener('click', () => {
            const type = confirmPasswordRegisterField.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordRegisterField.setAttribute('type', type);
            confirmRegisterEyeIcon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        });

        // Password strength indicator
        const regPassword = document.getElementById('regPassword');
        const strength1 = document.getElementById('strength1');
        const strength2 = document.getElementById('strength2');
        const strength3 = document.getElementById('strength3');
        const strengthText = document.getElementById('strengthText');

        regPassword.addEventListener('input', (e) => {
            const password = e.target.value;
            let strength = 0;

            if (password.length >= 6) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/) && password.match(/[^a-zA-Z0-9]/)) strength++;

            // Reset all indicators
            [strength1, strength2, strength3].forEach(el => {
                el.className = 'h-1 w-full bg-white/20 rounded';
            });

            if (strength >= 1) {
                strength1.className = 'h-1 w-full bg-red-500 rounded';
                strengthText.textContent = 'Débil';
                strengthText.className = 'text-xs text-red-400 mt-1';
            }
            if (strength >= 2) {
                strength2.className = 'h-1 w-full bg-yellow-500 rounded';
                strengthText.textContent = 'Media';
                strengthText.className = 'text-xs text-yellow-400 mt-1';
            }
            if (strength >= 3) {
                strength3.className = 'h-1 w-full bg-green-500 rounded';
                strengthText.textContent = 'Fuerte';
                strengthText.className = 'text-xs text-green-400 mt-1';
            }
        });

        // Password confirmation validation
        document.getElementById('confirmPassword').addEventListener('input', (e) => {
            const password = document.getElementById('regPassword').value;
            const confirmPassword = e.target.value;

            if (confirmPassword && password !== confirmPassword) {
                e.target.style.borderColor = '#ef4444';
            } else {
                e.target.style.borderColor = 'rgba(255, 255, 255, 0.3)';
            }
        });

        // Form validation and submission
        document.getElementById('registerFormElement').addEventListener('submit', function(e) {
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const email = document.getElementById('regEmail').value;
            const fullName = document.getElementById('fullName').value;

            // Validar que las contraseñas coincidan
            if (password !== confirmPassword) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Las contraseñas no coinciden',
                    confirmButtonText: 'Cerrar'
                });
                return false;
            }

            // Validar longitud de contraseña
            if (password.length < 6) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'La contraseña debe tener al menos 6 caracteres',
                    confirmButtonText: 'Cerrar'
                });
                return false;
            }

            // Validar email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Por favor ingresa un email válido',
                    confirmButtonText: 'Cerrar'
                });
                return false;
            }

            // Cambiar estado del botón
            const registerBtn = document.getElementById('registerBtn');
            const btnText = document.getElementById('btnText');
            registerBtn.disabled = true;
            btnText.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Registrando...';
        });
    </script>
</body>