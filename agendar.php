<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Projeto Login</title> 
    <link rel="stylesheet" href="CSS/estilo.css">

</head>
<body>
    <div id="corpo-form">
        <h1>Agendar</h1>
    <form>

            <label for="data">Data de uso</label>
            <input type="date" class="form-control" id="data">

                <label for="hora">Hora</label>
                <input type="time" class="form-control" id="hora">
                <label for="sala">Sala</label>
                <input type="number" class="form-control" id="sala">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao">
                <!-- Podera ser usado dois combobox, onde o user adicionar mais comboboxes conforme 
              ele deseja mais ferramentas, porem isso exije aplicação de javascript -->
        
                <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>
    </form>
</body>