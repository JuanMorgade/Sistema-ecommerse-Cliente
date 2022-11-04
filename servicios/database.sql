CREATE TABLE PRODUCTO(
    codpro int not null AUTO_INCREMENT,
    nompro varchar(50) null,
    despro varchar(100) null,
    prepro numeric(6,2) null,
    estado int null,
    CONSTRAINT pk_producto
    PRIMARY KEY (codpro)

);                   


INSERT INTO PRODUCTO(nompro,despro,prepro,estado)
VALUES('Macarons', 'Ideal para hornear en cualquier Cocina','3500',1),
('Cakes','Ideal para principiantes!','5300',1),
('Alfajores','Mas ricos que los Jorgitos','2750',1);