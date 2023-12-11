# Data Factory

Este projeto foi criado com o intuito de obter uma base de dados com um grande número de registros para desenvolvimento de projetos em Excel e PowerBi, já que as bases de dados disponíveis na internet não atendiam minhas espectativas.

Esta massa de dados é criada por meio das factories, seeders e migrations do Laravel, que concebem as tabelas como também persistem os registros no banco o populando. Os registros são criados utilizando a biblioteca do Faker

Este projeto tem alguma lógica implementada nas Models para definir o relacionamento entre as tabelas e tb utilização dos métodos do Eloquent, mas não possue controllers ou rotas. Nas factories existe uma lógica para implementar a natureza dos registros do banco para garantir alguma harmonia nos dados, como pode ser observado em UserFactory; foi implementada uma lógica para o campo email ser populado com os mesmos dados do campo nome, como também os usuários masculinos terem nomes masculinos e vice-versa. Nos seeders foi definido os relacionamentos e quantidade de registros a serem criados.


[![](https://mermaid.ink/img/pako:eNp1ks9uwyAMxl8F-Zy-QK7dddqkapcJCXmx2yE1UBk4TEnefVBo1fQPnAw_vs_YnmDwxNADy5vFg-ConXYqr6_AEtQ8bzbzdA4MknAIHFSvNOT9iG2FyUYzoNAVqtgu-vxYLYWba2R-BB2t1RrW5Cr2YFvRT_GUhnjVbPFaVT1ntxj54MW-EjWhON8przN9Srb0X3OXOqFEYyO7e_-bi4Z-CJUCr75zQzXj2oUGQQcjy4iWcl-n8kRD_OWRNRSCeI_pGIvpklFM0e_-3AB9lMQdpBPl6rRhgH6Px5BPS1-9vNdZOY9MByd0395fmOUf9inBxQ?type=png)](https://mermaid.live/edit#pako:eNp1ks9uwyAMxl8F-Zy-QK7dddqkapcJCXmx2yE1UBk4TEnefVBo1fQPnAw_vs_YnmDwxNADy5vFg-ConXYqr6_AEtQ8bzbzdA4MknAIHFSvNOT9iG2FyUYzoNAVqtgu-vxYLYWba2R-BB2t1RrW5Cr2YFvRT_GUhnjVbPFaVT1ntxj54MW-EjWhON8przN9Srb0X3OXOqFEYyO7e_-bi4Z-CJUCr75zQzXj2oUGQQcjy4iWcl-n8kRD_OWRNRSCeI_pGIvpklFM0e_-3AB9lMQdpBPl6rRhgH6Px5BPS1-9vNdZOY9MByd0395fmOUf9inBxQ)


### Tecnologias Utilizadas

php 8.2
laravel 10

biblioteca faker:
https://fakerphp.github.io/



## ⚠️ Problemas enfrentados

Aleatoriamente o Faker pode repetir registros, dependendo da construção do banco isso pode quebrar a execução. No meu caso a tabela Users tem um campo email que só admite dados únicos.
