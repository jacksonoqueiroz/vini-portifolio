	$(document).ready(function(){
	$('#insert_form').on("submit", function(event){
		event.preventDefault();

		if ($('#nome').val() === ""){
			$(".msg").html('<div class="alert alert-danger">Erro: Preencha o Nome</div>');
		}else if($('#email').val() === ""){
			$(".msg").html('<div class="alert alert-danger">Erro: Preencha o E-mail</div>');
		}else if($('#assunto').val() === ""){
			$(".msg").html('<div class="alert alert-danger">Erro: Preencha o Assunto</div>');
		}else if($('#conteudo').val() === ""){
			$(".msg").html('<div class="alert alert-danger">Erro: Preencha o Conteúdo</div>');
		}else{
			//Receber os dados do formulário
		var dados = $("#insert_form").serialize();

		var url = $('#url').val();

		$.post(url, dados, function(retorno){
			if (retorno) {

				//LIMPAR OS CAMPOS
				$('#insert_form')[0].reset();
				$(".msg").html('<div class="alert alert-success">Obrigado pela sua Mensagem!</div>');
			}else{
				$(".msg").html('<div class="alert alert-danger">Erro: Mensagem não enviada!</div>');
			}
		});
		}

		
	});
});

function previewimagem(){
	var imagem = document.querySelector('input[name=img_nova]').files[0];
	var preview = document.querySelector('#preview-img');
	var but_salvar = document.querySelector('#bt-salvar');

	var reader = new FileReader();
	reader.onloadend = function(){
		preview.src = reader.result;
	};

	if(imagem){
		reader.readAsDataURL(imagem);
		but_salvar.disabled = false;
	} else{
		preview.src = "";
	}


}

//Mostrar a senha
function mostrarSenha() {
	var inputPass = document.getElementById('senha');
	var btnShowPass = document.getElementById('btn-senha');

	if (inputPass.type === 'password') {
		inputPass.setAttribute('type', 'text');
		btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
	}else{
		inputPass.setAttribute('type', 'password');
		btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
	}



}