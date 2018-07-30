<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/index_style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">

		<div class="row" id="row_logo">
			<div class="col-md-offset-3">
				<img src="img/logo.png" alt="..." id="img_logo" class="img-rounded">		
			</div>
		</div>

		<div class="row" id="row_search">	
			<div class="col-md-offset-3 col-md-6">	
				<div class="input-group">
 					<input type="text" class="form-control" id="input_key" placeholder="Encontre o melhor hotel para você, meu consagrado" aria-describedby="sizing-addon1" > 
 					<span class="input-group-btn">
        				<button class="btn btn-default" type="button" id="btn_search">
        					<span class="glyphicon glyphicon-search"></span>
        				</button>
      				</span>			
				</div>
			</div>
		</div>

		<div class="row" >	
			<div class="col-md-offset-3 col-md-6">			
  				<div id="keywords"></div>
			</div>
		</div>
		
		<div class="row" id="row_five_btn">	
			<div class="col-md-offset-3 col-md-7">
					<button type="button" id="btn_bertioga" class="btn btn-default">Bertioga</button>
					<button type="button" id="btn_cubatao" class="btn btn-default">Cubatão</button>
					<button type="button" id="btn_guaruja" class="btn btn-default">Guarujá</button>
					<button type="button" id="btn_itanhaem" class="btn btn-default">Itanhaém</button>
					<button type="button" id="btn_mongagua" class="btn btn-default">Mongaguá</button>
			</div>
		</div>

		<div class="row" id="row_four_btn">	
			<div class="col-md-offset-3 col-md-5">
				<div class="row" style="margin:30px 0px 15px 0px;"><!--Barra de Pesquisa-->
					<button type="button" id="btn_peruibe" class="btn btn-default">Peruíbe</button>
					<button type="button" id="btn_praia" class="btn btn-default">Praia Grande</button>
					<button type="button" id="btn_santos" class="btn btn-default">Santos</button>
					<button type="button" id="btn_sao" class="btn btn-default">São Vicente</button>
				</div>
			</div>
		</div>

		<div class="row" id="rodape">
	        <div class="col-md-3">
		         <ul id="contato" style="list-style-type:none">
  					<li>Contato</li>
  					<li>Email: baixahoteis@gmail.com</li>
  					<li>Telefone: (xx) xxxx-xxxx</li>
				</ul> 		        
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->
	            
	        <div class="col-md-offset-2 col-md-3">
	            <ul id="contato" style="list-style-type:none">
  					<li><a href="">Fale Conosco</a></li>
  					<li><a href="">Tire Duvidas</a></li>
				</ul>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->

	        <div class="col-md-offset-1 col-md-2">       
	            <p style="color: #d9d9d9;">
	                Site Desenvolvido por Lucas Marques, Luis Carlos, Rodrigo Santos e Gabriel Laurencio, para o exercicio e efetivação do projeto de iniciação Cientifica.
	            </p>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->
	    </div>
	    
	    <div class="row" id="frodape">
	    	<div class="col-md-offset-4 col-md-4">
	    		<br>
	    		<br>
	    		<center>
		    		<strong>
		    			<p>Logo Pequeno</p>
		    		</strong>
		    		<small>
		    			<p>Direitos autorais 2018 (marca) | Todos os direitos reservados. </p>
		    		</small>
	    		</center>
	    	</div>
	    </div>

	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cookie.js"></script>
<script src="js/index_script.js"></script>
</body>
</html>