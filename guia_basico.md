# Guia de PHP Básico

Este guia oferece exemplos práticos e explicações sobre os conceitos fundamentais do PHP, desde controle de fluxo até interação com bancos de dados e programação orientada a objetos.
Para ver exemplos de código, arrays, funções e CRUD, acesse: [Exemplos de Código](guia_basico.md)


## 1. Variáveis e Tipos de Dados

No PHP, as variáveis são declaradas com o símbolo `$` seguido do nome da variável. O PHP é uma linguagem de tipagem dinâmica, o que significa que você não precisa declarar o tipo da variável explicitamente.

```php
<?php
$nome = "João"; // String
$idade = 30; // Inteiro
$altura = 1.75; // Float
$isEstudante = true; // Booleano
$frutas = ["Maçã", "Banana", "Laranja"]; // Array
$nulo = null; // Nulo

echo "Nome: " . $nome . "\n";
echo "Idade: " . $idade . "\n";
echo "Altura: " . $altura . "\n";
echo "É estudante? " . ($isEstudante ? 'Sim' : 'Não') . "\n";
print_r($frutas);
var_dump($nulo);
?>
```

## 2. Controle de Fluxo

### 2.1. Condicionais (if, elseif, else)

As estruturas condicionais permitem que você execute blocos de código diferentes com base em certas condições.

```php
<?php
$nota = 7;

if ($nota >= 7) {
    echo "Aprovado!\n";
} elseif ($nota >= 5) {
    echo "Recuperação!\n";
} else {
    echo "Reprovado!\n";
}

$idade = 18;
$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $status . "\n";
?>
```

### 2.2. Switch Case

O `switch` é útil quando você tem múltiplas condições baseadas no valor de uma única variável.

```php
<?php
$diaDaSemana = 3;

switch ($diaDaSemana) {
    case 1:
        echo "Domingo\n";
        break;
    case 2:
        echo "Segunda-feira\n";
        break;
    case 3:
        echo "Terça-feira\n";
        break;
    default:
        echo "Dia inválido\n";
        break;
}
?>
```

### 2.3. Loops (for, while, do-while, foreach)

Loops são usados para executar um bloco de código repetidamente.

#### For Loop

```php
<?php
for ($i = 0; $i < 5; $i++) {
    echo "O número é: " . $i . "\n";
}
?>
```

#### While Loop

```php
<?php
$i = 0;
while ($i < 5) {
    echo "O número é: " . $i . "\n";
    $i++;
}
?>
```

#### Do-While Loop

```php
<?php
$i = 0;
do {
    echo "O número é: " . $i . "\n";
    $i++;
} while ($i < 5);
?>
```

#### Foreach Loop (para arrays)

```php
<?php
$cores = ["Vermelho", "Verde", "Azul"];
foreach ($cores as $cor) {
    echo "Cor: " . $cor . "\n";
}

$aluno = [
    "nome" => "Maria",
    "idade" => 22,
    "curso" => "Engenharia"
];
foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . "\n";
}
?>
```

## 3. Arrays

Arrays são estruturas de dados que permitem armazenar múltiplos valores em uma única variável. Podem ser indexados numericamente ou associativamente.

```php
<?php
// Array indexado numericamente
$frutas = ["Maçã", "Banana", "Laranja"];
echo $frutas[0] . "\n"; // Saída: Maçã

// Adicionar elemento
$frutas[] = "Uva";
print_r($frutas);

// Array associativo
$pessoa = [
    "nome" => "Carlos",
    "idade" => 25,
    "cidade" => "São Paulo"
];
echo $pessoa["nome"] . "\n"; // Saída: Carlos

// Modificar elemento
$pessoa["idade"] = 26;
print_r($pessoa);

// Array multidimensional
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matriz[1][1] . "\n"; // Saída: 5
?>
```

## 4. Funções

Funções são blocos de código reutilizáveis que executam uma tarefa específica. Elas ajudam a organizar o código e evitar repetição.

### 4.1. Criação de Funções

