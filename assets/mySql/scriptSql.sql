#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_clt     Int(10) NOT NULL AUTO_INCREMENT,
        nom_clt    Char (50) ,
        prenom_clt Char (50) ,
        email      Char (50) ,

	CONSTRAINT Client_PK PRIMARY KEY (id_clt)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type_Produit
#------------------------------------------------------------

CREATE TABLE Type_Produit(
        id_type_prod Int(10) NOT NULL AUTO_INCREMENT,

        CONSTRAINT Type_Produit_PK PRIMARY KEY (id_type_prod)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SousType
#------------------------------------------------------------

CREATE TABLE SousType(
        id_sousType  Int(10) NOT NULL AUTO_INCREMENT,
        nom_tag Char (25)
	,CONSTRAINT SousType_PK PRIMARY KEY (id_sousType)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Nav
#------------------------------------------------------------

CREATE TABLE Nav(
        id_Nav   Int(10) NOT NULL AUTO_INCREMENT,
        nomNav   Char (50) ,
        link_nav Char (255)
	,CONSTRAINT Nav_PK PRIMARY KEY (id_Nav)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SousNav
#------------------------------------------------------------

CREATE TABLE SousNav(
        id_SousNav   Int(10) NOT NULL AUTO_INCREMENT,
        nom_sousNav  Char (50) ,
        link_sousNav Char (255) ,
        id_Nav        Int (10) NOT NULL
	
        ,CONSTRAINT SousNav_PK PRIMARY KEY (id_SousNav)

	,CONSTRAINT SousNav_Nav_FK FOREIGN KEY (id_Nav) REFERENCES Nav(id_Nav)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Footer
#------------------------------------------------------------

CREATE TABLE Footer(
        champ1 Varchar (500) NOT NULL ,
        champ2 Varchar (500) ,
        link1  Varchar (100) ,
        link2  Varchar (100) ,
        link3  Varchar (100)
	,CONSTRAINT Footer_PK PRIMARY KEY (champ1)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Couleur
#------------------------------------------------------------

CREATE TABLE Couleur(
        id_couleur  Int(10) NOT NULL AUTO_INCREMENT,
        nom_couleur Char (50)
	,CONSTRAINT Couleur_PK PRIMARY KEY (id_couleur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Typo
#------------------------------------------------------------

CREATE TABLE Typo(
        id_Typo    Int(10) NOT NULL AUTO_INCREMENT,
        nom_typo   Char (50) ,
        class_typo Char (50)
	,CONSTRAINT Typo_PK PRIMARY KEY (id_Typo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type_taille
#------------------------------------------------------------

CREATE TABLE Type_taille(
        id_typeTaille  Int(10) NOT NULL AUTO_INCREMENT,
        nom_typeTaille Char (50) ,
	
        CONSTRAINT Type_taille_PK PRIMARY KEY (id_typeTaille)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        id_prod       Int(10) NOT NULL AUTO_INCREMENT,
        nom_prod      Char (50) ,

        desc_prod     Varchar (255) ,
        motcle        Varchar (255) ,
        image_prod    Varchar (50)  ,
            
        id_type_prod  Int (10) NOT NULL ,
        id_typeTaille Int (10) NOT NULL ,
	
        inverser Boolean  NOT NULL ,

        affichageHome Boolean  NOT NULL ,

        CONSTRAINT Produit_PK PRIMARY KEY (id_prod),

	CONSTRAINT Produit_Type_Produit_FK FOREIGN KEY (id_type_prod) REFERENCES Type_Produit(id_type_prod),
	CONSTRAINT Produit_Type_taille0_FK FOREIGN KEY (id_typeTaille) REFERENCES Type_taille(id_typeTaille)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Taille
#------------------------------------------------------------

CREATE TABLE Taille(
        id_Taille       Int(10) NOT NULL AUTO_INCREMENT,
        Taille          Char (20) ,
        id_typeTaille   Int (10) NOT NULL
	,CONSTRAINT Taille_PK PRIMARY KEY (id_Taille)

	,CONSTRAINT Taille_Type_taille_FK FOREIGN KEY (id_typeTaille) REFERENCES Type_taille(id_typeTaille)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Page
#------------------------------------------------------------

CREATE TABLE Page(
        nom_page Char (50) NOT NULL ,
        champ    Varchar (10000)
	,CONSTRAINT Page_PK PRIMARY KEY (nom_page)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        id_cmd Int(10)          NOT NULL AUTO_INCREMENT,
        date_cmd date           NOT NULL,
        payer  boolean          NOT NULL,
        etat   Char(20)         NOT NULL,

        id_clt Int(10) NOT NULL,

        CONSTRAINT Commande_PK  PRIMARY KEY (id_cmd),

        CONSTRAINT Commande_id_clt_Fk FOREIGN KEY (id_clt) REFERENCES Client(id_clt )

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Achat
#------------------------------------------------------------

CREATE TABLE Achat(
        qte             int(10) NOT NULL,
        choix_couleur   Char(50),
        choix_taille    Char(50),

        inverser Boolean  NOT NULL ,

        id_cmd          Int(10) NOT NULL,
        id_prod         Int(10) NOT NULL,

        CONSTRAINT Achat_PK PRIMARY KEY (id_cmd, id_prod, choix_couleur, choix_taille),

        CONSTRAINT Achat_id_cmd_FK      FOREIGN KEY (id_cmd)        REFERENCES Commande(id_cmd),
        CONSTRAINT Achat_id_prod_FK     FOREIGN KEY (id_prod)       REFERENCES Produit(id_prod)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit_Tag
#------------------------------------------------------------

CREATE TABLE Produit_Tag (
        id_sousType  Int (10)  NOT NULL,
        id_prod Int (10) NOT NULL,

        CONSTRAINT Produit_Tag_PK PRIMARY KEY (id_sousType, id_prod),

        CONSTRAINT Produit_Tag_id_sousType_FK   FOREIGN KEY (id_sousType)    REFERENCES SousType(id_sousType),
        CONSTRAINT Produit_Tag_id_prod_FK       FOREIGN KEY (id_prod)        REFERENCES Produit(id_prod)
)ENGINE=InnoDB;