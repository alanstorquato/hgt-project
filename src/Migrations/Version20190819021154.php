<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190819021154 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE usuarios (id_usuario INT AUTO_INCREMENT NOT NULL, primeiro_nome VARCHAR(255) NOT NULL, sobrenome VARCHAR(255) NOT NULL, dt_nascimento DATE NOT NULL, cpf VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telefone VARCHAR(255) NOT NULL, img_perfil VARCHAR(255) NOT NULL, usuario VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, logradouro VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, complemento VARCHAR(255) NOT NULL, cep VARCHAR(255) NOT NULL, cidade VARCHAR(255) NOT NULL, uf VARCHAR(255) NOT NULL, PRIMARY KEY(id_usuario)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tickets (id_ticket INT AUTO_INCREMENT NOT NULL, id_titular INT NOT NULL, id_evento INT NOT NULL, is_meia_entrada TINYINT(1) NOT NULL, INDEX IDX_54469DF4A7BEB2B7 (id_titular), PRIMARY KEY(id_ticket)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tickets ADD CONSTRAINT FK_54469DF4A7BEB2B7 FOREIGN KEY (id_titular) REFERENCES usuarios (id_usuario)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tickets DROP FOREIGN KEY FK_54469DF4A7BEB2B7');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE tickets');
    }
}
