CREATE TABLE entrega (
    id_entrega serial primary key,
    titulo varchar(50) NOT NULL,
    descricao varchar(350) NOT NULL,
    entrega_concluida integer DEFAULT 0,
    prazo_entrega date
)

