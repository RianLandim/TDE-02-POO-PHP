-- CreateTable
CREATE TABLE `Rota` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `distancia` VARCHAR(191) NOT NULL,
    `partida` VARCHAR(191) NOT NULL,
    `destingo` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Aeronave` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `model` VARCHAR(191) NOT NULL,
    `ano_fabricacao` INTEGER NOT NULL,
    `numero_assentos` INTEGER NOT NULL,
    `outras_informacoes` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Tripulacao` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(191) NOT NULL,
    `funcao` VARCHAR(191) NOT NULL,
    `horario` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Reserva` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `cancelada_as` VARCHAR(191) NULL,
    `voo_id` INTEGER NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Voo` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `saida` VARCHAR(191) NOT NULL,
    `chegada` VARCHAR(191) NOT NULL,
    `tripulacao_id` INTEGER NULL,
    `rota_id` INTEGER NULL,
    `aeronave_id` INTEGER NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Checkin` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `malas` INTEGER NOT NULL,
    `peso_malas` DOUBLE NOT NULL,
    `bagagem_de_mao` BOOLEAN NOT NULL,
    `peso_bagagem_de_mao` DOUBLE NOT NULL,
    `voo_id` INTEGER NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- AddForeignKey
ALTER TABLE `Reserva` ADD CONSTRAINT `Reserva_voo_id_fkey` FOREIGN KEY (`voo_id`) REFERENCES `Voo`(`id`) ON DELETE SET NULL ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Voo` ADD CONSTRAINT `Voo_tripulacao_id_fkey` FOREIGN KEY (`tripulacao_id`) REFERENCES `Tripulacao`(`id`) ON DELETE SET NULL ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Voo` ADD CONSTRAINT `Voo_rota_id_fkey` FOREIGN KEY (`rota_id`) REFERENCES `Rota`(`id`) ON DELETE SET NULL ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Voo` ADD CONSTRAINT `Voo_aeronave_id_fkey` FOREIGN KEY (`aeronave_id`) REFERENCES `Aeronave`(`id`) ON DELETE SET NULL ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Checkin` ADD CONSTRAINT `Checkin_voo_id_fkey` FOREIGN KEY (`voo_id`) REFERENCES `Voo`(`id`) ON DELETE SET NULL ON UPDATE CASCADE;
