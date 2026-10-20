
<?php
session_start();

if (isset($_POST['konfirmasi']) && $_POST['konfirmasi'] == 'ya') {
    session_unset();
    session_destroy();

    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluar - RINCI</title>
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

    <div class="w-full max-w-sm bg-white rounded-2xl shadow-xl border border-gray-100 p-8 text-center">

        <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-orange-50 text-brand text-xl mb-5">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </div>

        <h1 class="text-xl font-bold text-gray-900">Yakin ingin keluar?</h1>

        <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-7">
            Anda akan keluar dari akun RINCI. Pastikan semua aktivitas Anda sudah selesai sebelum keluar.
        </p>

        <form method="POST" class="space-y-3">
            <button
                type="submit"
                name="konfirmasi"
                value="ya"
                class="w-full bg-brand hover:bg-brand-hover text-white font-semibold py-3 rounded-xl text-sm transition-colors"
            >
                Ya, Keluar
            </button>

            <a
                href="index.php"
                class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 rounded-xl text-sm transition-colors"
            >
                Batal
            </a>
        </form>

        <div class="mt-7 pt-5 border-t border-gray-100">
            <p class="text-xs text-gray-400">© 2026 RINCI App</p>
        </div>

    </div>

</body>
</html>
