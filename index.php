<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Front Desk | CRUD</title>
</head>
<body>
    <section class="label container g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sw h-md-250 position-relative">
        <div>
            <h3>Cadastro de Visitante</h3>
        </div>

    <form action="_inserir_visitante.php" method="POST" class="form_cad">

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" aria-describedby="nomeCompleto">
            </div>

            <div class="mb-3 col-md-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" oninput="mascara(this)" id="cpf" maxlength="11">
            </div>

            <div class="mb-3 col-md-3">
                <label class="form-label">RG</label>
                <input type="number" class="form-control" id="rg">
            </div>

            <div class="mb-3 col-md-6">
                <label class="form-label">Empresa</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3 col-md-6">
                <label class="form-label">Telefone</label>
                <input type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Observações</label>
                <input type="textarea" class="form-control" id="observacao" aria-describedby="observacao">
            </div>

            <div class="mb-3">
                <label for="image-upload" id="image-label" class="form-label">Foto</label>
                <input name="image" id="image-upload" type="file" class="form-control" id="observacao" aria-describedby="observacao">
            </div>

            <hr>

            <button type="submit" class="mb-6 btn btn-dark">Cadastrar</button>

        </div>
        
    </form>
    </section>

    <script>
        
            function mascara(i){
            
            var v = i.value;
            
            if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length-1);
                return;
            }
            
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";

            }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>