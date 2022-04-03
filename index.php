<?php
require_once('init.php');
require_once('inc/header.php');
?>
  <header class="p-4 my-10 sm:my-0 sm:h-[80vh] ">
    <div class="flex flex-wrap p-4 h-full">
      <div class="order-last sm:order-first flex flex-col sm:justify-center sm:w-1/2 sm:ml-6">
        <h2 class="font-medium text-2xl mb-2 ">A Piece of tools in your Pocket</h2>
        <p>Latest Software download. Fix PC issues.<br/>Get your premium tools from here with 20% off<br/>Explore more about tools and software in our Article written by collabators.</p>
      </div>
      <div class="m-auto ">
        <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor"viewBox="0 0 16 16"><path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/></svg>
      </div>
    </div>
  </header><!-- HEADER ENDS HERE -->
  <hr>
  <h2 class="text-2xl mt-4 ml-4 font-medium">Featured Tool</h2>
  <div id="slider" class="w-full overflow-hidden mb-4">
    <div id="slides" class="m-4 flex gap-4 overflow-x-auto snap-mandatory snap-x scroll-smooth [-webkit-overflow-scrolling:touch]">
      <div id="slide-1" class="w-[75%]">
        <img class="h-[60%]" src="assets/office.png" alt="ms office">
        <button class="btn-download">Download</button>
      </div>
      <div id="slide-2">
        <img class="h-[60%]" src="assets/wamp.png" alt="wamp server">
        <button class="btn-download">Download</button>
      </div>
      <div id="slide-3">
        <svg viewBox="26.599999999999998 26.599999999999998 446.79999999999995 446.7" xmlns="http://www.w3.org/2000/svg" width="100" height="100"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="136.178" x2="372.681" y1="369.638" y2="287.81"><stop offset=".233" stop-color="#f89822"/><stop offset="1" stop-color="#c27818"/></linearGradient><path d="M456.1 473.3H43.9c-9.5 0-17.3-7.8-17.3-17.3V43.9c0-9.5 7.8-17.3 17.3-17.3h412.2c9.5 0 17.3 7.8 17.3 17.3v412.2c-.1 9.5-7.8 17.2-17.3 17.2z" fill="#4d4d4e"/><path d="M129.6 161.5l233.8-74.2s16.6-8.7 12.6 7.4l.6 71.5s2.9 10.5-11.5 13.1l-95 29.7z" fill="#f89820"/><path d="M129.6 161.5s-9.2 2.2-6.5 17.9l-.5 68.9s-.8 8.7 15.7 12.2L370 335.1s7.8 3.1 6.9-6.5l.1-76.8s2.2-7.9-12.2-13.1L270.1 209z" fill="#f89820"/><path d="M231.7 290.5l-98.6 30.1s-11.9.4-10.5 22.7-.1 67.2-.1 67.2 1 8.3 12.4 3.5l233.8-74.6s8.3-2.1 1.3-4.4c-7-2.2-138.3-44.5-138.3-44.5z" fill="url(#a)"/></svg>
        <a href="" download><button class="btn-download">Download</button></a>
      </div>
    </div>
    <div class="w-max mx-auto">
      <a class="slider-btn" href="#slide-1"></a>
      <a class="slider-btn" href="#slide-2"></a>
      <a class="slider-btn" href="#slide-3"></a>
    </div>
  </div>
  <hr><!-- FEATURES ENDS HERE -->
<h2 class="text-2xl my-4 ml-4 font-medium">Article</h2>
<article class="flex flex-wrap mt-4 mb-8 mx-auto sm:mx-40 justify-center gap-4">
  <?php
  for($i=0; $i<5; $i++){
    $topicname='Excel';
    $topicDesc='Microsoft Excel is the industry leading spreadsheet software program, a powerful data visualization and analysis tool.';
    $svg='excel';
    echo '<div class="w-full sm:w-44 sm:h-auto mx-8 sm:mx-0 py-8 sm:py-4 p-2 border-2 border-gray-500 rounded shadow-lg shadow-gray-500">
      <div class="flex justify-center">'; include('assets/svg/'. $svg .'.svg'); echo '</div>
      <h3 class="text-center font-medium">'. $topicname .'</h3><br/>
      <span>'. $topicDesc .'</span>
      <button class="">... Read more</button>
    </div>';
  }
  ?>
</article>
<hr/>

<?php require_once('inc/footer.php') ?>