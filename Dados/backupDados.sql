USE backupDados;

CREATE TABLE cliente (

    id INT PRIMARY KEY NOT NULL,
    codigoLiberacao int(11) NOT NULL,
    cpf_cnpj varchar(30) NOT NULL,
    situacao varchar(30) NOT NULL,
    nomeEmpresa varchar(250) NOT NULL,
    acao varchar(30) NOT NULL,
    qntCliente int(11) NOT NULL,
    dateBackup varchar(15) NOT NULL,
    id_usuario int(11) NOT NULL,

);

CREATE TABLE usuario(

   id_usuario INT PRIMARY KEY NOT NULL,
   funcName varchar(500) NOT NULL,
   funcEmail varchar(400) NOT NULL,
   perfil varchar(400) NOT NULL,
   funcUsername varchar(400) NOT NULL,
   funcSenha varchar(400) NOT NULL
)


ALTER TABLE cliente ADD CONSTRAINT id_usuario FOREIGN KEY ( id_usuario ) REFERENCES usuario ( id_usuario ) ;

ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
 