```php
<?php
function saudacao($nome) {
    return "Olá, " . $nome . "!";
}

echo saudacao("Ana") . "\n";

function somar($num1, $num2) {
    return $num1 + $num2;
}

$resultado = somar(10, 5);
echo "A soma é: " . $resultado . "\n";

// Função com valor padrão para parâmetro
function boasVindas($nome = "Visitante") {
    echo "Bem-vindo(a), " . $nome . "!\n";
}

boasVindas(); // Saída: Bem-vindo(a), Visitante!
boasVindas("Pedro"); // Saída: Bem-vindo(a), Pedro!
?>
```

### 4.2. Funções Nativas Úteis

O PHP possui uma vasta biblioteca de funções nativas. Aqui estão algumas úteis:

*   `strlen()`: Retorna o comprimento de uma string.
*   `str_replace()`: Substitui todas as ocorrências de uma substring por outra.
*   `trim()`: Remove espaços em branco (ou outros caracteres) do início e fim de uma string.
*   `explode()`: Divide uma string em um array de strings.
*   `implode()`: Junta elementos de um array em uma string.
*   `date()`: Formata uma data/hora local.
*   `rand()`: Gera um número inteiro aleatório.
*   `count()`: Retorna o número de elementos em um array.
*   `array_push()`: Adiciona um ou mais elementos ao final de um array.
*   `isset()`: Verifica se uma variável está definida e não é `null`.
*   `empty()`: Verifica se uma variável está vazia (0, "", null, false, array vazio).

```php
<?php
$texto = "  Olá Mundo!  ";
echo "Comprimento: " . strlen($texto) . "\n";
echo "Substituído: " . str_replace("Mundo", "PHP", $texto) . "\n";
echo "Trimmed: '" . trim($texto) . "'\n";

$frase = "PHP é uma linguagem poderosa";
$palavras = explode(" ", $frase);
print_r($palavras);

$novaFrase = implode("-", $palavras);
echo $novaFrase . "\n";

echo "Data atual: " . date("d/m/Y H:i:s") . "\n";
echo "Número aleatório: " . rand(1, 100) . "\n";

$numeros = [1, 2, 3, 4, 5];
echo "Quantidade de números: " . count($numeros) . "\n";
array_push($numeros, 6, 7);
print_r($numeros);

$variavel = "";
if (isset($variavel)) {
    echo "Variável está definida.\n";
}
if (empty($variavel)) {
    echo "Variável está vazia.\n";
}
?>
```

## 5. Hash de Senha

É crucial armazenar senhas de forma segura, utilizando funções de hash como `password_hash()` e `password_verify()`.

```php
<?php
$senhaPura = "minhaSenhaSecreta123";

// Gerar o hash da senha
$senhaHash = password_hash($senhaPura, PASSWORD_DEFAULT);
echo "Hash da senha: " . $senhaHash . "\n";

// Verificar a senha
$senhaDigitada = "minhaSenhaSecreta123";
if (password_verify($senhaDigitada, $senhaHash)) {
    echo "Senha correta!\n";
} else {
    echo "Senha incorreta!\n";
}

$senhaErrada = "outraSenha";
if (password_verify($senhaErrada, $senhaHash)) {
    echo "Senha correta!\n";
} else {
    echo "Senha incorreta! (esperado)\n";
}
?>
```

## 6. CRUD Básico com Conexão SQL (MySQLi)

Este exemplo demonstra operações CRUD (Create, Read, Update, Delete) básicas usando MySQLi para conexão com um banco de dados MySQL. Você precisará de um servidor MySQL rodando e um banco de dados chamado `meubanco` com uma tabela `usuarios`.

**Estrutura da Tabela `usuarios`:**

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);
```

```php
<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = ""; // Sua senha do MySQL
$dbname = "meubanco";

// 1. Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!\n";

// 2. CREATE (Inserir dados)
$nome = "Fulano de Tal";
$email = "fulano@example.com";

$sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $email);

