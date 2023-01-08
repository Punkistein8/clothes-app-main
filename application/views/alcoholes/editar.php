<div class="my-5 flex flex-row justify-center gap-3 items-center">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-emerald-600">
    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
  </svg>
  <h1 class="text-3xl">Editar <span class="text-emerald-600">Licor</span></h1>
</div>

<hr>

<?php if ($alcoholEditar) : ?>
  <div class="flex justify-center w-full">
    <form class="flex flex-col w-1/3 p-7 m-10 rounded-xl shadow-xl shadow-gray-300 bg-gray-100" method="POST" action="<?php echo site_url('alcoholes/editarAlcohol'); ?>/<?php echo $alcoholEditar->id_alc ?>">
      <ul class="flex flex-col gap-5">
        <li class="flex flex-row gap-2 justify-between">
          <label class="text-emerald-900 text-xl" for="nombre">Nombre:</label>
          <input class="w-8/12 border-[0.5px] border-gray-300 rounded-md p-1" type="text" name="nombre_alc" id="nombre" required value="<?php echo $alcoholEditar->nombre_alc ?>">
        </li>
        <li class="flex flex-row gap-2 justify-between">
          <label class="text-emerald-900 text-xl" for="precio">Precio:</label>
          <input class="w-8/12 border-[0.5px] border-gray-300 rounded-md p-1" type="text" name="precio_alc" id="precio" required value="<?php echo $alcoholEditar->precio_alc  ?>">
        </li>
        <li class="flex flex-row gap-2 justify-between">
          <label class="text-emerald-900 text-xl" for="foto">Foto:</label>
          <input class="w-8/12 border-[0.5px] border-gray-300 rounded-md p-1" type="text" name="foto_alc" id="foto" required value="<?php echo $alcoholEditar->foto_alc  ?>">
        </li>
        <li class="flex flex-row">
          <button type="submit" class="text-center w-full p-2 rounded-xl rounded-r-none cursor-pointer bg-emerald-500 hover:bg-emerald-600 text-white text-xl">Guardar</button>
          <a href="<?= site_url('alcoholes') ?>" class="text-center w-full p-2 rounded-xl rounded-l-none cursor-pointer bg-red-500 hover:bg-red-600 text-white text-xl">Cancelar</a>
        </li>
      </ul>
    </form>
  </div>
<?php else : ?>
  <div class="m-10 flex justify-center">
    <h1 class="text-2xl py-3 px-32 rounded-md bg-emerald-400 text-center text-neutral-100">Este licor <span class="font-semibold text-gray-900">no existe</span></h1>
  </div>
<?php endif; ?>