
<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Akun demo
    $email_benar = 'ahmad.fauzi@mahasiswa.ac.id';
    $password_benar = 'rinci123';

    if ($email != $email_benar) {
        $error = 'Email tidak terdaftar. Periksa kembali email Anda.';
    } elseif ($password != $password_benar) {
        $error = 'Password yang Anda masukkan salah.';
    } else {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $email;

        header('Location: dashboard.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RINCI - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#FF6B00',
                            hover: '#EA580C'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8 sm:p-10">

        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-brand text-white text-2xl font-black mb-3">
                R
            </div>
            <h1 class="text-2xl font-bold text-gray-900">RINCI</h1>
            <p class="text-sm text-gray-500 mt-1">Manajemen Keuangan Mahasiswa</p>
        </div>

        <?php if ($error != '') { ?>
            <div class="mb-5 p-3.5 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm flex items-start gap-2">
                <i class="fa-solid fa-circle-exclamation mt-0.5"></i>
                <span><?php echo htmlspecialchars($error); ?></span>
            </div>
        <?php } ?>

        <form action="" method="POST" class="space-y-5">

            <div>
                <label for="email" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    Email
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400">
                        <i class="fa-regular fa-envelope text-sm"></i>
                    </div>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"
                        placeholder="nama@mahasiswa.ac.id"
                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-orange-200 focus:border-brand"
                    >
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    Password
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400">
                        <i class="fa-solid fa-lock text-sm"></i>
                    </div>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="Masukkan password"
                        class="w-full pl-10 pr-10 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-orange-200 focus:border-brand"
                    >
                    <button
                        type="button"
                        onclick="togglePassword()"
                        class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400"
                    >
                        <i id="eyeIcon" class="fa-regular fa-eye text-sm"></i>
                    </button>
                </div>
            </div>

            <button
                type="submit"
                class="w-full bg-brand hover:bg-brand-hover text-white font-semibold py-3 rounded-xl text-sm transition-colors"
            >
                Masuk <i class="fa-solid fa-arrow-right text-xs ml-1"></i>
            </button>

        </form>

       

        <div class="mt-6 pt-5 border-t border-gray-100 text-center">
            <p class="text-xs text-gray-400">© 2026 RINCI App</p>
        </div>

    </div>

    <script>
        function togglePassword() {
            var password = document.getElementById('password');
            var icon = document.getElementById('eyeIcon');

            if (password.type == 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

</body>
</html>
