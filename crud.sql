CREATE TABLE produto (
  id_produto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_produto VARCHAR(100) NULL,
  preco VARCHAR(15) NULL,
  peso_liquido VARCHAR(15) NULL,
  validade DATE NULL,
  lote VARCHAR(15) NULL,
  vezes_comprado INTEGER UNSIGNED NULL,
  valor_energetico VARCHAR(15) NULL,
  carboidratos VARCHAR(15) NULL,
  proteinas VARCHAR(15) NULL,
  gorduras_totais VARCHAR(15) NULL,
  gorduras_saturadas VARCHAR(15) NULL,
  gorduras_trans VARCHAR(15) NULL,
  fibra_alimentar VARCHAR(15) NULL,
  sodio VARCHAR(15) NULL,
  PRIMARY KEY(id_produto)
);

