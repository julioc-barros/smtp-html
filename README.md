# Criação de HTML para SMTP


## Projeto criado com o intuito de agilizar processos de criação de HTML para emails e geração de documentos.

Para a utilização desse projeto é necesspario as seguintes tecnologias:

* PHP 8.0 ou superior
* Composer
* Git 

O projeto está em desenvolvimento e qualquer alteração pode acarretar em erros, aguarde a versão final.


# Configuração

O arquivo de configuração fica na pasta **app\config**, contendo o arquivo **config.php** e uma subaspasta chamada de **env** contendo o arquivo final de configuração para ambiente local, homolação e produção.

## config.php

Faz uma validação através de uma variável para verificar qual arquivo será utilizado.

Mude o valor da variavel **$prod** para true se quiser carregar o arquivo de configuração de produção, caso queira o arquivo de configuração local, apenas mantenha a variavel = false.