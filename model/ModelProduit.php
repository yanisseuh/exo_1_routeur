<?php
class ModelProduit
{
    private \PDO $pdo;

    public function __construct(\PDO $newPDO)
    {
        $this->pdo = $newPDO;
    }

    

    public function findAll(): array
    {
        try {
            $request = $this->pdo->prepare(
                'SELECT p.id_produit, p.nom_produit, p.prix_produit, p.stock_produit, c.nom_categorie FROM produit p INNER JOIN categorie c ON p.id_categorie = c.id_categorie'

            );
            $request -> execute();

            return $request->fetchAll(PDO::FETCH_ASSOC); 
        }
        catch (PDOException $error) {
            die($error -> getMessage());
        }
    }
}
?>