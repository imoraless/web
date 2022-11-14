<!-- FALTA VINCULAR CON CSS -->

<header>
	<h1 id="header1">BUHOS PRODUCTIONS</h1>
</header>

<body>
    <nav class="categories"> 
   <!-- <div class="categories">      -->  
        <ul id="l">

          <li><button id="menuDesplegable" onclick="v_productes(0)">Menu</button></li>
        </ul>
	    <ul>
              <!--<li id="accioDefault"><a href="index.php?accio=default">Nosotros</a></li>-->
              <!--<li id="accioDiscos"><a  href="index.php?accio=discos">Discos</a></li>-->
              <li><button id="accioDiscos" onclick="v_productes(2)">Discos</button></li>
              <li><button id="accioTour" onclick="v_productes(4)">Tour</button></li>
              <li><button id="accioMerch" onclick="v_productes(5)">Merch</button></li>
              
              <!--onclick="v_productes(3)"-->
              <li><button id="accioNosotros" onclick="v_productes(1)">Nosotros</button></li>
     

        </ul>	
	    <ul id="r">	
            <li><button id="accioCarro" onclick="v_productes(7)">Carro</button></li>
        </ul>
    <!--</div>-->
    </nav>
    
   <ul id="llistaMenuDesplegable">
    <li><a id="meuCompte" href="#">El meu compte</a></li>
    <li><a id="meuCompte" href="#">Les meves compres</a></li>
    <li><a id="meuCompte" href="#">Tancar sessió</a></li>
    <li><a id="accioRegistrat" href="index.php?accio=registrat">Registre</a></li>
    <li><a id="accioAdmin" href="index.php?accio=admin">Admin</a></li>
  </ul>
  <script>$('#llistaMenuDesplegable').css("display", "none")</script>
</body>


<script type="text/javascript">
    
		function v_productes(ide){
                $('#registroView').hide();
                $('#registroView1').hide();
                $('#registroView2').hide();
                $('.registre').hide();
                $('#registre1').hide();
                $('#header1').hide();
        if(ide == 0)
			  { 
          $('#llistaMenuDesplegable').toggle('slow');  
          
        }
			  if(ide == 2)
			  { 
                
          $('.categories').load('index.php?accio=discos'); 
          
        }
			  if(ide == 4)
			  { $('.categories').load('index.php?accio=tour'); }
			  if(ide == 5)
			  { $('.categories').load('index.php?accio=merch'); }
			  if(ide == 3)
			  { $('.categories').load('index.php?accio=admin'); }
		
			  if(ide == 6)
			  { $('.categories').load('index.php?accio=registrat'); }
			  if(ide == 7)
			  { $('.categories').load('index.php?accio=carro'); }
			  $('.categories').css('background-color','black');
		  }
	  </script>