if ($stmt->execute()) {
    echo "Novo registro criado com sucesso!\n";
} else {
    echo "Erro ao criar registro: " . $stmt->error . "\n";
}
$stmt->close();

// 3. READ (Ler dados)
echo "\n--- Usuários Cadastrados ---\n";
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "\n";
    }
} else {
    echo "Nenhum usuário encontrado.\n";
}

// 4. UPDATE (Atualizar dados)
$idParaAtualizar = 1; // Supondo que o ID 1 exista
$novoNome = "Fulano Atualizado";
$novoEmail = "fulano.atualizado@example.com";

$sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $novoNome, $novoEmail, $idParaAtualizar);

if ($stmt->execute()) {
    echo "\nRegistro atualizado com sucesso!\n";
} else {
    echo "Erro ao atualizar registro: " . $stmt->error . "\n";
}
$stmt->close();

// 5. DELETE (Deletar dados)
$idParaDeletar = 2; // Supondo que o ID 2 exista

$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idParaDeletar);

if ($stmt->execute()) {
    echo "Registro deletado com sucesso!\n";
} else {
    echo "Erro ao deletar registro: " . $stmt->error . "\n";
}
$stmt->close();

// Fechar conexão
$conn->close();
?>
```

## 7. Classes e Instanciação (Programação Orientada a Objetos - POO)

POO é um paradigma de programação que organiza o software em torno de objetos, que são instâncias de classes. Classes são moldes para criar objetos.

```php
<?php
class Carro {
    // Propriedades (atributos)
    public $marca;
    public $modelo;
    public $ano;

    // Construtor: método chamado quando um objeto é criado
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Métodos (comportamentos)
    public function exibirDetalhes() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Ano: " . $this->ano . "\n";
    }

    public function ligar() {
        return "O carro " . $this->modelo . " está ligado.\n";
    }
}

// Instanciação de objetos (criação de objetos a partir da classe)
$meuCarro = new Carro("Toyota", "Corolla", 2022);
$outroCarro = new Carro("Honda", "Civic", 2023);

// Acessar propriedades e métodos
echo $meuCarro->exibirDetalhes();
echo $meuCarro->ligar();

echo $outroCarro->exibirDetalhes();
echo $outroCarro->ligar();

// Herança: uma classe pode herdar propriedades e métodos de outra
class CarroEsportivo extends Carro {
    public $velocidadeMaxima;

