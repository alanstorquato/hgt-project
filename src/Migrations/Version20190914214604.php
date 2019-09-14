<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190914214604 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE CARTOES_CREDITO_id_cartao_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE EVENTOS_id_evento_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE PEDIDOS_id_pedido_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE SETORES_id_setor_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE FAIXAS_ETARIAS_id_faixa_etaria_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE CATEGORIAS_id_categoria_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE itens_pedidos_id_item_pedido_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE USUARIOS_id_usuario_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE ANUNCIOS_id_anuncio_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE PRODUTORES_id_produtor_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE TICKETS_id_ticket_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE ATRACOES_id_atracao_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE enderecos_id_endereco_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE FORMAS_PAGAMENTO_id_forma_pg_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE LOCAIS_id_local_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE CARTEIRAS_id_carteira_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE CARTOES_CREDITO (id_cartao INT NOT NULL, id_usuario INT NOT NULL, nro_cartao BIGINT NOT NULL, nome_titular VARCHAR(255) NOT NULL, dt_vencimento DATE NOT NULL, cod_seguranca INT NOT NULL, PRIMARY KEY(id_cartao))');
        $this->addSql('CREATE INDEX IDX_8B8DF66CFCF8192D ON CARTOES_CREDITO (id_usuario)');
        $this->addSql('CREATE TABLE EVENTOS (id_evento INT NOT NULL, id_produtor INT NOT NULL, id_categoria INT NOT NULL, data_publicacao DATE NOT NULL, imagem VARCHAR(255) NOT NULL, dt_inicio_evento DATE NOT NULL, dt_fim_evento DATE NOT NULL, dt_inicio_venda DATE NOT NULL, hora_inicio_evento TIME(0) WITHOUT TIME ZONE NOT NULL, hora_fim_evento TIME(0) WITHOUT TIME ZONE NOT NULL, descricao TEXT NOT NULL, visualizacoes INT NOT NULL, PRIMARY KEY(id_evento))');
        $this->addSql('CREATE INDEX IDX_546643952439F836 ON EVENTOS (id_produtor)');
        $this->addSql('CREATE INDEX IDX_54664395CE25AE0A ON EVENTOS (id_categoria)');
        $this->addSql('CREATE TABLE PEDIDOS (id_pedido INT NOT NULL, id_forma_pg INT NOT NULL, is_valido BOOLEAN NOT NULL, PRIMARY KEY(id_pedido))');
        $this->addSql('CREATE INDEX IDX_585332B06158CD1C ON PEDIDOS (id_forma_pg)');
        $this->addSql('CREATE TABLE SETORES (id_setor INT NOT NULL, id_evento INT NOT NULL, id_local INT NOT NULL, nome VARCHAR(255) NOT NULL, capacidade_max BIGINT NOT NULL, preco DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_setor))');
        $this->addSql('CREATE INDEX IDX_CE74D73B61B1BEE8 ON SETORES (id_evento)');
        $this->addSql('CREATE INDEX IDX_CE74D73B6553C9D8 ON SETORES (id_local)');
        $this->addSql('CREATE TABLE FAIXAS_ETARIAS (id_faixa_etaria INT NOT NULL, id_evento INT NOT NULL, nome VARCHAR(255) NOT NULL, descricao TEXT NOT NULL, PRIMARY KEY(id_faixa_etaria))');
        $this->addSql('CREATE INDEX IDX_303DA24361B1BEE8 ON FAIXAS_ETARIAS (id_evento)');
        $this->addSql('CREATE TABLE CATEGORIAS (id_categoria INT NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id_categoria))');
        $this->addSql('CREATE TABLE itens_pedidos (id_item_pedido INT NOT NULL, PRIMARY KEY(id_item_pedido))');
        $this->addSql('CREATE TABLE USUARIOS (id_usuario INT NOT NULL, primeiro_nome VARCHAR(255) NOT NULL, sobrenome VARCHAR(255) NOT NULL, dt_nascimento DATE NOT NULL, cpf VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telefone NUMERIC(10, 0) NOT NULL, img_perfil VARCHAR(255) NOT NULL, usuario VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, logradouro VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, complemento VARCHAR(255) NOT NULL, cep VARCHAR(255) NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(255) NOT NULL, PRIMARY KEY(id_usuario))');
        $this->addSql('CREATE TABLE ANUNCIOS (id_anuncio INT NOT NULL, id_usuario INT NOT NULL, id_ticket INT NOT NULL, preco DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_anuncio))');
        $this->addSql('CREATE INDEX IDX_5CC87E4AFCF8192D ON ANUNCIOS (id_usuario)');
        $this->addSql('CREATE INDEX IDX_5CC87E4AB197184E ON ANUNCIOS (id_ticket)');
        $this->addSql('CREATE TABLE PRODUTORES (id_produtor INT NOT NULL, nome VARCHAR(255) NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(2) NOT NULL, cnpj VARCHAR(255) NOT NULL, nome_responsavel VARCHAR(255) NOT NULL, cnpj_responsavel VARCHAR(255) NOT NULL, telefone_principal VARCHAR(255) NOT NULL, telefone_secundario VARCHAR(255) NOT NULL, PRIMARY KEY(id_produtor))');
        $this->addSql('CREATE TABLE TICKETS (id_ticket INT NOT NULL, id_titular INT NOT NULL, id_pedido INT NOT NULL, id_evento INT NOT NULL, is_meia_entrada BOOLEAN NOT NULL, PRIMARY KEY(id_ticket))');
        $this->addSql('CREATE INDEX IDX_6B0363EEA7BEB2B7 ON TICKETS (id_titular)');
        $this->addSql('CREATE INDEX IDX_6B0363EEE2DBA323 ON TICKETS (id_pedido)');
        $this->addSql('CREATE TABLE ATRACOES (id_atracao INT NOT NULL, id_evento INT NOT NULL, nome VARCHAR(255) NOT NULL, rede_sociais VARCHAR(255) NOT NULL, PRIMARY KEY(id_atracao))');
        $this->addSql('CREATE INDEX IDX_FE518E9B61B1BEE8 ON ATRACOES (id_evento)');
        $this->addSql('CREATE TABLE enderecos (id_endereco INT NOT NULL, logradouro VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, complemento VARCHAR(255) NOT NULL, cep BIGINT NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(2) NOT NULL, PRIMARY KEY(id_endereco))');
        $this->addSql('CREATE TABLE FORMAS_PAGAMENTO (id_forma_pg INT NOT NULL, id_cartao INT NOT NULL, id_carteira INT NOT NULL, id_usuario INT NOT NULL, PRIMARY KEY(id_forma_pg))');
        $this->addSql('CREATE INDEX IDX_ADB24E668EE2B9F3 ON FORMAS_PAGAMENTO (id_cartao)');
        $this->addSql('CREATE INDEX IDX_ADB24E6660A68414 ON FORMAS_PAGAMENTO (id_carteira)');
        $this->addSql('CREATE INDEX IDX_ADB24E66FCF8192D ON FORMAS_PAGAMENTO (id_usuario)');
        $this->addSql('CREATE TABLE LOCAIS (id_local INT NOT NULL, nome VARCHAR(255) NOT NULL, uf VARCHAR(2) NOT NULL, cidade VARCHAR(255) NOT NULL, endereco VARCHAR(255) NOT NULL, bairro VARCHAR(255) NOT NULL, cep VARCHAR(255) NOT NULL, capacidade_max BIGINT NOT NULL, PRIMARY KEY(id_local))');
        $this->addSql('CREATE TABLE CARTEIRAS (id_carteira INT NOT NULL, id_usuario INT NOT NULL, saldo DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_carteira))');
        $this->addSql('CREATE INDEX IDX_C5431F3AFCF8192D ON CARTEIRAS (id_usuario)');
        $this->addSql('ALTER TABLE CARTOES_CREDITO ADD CONSTRAINT FK_8B8DF66CFCF8192D FOREIGN KEY (id_usuario) REFERENCES USUARIOS (id_usuario) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE EVENTOS ADD CONSTRAINT FK_546643952439F836 FOREIGN KEY (id_produtor) REFERENCES PRODUTORES (id_produtor) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE EVENTOS ADD CONSTRAINT FK_54664395CE25AE0A FOREIGN KEY (id_categoria) REFERENCES CATEGORIAS (id_categoria) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE PEDIDOS ADD CONSTRAINT FK_585332B06158CD1C FOREIGN KEY (id_forma_pg) REFERENCES FORMAS_PAGAMENTO (id_forma_pg) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE SETORES ADD CONSTRAINT FK_CE74D73B61B1BEE8 FOREIGN KEY (id_evento) REFERENCES EVENTOS (id_evento) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE SETORES ADD CONSTRAINT FK_CE74D73B6553C9D8 FOREIGN KEY (id_local) REFERENCES LOCAIS (id_local) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE FAIXAS_ETARIAS ADD CONSTRAINT FK_303DA24361B1BEE8 FOREIGN KEY (id_evento) REFERENCES EVENTOS (id_evento) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ANUNCIOS ADD CONSTRAINT FK_5CC87E4AFCF8192D FOREIGN KEY (id_usuario) REFERENCES USUARIOS (id_usuario) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ANUNCIOS ADD CONSTRAINT FK_5CC87E4AB197184E FOREIGN KEY (id_ticket) REFERENCES TICKETS (id_ticket) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE TICKETS ADD CONSTRAINT FK_6B0363EEA7BEB2B7 FOREIGN KEY (id_titular) REFERENCES USUARIOS (id_usuario) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE TICKETS ADD CONSTRAINT FK_6B0363EEE2DBA323 FOREIGN KEY (id_pedido) REFERENCES PEDIDOS (id_pedido) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ATRACOES ADD CONSTRAINT FK_FE518E9B61B1BEE8 FOREIGN KEY (id_evento) REFERENCES EVENTOS (id_evento) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE FORMAS_PAGAMENTO ADD CONSTRAINT FK_ADB24E668EE2B9F3 FOREIGN KEY (id_cartao) REFERENCES CARTOES_CREDITO (id_cartao) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE FORMAS_PAGAMENTO ADD CONSTRAINT FK_ADB24E6660A68414 FOREIGN KEY (id_carteira) REFERENCES CARTEIRAS (id_carteira) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE FORMAS_PAGAMENTO ADD CONSTRAINT FK_ADB24E66FCF8192D FOREIGN KEY (id_usuario) REFERENCES USUARIOS (id_usuario) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE CARTEIRAS ADD CONSTRAINT FK_C5431F3AFCF8192D FOREIGN KEY (id_usuario) REFERENCES USUARIOS (id_usuario) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE FORMAS_PAGAMENTO DROP CONSTRAINT FK_ADB24E668EE2B9F3');
        $this->addSql('ALTER TABLE SETORES DROP CONSTRAINT FK_CE74D73B61B1BEE8');
        $this->addSql('ALTER TABLE FAIXAS_ETARIAS DROP CONSTRAINT FK_303DA24361B1BEE8');
        $this->addSql('ALTER TABLE ATRACOES DROP CONSTRAINT FK_FE518E9B61B1BEE8');
        $this->addSql('ALTER TABLE TICKETS DROP CONSTRAINT FK_6B0363EEE2DBA323');
        $this->addSql('ALTER TABLE EVENTOS DROP CONSTRAINT FK_54664395CE25AE0A');
        $this->addSql('ALTER TABLE CARTOES_CREDITO DROP CONSTRAINT FK_8B8DF66CFCF8192D');
        $this->addSql('ALTER TABLE ANUNCIOS DROP CONSTRAINT FK_5CC87E4AFCF8192D');
        $this->addSql('ALTER TABLE TICKETS DROP CONSTRAINT FK_6B0363EEA7BEB2B7');
        $this->addSql('ALTER TABLE FORMAS_PAGAMENTO DROP CONSTRAINT FK_ADB24E66FCF8192D');
        $this->addSql('ALTER TABLE CARTEIRAS DROP CONSTRAINT FK_C5431F3AFCF8192D');
        $this->addSql('ALTER TABLE EVENTOS DROP CONSTRAINT FK_546643952439F836');
        $this->addSql('ALTER TABLE ANUNCIOS DROP CONSTRAINT FK_5CC87E4AB197184E');
        $this->addSql('ALTER TABLE PEDIDOS DROP CONSTRAINT FK_585332B06158CD1C');
        $this->addSql('ALTER TABLE SETORES DROP CONSTRAINT FK_CE74D73B6553C9D8');
        $this->addSql('ALTER TABLE FORMAS_PAGAMENTO DROP CONSTRAINT FK_ADB24E6660A68414');
        $this->addSql('DROP SEQUENCE CARTOES_CREDITO_id_cartao_seq CASCADE');
        $this->addSql('DROP SEQUENCE EVENTOS_id_evento_seq CASCADE');
        $this->addSql('DROP SEQUENCE PEDIDOS_id_pedido_seq CASCADE');
        $this->addSql('DROP SEQUENCE SETORES_id_setor_seq CASCADE');
        $this->addSql('DROP SEQUENCE FAIXAS_ETARIAS_id_faixa_etaria_seq CASCADE');
        $this->addSql('DROP SEQUENCE CATEGORIAS_id_categoria_seq CASCADE');
        $this->addSql('DROP SEQUENCE itens_pedidos_id_item_pedido_seq CASCADE');
        $this->addSql('DROP SEQUENCE USUARIOS_id_usuario_seq CASCADE');
        $this->addSql('DROP SEQUENCE ANUNCIOS_id_anuncio_seq CASCADE');
        $this->addSql('DROP SEQUENCE PRODUTORES_id_produtor_seq CASCADE');
        $this->addSql('DROP SEQUENCE TICKETS_id_ticket_seq CASCADE');
        $this->addSql('DROP SEQUENCE ATRACOES_id_atracao_seq CASCADE');
        $this->addSql('DROP SEQUENCE enderecos_id_endereco_seq CASCADE');
        $this->addSql('DROP SEQUENCE FORMAS_PAGAMENTO_id_forma_pg_seq CASCADE');
        $this->addSql('DROP SEQUENCE LOCAIS_id_local_seq CASCADE');
        $this->addSql('DROP SEQUENCE CARTEIRAS_id_carteira_seq CASCADE');
        $this->addSql('DROP TABLE CARTOES_CREDITO');
        $this->addSql('DROP TABLE EVENTOS');
        $this->addSql('DROP TABLE PEDIDOS');
        $this->addSql('DROP TABLE SETORES');
        $this->addSql('DROP TABLE FAIXAS_ETARIAS');
        $this->addSql('DROP TABLE CATEGORIAS');
        $this->addSql('DROP TABLE itens_pedidos');
        $this->addSql('DROP TABLE USUARIOS');
        $this->addSql('DROP TABLE ANUNCIOS');
        $this->addSql('DROP TABLE PRODUTORES');
        $this->addSql('DROP TABLE TICKETS');
        $this->addSql('DROP TABLE ATRACOES');
        $this->addSql('DROP TABLE enderecos');
        $this->addSql('DROP TABLE FORMAS_PAGAMENTO');
        $this->addSql('DROP TABLE LOCAIS');
        $this->addSql('DROP TABLE CARTEIRAS');
    }
}
