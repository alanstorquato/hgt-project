<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190826010241 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE cartoes_credito_id_cartao_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE eventos_id_evento_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pedidos_id_pedido_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE setores_id_setor_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE faixas_etarias_faixa_etaria_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE categoria_id_categoria_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE itens_pedidos_id_item_pedido_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE usuarios_id_usuario_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE anuncios_id_anuncio_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE produtores_id_produtor_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tickets_id_ticket_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE atracoes_id_atracao_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE enderecos_id_endereco_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE locais_id_local_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE carteira_id_carteira_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cartoes_credito (id_cartao INT NOT NULL, nro_cartao BIGINT NOT NULL, nome_titular VARCHAR(255) NOT NULL, dt_vencimento DATE NOT NULL, cod_seguraca INT NOT NULL, PRIMARY KEY(id_cartao))');
        $this->addSql('CREATE TABLE eventos (id_evento INT NOT NULL, data_pubicacao DATE NOT NULL, imagem VARCHAR(255) NOT NULL, dt_inicio_venda DATE NOT NULL, hora_inicio_venda TIME(0) WITHOUT TIME ZONE NOT NULL, hora_fim_evento TIME(0) WITHOUT TIME ZONE NOT NULL, descricao TEXT NOT NULL, visualizacoes BIGINT NOT NULL, PRIMARY KEY(id_evento))');
        $this->addSql('CREATE TABLE pedidos (id_pedido INT NOT NULL, is_valido BOOLEAN NOT NULL, PRIMARY KEY(id_pedido))');
        $this->addSql('CREATE TABLE setores (id_setor INT NOT NULL, nome VARCHAR(255) NOT NULL, capaxidade_max BIGINT NOT NULL, preco DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_setor))');
        $this->addSql('CREATE TABLE faixas_etarias (faixa_etaria INT NOT NULL, nome VARCHAR(255) NOT NULL, descricao TEXT NOT NULL, PRIMARY KEY(faixa_etaria))');
        $this->addSql('CREATE TABLE categoria (id_categoria INT NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id_categoria))');
        $this->addSql('CREATE TABLE itens_pedidos (id_item_pedido INT NOT NULL, PRIMARY KEY(id_item_pedido))');
        $this->addSql('CREATE TABLE usuarios (id_usuario INT NOT NULL, primeiro_nome VARCHAR(255) NOT NULL, sobrenome VARCHAR(255) NOT NULL, dt_nascimento DATE NOT NULL, cpf VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telefone VARCHAR(255) NOT NULL, img_perfil VARCHAR(255) NOT NULL, usuario VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, logradouro VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, complemento VARCHAR(255) NOT NULL, cep VARCHAR(255) NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(255) NOT NULL, PRIMARY KEY(id_usuario))');
        $this->addSql('CREATE TABLE anuncios (id_anuncio INT NOT NULL, preco DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_anuncio))');
        $this->addSql('CREATE TABLE produtores (id_produtor INT NOT NULL, nome VARCHAR(255) NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(2) NOT NULL, cnpj VARCHAR(255) NOT NULL, nome_responsavel VARCHAR(255) NOT NULL, cnpj_responsavel VARCHAR(255) NOT NULL, telefone_principal VARCHAR(255) NOT NULL, telefone_secundario VARCHAR(255) NOT NULL, PRIMARY KEY(id_produtor))');
        $this->addSql('CREATE TABLE tickets (id_ticket INT NOT NULL, id_titular INT NOT NULL, id_evento INT NOT NULL, is_meia_entrada BOOLEAN NOT NULL, PRIMARY KEY(id_ticket))');
        $this->addSql('CREATE INDEX IDX_54469DF4A7BEB2B7 ON tickets (id_titular)');
        $this->addSql('CREATE TABLE atracoes (id_atracao INT NOT NULL, nome VARCHAR(255) NOT NULL, rede_sociais VARCHAR(255) NOT NULL, PRIMARY KEY(id_atracao))');
        $this->addSql('CREATE TABLE enderecos (id_endereco INT NOT NULL, logradouro VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, complemento VARCHAR(255) NOT NULL, cep BIGINT NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(2) NOT NULL, PRIMARY KEY(id_endereco))');
        $this->addSql('CREATE TABLE locais (id_local INT NOT NULL, nome VARCHAR(255) NOT NULL, uf VARCHAR(2) NOT NULL, cidade VARCHAR(255) NOT NULL, endereco VARCHAR(255) NOT NULL, bairro VARCHAR(255) NOT NULL, cep VARCHAR(255) NOT NULL, capaxidade_maxima BIGINT NOT NULL, PRIMARY KEY(id_local))');
        $this->addSql('CREATE TABLE carteira (id_carteira INT NOT NULL, saldo DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_carteira))');
        $this->addSql('ALTER TABLE tickets ADD CONSTRAINT FK_54469DF4A7BEB2B7 FOREIGN KEY (id_titular) REFERENCES usuarios (id_usuario) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE tickets DROP CONSTRAINT FK_54469DF4A7BEB2B7');
        $this->addSql('DROP SEQUENCE cartoes_credito_id_cartao_seq CASCADE');
        $this->addSql('DROP SEQUENCE eventos_id_evento_seq CASCADE');
        $this->addSql('DROP SEQUENCE pedidos_id_pedido_seq CASCADE');
        $this->addSql('DROP SEQUENCE setores_id_setor_seq CASCADE');
        $this->addSql('DROP SEQUENCE faixas_etarias_faixa_etaria_seq CASCADE');
        $this->addSql('DROP SEQUENCE categoria_id_categoria_seq CASCADE');
        $this->addSql('DROP SEQUENCE itens_pedidos_id_item_pedido_seq CASCADE');
        $this->addSql('DROP SEQUENCE usuarios_id_usuario_seq CASCADE');
        $this->addSql('DROP SEQUENCE anuncios_id_anuncio_seq CASCADE');
        $this->addSql('DROP SEQUENCE produtores_id_produtor_seq CASCADE');
        $this->addSql('DROP SEQUENCE tickets_id_ticket_seq CASCADE');
        $this->addSql('DROP SEQUENCE atracoes_id_atracao_seq CASCADE');
        $this->addSql('DROP SEQUENCE enderecos_id_endereco_seq CASCADE');
        $this->addSql('DROP SEQUENCE locais_id_local_seq CASCADE');
        $this->addSql('DROP SEQUENCE carteira_id_carteira_seq CASCADE');
        $this->addSql('DROP TABLE cartoes_credito');
        $this->addSql('DROP TABLE eventos');
        $this->addSql('DROP TABLE pedidos');
        $this->addSql('DROP TABLE setores');
        $this->addSql('DROP TABLE faixas_etarias');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP TABLE itens_pedidos');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE anuncios');
        $this->addSql('DROP TABLE produtores');
        $this->addSql('DROP TABLE tickets');
        $this->addSql('DROP TABLE atracoes');
        $this->addSql('DROP TABLE enderecos');
        $this->addSql('DROP TABLE locais');
        $this->addSql('DROP TABLE carteira');
    }
}