    public function __construct($marca, $modelo, $ano, $velocidadeMaxima) {
        parent::__construct($marca, $modelo, $ano);
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    public function acelerar() {
        return "O carro esportivo " . $this->modelo . " está acelerando a " . $this->velocidadeMaxima . " km/h!\n";
    }
}

$ferrari = new CarroEsportivo("Ferrari", "488 GTB", 2024, 330);
echo $ferrari->exibirDetalhes();
echo $ferrari->acelerar();
?>
```

## 8. Outros Conceitos Básicos

### 8.1. Comentários

Comentários são usados para explicar o código e são ignorados pelo interpretador PHP.

```php
<?php
// Este é um comentário de uma linha

/*
Este é um comentário
de múltiplas linhas
*/

$variavel = 10; // Comentário no final da linha
?>
```

### 8.2. Inclusão de Arquivos

Você pode incluir outros arquivos PHP em seu script usando `include` ou `require`.

*   `include`: Gera um aviso (`E_WARNING`) se o arquivo não for encontrado, mas o script continua a execução.
*   `require`: Gera um erro fatal (`E_ERROR`) e interrompe a execução do script se o arquivo não for encontrado.
*   `include_once` e `require_once`: Garantem que o arquivo seja incluído apenas uma vez.

```php
<?php
// Exemplo de arquivo 'config.php'
// <?php
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// ?>

// include 'config.php'; // Inclui o arquivo
// echo DB_HOST; // Acessa uma constante definida em config.php

// require 'funcoes.php'; // Exige que o arquivo exista
?>
```

### 8.3. Superglobais

Variáveis superglobais são arrays internos que estão sempre disponíveis em todos os escopos. Exemplos:

*   `$_GET`: Variáveis passadas via URL (método GET).
*   `$_POST`: Variáveis passadas via formulário (método POST).
*   `$_REQUEST`: Contém o conteúdo de `$_GET`, `$_POST` e `$_COOKIE`.
*   `$_SESSION`: Variáveis de sessão.
*   `$_SERVER`: Informações sobre o servidor e o ambiente de execução.

```php
<?php
// Exemplo com $_GET (URL: script.php?nome=Alice&idade=30)
if (isset($_GET['nome'])) {
    echo "Olá, " . $_GET['nome'] . "! Você tem " . $_GET['idade'] . " anos.\n";
}

// Exemplo com $_POST (de um formulário HTML)
/*
<form method="post" action="script.php">
    <input type="text" name="usuario">
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
</form>
*/
if (isset($_POST['usuario'])) {
    echo "Usuário: " . $_POST['usuario'] . "\n";
    echo "Senha (não armazene assim!): " . $_POST['senha'] . "\n";
}

echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "\n";
?>
```

## 9. Sessões e Cookies

Sessões e cookies são mecanismos para armazenar dados do usuário entre diferentes requisições HTTP, permitindo manter o estado da aplicação.

### 9.1. Sessões

Sessões armazenam dados no servidor, e um ID de sessão é enviado ao cliente (geralmente via cookie) para identificar a sessão. Para usar sessões, você deve iniciar a sessão com `session_start()` no início de cada script que for utilizá-la.

```php
<?php
// Inicia a sessão
session_start();

// Define uma variável de sessão
$_SESSION["usuario_logado"] = "admin";
$_SESSION["carrinho"] = ["item1", "item2"];

echo "Variável de sessão definida.\n";

// Para acessar uma variável de sessão em outra página (ou após um refresh):
// Certifique-se de que session_start() esteja no topo da página
if (isset($_SESSION["usuario_logado"])) {
    echo "Usuário logado: " . $_SESSION["usuario_logado"] . "\n";
    print_r($_SESSION["carrinho"]);
}

// Para remover uma variável de sessão específica
// unset($_SESSION["carrinho"]);

// Para destruir todas as variáveis de sessão
// session_unset();

// Para destruir a sessão completamente
// session_destroy();
?>
```

### 9.2. Cookies

Cookies armazenam dados diretamente no navegador do cliente. Eles são úteis para lembrar preferências do usuário, como idioma ou tema, ou para manter o usuário logado por um período.

Para definir um cookie, use a função `setcookie()`. Ela deve ser chamada antes de qualquer saída HTML.

```php
<?php
// Define um cookie chamado "nome_usuario" com o valor "Maria" que expira em 1 hora
setcookie("nome_usuario", "Maria", time() + 3600, "/"); // 3600 segundos = 1 hora

// Define um cookie para lembrar o idioma preferido por 30 dias
setcookie("idioma_preferido", "pt-BR", time() + (86400 * 30), "/"); // 86400 segundos = 1 dia

echo "Cookies definidos.\n";

// Para acessar um cookie
if (isset($_COOKIE["nome_usuario"])) {
    echo "Bem-vindo(a) de volta, " . $_COOKIE["nome_usuario"] . "!\n";
}

if (isset($_COOKIE["idioma_preferido"])) {
    echo "Seu idioma preferido é: " . $_COOKIE["idioma_preferido"] . "\n";
}

// Para deletar um cookie, defina seu tempo de expiração para o passado
// setcookie("nome_usuario", "", time() - 3600, "/");
// echo "Cookie 'nome_usuario' deletado.\n";
?>
```
Este guia serve como um ponto de partida para aprender PHP. Para aprofundar seus conhecimentos, consulte a documentação oficial do PHP [1].

## Referências

[1] [Documentação Oficial do PHP](https://www.php.net/manual/pt_BR/)
[2] [Sessões PHP](https://www.php.net/manual/pt_BR/features.sessions.php)
[3] [Cookies PHP](https://www.php.net/manual/pt_BR/features.cookies.php)