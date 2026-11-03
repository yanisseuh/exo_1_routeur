<?php
class ViewProduit
{
private array $data = [];

public function getData(): array
{
    return $this->data;
}

public function setData(array $newData): self
{
    $this->data = $newData;
    return $this;
}
public function display(): void{
    ?> <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Liste des produits</title>
        </head>

        <body>

            <nav>
                <a href="index.php?page=produits">Produits</a>
                <a href="index.php?page=vendeurs">Vendeurs</a>
            </nav>

            <h1>Liste des produits</h1>

            <ul>
                <?php foreach ($this->getData() as $produit): ?>

                    <li>
                        <?= htmlspecialchars(
                            $produit['nom_produit'] . ' - ' .
                            $produit['nom_categorie']
                        ) ?>
                    </li>

                <?php endforeach; ?>
            </ul>

        </body>
        </html>

        <?php
    }
}

