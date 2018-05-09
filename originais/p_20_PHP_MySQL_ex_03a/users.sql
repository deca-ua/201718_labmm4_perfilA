SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';



-- -----------------------------------------------------
-- Table `roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `roles` ;

CREATE TABLE IF NOT EXISTS `roles` (
  `id_roles` INT(11) NOT NULL AUTO_INCREMENT,
  `roles_descricao` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id_roles`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `username` VARCHAR(20) NOT NULL,
  `password_hash` VARCHAR(256) NOT NULL,
  `date_creation` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ref_id_roles` INT(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id_users`),
  UNIQUE INDEX `username` (`username` ASC),
  INDEX `roles_id` (`ref_id_roles` ASC),
  CONSTRAINT `users_roles`
    FOREIGN KEY (`ref_id_roles`)
    REFERENCES `roles` (`id_roles`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `roles`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `roles` (`id_roles`, `roles_descricao`) VALUES (DEFAULT, 'Admnistrador');
INSERT INTO `roles` (`id_roles`, `roles_descricao`) VALUES (DEFAULT, 'Normal');

COMMIT;

