<?php
// src/VF/BlogBundle/DataFixtures/ORM/LoadCategory.php

namespace VF\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VF\BlogBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
	  'Famille',
      'Administration',
      'Entretien maison',
	  'Eau/Electricite/Gaz',
      'Transports',
      'Sports',
      'Lieux',
	  'Pour manger',
	  'Achats',
	  'Foulon',
	  'Livre d\'or'
	  
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $category = new Category();
      $category->setName($name);

      // On la persiste
      $manager->persist($category);
    }

    // On déclenche l\'enregistrement de toutes les catégories
    $manager->flush();
  }
}