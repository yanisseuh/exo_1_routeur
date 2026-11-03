<?php
class ModelVendeur{
    private PDO $pdo;

    public function __construct(PDO $newPDO)
    {
        $this->pdo = $newPDO;
    }

    public function findAll(): array{
        $request = $this->pdo->prepare(
            'SELECT nom_vendeur, prenom_vendeur FROM vendeur'
        );
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>