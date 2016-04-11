




<div id="cover"><?php if (isset($loading2) == true) { echo $loading;?><br><span> <?php echo $loading2;?></span><?php }else{
    if (isset($loading) == true) : echo $loading; else: echo 'Loading...'; endif;}?></div>

<!--<div id="cover">BugaTravels<br><span>...LOADING...</span></div>-->


<div id="footer" style="background-color: black; overflow: hidden">
  <p>La gran ciudad</p>

  <a href="#" >www.BugaTravels.co.uk</a>
  <div class="copyright"><p>Desarrollado por <Span style="color:lightcyan">OneCreativeGroup </span>By <a href="#"> www.1maginaxion.co</a></p></div>
</div>
<div style="clear:both;"></div>
<?php if (isset($urlflag)!== true): ?>
<script>  function passUrl(url){}</script>
<?php endif; ?>