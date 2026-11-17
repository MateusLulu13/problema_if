<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Horários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Agendamento</h1>

    <img src="images.jpg" alt="gomes">

    <h2>Cadastrar</h2>
    <form>
        <label>Aluno:</label>
        <input type="text"><br><br>

        <label>Professor:</label>
        <select name="cor_escolhida" id="cores">
            <option value="">--Selecione uma opção--</option>
            <option value="1">Juliana Giseli da Silva Zancanaro</option>
            <option value="2">Ederson Borges</option>
            <option value="3">Elias Mendes Oliveira</option>
        </select><br><br>

        <label>Data:</label>
        <input type="date"><br><br>

        <label>Horário:</label>
        <select name="cor_escolhida" id="cores">
            <option value="">--Selecione uma opção--</option>
            <option value="1">12:50</option>
            <option value="2">00:00</option>
            <option value="3">08:00</option>
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>

    <hr>

    <h2>Consultar</h2>
    <form>
        <label>Data:</label>
        <input type="date">
        <button type="submit">Buscar</button>
    </form>

    <hr>

    <h2>Alterar</h2>
    <form>
        <label>ID / Agendamento:</label>
        <input type="text"><br><br>

        <label>Novo Horário:</label>
        <select name="cor_escolhida" id="cores">
            <option value="">--Selecione uma opção--</option>
            <option value="1">12:50</option>
            <option value="2">00:00</option>
            <option value="3">08:00</option>
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <hr>

    <h2>Excluir</h2>
    <form>
        <label>ID / Agendamento:</label>
        <input type="text"><br><br>

        <button type="submit">Excluir</button>
    </form>
</body>
</html>