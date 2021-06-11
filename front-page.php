<?php get_header(); ?>

<div class="divide-y divide-teal-400 md:divide-pink-400">

  <div class="py-2">
  
  <div class="border border-light-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto md:max-w-2xl">

  <div class="sm:w-32">
<img 
class="rounded-full"
src="<?php echo get_template_directory_uri(); ?>/assets/img/yo.jpg" 
alt="imagen">
</div>

  <div class="animate-pulse flex space-x-4 bg-light-blue-600 opacity-100">
    <div class="rounded-full bg-light-blue-400 h-12 w-12"></div>
    <div class="flex-1 space-y-4 py-1">
      <div class="h-4 bg-light-blue-400 rounded w-3/4"></div>
      <div class="space-y-2">
        <div class="h-4 bg-light-blue-400 rounded"></div>
        
        <div class="items-center">

<div>
<p>
Me llamo Bryan Flores, tengo 21 anios, tengo habilidades de aprender rapido cosas para poder desarrollarlas de manera eficiente.
Me gusta todo lo que correponde a sistemas de informacion, desarrollo de paginas web y el analisis de sistemas, ademas de estar
esrudiando ya casi 3 anios en el Instituto Tecnologico Quito.  
</p>
</div>

</div>

        <div class="h-4 bg-light-blue-400 rounded w-5/6"></div>
      </div>
    </div>
  </div>
</div>
  
  </div>

  <div class="py-2">
  
<div class="flex flex-col md:flex-row">
<center>
<table class="table-fixed border border-blue-600">
  <thead>
    <tr>
      <th class="w-1/2 ...">Descripcion</th>
      <th class="w-1/4 ...">Imagen Referencial</th>
      <th class="w-1/4 ...">Lenguaje</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-blue-600">Lenguaje de programacion trabajado para realizar aplicaciones de escritorio, lo desarrollamos en el IDE de Netbeans tanto en interfaz
  grafica como por consola, desarrollando proyectos enlazados a bases de datos utilizando conectores.</td>
      <td class="border border-blue-600"><center><img 
                                          class="sm:w-24"
                                          src="<?php echo get_template_directory_uri(); ?>/assets/img/php.png" 
                                          alt="imagen">
                                          </center>
                                          </td>
      <td class="border border-blue-600">Java</td>
    </tr>
    <tr class="bg-blue-200">
      <td class="border border-blue-600">Lenguaje de Programacion trabajado para realizar paginas web, desarrollado en el IDE Netbeans.</td>
      <td class="border border-blue-600"><center><img 
                                          class="sm:w-24"
                                          src="<?php echo get_template_directory_uri(); ?>/assets/img/java.png" 
                                          alt="imagen">
                                          </center>
                                          </td>
      <td class="border border-blue-600">PHP</td>
    </tr>
  </tbody>
</table>
</center>
  </div>

  </div>
  
  <div class="py-2">
  
  <div class="flex items-center">
   <div class="sm:w-32">
  <img 
  class="rounded-full"
  src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo Colegio.png" 
  alt="imagen">
   </div>

   <div>
  <p>
  Actualmente trabajo como editor de video en un colegio a distancia llamado Colegio Particular a Distancia Alfredo Pareja Diezcanseco,
  en el cual las clases son grabadas para que los estudiantes que estudian de manera virtual puedan observar las clases nuevamente y poder
  aprender de una manera mas dinamica
  </p>
   </div>

</div>

  </div>
</div>

<?php get_footer(); ?>