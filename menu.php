<nav onclick="menuKlik();" id="menu">
  <div onclick="menuKlik();" id="parent-menu-bar">
  <div onclick="menuKlik();" class="menu-bar"></div>
  <div onclick="menuKlik();" class="menu-bar"></div>
  <div onclick="menuKlik();" class="menu-bar"></div>
</div>
<div id="center-menu">
  <?php if($i == 1) {echo'<div class="menu-list"><a title="Homepagina" style="color: #2798d1;" href="/">Home</a></div>';} else { echo'<div class="menu-list"><a title="Homepagina" href="/">Home</a></div>';}?>
  <?php if($i == 2) {echo'<div class="menu-list"><a title="Prijzen pagina" style="color: #2798d1;" href="/prijzen">Prijzen</a></div>';} else { echo'<div class="menu-list"><a title="Prijzen pagina" href="/prijzen">Prijzen</a></div>';}?>
  <?php if($i == 3) {echo'<div class="menu-list"><a title="Contact pagina" style="color: #2798d1;" href="/contact">Contact</a></div>';} else { echo'<div class="menu-list"><a title="Contact pagina" href="/contact">Contact</a></div>';}?>
</div>

</nav>
<nav id="menu-slide">
  <?php if($i == 1) {echo'<div class="menu-item"><a title="Homepagina" style="color: #2798d1;" href="/">Home</a></div>';} else { echo'<div class="menu-item"><a title="Homepagina" href="/">Home</a></div>';}?>
  <?php if($i == 2) {echo'<div class="menu-item"><a title="Prijzen pagina"  style="color: #2798d1;" href="/prijzen">Prijzen en handige links</a></div>';} else { echo'<div class="menu-item"><a title="Prijzen pagina" href="/prijzen">Prijzen en handige links</a></div>';}?>
  <?php if($i == 3) {echo'<div class="menu-item"><a title="Contact pagina" style="color: #2798d1;" href="/contact">Neem contact op</a></div>';} else { echo'<div title="Contact pagina" class="menu-item"><a href="/contact">Neem contact op</a></div>';}?>
</nav>
<div onclick="menuKlik();" id="menu-dark"></div>
