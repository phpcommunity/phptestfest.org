---
layout: page
title: Como usar o docker-phpqa
date: 2017-07-10 08:35:43 +00:00
updated: 2017-07-24 22:22:00 +00:00
author:
    name: Bruno Ricardo Siqueira, Joao Paulo Vendramini Martins & Ivan Rosolen
    website: http://herdphp.org
    twitter: https://twitter.com/herdphp
image:
    url: /images/photos/lucas-gallone-228252.jpg
    alt: Colorful graffiti art
    title: Thousand Colors por Lucas Gallone
    credit: Fotografado por [Lucas Gallone](https://unsplash.com/photos/PVw_vtpCGaM).
summary: >
    Ferramentas docker para criar e rodar testes do [PHP-SRC](https://github.com/php/php-src) facilmente. A intenção dessa biblioteca é ajudar qualquer desenvolvedor
    PHP que for criar testes PHPT para a engine da linguagem e suas extensões core.
lang: pt
---
## Como instalar?

1. Você **precisa** ter o [docker][docker] instalado na sua máquina.

2. Execute nosso instalador:

````bash
curl -s https://raw.githubusercontent.com/herdphp/docker-phpqa/master/bin/installer.sh | bash
````

Comece a PHPTestar!!!

## Como usar?

### Para criar novos arquivos de teste PHPT

A ferramenta [generate-phpt][generate-phpt] embutida no `docker-phpqa` é uma ferramenta de desenvolvimento
[que existe dentro do repositório PHP-SRC][generate-phpt]. Sua utilização é bem simples e tem a intenção de inicializar a criação
do PHPT.

````
Usage:
phpqa generate [PHPT_DIR] -f <function_name> |-c <class_name> -m <method_name> -b|e|v [-s skipif:ini:clean:done] [-k win|notwin|64b|not64b] [-x ext]

Where:
-f function_name ................. Name of PHP function, eg cos
-c class name .....................Name of class, eg DOMDocument
-m method name ....................Name of method, eg createAttribute
-b ............................... Generate basic tests
-e ............................... Generate error tests
-v ............................... Generate variation tests
-s sections....................... Create optional sections, colon separated list
-k skipif key..................... Skipif option, only used if -s skipif is used.
-x extension.......................Skipif option, specify extension to check for
-h ............................... Print this message
````

Se você quiser visualizar a ajuda pode fazer assim:

````bash
phpqa generate -h
````

Se quiser criar um teste PHPT *básico* para a [função `ucfirst`][php-function-ucfirst]:

````bash
phpqa generate -f ucfirst -b
````

Será criado um arquivo PHPT modelo para a função ucfirst dentro do diretório PHPT padrão. Se quiser escolher
o diretório PHPT onde os arquivos serão criados, você pode passá-lo como o primeiro argumento do comando `generate`:

````bash
phpqa generate /path/to/phpt/dir -f ucfirst -b
````

### Como rodar seus testes criados em múltiplas versões do PHP

1. Escreva um teste em **qualquer pasta**;
2. Execute o comando `phpqa` passando como argumentos o caminho do arquivo (relativo ou absoluto) e a versão do PHP na qual o teste será rodado (72, 71, 70, 56, 55):

````bash
# sem uma versão o teste rodará no PHP 7.1
phpqa run phpt/examples/closure_061.phpt
# com uma versão o teste rodará nesse versão específica
phpqa run phpt/examples/closure_061.phpt 56
# você pode passar `all` como um segundo argumento e o teste rodará em todas as versões
phpqa run phpt/examples/closure_061.phpt all
````

## Versões do PHP disponíveis

PHP 5.5, 5.6, 7.0, 7.1 e 7.2 (Beta1) estão disponíveis com suporte total;

## Contribuição

Se você encontrar qualquer bug ou erro de escrita, sinta-se à vontade para [criar uma issue e/ou abrir um pull request][docker-phpqa]
com a solução.

[generate-phpt]: https://github.com/php/php-src/tree/master/scripts/dev/generate-phpt
[php-function-ucfirst]: http://php.net/manual/en/function.ucfirst.php
[docker-phpqa]: https://github.com/herdphp/docker-phpqa
[docker]: https://www.docker.com/community-edition
