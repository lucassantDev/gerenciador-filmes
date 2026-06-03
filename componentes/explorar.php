<?php
    include 'filmes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>AB | Explorar</title>
</head>
<body class="bg-[var(--gray-100)]">
    <header class="w-full h-24 border-b-1 border-[var(--gray-400)] flex items-center justify-between">
        <img src="../icone/Logo.svg" alt="logo" class="w-16 h-16 ml-4">

        <div class="flex gap-4 font-semibold text-xl">
            <button class="text-gray-200 cursor-pointer text-[var(--gray-600)]">Explorar</button>
            <button class="text-gray-200 cursor-pointer">Meus Filmes</button>
        </div>

        <div class="flex items-center gap-4 mr-4">
            <p class="text-[var(--gray-500)] font-semibold">Olá, Jordan</p>
            <div class="w-12 h-12 border-2 border-red-200 rounded-lg cursor-pointer"></div>
            <div class="w-12 h-12 border-2 border-red-200 rounded-lg cursor-pointer"></div>
        </div>
    </header>

    <main class="w-full h-fit border-2 flex flex-col items-center">

        <section class="w-full h-24 border-2 flex items-center">
            <h1 class="text-5xl ml-58 font-bold text-[var(--gray-700)]">
                Explorar
            </h1>
        </section>
        <section class="w-3/4 h-screen border-2 grid gap-4 grid-cols-4 items-center justify-items-center py-24">
            <?php foreach($filmes as $filme): ?>
                <div class="w-62 h-96 bg-[url(<?= $filme['Cartaz'] ?>)] bg-cover rounded-xl relative group overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 translate-y-3 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 text-white">
                        <p class="font-bold text-lg"><?= $filme['Filme'] ?></p>
                        <p class="text-sm font-semibold"><?= $filme['Gênero'] ?> • <?= $filme['Ano'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>    
            
        </section>
 
    </main>
</body>
</html>