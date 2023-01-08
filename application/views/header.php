<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://img.icons8.com/doodle/512/america.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.7.0/hint.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>El Baúl de América</title>
</head>

<body>
  <nav class="bg-gray-900">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="relative flex items-center justify-between">
        <a href="index.php" aria-label="Company" title="Company" class="inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 text-teal-accent-400 text-emerald-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
          </svg>

          <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">El Baúl de América</span>
        </a>
        <ul class="flex items-center  space-x-8 lg:flex">
          <li><a href="<?= base_url('Hombres') ?>" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Hombres</a></li>
          <li><a href="<?= base_url('Mujeres') ?>" class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Mujeres</a></li>
          <li><a href="<?= base_url('Alcoholes') ?>" aria-label="Licores" title="Licores" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Licores</a></li>
          <li><a href="<?= base_url('Tecnologias') ?>" aria-label="Tecnología" title="Tecnologías" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Tecnología</a></li>
        </ul>
      </div>
    </div>
  </nav>