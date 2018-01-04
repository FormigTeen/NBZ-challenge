# Desafio da agência NBZ

## Descrição

Desenvolva um painel de controle de vendas para um e-commerce, no painel devem haver 2 telas:
### 1. Dashboard 
Deve mostrar os últimos pedidos, valor total de vendas(receita), ticket médio, média diária e total de pedidos pagos(quantidade). 
### 2. Painel BI
Deve mostrar o valor total de vendas(receita), ticket médio, média diária, total de pedidos pagos(quantidade), produtos mais vendidos por receita e por quantidade, cidades com mais pedidos e que geraram mais receita e pedidos pagos feitos no cartão X boleto. 
   
## Requisitos obrigatórios
+  php7.0 >=
+  laravel 5.5
+  mysql
 
## Avaliação
Será avaliado a escrita do código. Códigos mais modularizados receberão mais pontos, ou seja, muito código repetido será avaliado negativamente. Códigos bem organizados e comentados receberão mais pontos. Utilização de boas práticas serão avaliadas positivamente. A estética da aplicação será avaliada positivamente e será critério desempate. 
   
## Observações
+  Não é necessário haver adição de vendas na aplicação, essas podem ser injetadas diretamente no banco de dados. 
+  Escreva, de forma clara, como se roda sua aplicação no README.md
   
## Entrega
Para entregar o desafio, basta fazer um fork desse repositorio e submeter um pull request. 

## Instruções de Uso

### Requisitos:
+ Vagrant >= 1.9
+ VirtualBox 5.2.x or 5.1.x ( Not Alpha or Beta )
+ Composer Global

0. Todos os Comandos serão na pasta 'test' e no Ambiente Linux

1. Atualize o Composer

```
composer update
```

2. Faça a configuração automática:

```
php vendor/bin/homestead make
```

3. Habilite o Acesso ao Endereço do Projeto adicionanado a seguinte linha no arquivo '/etc/hosts'

```
192.168.10.10  homestead.test
```

4. Gere uma Chave para a Aplicação

```
php artisan key:generate
```

5. Na pasta do Projeto, execute o seguinte comando para ligar a VM:

```
vagrant up
```

6. Faça as migrações:

```
php artisan migrate:refresh --seed
```

7. Com a VM ligada, acesse o seguinte endereço para visualizar a aplicação: [https://homestead.test](https://homestead.test)

8. Para desligar a VM, digite:

```
vagrant halt
```
